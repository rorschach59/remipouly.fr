<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:4|max:255',
            'email' => 'required|min:4|max:255',
            'phone' => 'required|min:4|max:255',
            'message' => 'required|min:25|max:255',
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'required' => 'Ce champs est obligatoire',
            'min' => 'Ce champs doit faire minimum :min caractères',
            'max' => 'Ce champs doit faire maximum :max caractères',
        ];
    }
}
