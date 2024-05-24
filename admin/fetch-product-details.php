<?php
require_once '../conn.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "SELECT Name_Product, Price, qty, description, image, variant FROM product WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<div class='row'>
                <div class='col-md-6'>
                    <img src='../img/about-1.jpg" . htmlspecialchars($row['image']) . "' alt='Product Image' class='img-fluid'>
                </div>
                <div class='col-md-6'>
                    <h5>" . htmlspecialchars($row['Name_Product']) . "</h5>
                    <p><strong>Description:</strong> " . htmlspecialchars($row['description']) . "</p>
                    <p><strong>Price:</strong> " . htmlspecialchars($row['Price']) . "</p>
                    <p><strong>Quantity:</strong> " . htmlspecialchars($row['qty']) . "</p>
                    <p><strong>Variant:</strong> " . htmlspecialchars($row['variant']) . "</p>
                </div>
              </div>";
    } else {
        echo "<p>Product details not found.</p>";
    }
    $stmt->close();
}

$conn->close();
