<?php
require_once 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari form
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productQuantity = $_POST['productQuantity'];

    // Mengupload file gambar
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["productImage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Periksa apakah file gambar adalah gambar asli atau palsu
    $check = getimagesize($_FILES["productImage"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Periksa apakah file sudah ada
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Batasi ukuran file
    if ($_FILES["productImage"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Batasi tipe file
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Periksa jika $uploadOk diatur menjadi 0 oleh kesalahan
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // Jika semua sudah baik, coba upload file
    } else {
        if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file)) {
            // Siapkan query untuk memasukkan data ke database
            $sql = "INSERT INTO product (Name_Product, Price, qty, image)
                    VALUES ('$productName', '$productPrice', '$productQuantity', '$target_file')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    $conn->close();
}
?>
