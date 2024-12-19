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
  <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}
body{
    background: #0e0f12

}
section{
    position: relative;
    width: calc(min(47rem, 90%));
    margin: 0 auto;
    min-height: 100vh;
    column-gap: 3rem;
    padding-block: min(20vh, 3rem);
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.section-title {
    font-size: 3rem;
    color: #fff;
    text-align: center;
    margin-bottom: 1.5rem; /* Memberi jarak ke slider */
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.1rem;
    position: relative;
    z-index: 10; /* Pastikan judul berada di atas latar belakang */
}
.swiper-container{
    position: relative;
}
.swiper{
    width: 100%;
    padding: 60px 0 95ox 0;
}
.swiper-slide{
    width: 10rem;
    height: 21rem;
    display: flex;
    flex-direction: column;
    align-items: self-start;
    position: relative;
}
.swiper-slide .slide-content{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -45%);
    width: 100%;
}
.swiper-slide .slide-content img{ width: 200px;
        height: 300px;
        object-fit: cover; border-radius: 10px;}

        .slide-link img {
    transition: transform 0.2s ease, box-shadow 0.3s ease;
}

.slide-link {
    display: block;
    text-decoration: none; /* Hilangkan garis bawah link */

}

.slide-link img:hover {
    transform: scale(1.05); /* Zoom in saat hover */
}

.slide-link:active img {
    transform: scale(0.95); /* Zoom out saat di klik */
    transition: transform 0.1s ease;
}
.swiper-button-prev{
    background: white;
    border-radius: 50%;
    top: 47%;
    opacity: 0.5;
    left: -30px;
    width: 30px;
    height: 30px;
    box-shadow: 0px 2px 11px rgba(0, 0, 0, 0.7)
}
.swiper-button-prev::after{content: "";}
.swiper-button-prev .bx{font-size: 25px;}

.swiper-button-next{
    background: white;
    border-radius: 50%;
    opacity: 0.5;
    top: 47%;
    right: -30px;
    width: 30px;
    height: 30px;
    box-shadow: 0px 2px 11px rgba(0, 0, 0, 0.17)
}
.swiper-button-next::after{
    content: "";}
.swiper-button-next .bx{font-size: 25px;}
@media (min-width:760px){
    .swiper-button-prev,
    .swiper-button-next{
        display: flex;
    }
}
.card-image {
    width: 200px;
    height: 300px;
    object-fit: cover;
    border-radius: 10px;
    filter: blur(2px); /* Efek blur */
    filter: brightness(0.5); /* Atur kecerahan lebih gelap */
    transition: opacity 0.2s ease, filter 0.2s ease; /* Animasi saat hover */
}

.card-image:hover {
    filter: blur(0); /* Hilangkan blur saat hover */
    opacity: 1; /* Pulihkan opasitas saat hover */
}

/* Logo di tengah gambar card */
.card-logo {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 10px; /* Ukuran logo */
    height: 10px;
    z-index: 2; /* Pastikan logo berada di atas gambar */
    opacity: 0.9; /* Sedikit transparan */
    transition: transform 0.3s ease, opacity 0.3s ease;
}

/* Animasi logo saat hover */
.slide-link:hover .card-logo {
    transform: translate(-50%, -50%) scale(1.2); /* Perbesar logo */
    opacity: 1; /* Pulihkan opasitas */
}
  </style>
</head>
<body>
<section>
<h2 class="section-title">CHOOSE YOUR SPORT</h2>
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
