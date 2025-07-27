<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> www.arkhanzaindocharcoal.com</title>

  <link rel="stylesheet" type="text/css" href="css/vendor.css">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


  <!-- Link Bootstrap's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">

  <style>
    header {
      z-index: 1000 !important;
    }

    .modal-backdrop {
      z-index: 1050 !important;
    }

    .modal {
      z-index: 1060 !important;
    }

    .modal-dialog {
      margin-top: 80px;
      /* atur agar tidak mepet header */
    }

    .bg-image-overlay {
      position: relative;
      background: url('https://cdn.pixabay.com/photo/2018/08/18/00/03/fire-3614029_960_720.jpg') center center / cover no-repeat;
      min-height: 400px;
      z-index: 1;
    }

    .bg-image-overlay::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
      /* <- ini adalah efek opacity */
      z-index: 2;
    }

    .bg-image-overlay .content {
      position: relative;
      z-index: 3;
    }

    .scrolling-wrapper {
      max-height: 120px;
      overflow-x: auto;
      display: flex;
      white-space: nowrap;
      animation: scrollLeft 20s linear infinite;
      width: max-content;
      align-items: center;
      /* Tambahkan agar gambar diratakan secara vertikal */
    }

    .scrolling-wrapper img {
      max-height: 120px;
      /* Sesuaikan dengan tinggi container */
      height: auto;
      /* Biarkan tinggi menyesuaikan proporsional */
      object-fit: contain;
      /* Pastikan gambar tidak terpotong */
      margin: 0 20px;
      user-select: none;
      pointer-events: auto;
    }



    /* Animasi pindah dari posisi 0 ke -50% dari panjang konten (karena isi di-duplikat) */
    @keyframes scrollLeft {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(calc(-50%));
      }
    }

    .scroll-container {
      overflow: hidden;
      position: relative;
    }

    .scrolling-content {
      display: inline-flex;
    }

    .scroll-row {
      overflow: hidden;
      position: relative;
      height: 160px;
    }

    .scroll-track {
      display: flex;
      gap: 10px;
      width: max-content;
      animation: scroll-left 20s linear infinite;
    }

    .scroll-track-left {
      display: flex;
      gap: 10px;
      width: max-content;
      animation: scroll-left 35s linear infinite;
    }

    @keyframes scroll-left {
      0% {
        transform: translateX(0%);
      }

      100% {
        transform: translateX(-50%);
      }
    }

    @keyframes scroll-right {
      0% {
        transform: translateX(0%);
      }

      100% {
        transform: translateX(50%);
      }
    }

    .scroll-img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      cursor: pointer;
    }

    /* Lightbox popup */
    .lightbox {
      display: none;
      position: fixed;
      z-index: 1050;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.8);
      align-items: center;
      justify-content: center;
    }

    .lightbox-content {
      max-width: 90%;
      max-height: 90%;
      display: block;
      margin: auto;
      border-radius: 10px;
      box-shadow: 0 0 10px #fff;
    }

    .close {
      position: absolute;
      top: 20px;
      right: 35px;
      color: white;
      font-size: 40px;
      font-weight: bold;
      cursor: pointer;
      z-index: 1100;
    }

    .close:hover {
      color: #ccc;
    }

    .header-shadow {
      box-shadow: 0 4px 20px rgba(255, 69, 0, 0.6);
      /* oranye kemerahan */
      z-index: 999;
      /* pastikan di atas elemen lain */
    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Fonts ================================================== -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

  <!-- script ================================================== -->
  <script src="js/modernizr.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example2" tabindex="0" style="overflow: auto !important;">

  <!-- nav bar start  -->
  <header id="nav" class="site-header position-fixed text-white bg-dark header-shadow">
    <nav id="navbar-example2" class="navbar navbar-expand-lg py-2">


      <div class="container ">

        <a class="navbar-brand" href="./#">
          <img src="images/LogoArkhanza.png" style="max-width: 150px;"">
          </a>


        <button class=" navbar-toggler text-white" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2"
            aria-label="Toggle navigation">
          <ion-icon name="menu-outline" style="font-size: 30px;"></ion-icon></button>

          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2"
            aria-labelledby="offcanvasNavbar2Label">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menu</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul
                class="navbar-nav align-items-center justify-content-end align-items-center flex-grow-1 ">
                <li class="nav-item">
                  <a class="nav-link active me-md-4" href="#billboard">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-md-4" href="#residence">Product</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-md-4" href="#about-us">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-md-4" href="#help">Contact</a>
                </li>
                <!-- <li class="nav-item dropdown ">
                  <a class="nav-link me-md-4 text-center dropdown-toggle" data-bs-toggle="dropdown" role="button"
                    aria-expanded="false">Pages</a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item">About</a>
                    </li>
                    <li><a class="dropdown-item">Blog</a>
                    </li>
                    <li><a class="dropdown-item">Blog-Single <span class="badge bg-secondary">PRO</span></a></li>
                    <li><a class="dropdown-item">Properties <span class="badge bg-secondary">PRO</span></a></li>
                    <li><a class="dropdown-item">Property-Single <span class="badge bg-secondary">PRO</span></a>
                    </li>
                    <li><a class="dropdown-item">Contact <span class="badge bg-secondary">PRO</span></a>
                    </li>
                    <li><a class="dropdown-item">Review <span class="badge bg-secondary">PRO</span></a>
                    </li>
                    <li><a class="dropdown-item">Agents</a>
                    </li>
                    <li><a class="dropdown-item">FAQs</a>
                    </li>
                    <li><a class="dropdown-item">Styles</a>
                    </li>
                  </ul>
                </li> -->
                <!-- <li class="nav-item">
                  <a class="nav-link mx-md-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
                </li> -->




                <li class="nav-item">
                  <a class="btn-medium btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal2">Sign
                    Up</a>
                </li>

              </ul>

            </div>
          </div>


      </div>
    </nav>
  </header>

  <!-- billboard start -->
  <section id="billboard">
    <div id="briketCarousel" class="carousel slide mb-6" data-bs-ride="carousel">



      <!-- Carousel Inner -->
      <div style="height: 700px;">

        <!-- VARIAN 1 -->
        <div class="mt-5 pt-5">
          <div class="container my-5">
            <div class="row flex-lg-row-reverse align-items-center">
              <div class="col-lg-6">
                <img src="https://rumahsabut.com/wp-content/uploads/2024/07/arang-batok-kelapa.jpg"
                  class="d-block mx-lg-auto img-fluid" alt="Briket Ramah Lingkungan" width="700"
                  height="500" loading="lazy">
              </div>
              <div class="col-lg-6">
                <h1 class="text-capitalize lh-1 my-3">Briket Berkualitas, Harga Terjangkau</h1>
                <p class="lead">Beli atau jual briket dengan mudah. Cocok untuk rumah tangga, UMKM,
                  hingga industri.
                  Hemat biaya dan ramah lingkungan.</p>
                <div class="d-flex gap-2 flex-wrap">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>

    <div class="container-fluid text-white bg-image-overlay">
      <div class="container content p-2">
        <div class="row align-items-md-center">

          <!-- Narasi (Kiri) -->
          <div class="col-md-6 mb-1  mb-md-0">
            <div class="h-100 p-5 text-bg-dark rounded-3">
              <h4>About Us</h4>
              <p>
                Kami adalah penyedia briket ramah lingkungan yang berkomitmen pada solusi energi
                berkelanjutan untuk
                rumah tangga, bisnis, dan industri.
                Dengan kualitas terbaik dan harga bersaing, kami siap menjadi mitra terpercaya dalam
                memenuhi
                kebutuhan energi Anda.
              </p>
              <button class="btn btn-outline-light" type="button">Pelajari Lebih Lanjut</button>
            </div>
          </div>

          <!-- Gambar (Kanan) -->
          <div class="col-md-6">
            <div class="h-100 p-3  d-flex align-items-center justify-content-center">
              <img src="https://cdn.pixabay.com/photo/2019/09/02/16/13/grill-4447568_640.jpg"
                alt="Briket Ramah Lingkungan" class="img-fluid rounded shadow-sm"
                style="max-height: 400px; object-fit: cover;">
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>


  <!-- Feature start  -->
  <section id="feature">
    <div class="container p-4 pt-5">
      <div class="text-center mb-4">
        <h3 class="text-capitalize m-0">Our Product</h3>
      </div>

      <div class="scroll-container">
        <div class="scrolling-wrapper">
          <!-- Gambar dapat diklik, trigger modal -->
          <img src="images/logo1.png" alt="logo1" data-bs-toggle="modal" data-bs-target="#imageModal"
            data-img="images/logo1.png">
          <img src="images/logo2.png" alt="logo2" data-bs-toggle="modal" data-bs-target="#imageModal"
            data-img="images/logo2.png">
          <img src="images/logo3.png" alt="logo3" data-bs-toggle="modal" data-bs-target="#imageModal"
            data-img="images/logo3.png">
          <img src="images/logo4.png" alt="logo4" data-bs-toggle="modal" data-bs-target="#imageModal"
            data-img="images/logo4.png">
          <img src="images/logo5.png" alt="logo5" data-bs-toggle="modal" data-bs-target="#imageModal"
            data-img="images/logo5.png">
          <img src="images/logo6.png" alt="logo6" data-bs-toggle="modal" data-bs-target="#imageModal"
            data-img="images/logo6.png">
          <!-- Duplikat untuk scroll terus-menerus -->
          <img src="images/logo1.png" alt="logo1" data-bs-toggle="modal" data-bs-target="#imageModal"
            data-img="images/logo1.png">
          <img src="images/logo2.png" alt="logo2" data-bs-toggle="modal" data-bs-target="#imageModal"
            data-img="images/logo2.png">
          <img src="images/logo3.png" alt="logo3" data-bs-toggle="modal" data-bs-target="#imageModal"
            data-img="images/logo3.png">
          <img src="images/logo4.png" alt="logo4" data-bs-toggle="modal" data-bs-target="#imageModal"
            data-img="images/logo4.png">
        </div>
      </div>
    </div>

    <!-- Modal Popup -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-white">
          <div class="modal-header border-0">
            <h5 class="modal-title" id="imageModalLabel">Preview Produk</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <img src="" alt="Preview" id="modalImage" class="img-fluid rounded">
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Popup -->
    <div class="modal fade" id="ModalProduct" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-white">
          <div class="modal-header border-0">
            <h5 class="modal-title" id="imageModalLabel">Preview Produk</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <img src="" alt="Preview" id="modalImage" class="img-fluid rounded mb-3">
            <h5 id="modalTitle"></h5>
            <p id="modalAddress"></p>
            <ul class="list-unstyled d-flex justify-content-center gap-3">
              <li><img src="images/bed.png" alt="bed" style="width: 16px;"> <span id="modalBed"></span>
                bed</li>
              <li><img src="images/bath.png" alt="bath" style="width: 16px;"> <span id="modalBath"></span>
                bath</li>
              <li><img src="images/square.png" alt="size" style="width: 16px;"> <span
                  id="modalSize"></span> Sqft</li>
            </ul>
          </div>
        </div>
      </div>
    </div>



  </section>
  <section class="container py-5">
    <h2 class="text-center fw-bold mb-5">our product</h2>

    <!-- Sisha Section -->
    <div class="row align-items-center mb-5">
      <div class="col-md-4">
        <div class="bg-secondary" style="height: 200px;"></div>
      </div>
      <div class="col-md-8">
        <h3 class="fw-bold">sisha</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
          industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
          and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
          leap into electronic typesetting, remaining essentially unc</p>
        <button class="btn btn-warning rounded-pill mt-3">Action</button>
      </div>
    </div>

    <div class="row mb-5">
      <div class="col-md-6">
        <div class="bg-success" style="height: 200px;"></div>
      </div>
      <div class="col-md-6">
        <div class="bg-secondary" style="height: 200px;"></div>
      </div>
    </div>

    <!-- BBQ Section -->
    <div class="row align-items-center mb-5">
      <div class="col-md-8 order-2 order-md-1">
        <h3 class="fw-bold">BBQ</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
          industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
          and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
          leap into electronic typesetting, remaining essentially unchanged.</p>
      </div>
      <div class="col-md-4 order-1 order-md-2 mb-3 mb-md-0">
        <div class="bg-secondary" style="height: 200px;"></div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="bg-secondary" style="height: 200px;"></div>
      </div>
      <div class="col-md-4">
        <div class="bg-secondary" style="height: 200px;"></div>
      </div>
      <div class="col-md-4">
        <div class="bg-secondary" style="height: 200px;"></div>
      </div>
    </div>
  </section>


  <!-- Residence start  -->
  <!-- <section id="residence">
    <div class="container p-2">
      <h3 class="text-capitalize m-0 py-lg-5">Popular Residence</h3>

      <div class="swiper-button-next residence-swiper-next  residence-arrow"></div>
      <div class="swiper-button-prev residence-swiper-prev residence-arrow"></div>

      <div class="swiper residence-swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="card" data-bs-toggle="modal" data-bs-target="#ModalProduct">
              <a><img src="https://cdn.pixabay.com/photo/2020/10/21/18/05/charcoal-5673897_960_720.jpg"
                  class="card-img-top" alt="Briket Kayu"></a>
              <div class="card-body p-0">
                <a>
                  <h5 class="card-title pt-4">Briket Kayu Alami</h5>
                </a>
                <p class="card-text">Dibuat dari limbah serbuk kayu. Cocok untuk BBQ dan pemanas rumah
                  tangga.</p>
                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"><img src="images/weight.png" alt="image"> 5 Kg</li>
                    <li class="residence-list"><img src="images/heat.png" alt="image"> 6500 kcal/kg
                    </li>
                    <li class="residence-list"><img src="images/type.png" alt="image"> Briket Kayu
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="card">
              <a data-bs-toggle="modal" data-bs-target="#popupBriket">
                <img src="https://cdn.pixabay.com/photo/2020/10/21/18/05/charcoal-5673897_960_720.jpg"
                  class="card-img-top" alt="Briket Tempurung Kelapa">
              </a>

              <div class="card-body p-0">
                <a>
                  <h5 class="card-title pt-4">Briket Tempurung Kelapa</h5>
                </a>
                <p class="card-text">Tahan lama dan bebas asap, cocok untuk shisha dan memasak.</p>
                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"><img src="images/weight.png" alt="image"> 1 Kg</li>
                    <li class="residence-list"><img src="images/heat.png" alt="image"> 7200 kcal/kg
                    </li>
                    <li class="residence-list"><img src="images/type.png" alt="image"> Briket Kelapa
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>



          <div class="swiper-slide">
            <div class="card">
              <a><img src="https://cdn.pixabay.com/photo/2020/10/21/18/05/charcoal-5673897_960_720.jpg"
                  class="card-img-top" alt="Briket Bambu"></a>
              <div class="card-body p-0">
                <a>
                  <h5 class="card-title pt-4">Briket Bambu Press</h5>
                </a>
                <p class="card-text">Eco-friendly, ringan, dan mudah terbakar. Ideal untuk industri
                  kecil.</p>
                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"><img src="images/weight.png" alt="image"> 2.5 Kg</li>
                    <li class="residence-list"><img src="images/heat.png" alt="image"> 6000 kcal/kg
                    </li>
                    <li class="residence-list"><img src="images/type.png" alt="image"> Briket Bambu
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="card">
              <a><img src="https://cdn.pixabay.com/photo/2020/10/21/18/05/charcoal-5673897_960_720.jpg"
                  class="card-img-top" alt="Briket Sekam Padi"></a>
              <div class="card-body p-0">
                <a>
                  <h5 class="card-title pt-4">Briket Sekam Padi</h5>
                </a>
                <p class="card-text">Alternatif murah dan efisien untuk rumah tangga dan pengeringan
                  hasil panen.</p>
                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"><img src="images/weight.png" alt="image"> 3 Kg</li>
                    <li class="residence-list"><img src="images/heat.png" alt="image"> 5500 kcal/kg
                    </li>
                    <li class="residence-list"><img src="images/type.png" alt="image"> Briket Sekam
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="card">
              <a><img src="https://cdn.pixabay.com/photo/2020/10/21/18/05/charcoal-5673897_960_720.jpg"
                  class="card-img-top" alt="Briket Campuran Biomassa"></a>
              <div class="card-body p-0">
                <a>
                  <h5 class="card-title pt-4">Briket Biomassa Campuran</h5>
                </a>
                <p class="card-text">Gabungan bahan bakar ramah lingkungan untuk kebutuhan energi skala
                  besar.</p>
                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"><img src="images/weight.png" alt="image"> 10 Kg</li>
                    <li class="residence-list"><img src="images/heat.png" alt="image"> 6800 kcal/kg
                    </li>
                    <li class="residence-list"><img src="images/type.png" alt="image"> Briket
                      Biomassa</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>






        </div>

        <div class="residence-btn">
        <a  class="btn btn-primary btn-lg my-5">View All Properties</a>
      </div> 

      </div>
  </section> -->


  <section>
    <div class="container-fluid">
      <div class="container py-5">
        <div class="row">
          <!-- Gambar besar kiri -->
          <div class="col-md-7 mb-4 mb-md-0">
            <img src="https://placehold.co/800x500" class="img-fluid rounded shadow" alt="Gambar besar">
          </div>

          <!-- Galeri gambar kanan -->
          <div class="col-md-5">
            <h2 class="mb-4 text-center">Galeri Produk</h2>

            <!-- Baris pertama: kiri ke kanan (scroll ke kiri) -->
            <div class="scroll-row mb-3">
              <div class="scroll-track">
                <img src="https://placehold.co/150" class="scroll-img" alt="1">
                <img src="https://placehold.co/150" class="scroll-img" alt="2">
                <img src="https://placehold.co/150" class="scroll-img" alt="3">
                <img src="https://placehold.co/150" class="scroll-img" alt="4">
                <img src="https://placehold.co/150" class="scroll-img" alt="5">
                <img src="https://placehold.co/150" class="scroll-img" alt="6">
                <!-- Duplikasi untuk looping -->
                <img src="https://placehold.co/150" class="scroll-img" alt="1">
                <img src="https://placehold.co/150" class="scroll-img" alt="2">
                <img src="https://placehold.co/150" class="scroll-img" alt="3">
                <img src="https://placehold.co/150" class="scroll-img" alt="4">
                <img src="https://placehold.co/150" class="scroll-img" alt="5">
                <img src="https://placehold.co/150" class="scroll-img" alt="6">
              </div>
            </div>

            <!-- Baris kedua: kanan ke kiri (scroll ke kanan) -->
            <div class="scroll-row mb-3">
              <div class="scroll-track-left">
                <img src="https://placehold.co/150" class="scroll-img" alt="7">
                <img src="https://placehold.co/150" class="scroll-img" alt="8">
                <img src="https://placehold.co/150" class="scroll-img" alt="9">
                <img src="https://placehold.co/150" class="scroll-img" alt="10">
                <img src="https://placehold.co/150" class="scroll-img" alt="11">
                <img src="https://placehold.co/150" class="scroll-img" alt="12">
                <!-- Duplikasi untuk looping -->
                <img src="https://placehold.co/150" class="scroll-img" alt="7">
                <img src="https://placehold.co/150" class="scroll-img" alt="8">
                <img src="https://placehold.co/150" class="scroll-img" alt="9">
                <img src="https://placehold.co/150" class="scroll-img" alt="10">
                <img src="https://placehold.co/150" class="scroll-img" alt="11">
                <img src="https://placehold.co/150" class="scroll-img" alt="12">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--About us start -->
  <section id="about-us">
    <div class="container">
      <div class="row py-lg-5">

        <h2 class="text-capitalize text-center m-0 py-lg-5">Why to choose us</h2>

        <div class="text-center col-lg-4">
          <img src="images/search.png" class="bd-placeholder-img rounded-circle" alt="Bootstrap Themes"
            width="140" height="140" loading="lazy">
          <h4 class="fw-normal mt-5 ">Easy to find</h4>
          <p>Urna, massa aliqua dui pellentesque. Ac, gravida in. Diam vitae, nec mattis lectus quam pretium
            amet
            facilisis.</p>
        </div>

        <div class="text-center col-lg-4">
          <img src="images/price.png" class="bd-placeholder-img rounded-circle" alt="Bootstrap Themes"
            width="140" height="140" loading="lazy">
          <h4 class="fw-normal mt-5">Affordable Prices</h4>
          <p>Urna, massa aliqua dui pellentesque. Ac, gravida in. Diam vitae, nec mattis lectus quam pretium
            amet
            facilisis.</p>
        </div>

        <div class="text-center col-lg-4">
          <img src="images/time.png" class="bd-placeholder-img rounded-circle" alt="Bootstrap Themes"
            width="140" height="140" loading="lazy">
          <h4 class="fw-normal mt-5 ">Quickly Process</h4>
          <p>Ac, gravida in diam vitae, nec mattis lectus quam pretium amet facilisis. Urna, massa aliqua dui
            pellentesque. </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonial start  -->
  <section id="testimonial">
    <div class="container my-5">



      <div class="swiper testimonial-swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="row my-5 py-lg-5">
              <div class="col-md-8 mx-auto">
                <img src="images/quote.png" class="rounded mx-auto d-inline" alt="...">
                <p class="testimonial-p mt-4">Massa semper non rutrum orci facilisi sit. Lectus porta
                  quam a
                  fringilla
                  eget viverra sem. Vulputate massa hendrerit turpis gravida tempor, porttitor.</p>

                <div class="row">
                  <div class="col-md-8">
                    <p class="pt-5 mb-1">Elena Pravo</p>
                    <p class="">Ceo, Upstate</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="row my-5 py-lg-5">
              <div class="col-md-8 mx-auto">
                <img src="images/quote.png" class="rounded mx-auto d-inline" alt="...">
                <p class="testimonial-p mt-4">Massa semper non rutrum orci facilisi sit. Lectus porta
                  quam a
                  fringilla
                  eget viverra sem. Vulputate massa hendrerit turpis gravida tempor, porttitor.</p>

                <div class="row">
                  <div class="col-md-8">
                    <p class="pt-5 mb-1">Elena Pravo</p>
                    <p class="">Ceo, Upstate</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="row my-5 py-lg-5">
              <div class="col-md-8 mx-auto">
                <img src="images/quote.png" class="rounded mx-auto d-inline" alt="...">
                <p class="testimonial-p mt-4">Massa semper non rutrum orci facilisi sit. Lectus porta
                  quam a
                  fringilla
                  eget viverra sem. Vulputate massa hendrerit turpis gravida tempor, porttitor.</p>

                <div class="row">
                  <div class="col-md-8">
                    <p class="pt-5 mb-1">Elena Pravo</p>
                    <p class="">Ceo, Upstate</p>
                  </div>
                </div>
              </div>
            </div>
          </div>




        </div>

        <div class=" testimonial-swiper-button col-md-3 position-absolute">
          <div class="swiper-button-prev testimonial-arrow"></div>
          <div class="arrow-divider"> | </div>
          <div class="swiper-button-next testimonial-arrow"></div>
        </div>

      </div>
    </div>
  </section>

  <!-- Help start  -->
  <section id="help" class="py-5"
    style="background: linear-gradient(270deg, #1A242F 0.01%, rgba(26, 36, 47, 0.00) 100%);">
    <div class="container-lg my-5">

      <div class="row d-flex justify-content-between align-items-center">

        <div class="col-md-6">
          <div class="image-holder d-flex">
            <img src="https://rumahsabut.com/wp-content/uploads/2024/07/arang-batok-kelapa.jpg"
              class="img-fluid" alt="Bootstrap Themes" loading="lazy">
          </div>
        </div>

        <div class="col-md-6">
          <div class="text-content ps-md-5 mt-4 mt-md-0">
            <h3 class="text-capitalize">Kami Hadirkan Solusi Energi Ramah Lingkungan</h3>
            <p>
              Temukan berbagai jenis briket berkualitas yang kami produksi dari bahan alami seperti
              tempurung
              kelapa, serbuk gergaji, sekam padi, dan arang kayu. Briket kami dirancang untuk memenuhi
              kebutuhan
              rumah tangga, industri kecil, hingga ekspor. Hemat biaya, minim polusi, dan mendukung energi
              berkelanjutan untuk masa depan yang lebih hijau.
            </p>
            <a class="btn btn-primary btn-lg">Hubungi Kami</a>

          </div>
        </div>


      </div>
    </div>
  </section>

  <!-- Lets start  -->
  <section id="start">
    <div class="container my-5 py-5">
      <div class="row featurette py-lg-5 ">
        <div class="col-md-5 order-md-1 d-flex">
          <h2 class="text-capitalize lh-1 mb-3">Mari beralih ke energi bersih bersama briket kami.</h3>
        </div>
        <div class="col-md-7 order-md-2">
          <div class="text-content ps-md-5 mt-4 mt-md-0">
            <p class="py-lg-2">
              Briket adalah solusi hemat dan ramah lingkungan untuk kebutuhan memasak dan industri. Kami
              menyediakan
              beragam jenis briket dari bahan alami, seperti tempurung kelapa, serbuk kayu, dan sekam
              padi—tanpa bahan
              kimia tambahan dan minim emisi asap.
            </p>
            <a class="btn btn-primary btn-lg px-4 me-md-2">Mulai Sekarang</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer start  -->
  <section id="footer">
    <div class="container footer-container">
      <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5  ">

        <div class=" col-md-4">
          <img src="images/LogoArkhanza.png" style="max-width: 300px; margin-top: -100px;">
          <p>Neque, vestibulum sed varius magna et at. Eu, adipiscing morbi augue.</p>
          <i class="bi-facebook pe-4"></i>
          <i class="bi-instagram pe-4"></i>
          <i class="bi-twitter pe-4"></i>
          <i class="bi-youtube pe-4"></i>
        </div>

        <div class="col-md-8">
          <h3>arkhanzaindocharcoal</h3>
          <p>"Jaminan Kualitas Internasional"</p>
        </div>
        <!-- <div class="col-md-2 ">
          <h5>Project</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a class="nav-link p-0 ">Houses</a></li>
            <li class="nav-item mb-2"><a class="nav-link p-0 ">Rooms</a></li>
            <li class="nav-item mb-2"><a class="nav-link p-0 ">Flats</a></li>
            <li class="nav-item mb-2"><a class="nav-link p-0 ">Appartments</a></li>
          </ul>
        </div>

        <div class="col-md-2 ">
          <h5>Company</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a class="nav-link p-0 ">How we work ?</a></li>
            <li class="nav-item mb-2"><a class="nav-link p-0 ">Capital </a></li>
            <li class="nav-item mb-2"><a class="nav-link p-0 ">Security </a></li>
          </ul>
        </div>

        <div class="col-md-2 ">
          <h5>Movement</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a class="nav-link p-0 ">Movement</a></li>
            <li class="nav-item mb-2"><a class="nav-link p-0 ">Support us</a></li>
            <li class="nav-item mb-2"><a class="nav-link p-0 ">Pricing</a></li>
          </ul>
        </div>

        <div class="col-md-2 ">
          <h5>Help</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a class="nav-link p-0 ">Privacy </a></li>
            <li class="nav-item mb-2"><a class="nav-link p-0 ">Condition</a></li>
            <li class="nav-item mb-2"><a class="nav-link p-0 ">Blog</a></li>
            <li class="nav-item mb-2"><a class="nav-link p-0 ">FAQs</a></li>
          </ul>
        </div> -->
      </footer>
    </div>



    <footer class="d-flex flex-wrap justify-content-between align-items-center border-top"></footer>

    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-2 ">
        <div class="col-md-8 d-flex align-items-center">
          <p>© 2023 , Inc. All rights reserved.</p>

        </div>
        <!-- <div class="col-md-4 d-flex align-items-center">
            <p>HTML template by: <a href="https://templatesjungle.com/" class="link-primary"
                target="_blank">TemplatesJungle</a> <br> Distributed by: <a href="https://themewagon.com"
                class="link-primary" target="_blank">ThemeWagon</a></p>

          </div> -->

      </footer>
    </div>
  </section>



  </section>

  <!-- WA Chat Popup -->
  <div id="wa-popup" style="
  position: fixed;
  bottom: 20px;
  right: 20px;
  width: 300px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  z-index: 9999;
  font-family: sans-serif;
  display: none;
  flex-direction: column;
  overflow: hidden;
">
    <!-- Header -->
    <div
      style="background-color: #25D366; color: white; padding: 10px; display: flex; justify-content: space-between; align-items: center;">
      <strong>Chat WhatsApp</strong>
      <button onclick="togglePopup()"
        style="background: none; border: none; color: white; font-size: 20px; cursor: pointer;">×</button>
    </div>

    <!-- Body -->
    <div style="padding: 10px;">
      <div style="margin-bottom: 10px;">
        <div style="background-color: #f1f1f1; padding: 8px 12px; border-radius: 10px; display: inline-block;">
          👋 <a style="color:   black; font-size: 13px;">Halo! Ada yang bisa kami bantu?</a>
        </div>
      </div>
      <textarea id="wa-message" placeholder="Ketik pesan Anda..." style="
    width: 100%;
    height: 60px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    resize: none;
    font-size: 14px;
  "></textarea>
    </div>

    <!-- Footer -->
    <div style="padding: 10px; text-align: right;">
      <button onclick="sendToWhatsApp()" style="
    background-color: #25D366;
    border: none;
    padding: 8px 14px;
    color: white;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
  ">Kirim</button>
    </div>
  </div>

  <!-- WA Chat Toggle Button -->
  <!-- Tombol Chat WhatsApp Bulat dengan Logo WA -->
  <div id="wa-button" style="position: fixed; bottom: 20px; right: 20px; z-index: 9998;">
    <button onclick="togglePopup()" style="
    background-color: #25D366;
    border: none;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    cursor: pointer;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    display: flex;
    align-items: center;
    justify-content: center;
  ">
      <img src="https://img.icons8.com/ios-filled/30/ffffff/whatsapp.png" alt="WA Icon"
        style="width: 30px; height: 30px;">
    </button>
  </div>


  <script>
    function togglePopup() {
      const popup = document.getElementById('wa-popup');
      popup.style.display = popup.style.display === 'flex' ? 'none' : 'flex';
    }

    function sendToWhatsApp() {
      const message = document.getElementById('wa-message').value.trim();
      if (message === "") {
        alert("Pesan tidak boleh kosong.");
        return;
      }
      const phone = '6281234567890'; // Ganti dengan nomor WA tujuan
      const url = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
      window.open(url, '_blank');
    }
  </script>

  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
  <!-- JS untuk ganti gambar di modal -->
  <script>
    document.querySelectorAll('.scrolling-wrapper img').forEach(img => {
      img.addEventListener('click', function() {
        const src = this.getAttribute('data-img');
        document.getElementById('modalImage').src = src;
      });
    });


    const modal = document.getElementById('ModalProduct');
    modal.addEventListener('show.bs.modal', function(event) {
      const card = event.relatedTarget;

      const image = card.getAttribute('data-image');
      const title = card.getAttribute('data-title');
      const address = card.getAttribute('data-address');
      const bed = card.getAttribute('data-bed');
      const bath = card.getAttribute('data-bath');
      const size = card.getAttribute('data-size');

      modal.querySelector('#modalImage').src = image;
      modal.querySelector('#modalTitle').textContent = title;
      modal.querySelector('#modalAddress').textContent = address;
      modal.querySelector('#modalBed').textContent = bed;
      modal.querySelector('#modalBath').textContent = bath;
      modal.querySelector('#modalSize').textContent = size;
    });
  </script>
</body>
<!-- Modal -->
<div class="modal fade" id="popupBriket" tabindex="-1" aria-labelledby="popupBriketLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content" style="background-color: #1A242F;">
      <div class="modal-header">
        <h5 class="modal-title" id="popupBriketLabel">Briket Tempurung Kelapa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex flex-column flex-md-row gap-3">
        <img src="https://cdn.pixabay.com/photo/2020/10/21/18/05/charcoal-5673897_960_720.jpg" class="img-fluid"
          style="max-width: 300px;" alt="Briket Tempurung Kelapa">
        <div>
          <p>Tahan lama dan bebas asap, cocok untuk shisha dan memasak.</p>
          <ul>
            <li><strong>Berat:</strong> 1 Kg</li>
            <li><strong>Kalori:</strong> 7200 kcal/kg</li>
            <li><strong>Jenis:</strong> Briket Kelapa</li>
          </ul>
          <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20memesan%20Briket%20Tempurung%20Kelapa"
            target="_blank" class="btn btn-success mt-2">Pesan via WhatsApp</a>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="tabs-listing mt-4">
          <nav>
            <div class="nav nav-tabs d-flex justify-content-center border-0" id="nav-tab2" role="tablist">
              <button class="btn btn-outline-primary text-uppercase me-4 " id="nav-sign-in-tab2"
                data-bs-toggle="tab" data-bs-target="#nav-sign-in2" type="button" role="tab"
                aria-controls="nav-sign-in2" aria-selected="false">Log In</button>
              <button class="btn btn-outline-primary text-uppercase active" id="nav-register-tab2"
                data-bs-toggle="tab" data-bs-target="#nav-register2" type="button" role="tab"
                aria-controls="nav-register2" aria-selected="true">Sign Up</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent1">
            <div class="tab-pane fade " id="nav-sign-in2" role="tabpanel"
              aria-labelledby="nav-sign-in-tab2">
              <form id="form3" class="form-group flex-wrap p-3 ">
                <div class="form-input col-lg-12 my-4">
                  <label for="exampleInputEmail3"
                    class="form-label fs-6 text-uppercase fw-bold text-black">Email
                    Address</label>
                  <input type="text" id="exampleInputEmail3" name="email" placeholder="Email"
                    class="form-control ps-3">
                </div>
                <div class="form-input col-lg-12 my-4">
                  <label for="inputPassword3"
                    class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
                  <input type="password" id="inputPassword3" placeholder="Password"
                    class="form-control ps-3" aria-describedby="passwordHelpBlock">
                  <div id="passwordHelpBlock2" class="form-text text-center">
                    <a class=" password">Forgot Password ?</a>
                  </div>

                </div>
                <label class="py-3">
                  <input type="checkbox" required="" class="d-inline">
                  <span class="label-body text-black">Remember Me</span>
                </label>
                <div class="d-grid my-3">
                  <button
                    class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Log
                    In</button>
                </div>
              </form>
            </div>
            <div class="tab-pane fade active show" id="nav-register2" role="tabpanel"
              aria-labelledby="nav-register-tab2">
              <form id="form4" class="form-group flex-wrap p-3 ">
                <div class="form-input col-lg-12 my-4">
                  <label for="exampleInputEmail4"
                    class="form-label fs-6 text-uppercase fw-bold text-black">Email
                    Address</label>
                  <input type="text" id="exampleInputEmail4" name="email" placeholder="Email"
                    class="form-control ps-3">
                </div>
                <div class="form-input col-lg-12 my-4">
                  <label for="inputPassword4"
                    class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
                  <input type="password" id="inputPassword4" placeholder="Password"
                    class="form-control ps-3" aria-describedby="passwordHelpBlock">
                </div>
                <label class="py-3">
                  <input type="checkbox" required="" class="d-inline">
                  <span class="label-body text-black">I agree to the <a
                      class="text-black password border-bottom">Privacy Policy</a>
                  </span>
                </label>
                <div class="d-grid my-3">
                  <button
                    class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Sign
                    Up</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</html>