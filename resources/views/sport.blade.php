<x-app-layout>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jadwal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('css/sport.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      /* Menyesuaikan tinggi agar elemen tidak terpotong */
      body, html {
        height: 100%;
        margin: 0;
      }
      .container {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
    </style>
  </head>
  <body>
    <div class="container mt-5">
      <h1 class="text-center mb-4">Tambah Jadwal</h1>

      <form action="{{ route('schedules.store') }}" method="POST" class="shadow p-4 rounded bg-white">
        @csrf
        <div class="mb-3">
          <label for="sport" class="form-label">Olahraga</label>
          <select id="sport" name="sport" class="form-select">
            <option value="Futsal">Futsal</option>
            <option value="Tenis">Tenis</option>
            <option value="Badminton">Badminton</option>
            <option value="Voli">Voli</option>
          </select>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="date" class="form-label">Tanggal</label>
            <input type="date" id="date" name="date" class="form-control" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="time" class="form-label">Waktu</label>
            <input type="time" id="time" name="time" class="form-control" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="location" class="form-label">Lokasi</label>
          <input type="text" id="location" name="location" class="form-control" placeholder="Masukkan lokasi pertandingan" required>
        </div>

        <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-primary me-2">Simpan</button>
          <a href="{{ route('schedules.index') }}" class="btn btn-secondary">Batal</a>
        </div>
      </form>
    </div>


  </body>
  </html>
</x-app-layout>