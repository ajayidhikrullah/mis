<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class UpdateTutorForm extends FormRequest
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
                'tutor_full_name' => 'required',
                // 'tutor_email' => 'required|unique:users,email',
                'tutor_phone' => 'required',
                'tutor_address' => 'required',
                // 'student_password' => 'required',
            
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
            'tutor_full_name.required' => 'Please, enter tutors full name',
            'tutor_phone.required' => 'Please, enter tutors phone number',
            'tutor_address.required' => 'Please, enter tutors address',
        ];
    }
}
