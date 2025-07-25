(function ($) {
  "use strict";
  $(document).ready(function () {
    // mobile menu copy append
    $(".nav-links").clone().appendTo(".cstm-mobile-menu-nav");

    // mobile nav toggler
    $(
      ".nav-toggler, .hamburger , .cstm-mobile-menu .close-btn, .cstm-mobile-overlay"
    ).on("click", function () {
      $(".cstm-mobile-menu").toggleClass("active");
    });

    // Bobile submenu toggler
    $(".cstm-mobile-menu-nav .dwn-arrow").on("click", function (e) {
      e.preventDefault(); // Prevent unwanted link behavior

      let submenu = $(this).siblings(".sub-menu"); // Get the specific submenu

      if (submenu.hasClass("active")) {
        submenu.removeClass("active").slideUp(300); // Close if already open
      } else {
        $(this)
          .closest(".has-sub-menu")
          .find("> .sub-menu")
          .removeClass("active")
          .slideUp(300); // Close sibling submenus
        submenu.addClass("active").slideDown(300); // Open clicked submenu
      }
    });

    // navbar scticky and scroll top btn
    $(window).scroll(function () {
      var sticky = $("nav.navbar"),
        scroll = $(window).scrollTop();

      if (scroll >= 500) {
        sticky.addClass("sticky-nav");
        $(".scrolltop").addClass("active");
      } else {
        sticky.removeClass("sticky-nav");
        $(".scrolltop").removeClass("active");
      }
    });

    //   scroll top btn
    $(".scrolltop").click(function () {
      $("html, body").animate({ scrollTop: 0 }, "slow");
      return false;
    });

    /*---------------------
    WOW active js 
    --------------------- */
    new WOW().init();

    // counterUp
    // if ($(".counter").length > 0) {
    //   $(".counter").each(function () {
    //     let $this = $(this);

    //     if (!$this.hasClass("counter-initialized")) {
    //       $this.addClass("counter-initialized");

    //       // Wrap in a setTimeout to ensure proper execution
    //       setTimeout(function () {
    //         $this.counterUp({
    //           delay: 10,
    //           time: 1000,
    //         });
    //       }, 100);
    //     }
    //   });
    // }
    
        // odometer counter

    $(".odometer").each(function () {
      $(this).isInViewport(function (status) {
        if (status === "entered") {
          for (
            var i = 0;
            i < document.querySelectorAll(".odometer").length;
            i++
          ) {
            var el = document.querySelectorAll(".odometer")[i];
            el.innerHTML = el.getAttribute("data-odometer-final");
          }
        }
      });
    });


    // Fancybox Config
    $('[data-fancybox="gallery"]').fancybox({
      buttons: ["slideShow", "thumbs", "zoom", "fullScreen", "share", "close"],
      loop: false,
      protect: true,
    });

    // swiper slider services
    var home_banner = new Swiper(".home_banner", {
      loop: true,
      speed: 1000,
      effect: "fade",
      slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: 14,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        pauseOnMouseEnter: false,
      },
    });

    // swiper slider services
    var service = new Swiper(".product_slider", {
      loop: true,
      speed: 1000,
      slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: 24,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        pauseOnMouseEnter: false,
      },
      breakpoints: {
        625: {
          slidesPerView: 2,
        },
        1000: {
          slidesPerView: 3,
        },
        1200: {
          slidesPerView: 4,
        },
      },
    });

    // swiper slider brands__slider
    var produc_gallery = new Swiper(".produc_gallery", {
      effect: "coverflow",
      loop: true,
      grabCursor: true,
      centeredSlides: true,
      speed: 1000,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 60,
        modifier: 4,
        slideShadows: true,
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        pauseOnMouseEnter: false,
      },
      breakpoints: {
        225: {
          slidesPerView: 1,
        },
        625: {
          slidesPerView: 3,
        },
        868: {
          slidesPerView: 3,
        },
        1200: {
          slidesPerView: 3,
        },
      },
    });

    // swiper slider brands__slider
    var partner = new Swiper(".brands__slider", {
      loop: true,
      speed: 1000,
      slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: 24,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        pauseOnMouseEnter: false,
      },
      breakpoints: {
        225: {
          slidesPerView: 2,
        },
        625: {
          slidesPerView: 3,
        },
        868: {
          slidesPerView: 4,
        },
        1200: {
          slidesPerView: 6,
        },
      },
    });

    // auto typing
    if ($(".auto-type").length > 0) {
      // Check if element exists
      var typed = new Typed(".auto-type", {
        strings: ["On Google's First Page", "and lead over the world"],
        typeSpeed: 60,
        backSpeed: 80,
        loop: true,
      });
    }
  });
})(jQuery);
