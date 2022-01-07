<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAccountsRequest extends FormRequest
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
            '_token' => ['required'],
            'header' => ['required', 'string', 'min:5', 'max:20'],
            'description' => ['required', 'string', 'min:10'],
        ];
    }

    /**
     * Specifies the messages to be returned in case of an error.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'header.required' => "Краткое описаение обязательно для заполнения.",
            'description.required' => "Полное описание обязательно для заполнения."
        ];
    }
}
