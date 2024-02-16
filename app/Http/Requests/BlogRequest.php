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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Please enter a title',
            'blogType.required' => 'Please select a blog type',
            'content.required' => 'Please enter the content',
            'image_path.max' => 'URL must not exceed 255 characters',
            'image.required' => 'Please select a image',
            'image.mimes' => 'Please select a image with jpeg, png, jpg, gif type',
            'image.mimes' => 'Please select a image size smaller than 2048KB',
        ];
    }
}
