<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;

class StoreOrderRequest extends Request
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
            'weightreal'       => 'required|numeric|max:50',
            'length'       => 'required|numeric|max:50',
            'width'       => 'required|numeric|max:50',
            'height'       => 'required|numeric|max:50',
            'type_colis'       => 'required|max:50',
            'weightdim'       => 'numeric|max:50',
            'weightbuy'       => 'numeric|max:50',
            'objname'       => 'required|max:50',
            'objpoid'       => 'required|numeric|max:50',
            'objnum'       => 'required|numeric|max:50',
            'objval'       => 'required|numeric|max:50',
            'objpays'       => 'required|max:50',

            'addobjname[]'       => 'max:50',
            'addobjpoid[]'       => 'numeric|max:50',
            'addobjnum[]'       => 'numeric|max:50',
            'addobjval[]'       => 'numeric|max:50',
            'addobjpays[]'       => 'max:50',

            'baoxian'       => 'required|max:50',
            'baoxianmoney'       => 'numeric|max:50',

        ];
    }

}
