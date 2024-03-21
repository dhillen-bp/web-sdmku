<?php

namespace App\Http\Requests\Home;

use Illuminate\Foundation\Http\FormRequest;

class StoreFeaturedRequest extends FormRequest
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
}
