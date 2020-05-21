<?php

namespace App\Http\Controllers;

use App\Fil;
use App\Friendship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    public function add($id){
        $keur = new Friendship();
        $keur->idSender = Auth::id();
        $keur->idReceiver = $id;

        $keur->save();

        return redirect("/friends");
    }

    public function accept($id){
        $keur = Friendship::find($id);
        $keur->state = "friend";
        $keur->save();

        $fil = new Fil();
        $fil->idUser = $keur->idSender;
        $fil->type = "newfriend";
        $fil->newsUser = $keur->idReceiver;
        $fil->newsValue = 0;
        $fil->save();

        return redirect("/friends");
    }

    public function refuse($id){
        $keur = Friendship::find($id);

        $fil = new Fil();
        $fil->idUser = $keur->idSender;
        $fil->type = "refusefriend";
        $fil->newsUser = $keur->idReceiver;
        $fil->newsValue = 0;
        $fil->save();

        $keur->delete();

        return redirect("/friends");
    }
}
