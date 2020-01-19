// var docWidth = document.documentElement.offsetWidth;
// [].forEach.call(document.querySelectorAll("*"), function(el) {
//   if (el.offsetWidth > docWidth) {
//     console.log(el);
//   }
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

sr.reveal(".gos-img", {
    duration: 2000,
    distance: "300px",
    origin: "left",
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

var lastScrollTop = 0;
navbar = document.getElementById("mainNav");
window.addEventListener("scroll", function() {
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        navbar.style.top = "-80px";
    } else {
        navbar.style.top = "0";
    }
    lastScrollTop = scrollTop;
});

var MQL = 992;

// primary navigation slide-in effect
if ($(window).width() > MQL) {
    var headerHeight = $("#navbar").height();
    $(window).on(
        "scroll",
        {
            previousTop: 0
        },
        function() {
            var currentTop = $(window).scrollTop();
            //check if user is scrolling up
            if (currentTop < this.previousTop) {
                //if scrolling up...
                if (currentTop > 0 && $("#navbar").hasClass("is-fixed")) {
                    $("#navbar").addClass("is-visible");
                } else {
                    $("#navbar").removeClass("is-visible is-fixed");
                }
            } else if (currentTop > this.previousTop) {
                //if scrolling down...
                $("#navbar").removeClass("is-visible");
                if (
                    currentTop > headerHeight &&
                    !$("#navbar").hasClass("is-fixed")
                )
                    $("#navbar").addClass("is-fixed");
            }
            this.previousTop = currentTop;
        }
    );
}

$(document).on("click", '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});

$(document).ready(function() {
    $("#example").DataTable({
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function(row) {
                        var data = row.data();
                        return "Details for " + data[0] + " " + data[1];
                    }
                }),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                    tableClass: "table"
                })
            }
        }
    });
});
$(document).ready(function() {
    $("#example1").DataTable({
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function(row) {
                        var data = row.data();
                        return "Details for " + data[0] + " " + data[1];
                    }
                }),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                    tableClass: "table"
                })
            }
        }
    });
});

$(document).ready(function() {
    $("#example2").DataTable({
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function(row) {
                        var data = row.data();
                        return "Details for " + data[0] + " " + data[1];
                    }
                }),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                    tableClass: "table"
                })
            }
        }
    });
});

(function($) {
    "use strict"; // Start of use strict

    // Detect when form-control inputs are not empty
    $(".cool-b4-form .form-control").on("input", function() {
        if ($(this).val()) {
            $(this).addClass("hasValue");
        } else {
            $(this).removeClass("hasValue");
        }
    });
})(jQuery); // End of use strict
