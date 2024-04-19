@include('frontend.component.header')

<header class="main-header">
    <div class="header-container">
        <div class="header-container-dt">
            <div class="logo-header">
                <a href="{{ route('auth.homepage') }}">
                    <img src="{{ asset('./upload/logo/logo.png') }}" alt="" width="180" height="40" />
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
                                <i class="fa-solid fa-house"></i>
                                <a href="">Trang chủ</a>
                            </div>

                            @if (Auth::check())
                                <div class="user-profile">
                                    <img src="{{ asset(Auth::user()->image) }}" width="24" height="24"
                                        alt="">
                                    <span>Tài khoản</span>
                                </div>

                                <div class="user-dropdown-revamp dropdown-styled">
                                    <a href="">
                                        <p class="dropdown-item">
                                            Thông tin tài khoản
                                        </p>
                                    </a>
                                    <a href="">
                                        <p class="dropdown-item">
                                            Đơn hàng của tôi
                                        </p>
                                    </a>
                                    <a href="">
                                        <p class="dropdown-item">
                                            Trung tâm hỗ trợ
                                        </p>
                                    </a>
                                    <a href="{{ route('auth.logout') }}">
                                        <p class="dropdown-item">
                                            Đăng xuất
                                        </p>
                                    </a>
                                </div>
                            @else
                                <div id="accountBtn-login" class="account-item">
                                    <i class="fa-regular fa-face-smile-wink"></i>
                                    <a href="{{ route('auth.homepage') }}">Tài khoản</a>
                                </div>
                            @endif

                            @if (Auth::check())
                                <div class="cart-item">
                                    <a href="{{ route('cart.show') }}">
                                        <div class="border-cart">
                                            <div class="cart-wrapper">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                                <span>{{ $totalQuantity }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @else
                                <div id="accountBtn-cart">
                                    <a href="#">
                                        <div class="border-cart">
                                            <div class="cart-wrapper">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                                <span>0</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
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
                    @if (Auth::check())
                        <div class="location-ship">
                            <div class="delivery-zone">
                                <i class="fa-solid fa-location-dot"></i>
                                <h4 class="title">Giao đến:</h4>
                                <div class="address">
                                    {{ Auth::user()->address }}
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="location-ship">
                            <div class="delivery-zone">
                                <i class="fa-solid fa-location-dot"></i>
                                <h4>Giao đến:</h4>
                                <div class="address">
                                    Bạn muốn giao tới đâu?
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>

<main>
    <div class="main-container-dt">
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
                        <form method="post" action="{{ route('auth.login') }}">
                            @csrf
                            <div class="input">
                                <input type="text" name="email" id="email" placeholder="acb@email.com"
                                    value="{{ old('email') }}" />
                            </div>
                            <!-- Thông báo lỗi validate -->
                            @if ($errors->has('email'))
                                <span class="error-message">
                                    * {{ $errors->first('email') }}
                                </span>
                            @endif
                            <div class="input">
                                <input type="password" name="password" id="password" placeholder="Mật khẩu" />
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
                            <span id="createAccountBtn">Tạo tài khoản</span>
                        </p>

                        <div class="social-login">
                            <div class="social-heading">
                                <span>Hoặc tiếp tục bằng</span>
                            </div>
                            <ul class="social-items">
                                <li class="social-item">
                                    <img width="58px" src="./upload/img/Login/fb.png" alt="" />
                                </li>
                                <li class="social-item">
                                    <img width="58px" src="./upload/img/Login/gg.png" alt="" />
                                </li>
                            </ul>
                            <p class="note">
                                Bằng việc tiếp tục, bạn đã đọc và
                                đồng ý với
                                <a href="">điều khoản sử dụng</a> và
                                <a href="">Chính sách bảo mật thông tin cá
                                    nhân</a>
                                của BookWorld
                            </p>
                        </div>
                    </div>
                </div>
                <div class="login-right">
                    <img width="203" src="./upload/img/Login/loginright.png" alt="" />
                    <div class="content-lgr">
                        <h4>Mua sắm tại BookWorld</h4>
                        <span>Siêu ưu đãi mỗi ngày</span>
                    </div>
                </div>
            </div>

            <div id="registerModal" class="modal" style="display: none">
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
                                <input type="fullname" name="fullname" placeholder="Họ tên" value />
                            </div>
                            <div class="input">
                                <input type="email" name="email" placeholder="acb@email.com" value />
                            </div>
                            <div class="input">
                                <input type="password" name="password" placeholder="Mật khẩu" />
                            </div>
                            <div class="input">
                                <input type="password" name="password_confirm" placeholder="Nhập lại mật khẩu" />
                            </div>
                            <div class="input">
                                <input type="tel" name="phone" placeholder="Số điện thoại" maxlength="10" />
                            </div>
                            <button type="submit">Đăng Ký</button>
                        </form>
                    </div>
                </div>
                <div class="login-right-rg">
                    <img width="203" src="./upload/img/Login/loginright.png" alt="" />
                    <div class="content-lgr">
                        <h4>Mua sắm tại BookWorld</h4>
                        <span>Siêu ưu đãi mỗi ngày</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-container" style="margin-left: 100px">
            <a href="{{ route('auth.homepage') }}" class="breadcrumb-item">
                <span>Trang chủ</span>
            </a>
            <span><i class="fa-solid fa-angle-right"></i></span>
            <a href="" class="breadcrumb-item">
                <span>{{ $breadcrumb['category'] }}</span>
            </a>
        </div>

        <div class="Cate-products-container">
            <div class="side-bar-cate">
                <div>
                    <div class="block">
                        <h4 class="title-cate">Danh Mục Sản Phẩm</h4>
                        <div class="list collapsed">
                            @foreach ($categoryDetails as $categoryDetail)
                                <a href="" class="item">{{ $categoryDetail->title_details }}</a>
                            @endforeach
                        </div>
                    </div>

                    @if (Auth::check())
                        <div class="location-ship">
                            <div class="delivery-zone">
                                <i class="fa-solid fa-location-dot"></i>
                                <h4>Giao đến:</h4>
                                <div class="address">
                                    {{ Auth::user()->address }}
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="service-filter-styled">
                    <h4 class="title-cate">Dịch Vụ</h4>
                    <label for="">
                        <input type="checkbox" class="box">
                        <div class="service-wrap">
                            <img width="40" height="20" src="../../../public/upload/img/now.png"
                                alt="">
                            <span>Giao siêu tốc 2H</span>
                        </div>
                    </label>

                    <label for="">
                        <input type="checkbox" class="box">
                        <div class="service-wrap">
                            <span>Giảm sâu</span>
                        </div>
                    </label>
                </div>

                <div class="block">
                    <h4 class="title-cate">Đánh giá</h4>
                    <div class="rating-list">
                        <a href="" class="item">
                            <p class="stars-wrapper">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </p>
                            <span class="text">từ 5 sao</span>
                        </a>
                        </a>
                        <a href="" class="item">
                            <p class="stars-wrapper">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star" id ="rating-nb"></i>
                            </p>
                            <span class="text">từ 4 sao</span>
                        </a>
                        <a href="" class="item">
                            <p class="stars-wrapper">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star" id ="rating-nb"></i>
                                <i class="fa-solid fa-star" id ="rating-nb"></i>
                            </p>
                            <span class="text">từ 3 sao</span>
                        </a>
                    </div>
                </div>

                <div class="block">
                    <h4 class="title-cate">Giá</h4>
                    <div class="fast-price-filter">
                        <div class="item">
                            <span>Dưới 80.000</span>
                        </div>
                        <div class="item">
                            <span>80.000 -> 140.000</span>
                        </div>
                        <div class="item">
                            <span>140.000 -> 260.000</span>

                        </div>
                        <div class="item">
                            <span>Trên 260.000</span>
                        </div>
                    </div>
                    <div class="price-small-text">
                        Chọn khoảng giá
                    </div>
                    <div class="input-group">
                        <input pattern="[0-9]*" placeholder="Giá từ" value="0">
                        <span>-</span>
                        <input pattern="[0-9]*" placeholder="Giá từ" value="0">
                    </div>
                    <button>Áp dụng</button>
                </div>

                <div class="block">
                    <h4 class="title-cate">
                        Công ty phát hành
                    </h4>
                    <div class="list collapsed">
                        <label for="">
                            <input type="checkbox" class="box">
                            <div class="service-wrap">
                                <span>Nhã Nam</span>
                            </div>
                        </label>
                    </div>
                    <a href="" class="toggler">
                        Xem thêm
                        <i class="fa-solid fa-angle-down"></i>
                    </a>
                </div>

                <div class="block">
                    <h4 class="title-cate">
                        Tác giả
                    </h4>
                    <div class="list collapsed">
                        <label for="">
                            <input type="checkbox" class="box">
                            <div class="service-wrap">
                                <span>Trung</span>
                            </div>
                        </label>
                    </div>
                    <a href="" class="toggler">
                        Xem thêm
                        <i class="fa-solid fa-angle-down"></i>
                    </a>
                </div>

                <div class="block">
                    <h4 class="title-cate">
                        Loại bìa
                    </h4>
                    <div class="list collapsed">
                        <label for="">
                            <input type="checkbox" class="box">
                            <div class="service-wrap">
                                <span>Bìa mềm</span>
                            </div>
                        </label>
                    </div>
                    <a href="" class="toggler">
                        Xem thêm
                        <i class="fa-solid fa-angle-down"></i>
                    </a>
                </div>

                <div class="block">
                    <h4 class="title-cate">
                        Nhà cung cấp
                    </h4>
                    <div class="list collapsed">
                        <label for="">
                            <input type="checkbox" class="box">
                            <div class="service-wrap">
                                <span>Nhà xuất bản trẻ</span>
                            </div>
                        </label>
                    </div>
                    <a href="" class="toggler">
                        Xem thêm
                        <i class="fa-solid fa-angle-down"></i>
                    </a>
                </div>

                <div>
                    <div style="height: 8px;background-color: #f5f5fa;"></div>
                    <div class="bw-ads-widget">
                        <a href="">
                            <div style="position: relative;height: calc(100% - 215px);">
                                <div class="blur-block"></div>
                                <img src="./../../../public/upload/img/BrandOfficial/brand/nhanvan.jpg"
                                    alt="">
                            </div>

                            <div class="bottom-styled">
                                <div class="brand-title-styled">Nhà Sách Nhân Văn</div>
                                <div class="sponsoredText">Tài trợ bởi</div>
                                <div class="brand-name">Nhân Văn</div>
                                <div style="margin-top: 10px;">
                                    <div class="discount-text">Giảm 8K</div>
                                    <div class="brand-view-more">Xem thêm</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="Cate-view-right">
                <div class="inner">
                    <div class="search-summary">
                        <div class="title-book">
                            <h2>Sách văn học</h2>
                        </div>
                        <div class="brand-famous">
                            <div class="content">
                                <div class="fabrand-slider">
                                    <a href="" class="brand-container-styled">
                                        <div class="logo-styled-container">
                                            <div class="blur-block-logo">
                                                <img width="123" height="123"
                                                    src="../../../public/upload/img/category/brand/firstnews.jpg"
                                                    alt="">
                                            </div>

                                        </div>

                                        <div class="rightinfo-styled">
                                            <div>
                                                <div style="font-size: 20px; line-height: 30px; margin-bottom: 4px;">
                                                    Muôn Kiếp Nhân Sinh</div>
                                                <div style="display: flex; align-items: center;">
                                                    <div class="sponsoredText">Tài trợ bởi</div>
                                                    <div class="brand-name">First News</div>
                                                    <div style="display: flex; align-items:center">
                                                        <div class="rating-text">
                                                            5/5
                                                        </div>
                                                        <p class="stars-wrapper">
                                                            <i style="font-size: 14px; color:#FFC300"
                                                                class="fa-solid fa-star"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="product-special">
                                                        <div class="product-row" style="width: 208px">
                                                            <div style="width: 208px; height: 81px;">
                                                                <img width="64" height="64"
                                                                    src="../../../public/upload/img/category/book/FN/1.jpg"
                                                                    alt="">

                                                            </div>
                                                            <div style="width: 208px; height: 81px;">
                                                                <img width="64" height="64"
                                                                    src="../../../public/upload/img/category/book/FN/1.jpg"
                                                                    alt="">

                                                            </div>
                                                            <div style="width: 208px; height: 81px;">
                                                                <img width="64" height="64"
                                                                    src="../../../public/upload/img/category/book/FN/1.jpg"
                                                                    alt="">

                                                            </div>
                                                            <div style="width: 208px; height: 81px;">
                                                                <img width="64" height="64"
                                                                    src="../../../public/upload/img/category/book/FN/1.jpg"
                                                                    alt="">

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="brand-container-styled">
                                        <div class="logo-styled-container">
                                            <div class="blur-block-logo">
                                                <img width="123" height="123"
                                                    src="../../../public/upload/img/category/brand/firstnews.jpg"
                                                    alt="">
                                            </div>

                                        </div>

                                        <div class="rightinfo-styled">
                                            <div>
                                                <div style="font-size: 20px; line-height: 30px; margin-bottom: 4px;">
                                                    Muôn Kiếp Nhân Sinh</div>
                                                <div style="display: flex; align-items: center;">
                                                    <div class="sponsoredText">Tài trợ bởi</div>
                                                    <div class="brand-name">First News</div>
                                                    <div style="display: flex; align-items:center">
                                                        <div class="rating-text">
                                                            5/5
                                                        </div>
                                                        <p class="stars-wrapper">
                                                            <i style="font-size: 14px; color:#FFC300"
                                                                class="fa-solid fa-star"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="product-special">
                                                        <div class="product-row" style="width: 208px">
                                                            <div style="width: 208px; height: 81px;">
                                                                <img width="64" height="64"
                                                                    src="../../../public/upload/img/category/book/FN/1.jpg"
                                                                    alt="">

                                                            </div>
                                                            <div style="width: 208px; height: 81px;">
                                                                <img width="64" height="64"
                                                                    src="../../../public/upload/img/category/book/FN/1.jpg"
                                                                    alt="">

                                                            </div>
                                                            <div style="width: 208px; height: 81px;">
                                                                <img width="64" height="64"
                                                                    src="../../../public/upload/img/category/book/FN/1.jpg"
                                                                    alt="">

                                                            </div>
                                                            <div style="width: 208px; height: 81px;">
                                                                <img width="64" height="64"
                                                                    src="../../../public/upload/img/category/book/FN/1.jpg"
                                                                    alt="">

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="brand-container-styled">
                                        <div class="logo-styled-container">
                                            <div class="blur-block-logo">
                                                <img width="123" height="123"
                                                    src="../../../public/upload/img/category/brand/firstnews.jpg"
                                                    alt="">
                                            </div>

                                        </div>

                                        <div class="rightinfo-styled">
                                            <div>
                                                <div style="font-size: 20px; line-height: 30px; margin-bottom: 4px;">
                                                    Muôn Kiếp Nhân Sinh</div>
                                                <div style="display: flex; align-items: center;">
                                                    <div class="sponsoredText">Tài trợ bởi</div>
                                                    <div class="brand-name">First News</div>
                                                    <div style="display: flex; align-items:center">
                                                        <div class="rating-text">
                                                            5/5
                                                        </div>
                                                        <p class="stars-wrapper">
                                                            <i style="font-size: 14px; color:#FFC300"
                                                                class="fa-solid fa-star"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="product-special">
                                                        <div class="product-row" style="width: 208px">
                                                            <div style="width: 208px; height: 81px;">
                                                                <img width="64" height="64"
                                                                    src="../../../public/upload/img/category/book/FN/1.jpg"
                                                                    alt="">

                                                            </div>
                                                            <div style="width: 208px; height: 81px;">
                                                                <img width="64" height="64"
                                                                    src="../../../public/upload/img/category/book/FN/1.jpg"
                                                                    alt="">

                                                            </div>
                                                            <div style="width: 208px; height: 81px;">
                                                                <img width="64" height="64"
                                                                    src="../../../public/upload/img/category/book/FN/1.jpg"
                                                                    alt="">

                                                            </div>
                                                            <div style="width: 208px; height: 81px;">
                                                                <img width="64" height="64"
                                                                    src="../../../public/upload/img/category/book/FN/1.jpg"
                                                                    alt="">

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="brand-container-styled">
                                        <div class="logo-styled-container">
                                            <div class="blur-block-logo">
                                                <img width="123" height="123"
                                                    src="../../../public/upload/img/category/brand/firstnews.jpg"
                                                    alt="">
                                            </div>

                                        </div>

                                        <div class="rightinfo-styled">
                                            <div>
                                                <div style="font-size: 20px; line-height: 30px; margin-bottom: 4px;">
                                                    Muôn Kiếp Nhân Sinh</div>
                                                <div style="display: flex; align-items: center;">
                                                    <div class="sponsoredText">Tài trợ bởi</div>
                                                    <div class="brand-name">First News</div>
                                                    <div style="display: flex; align-items:center">
                                                        <div class="rating-text">
                                                            5/5
                                                        </div>
                                                        <p class="stars-wrapper">
                                                            <i style="font-size: 14px; color:#FFC300"
                                                                class="fa-solid fa-star"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="product-special">
                                                        <div class="product-row" style="width: 208px">
                                                            <div style="width: 208px; height: 81px;">
                                                                <img width="64" height="64"
                                                                    src="../../../public/upload/img/category/book/FN/1.jpg"
                                                                    alt="">

                                                            </div>
                                                            <div style="width: 208px; height: 81px;">
                                                                <img width="64" height="64"
                                                                    src="../../../public/upload/img/category/book/FN/1.jpg"
                                                                    alt="">

                                                            </div>
                                                            <div style="width: 208px; height: 81px;">
                                                                <img width="64" height="64"
                                                                    src="../../../public/upload/img/category/book/FN/1.jpg"
                                                                    alt="">

                                                            </div>
                                                            <div style="width: 208px; height: 81px;">
                                                                <img width="64" height="64"
                                                                    src="../../../public/upload/img/category/book/FN/1.jpg"
                                                                    alt="">

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sorter-root">
                            <div class="sorter-bottom">
                                <div class="search-sort-container">
                                    <div class="sort-list">
                                        <a href="" class="active">
                                            Phổ Biến
                                        </a>
                                        <a href="" class>
                                            Bán Chạy
                                        </a>
                                        <a href="" class>
                                            Hàng Mới
                                        </a>
                                        <a href="" class>
                                            Giá Thấp Đến Cao
                                        </a>
                                        <a href="" class>
                                            Giá Cao Đến Thấp
                                        </a>
                                    </div>
                                </div>
                                <div class="search-navigate-container">
                                    <div class="paging">
                                        <span class="current">1</span>
                                        /
                                        <span class="last">50</span>
                                    </div>
                                    <div class="list-row">
                                        <img src="../../../public/upload/img/leftarrow.png" alt="left"
                                            class="disable">
                                        <img src="../../../public/upload/img/rightarrow.png" alt="right"
                                            class="false">
                                    </div>
                                </div>
                            </div>
                            <div class="filter-items">
                                <p class="item sticky">
                                    <img src="../../../public/upload/img/now.png" height="20" width="40"
                                        alt="">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="product-list-container">
                        @foreach ($product as $Product)
                            <div class>
                                <div>
                                    <a href="{{ route('product.show', ['id' => $Product['id']]) }}"
                                        class="product-links-styled">
                                        <div class="item-styled">
                                            <div class="thumbnail-styled">
                                                <div class="image-wrapper">
                                                    <img src="{{ asset($Product->image) }}" alt=""
                                                        width="200" height="200">
                                                </div>
                                            </div>
                                            <div
                                                style="height: 188px; min-height: 188px; display: flex; flex-direction: column;">
                                                <div class="info">
                                                    <div class="badges-styled">
                                                        <img src="../../../public/upload/img/official.png"
                                                            width="89" height="20" alt="">
                                                        <p class="ads-badge">Tài trợ</p>
                                                    </div>
                                                    <div class="name-product-styled">
                                                        <div class="name">
                                                            <h3>{{ $Product->name }}</h3>
                                                        </div>
                                                        <div class="rating-list">
                                                            <p class="stars-wrapper">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                            </p>
                                                            <span class="quantity">Đã bán {{ $Product->sold }}</span>
                                                        </div>
                                                    </div>
                                                    <div style="margin:15px 0">
                                                        <div class="price-dc">
                                                            <div class="price-styled">
                                                                {{ number_format($Product->price, 0, ',', '.') }}
                                                                <sup>₫</sup>
                                                            </div>
                                                            <div class="discount-styled">
                                                                -{{ $Product->discount_percent }}%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="margin-left: 5px">
                                                    <div class="style-deliveryInfo">
                                                        <span>{{ $Product->delivery_time }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
</main>

@include('frontend.component.footer')
