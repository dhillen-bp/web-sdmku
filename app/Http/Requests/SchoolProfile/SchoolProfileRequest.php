<?php

namespace App\Http\Requests\SchoolProfile;

use Illuminate\Foundation\Http\FormRequest;

class SchoolProfileRequest extends FormRequest
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
            'logo_label' => 'required|string',
            'logo' => 'image|mimes:jpeg,png,jpg|max:2048|nullable',
            'logo_gdrive' => 'string|nullable',

            'principal_name' => 'required|string',
            'principal_foto' => 'image|mimes:jpeg,png,jpg|max:2048|nullable',
            'principal_foto_gdrive' => 'string|nullable',
            'principal_text' => 'required|string',

            'campus1' => 'required|string',
            'campus2' => 'required|string',
        ];
    }
}
