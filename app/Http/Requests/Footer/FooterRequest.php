<?php

namespace App\Http\Requests\Footer;

use Illuminate\Foundation\Http\FormRequest;

class FooterRequest extends FormRequest
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
            'no_telp' => 'string|required',
            'no_wa' => 'string|required',
            'wa_jam_kerja' => 'string|required',
            'alamat_kampus_1' => 'string|required',
            'alamat_kampus_2' => 'string|required',
            'social_facebook' => 'string|required',
            'social_instagram' => 'string|required',
            'social_tiktok' => 'string|required',
            'social_youtube' => 'string|required',
        ];
    }

    public function messages()
    {
        return [
            'no_telp.required' => 'Nomor Telepon harus di isi!',
            'no_wa.required' => 'Nomor Whatsapp harus di isi!',
            'wa_jam_kerja.required' => 'Keterangan Jam Kerja harus di isi!',
            'alamat_kampus_1.required' => 'Alamat Kampus 1 harus di isi!',
            'alamat_kampus_2.required' => 'Alamat Kampus 2 harus di isi!',
            'social_facebook.required' => 'Media Sosial Facebook harus di isi!',
            'social_instagram.required' => 'Media Sosial Instagram harus di isi!',
            'social_tiktok.required' => 'Media Sosial Tiktok harus di isi!',
            'social_youtube.required' => 'Media Sosial Youtube harus di isi!',
        ];
    }
}
