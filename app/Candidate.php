<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function add($name,$seat,$regno,$user_id){
        $this->name =$name;
        $this->seat = $seat;
        $this->regno=$regno;
        $this->votes = "0";
        $this->user_id= $user_id;
        $this->save();
    }

    public static function vote($president,$vice,$secretary,$finance,$treasurer,$spdir,$sodir,$pro){
        $president = Candidate::find($president)->increment('votes',1);
        $vice = Candidate::find($vice)->increment('votes',1);
        $secretary = Candidate::find($secretary)->increment('votes',1);
        $finance = Candidate::find($finance)->increment('votes',1);
        $treasurer = Candidate::find($treasurer)->increment('votes',1);
        $spdir = Candidate::find($spdir)->increment('votes',1);
        $sodir = Candidate::find($sodir)->increment('votes',1);
        $pro = Candidate::find($pro)->increment('votes',1);
    }
}
