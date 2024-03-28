<?php

namespace App\Http\Requests\Extracurricular;

use Illuminate\Foundation\Http\FormRequest;

class EskulRequest extends FormRequest
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
            'name' => 'string|required|max:255',
            'desc' => 'string|required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048|nullable',
            'image_gdrive' => 'string|nullable',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama Ekstrakurikuler harus di isi!',
            'desc.required' => 'Deskripsi Ekstrakurikuler harus di isi!',
            'image.image' => 'File yang diunggah harus berupa gambar!',
            'image.mimes' => 'Format gambar yang diizinkan adalah jpeg, png, dan jpg!',
            'image.max' => 'Ukuran gambar tidak boleh melebihi 2 MB!',
        ];
    }
}
