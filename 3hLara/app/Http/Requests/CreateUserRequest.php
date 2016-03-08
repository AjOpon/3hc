<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request
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
            'email' => 'email|unique:users,email|required',
                            'fname' => 'alpha|required',
                            'lname' => 'alpha|required',
                            'password' => 'between:6,20|required',
                            'phone' => 'numeric|digits:10|required',
                            'address' => 'alpha_num|required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'We need your valid email!',
            'fname.required' => 'Your first name please!',
            'lname.required' => 'You forgot to add a surname!',
            'password.required' => 'Need a password',
            'phone.required' => 'Please add a phone number for contact',
            'address.required' => 'Tell us where you\'re from',
        ];
    }
}

// $userEmail=$usr['email'];
        
        //$reqst=$Request->method();

        /*$rules = array('email' => 'email|unique:users,email|required',
                            'fname' => 'alpha|required',
                            'lname' => 'alpha|required',
                            'password' => 'between:6,20|required',
                            'phone_no' => 'numeric|digits:10|required',
                            'address' => 'alpha_num|required',

                            );*/
        /*$messages2 = [
                    'phone_no.required'    => 'We need your phone number',
                    ];*/
        //$validator = Validator::make($usr, $rules, $messages2);// make validator for user registration request 
        
        //($validator->fails()) //If there are validation errors
        
        //$messages = $validator->errors();// returns MessageBag Class Instance inclusive of each error message from failed validation
        //return redirect()->action('userController@ongeza')->with('errMsgs', $messages);

        //$messages3=json_decode($messages);
        
        //return $messages;
        
        /*return response()->json([
        'success' => false,
        'message' => $messages3
    ], 422);*/

        //return back()->with('errMsgs',$messages);