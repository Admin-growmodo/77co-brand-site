/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./source/_assets/js/main.js":
/*!***********************************!*\
  !*** ./source/_assets/js/main.js ***!
  \***********************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* module decorator */ module = __webpack_require__.hmd(module);
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
//import Swiper from "swiper";
//import 'swiper/css';


/**
 * fitty v2.3.6 - Snugly resizes text to fit its parent container
 * Copyright (c) 2022 Rik Schennink <rik@pqina.nl> (https://pqina.nl/)
 */

!function (e, t) {
  "object" == (typeof exports === "undefined" ? "undefined" : _typeof(exports)) && "undefined" != "object" ? module.exports = t() : "function" == typeof define && __webpack_require__.amdO ? define(t) : (e = "undefined" != typeof globalThis ? globalThis : e || self).fitty = t();
}(undefined, function () {
  "use strict";

  return function (e) {
    if (e) {
      var t = function t(e) {
          return [].slice.call(e);
        },
        n = 0,
        i = 1,
        r = 2,
        o = 3,
        l = [],
        u = null,
        a = "requestAnimationFrame" in e ? function () {
          e.cancelAnimationFrame(u), u = e.requestAnimationFrame(function () {
            return f(l.filter(function (e) {
              return e.dirty && e.active;
            }));
          });
        } : function () {},
        c = function c(e) {
          return function () {
            l.forEach(function (t) {
              return t.dirty = e;
            }), a();
          };
        },
        f = function f(e) {
          e.filter(function (e) {
            return !e.styleComputed;
          }).forEach(function (e) {
            e.styleComputed = m(e);
          }), e.filter(y).forEach(v);
          var t = e.filter(p);
          t.forEach(d), t.forEach(function (e) {
            v(e), s(e);
          }), t.forEach(S);
        },
        s = function s(e) {
          return e.dirty = n;
        },
        d = function d(e) {
          e.availableWidth = e.element.parentNode.clientWidth, e.currentWidth = e.element.scrollWidth, e.previousFontSize = e.currentFontSize, e.currentFontSize = Math.min(Math.max(e.minSize, e.availableWidth / e.currentWidth * e.previousFontSize), e.maxSize), e.whiteSpace = e.multiLine && e.currentFontSize === e.minSize ? "normal" : "nowrap";
        },
        p = function p(e) {
          return e.dirty !== r || e.dirty === r && e.element.parentNode.clientWidth !== e.availableWidth;
        },
        m = function m(t) {
          var n = e.getComputedStyle(t.element, null);
          return t.currentFontSize = parseFloat(n.getPropertyValue("font-size")), t.display = n.getPropertyValue("display"), t.whiteSpace = n.getPropertyValue("white-space"), !0;
        },
        y = function y(e) {
          var t = !1;
          return !e.preStyleTestCompleted && (/inline-/.test(e.display) || (t = !0, e.display = "inline-block"), "nowrap" !== e.whiteSpace && (t = !0, e.whiteSpace = "nowrap"), e.preStyleTestCompleted = !0, t);
        },
        v = function v(e) {
          e.element.style.whiteSpace = e.whiteSpace, e.element.style.display = e.display, e.element.style.fontSize = e.currentFontSize + "px";
        },
        S = function S(e) {
          e.element.dispatchEvent(new CustomEvent("fit", {
            detail: {
              oldValue: e.previousFontSize,
              newValue: e.currentFontSize,
              scaleFactor: e.currentFontSize / e.previousFontSize
            }
          }));
        },
        h = function h(e, t) {
          return function () {
            e.dirty = t, e.active && a();
          };
        },
        b = function b(e) {
          return function () {
            l = l.filter(function (t) {
              return t.element !== e.element;
            }), e.observeMutations && e.observer.disconnect(), e.element.style.whiteSpace = e.originalStyle.whiteSpace, e.element.style.display = e.originalStyle.display, e.element.style.fontSize = e.originalStyle.fontSize;
          };
        },
        w = function w(e) {
          return function () {
            e.active || (e.active = !0, a());
          };
        },
        z = function z(e) {
          return function () {
            return e.active = !1;
          };
        },
        F = function F(e) {
          e.observeMutations && (e.observer = new MutationObserver(h(e, i)), e.observer.observe(e.element, e.observeMutations));
        },
        g = {
          minSize: 16,
          maxSize: 512,
          multiLine: !0,
          observeMutations: "MutationObserver" in e && {
            subtree: !0,
            childList: !0,
            characterData: !0
          }
        },
        W = null,
        E = function E() {
          e.clearTimeout(W), W = e.setTimeout(c(r), C.observeWindowDelay);
        },
        M = ["resize", "orientationchange"];
      return Object.defineProperty(C, "observeWindow", {
        set: function set(t) {
          var n = "".concat(t ? "add" : "remove", "EventListener");
          M.forEach(function (t) {
            e[n](t, E);
          });
        }
      }), C.observeWindow = !0, C.observeWindowDelay = 100, C.fitAll = c(o), C;
    }
    function x(e, t) {
      var n = Object.assign({}, g, t),
        i = e.map(function (e) {
          var t = Object.assign({}, n, {
            element: e,
            active: !0
          });
          return function (e) {
            e.originalStyle = {
              whiteSpace: e.element.style.whiteSpace,
              display: e.element.style.display,
              fontSize: e.element.style.fontSize
            }, F(e), e.newbie = !0, e.dirty = !0, l.push(e);
          }(t), {
            element: e,
            fit: h(t, o),
            unfreeze: w(t),
            freeze: z(t),
            unsubscribe: b(t)
          };
        });
      return a(), i;
    }
    function C(e) {
      var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
      return "string" == typeof e ? x(t(document.querySelectorAll(e)), n) : x([e], n)[0];
    }
  }("undefined" == typeof window ? null : window);
});

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

