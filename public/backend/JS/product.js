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
