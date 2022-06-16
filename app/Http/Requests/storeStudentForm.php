<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class storeStudentForm extends FormRequest
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
                'student_full_name' => 'required',
                'student_email' => 'required|unique:users,email',
                'student_phone' => 'required',
                'student_address' => 'required',
                'student_password' => 'required',            
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
            'student_full_name.required' => 'Please, enter your full name',
            'student_email.required' => 'Please, type in your email address',
            'student_phone.required' => 'Please, enter your phone-number',
            'student_address.required' => 'Please, enter your address',
            'student_password.required' => 'Please enter your password',
        ];
    }
}
