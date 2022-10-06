<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBraceletRequest extends FormRequest
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
            'title' => 'required',
            'category_name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'qty_in_stock' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Toto pole je povinné',
            'description.required' => 'Toto pole je povinné',
            'category_name.required' => 'Toto pole je povinné',
            'price.required' => 'Toto pole je povinné',
            'price.numeric' => 'Cena musí byť číselná hodnota',
            'qty_in_stock.required' => 'Toto pole je povinné',
            'qty_in_stock.numeric' => 'Cena musí byť číselná hodnota'
        ];
    }
}
