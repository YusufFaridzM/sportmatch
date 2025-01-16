<?php

// app/Http/Controllers/TeamController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    // Menampilkan formulir untuk membuat tim
    public function create()
    {
        return view('teams.create');
    }

    // Menyimpan tim ke database
    public function store(Request $request)
    {
        // Validasi input nama tim
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Simpan tim baru
        $team = new Team();
        $team->name = $request->input('name');
        $team->user_id = auth()->id(); // Asosiasikan tim dengan pengguna yang sedang login
        $team->save();

        // Redirect ke halaman penjadwalan atau halaman lain
        return redirect()->route('schedules.index')->with('success', 'Tim berhasil dibuat!');
    }
}
