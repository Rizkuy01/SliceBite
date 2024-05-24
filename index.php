<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>SliceBite | Team 3</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />
    <link href="img/logo.png" rel="icon" type="image/png" />


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
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
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
          <a href="#" class="nav-item nav-link">Home</a>
          <a href="#about" class="nav-item nav-link">About</a>
          <a href="#product" class="nav-item nav-link">Products</a>
          <a href="#service" class="nav-item nav-link">Service</a>
          <a href="#testimoni" class="nav-item nav-link">Testimonial</a>
          <a href="#contact" class="nav-item nav-link">Contact</a>
        </div>
        <a
          href="app/product-cart.php"
          class="nav-item nav-link d-flex align-items-center"
        >
          <i class="fas fa-shopping-cart"></i> Cart
        </a>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
          <img class="img-fluid" src="img/carousel-1.jpg" alt="" />
          <div class="owl-carousel-inner">
            <div class="container">
              <div class="row justify-content-start">
                <div class="col-lg-8">
                  <h1 class="display-1 text-light mb-2 animated slideInDown">
                    From Oven <br />
                    to Heaven
                  </h1>
                  <p class="text-light fs-5 mb-4 pb-3">
                    Where every bite is a journey and every crumb tells a story.
                  </p>
                  <a href="#about" class="btn btn-primary rounded-pill py-3 px-5"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-6" id="about">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row img-twice position-relative h-100">
              <div class="col-6">
                <img class="img-fluid rounded" src="img/about-1.jpg" alt="" />
              </div>
              <div class="col-6 align-self-end">
                <img class="img-fluid rounded" src="img/about-2.jpg" alt="" />
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100">
              <h1 class="display-6 mb-4">Welcome to SlicesBite!</h1>
              <p>
                Where every bite is a journey and every crumb tells a story.
                Dive into a world of freshly baked goodness, where warmth meets
                flavor in every slice. From classic loaves to indulgent
                pastries, we bake with passion to satisfy your cravings and
                sweeten your day.
              </p>
              <p>
                Step into our bakery and indulge your senses. From the aroma of
                freshly baked bread to the delightful sight of our artisanal
                creations, we invite you to experience the magic of SlicesBite!
              </p>
              <div class="row g-2 mb-4">
                <div class="col-sm-6">
                  <i class="fa fa-check text-primary me-2"></i>Croissant
                </div>
                <div class="col-sm-6">
                  <i class="fa fa-check text-primary me-2"></i>Cromboloni
                </div>
                <div class="col-sm-6">
                  <i class="fa fa-check text-primary me-2"></i>Croffle
                </div>
                <div class="col-sm-6">
                  <i class="fa fa-check text-primary me-2"></i>Many more
                </div>
              </div>
              <a class="btn btn-primary rounded-pill py-3 px-5" href="app/product-cart.php"
                >Order Now</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Product Start -->
    <div class="container-xxl bg-light my-6 py-6 pt-0" id="product">
      <div class="container">
        <div
          class="text-center mx-auto mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <h1 class="display-8 mb-4 pt-4">SliceBite Masterpiece!</h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div
              class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100"
            >
              <div class="text-center p-4">
                <div
                  class="d-inline-block border border-primary rounded-pill px-3 mb-3"
                >
                  Rp25.000
                </div>
                <h3 class="mb-3">Cromboloni</h3>
                <span>
                  A delightful pastry that combines the rich, flaky layers of a croissant with delightful Italian dessert fillings.
                </span>
              </div>
              <div class="position-relative mt-auto">
                <img class="img-fluid" src="img/cromboloni.png" alt="" />
                <div class="product-overlay">
                  <a
                    class="btn btn-lg-square btn-outline-light rounded-circle"
                    href="app/product-cart.php"
                    data-price="25.000"
                    ><i class="fa fa-eye text-primary"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div
              class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100"
            >
              <div class="text-center p-4">
                <div
                  class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3"
                >
                  Rp18.000
                </div>
                <h3 class="mb-3">Croissant</h3>
                <span
                  >A classic French pastry with a flaky, buttery crust and a soft.
                </span>
              </div>
              <div class="position-relative mt-auto">
                <img class="img-fluid" src="img/croissant.png" alt="" />
                <div class="product-overlay">
                  <a
                    class="btn btn-lg-square btn-outline-light rounded-circle"
                    href="app/product-cart.php"
                    data-price="18.000"
                    ><i class="fa fa-eye text-primary"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div
              class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100"
            >
              <div class="text-center p-4">
                <div
                  class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3"
                >
                  Rp20.000
                </div>
                <h4 class="mb-3">Croffle</h4>
                <span>
                  Delicious fusion of croissant and waffle, offering a crispy outside, and soft inside. Made from croissant dough.
                </span>
              </div>
              <div class="position-relative mt-auto">
                <img class="img-fluid" src="img/croffle.png" alt="" />
                <div class="product-overlay">
                  <a
                    class="btn btn-lg-square btn-outline-light rounded-circle"
                    href="app/product-cart.php"
                    data-price="20.000"
                    ><i class="fa fa-eye text-primary"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Product End -->

    <!-- Service Start -->
    <div class="container-xxl py-6" id="service">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-6 mb-4">Our Service</h1>
            <p class="mb-5">
              Enjoy your yummy bite with best service you can get!
            </p>
            <div class="row gy-5 gx-4">
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center mb-3">
                  <div
                    class="flex-shrink-0 btn-square bg-primary rounded-circle me-3"
                  >
                    <i class="fa fa-bread-slice text-white"></i>
                  </div>
                  <h5 class="mb-0">Quality Products</h5>
                </div>
                <span
                  >We offer high quality product to ensure customer
                  satisfication. With the best ingredients ever.
                </span>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="d-flex align-items-center mb-3">
                  <div
                    class="flex-shrink-0 btn-square bg-primary rounded-circle me-3"
                  >
                    <i class="fa fa-birthday-cake text-white"></i>
                  </div>
                  <h5 class="mb-0">Custom Products</h5>
                </div>
                <span
                  >Get your own needs cute bread. Customize your desires with a
                  sweet joy flavor.
                </span>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center mb-3">
                  <div
                    class="flex-shrink-0 btn-square bg-primary rounded-circle me-3"
                  >
                    <i class="fa fa-eye text-white"></i>
                  </div>
                  <h5 class="mb-0">Online Order</h5>
                </div>
                <span>Make purchases anytime and anywhere you want! </span>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                <div class="d-flex align-items-center mb-3">
                  <div
                    class="flex-shrink-0 btn-square bg-primary rounded-circle me-3"
                  >
                    <i class="fa fa-truck text-white"></i>
                  </div>
                  <h5 class="mb-0">Home Delivery</h5>
                </div>
                <span
                  >Take it easy! you don't need to bother your activity to taste
                  our yummy bun.</span
                >
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="row img-twice position-relative h-100">
              <div class="col-6">
                <img class="img-fluid rounded" src="img/service-1.jpg" alt="" />
              </div>
              <div class="col-6 align-self-end">
                <img class="img-fluid rounded" src="img/service-2.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Team Start -->
    <div class="container-xxl py-6">
      <div class="container">
        <div
          class="text-center mx-auto mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <h1 class="display-6 mb-4">Our MasterChef</h1>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="team-item text-center rounded overflow-hidden">
              <div class="d-flex justify-content-center">
                <img class="img-fluid" src="img/rizky.png" alt="" />
              </div>
              <div class="team-text">
                <div class="team-title">
                  <h5>Muhammad Rizky</h5>
                  <span style><i>pâtissier</i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item text-center rounded overflow-hidden">
              <div class="d-flex justify-content-center">
                <!-- Menambahkan kelas d-flex dan justify-content-center untuk kontainer gambar -->
                <img class="img-fluid" src="img/isa.png" alt="" />
              </div>
              <div class="team-text">
                <div class="team-title">
                  <h5>Isa Al-Ghifary</h5>
                  <span style><i>Chef Industry</i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-xxl bg-light my-6 py-4" id="testimoni">
      <div class="container">
        <div
          class="text-center mx-auto mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <h1 class="display-6 mb-4">Testimonial from the experts.</h1>
        </div>
        <div
          class="owl-carousel testimonial-carousel wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="testimonial-item bg-white rounded p-4">
            <div class="d-flex align-items-center mb-4">
              <img
                class="flex-shrink-0 rounded-circle border p-1"
                src="img/eva.png"
                alt=""
              />
              <div class="ms-4">
                <h5 class="mb-1">Eva Juliani</h5>
                <span>Kritikus Makanan</span>
              </div>
            </div>
            <p class="mb-0">
              Cromboloni nya sangat enak, saya suka dengan rasa Matcha nya,
              apalagi dimakan bersama di rooftop Technomart.
            </p>
          </div>
          <div class="testimonial-item bg-white rounded p-4">
            <div class="d-flex align-items-center mb-4">
              <img
                class="flex-shrink-0 rounded-circle border p-1"
                src="img/hasna.png"
                alt=""
              />
              <div class="ms-4">
                <h5 class="mb-1">Hasna Nailah</h5>
                <span>Food Vlogger</span>
              </div>
            </div>
            <p class="mb-0">
              Untuk kebutuhan konten saya, bakery ini sangat aesthetic dalam
              penyajiannya.
            </p>
          </div>
          <div class="testimonial-item bg-white rounded p-4">
            <div class="d-flex align-items-center mb-4">
              <img
                class="flex-shrink-0 rounded-circle border p-1"
                src="img/aye.png"
                alt=""
              />
              <div class="ms-4">
                <h5 class="mb-1">Anisa Ayu</h5>
                <span>Ahli Gizi</span>
              </div>
            </div>
            <p class="mb-0">
              Kandungan gula dalam komposisi Croissant adalah yang paling pas
              untuk dinikmati lansia.
            </p>
          </div>
        </div>

        <!-- form -->
        <div
          class="bg-primary text-light rounded p-5 my-6 wow fadeInUp"
          data-wow-delay="0.1s"
          id="contact"
        >
          <div class="row align-items-center">
            <div class="col-md-6">
              <h1 class="display-4 text-light mb-0">Contact Us</h1>
            </div>
            <div class="col-md-6 text-md-end">
              <form id="contactForm" action="https://getform.io/f/zbzkdvna" method="POST">
                <div class="position-relative">
                  <input
                      id="name"
                      type="text"
                      name="name"
                      placeholder="Enter your message"
                      data-sb-validations="required"
                      class="form-control bg-transparent border-light w-100 py-3 ps-4 pe-5"
                  />
                  <button
                    type="submit"
                    id="submitButton"
                    class="btn btn-dark py-2 px-3 position-absolute top-0 end-0 mt-2 me-2"
                  >
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Form end -->
      </div>
    </div>
    <!-- Testimonial End -->

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
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- File Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
