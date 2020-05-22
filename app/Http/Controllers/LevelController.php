<?php

namespace App\Http\Controllers;

use App\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function oui(){
        $i = 0;
        while($i < 30){
            $new = new Level();
            $latest = Level::orderBy("id", 'desc')->take(1)->get();
            $new->xp = ($latest[0]->xp + 100 + ($latest[0]->xp * 0.05));

            $new->save();
            $i = $i + 1;
        }


        return redirect("/");
    }
}
