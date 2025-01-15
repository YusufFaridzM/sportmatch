<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3D Coverflow Slider</title>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<link rel="stylesheet" href="{{ asset('css/sport.css') }}">
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
<section>
<h2 class="section-title">
<span style="color: var(--primary-bg);">Choose your</span>
<span style="color: var(--secondary);">Sport</span>
</h2>
  <div class="swiper-container">
    <div class="swiper">
        <div class="swiper-wrapper">
           <div class="swiper-slide">
           <a href="/volly" class="slide-link">
              <div class="slide-content">
              <img class="card-image" src="{{ asset('img/voli.jpg') }}" />
              <img class="card-logo" src="{{ asset('img/logovoli.png') }}" />
              </div>
          </div>
          <div class="swiper-slide">
          <a href="/futsal" class="slide-link">
              <div class="slide-content">
              <img class="card-image" src="{{ asset('img/futsalback.jpg') }}" />
              <img class="card-logo" src="{{ asset('img/logofutsal.png') }}" />
              </div>
          </div>
          <div class="swiper-slide">
          <a href="/football" class="slide-link">
              <div class="slide-content">
              <img class="card-image" src="{{ asset('img/football.jpg') }}" />
              <img class="card-logo" src="{{ asset('img/logobola.png') }}" />
              </div>
          </div>
          <div class="swiper-slide">
          <a href="/badminton" class="slide-link">
              <div class="slide-content">
              <img class="card-image" src="{{ asset('img/badminton.jpg') }}" />
              <img class="card-logo" src="{{ asset('img/logobad.png') }}" />
              </div>
          </div>
          <div class="swiper-slide">
          <a href="/tennis" class="slide-link">
              <div class="slide-content">
              <img class="card-image" src="{{ asset('img/tennis.jpg') }}" />
              <img class="card-logo" src="{{ asset('img/logotenis.png') }}" />
              </div>
          </div>
       </div>
     </div>
     <div class="swiper-button-prev">
        <i class="bx bx-left-arrow-alt"></i>
     </div>
     <div class="swiper-button-next">
        <i class="bx bx-right-arrow-alt"></i>
     </div>
   </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script type="text/javascript">
    var swiper = new Swiper(".swiper",{
        effect: "coverflow",
        grabCursor:true,
        centeredSlides:true,
        coverflowEffect:{
            rotate:0,
            stretch:0,
            depth:100,
            modifier:4,
            slideShadows:true
        },
        loop:true,
        navigation:{
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        keyboard:{
            enabled:true
        },
        mousewheel:{
            thresholDelta:70
        },
        breakpoints:{
            560:{
                slidesPerView: 2.5
            },
            768:{
                slidesPerView: 3
            },
            1024:{
                slidesPerView: 3
            },
        }
    });

    const slideLinks = document.querySelectorAll('.slide-link');

slideLinks.forEach(link => {
    link.addEventListener('click', (event) => {
        const img = link.querySelector('img');

        // Tambahkan animasi kedipan sementara
        img.style.animation = "flash 0.5s ease";

        // Hapus animasi setelah selesai untuk menghindari tumpukan
        img.addEventListener('animationend', () => {
            img.style.animation = "";
        });
    });
});

// Tambahkan animasi kedipan ke CSS
const style = document.createElement('style');
style.innerHTML = `
    @keyframes flash {
        0% { transform: scale(1); filter: brightness(1); }
        50% { transform: scale(1.1); filter: brightness(1.5); }
        100% { transform: scale(1); filter: brightness(1); }
    }
`;
document.head.appendChild(style);
  </script>
</body>
</html>
