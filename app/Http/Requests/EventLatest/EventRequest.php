<?php

namespace App\Http\Requests\EventLatest;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'image' => 'image|mimes:jpeg,png,jpg|max:2048|nullable',
            'image_gdrive' => 'string|nullable',
        ];
    }
}
