<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    /**
     * Kolom yang dapat diisi secara massal.
     */
    protected $fillable = [
        'name',       // Nama tim
        'user_id',    // ID pengguna yang membuat tim
    ];

    /**
     * Relasi: Tim dimiliki oleh seorang pengguna.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi: Jadwal di mana tim ini menjadi penantang (challenging_team_id).
     */
    public function challengingSchedules()
    {
        return $this->hasMany(Schedule::class, 'challenging_team_id');
    }

    /**
     * Relasi: Jadwal di mana tim ini menjadi yang ditantang (challenged_team_id).
     */
    public function challengedSchedules()
    {
        return $this->hasMany(Schedule::class, 'challenged_team_id');
    }
}
