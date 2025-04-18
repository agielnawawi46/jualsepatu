<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DESTINASI</title>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

  <!-- Google Fonts & Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=double_arrow" />
  <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Didact Gothic", sans-serif;
      font-weight: 600;
      font-style: normal;
    }
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      background-color: aliceblue;
    }
    .navbar {
      background: rgb(3, 115, 132);
      padding: 0px;
      color: white;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 0 auto;
    }
    .logo {
      height: 50px;
    }
    nav a {
      color: white;
      text-decoration: none;
      margin: 30px;
      font-size: 15px;
      justify-content: center;
      text-align: center;
    }
    nav a:hover {
      color: rgb(90, 170, 241);
    }

    .container {
      max-width: 1200px;
      width: 95%;
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 20px;
    }

    .text-area {
      display: flex;
      gap: 50px;
      margin-top: 50px;
    }

    a {
      text-decoration: none;
    }

    button {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 120px;
      height: 30px;
      background-color: white;
      border: solid;
      font-size: 1rem;
      font-weight: bold;
      text-align: center;
      border-radius: 10px;
      cursor: pointer;
      color: rgb(3, 115, 132);
    }

    .card-wrapper {
      max-width: 1100px;
      margin: 0 60px 35px;
      padding: 20px 10px;
      overflow: hidden;
    }

    .card-list .card-item .image-item {
      user-select: none;
      width: 320px;
      height: 410px;
      border-radius: 12px;
      object-fit: cover;
      object-position: left;
      margin-left: 15px;
    }

    .sub {
      width: 310px;
      position: absolute;
      bottom: 60px;
      left: 20px;
      right: 10px;
      padding: 4px;
      color: white;
      font-size: 25px;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .description {
      width: 310px;
      position: absolute;
      bottom: 10px;
      left: 20px;
      right: 10px;
      color: white;
      font-size: 16px;
      background-color: rgba(0, 0, 0, 0.5);
      padding: 4px;
      border-radius: 5px;
    }
  </style>
</head>

<body>
  <header>
    <div class="navbar">
      <img src="{{ asset('images/Oceara pUTIH.png') }}" alt="Logo" class="logo" />
      <nav>
        <a href="index.html">HOME</a>
        <a href="destinasi.html">DESTINASI</a>
        <a href="promo.html">PROMO</a>
      </nav>
      <a href="login.html" id="user">
        <img src="{{ asset('images/user-circle-fill.png') }}" alt="User Icon" />
      </a>
    </div>
  </header>

  <div class="container swiper">
    <div class="text-area">
      <a href="galang.html"><button>GALANG</button></a>
      <a href="nongsa.html"><button>NONGSA</button></a>
      <a href="tanjung_pinggir.html"><button>Tj.PINGGIR</button></a>
      <a href="tiban.html"><button>TIBAN</button></a>
      <a href="sekupang.html"><button>SEKUPANG</button></a>
      <a href="piayu.html"><button>PIAYU</button></a>
      <a href="punggur.html"><button>PUNGGUR</button></a>
    </div>

    <div class="card-wrapper">
      <ul class="card-list swiper-wrapper">
        <li class="card-item swiper-slide">
          <img src="{{ asset('images/pnt1.jpg') }}" alt="img-1" class="image-item">
          <a><p class="sub">MIROTA</p></a>
          <a href="des1.html"><p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p></a>
        </li>
        <li class="card-item swiper-slide">
          <img src="{{ asset('images/pnt2.jpg') }}" alt="img-2" class="image-item">
          <a><p class="sub">CORNER</p></a>
          <a href="#"><p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p></a>
        </li>
        <li class="card-item swiper-slide">
          <img src="{{ asset('images/pnt3.jpg') }}" alt="img-3" class="image-item">
          <a><p class="sub">MELUR</p></a>
          <a href="#"><p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p></a>
        </li>
        <li class="card-item swiper-slide">
          <img src="{{ asset('images/pnt4.jpg') }}" alt="img-4" class="image-item">
          <a><p class="sub">MIROTA</p></a>
          <a href="#"><p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p></a>
        </li>
        <li class="card-item swiper-slide">
          <img src="{{ asset('images/pnt5.jpg') }}" alt="img-5" class="image-item">
          <a><p class="sub">MIROTA</p></a>
          <a href="#"><p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p></a>
        </li>
        <li class="card-item swiper-slide">
          <img src="{{ asset('images/pnt6.jpg') }}" alt="img-6" class="image-item">
          <a><p class="sub">MIROTA</p></a>
          <a href="#"><p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p></a>
        </li>
        <li class="card-item swiper-slide">
          <img src="{{ asset('images/pnt7.jpg') }}" alt="img-7" class="image-item">
          <a><p class="sub">MIROTA</p></a>
          <a href="#"><p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p></a>
        </li>
      </ul>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    new Swiper(".card-wrapper", {
      loop: true,
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });
  </script>
</body>
</html>
