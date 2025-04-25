<?php
session_start();
include('db.php');  // Make sure to include your DB connection here

// Get form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Validate that passwords match
if ($password != $confirm_password) {
    $_SESSION['error'] = "Passwords do not match!";
    header("Location: signup.php");
    exit();
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Check if the username or email is already taken
$check_query = "SELECT * FROM users WHERE username = ? OR email = ?";
$stmt = $conn->prepare($check_query);
$stmt->bind_param("ss", $username, $email);  // Bind username and email
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Username or email already exists
    $_SESSION['error'] = "Username or Email is already taken.";
    header("Location: signup.php");
    exit();
}

// Insert new user into the database
$role = 'traveler';  // Set role for traveler
$insert_query = "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($insert_query);
$stmt->bind_param("ssss", $username, $email, $hashed_password, $role);  // Bind parameters
if ($stmt->execute()) {
    // Successfully signed up
    $_SESSION['success'] = "Registration successful! You can now log in.";
    header("Location: login.php");
} else {
    // Failed to sign up
    $_SESSION['error'] = "Something went wrong. Please try again.";
    header("Location: signup.php");
}

$stmt->close();
$conn->close();
?>
