<!-- resources/views/schedules/index.blade.php -->
<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Jadwal</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center">Daftar Jadwal Pertandingan</h1>

    @if (session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('schedules.create') }}" class="btn btn-primary mb-3">Tambah Jadwal</a>

    <form action="{{ route('schedules.search') }}" method="GET" class="mb-3">
      <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Cari jadwal...">
        <button type="submit" class="btn btn-secondary">Cari</button>
      </div>
    </form>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Olahraga</th>
          <th>Tanggal</th>
          <th>Waktu</th>
          <th>Lokasi</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($schedules as $schedule)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $schedule->sport }}</td>
          <td>{{ $schedule->date }}</td>
          <td>{{ $schedule->time }}</td>
          <td>{{ $schedule->location }}</td>
          <td>
            <a href="{{ route('schedules.edit', $schedule->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('schedules.destroy', $schedule->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus jadwal ini?')">Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
</x-app-layout>