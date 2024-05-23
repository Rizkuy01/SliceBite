<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Form Data
  $name     = $_POST["name"];
  $phone    = $_POST["phone"];
  $address  = $_POST["address"];
  $payment  = $_POST["payment"];
  $product  = $_POST["product-name"];
  $price    = $_POST["price"];
  $time     = $_POST["current-time"];

  // LMySQLi
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bakery";

  // koneksi
  $conn = new mysqli($servername, $username, $password, $dbname);

  // // Cek koneksi
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // // Query 
  $sql = "INSERT INTO 
            checkout (
              name, 
              phone, 
              address, 
              payment, 
              product, 
              price, 
              time
              ) VALUES (
                '$name', 
                '$phone', 
                '$address', 
                '$payment',  
                '$product', 
                '$price', 
                '$time'
                )";

  if ($conn->query($sql) === TRUE) {
    header("Location: qr.php");
    exit();
} else {
    // Mengirimkan respons JSON jika terjadi kesalahan
    echo json_encode(['success' => false, 'message' => 'Checkout gagal, silakan coba lagi']);
}

  $conn->close();
}
