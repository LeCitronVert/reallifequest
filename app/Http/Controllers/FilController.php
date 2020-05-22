<?php

namespace App\Http\Controllers;

use App\Fil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilController extends Controller
{
    public function home(){
        $ql = Auth::user()->received_q;
        foreach ($ql as $q){
            $q->expired();
        }
        $actu = Fil::where("idUser", Auth::id())->get();

        return view("home", ['actu' => $actu]);
    }
}
