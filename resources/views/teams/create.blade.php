<!-- resources/views/teams/create.blade.php -->

<x-app-layout>
    <div class="container mt-5 pt-5 text-center">
      <h1 class="text-white mb-4">Buat Tim Baru</h1>
  
      <form action="{{ route('teams.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label text-white">Nama Tim</label>
          <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama tim" required>
        </div>
  
        <button type="submit" class="btn btn-primary">Buat Tim</button>
        <a href="{{ route('schedules.index') }}" class="btn btn-secondary">Batal</a>
      </form>
    </div>
  </x-app-layout>
  