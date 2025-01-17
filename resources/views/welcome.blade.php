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
<div style="display: flex; align-items: center; gap: 10px;">
  <img src="{{ asset('img/logo.png') }}" alt="sportmatch" style="width: 50px; height: 50px; object-fit: contain;">
  <a href="#home" class="text-2xl font-bold" style="color: var(--purple); font-size: 1.5rem;">Sportmatch</a>
</div>

<ul class="hidden md:flex space-x-6">
  <li><a href="#home" class="text-white hover:text-accent">Home</a></li>
  <li><a href="#features" class="text-white hover:text-accent">Feature</a></li>
  <li><a href="/sport" class="text-white hover:text-accent">Sport</a></li>
  <li><a href="#about" class="text-white hover:text-accent">About</a></li>
</ul>

      <!-- Login/Register -->
      <div class="space-x-4">
        <a href="/login" class="btn-primary px-6 py-3 rounded-md font-semibold"">Login</a>
        <a href="/register" class="btn-primary px-6 py-3 rounded-md font-semibold">Register</a>
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
        <li><a href="/welcome" style="color: var(--purple); hover:text-accent">Home</a></li>
        <li><a href="#features" style="color: var(--purple); hover:text-accent">Feature</a></li>
        <li><a href="/sport" style="color: var(--purple); hover:text-accent">Sport</a></li>
        <li><a href="#about" style="color: var(--purple); hover:text-accent">About</a></li>
        <li><a href="/login" lass="btn-primary px-6 py-3 rounded-md font-semibold">Login</a></li>
        <li><a href="/register" lass="btn-primary px-6 py-3 rounded-md font-semibold">Register</a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <section
  id="home"
  class="h-screen flex items-center justify-center text-center px-4">

  <!-- Menambahkan Video YouTube sebagai background -->
  <div class="video-background">
    <iframe
      width="100%"
      height="100%"
      src="https://www.youtube.com/embed/GYY7I3w3l7Q?autoplay=1&mute=1&loop=1&playlist=GYY7I3w3l7Q"
      frameborder="0"
      allow="autoplay; encrypted-media"
      allowfullscreen>
    </iframe>
  </div>

  <!-- Konten utama -->
  <div data-aos="zoom-in">
    <h1 class="text-5xl font-bold mb-6">
      <span class="primary-bg-text">Cari Lawan Tanding Dan Jadwal</span>
      <span class="purple-text">Olahraga Dengan Mudah</span>
    </h1>
    <p class="text-lg mb-8">Platform terbaik untuk para penggemar olahraga di seluruh Indonesia.</p>
    <div class="space-x-4">
      <a href="/login" class="btn-primary px-6 py-3 rounded-md font-semibold">Get Started</a>
      <a href="#about" class="btn-primary px-6 py-3 rounded-md font-semibold">Read More</a>
    </div>
  </div>
</section>


<!-- Features Section -->
<section id="features" class="features-section">
<div class=" flex items-center justify-center text-center px-4">
  <!-- Section Title -->
  <div class="features-text mb-8 animate-fadeIn">
    <h1 class="text-4xl font-bold mb-4">
    <span style="color: var(--primary-bg);">Mengapa Memilih Sportmatch</span>
    <span class="purple-text"">Untuk Olahraga Anda</span>
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
      src="https://images3.alphacoders.com/696/thumb-1920-696052.jpg"
      alt="Jadwal Pertandingan"
      class="object-cover w-full h-full transition duration-300 group-hover:opacity-80"
    />
    <div class="absolute inset-0 bg-blue-500 opacity-0 group-hover:opacity-25 transition duration-300"></div>
  </div>
  <h2 class="text-xl font-bold mt-6 text-center">
    Temukan rival dengan sangat mudah
  </h2>
  <p class="--primary-bg"class="text-blue-700 text-center mt-4">
    cari dan temukan olahraga di sekitar anda
  </p>
