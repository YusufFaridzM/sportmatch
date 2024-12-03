<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sportmatch Landing Page</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- AOS Library -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    /* Custom Tailwind CSS Config */
    :root {
      --primary-bg: #EFF6E0;
      --secondary: #a63d62 ;
      --accent: #702e5a;
      --contrast: #300828;
      --dark: #000000;
    }

    body {
      background-color: var(--primary-bg);
      color: var(--dark);
    }

    nav {
      background-color: var(--primary-bg);
    }
    nav a:hover {
      color: var(--accent);
    }

    .btn-primary {
      background-color: var(--accent);
      color: var(--primary-bg);
    }

    .btn-primary:hover {
      background-color: var(--contrast);
    }

    .btn-secondary {
      background-color: var(--secondary);
      color: var(--dark);
    }

    footer {
      background-color: var(--dark);
      color: var(--primary-bg);
    }

    footer a:hover {
      color: var(--accent);
    }
    /* Sport Section Styling */
.sport-logo {
  min-width: 150px;
  margin: 0 20px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.sport-logo img {
  width: 100px;
  height: 100px;
  object-fit: contain;
  filter: drop-shadow(2px 4px 6px rgba(0, 0, 0, 0.2));
  transition: transform 0.3s ease;
}
.sport-logo img:hover {
  transform: scale(1.2); /* Zoom effect on hover */
}

/* Slider Animation */
@keyframes slide {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-100%);
  }
}
.animate-slider {
  display: flex;
  animation: slide 20s linear infinite; /* 20s duration, infinite loop */
}
  </style>
</head>
<body class="bg-primary-bg">

  <!-- Navbar -->
  <nav class="shadow-md fixed w-full top-0 z-10">
    <div class="container mx-auto flex justify-between items-center px-4 py-3">
      <!-- Brand -->
      <a href="#" class="text-2xl font-bold" style="color: var(--accent);">Sportmatch</a>
      <!-- Nav Links -->
      <ul class="hidden md:flex space-x-6">
        <li><a href="#home" class="hover:text-accent">Home</a></li>
        <li><a href="#feature" class="hover:text-accent">Feature</a></li>
        <li><a href="#sport" class="hover:text-accent">Sport</a></li>
        <li><a href="#about" class="hover:text-accent">About</a></li>
      </ul>
      <!-- Login/Register -->
      <div class="space-x-4">
        <a href="/login" class="hidden md:inline-block btn-primary px-4 py-2 rounded-md font-semibold">Login</a>
        <a href="/register" class="hidden md:inline-block btn-secondary px-4 py-2 rounded-md font-semibold">Register</a>
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
        <li><a href="#sport" class="hover:text-accent">Sport</a></li>
        <li><a href="#about" class="hover:text-accent">About</a></li>
        <li><a href="/login" class="text-accent">Login</a></li>
        <li><a href="/register" class="text-accent">Register</a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="h-screen flex items-center justify-center text-center px-4" style="background-color: var(--contrast); color: var(--primary-bg);">
    <div data-aos="zoom-in">
      <h1 class="text-5xl font-bold mb-6">Cari Lawan Tanding dan Jadwal Olahraga dengan Mudah</h1>
      <p class="text-lg mb-8">Platform terbaik untuk para penggemar olahraga di seluruh Indonesia.</p>
      <div class="space-x-4">
        <a href="#feature" class="btn-secondary px-6 py-3 rounded-md font-semibold">Get Started</a>
        <a href="#about" class="btn-primary px-6 py-3 rounded-md font-semibold">Read More</a>
      </div>
    </div>
  </section>

  <!-- Feature Section -->
  <section id="feature" class="py-16">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold mb-6" data-aos="fade-up" style="color: var(--contrast);">Features</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8" data-aos="fade-right">
        <div>
          <a href="#search" class="block btn-primary text-center py-12 rounded-md shadow-lg">Search</a>
        </div>
        <div>
          <a href="#schedule" class="block btn-secondary text-center py-12 rounded-md shadow-lg">Schedule</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Sport Section -->
<section id="sport" class="py-16" style="background-color: var(--primary);">
  <div class="container mx-auto text-center">
    <h2 class="text-4xl font-bold mb-8" style="color: var(--dark);">Explore Sports</h2>
    <div class="relative overflow-hidden">
      <!-- Slider Wrapper -->
      <div class="flex items-center animate-slider">
        <!-- Logo Items -->
        <div class="sport-logo">
          <img src="https://via.placeholder.com/100" alt="Football" title="Football">
        </div>
        <div class="sport-logo">
          <img src="https://via.placeholder.com/100" alt="Futsal" title="Futsal">
        </div>
        <div class="sport-logo">
          <img src="https://via.placeholder.com/100" alt="Badminton" title="Badminton">
        </div>
        <div class="sport-logo">
          <img src="https://via.placeholder.com/100" alt="Volleyball" title="Volleyball">
        </div>
        <div class="sport-logo">
          <img src="https://via.placeholder.com/100" alt="Tennis" title="Tennis">
        </div>
        <!-- Duplicate Logos for Smooth Loop -->
        <div class="sport-logo">
          <img src="https://via.placeholder.com/100" alt="Football" title="Football">
        </div>
        <div class="sport-logo">
          <img src="https://via.placeholder.com/100" alt="Futsal" title="Futsal">
        </div>
        <div class="sport-logo">
          <img src="https://via.placeholder.com/100" alt="Badminton" title="Badminton">
        </div>
        <div class="sport-logo">
          <img src="https://via.placeholder.com/100" alt="Volleyball" title="Volleyball">
        </div>
        <div class="sport-logo">
          <img src="https://via.placeholder.com/100" alt="Tennis" title="Tennis">
        </div>
      </div>
    </div>
  </div>
</section>
        <!-- About Section -->
<section id="about" class="py-16" style="background-color: var(--secondary);">
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
    <!-- Gambar -->
    <div data-aos="fade-right">
      <img src="https://via.placeholder.com/500" alt="About Us" class="rounded-lg shadow-lg mx-auto">
    </div>
    <!-- Konten -->
    <div data-aos="fade-left" class="text-center md:text-left">
      <h2 class="text-4xl font-bold mb-6" style="color: var(--dark);">About Sportmatch</h2>
      <p class="text-lg mb-6" style="color: var(--dark);">
        Sportmatch adalah platform yang didedikasikan untuk membantu para penggemar olahraga
        menemukan lawan tanding, menjadwalkan pertandingan, dan mengeksplorasi lokasi terbaik
        untuk berbagai jenis olahraga. Kami berkomitmen untuk membangun komunitas olahraga
        yang lebih inklusif dan terhubung.
      </p>
      <p class="text-lg mb-6" style="color: var(--dark);">
        Bergabunglah dengan ribuan pengguna lainnya yang telah menemukan partner olahraga mereka
        melalui Sportmatch. Mari bersama-sama membuat olahraga lebih menyenangkan dan terorganisir!
      </p>
      <div class="space-x-4">
        <a href="#feature" class="btn-primary px-6 py-3 rounded-md font-semibold">Explore Features</a>
        <a href="#sport" class="btn-secondary px-6 py-3 rounded-md font-semibold">Find Sports</a>
      </div>
    </div>
  </div>
</section>

  <!-- Footer -->
  <footer class="py-8">
    <div class="container mx-auto text-center">
      <p>&copy; 2024 Sportmatch. All Rights Reserved.</p>
    </div>
  </footer>

  <!-- AOS Script -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
    });

    // Mobile Menu Toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
</div>
</div>
