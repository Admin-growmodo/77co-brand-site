/*
  [JS Index]
*/

/*
  1. preloader
  2. owl carousel
  3. magnificPopup
  4. clone function
  5. to top animation
  6. toggle blog panels
  7. navigation
  8. animate elements
  9. swiper slider
  10. contact form
*/

// vanillajs function to fade out an element for a specified duration
// (in milliseconds) and then remove it from the DOM
function fadeOut(el, duration) {
  el.style.opacity = 1;
  var interval = 10;
  var gap = interval / duration;
  function tick() {
    el.style.opacity -= gap;
    if (el.style.opacity <= 0) {
      // opacity is 0, so set display to none
      el.style.display = "none";
      clearInterval(fading);
    }
  }
  var fading = setInterval(tick, interval);
}

// vanillajs function to fade in an element for a specified duration
// (in milliseconds) and then remove it from the DOM
function fadeIn(el, duration) {
  el.style.opacity = 0;
  el.style.display = "block";
  var interval = 10;
  var gap = interval / duration;
  function tick() {
    el.style.opacity = +el.style.opacity + gap;
    if (el.style.opacity >= 1) {
      clearInterval(fading);
    }
  }
  var fading = setInterval(tick, interval);
}

// 1. preloader
// document.querySelector('#preloader').fadeOut(800);

fadeOut(document.querySelector("#preloader"), 800);
fadeOut(document.querySelector(".preloader-bg"), 800);
// document.querySelector('.preloader-bg').delay(600).fadeOut(800);

// 2. owl carousel
/* Initializing the Owl Carousel plugin on the element with the ID "owl-carousel-team". The plugin is
being configured with various options such as disabling the loop and autoplay, enabling navigation
arrows with custom text and container, and setting responsive breakpoints for the number of items
and margin between them. */
// $("#owl-carousel-team").owlCarousel({
//     loop: false,
//     center: false,
//     autoplay: false,
//     autoplaySpeed: 1000,
//     autoplayTimeout: 5000,
//     smartSpeed: 450,
//     // nav: false,
//     nav: true,
//     navText: ["<i class='ion-chevron-left'></i>", "<i class='ion-chevron-right'></i>"],
//     navContainer: '.owl-nav-custom-team',
//     responsive: {
//         0: {
//             items: 1,
//             margin: 30
//         },
//         768: {
//             items: 2,
//             margin: 50
//         },
//         980: {
//             items: 2,
//             margin: 50
//         },
//         1240: {
//             items: 3,
//             margin: 50
//         }
//     }
// });

// 3. magnificPopup
// $(".popup-photo-gallery").each(function() {
//     $(this).magnificPopup({
//         delegate: "a",
//         type: "image",
//         gallery: {
//             enabled: true
//         },
//         removalDelay: 100,
//         mainClass: "mfp-fade",
//         fixedContentPos: false
//     });
// });

// 4. clone function
window.duplicate = function (count, cloneEvents, callback) {
  var stack = [],
    el;
  while (count--) {
    el = this.clone(cloneEvents);
    callback && callback.call(el);
    stack.push(el.get()[0]);
  }
  return this.pushStack(stack);
};

function appendTo(className, html) {
  //find all elements with class
  var elements = document.getElementsByClassName(className);
  //iterate over elements
  for (var i = 0; i < elements.length; i++) {
    //create div
    // var div = document.createElement("div");
    //add class to div
    elements[i].innerHTML = html;
    //append div to element
    // elements[i].appendChild(div);
  }
}

