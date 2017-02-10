<?php

namespace CEstados\Http\Requests;

use CEstados\Http\Requests\Request;

class AdminStatesRequest extends Request
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
            'name' => 'required|min:3',
            'initials' => 'required|min:2',
            'historic' => 'required|min:5',
        ];
    }
}