// document.querySelector('.preloader-bg').delay(600).fadeOut(800);

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
var duplicate = function duplicate(div, count) {
  var stack = [],
    el;
  while (count--) {
    el = div.cloneNode(true);
    stack.push(el);
  }
  return stack;
};
function createDiv(str) {
  var div = document.createElement("div");
  div.innerHTML = str;
  return div.firstElementChild;
}
function appendHtml(div, el) {
  while (div.children.length > 0) {
    el.appendChild(div.children[0]);
  }
}
function appendTo(className, html) {
  var elements = document.getElementsByClassName(className);
  for (var i = 0; i < elements.length; i++) {
    var element = elements[i];
    if (typeof html == "string") {
      element.innerHTML = html;
    } else if (_typeof(html) == "object") {
      element.appendChild(html);
    }
  }
}

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

// 9. swiper slider
// var swiper1 = new Swiper(
//   ".swiper-container-wrapper .swiper-container.swiper1",
//   {
//     preloadImages: false,
//     // autoplay: false,
//     autoplay: {
//       delay: 4000,
//       disableOnInteraction: false,
//     },
//     init: true,
//     loop: true,
//     speed: 1200,
//     grabCursor: true,
//     mousewheel: false,
//     keyboard: true,
//     simulateTouch: true,
//     parallax: true,
//     effect: "slide",
//     pagination: false,
//     navigation: {
//       nextEl: ".slide-next",
//       prevEl: ".slide-prev",
//     },
//     scrollbar: false,
//   }
// );
// swiper1.on("slideChangeTransitionStart", function () {
//   $(".slider-progress-bar").removeClass("slider-active");
//   $(".hero-bg")
//     .find("video")
//     .each(function () {
//       this.pause();
//     });
// });
// swiper1.on("slideChangeTransitionEnd", function () {
//   $(".slider-progress-bar").addClass("slider-active");
//   $(".hero-bg")
//     .find("video")
//     .each(function () {
//       this.play();
//     });
// });

