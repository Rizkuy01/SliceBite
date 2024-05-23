<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Payment | SliceBite</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link href="../img/logo.png" rel="icon" type="image/png" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet" />
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet" />

    <!-- CSS for card -->
    <style>
      .card-double-size {
      transform: scale(1.5);
      transform-origin: center center;
    }
    </style>
  </head>

  <body>

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
        <a href="../index.php" class="navbar-brand ms-4 ms-lg-0">
          <h1 class="text-primary m-0">SliceBite</h1>
        </a>
        <button
          type="button"
          class="navbar-toggler me-4"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav mx-auto p-4 p-lg-0">
            <a hidden href="#" class="nav-item nav-link">Home</a>
            <a hidden href="#about" class="nav-item nav-link">About</a>
            <a hidden href="#product" class="nav-item nav-link">Products</a>
            <a hidden href="#testimoni" class="nav-item nav-link">Testimonial</a>
            <a hidden href="#contact" class="nav-item nav-link">Contact</a>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-6 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3">
          Payment
        </h1>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Cards Section Start -->
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-4 mb-4">
          <div class="card text-center h-100 card-double-size">
            <div class="card-body">
              <img src="../img/qr-code.png" alt="QR Code" class="img-fluid" style="max-width: 100px;"/>
              <h5 class="card-title mt-3">Scan Me</h5>
              <p class="card-text">Pesanan akan otomatis dibuat setelah payment.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Cards Section End -->

    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark text-light footer my-6 mb-0 py-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5 text-center">
        copyright &copy; 3rd Team B Inforsys
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a
      href="#"
      class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!--File JavaScript -->
    <script src="js/main.js"></script>
  </body>
</html>
