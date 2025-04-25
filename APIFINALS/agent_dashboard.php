<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelSphere - Explore the World</title>
    <link rel="stylesheet" href="css/agent_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo-icon">
                        <path d="M12 2L4 7V17L12 22L20 17V7L12 2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 22V12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 7L12 12L4 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>TravelSphere</span>
                </a>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#explore">Explore</a></li>
                    <li><a href="#packages">Packages</a></li>
                </ul>
            </nav>
            <div class="nav-buttons">
  <div class="dropdown">
    <button class="dropbtn">
         <!-- Profile Picture -->
         <div class="profile-picture">
          <img src="img/agent.jpg" alt="Agent Profile Picture">
        </div>
      Cham Purado <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Dashboard</a>
      <a href="#">Manage Reservation</a>
      <a href="#">Manage Packages</a>
      <a href="#">View Earnings</a>
      <a href="#">Reviews & Feedback</a>
      <a href="#">Profile Settings</a>
      <a href="index.php">Log Out</a>
    </div>
  </div>
</div>

        </div>
    </header>

    <section id="hero" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Explore the World with TravelSphere</h1>
                <p>Discover amazing destinations and create unforgettable memories.</p>
                <div class="search-bar">
                    <input type="text" placeholder="Where do you want to go?">
                    <button>Search</button>
                </div>
            </div>
        </div>
    </section>

    <section id="explore" class="destinations-section">
        <div class="container">
            <h2>Explore Top Destinations</h2>
            <div class="destinations-grid">
                <div class="destination-card">
                    <img src="img/la union.jpg" alt="La Union">
                    <div class="destination-info">
                        <h3>LA UNION</h3>
                        <p>Lush mountains, cool climate, and panoramic views make Baguio perfect for city-dwellers</p>
                        <button class="save-btn"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg> Save</button>
                    </div>
                </div>
                <div class="destination-card">
                    <img src="img/bukidnon.jpg" alt="Bukidnon">
                    <div class="destination-info">
                        <h3>BUKIDNON</h3>
                        <p>Crystal clear waters, white sand beaches, and vibrant nightlife perfect for beach lovers</p>
                        <button class="save-btn"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg> Save</button>
                    </div>
                </div>
                <div class="destination-card">
                    <img src="img/palawan.jpg" alt="Palawan">
                    <div class="destination-info">
                        <h3>EL NIDO, PALAWAN</h3>
                        <p>Dramatic limestone cliffs, crystal-clear lagoons, and hidden beaches await adventurers</p>
                        <button class="save-btn"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg> Save</button>
                    </div>
                </div>
                <div class="destination-card">
                    <img src="img/siargao 3.jpg" alt="Siargao">
                    <div class="destination-info">
                        <h3>SIARGAO</h3>
                        <p>Surfing paradise with pristine beaches and laid-back island vibes perfect for relaxation</p>
                        <button class="save-btn"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg> Save</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="packages"  class="packages-section">
        <div class="container">
            <h4>Packages & Deals</h4>
            <div class="packages-grid">
    <div class="package-card">
        <img src="img/sample3.jpg" alt="Bohol Package">
        <div class="package-details">
            <h4>Package Details : Bohol Package</h4>
            <p>Price: ₱3,499</p>
            <p>Available Slots: 10</p>
        </div>
    </div>
    <div class="package-card">
        <img src="img/sampe2.jpg" alt="Cebu Package">
        <div class="package-details">
            <h4>Package Details : Cebu Package</h4>
            <p>Price: ₱4,199</p>
            <p>Available Slots: 8</p>
        </div>
    </div>
    <div class="package-card">
        <img src="img/sampe2.jpg" alt="Philippines Package">
        <div class="package-details">
            <h4>Package Details : Philippines Package</h4>
            <p>Price: ₱6,999</p>
            <p>Available Slots: 12</p>
        </div>
    </div>
</div>

        </div>
    </section>

    <section class="how-it-works-section">
        <div class="container">
            <h2>HOW TRAVELSPHERE WORKS</h2>
            <div class="steps-container">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <p>Browse available options or choose from flight-only, flight+hotel, or flight+tour to find the best package for your needs.</p>
                        <div class="step-image">
                            <img src="img/htw.jpg" alt="Step 1">
                        </div>
                    </div>
                </div>
                
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <p>Submit your reservation request, and an agent will review and confirm if you're ready to proceed. The agent will also provide details about availability, inclusions, and cancellation terms.</p>
                        <div class="step-image">
                            <img src="img/htw4.png" alt="Step 2">
                        </div>
                    </div>
                </div>
                
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <p>Pay either in full or partially, with a deadline to complete the payment. Failure to pay before the deadline will result in cancellation.</p>
                        <div class="step-image">
                            <img src="img/htw3.jpg" alt="Step 3">
                        </div>
                    </div>
                </div>
                
                <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <p>Once payment is confirmed, the agent will send your booking details, itinerary, and necessary vouchers via email—ready for your trip!</p>
                        <div class="step-image">
                            <img src="img/htw5.jpg" alt="Step 4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-choose-us-section">
    <div class="container">
        <h2>WHY CHOOSE TRAVELSPHERE?</h2>
        <div class="why-choose-us-content">
            <!-- Left Column: 4 Reasons -->
            <div class="reasons-container">
                <div class="reason">
                    <div class="reason-number">1</div>
                    <div class="reason-content">
                        <p>Find a variety of travel options: flights, hotels, and tours tailored to your needs.</p>
                    </div>
                </div>
                
                <div class="reason">
                    <div class="reason-number">2</div>
                    <div class="reason-content">
                        <p>Personalized service with dedicated agents who help you at every step of the booking process.</p>
                    </div>
                </div>
                
                <div class="reason">
                    <div class="reason-number">3</div>
                    <div class="reason-content">
                        <p>Convenient payment options including flexible plans and transparent pricing.</p>
                    </div>
                </div>
                
                <div class="reason">
                    <div class="reason-number">4</div>
                    <div class="reason-content">
                        <p>Fast confirmation and hassle-free communication for all your travel needs.</p>
                    </div>
                </div>
            </div>

            <!-- Right Column: 4 Images -->
            <div class="images-container">
                <div class="image-row">
                    <div class="image-box">
                        <img src="img/htw4.png" alt="Reason 1">
                    </div>
                    <div class="image-box">
                        <img src="img/htw5.jpg" alt="Reason 2">
                    </div>
                </div>
                <div class="image-row">
                    <div class="image-box">
                        <img src="img/htw3.jpg" alt="Reason 3">
                    </div>
                    <div class="image-box">
                        <img src="img/htw.jpg" alt="Reason 4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section">
                    <div class="footer-logo">
                        <span>TravelSphere</span>
                        <p>Your trusted travel partner since 2025</p>
                    </div>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
                        <a href="#" class="social-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
                        <a href="#" class="social-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Destinations</a></li>
                        <li><a href="#">Packages</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Flights</a></li>
                        <li><a href="#">Hotels</a></li>
                        <li><a href="#">Tours</a></li>
                        <li><a href="#">Car Rentals</a></li>
                        <li><a href="#">Travel Insurance</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Contact</h3>
                    <div class="contact-info">
                        <p><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> 123 Main St, Cebu City</p>
                        <p><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> info@travelsphere.com</p>
                        <p><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> +63 123 456 7890</p>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>© 2023 TravelSphere. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>

