<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseForm extends FormRequest
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
            //
                'course_title' => 'required',
                'course_code' => 'required|unique:courses,code',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'course_code.required' => 'Please, enter your course code',
            'course_code.unique' => 'Sorry, the code you used already exists',
            'course_title.required' => 'Please, enter your your title',
        ];
    }


}
