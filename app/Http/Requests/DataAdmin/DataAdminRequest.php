<?php

namespace App\Http\Requests\DataAdmin;

use Illuminate\Foundation\Http\FormRequest;

class DataAdminRequest extends FormRequest
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
            'name' => 'string|required|min:3|max:255',
            'email' => 'required|email',
            'password' => 'string|required',
        ];
    }
}
