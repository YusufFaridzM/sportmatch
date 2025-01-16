<x-app-layout>
  <div class="container mt-20 pt-10 text-center">
    <h1 class="text-white mb-4">Hasil Pencarian Jadwal</h1>
  
    @if($schedules->isEmpty())
      <div class="text-white">
        <p>Lawan tidak ditemukan berdasarkan kriteria yang Anda masukkan.</p>
        <a href="{{ route('schedules.create') }}" class="btn btn-primary">Tambah Jadwal Baru</a>
      </div>
    @else
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover text-white mx-auto" style="width: 80%; border: 1px solid white;">
          <thead>
            <tr>
              <th>Olahraga</th>
              <th>Nama Tim</th>
              <th>Tanggal</th>
              <th>Waktu</th>
              <th>Lokasi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($schedules as $schedule)
              <tr>
                <td>{{ $schedule->sport }}</td>
                <td>{{ $schedule->team_name }}</td>
                <td>{{ $schedule->date }}</td>
                <td>{{ $schedule->time }}</td>
                <td>{{ $schedule->location }}</td>
                <td>
                  <!-- Tombol untuk Apply yang mengarah ke form input nama tim -->
                  <a href="{{ route('schedules.showApplyForm', $schedule->id) }}" class="btn btn-success btn-sm">Apply</a>
                </td>
              </tr>
            @endforeach
             <!-- Jadwal yang sudah ada lawannya -->
        @foreach($schedules->where('challenged_team_id', '!=', null) as $schedule)
        <tr>
          <td>{{ $schedule->sport }}</td>
          <td>{{ $schedule->team_name }} vs {{ $schedule->challenged_team_name }}</td>
          <td>{{ $schedule->date }}</td>
          <td>{{ $schedule->time }}</td>
          <td>{{ $schedule->location }}</td>
          <td>
            <span class="text-success">Tantangan Diterima</span>
          </td>
        </tr>
      @endforeach
          </tbody>
        </table>
      </div>
    @endif
  
    <div class="d-flex justify-content-center mt-3">
      <a href="/sport" class="btn btn-secondary">Kembali</a>
      @if(auth()->user()->team == null)
    <a href="{{ route('teams.create') }}" class="btn btn-warning">Buat Tim Baru</a>
@endif

    </div>
  </div>
</x-app-layout>
