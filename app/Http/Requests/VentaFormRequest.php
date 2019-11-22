<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VentaFormRequest extends FormRequest
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
            'producto_id'=>'max:512',
            'pagoscol'=>'max:512',
            'quien_vendio'=>'max:512',
            'precio_venta'=>'max:512',
            'comprador'=>'mas:512',
            'estado'=>'max:512',
        ];
    }
}
