<?php

namespace App\Http\Controllers;

use Hash;
use Validator,Redirect,Response;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;

class userController extends Controller
{
    
    private $err="none";
    private $Response;

    public function ongeza(){
    	$mah='userOngeza';


    	return view('user.ongeza')->with('mah',$mah);

    	
    	}

    public function store(CreateUserRequest $Request){
    	$usr=$Request->all();
    	$usr['password']=Hash::make($usr['password']);
    	$this->Response=User::ongMtu($usr);

    	return redirect()->action('userController@ongeza')->with('successMsg', $this->Response);//$usr;//redirect()->action('userController@ongeza');
    	
    	}

    public function update(){
            
        
    }


}
