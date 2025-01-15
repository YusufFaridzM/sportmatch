<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller {
    public function index() {
        $schedules = Schedule::all();
        return view('schedules.index', compact('schedules'));
    }

    public function create() {
        return view('schedules.create');
    }

    public function store(Request $request) {
        $request->validate([
            'sport' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string|max:255',
        ]);

        Schedule::create($request->all());
        return redirect()->route('schedules.index')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    public function edit(Schedule $schedule) {
        return view('schedules.edit', compact('schedule'));
    }

    public function update(Request $request, Schedule $schedule) {
        $request->validate([
            'sport' => 'required|string|max:255',
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
}