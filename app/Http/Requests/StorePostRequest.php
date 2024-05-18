<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Intervention\Image\Image;

class StorePostRequest extends FormRequest
{
    public function attributes()
    {
        return [
            'title' => 'Sarlavha',
            'body' => 'Matn',
            'short_content' => 'Qisqa matn',
            'photo' => 'Rasm',
        ];
    }
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
                'title' => 'required|max:255|min:3',
                'body' => 'required',
                'short_content' => 'required',
                'photo' => 'nullable|image|max:10000|mimes:jpeg,jpg,png',
        ];

    }
}


