<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Fil extends Model
{
    protected $fillable = ['idUser', 'type', 'newsUser', 'newsValue'];

    public function User(){
        $user = User::find($this->newsUser);
        return $user;
    }
}
