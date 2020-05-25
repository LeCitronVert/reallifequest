<?php

namespace App\Http\Controllers;

use App\Fil;
use App\Friendship;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function search(Request $request){
        $query = $request->input("query");
        $users = User::where('name', 'LIKE', '%' . $query . '%')->get();
        return view('search', ['users' => $users]);
    }

    public function frens(){
        $fr = Friendship::where('idReceiver', Auth::id())->where('state', "pending")->get();
        $fl = Friendship::where('state', 'friend')
            ->where(function ($query) {
                $query->where('idReceiver', Auth::id())
                    ->orWhere('idSender', Auth::id());
            })->get();
        return view('friends', ['fr' => $fr, 'fl' => $fl]);
    }

    public function quests(){
        $ql = Auth::user()->received_q;
        foreach ($ql as $q){
            $q->expired();
        }
        return view('quests', ['ql' => $ql]);
    }

    public function rankings(){
        $fl = Friendship::where('state', 'friend')
            ->where(function ($query) {
                $query->where('idReceiver', Auth::id())
                    ->orWhere('idSender', Auth::id());
            })->get();
        $fl->sortBy(function ($bulli) {
            return ($bulli->returnFriend()->xp);
        });
        $fren = true;
        $i = 1;
        return view("rankings", ['fren' => $fren, 'fl' => $fl, 'i' => $i]);
    }

    public function profile($id){
        $user = User::find($id);
        return view("profile", ['user' => $user]);
    }
}
