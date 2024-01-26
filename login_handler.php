<?php
session_start(); // Start the session

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both username and password are provided
    if (isset($_POST["uname"]) && isset($_POST["psw"])) {
        $username = $_POST["uname"];
        $password = $_POST["psw"];

        // Include your database connection file
        include "db_connect.php";

        try {
            // Prepare SQL statement to fetch user with the provided username
            $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
            $stmt->execute([$username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // Verify if the user exists and the password matches
            if ($user && password_verify($password, $user['password'])) {
                // Authentication successful
                $_SESSION['loggedin'] = true; // Set the session variable
                $_SESSION['username'] = $user['username']; // Store username in session if needed

                // Redirect to the dashboard page
                header('Location: dashboard.php');
                exit; // Exit to prevent further execution
            } else {
                // Authentication failed
                echo "Invalid username or password. Please try again.";
            }
        } catch (PDOException $e) {
            // Handle database errors more gracefully
            error_log("Authentication failed: " . $e->getMessage(), 0);
            die("Authentication failed. Please try again later.");
        }
    } else {
        // Username or password not provided
        echo "Please provide both username and password.";
    }
} else {
    // Redirect unauthorized access
    header("Location: loginPage.php");
    exit;
}
?>
