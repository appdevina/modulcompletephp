<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuizHistoryRequest;
use App\Http\Requests\UpdateQuizHistoryRequest;
use App\Models\QuizHistory;
use Illuminate\Http\Request;
use App\Models\QuizUserAnswer;
use Exception;

class QuizHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            if ($request->dateChart) {
                $dateChart = $request->dateChart;
                //dd($dateChart);

                $highestValue = QuizHistory::with('user')
                 ->selectRaw('user_id, sum(value) as highestValue')
                 ->where('created_at', 'LIKE', '%'.$dateChart.'%')
                 ->groupBy('user_id')
                 ->orderBy('highestValue', 'DESC')
                 ->limit(3)
                 ->get();

                 $lowestValue = QuizHistory::with('user')
                ->selectRaw('user_id, sum(value) as lowestValue')
                ->where('created_at', 'LIKE', '%'.$dateChart.'%')
                ->groupBy('user_id')
                ->orderBy('lowestValue', 'ASC')
                ->limit(3)
                ->get();

            } else {
                $highestValue = QuizHistory::with('user')
                ->selectRaw('user_id, sum(value) as highestValue')
                ->groupBy('user_id')
                ->orderBy('highestValue', 'DESC')
                ->limit(3)
                ->get();

                $lowestValue = QuizHistory::with('user')
                ->selectRaw('user_id, sum(value) as lowestValue')
                ->groupBy('user_id')
                ->orderBy('lowestValue', 'ASC')
                ->limit(3)
                ->get();
            }

            $highestName = [];
            $highestScore = [];
            $lowestName = [];
            $lowestScore = [];

            foreach($highestValue as $user){
                $highestName[] = $user->user->full_name;
                $highestScore[] = $user->highestValue;
            }

            foreach($lowestValue as $value){
                $lowestName[] = $value->user->full_name;
                $lowestScore[] = $value->lowestValue;
            }

            if ($highestName == [] || $highestScore == [] || $lowestName == [] || $lowestScore == []) {
                $highestName = ['null', 'null', 'null'];
                $highestScore = ['0','0','0'];
                $lowestName = ['null', 'null', 'null'];
                $lowestScore = ['0','0','0'];
            }

        } catch (Exception $e) {
            return redirect('quiz.history.index')->with(['error' => $e->getMessage()]);
        }

        return view('quiz.history.index', [
            'title' => 'Quiz History',
            'active' => 'quiz',
            'historys' => $request->search ? QuizHistory::withTrashed()
                ->with(['user', 'quiz.document'])
                ->whereHas('user', function ($q) use ($request) {
                    $q->withTrashed()
                        ->where('full_name', "like", '%' . $request->search . '%')
                        ->orWhere('username', "like", '%' . $request->search . '%');
                })->orderBy('created_at', 'DESC')->simplePaginate(100) : QuizHistory::with(['user', 'quiz.document'])->orderBy('created_at', 'DESC')
                ->simplePaginate(100),
             'highestValue' => $highestValue,
             'highestName' => $highestName,
             'highestScore' => $highestScore,
             'lowestValue' => $lowestValue,
             'lowestName' => $lowestName,
             'lowestScore' => $lowestScore,
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
     * @param  \App\Http\Requests\StoreQuizHistoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuizHistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuizHistory  $quizHistory
     * @return \Illuminate\Http\Response
     */
    public function show(QuizHistory $quizHistory)
    {
        return view('quiz.history.show', [
            'title' => 'Quiz History',
            'active' => 'quiz',
            'history' => $quizHistory::with(['user' => function ($q) {
                $q->withTrashed();
            }, 'quiz.document' => function ($q) {
                $q->withTrashed();
            }])
                ->first(),
            'questions' => QuizUserAnswer::with(['user' => function ($q) {
                $q->withTrashed();
            }, 'quiz.document' => function ($q) {
                $q->withTrashed();
            }, 'option' => function ($q) {
                $q->withTrashed();
            }, 'question.options' => function ($q) {
                $q->withTrashed();
            }])
                ->where('user_id', $quizHistory->user_id)
                ->where('quiz_id', $quizHistory->quiz_id)
                ->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuizHistory  $quizHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(QuizHistory $quizHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizHistoryRequest  $request
     * @param  \App\Models\QuizHistory  $quizHistory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuizHistoryRequest $request, QuizHistory $quizHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuizHistory  $quizHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuizHistory $quizHistory)
    {
        try {
            $historyAnswer = QuizUserAnswer::where('user_id',$quizHistory->user_id)->where('quiz_id',$quizHistory->quiz_id)->get();
            foreach ($historyAnswer as $historyAnswer) {
                $historyAnswer->forceDelete();
            }
            $quizHistory->forceDelete();
            return redirect('quiz/history')->with(['success' => 'Berhasil menghapus history']);
        } catch (Exception $e) {
            return back()->with(['error' => $e->getMessage()]);
        }
    }
}
