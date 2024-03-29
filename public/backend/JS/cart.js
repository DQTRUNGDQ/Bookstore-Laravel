// Hàm cập nhật giá subtotal
document.addEventListener("DOMContentLoaded", function() {

        const inputQuantity = document.querySelector('.qty-input');
        const priceProduct = document.querySelector('.item-subtotal');


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

        const decreaseBtn = document.querySelector('.qty-decrease');
        const increaseBtn = document.querySelector('.qty-increase');


        decreaseBtn.addEventListener('click', function() {
            if (inputQuantity.value > 1) {
                inputQuantity.value = parseInt(inputQuantity.value) - 1;
                updateTotalPrice();
            }
        });

        increaseBtn.addEventListener('click', function() {
            inputQuantity.value = parseInt(inputQuantity.value) + 1;
            updateTotalPrice();
        });
});
 

       

