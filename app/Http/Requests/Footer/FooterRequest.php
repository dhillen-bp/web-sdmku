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
}
