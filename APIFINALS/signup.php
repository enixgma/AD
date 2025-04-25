<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Signup Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <!-- Font Awesome CDN -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
      font-family: 'Poppins', sans-serif;
      background-color: #f4f4f4;
    }

    .container {
      display: flex;
      height: 100vh;
      width: 100%;
    }

    .left-column {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background-color: #fff;
      padding: 30px;
    }

    .left-column img {
      width: 80%;
      max-height: 400px;
      object-fit: contain;
      margin-bottom: 20px;
    }

    .left-column h1 {
      font-size: 26px;
      color: #E30E84;
      margin-bottom: 5px;
    }

    .left-column p {
      font-style: italic;
      font-size: 14px;
      color: #333;
    }

    .right-column {
      flex: 1;
      padding: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      background-color: white;
    }

    .logo {
      position: absolute;
      top: 30px;
      left: 30px;
    }

    .logo img {
      width: 30px;
      height: 30px;
      cursor: pointer;
    }

    form {
      max-width: 400px;
      width: 100%;
    }

    h2 {
      margin-bottom: 20px;
      font-size: 24px;
      color: #E30E84;
      text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
      position: relative;
    }

    .form-group label {
      display: block;
      font-size: 14px;
      margin-bottom: 5px;
      color: #333;
    }

    .form-group input {
      width: 100%;
      padding: 12px 35px 12px 40px; /* Adjusted padding */
      border: 2px solid #000; /* Black border */
      border-radius: 20px; /* Border radius of 13px */
      font-size: 12px;
    }

    .form-group i {
      position: absolute;
      top: 70%;
      left: 12px;
      transform: translateY(-50%);
      font-size: 16px;
      color: #666;
    }

    .toggle-password {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: #888;
      font-size: 12px;
    }

    .form-group input[type="checkbox"] {
      width: auto;
      margin-right: 10px;
    }

    .checkbox-label {
      font-size: 11px;
    }

    .btn {
      width: 100%;
      padding: 12px;
      background-color: #E30E84;
      color: white;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
      margin-top: 10px;
      font-size: 14px;
    }

    .btn:hover {
      background-color: #c10e70;
    }

    .divider {
      display: flex;
      align-items: center;
      margin: 20px 0;
    }

    .divider::before,
    .divider::after {
      content: "";
      flex: 1;
      height: 1px;
      background: #ccc;
    }

    .divider span {
      padding: 0 10px;
      color: #888;
      font-size: 13px;
    }

    .google {
      background-color: transparent;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid #ccc;
      color: #444;
      padding: 12px;
      cursor: pointer;
      margin-top: 10px;
      width: 100%;
    }

    .google img {
      width: 20px;
      height: 20px;
      margin-right: 10px;
    }

    .google:hover {
      background-color: transparent;
      border-color: #E30E84;
    }

    a {
      color: #E30E84;
      text-decoration: none;
      font-size: 13px;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
  <script>
    function togglePassword(id) {
      const input = document.getElementById(id);
      input.type = input.type === 'password' ? 'text' : 'password';
    }
  </script>
</head>
<body>

  <div class="container">
    <!-- Left side with picture and text -->
    <div class="left-column">
      <img src="img/ll2.jpg" alt="Travel Image" />
      <h1>TRAVELSPHERE</h1>
      <p>"Where Every Journey Begins."</p>
    </div>

    <!-- Right side with form -->
    <div class="right-column">
      <!-- Logo - Clickable to go back to index.php -->
      <div class="logo">
        <a href="index.php">
          <img src="img/logo.png" alt="Logo" />
        </a>
      </div>

      <!-- Sign Up Form -->
      <form method="POST" action="signup_action.php">
        <h2>Sign Up</h2>

        <!-- Username -->
        <div class="form-group">
          <label for="username">Username</label>
          <i class="fas fa-user"></i>
          <input type="text" id="username"  name="username" placeholder="Username" required>
        </div>

        <!-- Email -->
        <div class="form-group">
          <label for="email">Email</label>
          <i class="fas fa-envelope"></i>
          <input type="email" id="email"  name="email" placeholder="Email" required>
        </div>

        <!-- Password -->
        <div class="form-group">
          <label for="password">Password</label>
          <i class="fas fa-lock"></i>
          <input type="password" id="password" name="password" placeholder="Password" required>
          <span class="toggle-password" onclick="togglePassword('password')">&#128065;</span>
        </div>
        <!-- Confirm Password -->
<div class="form-group">
  <label for="confirm_password">Confirm Password</label>
  <i class="fas fa-lock"></i>
  <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
</div>


        <!-- Terms and Conditions -->
        <div class="form-group">
          <label class="checkbox-label">
            <input type="checkbox" required> I agree to TravelSphere's <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>.
          </label>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn">Sign Up</button>

        <!-- Divider -->
        <div class="divider"><span>or</span></div>

        <!-- Google Button -->
        <button type="button" class="btn google">
          <img src="img/google.png" alt="Google Logo" />
          Sign up with Google
        </button>

        <!-- Log in link -->
        <p style="text-align: center; margin-top: 15px; font-size: 13px;">
          Already have an account? <a href="#">Log in here</a>.
        </p>
      </form>
    </div>
  </div>

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
