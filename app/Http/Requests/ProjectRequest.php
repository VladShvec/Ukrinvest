<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            "adress_en" => 'required',
            "adress_ru" => 'required',
            "adress_arm" => 'required',
            "text_en" => 'required',
            "text_ru" => 'required',
            "text_arm" => 'required',
            "img_url" => 'sometimes'
        ];
    }
}
