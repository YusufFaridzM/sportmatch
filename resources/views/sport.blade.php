<x-app-layout>
  <html lang="en">
  <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Futsal</title>
      <script src="https://cdn.tailwindcss.com"></script>
      {{-- <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script> --}}
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  </head>
  <body class="bg-black text-white font-sans">
      <div class="flex flex-col h-screen">
          <!-- Navbar -->
          <div class="w-full bg-gray-800 p-4 flex justify-between items-center">
              <h1 class="text-xl">Futsal App</h1>
              <div class="flex items-center space-x-4">
                  <i class="fas fa-envelope text-xl"></i>
                  <span>4</span>
                  <button class="flex items-center space-x-2">
                      <span class="text-xl">Profile</span>
                      <i class="fas fa-user text-xl"></i>
                  </button>
              </div>
          </div>
  
          <div class="flex flex-grow">
              <!-- Sidebar -->
              <div x-data="{ open: false }" class="flex flex-col bg-gray-900 p-4 space-y-8 transition-all duration-300 ease-in-out">
                  <!-- Toggle button for sidebar -->
                  <button @click="open = !open" class="text-gray-400 hover:text-white p-2">
                      <i class="fas" :class="open ? 'fa-chevron-left' : 'fa-chevron-right'"></i>
                  </button>

                  <!-- Sidebar Links -->
                  <div x-show="open" x-transition class="transition-all duration-300">
                      <div class="w-64 p-6">
                          <a href="/dashboard" class="flex flex-col items-center text-gray-400 hover:text-white">
                              <i class="fas fa-home text-2xl"></i>
                              <span class="mt-2 text-sm">Home</span>
                          </a>
                      </div>
                      <div class="w-64 p-6">
                          <a href="/futsal-schedules/create" class="flex flex-col items-center text-gray-400 hover:text-white">
                              <i class="fas fa-calendar text-2xl"></i>
                              <span class="mt-2 text-sm">Penjadwalan</span>
                          </a>
                      </div>
                      <div class="w-64 p-6">
                          <a href="/futsal-schedules/index" class="flex flex-col items-center text-gray-400 hover:text-white">
                              <i class="fas fa-users text-2xl"></i>
                              <span class="mt-2 text-sm">cari jadwal</span>
                          </a>
                      </div>
                      <div class="w-64 p-6">
                          <a href="/contact" class="flex flex-col items-center text-gray-400 hover:text-white">
                              <i class="fas fa-envelope text-2xl"></i>
                              <span class="mt-2 text-sm">Contact</span>
                          </a>
                      </div>
                  </div>
              </div>

              <!-- Main Content -->
              <div class="flex-grow w-full p-6">
                  <h1 class="text-2xl mb-4">Jadwal Futsal</h1>
                  <div class="bg-gray-800 p-4 rounded-lg mb-6">
                      <div class="flex items-center">
                          <div class="bg-yellow-500 text-black rounded-full px-2 py-1 mr-4">DES</div>
                          <div>
                              <h2 class="text-xl">Nama Tim</h2>
                              <p class="text-gray-400">Des 26</p>
                              <p class="text-green-500"><i class="fas fa-map-marker-alt text-xl"></i> Vanny Futsal</p>
                              <button class="bg-blue-600 text-white px-4 py-2 rounded-lg mt-2">Set Lineup</button>
                          </div>
                      </div>
                  </div>
  
                  <h2 class="text-xl mb-4">Past Events</h2>
                  <div class="bg-gray-800 p-4 rounded-lg">
                      <div class="flex items-center">
                          <div class="bg-gray-700 text-white rounded-full px-2 py-1 mr-4">NOV</div>
                          <div>
                              <h2 class="text-xl">Arabian Nights</h2>
                              <p class="text-gray-400">Nov 22 – 26</p>
                              <p class="text-green-500"><i class="fas fa-gift"></i> Final VIP Experience</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </body>
  </html>
</x-app-layout>
