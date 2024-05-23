<?php
require_once '../conn.php';

if (isset($_POST['deleteTransId'])) {
    $productId = $_POST['deleteTransId'];
    $sql = "DELETE FROM checkout WHERE id = ?";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $productId);
        $stmt->execute();
        
        if ($stmt->affected_rows > 0) {
            echo "Transaction deleted successfully.";
        } else {
            echo "Error deleting transaction.";
        }
        $stmt->close();
    } else {
        echo "Error preparing statement.";
    }
    $conn->close();
}
header("Location: transaction-dashboard.php");
exit();
