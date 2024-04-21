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
                <h3 style="margin-bottom: 16px">Chọn hình thức giao hàng</h3>
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
                <div class="shipment"></div>
                <div class="seller-coupon"></div>
            </div>
            <div class="payment-method-styled">

            </div>
        </div>
        <div class="right"></div>
    </div>
</main>


@include('frontend.component.footer')
