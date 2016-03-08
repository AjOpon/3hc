<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class pages extends Controller
{
    public function about(){
    	return view('pages.about');
    }

    public function contacts(){
    	return view('pages.contacts');
    }//

    public function home(){
    	$mah='home';
    	return view('home')->with('mah',$mah);
    }
}
