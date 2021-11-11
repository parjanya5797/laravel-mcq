<?php

namespace App\Http\Controllers\backend;

use App\Contracts\QuestionRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionsRequest;
use App\Models\Questions;

class QuestionController extends Controller
{
    protected $repository;


    public function __construct(QuestionRepositoryInterface $repo)
    {
        $this->repository = $repo;
    }
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view('backend.questions.index',$this->repository->index());
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('backend.questions.form');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(QuestionsRequest $request)
    {
        $this->repository->store($request);
        return redirect()->route('questions.index')->with('message','Question Added Succesfully');

    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show(Questions $question)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit(Questions $question)
    {
        return view('backend.questions.form',$this->repository->edit($question));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(QuestionsRequest $request,Questions $question)
    {
        $this->repository->update($request,$question);
        return redirect()->route('questions.index')->with('info','Question Updated Successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy(Questions $question)
    {
        $this->repository->destroy($question);
        return redirect()->route('questions.index')->with('warning','Question Deleted Successfully');
    }
}