</div>


      <!-- Feature 2 -->
      <div class="custom-bg p-6 rounded-lg shadow-md transform transition duration-500 hover:scale-105 animate-slideUp delay-100 relative flex flex-col items-center">
  <div class="relative w-full h-48 bg-gray-300 rounded-md flex items-center justify-center overflow-hidden">
    <img
      src="https://img.freepik.com/fotos-premium/mapa-do-mundo-com-rede-de-conexao-social-de-tecnologia-global-com-luzes-e-pontos_536326-931.jpg"
      alt="Jadwal Pertandingan"
      class="object-cover w-full h-full transition duration-300 group-hover:opacity-80"
    />
    <div class="absolute inset-0 bg-blue-500 opacity-0 group-hover:opacity-25 transition duration-300"></div>
  </div>
  <h2 class="text-xl font-bold mt-6 text-center">
    Peta interaktif untuk menemukan rival
  </h2>
  <p class="--primary-bg"class="text-blue-700 text-center mt-4">
    Lihat rival yang tersedia di peta waktu nyata
  </p>
</div>


      <!-- Feature 3 -->
      <div class="custom-bg p-6 rounded-lg shadow-md transform transition duration-500 hover:scale-105 animate-slideUp delay-100 relative flex flex-col items-center">
  <div class="relative w-full h-48 bg-gray-300 rounded-md flex items-center justify-center overflow-hidden">
    <img
      src="https://t3.ftcdn.net/jpg/07/37/05/46/360_F_737054631_d9B56z6PpHwvxiHu073Tt0LfrXwUU4Mv.jpg"
      alt="Jadwal Pertandingan"
      class="object-cover w-full h-full transition duration-300 group-hover:opacity-80"
    />
    <div class="absolute inset-0 bg-blue-500 opacity-0 group-hover:opacity-25 transition duration-300"></div>
  </div>
  <h2 class="text-xl font-bold mt-6 text-center">
    Penjadwalkan dengan Sangat Mudah
  </h2>
  <p class="--primary-bg"class="text-blue-700 text-center mt-4">
    Gunakan alat penjadwalan kami untuk mengatur pertandingan.
  </p>
</div>
</section>




        <!-- About Section -->
<section id="about" class="py-16" style="background-color: var(--contrast);">
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
    <!-- Gambar -->
    <div data-aos="fade-right">
      <img src="https://img.pikbest.com/wp/202405/nighttime-view-of-a-3d-rendered-football-stadium_9798284.jpg!bw700" alt="About Us" class="rounded-lg shadow-lg mx-auto">
    </div>
    <!-- Konten -->
    <div data-aos="fade-left" class="text-center md:text-left">
      <h2 class="text-4xl font-bold mb-6">
      <span style="color: var(--primary-bg);">About Sportmatch</span>
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
        <a href="/sport" class="btn-primary px-6 py-3 rounded-md font-semibold"">Find Sports</a>
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
                         to&nbsp;explore Sportmatch in details</h2>
                         <p class="inter-font">Fill in the form and&nbsp;we&nbsp;will contact you to&nbsp;discuss further details</p>
                        </div>
                        <div class="footer__title-right">
                        <a class="btn-primary px-6 py-3 rounded-md font-semibold" href="https://forms.gle/3ndkykxdJquxiVvg6" target="_blank" data-hover="Apply">
                            <span>Apply</span>
                        </a>
                        </div>

                    </div>
                    <div class="footer__map">
                    <div class="footer__left">
                            <p class="inter-font">© Sport Match, 2024</p>
                    </div>
                        <div class="footer__right">
                            <div class="footer__menu">
                                <div class="footer__menu-item">
                                    <h3 class="inter-font">Socials</h3>
                                    <ul>
                                    <li><a href="#" target="_blank">Telegram</a></li>
                                    <li><a href="#" target="_blank">X (Twitter)</a></li>

                                   </ul>
                            </div>
                            <div class="footer__menu-item">
                                <h3 class="inter-font">For developers</h3>
                                <ul>
                                    <li><a href="" target="_blank">Docs</a></li></ul>
                                </div>
                                <div class="footer__menu-item">
                                    <h3 class="inter-font">Apps</h3>
                                    <ul><li><a href="#" target="_blank">coming soon</a></li>
                                        <li><a href="#" target="_blank">coming soon</a></li>
                                    </ul>
                                </div>
                                <div class="footer__menu-item">
                                    <h3 class="inter-font">Contact us</h3>
                                    <ul><li><a href="#" target="_blank">Apply for partnership</a></li>
                                        <li><a href="mailto:sportmatch12@gmail.com">sportmatch12@gmail.com</a></li>
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
