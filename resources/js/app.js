//import './bootstrap';
import.meta.glob([ '../img/**', ]);
//Function to header fixed on scroll
let isHeaderFixed = false;
let lastScrollTop = 0;
const headerBottom = document.querySelector('.header-bottom');

window.addEventListener('scroll', () => {
  const scrollTop = window.scrollY || document.documentElement.scrollTop;

  if (scrollTop > 300) {
    if (!isHeaderFixed) {
      isHeaderFixed = true;
      headerBottom.classList.add('header-fixed');
    }
    if (scrollTop < lastScrollTop) {
      headerBottom.style.top = '0';
    } else {
      headerBottom.style.top = '-120%';
    }
  } else {
    if (isHeaderFixed) {
      isHeaderFixed = false;
      headerBottom.classList.remove('header-fixed');
    }
    headerBottom.style.top = 'unset';
  }

  lastScrollTop = scrollTop;
});

// Get references to the elements
const navbarToggler = document.querySelector('.navbar-toggler');
const navbarNav = document.querySelector('.navbar-nav');

// Add a click event listener to the navbar toggler button
navbarToggler.addEventListener('click', () => {
  // Toggle the 'show' class on the navbar-nav to show/hide the menu
  navbarNav.classList.toggle('show');
});

// Function to check scroll position and toggle back-to-top button visibility
const toggleBackToTopButton = () => {
  const button = document.getElementById('backToTopButton');
  const shouldShowButton = window.scrollY >= 200;

  button.classList.toggle('show', shouldShowButton);
};

// Function to scroll back to the top when the button is clicked
const scrollToTop = () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
};

// Add scroll event listener to toggle the button
window.addEventListener('scroll', toggleBackToTopButton);

// Add click event listener to the back-to-top button
document.getElementById('backToTopButton').addEventListener('click', scrollToTop);
