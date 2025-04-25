<?php
session_start(); // Start the session to access user data

// Include the database connection file
include('db.php');

// Get the data from the login form
$username = $_POST['username'];
$password = $_POST['password'];

// Query to check if the username exists in the database
$query = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username); // "s" stands for string
$stmt->execute();
$result = $stmt->get_result();

// Check if the user exists
if ($result->num_rows > 0) {
    // Fetch the user data
    $user = $result->fetch_assoc();

    // Check if the password matches (Note: Passwords should be hashed in a real-world app)
    if (password_verify($password, $user['password'])) {  // Use password_verify to check the hashed password
        // Password is correct, set session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $user['username']; // Store the username in session
        $_SESSION['role'] = $user['role']; // Store the role in session
        $_SESSION['user_name'] = $user['name']; // Store the name from database in session

        // Redirect based on role
        if ($user['role'] == 'admin') {
            header('Location: admin_dashboard.php');
        } elseif ($user['role'] == 'agent') {
            header('Location: agent_dashboard.php');
        } else {
            header('Location: traveler_dashboard.php');
        }
        exit();
    } else {
        // Incorrect password
        $_SESSION['login_error'] = 'Invalid username or password.';
        header('Location: login.php');
        exit();
    }
} else {
    // User not found
    $_SESSION['login_error'] = 'Invalid username or password.';
    header('Location: login.php');
    exit();
}
?>
