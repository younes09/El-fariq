<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $table = 'players';
    protected $fillable = [ 'player_2_name', 'player_3_name', 'player_4_name', 'player_5_name', 'player_6_name', 'player_7_name', 'player_8_name',
                            'player_2_familyname', 'player_3_familyname', 'player_4_familyname', 'player_5_familyname', 'player_6_familyname', 'player_7_familyname', 'player_8_familyname',
                            'photo_p2', 'photo_p3', 'photo_p4', 'photo_p5', 'photo_p6', 'photo_p7', 'photo_p8',
                            'team_id'];
    public function teams(){
        return $this->belongsTo(Team::class,'team_id','id');
    }

}
