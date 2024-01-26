<?php
session_start(); // Start the session

include "db_connect.php";

// Function to authenticate user
function authenticateUser($username, $password) {
    global $pdo;
    
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
            return false;
        }
    } catch (PDOException $e) {
        // Handle database errors more gracefully
        error_log("Authentication failed: " . $e->getMessage(), 0);
        die("Authentication failed. Please try again later.");
    }
}

?>
