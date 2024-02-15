<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title' => 'required',
            'blogType' => 'required',
            'content' => 'required',
            'imageUrl' => 'required|url|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Please enter a title',
            'blogType.required' => 'Please select a blog type',
            'imageUrl.required' => 'Please enter the image path',
            'content.required' => 'Please enter the content',
            'image_path.max' => 'URL must not exceed 255 characters',
        ];
    }
}
