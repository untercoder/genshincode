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
            'header' => ['required', 'string', 'min:5', 'max:100'],
            'description' => ['required', 'string', 'min:10'],
            'price' => ['required'],
            'img' => ['required'],
            'telegram' => ['required_without_all:whatsapp,email,phone'],
            'whatsapp' => ['required_without_all:telegram,email,phone'],
            'email' => ['required_without_all:whatsapp,telegram,phone'],
            'phone' => ['required_without_all:whatsapp,email,telegram'],
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
            'header.required' => __('messages.header.required'),
            'header.string' => __('messages.header.string'),
            'header.min' =>__('messages.header.min'),
            'header.max' =>__('messages.header.max'),

            'description.required' => __('messages.description.required'),
            'description.string' => __('messages.description.string'),
            'description.min' => __('messages.description.min'),

            'price.required' => __('messages.price.required'),

            'img.required' => __('messages.img.required')

        ];
    }
}
