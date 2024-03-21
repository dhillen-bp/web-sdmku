<?php

namespace App\Http\Requests\Home;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'school_name' => 'required|string|max:255',
            'school_affiliate' => 'required|string|max:255',
            'motto' => 'required|string',
            'description' => 'required|string',
            'ppdb_banner' => 'image|mimes:jpeg,png,jpg|max:2048',
            'ppdb_desc' => 'required|string',
        ];
    }
}
