<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionsRequest extends FormRequest
{
    /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
    public function authorize()
    {
        return true;
    }

    /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'question' => 'required',
            'ans_1' => 'required',
            'ans_2' => 'required',
            'ans_3' => 'required',
            'ans_4' => 'required',
            'correct_answer' => 'required|in:ans_1,ans_2,ans_3,ans_4',
        ];
    }
}
