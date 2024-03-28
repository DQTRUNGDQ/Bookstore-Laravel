@include('frontend.component.header')

<header class="main-header">
        <div class="header-container">
            <div class="header-container-dt">
                <div class="logo-header">
                    <a href="{{ route('auth.homepage') }}">
                        <img src="{{asset('./upload/logo/logo.png')}}" alt="" width="180" height="40" />
                        <span>Uy tín 100%</span>
                    </a>
                </div>
                <div class="nav-header">
                    <div class="main-nav">
                        <div class="main-nav-detail">
                            <div class="main-nav-left">
                                <div class="form-nav-left">
                                    <i class="fa-solid fa-magnifying-glass"
                                        style="color: #696969; background-color: #fff"></i>
                                    <input type="text" placeholder="Tìm kiếm theo chủ đề, tác giả, thể loại" />
                                    <button class="search-btn">Tìm kiếm</button>
                                </div>
                            </div>

                            <div class="main-nav-right">
                                <div class="homepage-item">
                                    <i class="fa-solid fa-house"style="color:#808089"></i>
                                    <a href="{{ route('auth.homepage') }}" style="color:#808089">Trang chủ</a>
                                </div>
                                <div id="accountBtn" class="account-item">
                                    <i class="fa-regular fa-face-smile-wink"></i>
                                    <span href="">Tài khoản</span>
                                </div>
                                <div class="cart-item">
                                    <a href="#">
                                        <div class="border-cart">
                                            <div class="cart-wrapper">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                                <span>0</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sub-nav">
                        <div class="header-quick-links">
                            <a href="">thiếu nhi</a>
                            <a href="">trinh thám</a>
                            <a href="">tiểu thuyết văn học</a>
                            <a href="">tác phẩm đạt giải Nobel</a>
                            <a href="">phật học</a>
                            <a href="">phổ biến</a>
                            <a href="">bán chạy</a>
                        </div>
                        <div class="location-ship">
                            <div class="delivery-zone">
                                <i class="fa-solid fa-location-dot"></i>
                                <h4>Giao đến:</h4>
                                <div class="address">Bạn muốn giao tới đâu?</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>

