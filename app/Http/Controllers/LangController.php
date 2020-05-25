<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    public function english(){
        session(['my_locale' => 'en']);
        return redirect()->back();
    }

    public function french(){
        session(['my_locale' => 'fr']);
        return redirect()->back();
    }
}
