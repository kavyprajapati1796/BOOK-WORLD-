<?php
// Validate and get the ID from URL
if (isset($_GET['id'])) {
    include 'connection69.php'; // Assumes this file creates $conn

    $id = intval($_GET['id']); // Always sanitize input

    // Delete query
    $sql = "DELETE FROM orderdetail WHERE id = $id";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        header("Location: orders.php");
        exit(); // Always exit after redirect
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request: No ID provided.";
}

?>

delete Product.php