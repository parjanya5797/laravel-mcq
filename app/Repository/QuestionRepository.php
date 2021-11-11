<?php

namespace App\Repository;

use App\Contracts\QuestionRepositoryInterface;
use App\Http\Requests\QuestionsRequest;
use App\Models\Questions;

class QuestionRepository implements QuestionRepositoryInterface
{
    public function index()
    {
        $questions = $this->query()->latest()->paginate(5);
        return compact('questions');
    }

    public function create()
    {

    }

    public function store(QuestionsRequest $request)
    {
        $query = $this->query();
        $data = $request->validated();
        $data['uuid'] = \Str::uuid();
        $data['slug'] = \Str::slug($data['question']);
        $data['correct_answer'] = trimText($data['correct_answer'],'ans_');
        $query->create($data);
    }

    public function show(Questions $questions)
    {

    }

    public function edit(Questions $questions)
    {
        $item = $questions;
        return compact('item');
    }

    public function update(QuestionsRequest $request,Questions $question)
    {
        $data = $request->validated();
        $data['slug'] = \Str::slug($data['question']);
        $data['correct_answer'] = trimText($data['correct_answer'],'ans_');
        $question->update($data);
    }

    public function destroy(Questions $question)
    {
        $question->delete();
    }

    public function query()
    {
        return Questions::query();
    }
}
