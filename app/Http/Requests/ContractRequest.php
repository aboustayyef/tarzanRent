<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class contractRequest extends Request
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
            'description'=>'required',
            'effective_date'=>'required',
            'expiry_date'=>'required',
            'properties'=>'required',
            'amount'    =>'required|numeric',
        ];
    }
}
