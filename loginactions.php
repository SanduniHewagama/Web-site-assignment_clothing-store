<?php
// Database connection
include "db_conn.php";

// Initialize variables
$email = "";
$password = "";
$errors = array();

// Form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate form data
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }

    if (count($errors) == 0) {
        // Prepare SQL statement
        $stmt = $conn->prepare("SELECT id, email, password FROM users WHERE email=?");
        $stmt->bind_param("s", $email);

        // Execute the statement
        $stmt->execute();

        // Store result
        $stmt->store_result();

        // Check if user exists
        if ($stmt->num_rows == 1) {
            // Bind result variables
            $stmt->bind_result($id, $db_email, $db_password);
            if ($stmt->fetch()) {
                // Verify password
                if (password_verify($password, $db_password)) {
                    // Password is correct, start a new session
                    session_start();
                    $_SESSION['id'] = $id;
                    $_SESSION['email'] = $db_email;
                    // Redirect to dashboard page
                    header('location: dashboard.php');
                } else {
                    array_push($errors, "Wrong email/password combination");
                }
            }
        } else {
            array_push($errors, "User not found");
        }

        // Close statement
        $stmt->close();
    }
}

// Close connection
$conn->close();
?>