//
// var swiper3 = new Swiper(
//   ".swiper-container-wrapper .swiper-container.swiper3",
//   {
//     preloadImages: false,
//     autoplay: {
//       delay: 4000,
//       disableOnInteraction: false,
//     },
//     init: true,
//     loop: false,
//     speed: 1200,
//     grabCursor: true,
//     mousewheel: false,
//     keyboard: true,
//     simulateTouch: true,
//     parallax: false,
//     effect: "slide",
//     pagination: {
//       el: ".swiper-slide-pagination",
//       clickable: true,
//     },
//     navigation: {
//       nextEl: ".slide-next",
//       prevEl: ".slide-prev",
//     },
//     slidesPerView: 2,
//     slidesPerColumn: 2,
//   }
// );

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

// var swiper = new Swiper(".team-swiper", {
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },
// });

document.addEventListener('DOMContentLoaded', function () {
  fadeOut(document.querySelector("#preloader"), 800);
  fadeOut(document.querySelector(".preloader-bg"), 800);

  var top_header_bg = document.querySelector(".hero-bg.overlay");
  var navbarLinks_f = document.querySelectorAll(".main-navigation .navbar-nav li a");
  
  if (typeof(top_header_bg) == 'undefined' || top_header_bg == null) {
    navbarLinks_f.forEach(function (link) {
      link.style.setProperty("color", "black", "important");
    });
    document.querySelector(".logo .logo-light").style.setProperty("filter", "brightness(0%)", "important");
    document.querySelector(".logo .logo-dark").style.setProperty("filter", "brightness(0%)", "important");
  }

  // Add lines to page
  var wrapper = createDiv('<div class="vertical-effect"></div>');
  appendTo("vertical-lines", '<div class="vertical-lines-wrapper"></div>');
  for (var i = 0; i < 3; i++) {
    appendTo("vertical-lines-wrapper", wrapper);
  }

  // 5. to top animation
  var scrollBtn = document.querySelector(".to-top-arrow");
  scrollBtn.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });
  fitty("#main-title");

  // 8. animate elements
  window.addEventListener("scroll", function () {
    var scrollBtn = document.querySelector(".to-top-arrow");
    var navbarTogglerIcon = document.querySelector(".navbar_toggler_icon");
    var navbarLinks = document.querySelectorAll(".main-navigation .navbar-nav li a");
    var btnVisibility = function btnVisibility() {
      if (window.scrollY > 400) {
        scrollBtn.style.visibility = "visible";
      } else {
        scrollBtn.style.visibility = "hidden";
      }
    };
    if (window.scrollY > 50) {
      document.querySelector(".navbar-bg-switch").classList.add("navbar-bg-switch-color");
      //document.querySelector(".navbar-collapse").classList.add("show");
      document.querySelector(".navbar-collapse").classList.add("darkColor");
      document.querySelector(".main-navigation").classList.add("main-navigation-home-call");
      // document.querySelector(".main-navigation-bg").classList.add("main-navigation-bg-position-primary");
      document.querySelector(".navbar-collapse").classList.add("navbar-collapse-position-primary");
      document.querySelector(".navbar-bg-switch").classList.add("main-navigation-bg");
      scrollBtn.classList.add("show");
      navbarTogglerIcon.style.color = "black";
      navbarLinks.forEach(function (link) {
        link.style.setProperty("color", "black", "important");
      });
      document.querySelector(".logo .logo-light").style.setProperty("filter", "brightness(0%)", "important");
      document.querySelector(".logo .logo-dark").style.setProperty("filter", "brightness(0%)", "important");
    } else {
      document.querySelector(".navbar-bg-switch").classList.remove("navbar-bg-switch-color");
      document.querySelector(".navbar-collapse").classList.remove("show");
      document.querySelector(".navbar-collapse").classList.remove("darkColor");
      document.querySelector(".main-navigation").classList.remove("main-navigation-home-call");
      // document.querySelector(".main-navigation-bg").classList.remove("main-navigation-bg-position-primary");
      document.querySelector(".navbar-collapse").classList.remove("navbar-collapse-position-primary");
      document.querySelector(".navbar-bg-switch").classList.remove("main-navigation-bg");
      scrollBtn.classList.remove("show");
      navbarTogglerIcon.style.color = "white";
      navbarLinks.forEach(function (link) {
        link.style.setProperty("color", "#FFF", "important");
      });
      document.querySelector(".logo .logo-light").style.setProperty("filter", "brightness(100%)", "important");
      document.querySelector(".logo .logo-dark").style.setProperty("filter", "brightness(100%)", "important");

      if (typeof(top_header_bg) == 'undefined' || top_header_bg == null) {
        navbarLinks.forEach(function (link) {
          link.style.setProperty("color", "black", "important");
        });
        document.querySelector(".logo .logo-light").style.setProperty("filter", "brightness(0%)", "important");
        document.querySelector(".logo .logo-dark").style.setProperty("filter", "brightness(0%)", "important");
      }
    }
  });

  //8.1 Dropdown Toggle on the Navbar
  // Get all dropdown toggle elements
  var dropdownToggleElements = document.querySelectorAll('.dropdown-toggle');

  // Add click event listener to each dropdown toggle element
  dropdownToggleElements.forEach(function (toggleElement) {
    toggleElement.addEventListener('click', function (e) {
      e.preventDefault();
      var dropdownMenu = toggleElement.nextElementSibling;

      // Toggle the 'show' class on the dropdown menu
      dropdownMenu.classList.toggle('show');
    });
  });

  // Close dropdown menus when clicking outside
  window.addEventListener('click', function (e) {
    dropdownToggleElements.forEach(function (toggleElement) {
      var dropdownMenu = toggleElement.nextElementSibling;
      if (!toggleElement.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.remove('show');
      }
    });
  });
  var launcher = document.querySelector('.blog-side-launcher');
  var blogSide = document.querySelector('.blog-side.panel-from-left-blog');
  var overlay = document.querySelector('.blog-side.panel-overlay-from-right-blog.blog-side-launch');

  // Check if launcher element exists
  if (launcher) {
    // Add event listener for the launcher
    launcher.addEventListener('click', function () {
      // Add the "open" class to the blog-side element
      blogSide.classList.add('open');
      overlay.classList.add('open');
    });
  }

  // Check if overlay element exists
  if (overlay) {
    // Add event listener for the overlay
    overlay.addEventListener('click', function () {
      // Remove the "open" class from the blog-side element
      blogSide.classList.remove('open');
      overlay.classList.remove('open');
    });
  }

  /*
    window.addEventListener("scroll", function () {
      const btnVisibility = () => {
        if (window.scrollY > 400) {
          scrollBtn.style.visibility = "visible";
        } else {
          scrollBtn.style.visibility = "hidden";
        }
      };
  
      if (window.scrollY > 50) {
        document.querySelector(".navbar-bg-switch").classList.add("navbar-bg-switch-color");
        // document.querySelector(".main-navigation-bg").classList.add("main-navigation-bg-position-primary");
        document.querySelector(".navbar-collapse").classList.add("navbar-collapse-position-primary");
        document.querySelector(".main-navigation").classList.add("main-navigation-home-call");
        document.querySelector(".navbar-bg-switch").classList.add("main-navigation-bg");
        document.querySelector(".to-top-arrow").classList.add("show");
      } else {
        document.querySelector(".navbar-bg-switch").classList.remove("navbar-bg-switch-color");
        // document.querySelector(".main-navigation-bg").classList.remove("main-navigation-bg-position-primary");
        document.querySelector(".navbar-collapse").classList.remove("navbar-collapse-position-primary");
        document.querySelector(".main-navigation").classList.remove("main-navigation-home-call");
        document.querySelector(".navbar-bg-switch").classList.remove("main-navigation-bg");
        document.querySelector(".to-top-arrow").classList.remove("show");
      }
    });
    */
  /*
  const swiper = new Swiper('.swiper', {
    direction: 'vertical',
    loop: true,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
  */
  var swiper = new Swiper('.swiper', {
    preloadImages: false,
    /*autoplay: {
        delay: 4000,
        disableOnInteraction: false
    },*/
    direction: 'horizontal',
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
      el: ".swiper-pagination",
      clickable: true
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    centeredSlides: true,
    slidesPerView: 2,
    spaceBetween: 0,
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      480: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 0
      }
    }
  });

  // var homecarousel = new Swiper(
  //   ".swiper-container-wrapper .swiper-container.swiper2",
  //   {
  //     preloadImages: false,
  //     autoplay: {
  //       delay: 4000,
  //       disableOnInteraction: false,
  //     },
  //     init: true,
  //     loop: true,
  //     speed: 1200,
  //     grabCursor: true,
  //     mousewheel: false,
  //     keyboard: true,
  //     simulateTouch: true,
  //     parallax: true,
  //     effect: "slide",
  //     pagination: {
  //       el: ".swiper-slide-pagination",
  //       clickable: true,
  //     },
  //     navigation: {
  //       nextEl: ".slide-next",
  //       prevEl: ".slide-prev",
  //     },
  //     centeredSlides: true,
  //     slidesPerView: 2,
  //     spaceBetween: 0,
  //     breakpoints: {
  //       320: {
  //         slidesPerView: 1,
  //         spaceBetween: 0,
  //       },
  //       480: {
  //         slidesPerView: 1,
  //         spaceBetween: 0,
  //       },
  //       640: {
  //         slidesPerView: 1,
  //         spaceBetween: 0,
  //       },
  //     },
  //   }
  // );
});

