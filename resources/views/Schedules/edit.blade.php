<!-- resources/views/schedules/edit.blade.php -->
<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Jadwal</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center">Edit Jadwal</h1>

    <form action="{{ route('schedules.update', $schedule->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="sport" class="form-label">Olahraga</label>
        <select id="sport" name="sport" class="form-select">
          <option value="Futsal" {{ $schedule->sport == 'Futsal' ? 'selected' : '' }}>Futsal</option>
          <option value="Tenis" {{ $schedule->sport == 'Tenis' ? 'selected' : '' }}>Tenis</option>
          <option value="Badminton" {{ $schedule->sport == 'Badminton' ? 'selected' : '' }}>Badminton</option>
          <option value="Voli" {{ $schedule->sport == 'Voli' ? 'selected' : '' }}>Voli</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="date" class="form-label">Tanggal</label>
        <input type="date" id="date" name="date" class="form-control" value="{{ $schedule->date }}" required>
      </div>
      <div class="mb-3">
        <label for="time" class="form-label">Waktu</label>
        <input type="time" id="time" name="time" class="form-control" value="{{ $schedule->time }}" required>
      </div>
      <div class="mb-3">
        <label for="location" class="form-label">Lokasi</label>
        <input type="text" id="location" name="location" class="form-control" value="{{ $schedule->location }}" required>
      </div>
      <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      <a href="{{ route('schedules.index') }}" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</body>
</html>
</x-app-layout>