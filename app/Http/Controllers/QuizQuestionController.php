<?php

namespace App\Http\Controllers;

use App\Exports\QuizQuestionTemplate;
use App\Http\Requests\StoreQuizQuestionRequest;
use App\Http\Requests\UpdateQuizQuestionRequest;
use App\Imports\QuestionImport;
use App\Models\Document;
use App\Models\QuizQuestion;
use Exception;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class QuizQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('quiz.question.index', [
            'title' => 'Question',
            'active' => 'quiz',
            'documents' => Document::whereHas('question')->withTrashed()->filter()->get(),
            'questions' => QuizQuestion::with(['document.joblevel'])->withTrashed()->get(),
            'alldocs' => Document::doesntHave('question')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuizQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuizQuestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuizQuestion  $quizQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        return view('quiz.question.show', [
            'title' => 'Question',
            'active' => 'quiz',
            'questions' => $request->nonactive ?
                QuizQuestion::where('document_id', $id)
                ->withTrashed()
                ->whereNotNull('deleted_at')
                ->filter()
                ->get()
                :
                QuizQuestion::where('document_id', $id)
                ->filter()
                ->get(),
            'document' => Document::withTrashed()->find($id),
            'nonactive' => $request->nonactive
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuizQuestion  $quizQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(QuizQuestion $quizQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizQuestionRequest  $request
     * @param  \App\Models\QuizQuestion  $quizQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuizQuestionRequest $request, QuizQuestion $quizQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuizQuestion  $quizQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuizQuestion $quizQuestion)
    {
        try {
            $quizQuestion->delete();
            return back()->with(['success' => 'berhasil menonaktifkan question']);
        } catch (Exception $e) {
            return redirect('question')->with(['error' => $e->getMessage()]);
        }
    }

    public function restore($id)
    {
        try {
            $question = QuizQuestion::withTrashed()->find($id);
            $question->restore();
            return back()->with(['success' => 'berhasil mengaktifkan question']);
        } catch (Exception $e) {
            return redirect('question')->with(['error' => $e->getMessage()]);
        }
    }

    public function template()
    {
        return Excel::download(new QuizQuestionTemplate, 'quiz_question_template.xlsx');
    }

    public function import(Request $request)
    {
        try {
            $file = $request->file('file');
            $namaFile = $file->getClientOriginalName();
            $file->move(public_path('import'), $namaFile);

            Excel::import(new QuestionImport($request->document_id), public_path('/import/' . $namaFile));
            unlink(public_path('/import/' . $namaFile));
            return redirect('question')->with(['success' => 'berhasil import questions']);
        } catch (Exception $e) {
            return redirect('question')->with(['error' => $e->getMessage()]);
        }
    }
}
