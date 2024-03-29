//BANNER

      $(document).ready(function(){
        $('.banner-slider').slick({
            slidesToShow: 2,
            slidesToScroll: 2,
            autoplay: true,
            autoplaySpeed: 2000, 
            arrows: true,
            dots: true,
            draggable:false,
            prevArrow:
            "<button type='button' class='slick-prev slick-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
            nextArrow:
            "<button type='button' class='slick-next slick-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
        });
      });

      // DEAL TODAY

      $(document).ready(function(){
          $('.deal-slider').slick({
              slidesToShow: 6,
              slidesToScroll: 6,
              autoplay: false,
              autoplaySpeed: 2000, 
              arrows: true,
              draggable:true,
              infinite: false,
              prevArrow:
              "<button type='button' class='slick-prev-deal slick-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
              nextArrow:
              "<button type='button' class='slick-next-deal slick-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
          });
      });

      // CARE PRODUCT
      $(document).ready(function(){
          $('.care-slider').slick({
              slidesToShow: 6,
              slidesToScroll: 6,
              autoplay: false,
              autoplaySpeed: 2000, 
              arrows: true,
              draggable:true,
              //infinite: false,
              prevArrow:
              "<button type='button' class='slick-prev-deal slick-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
              nextArrow:
              "<button type='button' class='slick-next-deal slick-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
          });
      });

      // BRAND PRODUCT
      $(document).ready(function(){
          $('.brand-slider').slick({
              slidesToShow: 6,
              slidesToScroll: 2,
              autoplay: false,
              autoplaySpeed: 2000, 
              arrows: true,
              draggable:true,
              //infinite: false,
              prevArrow:
              "<button type='button' class='slick-prev-deal slick-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
              nextArrow:
              "<button type='button' class='slick-next-deal slick-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
          });
      });

      // QA
      $(document).ready(function(){
          $('.QA-slider').slick({
              slidesToShow: 6,
          });
      });

        //SET THỜI GIAN ĐẾM NGƯỢC CHO DEAL TODAY

        var countdownTime = sessionStorage.getItem('countdownTime') || 3900;

        function updateCountdown() {
          var hours = Math.floor(countdownTime / 3600);
          var minutes = Math.floor((countdownTime % 3600) /60);
          var seconds = countdownTime % 60;

          document.querySelector('.hour').textContent = formatTime(hours);
          document.querySelector('.min').textContent = formatTime(minutes);
          document.querySelector('.second').textContent = formatTime(seconds);

          if (countdownTime < 0) {
            document.querySelector('.header-left').style.display = 'none'
          } else {
            countdownTime--;
            sessionStorage.setItem('countdownTime', countdownTime);
            setTimeout(updateCountdown, 1000);
          }
        }

        function formatTime(time) {
          return time < 10 ? '0' + time : time;
        }

        // Set lại thời gian sau số thời gian mong muốn
        setTimeout(function() {
                countdownTime = 3900;
                // Lưu trữ giá trị countdownTime vào sessionStorage
                sessionStorage.setItem('countdownTime', countdownTime);
            }, 600000);

        updateCountdown();


        //CHUYỂN CÁC CATEGORY TRONG MỤC BEST PRODUCT

        $(document).ready(function() {
          // Hiển thị sản phẩm của chủ đề đầu tiên khi trang được tải
          showProductsByCategory(1);

          function showProductsByCategory(category) {
              // Ẩn tất cả sản phẩm
              $('.product-best').hide();

              // Hiển thị sản phẩm của chủ đề được chọn
              $('.product-best[data-category="' + category + '"]').show();

              // Loại bỏ lớp 'active' từ tất cả các chủ đề
              $('.style-cat').removeClass('active');

              // Thêm lớp 'active' cho chủ đề được chọn
              $('#categorie' + category).addClass('active');

              // BEST PRODUCT
              $('.best-slider').slick({
                  slidesToShow: 6,
                  slidesToScroll: 1,
                  autoplay: true,
                  autoplaySpeed: 1000, 
                  arrows: false,
                  draggable:true,
                  infinite: true,
              });
              
          }

          $('.style-cat').on('click', function() {
              var category = $(this).index() + 1; // Lấy index của phần tử được click
              showProductsByCategory(category);
          });
        });



        //CHUYỂN CÁC TAB TRONG MỤC SUGGESTION PRODUCT

        $(document).ready(function() {
          // Hiển thị sản phẩm của chủ đề đầu tiên khi trang được tải
          showProductsByTab(1);

          function showProductsByTab(tab) {
              // Ẩn tất cả sản phẩm
              $('.product-tab').hide();

              // Hiển thị sản phẩm của chủ đề được chọn
              $('.product-tab[data-tab="' + tab + '"]').show();

              // Loại bỏ lớp 'active' từ tất cả các chủ đề
              $('.style-tab').removeClass('active-tab');

              // Thêm lớp 'active' cho chủ đề được chọn
              $('#tab' + tab).addClass('active-tab');
              
          }

          $('.style-tab').on('click', function() {
              var tab = $(this).index() + 1; // Lấy index của phần tử được click
              showProductsByTab(tab);
          });
        });

        

