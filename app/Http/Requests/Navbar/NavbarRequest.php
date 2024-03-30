<?php

namespace App\Http\Requests\Navbar;

use Illuminate\Foundation\Http\FormRequest;

class NavbarRequest extends FormRequest
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
            'image' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'image.image' => 'File yang diunggah harus berupa gambar!',
            'image.mimes' => 'Format gambar yang diizinkan adalah svg, jpeg, jpg, dan png!',
            'image.max' => 'Ukuran gambar tidak boleh melebihi 2 MB!',
        ];
    }
}
