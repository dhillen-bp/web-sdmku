<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'author' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048|nullable',
            'image_gdrive' => 'string|nullable',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul Berita harus di isi!',
            'content.required' => 'Konten Berita harus di isi!',
            'author.required' => 'Pengarang / Penulis Berita harus di isi!',
            'image.image' => 'File yang diunggah harus berupa gambar!',
            'image.mimes' => 'Format gambar yang diizinkan adalah jpeg, png, dan jpg!',
            'image.max' => 'Ukuran gambar tidak boleh melebihi 2 MB!',
        ];
    }
}
