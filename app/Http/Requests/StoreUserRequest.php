<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|min:4',
            'email' => 'email|required|unique:users,email',
            'password' => 'required|min:4|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Toto pole je povinné',
            'email.required' => 'Toto pole je povinné',
            'password.required' => 'Toto pole je povinné',
            'name.min' => 'Minimálny počet znakov je 4',
            'password.min' => 'Minimálny počet znakov je 4',
            'email.email' => 'Email musí byť vo formáte emailu',
            'email.unique' => 'Tento email je už zaregistrovaný',
            'password.confirmed' => 'Heslá sa nezhodujú',
        ];
    }
}
