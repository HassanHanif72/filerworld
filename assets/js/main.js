// client Slick Slider

$('.client-slider').slick({
  dots: false,
  infinite: true,
  autoplay: true,
  arrows:false,
  autoplaySpeed: 0,
  speed: 7000,  
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        dots: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
      }
    }

  ]
});

// customers slider
$('.customers-slider').slick({
  centerMode: true,
  dots: false,
  arrows:false,
  infinite: true,
  centerPadding: '70px',
  autoplay: true,
  autoplaySpeed: 1000,
  speed: 7000,
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        dots: false,
        autoplay: true,
        centerMode: true,
        centerPadding: '10px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        dots: false,
        autoplay: true,
        centerPadding: '10px',
        slidesToShow: 1
      }
    }
  ]
});

// customers slider RTL
$('.customers-slider-rtl').slick({
  centerMode: true,
  infinite: true,
  dots: false,
  arrows:false,
  centerPadding: '70px',
  autoplay: true,
  autoplaySpeed: 1000,
  speed: 7000,
  slidesToShow: 3,
  rtl: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        dots: false,
        autoplay: true,
        centerMode: true,
        centerPadding: '10px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        dots: false,
        autoplay: true,
        centerPadding: '10px',
        slidesToShow: 1
      }
    }
  ]
});

// Get Quote Form validation

(function() {
  'use strict';
  var forms = document.querySelectorAll('.needs-validation');
  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function(form) {
    form.addEventListener('submit', function(event) {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }

      form.classList.add('was-validated');
    }, false);
  });
})();


// $(document).ready(function() {
//   $('.nav-item.dropdown').hover(
//     function() {
//       $(this).addClass('show');
//       $(this).find('.dropdown-menu').first().addClass('show');
//     },
//     function() {
//       $(this).removeClass('show');
//       $(this).find('.dropdown-menu').first().removeClass('show');
//     }
//   );
// });

$(document).ready(function () {
    // Toggle class on click for mobile
    $('.nav-item.dropdown').click(function () {
        if (window.innerWidth <= 767) {
            $(this).toggleClass('show');
            $(this).find('.dropdown-menu').first().toggleClass('show');
        }else if (window.innerWidth <= 1024) {
            $(this).toggleClass('show');
            $(this).find('.dropdown-menu').first().toggleClass('show');
        }
    });

    // Close the dropdown when clicking outside of it
    $(document).click(function (e) {
        if (!$(e.target).closest('.nav-item.dropdown').length) {
            $('.nav-item.dropdown').removeClass('show');
            $('.nav-item.dropdown .dropdown-menu').removeClass('show');
        }
    });
});

// scrool header fixed
const header = document.querySelector('.header');

function toggleFixedHeader() {
    if (window.scrollY > 100) { 
        header.classList.add('fixed-header');
    } else {
        header.classList.remove('fixed-header');
    }
}

window.addEventListener('scroll', toggleFixedHeader);
toggleFixedHeader();

// end 


