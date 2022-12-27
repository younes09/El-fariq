<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;
    protected $table = 'reserves';
    protected $fillable = [ 'reserve_1_name', 'reserve_2_name', 'reserve_3_name','reserve_4_name',
                            'reserve_1_familyname','reserve_2_familyname','reserve_3_familyname','reserve_4_familyname',
                            'photo_r1', 'photo_r2', 'photo_r3','photo_r4',
                            'team_id'];


}
