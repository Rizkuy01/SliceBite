<?php
require_once 'conn.php';

if (isset($_POST['deleteProductId'])) {
    $productId = $_POST['deleteProductId'];
    $sql = "DELETE FROM product WHERE id = ?";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $productId);
        $stmt->execute();
        
        if ($stmt->affected_rows > 0) {
            echo "Product deleted successfully.";
        } else {
            echo "Error deleting product.";
        }
        $stmt->close();
    } else {
        echo "Error preparing statement.";
    }
    $conn->close();
}
header("Location: product-dashboard.php");
exit();
?>
