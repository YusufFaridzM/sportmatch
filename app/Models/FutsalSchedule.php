<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FutsalSchedule extends Model
{
    
    use HasFactory;
    

    protected $fillable = [
        'team_name',
        'date',
        'time',
        'location',
        'user_id',
        'challenger_team',
        'status',
        'sport_type',  // Add this line
        'deskripsi'
    ];

}
