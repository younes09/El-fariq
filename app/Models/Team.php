<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = 'teams';
    protected $fillable = ['team_name', 'team_prencipal_color', 'team_second_color','team_logo','user_id'];

    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function leader(){
        return $this->hasOne(Leader::class);
    }
}