<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLawRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'volume' => 'required',
            // 'citation' => 'required',
            // 'court' => 'required',
            // // 'la' => 'required',
            // 'judges' => 'required',
            // 'judgementdate' => 'required'
        ];
    }
}
