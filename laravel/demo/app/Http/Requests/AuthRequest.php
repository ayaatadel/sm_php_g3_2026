<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name'=>'required|string|max:255',
            'email'=>'required|string|max:255|unique:users,email',
            'password'=>'required|string|max:255',
        ];
    }

    function messages():array
    {
           return[
   'name.required'=>' name is required',
   'email.unique'=>'email is already exist',
   'name.max'=>'category name must less than or equal 255 charcters',
    'password.required'=>'category password is required',
   'password.max'=>'category password must less than or equal 255 charcters',
];

    }
}
