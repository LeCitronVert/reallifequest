<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Friendship extends Model
{
    public function returnFriend(){
        if($this->idSender == Auth::id()){
            $user = User::find($this->idReceiver);
        } else {
            $user = User::find($this->idSender);
        }
        return $user;
    }
}
