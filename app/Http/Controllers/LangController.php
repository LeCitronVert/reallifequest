<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function english(){

        $user = Auth::user();
        $user->lang = "en";
        $user->save();
        return redirect()->back();
    }

    public function french(){

        $user = Auth::user();
        $user->lang = "fr";
        $user->save();
        session(['applocale' => $user->lang]);
        return redirect()->back();
    }
}