var counters = document.querySelectorAll('.project-stats');
var speed = 2000;

// TODO: figure out why the counters don't work on the project page
counters.forEach(function (counter) {
  var animate = function animate() {
    var value = +counter.getAttribute('stat').match(/\d+/)[0];
    var str = counter.getAttribute('stat');
    var data = +counter.innerText;
    var time = value / speed;
    if (data < value) {
      counter.innerText = str.replace(value, Math.ceil(data + time));
      setTimeout(animate, 1);
    } else {
      counter.innerText = str;
    }
  };
  animate();
});

// Userback for collecting feedback from Darrell
window.Userback = window.Userback || {};
Userback.access_token = '5733|81019|cs1q39yGu89gRxDltshpGDuM1JjezK4cepuL5RSEM57d2RMSu1';
(function (d) {
  var s = d.createElement('script');
  s.async = true;
  s.src = 'https://static.userback.io/widget/v1.js';
  (d.head || d.body).appendChild(s);
})(document);

/***/ }),

/***/ "./source/_assets/scss/main.scss":
/*!***************************************!*\
  !*** ./source/_assets/scss/main.scss ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			id: moduleId,
/******/ 			loaded: false,
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/amd options */
/******/ 	(() => {
/******/ 		__webpack_require__.amdO = {};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/harmony module decorator */
/******/ 	(() => {
/******/ 		__webpack_require__.hmd = (module) => {
/******/ 			module = Object.create(module);
/******/ 			if (!module.children) module.children = [];
/******/ 			Object.defineProperty(module, 'exports', {
/******/ 				enumerable: true,
/******/ 				set: () => {
/******/ 					throw new Error('ES Modules may not assign module.exports or exports.*, Use ESM export syntax, instead: ' + module.id);
/******/ 				}
/******/ 			});
/******/ 			return module;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/scripts": 0,
/******/ 			"css/main": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/main"], () => (__webpack_require__("./source/_assets/js/main.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/main"], () => (__webpack_require__("./source/_assets/scss/main.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;