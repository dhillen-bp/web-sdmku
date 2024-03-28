<?php

namespace App\Http\Requests\Home;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFeaturedRequest extends FormRequest
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
            'featured_title' => 'string|required',
            'featured_subtitle' => 'string|required',
            'featured_image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'featured_title.required' => 'Judul Program Unggulan harus di isi!',
            'featured_subtitle.required' => 'Keterangan Program Unggulan harus di isi!',
            'featured_image.image' => 'File yang diunggah harus berupa gambar!',
            'featured_image.mimes' => 'Format gambar yang diizinkan adalah jpeg, png, dan jpg!',
            'featured_image.max' => 'Ukuran gambar tidak boleh melebihi 2 MB!',
        ];
    }
}
