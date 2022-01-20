<?php

namespace App\Http\Requests;

use App\Http\Requests\StoreAccountsRequest;

class StoreAccountsUpdateRequest extends StoreAccountsRequest
{

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
            'telegram' => ['required_without_all:whatsapp,email,phone,useUserEmail'],
            'email' => ['nullable','email','required_without_all:whatsapp,telegram,phone,useUserEmail'],
            'phone' => ['required_without_all:whatsapp,email,telegram,useUserEmail'],
            'useUserEmail' => ['required_without_all:whatsapp,email,telegram,phone']
        ];
    }
}
