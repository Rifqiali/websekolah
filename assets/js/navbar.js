document.addEventListener('DOMContentLoaded', function () {
  const navbar = document.querySelector('.navbar');
  let lastScrollPosition = window.scrollY;

  // Function to update navbar transparency based on scroll position
  function updateNavbarTransparency() {
    if (window.scrollY > 100 || lastScrollPosition > 100) {
      navbar.classList.add('navbar-dark');
    } else {
      navbar.classList.remove('navbar-dark');
    }
  }

  // Set navbar transparency initially
  updateNavbarTransparency();

  function handleScroll() {
    const scrollPosition = window.scrollY;

    if (scrollPosition > 100 && lastScrollPosition <= 100) {
      navbar.classList.add('navbar-dark');
    } else if (scrollPosition <= 100 && lastScrollPosition > 100) {
      navbar.classList.remove('navbar-dark');
    }

    lastScrollPosition = scrollPosition;
  }

  window.addEventListener('scroll', handleScroll);

  // Add event listener to handle refreshing page
  window.addEventListener('beforeunload', function () {
    window.localStorage.setItem('scrollPosition', window.scrollY.toString()); // Store the scroll position in localStorage
  });

  window.addEventListener('load', function () {
    const storedScrollPosition = parseInt(window.localStorage.getItem('scrollPosition')) || 0;
    window.scrollTo(0, storedScrollPosition); // Scroll to the stored scroll position
    updateNavbarTransparency(); // Update navbar transparency after refreshing page
  });

  // Add event listener to reset scroll position when navigating to a new page
  window.addEventListener('beforeunload', function () {
    window.localStorage.removeItem('scrollPosition'); // Remove the stored scroll position from localStorage
  });
});

// Active link
const navLinkEls = document.querySelectorAll('.nav-item');
const windowPathName = window.location.pathname;

navLinkEls.forEach(navLinkEl => {
  if (navLinkEl.href.includes(windowPathName)) {
    navLinkEl.classList.add('active');
  }
});
