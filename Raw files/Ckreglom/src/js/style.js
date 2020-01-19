// $(".carousel").carousel({
//   interval: 5000,
//   keyboard: true,
//   pause: "hover",
//   wrap: true
// });

// $("#carousel-example-1z").on("slide.bs.carousel", function() {
//   console.log("slide");
// });

// $("#carousel-example-1z").on("slid.bs.carousel", function() {
//   console.log("slid");
// });

// $(doument).ready(function() {
//   $(".dropdown-menu a").hover(function() {
//     $(this)
//       .find("a")
//       .slideToggle();
//   });
// });

// var docWidth = document.documentElement.offsetWidth;
// [].forEach.call(document.querySelectorAll("*"), function(el) {
//   if (el.offsetWidth > docWidth) {
//     console.log(el);
//   }
// });

// $(document).on("click", "ul li", function() {
//   $(this)
//     .addClass("active")
//     .siblings()
//     .removeClass("active");
// });

// $(document).ready(function() {
//   $(".navbar-toggler").on("click", function() {
//     $(this).toggleClass("active");
//   });
// });

setTimeout(function() {
  $(".loader_bg").fadeToggle();
}, 1500);

$(document).ready(function() {
  $(
    $(".hamburger")
      .parent()
      .attr("data-target")
  ).on("hide.bs.collapse", function() {
    $(this)
      .parent()
      .find(".hamburger")
      .removeClass("hamburger--close");
  });
  $(
    $(".hamburger")
      .parent()
      .attr("data-target")
  ).on("show.bs.collapse", function() {
    $(this)
      .parent()
      .find(".hamburger")
      .addClass("hamburger--close");
  });
});

window.sr = new ScrollReveal();

sr.reveal(".navbar", {
  duration: 2000,
  origin: "top"
});
sr.reveal("#newHere .new-here", {
  duration: 2000,
  origin: "left",
  distance: "300px"
});
sr.reveal("#find-branch .branch", {
  duration: 2000,
  origin: "right",
  distance: "300px",
  viewFactor: 0.2
});
sr.reveal(".box-1", {
  duration: 2000,
  delay: 2000,
  origin: "bottom",
  viewFactor: 0.2
});
sr.reveal(".box-2", {
  duration: 2000,
  delay: 2000,
  origin: "bottom"
});
sr.reveal(".pa-img", {
  duration: 2000,
  distance: "300px",
  origin: "bottom",
  viewFactor: 0.008
});

sr.reveal(".conn-proph", {
  duration: 2000,
  distance: "300px",
  origin: "top",
  viewFactor: 0.2
});
sr.reveal(".go-img", {
  duration: 2000,
  distance: "300px",
  origin: "left",
  viewFactor: 0.008
});

sr.reveal("#vision-mission-section .vision", {
  duration: 2000,
  origin: "left",
  distance: "300px",
  viewFactor: 0.2
});

sr.reveal("#vision-mission-section .mission", {
  duration: 2000,
  origin: "right",
  distance: "300px",
  viewFactor: 0.2
});

sr.reveal("#our-belief .belief", {
  duration: 2000,
  origin: "left",
  distance: "300px",
  viewFactor: 0.2
});

sr.reveal("#our-belief .core-values", {
  duration: 2000,
  origin: "right",
  distance: "300px",
  viewFactor: 0.2
});

jQuery(document).ready(function($) {
  "use strict";
  //  TESTIMONIALS CAROUSEL HOOK
  $("#customers-testimonials").owlCarousel({
    loop: true,
    center: true,
    items: 3,
    margin: 0,
    autoplay: true,
    dots: true,
    autoplayTimeout: 8500,
    smartSpeed: 450,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      1170: {
        items: 3
      }
    }
  });
});

// $(".owl-carousel").owlCarousel({
//   loop: true,
//   margin: 10,
//   nav: true,
//   autoplay: true,
//   responsive: {
//     0: {
//       items: 1
//     },
//     600: {
//       items: 2
//     },
//     1000: {
//       items: 2
//     }
//   }
// });

// $(".owl-carousel").owlCarousel({
//   margin: 10,
//   nav: true,
//   navText: [
//     "<div class='nav-btn prev-slide'></div>",
//     "<div class='nav-btn next-slide'></div>"
//   ],
//   responsive: {
//     0: {
//       items: 1
//     },
//     600: {
//       items: 3
//     },
//     1000: {
//       items: 3
//     }
//   }
// });
$(".dropdown-menu a.dropdown-toggle").on("click", function(e) {
  if (
    !$(this)
      .next()
      .hasClass("show")
  ) {
    $(this)
      .parents(".dropdown-menu")
      .first()
      .find(".show")
      .removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass("show");

  $(this)
    .parents("li.nav-item.dropdown.show")
    .on("hidden.bs.dropdown", function(e) {
      $(".dropdown-submenu .show").removeClass("show");
    });

  return false;
});

$(document).ready(function() {
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll > 50) {
      $("#navbar").css("background", "#fff");
      // $("#navbar").css("box-shadow", " 0px 4px 7px rgba(52, 102, 218)");
      $("#navbar").css("transition", " 0.4s ease-out");
    } else {
      $("#navbar").css("background", "transparent");
      // $("#navbar").css("box-shadow", "0 0 5px rgba(52, 102, 218)");
      $("#navbar").css("transition", " 0.4s ease-out");
    }
  });
});

var lastScrollTop = 0;
navbar = document.getElementById("navbar");
window.addEventListener("scroll", function() {
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  if (scrollTop > lastScrollTop) {
    navbar.style.top = "-80px";
  } else {
    navbar.style.top = "0";
  }
  lastScrollTop = scrollTop;
});

// $(window).scroll(function() {
//   if ($(this).scrollTop() > 1060) {
//     $(".navLinks").addClass("about-links");
//   } else {
//     $(".navLinks").removeClass("about-links");
//   }
// });

// $(document).ready(function() {
//   var fixHeight = function() {
//     $(".navbar-nav").css(
//       "max-height",
//       document.documentElement.clientHeight - 150
//     );
//   };

//   fixHeight();
//   $(window).resize(function() {
//     fixHeight();
//   });

//   $(".navbar .navbar-toggler").on("click", function() {
//     fixHeight();
//   });
//   $(".navbar-toggler, .menu-overlay").on("click", function() {
//     $("#slide-navbar-collapse, .menu-overlay").toggleClass("open");
//     // document.getElementById("main").style.marginLeft = "250px";
//   });
// });

// selector("menu").addEventListener("click", function() {
//   this.classList("open");
//   selector("header").classList.toggle("open");
//   // selector("overlay").classList.toggle("open");
// });
// function selector(s) {
//   return document.querySelector(s);
// }
