<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        return[
    'name'=>'required|min:3|max:20|string|unique:categories,name',
    'description'=>'required|min:12|max:50|string'
];
    }
    public function messages(): array
    {
        return[
   'name.required'=>'category name is required',
   'name.unique'=>'category name is already exist',
   'name.min'=>'category name must be at least 3 charcters',
    'description.required'=>'category description is required',
   'description.min'=>'category description must be at least 12 charcters',
];
    }
}
