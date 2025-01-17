<?php

namespace App\Http\Controllers;

use App\Models\FutsalSchedule;
use Illuminate\Http\Request;

class FutsalScheduleController extends Controller
{
    // Method untuk menampilkan semua jadwal futsal
    public function index(Request $request)
    {
        // Ambil input lokasi dari filter
        $location = $request->query('location');
        
        // Query jadwal berdasarkan pencarian lokasi
        $schedules = FutsalSchedule::when($location, function ($query, $location) {
            return $query->where('location', 'LIKE', '%' . $location . '%');
        })->get();
    
        // Kirim data ke view
        return view('futsal-schedules.index', compact('schedules'));
    }

    // Method untuk menyimpan tantangan
    public function challenge(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'challenger_team' => 'required|string|max:255',
        ]);

        // Temukan jadwal berdasarkan ID
        $schedule = FutsalSchedule::findOrFail($id);

        // Update data dengan tim penantang
        $schedule->challenger_team = $request->challenger_team;
        $schedule->status = 'Challenged'; // Tandai jadwal sebagai ditantang
        $schedule->save();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Jadwal berhasil ditantang!');
    }

    // Method untuk menghapus jadwal futsal
    public function destroy($id)
    {
        // Temukan jadwal berdasarkan ID
        $schedule = FutsalSchedule::findOrFail($id);

        // Hapus jadwal
        $schedule->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('futsal-schedules.index')->with('success', 'Jadwal berhasil dihapus.');
    }

    // Method untuk menyimpan jadwal futsal
    public function store(Request $request)
    {
        // Gabungkan lokasi umum dan jenis olahraga
        $location = $request->location_general;
        
        // Simpan data jadwal
        FutsalSchedule::create([
            'team_name' => $request->team_name,
            'date' => $request->date,
            'time' => $request->time,
            'location' => $location,
            'sport_type' => $request->sport_type,  // Add this line
            'deskripsi' => $request->deskripsi,
        ]);
        
        // Redirect dengan pesan sukses
        return redirect()->route('futsal-schedules.index')
            ->with('success', 'Jadwal berhasil ditambahkan!');
    }
    // Method untuk menampilkan form tambah jadwal
    public function create()
    {
        // Tampilkan view form tambah jadwal
        return view('futsal-schedules.create');
    }
}
