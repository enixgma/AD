document.addEventListener("DOMContentLoaded", () => {
    // Mobile menu toggle (if needed)
    const mobileMenuToggle = document.querySelector(".mobile-menu-toggle")
    const mainNav = document.querySelector(".main-nav")
  
    if (mobileMenuToggle && mainNav) {
      mobileMenuToggle.addEventListener("click", () => {
        mainNav.classList.toggle("active")
      })
    }
  
    // Dropdown functionality
    const dropdowns = document.querySelectorAll(".dropdown")
    if (dropdowns.length > 0) {
      dropdowns.forEach((dropdown) => {
        const toggle = dropdown.querySelector(".dropdown-toggle")
        const menu = dropdown.querySelector(".dropdown-menu")
  
        // For mobile devices, use click instead of hover
        if (window.innerWidth < 768) {
          toggle.addEventListener("click", (e) => {
            e.preventDefault()
            menu.style.display = menu.style.display === "block" ? "none" : "block"
          })
  
          // Close dropdown when clicking outside
          document.addEventListener("click", (e) => {
            if (!dropdown.contains(e.target)) {
              menu.style.display = "none"
            }
          })
        }
      })
    }
  
    // Search form submission
    const searchForm = document.querySelector(".search-bar")
    if (searchForm) {
      searchForm.addEventListener("submit", function (e) {
        e.preventDefault()
        const searchInput = this.querySelector("input")
        if (searchInput.value.trim() !== "") {
          alert("Searching for: " + searchInput.value)
          // In a real application, you would redirect to search results page
          // window.location.href = 'search-results.php?q=' + encodeURIComponent(searchInput.value);
        }
      })
    }
  
    // Save button functionality
    const saveButtons = document.querySelectorAll(".save-btn")
    if (saveButtons.length > 0) {
      saveButtons.forEach((button) => {
        button.addEventListener("click", function () {
          this.classList.toggle("saved")
          if (this.classList.contains("saved")) {
            this.innerHTML =
              '<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg> Saved'
            alert("Destination saved to your favorites!")
          } else {
            this.innerHTML =
              '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg> Save'
            alert("Destination removed from your favorites.")
          }
        })
      })
    }
  })
  
  