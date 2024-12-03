<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Futsal</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-black text-white font-sans">
  <div class="flex flex-col h-screen">
   <!-- Navbar -->
   <div class="w-full bg-gray-800 p-4 flex justify-between items-center">
    <h1 class="text-xl"></h1>
    <div class="flex items-center space-x-4">
     <i class="fas fa-cube text-xl"></i>
     <span>0</span>
     <i class="fas fa-coins text-xl"></i>
     <span>0</span>
     <i class="fas fa-bell text-xl"></i>
     <span>0</span>
     <i class="fas fa-envelope text-xl"></i>
     <span>4</span>
     <div class="relative">
      <button class="flex items-center space-x-2">
       <span class="text-xl">Profile</span>
       <i class="fas fa-user text-xl"></i>
      </button>
     </div>
    </div>
   </div>

   <div class="flex flex-grow">
    <!-- Sidebar -->
    <div class="w-1/10 bg-gray-900 p-4">
        <div class="flex flex-col items-center text-gray-400 hover:text-white mb-6">
         <i class="fas fa-star text-white text-4xl"></i>
         <span class="mt-2 text-sm">Sport Match</span>
        </div>
        <nav class="space-y-8">
         <a class="flex flex-col items-center text-gray-400 hover:text-white">
          <i class="fas fa-home text-2xl"></i>
          <span class="mt-2 text-sm">Home</span>
         </a>
         <a class="flex flex-col items-center text-gray-400 hover:text-white">
          <i class="fas fa-calendar text-2xl"></i>
          <span class="mt-2 text-sm">Penjadwalan</span>
         </a>
         <a class="flex flex-col items-center text-gray-400 hover:text-white">
          <i class="fas fa-users text-2xl"></i>
          <span class="mt-2 text-sm">About Us</span>
         </a>
         <a class="flex flex-col items-center text-gray-400 hover:text-white">
          <i class="fas fa-cogs text-2xl"></i>
          <span class="mt-2 text-sm">Settings</span>
         </a>
        </nav>
       </div>

    <!-- Main Content -->
    <div class="w-4/10 flex">
     <!-- Middle Section -->
     <div class="w-2/6 p-4">
      <div class="mb-6">
       <h1 class="text-2xl mb-4">Jadwal Futsal</h1>
       <div class="flex items-center space-x-4">
        <div class="bg-gray-800 p-4 rounded-lg">
         <div class="flex items-center space-x-2">
          <div class="bg-yellow-500 text-black rounded-full px-2 py-1">DES</div>
          <div class="text-white">26</div>
          <div class="text-yellow-500">1d</div>
         </div>
        </div>
        <div class="flex-1">
         <img alt="European Tour event image" class="rounded-lg" height="150" src="https://storage.googleapis.com/a1aa/image/eQu46ktTxOToOaeoFel1HJDfv2iHFeAexqMvfQ6j1G6vhCO6JA.jpg" width="300"/>
         <div class="mt-2">
          <h2 class="text-xl">Nama Tim</h2>
          <p class="text-gray-400">Des 26</p>
          <p class="text-green-500"><i class="fas fa-map-marker-alt text-xl"></i> Vanny Futsal</p>
          <button class="bg-blue-600 text-white px-4 py-2 rounded-lg mt-2">Set Lineup</button>
         </div>
        </div>
       </div>
      </div>
      
      <div>
       <h2 class="text-xl mb-4">Past Events</h2>
       <div class="flex items-center space-x-4">
        <div class="bg-gray-800 p-4 rounded-lg">
         <div class="flex items-center space-x-2">
          <div class="bg-gray-700 text-white rounded-full px-2 py-1">NOV</div>
          <div class="text-white">22</div>
         </div>
        </div>
        <div class="flex-1">
         <img alt="Arabian Nights event image" class="rounded-lg" height="150" src="https://storage.googleapis.com/a1aa/image/f1k9w2snEpSYJqam68k145lfqd5AOl4i9vTg0NfirbFKK4onA.jpg" width="300"/>
         <div class="mt-2">
          <h2 class="text-xl">Arabian Nights</h2>
          <p class="text-gray-400">Nov 22 – 26</p>
          <p class="text-green-500"><i class="fas fa-gift"></i> Final VIP Experience</p>
         </div>
        </div>
       </div>
      </div>
     </div>

     <!-- Right Section -->
     <div class="w-5/10 p-6">
      <div class="bg-gray-800 p-4 rounded-lg">
       <img alt="Image of football players" class="rounded-lg mb-4" style=width: 90%; height: auto;\ src="https://storage.googleapis.com/a1aa/image/h195e0TWXtwtH69JLIm0scIWnLCYICpt0oQ6X4R8Omedg41TA.jpg"/>
       <p class="text-lg">Play with the best to win a Klassiker Fan Package.</p>
       <div class="flex justify-between items-center mt-4">
        <span>Game Week 31</span>
        <span class="text-yellow-400">Not Entered</span>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>
