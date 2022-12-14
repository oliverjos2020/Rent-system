<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:8|max:255',
            'short_description' => 'min:8|max:255',
            'description' => 'min:25',
            'category_id' => 'required',
            'location' => 'required',
            'amount' => 'required',
            'featured' => 'required',
            //'image' => 'file'
        ];
    }
}
