<?php
include "db_conn.php"; // Your database connection file

// Check if the request is coming from an AJAX call
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $data = json_decode(file_get_contents("php://input"), true);
    $productId = $data['productId'];
    $userId = $_SESSION['id'];  // Assuming user's ID is stored in session

    // Prepare a delete statement
    $sql = "DELETE FROM cart_items WHERE product_id = ? AND user_id = ?";
    if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, "ii", $productId, $userId);
        if (mysqli_stmt_execute($stmt)) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo json_encode(['success' => false]);
    }
    mysqli_close($link);
} else {
    echo json_encode(['success' => false]);
}
?>
