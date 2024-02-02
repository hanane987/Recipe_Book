<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Recipe_request extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'image_path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
