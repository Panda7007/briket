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
          <img src="bahan/LogoArkhanza.png" style="max-width: 150px;"">
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
                  <a class="nav-link me-md-4" href="#product">Product</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-md-4" href="#about-us">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-md-4" href="#contact">Contact</a>
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




                <!-- <li class="nav-item">
                  <a class="btn-medium btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal2">Sign
                    Up</a>
                </li> -->

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
      <div style="height: 400px;">
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
                <h1 class="text-capitalize lh-1 my-3">CV Arkhanza Indo Charcoal </h1>
                <p class="lead">Indonesia's Premium Charcoal, Globally Ignited.</p>
                <div class="d-flex gap-2 flex-wrap">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about-us">

    <div class="container-fluid text-white bg-image-overlay">
      <div class="container content p-2">
        <div class="row align-items-md-center">

          <!-- Narasi (Kiri) -->
          <div class="col-md-6 mb-1  mb-md-0">
            <div class="h-100 p-5 text-bg-dark rounded-3">
              <h4>About Us</h4>
              <p>
                CV Arkhanza Indo Charcoal is an Indonesian-based company specializing in the production
                and export of premium coconut shell charcoal briquettes. Founded with a mission to bring
                Indonesia’s natural excellence to the global stage, we pride ourselves on quality,
                integrity, and sustainability.

                </n>
                Our core product — Coconut Charcoal Briquette — is manufactured using 100% natural
                coconut shell, making it eco-friendly and efficient for use in shisha/hookah and
                barbecue. Our factory operates under strict quality control to ensure that every batch
                meets international standards in performance, cleanliness, and consistency.
              </p>
              <!-- <button class="btn btn-outline-light" type="button">Pelajari Lebih Lanjut</button> -->
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
            <li><img src="images/square.png" alt="size" style="width: 16px;"> <span id="modalSize"></span>
              Sqft</li>
          </ul>
        </div>
      </div>
    </div>
  </div>



  </section>
  <section id="product" class="container py-5">
    <h2 class="text-center fw-bold mb-5">Our Product</h2>

    <!-- Sisha Section -->
    <div class="row align-items-center mb-5">
      <div class="col-md-4">
        <img src="bahan/sisha0.jpg" class="w-100 h-10">
        <!-- <div class="bg-secondary" style="height: 200px;"></div> -->
      </div>
      <div class="col-md-8">
        <h3 class="fw-bold">Shisha Charcoal</h3>
        <p>Our Shisha Charcoal Briquettes are made from 100% natural coconut shell charcoal, using
          food-grade tapioca starch as a binder. Designed specifically for hookah use, they offer a long
          burn time, low ash content, consistent heat, and no unwanted odors or chemicals. Produced under
          strict quality control, our briquettes ensure a clean, smooth smoking experience, making them a
          premium choice for shisha enthusiasts worldwide.</p>
        <button class="btn btn-warning rounded-pill mt-3"
          onclick="window.open('https://wa.me/6281234567890?text=Hello%2C%20I%20would%20like%20to%20order%20the%20Shisha%20Charcoal.%20Please%20provide%20more%20details.', '_blank')">
          Order via WhatsApp
        </button>


      </div>
    </div>

    <div class="row mb-5">
      <div class="col-md-6">

        <img src="bahan/SISHA1.png" class="w-100 h-10">
        <!-- <div class="bg-success" style="height: 200px;"></div> -->
      </div>
      <div class="col-md-6">
        <img src="bahan/SISHA2.png" class="w-100 h-10">
        <!-- <div class="bg-secondary" style="height: 200px;"></div> -->
      </div>
    </div>

    <!-- BBQ Section -->
    <div class="row align-items-center mb-5">
      <div class="col-md-8 order-2 order-md-1">
        <h3 class="fw-bold">Barberque Charcoal</h3>
        <p>Our BBQ Charcoal is crafted from 100% natural coconut shell, delivering long-lasting heat with a
          burning time of up to 5 hours. Designed for efficient grilling, it reaches temperatures of over
          800°F, ensuring consistent performance. Free from chemical additives, our charcoal briquettes
          are eco-friendly, low-smoke, and clean-burning — perfect for both household and commercial
          barbecue needs</p>
        <button class="btn btn-warning rounded-pill mt-3"
          onclick="window.open('https://wa.me/6281234567890?text=Hello%2C%20I%20would%20like%20to%20order%20the%20Barberque%20Charcoal.%20Please%20provide%20more%20details.', '_blank')">
          Order via WhatsApp
        </button>
      </div>
      <div class="col-md-4 order-1 order-md-2 mb-3 mb-md-0">
        <img src="bahan/bbq0.jpg" class="w-100 h-10">
        <!-- <div class="bg-secondary" style="height: 200px;"></div> -->
      </div>
    </div>

    <div class="row mb-5">
      <div class="col-md-6">

        <img src="bahan/bbq1.png" class="w-100 h-10">
        <!-- <div class="bg-success" style="height: 200px;"></div> -->
      </div>
      <div class="col-md-6">
        <img src="bahan/bbq1.png" class="w-100 h-10">
        <!-- <div class="bg-secondary" style="height: 200px;"></div> -->
      </div>
    </div>
  </section>

  <section class="position-relative">
    <!-- Gambar background -->


    <!-- Overlay content -->
    <div class="position-relative text-center text-white py-5" style="z-index: 2;">
      <h2 class="fw-bold">Shipping & Eksport Detail</h2>
    </div>
    <div class="container">
      <div class="row col-12">

        <img src="bahan/shipping.jpg" class="w-100 h-10">
      </div>
      <div class="row align-items-center mb-5">
        <div class="col-md-4  order-1  order-md-1 mb-3 mb-md-0">
          <img src="bahan/kontainer_kc.jpg" class="w-100 p-4" alt="Kontainer pengiriman">
        </div>
        <div class="col-md-8 order-2 order-md-2">
          <h3 class="fw-bold">Shipping Detail</h3>
          <ul class="list-unstyled">
            <li><strong>Production Capacity:</strong> 250 MT / month</li>
            <li><strong>Payment Term:</strong> TT 50% Down Payment & 50% After Stuffing</li>
            <li><strong>Port Loading:</strong> Tanjung Emas, Semarang</li>
            <li><strong>Minimum Order Quantity:</strong> 18 MT / 20”FCL</li>
            <li><strong>Shipping Document:</strong> Bill of lading, Commercial Invoice, Packing List,
              Certificate of
              Origin (COA), Report of Analysis, Self Heating Test.</li>
          </ul>
        </div>

      </div>

      <div class="row align-items-center mb-5">
        <div class="col-md-4 order-2 order-md-2  mb-3 mb-md-0">
          <img src="bahan/box1.jpg" class="w-100 p-4" alt="Kemasan produk">
        </div>
        <div class="col-md-8  order-1 order-md-1 ">
          <h3 class="fw-bold">Packaging Detail</h3>
          <ul class="list-unstyled">
            <li><strong>Brand Box:</strong> 1 kg, inner plastic + inner box + Master box 10 kg</li>
            <li><strong>Master Box Only:</strong> 10 kg, inner plastic</li>
            <li><strong>Plastic bag:</strong> 10 kg</li>
          </ul>
        </div>
      </div>
      <div class="row align-items-center mb-5">
        <div class="col-md-8 order-2 order-md-2 ">
          <h3 class="fw-bold">Burning & Drop Test</h3>
          <p>Our charcoal has long burning time 2 - 2,5 hours without crack.</p>

        </div>
        <div class="col-md-4 order-1 order-md-1 mb-3 mb-md-0">
          <img src="bahan/burn.jpg" class="w-100 p-4" alt="Kontainer pengiriman">
        </div>
      </div>

    </div>
    </div>

  </section>
  <div class="position-relative text-center text-white py-5" style="z-index: 2;">
    <h2 class="fw-bold">Why Arkhanza Indo Charcoal</h2>
  </div>
  <div class="container">
    <img src="bahan/box2a.jpg" class="w-100 h-10">
    <img src="bahan/kelebihan.png" class="w-100 h-10">
    <img src="bahan/box5.png" class="w-100 h-10">
  </div>
  </section>




  <section>
    <div id="galery" class="container-fluid">
      <div class="container py-5">
        <div class="row">
          <!-- Gambar besar kiri -->
          <div class="col-md-7 mb-4 mb-md-0 text-center">
            <img src="bahan/box2a.jpg" class="img-fluid rounded shadow" alt="Gambar besar"
              style="width: auto; height: 400px;">
          </div>

          <!-- Galeri gambar kanan -->
          <div class="col-md-5">
            <h2 class="mb-4 text-center">Galery Product</h2>

            <!-- Baris pertama: kiri ke kanan (scroll ke kiri) -->
            <div class="scroll-row mb-3" style="height: 350px;">


              <div class="scroll-track">
                <img src="produk/f1.jpg" class="scroll-img" alt="1">
                <img src="produk/f2.jpg" class="scroll-img" alt="2">
                <img src="produk/f3.jpg" class="scroll-img" alt="3">
                <img src="produk/f4.jpg" class="scroll-img" alt="4">
                <img src="produk/f5.jpg" class="scroll-img" alt="5">
                <img src="produk/f6.jpg" class="scroll-img" alt="6">
                <img src="produk/f7.jpg" class="scroll-img" alt="7">
                <img src="produk/f8.jpg" class="scroll-img" alt="8">
                <img src="produk/f9.jpg" class="scroll-img" alt="9">
                <img src="produk/f10.jpg" class="scroll-img" alt="10">
                <img src="produk/f1.jpg" class="scroll-img" alt="1">
                <img src="produk/f2.jpg" class="scroll-img" alt="2">
                <img src="produk/f3.jpg" class="scroll-img" alt="3">
                <img src="produk/f4.jpg" class="scroll-img" alt="4">
                <img src="produk/f5.jpg" class="scroll-img" alt="5">
                <img src="produk/f6.jpg" class="scroll-img" alt="6">
                <img src="produk/f7.jpg" class="scroll-img" alt="7">
                <img src="produk/f8.jpg" class="scroll-img" alt="8">
                <img src="produk/f9.jpg" class="scroll-img" alt="9">
                <img src="produk/f10.jpg" class="scroll-img" alt="10">
              </div>

              <!-- Baris kedua: kanan ke kiri (scroll ke kanan) -->
              <div class="scroll-row mb-3 mt-2">
                <div class="scroll-track-left" style="height: auto;">
                  <img src="produk/g1.jpg" class="scroll-img" alt="g1">
                  <img src="produk/g2.jpg" class="scroll-img" alt="g2">
                  <img src="produk/g3.jpg" class="scroll-img" alt="g3">
                  <img src="produk/g4.jpg" class="scroll-img" alt="g4">
                  <img src="produk/g5.jpg" class="scroll-img" alt="g5">
                  <img src="produk/g6.jpg" class="scroll-img" alt="g6">
                  <img src="produk/h1.jpg" class="scroll-img" alt="h1">
                  <img src="produk/h2.jpg" class="scroll-img" alt="h2">
                  <img src="produk/h3.jpg" class="scroll-img" alt="h3">
                  <img src="produk/h4.jpg" class="scroll-img" alt="h4">
                  <img src="produk/h5.jpg" class="scroll-img" alt="h5">
                  <img src="produk/h6.jpg" class="scroll-img" alt="h6">
                  <img src="produk/h7.jpg" class="scroll-img" alt="h7">
                  <img src="produk/g1.jpg" class="scroll-img" alt="g1">
                  <img src="produk/g2.jpg" class="scroll-img" alt="g2">
                  <img src="produk/g3.jpg" class="scroll-img" alt="g3">
                  <img src="produk/g4.jpg" class="scroll-img" alt="g4">
                  <img src="produk/g5.jpg" class="scroll-img" alt="g5">
                  <img src="produk/g6.jpg" class="scroll-img" alt="g6">
                  <img src="produk/h1.jpg" class="scroll-img" alt="h1">
                  <img src="produk/h2.jpg" class="scroll-img" alt="h2">
                  <img src="produk/h3.jpg" class="scroll-img" alt="h3">
                  <img src="produk/h4.jpg" class="scroll-img" alt="h4">
                  <img src="produk/h5.jpg" class="scroll-img" alt="h5">
                  <img src="produk/h6.jpg" class="scroll-img" alt="h6">
                  <img src="produk/h7.jpg" class="scroll-img" alt="h7">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>


  <!--About us start -->
  <!-- <section id="about-us">
        <div class="container">
            <div class="row py-lg-5">

                <h2 class="text-capitalize text-center m-0 py-lg-5">Why to choose us</h2>

                <div class="text-center col-lg-4">
                    <img src="images/search.png" class="bd-placeholder-img rounded-circle" alt="Bootstrap Themes"
                        width="140" height="140" loading="lazy">
                    <h4 class="fw-normal mt-5 ">Easy to find</h4>
                    <p>Urna, massa aliqua dui pellentesque. Ac, gravida in. Diam vitae, nec mattis lectus quam
                        pretium
                        amet
                        facilisis.</p>
                </div>

                <div class="text-center col-lg-4">
                    <img src="images/price.png" class="bd-placeholder-img rounded-circle" alt="Bootstrap Themes"
                        width="140" height="140" loading="lazy">
                    <h4 class="fw-normal mt-5">Affordable Prices</h4>
                    <p>Urna, massa aliqua dui pellentesque. Ac, gravida in. Diam vitae, nec mattis lectus quam
                        pretium
                        amet
                        facilisis.</p>
                </div>

                <div class="text-center col-lg-4">
                    <img src="images/time.png" class="bd-placeholder-img rounded-circle" alt="Bootstrap Themes"
                        width="140" height="140" loading="lazy">
                    <h4 class="fw-normal mt-5 ">Quickly Process</h4>
                    <p>Ac, gravida in diam vitae, nec mattis lectus quam pretium amet facilisis. Urna, massa aliqua
                        dui
                        pellentesque. </p>
                </div>
            </div>
        </div>
    </section> -->

  <!-- Testimonial start  -->
  <!-- <section id="testimonial">
        <div class="container my-5">



            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="row my-5 py-lg-5">
                            <div class="col-md-8 mx-auto">
                                <img src="images/quote.png" class="rounded mx-auto d-inline" alt="...">
                                <p class="testimonial-p mt-4">Massa semper non rutrum orci facilisi sit. Lectus
                                    porta
                                    quam a
                                    fringilla
                                    eget viverra sem. Vulputate massa hendrerit turpis gravida tempor, porttitor.
                                </p>

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
                                <p class="testimonial-p mt-4">Massa semper non rutrum orci facilisi sit. Lectus
                                    porta
                                    quam a
                                    fringilla
                                    eget viverra sem. Vulputate massa hendrerit turpis gravida tempor, porttitor.
                                </p>

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
                                <p class="testimonial-p mt-4">Massa semper non rutrum orci facilisi sit. Lectus
                                    porta
                                    quam a
                                    fringilla
                                    eget viverra sem. Vulputate massa hendrerit turpis gravida tempor, porttitor.
                                </p>

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
    </section> -->

  <!-- Help start  -->
  <!-- <section id="help" class="py-5"
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
              rumah tangga, industri kecil, hingga ekspor. Hemat biaya, minim polusi, dan mendukung
              energi
              berkelanjutan untuk masa depan yang lebih hijau.
            </p>
            <a class="btn btn-primary btn-lg">Hubungi Kami</a>

          </div>
        </div>


      </div>
    </div>
  </section> -->

  <!-- Lets start  -->
  <!-- <section id="start">
    <div class="container my-5 py-5">
      <div class="row featurette py-lg-5 ">
        <div class="col-md-5 order-md-1 d-flex">
          <h2 class="text-capitalize lh-1 mb-3">Mari beralih ke energi bersih bersama briket kami.</h3>
        </div>
        <div class="col-md-7 order-md-2">
          <div class="text-content ps-md-5 mt-4 mt-md-0">
            <p class="py-lg-2">
              Briket adalah solusi hemat dan ramah lingkungan untuk kebutuhan memasak dan industri.
              Kami
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
  </section> -->
  <section id="contact" class="py-5 bg-dark">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-8">
          <h2 class="fw-bold mb-4">Contact Us</h2>
          <p class="lead">We are ready to assist you. Please contact us via email or WhatsApp for more
            information, orders, or any inquiries you may have.</p>

          <div class="d-flex flex-column flex-md-row justify-content-center gap-3 mt-4">
            <a href="mailto:contact@arkhanzaindocharcoal.com" class="btn btn-primary btn-lg shadow-sm">
              <i class="bi bi-envelope-fill me-2"></i> Send an Email
            </a>

            <a href="https://wa.me/6281234567890" class="btn btn-success btn-lg shadow-sm">
              <i class="bi bi-whatsapp me-2"></i> Send a WhatsApp Message
            </a>
          </div>

          <p class="mt-4 text-muted">or reach us directly at:</p>
          <p class="mb-0">
            <strong>Email:</strong> contact@arkhanzaindocharcoal.com
          </p>
          <p>
            <strong>WhatsApp:</strong> +62 812-3456-7890
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer start  -->
  <section id="footer">
    <div class="container footer-container">
      <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5  ">

        <div class=" col-md-4">
          <img src="bahan/logo_kecil.jpg" style="max-width: 300px; margin-top: -100px;">
          <p>Your Trusted Partner in Premium Charcoal Export</p>
          <i class="bi-facebook pe-4"></i>
          <i class="bi-instagram pe-4"></i>
          <i class="bi-twitter pe-4"></i>
          <i class="bi-youtube pe-4"></i>
        </div>

        <div class="col-md-8">
          <h3>arkhanzaindocharcoal</h3>
          <p>High Quality | Sustainable | Reliable</p>
        </div>

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