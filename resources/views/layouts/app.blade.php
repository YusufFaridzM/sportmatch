<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    /* Custom Tailwind CSS Config */
    :root {
      --primary-bg: #EFF6E0;
      --secondary: #AEC3B0;
      --accent: #598392;
      --contrast: #124559;
      --dark: #01161E;
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
    
     /* Styling for the logos */
  .sport-logo {
    flex: none;
    width: 100px;
    margin: 0 10px;
  }

  .sport-logo img {
    width: 100%;
    display: block;
  }

  /* Slider wrapper to create animation */
  .slider-wrapper {
    display: flex;
    animation: scroll 10s linear infinite;
  }

  /* Keyframes for smooth scrolling animation */
  @keyframes scroll {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-100%);
    }
  }

  /* Ensure overflow hidden for smooth loop */
  .relative {
    overflow: hidden;
    white-space: nowrap;
  }

.features-section {
  background-color: #EFF6E0;
  padding: 80px 20px;
  color: #124559;
}

.features-content {
  display: flex;
  justify-content: space-between;
  gap: 30px;
  align-items: center;
  flex-wrap: wrap;
}

.features-text {
  flex: 1;
  max-width: 500px;
  text-align: left;
}

.features-text .section-title {
  font-size: 2.5rem;
  font-weight: bold;
  margin-bottom: 20px;
}

.features-text .section-description {
  font-size: 1.2rem;
  margin-bottom: 30px;
  color: #598392;
}

.features-buttons {
  margin-top: 20px;
}

