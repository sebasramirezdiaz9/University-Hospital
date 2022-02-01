<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShoppingRequest extends FormRequest
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
            //
            'fecha_compra' => 'required|date',
            'fecha_pago' => 'required|date',
            'subtotal' => 'required|integer',
            'total' => 'required|integer',
            'folio' => 'required|string|max:255',
            'provedores_id'   => 'required|integer|exists:provedores,id',
            'medicines'     => 'required|array|min:1'
        ];
    }
}
