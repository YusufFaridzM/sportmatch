<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'sport', 
        'team_name', 
        'date', 
        'time', 
        'location', 
        'challenged_team_id', 
        'challenged_team_name'
    ];

    /**
     * Relasi ke tim yang membuat jadwal (yang menantang)
     */
        // Relasi ke challenging_team (Tim yang menantang)
        public function challengingTeam()
        {
            return $this->belongsTo(Team::class, 'challenging_team_id');
        }
    
        // Relasi ke challenged_team (Tim yang ditantang)
        public function challengedTeam()
        {
            return $this->belongsTo(Team::class, 'challenged_team_id');
        }
    }
    
