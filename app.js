// require('./components/Example');
document.addEventListener("DOMContentLoaded", function () {
  var mySwiper = new Swiper(".swiper-container", {
    // Optional parameters
    //   direction: 'vertical',
    loop: true,
    slidesPerView: 0.95,
    centeredSlides: true,
    spaceBetween: 0,
    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
      hideOnClick: true,
      hiddenClass: "swiper-button-hidden",
    },

    // And if we need scrollbar
    //   scrollbar: {
    //     el: '.swiper-scrollbar',
    //   },
  });
});

window.onscroll = function () {
  myFunction();
};

// Get the navbar
var navbar = document.getElementById("mainmenu");

// Get the offset position of the navbar
var sticky = 3;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}

var menusection = document.querySelector("#mainmenu");

document.querySelector(".menu-btn").addEventListener("click", toggleClass);
document
  .querySelector(".menu-close-btn")
  .addEventListener("click", toggleClass);

function toggleClass() {
  if (menusection.classList) {
    menusection.classList.toggle("sidebar-open");
  } else {
    // For IE9
    var classes = menusection.className.split(" ");
    var i = classes.indexOf("sidebar-open");

    if (i >= 0) classes.splice(i, 1);
    else classes.push("sidebar-open");
    menusection.className = classes.join(" ");
  }
}

//TODO add click event to any dropdown to show the submenu in mobile
