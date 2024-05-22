<?php
// Pastikan form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Tangkap data form
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $address = $_POST["address"];
  $payment = $_POST["payment"];
  $product = $_POST["product-name"];
  $price = $_POST["price"];
  $time = $_POST["current-time"];
  // Tangkap data form lainnya seperti nomor hp, alamat, dll.

  // Lakukan operasi lainnya, misalnya menyimpan data ke database
  // Di sini Anda bisa menggunakan MySQLi atau PDO untuk berinteraksi dengan database
  // Contoh:
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bakery";

  // // Buat koneksi
  $conn = new mysqli($servername, $username, $password, $dbname);

  // // Cek koneksi
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // // Query untuk menyimpan data ke database
  $sql = "INSERT INTO checkout (name, phone, address, payment, product, price, time) VALUES ('$name', '$phone', '$address', '$payment',  '$product', '$price', '$time')";

  if ($conn->query($sql) === TRUE) {
    header("Location: checkout-success.php");
    exit();
} else {
    // Mengirimkan respons JSON jika terjadi kesalahan
    echo json_encode(['success' => false, 'message' => 'Checkout gagal, silakan coba lagi']);
}

  $conn->close();

  // Redirect atau tampilkan pesan sukses
//   header("Location: checkout_success.php");
//   exit;
}
