<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenderStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
        ];
    }
    public function messages(){
        return [
            'name.required'=> 'El nombre es obligatorio', 
        ];
    }
}
