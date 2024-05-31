<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Shop Now | SliceBite</title>
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
        <a
          href="product-cart.php"
          class="nav-item nav-link d-flex align-items-center"
        >
          <i class="fas fa-shopping-cart"></i> Cart
        </a>
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
          Product Cart
        </h1>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Product Start -->
<div class="container-xxl bg-light my-6 py-6 pt-0" id="product">
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
      <h1 class="display-8 mb-4 pt-4">Our Product</h1>
    </div>

    <?php
    require_once '../conn.php';

    // Query untuk mengambil data produk
    $sql = "SELECT Name_Product, Price, qty, image FROM product";
    $result = $conn->query($sql);
    ?>

    <div class="row">
    <?php
    if ($result->num_rows > 0) {
        // Output data dari setiap baris
        while($row = $result->fetch_assoc()) {
            ?>
            <div class="col-lg-3 col-md-6 wow fadeInUp pb-lg-4" data-wow-delay="0.1s">
                <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                    <div class="text-center p-4">
                      <h3 class="mb-3"><?php echo htmlspecialchars($row["Name_Product"]); ?></h3>
                        <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">
                            Rp<?php echo number_format($row["Price"], 0, ',', '.'); ?>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="../<?php echo htmlspecialchars($row["image"]); ?>" alt="<?php echo htmlspecialchars($row["Name_Product"]); ?>" />
                        <div class="product-overlay">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle add-to-cart" href="#" data-price="<?php echo number_format($row["Price"], 0, ',', '.'); ?>">
                                <i class="fa fa-cart-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        echo "No products found";
    }
    $conn->close();
    ?>
    </div>
  </div>
</div>
    <!-- Product End -->

    <!-- Modal -->
<div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="checkoutModalLabel">Checkout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Isi form checkout di sini -->
        <form action="checkout.php" method="POST" id="checkoutForm">
        <div class="mb-3">
            <label for="current-time" class="form-label">Current Time</label>
            <input type="text" class="form-control" id="current-time" name="current-time" readonly>
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">No. HP</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="address" name="address" required>
          </div>
          <div class="mb-3">
            <label for="product-name" class="form-label">Product</label>
            <input type="text" class="form-control" id="product-name" name="product-name" required readonly>
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" required readonly>
          </div>

          <input type="hidden" id="product" name="product">

          <div class="mb-3">
            <label for="payment" class="form-label">Payment Method</label>
            <select class="form-select" id="payment" name="payment" required>
              <option value="Transfer Bank">Bank Transfer</option>
              <option value="GoPay">GoPay</option>
              <option value="Dana">DANA</option>
            </select>
          </div>
          <!-- Tambahkan elemen form lainnya seperti nomor hp, alamat, dll. -->
          <button type="submit" class="btn btn-primary checkoutForm" id="checkoutForm">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal End -->

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

    <!-- JavaScript function -->
    <script>
      $(document).ready(function () {
        // Data produk otomatis terisi pada form checkout
        $('.add-to-cart').click(function () {
            // Dapatkan nama produk yang dipilih
            var productName = $(this).closest('.product-item').find('h3').text();
            // Dapatkan harga produk yang dipilih
            var productPrice = $(this).data('price');
            // Isi input tersembunyi dengan nama produk yang dipilih
            $('#product-name').val(productName);
            // Isi input tersembunyi dengan harga produk yang dipilih
            $('#price').val(productPrice);
            // Tampilkan modal checkout
            $('#checkoutModal').modal('show');
          });

          // Set waktu realtime
          function updateCurrentTime() {
            var currentTime = new Date();
            var formattedTime = currentTime.getDate() + "-" + (currentTime.getMonth() + 1) + "-" + currentTime.getFullYear() + " " +
                                currentTime.getHours() + ":" + currentTime.getMinutes() + ":" + currentTime.getSeconds();
            $("#current-time").val(formattedTime);
          }
          setInterval(updateCurrentTime, 1000);

          // Redirect page
          document.getElementById('checkoutForm').addEventListener('submit', function(event) {
              event.preventDefault();

              var form = this;
              var formData = new FormData(form);

              fetch(form.action, {
                  method: form.method,
                  body: formData
              }).then(function(response) {
                  if (response.ok) {
                      // Redirect ke qr payment page
                      window.location.href = 'qr.php';
                  } else {
                      return response.text().then(function(text) { throw new Error(text) });
                  }
              }).catch(function(error) {
                  // Handle error
                  console.error('Error:', error);
                  alert('There was an error submitting the form. Please try again.');
              });
          });
        });
    </script>

    <!--File JavaScript -->
    <script src="js/main.js"></script>
  </body>
</html>
