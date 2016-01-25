<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SendProjectEmailRequest extends Request
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
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:2|max:255',
            'body' => 'required|min:5|max:1500'
        ];
    }
}
