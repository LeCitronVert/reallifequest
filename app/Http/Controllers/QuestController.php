<?php

namespace App\Http\Controllers;

use App\Fil;
use App\Friendship;
use App\History;
use App\Quest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestController extends Controller
{
    public function form(){
        $fl = Friendship::where('state', 'friend')
            ->where(function ($query) {
                $query->where('idReceiver', Auth::id())
                    ->orWhere('idSender', Auth::id());
            })->get();
        return view("quest.form", ['fl' => $fl]);
    }

    public function add(Request $request){
        foreach ($request->input("friend") as $id => $fren){
            $quest = new Quest();
            $quest->idSender = Auth::id();
            $quest->idReceiver = $id;
            $quest->prompt = $request->input("prompt");
            $quest->desc = $request->input("desc");
            $quest->state = "pending";

            if($request->difficulty == "easy"){
                $quest->xp = 100;
                $quest->timelimit = now();
                $quest->timelimit->addDay();
            }

            if($request->difficulty == "medium"){
                $quest->xp = 200;
                $quest->timelimit = now();
                $quest->timelimit->addDays(2);
            }

            if($request->difficulty == "hard"){
                $quest->xp = 300;
                $quest->timelimit = now();
                $quest->timelimit->addDays(3);
            }

            $quest->save();
        }

        return redirect("/quests");
    }

    public function accept($id){
        $q = Quest::find($id);
        $q->state = "accepted";

        $fil = new Fil([
            'idUser' => $q->idSender,
            'type' => 'questaccepted',
            'newsUser' => Auth::id(),
            'newsValue' => $q->id,
        ]);
        $fil->save();
        $q->save();

        return redirect("/quests");
    }

    public function refuse($id){
        $q = Quest::find($id);
        $q->state = "refused";

        $fil = new Fil([
            'idUser' => $q->idSender,
            'type' => 'questrefused',
            'newsUser' => Auth::id(),
            'newsValue' => $q->id,
        ]);
        $fil->save();
        $q->save();

        return redirect("/quests");
    }

    public function complete($id){
        $q = Quest::find($id);
        $q->state = "completed";

        $fil = new Fil([
            'idUser' => $q->idSender,
            'type' => 'questcompleted',
            'newsUser' => Auth::id(),
            'newsValue' => $q->id,
        ]);
        $fil->save();
        $q->save();

        $history = new History([
            'idUser' => Auth::id(),
            'type' => 'questcompleted',
            'newsValue' => $q->id,
        ]);
        $history->save();

        Auth::user()->gainxp($q->xp, Auth::user());
        return redirect("/quests");
    }
}
