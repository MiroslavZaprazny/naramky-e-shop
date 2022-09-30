<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'zip' => 'required',
            'town' => 'required',
            'email' => 'required|email',
            'shipping' => 'required',
            'payment' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Toto pole je povinné',
            'last_name.required' => 'Toto pole je povinné',
            'address.required' => 'Toto pole je povinné',
            'zip.required' => 'Toto pole je povinné',
            'town.required' => 'Toto pole je povinné',
            'shipping.required' => 'Toto pole je povinné',
            'payment.required' => 'Toto pole je povinné',
            'email.required' => 'Toto pole je povinné',
            'email.email' => 'Email musí byť vo formáte emailu',
        ];
    }
}
