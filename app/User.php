<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function friends(){
        return $this->hasMany("App\Quest", "idSender")->where("state", "==", "friend");
    }

    public function received_fr(){
        return $this->hasMany("App\Friendship", "idReceiver")->where("state", "==", "pending")->get();
    }

    public function sent_fr(){
        return $this->hasMany("App\Friendship", "idSender");
    }

    public function received_q(){
        return $this->hasMany("App\Quest", "idReceiver");
    }

    public function sent_q(){
        return $this->hasMany("App\Quest", "idSender");
    }

    public function gainxp($xp, User $user){
        $user->xp = $user->xp + $xp;
        $user->save();
        $user->levelup($user);
    }

    public function levelup(User $user){
        $levels = Level::all();
        foreach ($levels as $level){
            if ($user->level < $level->id && $user->xp > $level->xp && $level->id != 1){
                $user->level = $level->id;
                $user->save();

                $fl = Friendship::where('state', 'friend')
                    ->where(function ($query) {
                        $query->where('idReceiver', Auth::id())
                            ->orWhere('idSender', Auth::id());
                    })->get();

                foreach ($fl as $f){
                    $friend = $f->returnFriend();
                    $fil = new Fil([
                        'idUser' => $friend->id,
                        'type' => 'levelup',
                        'newsUser' => $user->id,
                        'newsValue' => $level->id,
                    ]);
                    $fil->save();
                }

            }
        }
    }

}
