document.addEventListener("DOMContentLoaded", () => {
    // Toggle password visibility
    const togglePassword = document.querySelector(".toggle-password")
    const passwordInput = document.getElementById("password")
  
    if (togglePassword && passwordInput) {
      togglePassword.addEventListener("click", function () {
        const type = passwordInput.getAttribute("type") === "password" ? "text" : "password"
        passwordInput.setAttribute("type", type)
  
        // Change the eye icon
        const eyeIcon = this.querySelector("svg")
        if (type === "text") {
          eyeIcon.innerHTML =
            '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><line x1="1" y1="1" x2="23" y2="23"></line>'
        } else {
          eyeIcon.innerHTML =
            '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle>'
        }
      })
    }
  
    // Form validation
    const signupForm = document.querySelector(".signup-form")
    if (signupForm) {
      signupForm.addEventListener("submit", (e) => {
        e.preventDefault()
  
        const email = document.getElementById("email").value
        const username = document.getElementById("username").value
        const password = document.getElementById("password").value
        const terms = document.getElementById("terms").checked
  
        let isValid = true
  
        // Simple validation
        if (!email) {
          alert("Please enter your email address")
          isValid = false
        } else if (!validateEmail(email)) {
          alert("Please enter a valid email address")
          isValid = false
        }
  
        if (!username) {
          alert("Please enter a username")
          isValid = false
        }
  
        if (!password) {
          alert("Please enter a password")
          isValid = false
        } else if (password.length < 6) {
          alert("Password must be at least 6 characters long")
          isValid = false
        }
  
        if (!terms) {
          alert("Please agree to the Terms & Conditions and Privacy Policy")
          isValid = false
        }
  
        if (isValid) {
          // In a real application, you would submit the form to the server
          alert("Registration successful! Redirecting to login page...")
          // window.location.href = 'login.php';
        }
      })
    }
  
    // Email validation helper function
    function validateEmail(email) {
      const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
      return re.test(email)
    }
  })
  
  