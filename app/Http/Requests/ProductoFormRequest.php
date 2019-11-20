<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoFormRequest extends FormRequest
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
            'disponibles'=>'required|max:100',
            'preciopropuesto'=>'required|numeric',
            'descripcion'=>'required|max:512',
            'cliente_vende'=>'max:512',
            'area_id'=>'max:512',
            //'imagen'=>'mimes:jpg,bmp,png'
        ];
    }
}
