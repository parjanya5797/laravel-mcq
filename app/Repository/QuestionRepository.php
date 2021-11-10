<?php

namespace App\Repository;

use App\Contracts\QuestionRepositoryInterface;
use App\Http\Requests\QuestionsRequest;
use App\Models\Questions;

class Question implements QuestionRepositoryInterface
{
    public function index()
    {

    }

    public function create()
    {
        // return view("")
    }

    public function store(QuestionsRequest $request)
    {

    }

    public function show(Questions $id)
    {

    }

    public function edit(Questions $id)
    {

    }

    public function update(QuestionsRequest $request,Questions $id)
    {

    }

    public function destroy(Questions $questions)
    {

    }
}
