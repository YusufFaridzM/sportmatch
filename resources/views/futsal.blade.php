<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badminton Rival Finder</title>
    <link rel="stylesheet" href="{{ asset('css/sport2.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Navbar -->
  <nav class="shadow-md fixed w-full top-0 z-10">
    <div class="container mx-auto flex justify-between items-center px-4 py-3">
      <!-- Brand -->
      <a href="#" class="text-2xl font-bold" style="color: var(--primary-bg);">Sportmatch</a>
      <!-- Nav Links -->
      <ul class="hidden md:flex space-x-6">
  <li><a href="/" class="text-white hover:text-accent">Home</a></li>
  <li><a href="#feature" class="text-white hover:text-accent">Feature</a></li>
  <li><a href="/sport" class="text-white hover:text-accent">Sport</a></li>
  <li><a href="#about" class="text-white hover:text-accent">About</a></li>
</ul>

      <!-- Login/Register -->
      <div class="space-x-4">
        <a href="/login" class="hidden md:inline-block btn-primary px-4 py-2 rounded-md font-inter">Login</a>
        <a href="/register" class="hidden md:inline-block btn-secondary px-4 py-2 rounded-md font-inter">Register</a>
        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="md:hidden text-dark focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
          </svg>
        </button>
      </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden">
      <ul class="flex flex-col space-y-2 px-4 py-4">
        <li><a href="#home" class="hover:text-accent">Home</a></li>
        <li><a href="#feature" class="hover:text-accent">Feature</a></li>
        <li><a href="/sport" class="hover:text-accent">Sport</a></li>
        <li><a href="#about" class="hover:text-accent">About</a></li>
        <li><a href="/login" class="text-accent">Login</a></li>
        <li><a href="/register" class="text-accent">Register</a></li>
      </ul>
    </div>
  </nav>
    <!-- Hero Section -->
  <section id="home" class="h-screen flex items-center justify-center text-center px-4" style="
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('img/futsalback.jpg') }}');
    background-size: cover;
    background-position: center;
    color: var(--primary-bg);
  ">
    <div data-aos="zoom-in">
      <h1 class="text-8xl font-bold mb-2">BADMINTON
      </h1>
      <p class="text-lg mb-8">mari bermain badminton dan temukan lawan yang sepadan</p>
      <div class="space-x-4">
        <a href="/login" class="btn-secondary px-6 py-3 rounded-md btn">Explore</a>
      </div>
    </div>
  </section>

  <div class="form-container">
  <h1>TEMUKAN LAWAN MU</h1>
        <input type="text" id="location" placeholder="Enter location">

        <input type="date" id="date">

        <button type="button" onclick="search()">Search</button>
    </div>
    <script>

        const locationInput = document.getElementById('location');

        function search() {
            const location = document.getElementById('location').value;
            const date = document.getElementById('date').value;

            if (!location || !date) {
                alert('Please fill in all fields before searching.');
                return;
            }

            alert(`Searching for activities at ${location} on ${date}.`);
        }
    </script>


</body>
</html>
