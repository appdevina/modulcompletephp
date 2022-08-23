<?php

namespace App\Exports;

use App\Models\QuizHistory;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class QuizResultExport implements FromCollection, WithHeadings, WithMapping
{
    protected int $quizId;

    function __construct(int $quizId)
    {
        $this->quizId = $quizId;
    }

    public function collection()
    {
        return QuizHistory::with(['user' => function ($q) {
            $q->withTrashed();
        }])->where('quiz_id', $this->quizId)->withTrashed()->get();
    }

    public function headings(): array
    {
        return [
            'nama',
            'benar',
            'salah',
            'total pertanyaan',
            'nilai'
        ];
    }

    public function map($row): array
    {
        return [
            $row->user->full_name,
            $row->correct_answer,
            ($row->total_question - $row->correct_answer),
            $row->total_question,
            $row->value,
        ];
    }
}
