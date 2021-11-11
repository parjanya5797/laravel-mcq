<?php

namespace App\Contracts\Frontend;

use App\Models\Questions;
use Illuminate\Http\Request;

interface QuestionFrontendRepositoryInterface
{
    public function index();

    public function query();

    public function getOneAnswer(Request $request);
}