<main>
    <div id="overlay" class="overlay">
                        <div id="loginModal" class="modal">
                            <button class="btn-close" onclick="closeModal()">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                            <div class="login-container">
                                <div class="login-with-email">
                                    <div class="heading">
                                        <h4>Đăng nhập bằng email</h4>
                                        <p>
                                            Nhập email và mật khẩu của tài khoản
                                            BookWorld
                                        </p>
                                    </div>
                                    <form
                                        method="post"
                                        action="{{ route('auth.login') }}"
                                    >
                                        @csrf
                                        <div class="input">
                                            <input
                                                type="text"
                                                name="email"
                                                id="email"
                                                placeholder="acb@email.com"
                                                value="{{ old('email') }}"
                                            />
                                        </div>
                                        <!-- Thông báo lỗi validate -->
                                        @if ($errors->has('email'))
                                        <span class="error-message">
                                            * {{ $errors->first('email') }}
                                        </span>
                                        @endif
                                        <div class="input">
                                            <input
                                                type="password"
                                                name="password"
                                                id="password"
                                                placeholder="Mật khẩu"
                                            />
                                            <span class="show-pass">Hiện</span>
                                        </div>
                                        <!-- Thông báo lỗi validate -->
                                        @if ($errors->has('password'))
                                        <span class="error-message">
                                            * {{ $errors->first('password') }}
                                        </span>
                                        @endif
                                        <button>Đăng nhập</button>
                                    </form>
                                    <p class="forgot-pass">Quên mật khẩu</p>
                                    <p class="create-account">
                                        Chưa có tài khoản?
                                        <span id="createAccountBtn"
                                            >Tạo tài khoản</span
                                        >
                                    </p>

                                    <div class="social-login">
                                        <div class="social-heading">
                                            <span>Hoặc tiếp tục bằng</span>
                                        </div>
                                        <ul class="social-items">
                                            <li class="social-item">
                                                <img
                                                    width="58px"
                                                    src="./upload/img/Login/fb.png"
                                                    alt=""
                                                />
                                            </li>
                                            <li class="social-item">
                                                <img
                                                    width="58px"
                                                    src="./upload/img/Login/gg.png"
                                                    alt=""
                                                />
                                            </li>
                                        </ul>
                                        <p class="note">
                                            Bằng việc tiếp tục, bạn đã đọc và
                                            đồng ý với
                                            <a href="">điều khoản sử dụng</a> và
                                            <a href=""
                                                >Chính sách bảo mật thông tin cá
                                                nhân</a
                                            >
                                            của BookWorld
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="login-right">
                                <img
                                    width="203"
                                    src="./upload/img/Login/loginright.png"
                                    alt=""
                                />
                                <div class="content-lgr">
                                    <h4>Mua sắm tại BookWorld</h4>
                                    <span>Siêu ưu đãi mỗi ngày</span>
                                </div>
                            </div>
                        </div>

                        <div
                            id="registerModal"
                            class="modal"
                            style="display: none"
                        >
                            <button class="btn-close" onclick="closeModal()">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                            <button class="btn-back" onclick="showLogin()">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <div class="register-container">
                                <div class="register">
                                    <div class="heading">
                                        <h4>Tạo tài khoản</h4>
                                        <p>Vui lòng nhập thông tin</p>
                                    </div>
                                    <form action="" method="post">
                                        <div class="input">
                                            <input
                                                type="fullname"
                                                name="fullname"
                                                placeholder="Họ tên"
                                                value
                                            />
                                        </div>
                                        <div class="input">
                                            <input
                                                type="email"
                                                name="email"
                                                placeholder="acb@email.com"
                                                value
                                            />
                                        </div>
                                        <div class="input">
                                            <input
                                                type="password"
                                                name="password"
                                                placeholder="Mật khẩu"
                                            />
                                        </div>
                                        <div class="input">
                                            <input
                                                type="password"
                                                name="password_confirm"
                                                placeholder="Nhập lại mật khẩu"
                                            />
                                        </div>
                                        <div class="input">
                                            <input
                                                type="tel"
                                                name="phone"
                                                placeholder="Số điện thoại"
                                                maxlength="10"
                                            />
                                        </div>
                                        <button type="submit">Đăng Ký</button>
                                    </form>
                                </div>
                            </div>
                            <div class="login-right-rg">
                                <img
                                    width="203"
                                    src="./upload/img/Login/loginright.png"
                                    alt=""
                                />
                                <div class="content-lgr">
                                    <h4>Mua sắm tại BookWorld</h4>
                                    <span>Siêu ưu đãi mỗi ngày</span>
                            </div>
                    </div>
                </div>
    </div>
    <div class="cart-container">
        <div class="cart-main-title">
            <h4>Giỏ Hàng</h4>
        </div>
        <div class="cart-content">
            <div class="cart-content-left">
                <div class="cart-content-heading cart-grid">
                    <label for="" class="checkbox-styled">
                        <input type="checkbox" class="checkbox">
                        <span class="label">Tất cả (36 sản phẩm)</span>
                    </label>
                    <span>Đơn giá</span>
                    <span>Số lượng</span>
                    <span>Thành tiền</span>
                    <i class="fa-regular fa-trash-can"></i>
                </div>

                <div>
                    <div class="infinite-scroll-component">
                        <div class="styled-seller">
                            <div class="seller-group">
                                <label for="" class="checkbox-styled">
                                    <input type="checkbox" class="checkbox">
                                    <img width="15" height="15" src="{{ asset('/upload/img/cart/shop.png') }}" alt="">
                                    <a class="seller-name" href="" target="_blank">
                                        BookWorld Trading
                                        <i width="6" height="10" class="fa-solid fa-angle-right"></i>
                                    </a>
                                </label>
                            </div>
                            <div class="seller-intended">
                                <div class="seller-product cart-grid">
                                    <div class="item-info">
                                        <label for="" class="checkbox-styled">
                                            <input type="checkbox" class="checkbox">
                                        </label>
                                        <a href="" target="_blank">
                                            <img width="80" height="80"
                                                src="{{ asset('/upload/img/productdetails/sanphamtuongtu/neubiettramnalahuuhan.jpg') }}"
                                                alt="">
                                        </a>
                                        <div class="info-styled">
                                            <img width="89" height="20" src="{{ asset('/upload/img/official.png') }}" alt="">
                                            <a href="http://" target="_blank" class="item-name-styled">
                                                Nếu Biết Trăm Năm Là Hữu Hạn
                                            </a>
                                            <div class="styled-delivery-title">
                                                <img width="32" height="16" src="./upload/img/delivery.png" alt=""></img>
                                                <span class="delivery-text">Giao ngày mai</span>
                                            </div>
                                            <p class="styled-book-care">
                                                Có thể bọc bằng Bookcare
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item-price">
                                        <div class="item-price-styled">
                                            239.350
                                            <sup>₫</sup>
                                        </div>
                                    </div>
                                    <div class="item-quantity">
                                        <span class="qty-decrease">
                                            <i class="fa-solid fa-minus"></i>
                                        </span>
                                        <input type="tel" class="qty-input" value="1">
                                        <span class="qty-increase">
                                            <i class="fa-solid fa-plus"></i>
                                        </span>
                                    </div>
                                    <div class="item-subtotal">
                                        239.350
                                        <sup>₫</sup>
                                    </div>
                                    <div class="item-action">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </div>
                                </div>

                                <div class="seller-product cart-grid">
                                    <div class="item-info">
                                        <label for="" class="checkbox-styled">
                                            <input type="checkbox" class="checkbox">
                                        </label>
                                        <a href="" target="_blank">
                                            <img width="80" height="80" src="./upload/img/cart/muonkiepnhansinh2.jpg"
                                                alt="">
                                        </a>
                                        <div class="info-styled">
                                            <img width="89" height="20" src="./upload/img/official.png" alt="">
                                            <a href="http://" target="_blank" class="item-name-styled">
                                                Muôn Kiếp Nhân Sinh 2 (Bìa Cứng)
                                            </a>
                                            <div class="styled-delivery-title">
                                                <img width="32" height="16" src="./upload/img/delivery.png" alt=""></img>
                                                <span class="delivery-text">Giao ngày mai</span>
                                            </div>
                                            <p class="styled-book-care">
                                                Có thể bọc bằng Bookcare
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item-price">
                                        <div class="item-price-styled">
                                            338.000
                                            <sup>₫</sup>
                                        </div>
                                    </div>
                                    <div class="item-quantity">
                                        <span class="qty-decrease">
                                            <i class="fa-solid fa-minus"></i>
                                        </span>
                                        <input type="tel" class="qty-input" value="1">
                                        <span class="qty-increase">
                                            <i class="fa-solid fa-plus"></i>
                                        </span>
                                    </div>
                                    <div class="item-subtotal">
                                        338.000
                                        <sup>₫</sup>
                                    </div>
                                    <div class="item-action">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </div>
                                </div>

                                <div class="seller-product cart-grid">
                                    <div class="item-info">
                                        <label for="" class="checkbox-styled">
                                            <input type="checkbox" class="checkbox">
                                        </label>
                                        <a href="" target="_blank">
                                            <img width="80" height="80"
                                                src="./upload/img/productdetails/sanphamtuongtu/buocchamlaigiuathegianvoiva.jpg"
                                                alt="">
                                        </a>
                                        <div class="info-styled">
                                            <img width="89" height="20" src="./upload/img/official.png" alt="">
                                            <a href="http://" target="_blank" class="item-name-styled">
                                                Bước Chậm Lại Giữa Thế Gian Vội Vã (Tái
                                                Bản)
                                            </a>
                                            <div class="styled-delivery-title">
                                                <img width="32" height="16" src="./upload/img/delivery.png" alt=""></img>
                                                <span class="delivery-text">Giao ngày mai</span>
                                            </div>
                                            <p class="styled-book-care">
                                                Có thể bọc bằng Bookcare
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item-price">
                                        <div class="item-price-styled">
                                            63.750
                                            <sup>₫</sup>
                                        </div>
                                    </div>
                                    <div class="item-quantity">
                                        <span class="qty-decrease">
                                            <i class="fa-solid fa-minus"></i>
                                        </span>
                                        <input type="tel" class="qty-input" value="1">
                                        <span class="qty-increase">
                                            <i class="fa-solid fa-plus"></i>
                                        </span>
                                    </div>
                                    <div class="item-subtotal">
                                        63.750
                                        <sup>₫</sup>
                                    </div>
                                    <div class="item-action">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </div>
                                </div>

                                <div class="seller-product cart-grid">
                                    <div class="item-info">
                                        <label for="" class="checkbox-styled">
                                            <input type="checkbox" class="checkbox">
                                        </label>
                                        <a href="" target="_blank">
                                            <img width="80" height="80"
                                                src="./upload/img/productdetails/sanphamtuongtu/damtreodaiduongden.png"
                                                alt="">
                                        </a>
                                        <div class="info-styled">
                                            <img width="89" height="20" src="./upload/img/official.png" alt="">
                                            <a href="http://" target="_blank" class="item-name-styled">
                                                Đám Trẻ Ở Đại Dương Đen
                                            </a>
                                            <div class="styled-delivery-title">
                                                <img width="32" height="16" src="./upload/img/delivery.png" alt=""></img>
                                                <span class="delivery-text">Giao ngày mai</span>
                                            </div>
                                            <p class="styled-book-care">
                                                Có thể bọc bằng Bookcare
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item-price">
                                        <div class="item-price-styled">
                                            60.600
                                            <sup>₫</sup>
                                        </div>
                                    </div>
                                    <div class="item-quantity">
                                        <span class="qty-decrease">
                                            <i class="fa-solid fa-minus"></i>
                                        </span>
                                        <input type="tel" class="qty-input" value="1">
                                        <span class="qty-increase">
                                            <i class="fa-solid fa-plus"></i>
                                        </span>
                                    </div>
                                    <div class="item-subtotal">
                                        60.600
                                        <sup>₫</sup>
                                    </div>
                                    <div class="item-action">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </div>
                                </div>

                                <div class="seller-product cart-grid">
                                    <div class="item-info">
                                        <label for="" class="checkbox-styled">
                                            <input type="checkbox" class="checkbox">
                                        </label>
                                        <a href="" target="_blank">
                                            <img width="80" height="80"
                                                src="upload/img/productdetails/sanphamtuongtu/yeunhungdieukhonghoanhao.jpg"
                                                alt="">
                                        </a>
                                        <div class="info-styled">
                                            <img width="89" height="20" src="./upload/img/official.png" alt="">
                                            <a href="http://" target="_blank" class="item-name-styled">
                                                Yêu Những Điều Không Hoàn Hảo
                                            </a>
                                            <div class="styled-delivery-title">
                                                <img width="32" height="16" src="./upload/img/delivery.png" alt=""></img>
                                                <span class="delivery-text">Giao ngày mai</span>
                                            </div>
                                            <p class="styled-book-care">
                                                Có thể bọc bằng Bookcare
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item-price">
                                        <div class="item-price-styled">
                                            107.000
                                            <sup>₫</sup>
                                        </div>
                                    </div>
                                    <div class="item-quantity">
                                        <span class="qty-decrease">
                                            <i class="fa-solid fa-minus"></i>
                                        </span>
                                        <input type="tel" class="qty-input" value="1">
                                        <span class="qty-increase">
                                            <i class="fa-solid fa-plus"></i>
                                        </span>
                                    </div>
                                    <div class="item-subtotal">
                                        107.000
                                        <sup>₫</sup>
                                    </div>
                                    <div class="item-action">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="seller-discount">
                                <div class="discount-wrapper">
                                    <div class="description">
                                        Shop Khuyến Mãi
                                    </div>
                                    <span>
                                        <i class="fa-solid fa-angle-down"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cart-content-right">
                <div class="right-inner">
                    <div class="address-block">
                        <div class="block-header">
                            <h3 class="block-header-title">Giao tới</h3>
                            <a href="" class="block-header-nav">Thay đổi</a>
                        </div>
                        <div class="customer-info">
                            <p class="customer-info-name">Quốc Trung</p>
                            <i></i>
                            <p class="customer-info-phone">0796387080</p>
                        </div>
                        <div class="address">
                            <span class="address-type-home">Nhà</span>
                            Nhà văn hoá Nguyễn Xá, đường Đỗ Thế Diên, Xã Nhân Hòa, Huyện Mỹ Hào, Hưng Yên
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</main>



@include('frontend.component.footer')