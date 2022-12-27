<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    use HasFactory;
    protected $table = 'leaders';
    protected $fillable = ['leader_name', 'leader_famely_name', 'leader_birth_day','leader_phone','leader_mail','leader_addres','leader_photo','team_id'];
    
    public function team(){
        return $this->belongsTo(Team::class,'team_id','id');
    }

}
