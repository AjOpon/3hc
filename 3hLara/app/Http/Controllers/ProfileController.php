<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth,Hash;

use App\User;
use App\profile;
use App\Http\Requests;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
	public $mtu;
	public $hash;
	public $input;
	public $userProfZ;
	
	function __construct() {

		$userProfZ= new profile();
		$mtu=Auth::user();
		$this->mtu=$mtu;
		$this->input = $this->mtu->id;
		$this->hash = Hash::make($this->input);
		
		$userProfZ->usr_id=$this->input;
	    $userProfZ->prof_name='';
	    $userProfZ->bio='';
	    $userProfZ->website='';
	    $this->userProfZ=$userProfZ;
		
	}
    
    public function index(){
    	
    	$fname=$this->mtu->fname;
    	
    	return view('user.profile')->with('usrId',$this->input)->with('input', $fname);
    }
    /*$hash = Hash::make($this->mtu->id);

	$input = $this->mtu->id;

	if(Hash::check($input, $hash)){
    // the input matches the secret
	}*/

	public function show(){
		
		return view('user.profile')->with('prof', $userprof);
	}

	public function edit($id){
		if(Hash::check($id, $this->hash)){
			$userProf=$this->mtu->profile;

			if(!isset($userProf)){
				$userProf= new profile();
				

				$userProf->usr_id=$this->input;
				$userProf->prof_name='Add a Name';
				$userProf->bio='This is my vision';
				$userProf->website='www.3hc.co.ke';

				
	    		

				return view('user.profEdit')->with('prof', $userProf)
											->with('profU', $this->userProfZ)
											->with('usrId',$this->mtu->id);

			}
			//relationship access to user profile variables required
			//set default values if profile fields not entered yet placeholders

			else{
				return view('user.profEdit')->with('profU', $this->mtu->profile)
											->with('prof',$this->userProfZ)
											->with('usrId',$this->mtu->id);// the input matches the secret
			}
    		
	}

	else { 

		return 'Invalid  ';
	}

	
		
	}

	public function update(UpdateProfileRequest $request){
		
		$usrdata=$request;
		$profchange=profile::createOrUpdate($request,$this->mtu->id);
		return $profchange;//view('user.profile')->with('profmsg', $profchange);
		

		//post or put request 
	}

    //
}
