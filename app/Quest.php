<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Quest extends Model
{
    public function expired(){
        if($this->timelimit < now() && $this->state != "expired"){
            $this->state = "expired";

            $fil = new Fil([
                'idUser' => $this->idSender,
                'type' => 'questtimeout',
                'newsUser' => Auth::id(),
                'newsValue' => $this->id,
            ]);
            $fil->save();
            $this->save();

        }
    }
}
