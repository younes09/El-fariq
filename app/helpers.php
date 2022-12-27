<?php

use App\Models\Leader;
use App\Models\Player;
use App\Models\Reserve;
use Illuminate\Support\Facades\Auth;
use App\Models\Team; 

if (! function_exists('team_id')) {
    function team_id(){
        $team_id = Team::where('user_id',Auth::id())->get()[0]['id'];
        return $team_id;
    }
}

if (! function_exists('leader_id')){
    function leader_id(){
        $leader_id = Leader::where('team_id', team_id())->get()[0]['id'];
        return $leader_id;
    }
}

if (! function_exists('player_id')){
    function player_id(){
        $player_id = Player::where('team_id', team_id())->get()[0]['id'];
        return $player_id;
    }
}

if (! function_exists('reserve_id')){
    function reserve_id(){
        $reserve_id = Reserve::where('team_id', team_id())->get()[0]['id'];
        return $reserve_id;
    }
}