// Hàm cập nhật giá subtotal
document.addEventListener("DOMContentLoaded", function() {

    const productContainers = document.querySelectorAll('.seller-product');

    function updateTotalPrice(inputQuantity, priceProduct) {
        const priceString = priceProduct.getAttribute('data-price');
        const price = parseFloat(priceString.replace(/\./g, '').replace(',', '.'));
        const quantity = parseInt(inputQuantity.value);
        const totalPrice = price * quantity;
        if (!isNaN(totalPrice)) {
            priceProduct.textContent = totalPrice.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
        } else {
            priceProduct.textContent = "0 ₫";
        }
    }

    productContainers.forEach(function(container) {
        const inputQuantity = container.querySelector('.qty-input');
        const priceProduct = container.querySelector('.item-subtotal');

        inputQuantity.addEventListener('input', function() {
            updateTotalPrice(inputQuantity, priceProduct);
        });

        const decreaseBtn = container.querySelector('.qty-decrease');
        const increaseBtn = container.querySelector('.qty-increase');

        decreaseBtn.addEventListener('click', function() {
            if (inputQuantity.value > 1) {
                inputQuantity.value = parseInt(inputQuantity.value) - 1;
                updateTotalPrice(inputQuantity, priceProduct);
            }
        });

        increaseBtn.addEventListener('click', function() {
            inputQuantity.value = parseInt(inputQuantity.value) + 1;
            updateTotalPrice(inputQuantity, priceProduct);
        });
    });
});

// NÚT XÁC NHẬN XÓA
function showDeleteConfirm() {
    document.getElementById("confirmOverlay").style.display = "block";
}

function showDeleteAllConfirm() {
    document.getElementById("confirmAllOverlay").style.display = "block";
}

function cancelDelete() {
    document.getElementById("confirmOverlay").style.display = "none";
}

function cancelDeleteAll() {
    document.getElementById("confirmAllOverlay").style.display = "none";
}

// CHỌN TẤT CẢ
    // Xử lý checkbox "Tất cả sản phẩm"
    document.getElementById('select-all-products').addEventListener('click', function() {
        var checkboxes = document.querySelectorAll('.checkbox');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = document.getElementById('select-all-products').checked;
        });
    });

    // Xử lý checkbox từng người bán

    document.getElementById('select-seller-products').addEventListener('click', function() {
        var checkboxes = document.querySelectorAll('.seller-intended .checkbox');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = document.getElementById('select-seller-products').checked;
        });
    });


// AJAX ĐỂ GỬI REQUEST KHI NGƯỜI DÙNG CHECK SẢN PHẨM

    $(document).ready(function() {
        $('.checkbox').change(function() {
            var cartItemId = $(this).data('cart-item-id');
            var isChecked = $(this).prop('checked');

            $.ajax({
                 headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'PUT',
                url: '/public/carts/' + cartItemId + '/check',
                data: { checked: isChecked },
                success: function(response) {
                    // Nếu cập nhật thành công, cập nhật giá tiền
                    if (response.success) {
                        updateTotalPriceChecked();
                    }
                },
                error: function(xhr, status, error) {
                    // Xử lý lỗi nếu có
                }
            });
        });

        function updateTotalPriceChecked() {
            $.ajax({
              type: 'GET',
                        url: '/public/carts//total-price',
                        success: function(response) {
                            var totalPriceFormatted = response.totalPrice;
                            $('.price-value').text(totalPriceFormatted); // Cập nhật giá tiền ở cả hai vị trí
                            $('.price-values-final').text(totalPriceFormatted);
                        },
                        error: function(xhr, status, error) {
                            console.error(error); // Xử lý lỗi nếu có
                        }
                    });
        }

        //SỐ LƯỢNG SẢN PHẨM ĐƯỢC CHECKED

        function updateCheckedProductsCount() {
            var checkedProductsCount = $('.checkbox:checked').length;
            $('#checkedProductsCount').text(checkedProductsCount > 0 ? '(' + checkedProductsCount + ')' : '');
        }

        $(document).ready(function() {
            // Cập nhật số lượng sản phẩm được check khi trang được tải
            updateCheckedProductsCount();

            $('.checkbox').change(function() {
                // Cập nhật số lượng sản phẩm được check khi có sự thay đổi trong checkbox
                updateCheckedProductsCount();
        });
    });

    })





