<?php

namespace App\Http\Controllers\frontend;

use App\Contracts\Frontend\QuestionFrontendRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    protected $repository;

    public function __construct(QuestionFrontendRepositoryInterface $repo)
    {
        $this->repository = $repo;
    }

    public function index()
    {
        return view('frontend.index',$this->repository->index());
    }

    public function getAnswer(Request $request)
    {
        return $this->repository->getOneAnswer($request);
    }
}
