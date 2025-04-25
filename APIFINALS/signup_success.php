<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Success - TravelSphere</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        .success-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8)), url('hero-bg.jpg');
            background-size: cover;
            background-position: center;
        }
        
        .success-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
            padding: 2rem;
            text-align: center;
        }
        
        .success-card h1 {
            color: #333;
            margin-bottom: 1rem;
        }
        
        .success-card p {
            color: #666;
            margin-bottom: 2rem;
        }
        
        .home-btn {
            background-color: #e91e63;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 0.8rem 2rem;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            text-decoration: none;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="success-card">
            <h1>Registration Successful!</h1>
            <p>Your account has been created successfully. You can now log in to access all features of TravelSphere.</p>
            <a href="login.php" class="home-btn">Log In Now</a>
        </div>
    </div>
</body>
</html>