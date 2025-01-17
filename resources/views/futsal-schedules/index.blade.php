<x-app-layout>
    <html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Cari Jadwal Futsal</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    </head>
    <body class="bg-black text-white font-sans">
        <div class="full-screen flex">
            <!-- Sidebar -->
            <div x-data="{ open: true }" class="bg-gray-900 flex flex-col p-4 w-64 space-y-8 mt-16">
                <!-- Tombol Toggle Sidebar -->
                <button @click="open = !open" class="text-gray-400 hover:text-white p-2 self-end">
                    <i class="fas" :class="open ? 'fa-chevron-left' : 'fa-chevron-right'"></i>
                </button>

                <!-- Menu Sidebar -->
                <div x-show="open" class="space-y-6">
                    <a href="/dashboard" class="flex items-center space-x-2 text-gray-400 hover:text-white">
                        <i class="fas fa-home text-xl"></i>
                        <span>Beranda</span>
                    </a>
                    <a href="/futsal-schedules/create" class="flex items-center space-x-2 text-gray-400 hover:text-white">
                        <i class="fas fa-calendar text-xl"></i>
                        <span>Buat Jadwal</span>
                    </a>
                    <a href="/futsal-schedules/index" class="flex items-center space-x-2 text-gray-400 hover:text-white">
                        <i class="fas fa-users text-xl"></i>
                        <span>Cari Jadwal</span>
                    </a>
                    <a href="/contact" class="flex items-center space-x-2 text-gray-400 hover:text-white">
                        <i class="fas fa-envelope text-xl"></i>
                        <span>Kontak</span>
                    </a>
                </div>
            </div>

            <!-- Konten Utama -->
            <div class="flex-grow bg-black text-white mt-16">
                <div class="max-w-7xl mx-auto p-6">
                    @if(session('success'))
                        <div class="bg-green-500 text-white p-4 rounded-md mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <h2 class="text-2xl font-bold mb-6">Cari Jadwal Futsal</h2>
                    <div class="bg-white p-6 rounded-lg shadow-lg text-black">
                        <!-- Filter Lokasi -->
                        <form method="GET" action="{{ route('futsal-schedules.index') }}" class="mb-4">
                            <label for="location" class="block text-sm font-medium text-gray-700">Pilih Lokasi</label>
                            <select 
                                name="location" 
                                id="location" 
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
                                onchange="this.form.submit()">
                                <option value="">Semua Lokasi</option>
                                <option value="Semarang" {{ request('location') == 'Semarang' ? 'selected' : '' }}>Semarang</option>
                                <option value="Yogyakarta" {{ request('location') == 'Yogyakarta' ? 'selected' : '' }}>Yogyakarta</option>
                                <option value="Jakarta" {{ request('location') == 'Jakarta' ? 'selected' : '' }}>Jakarta</option>
                                <option value="ambon" {{ request('location') == 'ambon' ? 'selected' : '' }}>Ambon</option>
                                <option value="bangka" {{ request('location') == 'bangka' ? 'selected' : '' }}>Bangka</option>
                                <option value="blora" {{ request('location') == 'blora' ? 'selected' : '' }}>Blora</option>
                                <option value="tegal" {{ request('location') == 'tegal' ? 'selected' : '' }}>Tegal</option>
                                <option value="pati" {{ request('location') == 'pati' ? 'selected' : '' }}>Pati</option>
                            </select>
                        </form>

                        <!-- Daftar Jadwal -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @forelse($schedules as $schedule)
                                <div class="relative bg-gradient-to-br from-gray-800 to-gray-900 rounded-xl shadow-xl overflow-hidden">
                                    <!-- Header Card -->
                                    <div class="bg-gradient-to-r from-blue-600 to-blue-800 p-4">
                                        <h2 class="text-xl font-bold text-white text-center mb-2">{{ $schedule->team_name }}</h2>
                                        
                                        @if($schedule->challenger_team)
                                            <div class="flex items-center justify-center space-x-4 mt-3">
                                                <div class="text-center">
                                                    <span class="block font-bold text-white">{{ $schedule->team_name }}</span>
                                                    <span class="text-sm text-gray-200">Tim Host</span>
                                                </div>
                                                <div class="bg-white text-blue-800 font-bold px-3 py-1 rounded-lg">VS</div>
                                                <div class="text-center">
                                                    <span class="block font-bold text-white">{{ $schedule->challenger_team }}</span>
                                                    <span class="text-sm text-gray-200">Tim Penantang</span>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Informasi Jadwal -->
                                    <div class="p-4">
                                        <!-- Status Match -->
                                        @if($schedule->challenger_team)
                                            <div class="absolute top-2 right-2">
                                                <span class="bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                                                    Match Terkonfirmasi
                                                </span>
                                            </div>
                                        @else
                                            <div class="absolute top-2 right-2">
                                                <span class="bg-yellow-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                                                    Mencari Lawan
                                                </span>
                                            </div>
                                        @endif

                                        <!-- Waktu dan Lokasi -->
                                        <div class="space-y-3 mt-3">
                                            <div class="flex items-center space-x-3 bg-gray-700 p-3 rounded-lg">
                                                <div class="bg-blue-500 p-2 rounded-lg">
                                                    <i class="fas fa-calendar-alt text-white"></i>
                                                </div>
                                                <div>
                                                    <span class="text-gray-400 text-sm">Tanggal Main</span>
                                                    <p class="text-white font-medium">
                                                        {{ \Carbon\Carbon::parse($schedule->date)->translatedFormat('l, d F Y') }}
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="flex items-center space-x-3 bg-gray-700 p-3 rounded-lg">
                                                <div class="bg-green-500 p-2 rounded-lg">
                                                    <i class="fas fa-clock text-white"></i>
                                                </div>
                                                <div>
                                                    <span class="text-gray-400 text-sm">Jam Main</span>
                                                    <p class="text-white font-medium">{{ $schedule->time }}</p>
                                                </div>
                                            </div>

                                            <div class="flex items-center space-x-3 bg-gray-700 p-3 rounded-lg">
                                                <div class="bg-red-500 p-2 rounded-lg">
                                                    <i class="fas fa-map-marker-alt text-white"></i>
                                                </div>
                                                <div>
                                                    <span class="text-gray-400 text-sm">Lokasi</span>
                                                    <p class="text-white font-medium">{{ $schedule->location }}</p>
                                                </div>
                                            </div>
                                        

                                            <div class="flex items-center space-x-3 bg-gray-700 p-3 rounded-lg">
                                                <div class="bg-red-500 p-2 rounded-lg">
                                                    <i class="fas fa-fist-raised text-white"></i>
                                                </div>
                                                <div>
                                                    <span class="text-gray-400 text-sm">sport</span>
                                                    <p class="text-white font-medium">{{ $schedule->sport_type }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        

                                            <div class="flex items-center space-x-2 bg-gray-700 p-2 rounded-lg">
                                                <div class="bg-red-500 p-2 rounded-lg">
                                                    <i class="	far fa-comment text-white"></i>
                                                </div>
                                                <div>
                                                    <span class="text-gray-400 text-sm">Deskripsi</span>
                                                    <p class="text-white font-medium">{{ $schedule->deskripsi }}</p>
                                                </div>
                                            </div>
                                        <!-- Tombol Aksi -->
                                        <div class="mt-6 space-y-2">
                                            @if(!$schedule->challenger_team)
                                                <button 
                                                    onclick="openTantangModal({{ $schedule->id }})" 
                                                    class="w-full bg-gradient-to-r from-blue-500 to-blue-700 text-white py-3 px-4 rounded-lg hover:from-blue-600 hover:to-blue-800 transition-all duration-300 flex items-center justify-center space-x-2">
                                                    <i class="fas fa-handshake"></i>
                                                    <span>Tantang Tim Ini</span>
                                                </button>
                                            @endif
                                            
                                            <form action="{{ route('futsal-schedules.destroy', $schedule->id) }}" method="POST" class="w-full">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                    onclick="return confirm('Anda yakin ingin menghapus jadwal ini?')"
                                                    class="w-full bg-gradient-to-r from-red-500 to-red-700 text-white py-3 px-4 rounded-lg hover:from-red-600 hover:to-red-800 transition-all duration-300 flex items-center justify-center space-x-2">
                                                    <i class="fas fa-trash"></i>
                                                    <span>Hapus Jadwal</span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-span-full">
                                    <div class="flex flex-col items-center justify-center py-12 bg-gray-800 rounded-xl">
                                        <i class="fas fa-calendar-times text-4xl text-gray-400 mb-4"></i>
                                        <p class="text-gray-400 text-lg">Tidak ada jadwal yang tersedia untuk lokasi ini.</p>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Tantang -->
        <div id="tantangModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-96 max-w-[90%]">
                <h2 class="text-xl font-bold mb-4">Form Tantangan Tim</h2>
                <form method="POST" action="" id="tantangForm">
                    @csrf
                    <div class="mb-4">
                        <label for="challenger_team" class="block text-sm font-medium text-gray-700 mb-1">
                            Nama Tim Anda
                        </label>
                        <input 
                            type="text" 
                            name="challenger_team" 
                            id="challenger_team" 
                            class="w-full border-gray-300 rounded-md shadow-sm p-2"
                            placeholder="Masukkan nama tim anda"
                            required
                        >
                    </div>
                    <div class="flex justify-end space-x-2">
                        <button type="button" 
                            onclick="closeTantangModal()" 
                            class="bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-600 transition-colors">
                            Batal
                        </button>
                        <button type="submit" 
                            class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition-colors">
                            Kirim Tantangan
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            function openTantangModal(scheduleId) {
                const modal = document.getElementById('tantangModal');
                modal.style.display = 'flex';
                const form = document.getElementById('tantangForm');
                form.action = `/futsal-schedules/${scheduleId}/challenge`;
            }
        
            function closeTantangModal() {
                const modal = document.getElementById('tantangModal');
                modal.style.display = 'none';
            }
        </script>
    </body>
    </html>
</x-app-layout>