@include('frontend.component.header')

<header>
    <div class="header-styled">
        <div class="header-container">
            <div class="logo">
                <a href="">
                    <img src="../../../public/upload/logo/logo.png" alt="" width="180" height="40">
                </a>
                <span class="divider"></span>
                <div class="title-checkout">Thanh toán</div>
            </div>
            <div class="hotline">
                <a href="tel:1900-7080">
                    <span class="phone-icon">
                        <i class="fa-solid fa-phone"></i>
                    </span>
                    <div style="display: flex; flex-direction:column">
                        <span class="tel-nb">1900-7080</span>
                        <span style="color:#9799A1 ;font-size:14px; font-weight:600">8h-21h,cả T7 & CN</span>
                    </div>

                </a>
            </div>
        </div>
    </div>
</header>

<main style="background:#F5F5FA; padding:0">
    <div class="container-styled">
        <div class="left">
            <div class="shipping-plan-styled">
                <h3 class="shipping-payment-title" style="margin-bottom: 16px">Chọn hình thức giao hàng</h3>
                <div class="method-list">
                    <div class="shipping-method-list">
                        <label for="">
                            <input type="radio" readonly name="shipping-method">
                            <span class="label">
                                <div class="delivery-method" style="padding: 2px 0px">
                                    <span class="method-text">Giao tiết kiệm</span>
                                    <span class="freeship-badge">-10k</span>
                                </div>
                            </span>
                        </label>
                    </div>
                    <img class="methods-arrow" src="../../../public/upload/img/checkout/arrowbox.png" width="32"
                        alt="">
                </div>
                <div class="shipment">
                    <div class="shipping-package">
                        <div class="package-leadtime">
                            <div class="package-title">
                                <img src="../../../public/upload/img/checkout/packet.png" alt="" width="24"
                                    height="24">
                                Gói: Giao ngày mai, trước 19h, 23/04
                            </div>
                        </div>
                        <div class="left-content">
                            <div class="packet-summary">
                                <div class="delivery-method">
                                    <span style="font-size: 12px; line-height: 16px;">GIAO TIẾT KIỆM</span>
                                </div>
                                <div class="shipping-fee">
                                    <span class="original-fee">22.000 ₫</span>
                                    <div class="current-fee">12.000 ₫</div>
                                    <i class="fa-solid fa-circle-info"></i>
                                </div>
                            </div>
                            @foreach ($selectedProducts as $item)
                                <div class="packet-item-list">
                                    <div>
                                        <div class="packet-item-styled">
                                            <div class="item-icon">
                                                <img width="64" height="64" src="{{ asset($item->image) }}"
                                                    alt="">
                                            </div>
                                            <div class="item-info">
                                                <div class="item-info_first-line">
                                                    <span class="item-info_product-name">
                                                        {{ $item->product_name }}
                                                    </span>
                                                </div>
                                                <div class="item-info_second-line">
                                                    <div class="item-info_qty">SL: x{{ $item->quantity }}</div>
                                                    <div class="item-info_price">
                                                        {{ number_format($item->price, 0, ',', '.') }}
                                                        <sup>₫</sup>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="right-content">
                            <div class="fulfilment-styled">
                                <i class="fa-solid fa-truck-fast"></i>
                                <p class="fulfillment-text">
                                    Được giao bởi BWFastest Smart Logistics (giao từ Hà Nội)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="seller-coupon">
                    <div class="seller-group-heading">
                        <div class="seller-heading-title">Shop khuyến mãi</div>
                        <div class="seller-heading-hint">
                            <span>Nhập hoặc chọn mã</span>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </div>
            <div class="payment-method-styled">
                <h3 class="shipping-payment-title" style="margin-bottom: 16px">Chọn hình thức giao hàng</h3>
                <div class="method-list">
                    <div>
                        <label for="" class="radio-btn-styled">
                            <input type="radio" readonly name="shipping-method">
                            <span class="label" style="display: flex; align-items: center; height: 100%;">
                                <div class="method-styled" style="padding: 2px 0px">
                                    <img class="method-icon" width="32" height="32"
                                        src="../../../public/upload/img/checkout/cash.png" alt="">
                                </div>
                                <div class="method-content">
                                    <div class="method-content-title">
                                        Thanh toán tiền mặt khi nhận hàng
                                    </div>
                                </div>
                            </span>
                        </label>
                    </div>
                    <div>
                        <label for="" class="radio-btn-styled">
                            <input type="radio" readonly name="shipping-method">
                            <span class="label" style="display: flex; align-items: center; height: 100%;">
                                <div class="method-styled" style="padding: 2px 0px">
                                    <img class="method-icon" width="32" height="32"
                                        src="../../../public/upload/img/checkout/vtmn.png" alt="">
                                </div>
                                <div class="method-content">
                                    <div class="method-content-title">
                                        Thanh toán bằng ví Viettel Money
                                    </div>
                                </div>
                            </span>
                        </label>
                    </div>
                    <div>
                        <label for="" class="radio-btn-styled">
                            <input type="radio" readonly name="shipping-method">
                            <span class="label" style="display: flex; align-items: center; height: 100%;">
                                <div class="method-styled" style="padding: 2px 0px">
                                    <img class="method-icon" width="32" height="32"
                                        src="../../../public/upload/img/checkout/momo.jpg" alt="">
                                </div>
                                <div class="method-content">
                                    <div class="method-content-title">
                                        Thanh toán bằng ví MoMo
                                    </div>
                                </div>
                            </span>
                        </label>
                    </div>
                    <div>
                        <label for="" class="radio-btn-styled">
                            <input type="radio" readonly name="shipping-method">
                            <span class="label" style="display: flex; align-items: center; height: 100%;">
                                <div class="method-styled" style="padding: 2px 0px">
                                    <img class="method-icon" width="32" height="32"
                                        src="../../../public/upload/img/checkout/zalo.png" alt="">
                                </div>
                                <div class="method-content">
                                    <div class="method-content-title">
                                        Thanh toán bằng ví ZaloPay
                                    </div>
                                </div>
                            </span>
                        </label>
                    </div>
                    <div>
                        <label for="" class="radio-btn-styled">
                            <input type="radio" readonly name="shipping-method">
                            <span class="label" style="display: flex; align-items: center; height: 100%;">
                                <div class="method-styled" style="padding: 2px 0px">
                                    <img class="method-icon" width="32" height="32"
                                        src="../../../public/upload/img/checkout/vnpay.png" alt="">
                                </div>
                                <div class="method-content">
                                    <div class="method-content-title">
                                        Thanh toán bằng VNPAY
                                    </div>
                                    <div class="method-content-subtitle">
                                        Quét Mã QR từ ứng dụng ngân hàng
                                    </div>
                                </div>
                            </span>
                        </label>
                    </div>
                    <div>
                        <label for="" class="radio-btn-styled">
                            <input type="radio" readonly name="shipping-method">
                            <span class="label" style="display: flex; align-items: center; height: 100%;">
                                <div class="method-styled" style="padding: 2px 0px">
                                    <img class="method-icon" width="32" height="32"
                                        src="../../../public/upload/img/checkout/visa.png" alt="">
                                </div>
                                <div class="method-content">
                                    <div class="method-content-title">
                                        Thanh toán bằng thẻ quốc tế Visa, Master, JCB
                                    </div>
                                    <div class="method-content-subtitle">
                                        <img width="auto" height="24"
                                            src="../../../public/upload/img/checkout/visamethod.png" alt="">
                                    </div>
                                </div>
                            </span>
                        </label>
                        <div class="sublist-method">
                            <div class="addnewbtn">
                                <img width="24" height="24" src="../../../public/upload/img/checkout/add.png"
                                    alt="">
                                <span>Thêm thẻ mới</span>
                            </div>
                            <div class="banner-list"></div>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>

        <div class="right">
            <div class="right-inner">
                <div class="address-block block-styled" style="width:380px">
                    <div class="block-header">
                        <h3 class="block-header-title">Giao tới</h3>
                        <a href="" class="block-header-nav">Thay đổi</a>
                    </div>
                    <div class="customer-info">
                        <p class="customer-info-name">{{ Auth::user()->name }}</p>
                        <i></i>
                        <p class="customer-info-phone">{{ Auth::user()->phone }}</p>
                    </div>
                    <div class="address-styled ">
                        <span class="address-type-home">Nhà</span>
                        {{ Auth::user()->address }}
                    </div>
                </div>
                <div class="coupon-block block-styled" style="width:380px">
                    <div class="block-header">
                        <div class="block-header-tilte">
                            BookWorld Khuyến Mãi
                        </div>
                        <div class="block-header-usage">
                            <span>Có thể chọn 2</span>
                            <i class="fa-solid fa-circle-info"></i>
                        </div>
                    </div>
                    <div class="show-more">
                        <i class="fa-solid fa-ticket"></i>
                        <span>Chọn hoặc nhập Khuyến mãi khác</span>
                    </div>
                </div>
                <div class="invoice-block block-styled" style="width:380px">
                    <label for="" class="checkbox-styled">
                        <input type="checkbox" class="checkbox">

                        <span class="label">
                            <div class="label-styled">
                                <div class="invoice-title">Yêu cầu hoá đơn</div>
                                <div class="invoice-note">BW Trading chỉ xuất hoá đơn điện tử</div>
                            </div>
                        </span>
                    </label>
                </div>
                <div class="order-summary">
                    <div class="block-order">
                        <div class="flex-row-styled" style="margin-bottom: 4px;">
                            <h3 class="block-order-title">Đơn hàng</h3>
                            <a href="" class="block-order-nav"> Thay đổi</a>
                        </div>
                        <div class="block-order-subtitle">
                            <div class="subtitle-text">sản phẩm.</div>
                            <div class="subtitle-link">Xem thông tin
                                <i class="fa-solid fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="price-summary">
                        <ul class="price-items">
                            <li class="price-item">
                                <span class="price-text">Tạm tính</span>
                                <span class="price-value">
                                    {{ number_format($totalPrice, 0, ',', '.') }}<sup>₫</sup>
                                </span>
                            </li>
                            <li class="price-item">
                                <span class="price-text">Phí vận chuyển</span>
                                <span
                                    class="price-value">{{ number_format($shippingFee, 0, ',', '.') }}<sup>₫</sup></span>
                            </li>
                        </ul>
                        <div class="price-total">
                            <div class="price-text">Tổng tiền</div>
                            <div class="price-content">
                                <div class="price-values-final ">
                                    <span class="price-values-empty" style="font-size: 20px; font-weight:500">
                                        {{ number_format($totalPrice + $shippingFee, 0, ',', '.') }}
                                        <sup>₫</sup>
                                    </span>
                                </div>
                                <div class="price-values-noted" style="width: 266px; height:54px; text-align:right;">
                                    (Giá này đã bao gồm
                                    thuế GTGT, phí đóng gói, phí vận
                                    chuyển và các chi phí phát sinh khác)</div>
                            </div>
                        </div>
                        <form action="{{ route('place.order') }}" method="POST">
                            @csrf
                            <button type="submit" class="buy-now-btn" style="margin: 15px 0px 0px; width:380px">
                                Đặt Hàng
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@include('frontend.component.footer')
