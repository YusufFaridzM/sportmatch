<x-app-layout>
  <section 
    id="home" 
    class="h-screen flex items-center justify-center text-center px-4" 
    style="background-color: var(--contrast); 
           color: var(--primary-bg); 
           background-image: url('https://i.pinimg.com/736x/50/19/5e/50195e720c4b5636a2786346e23151c0.jpg'); 
           background-size: cover; 
           background-position: center; 
           background-repeat: no-repeat;">
  
    <div class="container mt-20 pt-10 text-left" style="font-family: 'Inter Tight', sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh;">
      <div class="container" style="max-width: 600px;">
        <h1 class="text-center mb-4" style="color: var(--primary-bg); font-size: 3rem;">Temukan lawan</h1>  

        <form action="{{ route('schedules.index') }}" method="GET" class="shadow p-4 rounded custom-bg">
          <div class="mb-4">
              <label for="sport" class="form-label" style="color: white;">Olahraga</label>
              <select id="sport" name="sport" class="form-select" style="background-color: rgba(255, 255, 255, 0.1); color: white; border: 1px solid rgba(255, 255, 255, 0.2); border-radius: 8px;">
                  <option value="">Pilih olahraga</option>
                  <option value="Futsal">Futsal</option>
                  <option value="Tenis">Tenis</option>
                  <option value="Badminton">Badminton</option>
                  <option value="Voli">Voli</option>
              </select>
          </div>
      
          <div class="row g-3">
              <div class="col-md-6 mb-3">
                  <label for="date" class="form-label" style="color: white;">Tanggal</label>
                  <input type="date" id="date" name="date" class="form-control" style="background-color: rgba(255, 255, 255, 0.1); color: white; border: 1px solid rgba(255, 255, 255, 0.2); border-radius: 8px;">
              </div>
              <div class="col-md-6 mb-3">
                  <label for="time" class="form-label" style="color: white;">Waktu</label>
                  <input type="time" id="time" name="time" class="form-control" style="background-color: rgba(255, 255, 255, 0.1); color: white; border: 1px solid rgba(255, 255, 255, 0.2); border-radius: 8px;">
              </div>
          </div>
      
          <div class="mb-4">
              <label for="location" class="form-label" style="color: white;">Lokasi</label>
              <input type="text" id="location" name="location" class="form-control" placeholder="Masukkan lokasi pertandingan" style="background-color: rgba(255, 255, 255, 0.1); color: white; border: 1px solid rgba(255, 255, 255, 0.2); border-radius: 8px;">
          </div>
      
          <div class="d-flex justify-content-between mt-4">
              <button type="submit" class="btn btn-primary me-2 animated btn_dark">Cari</button>
              <a href="/" class="btn btn-secondary animated btn_dark">Batal</a>
              <a href="{{ route('schedules.index') }}" class="btn btn-primary mx-2">Lihat Penjadwalan</a> 
          </div>
        </form>
      </div>
    </div>
  </section>
</x-app-layout>
