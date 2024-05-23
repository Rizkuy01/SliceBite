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

        <!-- Data Tables -->
        <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet" />
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet" />

        <!-- style -->
        <style>
        body {
            background-image: url('img/admin-bakery.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .main {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }
        #table-product tbody td {
            color: white; /* Atur warna teks menjadi putih */
        }
        </style>
    </head>

    
<body>

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <a href="admin.php" class="navbar-brand ms-4 ms-lg-0">
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
          <a href="product-dashboard.php" class="nav-item nav-link">Product Dashboard</a>
          <a href="transaction-dashboard.php" class="nav-item nav-link">Transaction Dashboard</a>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->
<div class="main w-80 d-flex align-items-center justify-content-center min-vh-100 text-light">
    <div class="container">
        <div class="d-flex justify-content-end mb-3"> 
            <a class="btn btn-primary add-product" href="#"  data-bs-toggle="modal" data-bs-target="#productModal">
                Add New Product
            </a>
        </div>
        
        <table class="table" width="100%" id="table-product">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            require_once 'conn.php';
            $sql = "SELECT id, Name_Product, Price, qty FROM product";
            $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["Name_Product"] . "</td>";
                        echo "<td>" . $row["Price"] . "</td>";
                        echo "<td>" . $row["qty"] . "</td>";
                        echo "<td>
                                    <form action='delete-product.php' method='POST' onsubmit='return confirm(\"Are you sure you want to delete this product?\");'>
                                        <input type='hidden' name='deleteProductId' value='" . $row["id"] . "' />
                                        <button type='submit' class='btn btn-danger btn-sm'>Delete</button>
                                    </form>
                                  </td>";
                            echo "</tr>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Data not found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Modal Start -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel">Add New Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addProductForm" action="add-product.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="productName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="productName" name="productName" required />
                    </div>
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Price</label>
                        <input type="number" class="form-control" id="productPrice" name="productPrice" required />
                    </div>
                    <div class="mb-3">
                        <label for="productImage" class="form-label">Product Image</label>
                        <input type="file" class="form-control" id="productImage" name="productImage" required />
                    </div>
                    <div class="mb-3">
                        <label for="productQuantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="productQuantity" name="productQuantity" required />
                    </div>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal End -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#table-product').DataTable();
        });
    </script>
    
</body>
</html>
