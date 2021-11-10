<?php

namespace App\Contracts;

use App\Models\Questions;
use App\Http\Requests\QuestionsRequest;

interface QuestionRepositoryInterface
{
    public function index();

    public function create();

    public function store(QuestionsRequest $request);

    public function show(Questions $questions);

    public function edit(Questions $questions);

    public function update(QuestionsRequest $request, Questions $questions);

    public function destroy(Questions $questions);
}
