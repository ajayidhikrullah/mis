<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTutorForm extends FormRequest
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
                'tutor_email' => 'required|unique:users,email',
                'tutor_phone' => 'required',
                'tutor_address' => 'required',
                'tutor_password' => 'required',
            
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
            'tutor_full_name.required' => 'Please, enter your full name',
            'tutor_email.required' => 'Please, enter your email address',
            'tutor_phone.required' => 'Please, enter your phone number',
            'tutor_address.required' => 'Please, enter your address',
            'tutor_password.required' => 'Please enter your password',
        ];
    }
}
