<?php

namespace App\Repository\Frontend;

use App\Contracts\Frontend\QuestionFrontendRepositoryInterface;
use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionFrontendRepository implements QuestionFrontendRepositoryInterface
{
    public function index()
    {
        $question = $this->query()->inRandomOrder()->first();
        return compact('question');
    }

    public function query()
    {
        return Questions::query();
    }

    public function getOneAnswer(Request $request)
    {
        $question = $this->query()->where('uuid',$request->q_id)->first();
        if($question == null)
        {
            return response()->json(['error' => 'Invalid Question']);
        }
        $message = $request->pos == $question['correct_answer'] ?'Correct Answer':'Wrong Answer';
        return response()->json(['answer'=>$question['correct_answer'],'message' => $message]);
    }
}
