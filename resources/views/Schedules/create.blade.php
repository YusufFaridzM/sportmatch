<x-app-layout>
  <div class="d-flex align-items-center justify-content-center vh-100" style="font-family: 'Inter Tight', sans-serif;">
    <div class="container" style="max-width: 600px;">
      <h1 class="text-center mb-4" style="color: var(--primary-bg);">Tambah Jadwal</h1>

      <form action="{{ route('schedules.store') }}" method="POST" class="shadow p-4 rounded custom-bg">
        @csrf
        <div class="mb-3">
          <label for="sport" class="form-label" style="color: white;">Olahraga</label>
          <select id="sport" name="sport" class="form-select" style="background-color: rgba(255, 255, 255, 0.1); color: white; border: 1px solid rgba(255, 255, 255, 0.2); border-radius: 8px;">
            <option value="Futsal">Futsal</option>
            <option value="Tenis">Tenis</option>
            <option value="Badminton">Badminton</option>
            <option value="Voli">Voli</option>
          </select>
        </div>

        <!-- Nama Tim Input -->
        <div class="mb-3">
          <label for="team_name" class="form-label" style="color: white;">Nama Tim</label>
          <input type="text" id="team_name" name="team_name" class="form-control" placeholder="Masukkan nama tim" style="background-color: rgba(255, 255, 255, 0.1); color: white; border: 1px solid rgba(255, 255, 255, 0.2); border-radius: 8px;" required>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="date" class="form-label" style="color: white;">Tanggal</label>
            <input type="date" id="date" name="date" class="form-control" style="background-color: rgba(255, 255, 255, 0.1); color: white; border: 1px solid rgba(255, 255, 255, 0.2); border-radius: 8px;" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="time" class="form-label" style="color: white;">Waktu</label>
            <input type="time" id="time" name="time" class="form-control" style="background-color: rgba(255, 255, 255, 0.1); color: white; border: 1px solid rgba(255, 255, 255, 0.2); border-radius: 8px;" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="location" class="form-label" style="color: white;">Lokasi</label>
          <input type="text" id="location" name="location" class="form-control" placeholder="Masukkan lokasi pertandingan" style="background-color: rgba(255, 255, 255, 0.1); color: white; border: 1px solid rgba(255, 255, 255, 0.2); border-radius: 8px;" required>
        </div>

        <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-primary me-2 animated btn_dark">Simpan</button>
          <a href="{{ route('schedules.index') }}" class="btn btn-secondary animated btn_dark">Batal</a>
        </div>
      </form>
    </div>
  </div>
</x-app-layout>
