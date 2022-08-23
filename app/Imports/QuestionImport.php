<?php

namespace App\Imports;

use App\Models\QuizOption;
use App\Models\QuizQuestion;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;

class QuestionImport implements ToCollection,WithStartRow
{
    protected int $documentId;

    function __construct(int $documentId)
    {
        $this->documentId = $documentId;
    }


    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $question = QuizQuestion::create([
                'document_id' => $this->documentId,
                'question' => $row[0],
            ]);
            for ($i = 2; $i < 6; $i++) {
                QuizOption::create([
                    'quiz_question_id' => $question->id,
                    'content' => $row[$i],
                    'is_true' => $row[$i] == $row[1],
                ]);
            }
        }
    }

    public function startRow(): int
    {
        return 2;
    }
}
