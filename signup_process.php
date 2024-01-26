<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file
    include 'db_connect.php';

    // Initialize variables to store user input
    $username = $password = '';

    // Validate and sanitize user input
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // You can add more validation here (e.g., check for password strength)

    try {
        // Prepare SQL statement to fetch user with the provided username
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Verify if the user exists
        if ($user) {
            // User already exists, redirect to signup_error.php
            header("Location: signup_error.php");
            exit();
        } else {
            // User does not exist, proceed with registration
            // Hash the password for security
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Prepare SQL statement to insert new user
            $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $stmt->execute([$username, $hashed_password]);

            // Registration successful, redirect the user to a success page
            header("Location: signup_success.php");
            exit();
        }
    } catch (PDOException $e) {
        // Handle database errors more gracefully
        error_log("Registration failed: " . $e->getMessage(), 0);
        header("Location: signup_error.php");
        exit();
    }
} else {
    // If the form is not submitted, redirect the user to the signup page
    header("Location: signup.php");
    exit();
}
?>
