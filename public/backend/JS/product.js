$(document).ready(function(){
    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 2000,
        dots: true,
        arrows: true,
        prevArrow:
              "<button type='button' class='slick-prev slick-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow:
              "<button type='button' class='slick-next slick-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    });
});


//Click, hover thumbnails

document.addEventListener("DOMContentLoaded", function() {
  const thumbnails = document.querySelectorAll('.thumbnail');
  const mainImg = document.getElementById('mainImg');

  thumbnails.forEach(function(thumbnail) {
    thumbnail.addEventListener('click', function() {
      const imgSrc = this.getAttribute('src');
      mainImg.setAttribute('src', imgSrc);

      // Gỡ 'selected' class từ tất cả các thumbnail
      thumbnails.forEach(function(thumbnail) {
        thumbnail.classList.remove('selected');
      });

      // Thêm 'selected' class đến các thumbnail được click
      this.classList.add('selected');
    });
    thumbnail.addEventListener('mouseover', function() {
      const imgSrc = this.getAttribute('src');
      mainImg.setAttribute('src', imgSrc);
    });

    thumbnail.addEventListener('mouseout', function() {
      const selectedThumbnail = document.querySelector('.thumbnail.selected');
      if (selectedThumbnail) {
        const imgSrc = selectedThumbnail.getAttribute('src');
        mainImg.setAttribute('src', imgSrc);
      } else {
        mainImg.setAttribute('src', ""); // or you can set it to the default image
      }
    });
  });
});

//Làm mờ description dài quá

function toggleGradient() {
    var additionalContent = document.getElementById('additional-content');
    additionalContent.classList.toggle('hidden');

    var gradient = document.querySelector('.gradient');
    gradient.classList.toggle('hidden');

    var btnMore = document.querySelector('.btn-more');
    if (additionalContent.classList.contains('hidden')) {
        btnMore.textContent = 'Xem thêm';
    } else {
        btnMore.textContent = 'Thu gọn';
    }
}

// Giảm/Tăng số lượng -> Giảm/Tăng giá tiền

    document.addEventListener("DOMContentLoaded", function() {
        const inputQuantity = document.querySelector('.input-quantity');
        const priceProduct = document.querySelector('.price-product');


        function updateTotalPrice() {
            const priceString = priceProduct.getAttribute('data-price');
            const price = parseFloat(priceString.replace(/\./g, '').replace(',', '.'));
            const quantity = parseInt(inputQuantity.value);
            const totalPrice = price * quantity;
            if (!isNaN(totalPrice)) {
                priceProduct.textContent = totalPrice.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
            } else {
                priceProduct.textContent = "0 ₫"; // Hoặc bạn có thể đặt giá trị mặc định khác ở đây
            }
        }

        inputQuantity.addEventListener('input', updateTotalPrice);

        const decreaseBtn = document.querySelector('.decrease-btn');
        const increaseBtn = document.querySelector('.increase-btn');

        function updateButtonState() {
            if (inputQuantity.value <= 1) {
                decreaseBtn.classList.add('disable');
            } else {
                decreaseBtn.classList.remove('disable');
            }
        }

        decreaseBtn.addEventListener('click', function() {
            if (inputQuantity.value > 1) {
                inputQuantity.value = parseInt(inputQuantity.value) - 1;
                updateTotalPrice();
            }
            updateButtonState();
        });

        increaseBtn.addEventListener('click', function() {
            inputQuantity.value = parseInt(inputQuantity.value) + 1;
            updateTotalPrice();
            updateButtonState();
        });
        updateButtonState();
    });
