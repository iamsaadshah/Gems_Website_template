<!DOCTYPE html>
<html>

<head>
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
  <title>Gems</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="./output.css" rel="stylesheet" />
  <!-- font icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
    integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- crousal -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.css" rel="stylesheet" type="text/css" />

  <script src="https://cdn.tailwindcss.com"></script>
  <!-- font -->
  <!-- Tailwind + DaisyUI -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            nunito: ["Nunito", "sans-serif"],
            cardo: ["Cardo", "serif"],       // Regular 400
            cardoItalic: ["Cardo", "serif"], // Italic 400
          },
        },
      },
    };
  </script>

  <!-- Google Fonts: Nunito 400,700 & Cardo 400 regular + italic -->
  <link
    href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;1,400&family=Nunito:wght@400;700&display=swap"
    rel="stylesheet" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
    integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="text-white">
  <section id="poster" class="h-screen w-full relative">

    <!-- crousal start -->

    <div class="carousel w-full relative" id="carousel">
      <div class="carousel-item w-full h-screen bg-cover bg-center relative"
        style="background-image: url('./images/Home-carousel-1.jpg');">
        <div class="flex flex-col justify-center items-center text-center h-full">
          <h1 class="tracking-[0.2em] text-white text-3xl p-2 font-Nunito">Brilliance</h1>
          <h4 class="italic font-cardoItalic tracking-[0.1em]">A multifaceted truth</h4>
        </div>
      </div>

      <div class="carousel-item w-full h-screen bg-cover bg-center relative"
        style="background-image: url('./images/Home-carousel-2.jpg');">
        <div class="flex flex-col justify-center items-center text-center h-full">
          <h1 class="tracking-[0.2em] text-white text-3xl p-2 font-Nunito">Passion</h1>
          <h4 class="italic font-cardoItalic tracking-[0.1em]">Creating Excellence</h4>
        </div>
      </div>

      <div class="carousel-item w-full relative">
        <img src="images/Home-carousel-4.jpg" class="w-full h-screen" />
        <div class="absolute top-[50%] left-[50%] -translate-x-1/2 -translate-y-1/2 text-center">
          <h1 class="tracking-[0.2em] text-white text-3xl p-2 font-Nunito">Beauty</h1>
          <h4 class="italic font-cardoItalic tracking-[0.1em]">Quality that Endures</h4>
        </div>
      </div>
    </div>

    <!-- crousal end -->

    <div class="flex justify-between absolute top-2 w-full">
      <img src="images/KGK-Group-Logo.png" alt="" class="w-[65px] m-10 max-[600px]:m-4 mx-15" />
      <i class="fa-solid fa-bars m-10 text-3xl"> </i>
      <!-- Nav Menu -->
      <ul id="navMenu"
        class="hidden absolute flex top-20 gap-3.5 right-10 bg-white shadow-lg text-zinc-800 p-4 max-[600px]:text-[10px] max-[600px]:gap-2 ">
        <li class="hover:text-[#8C7459] cursor-pointer"><a href="#poster">HOME</a> </li>
        <li class="hover:text-[#8C7459] cursor-pointer"><a href="#galary">BUSINESSES</a> </li>
        <li class="hover:text-[#8C7459] cursor-pointer"><a href="#cta"> OUR BRANDS</a></li>
        <li class="hover:text-[#8C7459] cursor-pointer"><a href="#locations"> LOCATIONS</a></li>
      </ul>
    </div>
  </section>

  <!-- cta-1 -->
  <section class="bg-white p-10 w-full text-center" id="cta-1">
    <h1 class="text-[#8C7459] tracking-[0.2em]  text-3xl p-2 font-Nunito ">INSPIRED TO SHINE</h1>
    <P class="text-zinc-800 p-2 mb-3 font-cardo px-16 max-[600px]:px-0">Lorem ipsum, dolor sit amet consectetur
      adipisicing elit. Sint
      tempore
      accusamus
      aliquid labore debitis. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</P>
    <button
      class="text-zinc-800 italic font-cardoItalic tracking-[0.1em] border-[1px] px-4 border-[#8C7459] p-2 duration-500 ease-in-out hover:bg-[#8C7459] hover:border-white hover:text-white ">Our
      Story</button>
  </section>

  <!-- galary -->
  <section class="mt-3 mb-5" id="gallery">
    <h1 class="text-[#8C7459] tracking-[0.2em] text-3xl p-2 font-Nunito text-center mb-5">BUSINESSES</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 max-[600px]:mx-1">
      <!-- Card 1 -->
      <div class="relative h-64 bg-cover bg-center rounded-lg duration-500 ease-in-out hover:opacity-40 "
        style="background-image: url('https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg');">
        <h2 class="absolute inset-0 flex items-center justify-center font-Nunito text-2xl 
          max-[600px]:text-[12px] text-white hover:text-[#1D232A] hover:text-3xl duration-500 ">
          DIAMONDS
        </h2>
      </div>

      <!-- Card 2 -->
      <div class="relative h-64 bg-cover bg-center rounded-lg duration-500 ease-in-out hover:opacity-40"
        style="background-image: url('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg');">
        <h2
          class="absolute inset-0 flex items-center justify-center font-Nunito text-2xl max-[600px]:text-[12px] text-white hover:text-[#1D232A] hover:text-3xl duration-500">
          GOLD
        </h2>
      </div>

      <!-- Card 3 -->
      <div class="relative h-64 bg-cover bg-center rounded-lg duration-500 ease-in-out hover:opacity-40"
        style="background-image: url('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg');">
        <h2
          class="absolute inset-0 flex items-center justify-center font-Nunito text-2xl max-[600px]:text-[12px] text-white hover:text-[#1D232A] hover:text-3xl duration-500">
          SILVER
        </h2>
      </div>

      <!-- Card 4 -->
      <div class="relative h-64 bg-cover bg-center rounded-lg duration-500 ease-in-out hover:opacity-40"
        style="background-image: url('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg');">
        <h2
          class="absolute inset-0 flex items-center justify-center font-Nunito text-2xl max-[600px]:text-[12px] text-white hover:text-[#1D232A] hover:text-3xl duration-500">
          JEWELLERY
        </h2>
      </div>

      <!-- Card 5 -->
      <div class="relative h-64 bg-cover bg-center rounded-lg duration-500 ease-in-out hover:opacity-40"
        style="background-image: url('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg');">
        <h2
          class="absolute inset-0 flex items-center justify-center font-Nunito text-2xl max-[600px]:text-[12px] text-white hover:text-[#1D232A] hover:text-3xl duration-500">
          PLATINUM
        </h2>
      </div>

      <!-- Card 6 -->
      <div class="relative h-64 bg-cover bg-center rounded-lg duration-500 ease-in-out hover:opacity-40"
        style="background-image: url('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg');">
        <h2
          class="absolute inset-0 flex items-center justify-center font-Nunito text-2xl max-[600px]:text-[12px] text-white hover:text-[#1D232A] hover:text-3xl duration-500">
          MINERALS
        </h2>
      </div>
    </div>
  </section>




  <!-- cta -->

  <section class="bg-white p-10 w-full text-center" id="cta">
    <h1 class="text-[#8C7459] tracking-[0.2em]  text-3xl p-2 font-Nunito pb-10">KGK BRANDS</h1>
    <div class="flex justify-around max-[600px]:flex-col max-[600px]:gap-5 max-[600px]:items-center">
      <img src="images/Home-brands-Entice.jpg"
        class="border-[1px] border-text-black duration-500 ease-in-out hover:scale-105 " width="180px" alt="">
      <img src="images/Home-brands-GreggRuth.jpg"
        class="border-[1px] border-text-black duration-500 ease-in-out hover:scale-105  " width="180px" alt="">
      <img src="images/Home-brands-MartinFlyer.jpg"
        class="border-[1px] border-text-black duration-500 ease-in-out hover:scale-105 " width="180px" alt="">
    </div>
  </section>

  <!-- locations -->
  <section id="locations" class="relative">
    <div
      class="w-full h-[600px] bg-cover bg-center flex flex-col justify-center items-center text-center max-[600px]:mt-10"
      style="background-image: url('./images/ezgif.com-gif-maker.gif');">

      <h1 class="text-white tracking-[0.2em] text-3xl p-2 font-Nunito max-[600px]:text-[16px]">
        A GLOBAL ENTERPRISE
      </h1>

      <button
        class="mt-4 text-white italic font-cardoItalic tracking-[0.1em] border border-[#8C7459] px-4 py-2 duration-500 ease-in-out hover:bg-[#8C7459] hover:border-white hover:text-white max-[600px]:text-[10px] max-[600px]:tracking-[0em]">
        Where you can find us
      </button>
    </div>
  </section>

  <!-- footer -->

  <footer class="p-10">
    <div>
      <ul
        class="flex justify-center align-middle gap-3 p-5 max-[500px]:grid max-[500px]:grid-cols-2 max-[500px]:justify-items-center">
        <li><a href="#"
            class=" text-[14px] border-[1px] border-white px-4 p-1.5 hover:bg-white hover:text-[#1D232A] duration-500 ease-in-out">ABOUT</a>
        </li>
        <li><a href="#"
            class=" text-[14px] border-[1px] border-white px-4 p-1.5 hover:bg-white hover:text-[#1D232A] duration-500 ease-in-out">NEWS</a>
        </li>
        <li><a href="#"
            class=" text-[14px] border-[1px] border-white px-4 p-1.5 hover:bg-white hover:text-[#1D232A] duration-500 ease-in-out">CAREERS</a>
        </li>
        <li><a href="#"
            class=" text-[14px] border-[1px] border-white px-4 p-1.5 hover:bg-white hover:text-[#1D232A] duration-500 ease-in-out">CONTACT</a>
        </li>
        <li><a href="#"
            class=" text-[14px] border-[1px] border-white px-4 p-1.5 hover:bg-white hover:text-[#1D232A] duration-500 ease-in-out">BLOG</a>
        </li>
      </ul>
    </div>

    <div>
      <ul class="flex justify-center align-middle gap-3 p-5">
        <li><a href="#"><i class="fa-brands fa-whatsapp text-2xl duration-500 ease-in-out  hover:text-3xl   "></i></a>
        </li>
        <li><a href="#"><i class="fa-brands fa-instagram text-2xl duration-500 ease-in-out  hover:text-3xl "></i></a>
        </li>
        <li><a href="#"><i class="fa-brands fa-linkedin text-2xl duration-500 ease-in-out  hover:text-3xl "></i></a>
        </li>
        <li><a href="#"><i class="fa-brands fa-facebook-f text-2xl duration-500 ease-in-out  hover:text-3xl "></i></a>
        </li>
        <li><a href="#"><i class="fa-brands fa-youtube text-2xl duration-500 ease-in-out  hover:text-3xl "></i></a></li>
      </ul>
    </div>
    <p class="text-center text-[10px]">Copyright © 2025 Saad shah | Legal and Privacy</p>
  </footer>
  <script>
    let hamburger = document.querySelector(".fa-solid.fa-bars");
    let navMenu = document.getElementById("navMenu");

    hamburger.addEventListener("click", () => {
      navMenu.classList.toggle("hidden");
    });

    hamburger.addEventListener("click", () => {
      hamburger.style.diaplay = "none";
    });
  </script>
  <script>
    let carousel = document.getElementById("carousel");
    let slides = carousel.querySelectorAll(".carousel-item");
    let index = 0;

    function showSlide(i) {
      slides.forEach((slide, idx) => {
        slide.style.display = idx === i ? "block" : "none";
      });
    }

    function nextSlide() {
      index = (index + 1) % slides.length;
      showSlide(index);
    }

    // Initial
    showSlide(index);

    // Auto play every 3 seconds
    setInterval(nextSlide, 3000);
  </script>
</body>

</html>