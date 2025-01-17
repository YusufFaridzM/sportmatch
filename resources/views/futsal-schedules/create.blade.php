<x-app-layout>
    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Tambah Jadwal Olahraga</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    </head>
    <body class="bg-black text-white font-sans">
        <div class="flex h-screen">
            <!-- Sidebar -->
            <div x-data="{ open: true }" class="bg-gray-900 flex flex-col p-4 w-64 space-y-8 mt-16">
                <button @click="open = !open" class="text-gray-400 hover:text-white p-2 self-end">
                    <i class="fas" :class="open ? 'fa-chevron-left' : 'fa-chevron-right'"></i>
                </button>

                <div x-show="open" class="space-y-6">
                    <a href="/dashboard" class="flex items-center space-x-2 text-gray-400 hover:text-white">
                        <i class="fas fa-home text-xl"></i>
                        <span>Home</span>
                    </a>
                    <a href="/futsal-schedules/create" class="flex items-center space-x-2 text-gray-400 hover:text-white">
                        <i class="fas fa-calendar text-xl"></i>
                        <span>Penjadwalan</span>
                    </a>
                    <a href="/futsal-schedules/index" class="flex items-center space-x-2 text-gray-400 hover:text-white">
                        <i class="fas fa-users text-xl"></i>
                        <span>Cari Jadwal</span>
                    </a>
                    <a href="/contact" class="flex items-center space-x-2 text-gray-400 hover:text-white">
                        <i class="fas fa-envelope text-xl"></i>
                        <span>Contact</span>
                    </a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="flex-grow bg-black text-white mt-16">
                <div class="max-w-7xl mx-auto p-6">
                    <h2 class="text-2xl font-bold mb-6">Tambah Jadwal Olahraga</h2>
                    <div class="bg-white p-6 rounded-lg shadow-lg text-black">
                        <form method="POST" action="{{ route('futsal-schedules.store') }}">
                            @csrf
                            <div class="space-y-4">
                                <!-- Nama Tim -->
                                <div>
                                    <label for="team_name" class="block text-sm font-medium text-gray-700">Nama Tim</label>
                                    <input type="text" name="team_name" id="team_name" required 
                                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>

                                <!-- Tanggal -->
                                <div>
                                    <label for="date" class="block text-sm font-medium text-gray-700">Tanggal</label>
                                    <input type="date" name="date" id="date" required 
                                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>

                                <!-- Jam -->
                                <div>
                                    <label for="time" class="block text-sm font-medium text-gray-700">Jam</label>
                                    <input type="time" name="time" id="time" required 
                                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>

                                <!-- Lokasi -->
                                <div>
                                    <label for="location_general" class="block text-sm font-medium text-gray-700">Lokasi</label>
                                    <select name="location_general" id="location_general" 
                                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="Semarang">Semarang</option>
                                        <option value="Yogyakarta">Yogyakarta</option>
                                        <option value="Jakarta">Jakarta</option>
                                    </select>
                                </div>

                                <!-- Jenis Olahraga (menggantikan detail lokasi) -->
                                <div>
                                    <label for="sport_type" class="block text-sm font-medium text-gray-700">Jenis Olahraga</label>
                                    <select name="sport_type" id="sport_type" required
                                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="futsal">Futsal</option>
                                        <option value="volly">Voli</option>
                                        <option value="badminton">Badminton</option>
                                        <option value="tenis">Tenis</option>
                                    </select>
                                </div>
                                 <!-- Nama Tim -->
                                 <div>
                                    <label for="team_name" class="block text-sm font-medium text-gray-700">deskripsi</label>
                                    <input type="text" name="deskripsi" id="deskripsi" required 
                                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>


                                <!-- Submit -->
                                <div>
                                    <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition-colors">
                                        Tambah Jadwal
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
</x-app-layout>