<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateProfileRequest extends Request
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
                'profname' => 'alpha|required',
                'profbio' => 'max:1000',
                'profsite' => 'url',
        ];
    }

    public function messages()
    {
        return [
            'profname.required' => 'Wouldn\'t hurt if you added a username!',
            'profbio.alpha_dash' => 'Only alphanumeric characters !',
            'profsite.alpha_dash' => 'You forgot to add a surname!',
        ];
    }
}