appendTo("vertical-lines", '<div class="vertical-lines-wrapper"></div>');
appendTo('vertical-lines-wrapper', '<div class="vertical-effect"></div>);

// $("<div class='vertical-lines-wrapper'></div>").appendTo(".vertical-lines");
// $("<div class='vertical-effect'></div>").duplicate(3).appendTo(".vertical-lines-wrapper");

// 5. to top animation
// document.querySelector(".to-top-arrow").on("click", function () {
//   document.querySelector("body, html").animate(
//     {
//       scrollTop: 0,
//     },
//     1000
//   );
//   return false;
// });

// 6. toggle blog panels
// document.querySelector(".blog-side-launcher").on("click", function () {
//   var divClass = document.querySelector(this).getAttribute("data-id");
//   if (document.querySelector(this).classList.contains("open")) {
//     document.querySelector(this).classList.remove("open");
//     document.querySelector("." + divClass).classList.add("open");
//   } else {
//     document.querySelector(this).classList.add("open");
//     document.querySelector("." + divClass).classList.add("open");
//   }
// });

// document
//   .querySelector(".blog-side-launch, .blog-side-text")
//   .on("click", function () {
//     document
//       .querySelector(
//         ".panel-from-left-blog, .panel-overlay-from-right-blog"
//       )
//       .classList.remove("open");
//   });

// 7. navigation
// document
//   .querySelector(".navbar-collapse ul li a.nav-close")
//   .on("click", function () {
//     document
//       .querySelector(".navbar-toggle:visible")
//       .addEventListener("click");
//   });
// navigation dropdown
// document.querySelector(".dropdown-toggle").on("click", function (e) {
//   if (
//     document.querySelector(document).getBoundingClientRect().width > 768
//   ) {
//     e.preventDefault();
//     var url = document.querySelector(this).getAttribute("href");
//     if (url !== "#") {
//       window.location.href = url;
//     }
//   }
// });

// document.querySelector(window).on("scroll", function () {
//   // 8. animate elements
//   if (document.querySelector(this).scrollTop() > 50) {
//     document
//       .querySelector(".navbar-bg-switch")
//       .classList.add("navbar-bg-switch-color");
//     document
//       .querySelector(".main-navigation-bg")
//       .classList.add("main-navigation-bg-position-primary");
//     document
//       .querySelector(".navbar-collapse")
//       .classList.add("navbar-collapse-position-primary");
//     document
//       .querySelector(".main-navigation")
//       .classList.add("main-navigation-home-call");
//     document
//       .querySelector(".navbar-bg-switch")
//       .classList.add("main-navigation-bg");
//     document.querySelector(".to-top-arrow").classList.add("show");
//   } else {
//     document
//       .querySelector(".navbar-bg-switch")
//       .classList.remove("navbar-bg-switch-color");
//     document
//       .querySelector(".main-navigation-bg")
//       .classList.remove("main-navigation-bg-position-primary");
//     document
//       .querySelector(".navbar-collapse")
//       .classList.remove("navbar-collapse-position-primary");
//     document
//       .querySelector(".main-navigation")
//       .classList.remove("main-navigation-home-call");
//     document
//       .querySelector(".navbar-bg-switch")
//       .classList.remove("main-navigation-bg");
//     document.querySelector(".to-top-arrow").classList.remove("show");
//   }
// });

// 9. swiper slider
var swiper1 = new Swiper(
  ".swiper-container-wrapper .swiper-container.swiper1",
  {
    preloadImages: false,
    // autoplay: false,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    init: true,
    loop: true,
    speed: 1200,
    grabCursor: true,
    mousewheel: false,
    keyboard: true,
    simulateTouch: true,
    parallax: true,
    effect: "slide",
    pagination: false,
    navigation: {
      nextEl: ".slide-next",
      prevEl: ".slide-prev",
    },
    scrollbar: false,
  }
);
swiper1.on("slideChangeTransitionStart", function () {
  $(".slider-progress-bar").removeClass("slider-active");
  $(".hero-bg")
    .find("video")
    .each(function () {
      this.pause();
    });
});
swiper1.on("slideChangeTransitionEnd", function () {
  $(".slider-progress-bar").addClass("slider-active");
  $(".hero-bg")
    .find("video")
    .each(function () {
      this.play();
    });
});
//
var swiper2 = new Swiper(
  ".swiper-container-wrapper .swiper-container.swiper2",
  {
    preloadImages: false,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    init: true,
    loop: true,
    speed: 1200,
    grabCursor: true,
    mousewheel: false,
    keyboard: true,
    simulateTouch: true,
    parallax: true,
    effect: "slide",
    pagination: {
      el: ".swiper-slide-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".slide-next",
      prevEl: ".slide-prev",
    },
    centeredSlides: true,
    slidesPerView: 2,
    spaceBetween: 0,
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      480: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      640: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
    },
  }
);
//
var swiper3 = new Swiper(
  ".swiper-container-wrapper .swiper-container.swiper3",
  {
    preloadImages: false,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    init: true,
    loop: false,
    speed: 1200,
    grabCursor: true,
    mousewheel: false,
    keyboard: true,
    simulateTouch: true,
    parallax: false,
    effect: "slide",
    pagination: {
      el: ".swiper-slide-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".slide-next",
      prevEl: ".slide-prev",
    },
    slidesPerView: 2,
    slidesPerColumn: 2,
  }
);

// 10. contact form
// document.querySelector('form#form').on('submit', function() {
//     document.querySelector('form#form .error').remove();
//     var s = !1;
//     if (document.querySelector('.requiredField').forEach(function() {
//             if ('' === jQuery.trim(document.querySelector(this).value)) document.querySelector(this).prev('label').textContent, document.querySelector(this).parentNode.append('<span class='error'>This field is required</span>'), document.querySelector(this).classList.add(
//                 'inputError'), s = !0;
//             else if (document.querySelector(this).classList.contains('email')) {
//                 var r = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
//                 r.test(jQuery.trim(document.querySelector(this).value)) || (document.querySelector(this).prev('label').textContent, document.querySelector(this).parentNode.append('<span class='error'>Invalid email address</span>'), document.querySelector(this).classList.add(
//                     'inputError'), s = !0);
//             }
//         }), !s) {
//         document.querySelector('form#form input.submit').fadeOut('normal', function() {
//             document.querySelector(this).parentNode.append('');
//         });
//         var r = document.querySelector(this).serialize();
//         $.post(document.querySelector(this).getAttribute('action'), r, function() {
//             document.querySelector('form#form').slideUp('fast', function() {
//                 document.querySelector(this).before('<div class="success">Your email was sent successfully.</div>');
//             });
//         });
//     }
//     return !1;
// });

var swiper = new Swiper(".team-swiper", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

fitty("#main-title");
