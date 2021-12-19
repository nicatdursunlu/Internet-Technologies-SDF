<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required|unique:articles|max:255|min:6',
            'description' => 'required',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Artikl boş ola bilməz.',
            'title.unique' => 'Artikl adi tekrarlana bilmez.',
            'title.max' => 'Artikl adi maximum 256 simvol ola biler.',
            'title.min' => 'Artikl adi minimum 6 simvoldan ibaret olmalidir.',
            'description.required' => 'Artikl haqqinda boş ola bilməz.',
            'content.required' => 'Artikl kontenti boş ola bilməz.',
        ];
    }
}
