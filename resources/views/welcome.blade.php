<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sportmatch Landing Page</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- AOS Library -->

</head>
<body class="bg-primary-bg">

  <!-- Navbar -->
  <nav class="shadow-md fixed w-full top-0 z-10">
    <div class="container mx-auto flex justify-between items-center px-4 py-3">
      <!-- Brand -->
      <a href="#" class="text-2xl font-bold" style="color: var(--primary-bg);">Sportmatch</a>
      <!-- Nav Links -->
      <ul class="hidden md:flex space-x-6">
  <li><a href="#home" class="text-white hover:text-accent">Home</a></li>
  <li><a href="#feature" class="text-white hover:text-accent">Feature</a></li>
  <li><a href="/sport" class="text-white hover:text-accent">Sport</a></li>
  <li><a href="#about" class="text-white hover:text-accent">About</a></li>
</ul>

      <!-- Login/Register -->
      <div class="space-x-4">
        <a href="/login" class="hidden md:inline-block btn-primary px-4 py-2 rounded-md font-inter">Login</a>
        <a href="/register" class="hidden md:inline-block btn-secondary px-4 py-2 rounded-md font-inter">Register</a>
        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="md:hidden text-white focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
          </svg>
        </button>
      </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden">
      <ul class="flex flex-col space-y-2 px-4 py-4">
        <li><a href="#home" class="text-white hover:text-accent">Home</a></li>
        <li><a href="#feature" class="text-white hover:text-accent">Feature</a></li>
        <li><a href="/sport" class="text-white hover:text-accent">Sport</a></li>
        <li><a href="#about" class="text-white hover:text-accent">About</a></li>
        <li><a href="/login" class="text-white">Login</a></li>
        <li><a href="/register" class="text-white">Register</a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="h-screen flex items-center justify-center text-center px-4" style="background-color: var(--contrast); color: var(--primary-bg);">
    <div data-aos="zoom-in">
      <h1 class="text-5xl font-bold mb-6">
      <span style="color: var(--primary-bg);">Cari Lawan Tanding Dan Jadwal</span>
      <span style="color: var(--secondary);">Olahraga Dengan Mudah</span>
      </h1>
      <p class="text-lg mb-8">Platform terbaik untuk para penggemar olahraga di seluruh Indonesia.</p>
      <div class="space-x-4">
        <a href="/login" class="btn-secondary px-6 py-3 rounded-md btn">Get Started</a>
        <a href="#about" class="btn-primary px-6 py-3 rounded-md btn">Read More</a>
      </div>
    </div>
  </section>
<!-- Features Section -->
<section id="features" class="features-section">
<div class=" flex items-center justify-center text-center px-4">
  <!-- Section Title -->
  <div class="features-text mb-8 animate-fadeIn">
    <h1 class="text-4xl font-bold mb-4">
    <span style="color: var(--primary-bg);">Mengapa Memilih</span>
    <span style="color: var(--secondary);">Sportmatch</span>
    <span style="color: var(--primary-bg);">Untuk Olahraga Anda</span>
    </h1>
    <p class="text-lg">
      Sportmatch menawarkan solusi cepat untuk menemukan rival olahraga di dekat Anda. Dengan fitur yang mudah digunakan, Anda dapat segera terhubung dengan sesama penggemar olahraga.
    </p>
  </div>
</div>


    <!-- Features Boxes -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 ">
      <!-- Feature 1 -->
      <div class="custom-bg p-6 rounded-lg shadow-md transform transition duration-500 hover:scale-105 animate-slideUp delay-100 relative flex flex-col items-center">
  <div class="relative w-full h-48 bg-gray-300 rounded-md flex items-center justify-center overflow-hidden">
    <img
      src="https://storage.googleapis.com/a1aa/image/lmN7vEmmI3JHNlUFfE62eoQmY9NFZ9OZeshvcqTo2jhOrhmnA.jpg"
      alt="Jadwal Pertandingan"
      class="object-cover w-full h-full transition duration-300 group-hover:opacity-80"
    />
    <div class="absolute inset-0 bg-blue-500 opacity-0 group-hover:opacity-25 transition duration-300"></div>
  </div>
  <h2 class="text-xl font-bold mt-6 text-center">
    Temukan rival dengan sangat mudah
  </h2>
  <p class="text-gray-700 text-center mt-4">
    cari dan temukan olahraga di sekitar anda
  </p>
</div>


      <!-- Feature 2 -->
      <div class="custom-bg p-6 rounded-lg shadow-md transform transition duration-500 hover:scale-105 animate-slideUp delay-100 relative flex flex-col items-center">
  <div class="relative w-full h-48 bg-gray-300 rounded-md flex items-center justify-center overflow-hidden">
    <img
      src="https://storage.googleapis.com/a1aa/image/lmN7vEmmI3JHNlUFfE62eoQmY9NFZ9OZeshvcqTo2jhOrhmnA.jpg"
      alt="Jadwal Pertandingan"
      class="object-cover w-full h-full transition duration-300 group-hover:opacity-80"
    />
    <div class="absolute inset-0 bg-blue-500 opacity-0 group-hover:opacity-25 transition duration-300"></div>
  </div>
  <h2 class="text-xl font-bold mt-6 text-center">
    Peta interaktif untuk menemukan rival
  </h2>
  <p class="text-gray-700 text-center mt-4">
    Lihat rival yang tersedia di peta waktu nyata
  </p>
