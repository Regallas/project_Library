<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'author' => 'required|min:2|max:20',
            'description' => 'required|min:30|max:255'
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Поле Название является обязательным',
            'author.required' => 'Поле автор является обязательным',
            'description.required' => 'Поле описание является обязательным'
        ];
    }


}
