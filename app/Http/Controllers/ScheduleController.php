<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller {
    public function index(Request $request)
    {
        $query = Schedule::query();
    
        if ($request->sport) {
            $query->where('sport', $request->sport);
        }
        if ($request->date) {
            $query->whereDate('date', $request->date);
        }
        if ($request->time) {
            $query->whereTime('time', $request->time);
        }
        if ($request->location) {
            $query->where('location', 'like', '%' . $request->location . '%');
        }
    
        $schedules = $query->get();
    
        return view('schedules.index', compact('schedules', 'request'));
        $schedules = Schedule::orderBy('challenged_team_id', 'asc')->get();

    return view('schedules.index', compact('schedules'));
    }
    

    public function create() {
        return view('schedules.create');
    }

    public function store(Request $request)
    {
       
        $validated = $request->validate([
            'sport' => 'required|string',
            'team_name' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',  // Validasi waktu
            'location' => 'required|string',
        ]);
    
        // Lanjutkan menyimpan data setelah validasi
        $schedule = new Schedule();
        $schedule->sport = $request->input('sport');
        $schedule->team_name = $request->input('team_name');
        $schedule->date = $request->input('date');
        $schedule->time = $request->input('time');
        $schedule->location = $request->input('location');
        // Membuat jadwal baru
        $schedule = new Schedule($validated);
        $schedule->save();
    
        return redirect()->route('schedules.index')->with('success', 'Jadwal berhasil ditambahkan!');
    }

        

    public function edit(Schedule $schedule) {
        return view('schedules.edit', compact('schedule'));
    }

    public function update(Request $request, Schedule $schedule) {
        $request->validate([
            'sport' => 'required|string|max:255',
            'team_name' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string|max:255',
        ]);

        $schedule->update($request->all());
        return redirect()->route('schedules.index')->with('success', 'Jadwal berhasil diperbarui.');
    }

    public function destroy(Schedule $schedule) {
        $schedule->delete();
        return redirect()->route('schedules.index')->with('success', 'Jadwal berhasil dihapus.');
    }

    public function search(Request $request) {
        $query = $request->input('search');
        $schedules = Schedule::where('sport', 'LIKE', "%{$query}%")
            ->orWhere('location', 'LIKE', "%{$query}%")
            ->orWhere('date', 'LIKE', "%{$query}%")
            ->get();

        return view('schedules.index', compact('schedules'));
    }
    public function showApplyForm($id)
    {
        // Ambil jadwal yang terkait dengan id
        $schedule = Schedule::findOrFail($id);
    
        // Pastikan hanya tim yang belum ada lawannya yang bisa apply
        if ($schedule->challenged_team_id) {
            return redirect()->route('schedules.index')->with('error', 'Tantangan sudah diterima.');
        }
    
        // Menampilkan form apply
        return view('schedules.apply', compact('schedule'));
    }
    
    public function applyChallenge(Request $request, Schedule $schedule)
    {
        // Validasi apakah tim yang mengajukan sudah terdaftar
        $team = auth()->user()->team;

        if (!$team) {
            return redirect()->route('schedules.index')->with('error', 'Anda harus memiliki tim untuk menerima tantangan.');
        }

        // Memastikan bahwa tim yang sedang menantang adalah tim yang berbeda
        if ($schedule->challenging_team_id === $team->id) {
            return redirect()->route('schedules.index')->with('error', 'Anda tidak bisa menantang tim Anda sendiri.');
        }

        // Menyimpan nama tim yang menerima tantangan
        $schedule->challenged_team_id = $team->id;
        $schedule->save();

        return redirect()->route('schedules.index')->with('success', 'Tantangan berhasil diterima!');
    }
    

}