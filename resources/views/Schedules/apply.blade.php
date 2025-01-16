<x-app-layout>
    <div class="container mt-5 pt-5 text-center">
      <h1 class="text-white mb-4">Masukkan Nama Tim Anda</h1>
  
      <form action="{{ route('schedules.apply', $schedule->id) }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="challenged_team_name" class="form-label text-white">Nama Tim Anda</label>
          <input type="text" id="challenged_team_name" name="challenged_team_name" class="form-control" placeholder="Masukkan nama tim Anda" required>
        </div>
        <button type="submit" class="btn btn-success">Konfirmasi Tantangan</button>
        <a href="{{ route('schedules.index') }}" class="btn btn-secondary">Batal</a>
      </form>
    </div>
  </x-app-layout>
  