.features-buttons .btn-primary,
.features-buttons .btn-secondary {
  padding: 10px 25px;
  font-size: 1rem;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.features-buttons .btn-primary {
  background-color: #124559;
  color: #EFF6E0;
  margin-right: 10px;
  transition: background-color 0.3s ease;
}

.features-buttons .btn-primary:hover {
  background-color: #01161E;
}

.features-buttons .btn-secondary {
  background-color: #598392;
  color: #EFF6E0;
  transition: background-color 0.3s ease;
}

.features-buttons .btn-secondary:hover {
  background-color: #AEC3B0;
}

.features-grid {
  display: flex;
  flex: 2;
  justify-content: flex-start;
  gap: 20px;
  flex-wrap: wrap;
}

.feature-item {
  background-color: #AEC3B0;
  border-radius: 10px;
  padding: 20px;
  width: 250px;
  text-align: center;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s ease;
}

.feature-item:hover {
  transform: scale(1.05);
}

.feature-icon img {
  width: 80px;
  height: 80px;
  object-fit: contain;
  margin-bottom: 20px;
}

.feature-title {
  font-size: 1.5rem;
  margin-bottom: 10px;
  color: #01161E;
}

.feature-description {
  font-size: 1rem;
  color: #01161E;
}
</style>
</head>
<body class="bg-primary-bg">

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
<!-- Features Section -->
<section id="features" class="features-section">
  <div class="container">
    <!-- Section Title -->
    <div class="features-text text-left mb-8 animate-fadeIn">
      <h1 class="text-4xl font-bold mb-4">
        Mengapa Memilih Sportmatch untuk Olahraga Anda
      </h1>
      <p class="text-lg">
        Sportmatch menawarkan solusi cepat untuk menemukan rival olahraga di dekat Anda. Dengan fitur yang mudah digunakan, Anda dapat segera terhubung dengan sesama penggemar olahraga.
      </p>
    </div>

    <!-- Features Boxes -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Feature 1 -->
      <div class="bg-gray-100 p-6 rounded-lg shadow-md transform transition duration-500 hover:scale-105 animate-slideUp">
        <div class="h-48 bg-gray-300 flex items-center justify-center rounded-md mb-4 relative group">
          <img
            src="https://storage.googleapis.com/a1aa/image/lmN7vEmmI3JHNlUFfE62eoQmY9NFZ9OZeshvcqTo2jhOrhmnA.jpg"
            alt="Temukan Rival"
            class="opacity-50 h-32 group-hover:opacity-80 transition duration-300"
          />
          <div class="absolute inset-0 bg-blue-500 opacity-0 group-hover:opacity-25 transition duration-300 rounded-md"></div>
        </div>
        <h2 class="text-xl font-bold mb-2 text-center">
          Temukan Rival dengan Cepat dan Mudah
        </h2>
        <p class="text-gray-700 text-center">
          Cari dan temukan penggemar olahraga di sekitar Anda.
        </p>
      </div>

      <!-- Feature 2 -->
      <div class="bg-gray-100 p-6 rounded-lg shadow-md transform transition duration-500 hover:scale-105 animate-slideUp delay-100">
        <div class="h-48 bg-gray-300 flex items-center justify-center rounded-md mb-4 relative group">
          <img
            src="https://storage.googleapis.com/a1aa/image/lmN7vEmmI3JHNlUFfE62eoQmY9NFZ9OZeshvcqTo2jhOrhmnA.jpg"
            alt="Jadwal Pertandingan"
            class="opacity-50 h-32 group-hover:opacity-80 transition duration-300"
          />
          <div class="absolute inset-0 bg-blue-500 opacity-0 group-hover:opacity-25 transition duration-300 rounded-md"></div>
        </div>
        <h2 class="text-xl font-bold mb-2 text-center">
          Jadwalkan Pertandingan dengan Sangat Mudah
        </h2>
        <p class="text-gray-700 text-center">
          Gunakan alat penjadwalan kami untuk mengatur pertandingan.
        </p>
      </div>

      <!-- Feature 3 -->
      <div class="bg-gray-100 p-6 rounded-lg shadow-md transform transition duration-500 hover:scale-105 animate-slideUp delay-200">
        <div class="h-48 bg-gray-300 flex items-center justify-center rounded-md mb-4 relative group">
          <img
            src="https://storage.googleapis.com/a1aa/image/lmN7vEmmI3JHNlUFfE62eoQmY9NFZ9OZeshvcqTo2jhOrhmnA.jpg"
            alt="Peta Interaktif"
            class="opacity-50 h-32 group-hover:opacity-80 transition duration-300"
          />
          <div class="absolute inset-0 bg-blue-500 opacity-0 group-hover:opacity-25 transition duration-300 rounded-md"></div>
        </div>
        <h2 class="text-xl font-bold mb-2 text-center">
          Peta Interaktif untuk Menemukan Rival
        </h2>
        <p class="text-gray-700 text-center">
          Lihat rival yang tersedia di peta waktu nyata.
        </p>
      </div>
    </div>

    <!-- Action Buttons -->
    <div class="features-buttons text-center mt-8 animate-fadeIn delay-300">
      <button class="btn-primary px-6 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 mr-4 transition duration-300 transform hover:scale-105">
        Pelajari
      </button>
      <button class="btn-secondary px-6 py-2 text-blue-500 border border-blue-500 rounded-md hover:bg-blue-100 transition duration-300 transform hover:scale-105">
        Jelajahi
      </button>
    </div>
  </div>
</section>

 
 <!-- Sport Section -->
<section id="sport" class="py-16" style="background-color: var(--accent);">
  <div class="container mx-auto text-center">
    <h2 class="text-4xl font-bold mb-8" style="color: var(--dark);">Explore Sports</h2>
    <div class="relative overflow-hidden">
      <!-- Slider Wrapper -->
      <div class="flex items-center slider-wrapper">
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


<div class="container mx-auto px-4 py-8">
  <div class="text-center">
      <h2 class="text-sm font-bold uppercase">Cara</h2>
      <h1 class="text-4xl font-bold mt-2">Panduan Langkah demi Langkah Menggunakan Sportmatch</h1>
      <p class="text-lg mt-4">Sportmatch memudahkan Anda untuk terhubung dengan rival olahraga. Ikuti langkah-langkah sederhana ini untuk memulai!</p>
  </div>
  <div class="flex justify-center mt-12 space-x-8">
      <div class="text-center">
          <i class="fas fa-cube text-4xl"></i>
          <h3 class="text-xl font-bold mt-4">Langkah 1: Buat Profil Anda</h3>
          <p class="mt-2">Daftar dan buat profil olahraga Anda dengan mudah.</p>
      </div>
      <div class="text-center">
          <i class="fas fa-cube text-4xl"></i>
          <h3 class="text-xl font-bold mt-4">Langkah 2: Pilih Olahraga & Lokasi Anda</h3>
          <p class="mt-2">Tentukan olahraga favorit dan lokasi Anda untuk menemukan rival.</p>
      </div>
      <div class="text-center">
          <i class="fas fa-cube text-4xl"></i>
          <h3 class="text-xl font-bold mt-4">Langkah 3: Temukan dan Tantang Rival Anda</h3>
          <p class="mt-2">Cari rival yang sesuai dan tantang mereka untuk bermain.</p>
      </div>
  </div>
  <div class="flex justify-center mt-12 space-x-4">
      <button class="bg-white border border-black text-black font-bold py-2 px-4 rounded">Mulai</button>
      <button class="bg-white border border-black text-black font-bold py-2 px-4 rounded flex items-center">
          Bergabung <i class="fas fa-arrow-right ml-2"></i>
      </button>
  </div>
</div>

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
    </body>
</html>
