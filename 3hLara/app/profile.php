<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class profile extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'usr_id');
    }

    public static function createOrUpdate($usrdata,$id) {
    
    $user=Auth::user();
    $record = self::where('usr_id','=',$id)->first();
    if (is_null($record)) {
    	$record= new profile();
    	$record->usr_id=$user->id;
        $record->prof_name=$usrdata['profname'];
        $record->bio=$usrdata['profbio'];
        $record->website=$usrdata['profsite'];
        $record->save();

        return 'New profile save successful';
    } else {

        $record->prof_name=$usrdata['profname'];
        $record->bio=$usrdata['profbio'];
        $record->website=$usrdata['profsite'];
        $record->save();

        return ' Record updated successfully';


    }
}//
}