</div>


      <!-- Feature 3 -->
      <div class="custom-bg p-6 rounded-lg shadow-md transform transition duration-500 hover:scale-105 animate-slideUp delay-100 relative flex flex-col items-center">
  <div class="relative w-full h-48 bg-gray-300 rounded-md flex items-center justify-center overflow-hidden">
    <img
      src="https://storage.googleapis.com/a1aa/image/lmN7vEmmI3JHNlUFfE62eoQmY9NFZ9OZeshvcqTo2jhOrhmnA.jpg"
      alt="Jadwal Pertandingan"
      class="object-cover w-full h-full transition duration-300 group-hover:opacity-80"
    />
    <div class="absolute inset-0 bg-blue-500 opacity-0 group-hover:opacity-25 transition duration-300"></div>
  </div>
  <h2 class="text-xl font-bold mt-6 text-center">
    Penjadwalkan dengan Sangat Mudah
  </h2>
  <p class="text-gray-700 text-center mt-4">
    Gunakan alat penjadwalan kami untuk mengatur pertandingan.
  </p>
</div>
</section>




        <!-- About Section -->
<section id="about" class="py-16" style="background-color: var(--contrast);">
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
    <!-- Gambar -->
    <div data-aos="fade-right">
      <img src="https://via.placeholder.com/500" alt="About Us" class="rounded-lg shadow-lg mx-auto">
    </div>
    <!-- Konten -->
    <div data-aos="fade-left" class="text-center md:text-left">
      <h2 class="text-4xl font-bold mb-6">
      <span style="color: var(--primary-bg);">About</span>
      <span style="color: var(--secondary);">Sportmatch</span>
      </h2>
      <p class="text-lg mb-6" style="color: var(--primary-bg);">
        Sportmatch adalah platform yang didedikasikan untuk membantu para penggemar olahraga
        menemukan lawan tanding, menjadwalkan pertandingan, dan mengeksplorasi lokasi terbaik
        untuk berbagai jenis olahraga. Kami berkomitmen untuk membangun komunitas olahraga
        yang lebih inklusif dan terhubung.
      </p>
      <p class="text-lg mb-6" style="color: var(--primary-bg);">
        Bergabunglah dengan ribuan pengguna lainnya yang telah menemukan partner olahraga mereka
        melalui Sportmatch. Mari bersama-sama membuat olahraga lebih menyenangkan dan terorganisir!
      </p>
      <div class="space-x-4">
        <a href="/login" class="btn-primary px-6 py-3 rounded-md font-semibold">Explore Features</a>
        <a href="/sport" class="btn-secondary px-6 py-3 rounded-md font-semibold">Find Sports</a>
      </div>
    </div>
  </div>
</section>

  <!-- Footer -->
  <div class="footer">
        <div class="footer__wrapper">
            <div class="footer__title">
                <div class="footer__title-left">
                    <h2><span>Apply for partnership</span>
                         to&nbsp;explore HOT Protocol in details</h2>
                         <p class="inter-font">Fill in the form and&nbsp;we&nbsp;will contact you to&nbsp;discuss further details</p>
                        </div>
                        <div class="footer__title-right">
                            <a class="btn btn_dark animated btn_lite btn_single" href="https://docs.google.com/forms/d/e/1FAIpQLSfEbLUIKc_nXO48Xp-pOVKVI0DuL9taRGshm26CvPO1KsJXgw/viewform" targe="_blank" data-hover="Apply"><span>Apply</span></a>
                        </div>
                    </div>
                    <div class="footer__map">
                    <div class="footer__left">
                            <img src="{{ asset('img/logo.png') }}" alt="HOT Protocol">
                            <p class="inter-font">© HOT Protocol, 2024</p>
                    </div>
                        <div class="footer__right">
                            <div class="footer__menu">
                                <div class="footer__menu-item">
                                    <h3 class="inter-font">Socials</h3>
                                    <ul>
                                    <li><a href="https://t.me/hotonnear" target="_blank">Telegram</a></li>
                                    <li><a href="https://x.com/hotdao_" target="_blank">X (Twitter)</a></li>
                                    <li><a href="https://www.youtube.com/@hot-dao" target="_blank">Youtube</a></li>
                                    <li><a href="https://www.instagram.com/here_wallet/" target="_blank">Instagram</a></li>
                                   </ul>
                            </div>
                            <div class="footer__menu-item">
                                <h3 class="inter-font">For developers</h3>
                                <ul>
                                    <li><a href="https://docs.hotdao.ai/sdk/wallet-connect" target="_blank">Docs</a></li></ul>
                                </div>
                                <div class="footer__menu-item">
                                    <h3 class="inter-font">Apps</h3>
                                    <ul><li><a href="https://t.me/herewalletbot/app?startapp=site" target="_blank">HOT Wallet</a></li>
                                        <li><a href="https://my.herewallet.app/" target="_blank">HERE Wallet</a></li>
                                    </ul>
                                </div>
                                <div class="footer__menu-item">
                                    <h3 class="inter-font">Contact us</h3>
                                    <ul><li><a href="https://docs.google.com/forms/d/e/1FAIpQLSfEbLUIKc_nXO48Xp-pOVKVI0DuL9taRGshm26CvPO1KsJXgw/viewform" target="_blank">Apply for partnership</a></li>
                                        <li><a href="mailto:support@herewallet.app">support@herewallet.app</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

  <!-- AOS Script -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    // Mobile Menu Toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
