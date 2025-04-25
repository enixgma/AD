<?php
// This is a simple example of processing login
// In a real application, you would want to:
// 1. Validate input more thoroughly
// 2. Verify password hash
// 3. Use prepared statements to prevent SQL injection
// 4. Add CSRF protection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST["email"];
    $password = $_POST["password"];
    $remember = isset($_POST["remember"]) ? true : false;
    
    // Simple validation
    $errors = [];
    
    if (empty($email)) {
        $errors[] = "Email is required";
    }
    
    if (empty($password)) {
        $errors[] = "Password is required";
    }
    
    // If there are errors, redirect back to login page
    if (!empty($errors)) {
        // In a real application, you would store errors in session and display them
        header("Location: login.php");
        exit;
    }
    
    // In a real application, you would verify credentials against a database
    // For this example, we'll just redirect to a success page
    
    // Start session and set user as logged in
    session_start();
    $_SESSION["user_logged_in"] = true;
    $_SESSION["user_email"] = $email;
    
    // Redirect to dashboard or home page
    header("Location: index.php");
    exit;
}
?>