      $(document).ready(function(){
        $('.fabrand-slider').slick({
            slidesToShow: 2,
            slidesToScroll: 2,
            autoplay: false,
            autoplaySpeed: 2000,
            arrows: true,
            dots: false,
            draggable:false,
            prevArrow:
            "<button type='button' class='slick-prev slick-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
            nextArrow:
            "<button type='button' class='slick-next slick-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
        });
      });
