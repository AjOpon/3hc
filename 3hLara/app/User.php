<?php

namespace App;
use Illuminate\Support\Collection ;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, AuthorizableContract,
CanResetPasswordContract {

    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname','lname', 'email', 'password', 'phone','address',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     public function profile()
    {
        return $this->hasOne('App\profile', 'usr_id');
    }

    public static function ongMtu($usrdata){

        $member= new User();
        $member->fname=$usrdata['fname'];
        $member->lname=$usrdata['lname'];
        $member->email=$usrdata['email'];
        $member->password=$usrdata['password'];
        $member->phone_no=$usrdata['phone'];
        $member->address=$usrdata['address'];
        $member->save();
        
        return  "Awesome!You are now part of the 3HC Community!";

    }    
}

