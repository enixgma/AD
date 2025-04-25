<?php
// This is a simple example of processing signup
// In a real application, you would want to:
// 1. Validate input more thoroughly
// 2. Hash passwords
// 3. Use prepared statements to prevent SQL injection
// 4. Add CSRF protection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    
    // Simple validation
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    
    if (empty($password)) {
        $errors[] = "Password is required";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters";
    }
    
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match";
    }
    
    // If there are errors, redirect back to signup page
    if (!empty($errors)) {
        // In a real application, you would store errors in session and display them
        header("Location: signup.php");
        exit;
    }
    
    // In a real application, you would connect to a database and store the user
    // For this example, we'll just redirect to a success page
    
    // Redirect to success page
    header("Location: signup_success.php");
    exit;
}
?>