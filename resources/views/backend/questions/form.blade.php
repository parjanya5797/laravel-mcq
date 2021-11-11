@extends('backend.admin-master')

@section('title')
Add MCQ Question |Dashboard
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add MCQ Questions</h3>
                </div>
                <form action="{{!isset($item)?route('questions.store'):route('questions.update',$item['id'])}}" method="POST" >
                    @if(isset($item))
                        @method('PATCH')
                    @endif
                    @csrf
                    <div class="card-body">
                        <x-text-input :input="['name' => 'question','required' => true,'label' => 'Question','placeholder' => 'E.g. In Which Continent is Nepal Situated ?','default' => $item->question ?? old('question') ,'error_msg' =>  $errors->first('question')]"></x-text-input>
                        <div class="form-group">
                            <x-text-input :input="['name' => 'ans_1','required' => true, 'label' => 'Answer 1','placeholder' => 'Europe','default' => $item->ans_1 ?? old('ans_1'),'error_msg' => $errors->first('ans_1'),'radio' => true,'correct' => $item->correct_answer??'']"></x-text-input>
                            <x-text-input :input="['name' => 'ans_2','required' => true, 'label' => 'Answer 2','placeholder' => 'Africa','default' => $item->ans_2 ?? old('ans_2'),'error_msg' => $errors->first('ans_2'),'radio' => true,'correct' => $item->correct_answer??'']"></x-text-input>
                            <x-text-input :input="['name' => 'ans_3','required' => true, 'label' => 'Answer 3','placeholder' => 'Asia','default' => $item->ans_3 ?? old('ans_3'),'error_msg' => $errors->first('ans_3'),'radio' => true,'correct' => $item->correct_answer??'']"></x-text-input>
                            <x-text-input :input="['name' => 'ans_4','required' => true, 'label' => 'Answer 4','placeholder' => 'Australia','default' => $item->ans_4 ?? old('ans_4'),'error_msg' => $errors->first('ans_4'),'radio' => true,'correct' => $item->correct_answer??'']"></x-text-input>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
