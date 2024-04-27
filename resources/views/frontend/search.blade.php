<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BookWorld</title>

    <link rel="shortcut icon" href="{{ asset('/upload/logo/favicon-32x32.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Thêm Slick Slider -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <link rel="stylesheet" href="backend/CSS/style.css" />

    <script src="backend/JS/homepage.js"></script>
    <script src="backend/JS/login.js"></script>
</head>

<body>
    <header class="main-header">
        <div class="header-container">
            <div class="header-container-dt">
                <div class="logo-header">
                    <a href="{{ route('auth.homepage') }}">
                        <img src="./upload/logo/logo.png" alt="" width="180" height="40" />
                        <span>Uy tín 100%</span>
                    </a>
                </div>
                <div class="nav-header">
                    <div class="main-nav">
                        <div class="main-nav-detail">
                            <form action="{{ route('homepage.search') }}" method="POST">
                                @csrf
                                <div class="main-nav-left">
                                    <div class="form-nav-left">
                                        <i class="fa-solid fa-magnifying-glass"
                                            style="
                                                color: #696969;
                                                background-color: #fff;
                                            "></i>
                                        <input type="text" name="keywords_submit"
                                            placeholder="Tìm kiếm theo chủ đề, tác giả, thể loại" />
                                        <button type="submit" name="search_items" class="search-btn">
                                            Tìm kiếm
                                        </button>
                                    </div>
                                </div>
                            </form>

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
                                    <h4>Giao đến:</h4>
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
        <div class="main-container">
            <div class="main-content">
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
                                        <input type="text" name="email" id="email"
                                            placeholder="acb@email.com" value="{{ old('email') }}" />
                                    </div>
                                    <!-- Thông báo lỗi validate -->
                                    @if ($errors->has('email'))
                                        <span class="error-message">
                                            * {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                    <div class="input">
                                        <input type="password" name="password" id="password"
                                            placeholder="Mật khẩu" />
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
                                <form action="{{ route('auth.register') }}" method="POST">
                                    @csrf
                                    <div class="input">
                                        <input type="text" name="name" id="name" placeholder="Họ tên"
                                            value />
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="error-message">
                                            {{ $errors->first('name') }}
                                        </span>
                                    @endif
                                    <div class="input">
                                        <input type="email" name="email_register" id="email_register"
                                            placeholder="acb@email.com" value />
                                    </div>
                                    <!-- Thông báo lỗi validate -->
                                    @if ($errors->has('email_register'))
                                        <span class="error-message">
                                            {{ $errors->first('email_register') }}
                                        </span>
                                    @endif

                                    <div class="input">
                                        <input type="tel" name="phone" id="phone"
                                            placeholder="Số điện thoại" maxlength="10" required />
                                    </div>

                                    <div class="input">
                                        <input name="password_register" id="password_register" type="password"
                                            placeholder="Mật khẩu" />
                                    </div>
                                    @if ($errors->has('password_register'))
                                        <span class="error-message">
                                            {{ $errors->first('password_register') }}
                                        </span>
                                    @endif
                                    <div class="input">
                                        <input type="password" id="password_confirmation"
                                            name="password_register_confirmation" placeholder="Nhập lại mật khẩu"
                                            required />
                                    </div>
                                    <button>Đăng Ký</button>
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

                <div class="sidebar">
                    <div class="sidebar-detail">
                        <div class="sb-listitem">Danh mục</div>
                        <?php foreach ($categories as $category): ?>
                        <a href="{{ route('category.products', ['id' => $category->id]) }}" class="sb-item">
                            <div class="sb-item-icon">
                                <img src="<?= $category['image'] ?>" alt="" width="32" height="32" />
                            </div>
                            <div class="sb-item-content">
                                <?= $category['title'] ?>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>

                    <div class="sidebar-second">
                        <div class="sb-listitem">Nổi bật</div>
                        <?php foreach ($populartools as $populartool): ?>
                        <a href="" class="sb-item-scd">
                            <div class="sb-item-icon">
                                <img src="<?= $populartool['image'] ?>" alt="" width="32"
                                    height="32" />
                            </div>
                            <div class="sb-item-content">
                                <?= $populartool['title'] ?>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>

                    <div class="sidebar-third">
                        <a href="" class="sb-item-scd">
                            <div class="sb-item-icon">
                                <img src="./upload/img/seller.jpg" alt="" width="32" height="32" />
                            </div>
                            <div class="sb-item-content">
                                Bán hàng cùng BookWorld
                            </div>
                        </a>
                    </div>

                </div>

                <div class="widget">

                    <div class="product-list-container">

                        @foreach ($searchproducts as $Product)
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
                                                            <span class="quantity">Đã bán
                                                                {{ $Product->sold }}+</span>
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

                    <div class="footer">
                        <div class="footer-info">
                            <div
                                style="
                                            display: flex;
                                            justify-content: space-between;
                                            padding: 0 16px;
                                        ">
                                <div class="block">
                                    <h4>Hỗ trợ khách hàng</h4>
                                    <p class="hotline">
                                        Hotline:
                                        <a href="">1900-7080</a>
                                        <span class="small-text">
                                            (1000 đ/phút, 8-21h kể cả
                                            T7, CN)
                                        </span>
                                    </p>
                                    <a href="" class="small-text">Các câu hỏi thường gặp</a>
                                    <a href="" class="small-text">Gửi yêu cầu hỗ trợ</a>
                                    <a href="" class="small-text">Hướng dẫn đặt hàng</a>
                                    <a href="" class="small-text">Phương thức vận chuyển</a>
                                    <a href="" class="small-text">Chính sách đổi trả</a>
                                    <a href="" class="small-text">Hướng dẫn trả góp</a>
                                    <a href="" class="small-text">Hỗ trợ khách hàng:
                                        <b>hotro@bookworld.com</b></a>
                                    <a href="" class="small-text">Báo lỗi bảo mật:
                                        <b>sercurity@bookworld.com</b></a>
                                </div>
                                <div class="block">
                                    <h4>Về BookWorld</h4>
                                    <a href="" class="small-text">Giới thiệu BookWorld</a>
                                    <a href="" class="small-text">BookWorld Blog</a>
                                    <a href="" class="small-text">Tuyển dụng</a>
                                    <a href="" class="small-text">Chính sách bảo mật và thanh
                                        toán</a>
                                    <a href="" class="small-text">Chính sách bảo mật thông tin cá
                                        nhân</a>
                                    <a href="" class="small-text">Điều khoản sử dụng</a>
                                    <a href="" class="small-text">Điều kiện vận chuyển</a>
                                    <a href="" class="small-text">Gói hội viên vip</a>
                                    <a href="" class="small-text">Giới thiệu BookWorld xu</a>
                                </div>
                                <div class="block">
                                    <h4>Hợp tác và liên kết</h4>
                                    <a href="" class="small-text">Quy chế và hoạt động sàn GDTMĐT
                                        Bán hàng cùng BookWorld</a>
                                    <h4>Chứng nhận bởi</h4>
                                    <div class="logo-footer">
                                        <a href="">
                                            <img width="32" height="32"
                                                src="./upload/img/footer/bocongthuong.png" alt="" />
                                        </a>
                                        <a href="">
                                            <img width="83" height="32"
                                                src="./upload/img/footer/bocongthuong2.png" alt="" />
                                        </a>
                                        <a href="">
                                            <img width="32" height="32"
                                                src="./upload/img/footer/dmcaprotected.png" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="block payment-information">
                                    <h4>Phương thức thanh toán</h4>
                                    <p class="payment">
                                        <span class="icon">
                                            <img width="32" height="32" src="./upload/img/footer/visa.png"
                                                alt="" />
                                        </span>
                                        <span class="icon">
                                            <img width="32" height="32" src="./upload/img/footer/momo.jpg"
                                                alt="" />
                                        </span>
                                        <span class="icon">
                                            <img width="32" height="32" src="./upload/img/footer/zalopay.jpg"
                                                alt="" />
                                        </span>
                                        <span class="icon">
                                            <img width="32" height="32" src="./upload/img/footer/atm.png"
                                                alt="" />
                                        </span>
                                        <span class="icon">
                                            <img width="32" height="32" src="./upload/img/footer/tienmat.jpg"
                                                alt="" />
                                        </span>
                                        <span class="icon">
                                            <img width="52" height="52" src="./upload/img/footer/tragop.png"
                                                alt="" />
                                        </span>
                                    </p>
                                </div>
                                <div class="block">
                                    <h4>Kết nối với chúng tôi</h4>
                                    <p class="social-media">
                                        <span class="icon">
                                            <img width="32" height="32" src="./upload/img/footer/fb.png"
                                                alt="" />
                                        </span>
                                        <span class="icon">
                                            <img width="32" height="32" src="./upload/img/footer/ytb.png"
                                                alt="" />
                                        </span>
                                        <span class="icon">
                                            <img width="32" height="32" src="./upload/img/footer/zalo.png"
                                                alt="" />
                                        </span>
                                        <span class="icon">
                                            <img width="32" height="32" src="./upload/img/footer/ig.png"
                                                alt="" />
                                        </span>
                                        <span class="icon">
                                            <img width="32" height="32" src="./upload/img/footer/tiktok.png"
                                                alt="" />
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="footer-more">
                            <div>
                                <p class="title-text">
                                    Công ty TNHH BookWorld
                                </p>
                                <p class="small-text">
                                    Địa chỉ trụ sở: Tòa nhà Viettel, Số
                                    537, Tòa Nhà Viettel, Nguyễn Văn
                                    Linh, Thành Phố Hưng Yên
                                </p>
                                <p class="small-text">
                                    Giấy chứng nhận đăng ký doanh nghiệp
                                    số 0221 3863 456 do Sở Kế Hoạch và
                                    Đầu Tư Thành phố Hồ Chí Minh cấp lần
                                    đầu vào ngày 06/03/2024.
                                </p>
                                <p class="small-text">
                                    Hotline:
                                    <a href="">1900 7080</a>
                                </p>
                            </div>
                        </div>
                        <div class="footer-more">
                            <div>
                                <p class="title-text">
                                    BookWorld - Thật nhanh, thật chất
                                    lượng, thật rẻ
                                </p>
                                <p class="sub-title-text">
                                    BookWorld có tất cả
                                </p>
                                <p class="small-text">
                                    Với hàng triệu sản phẩm từ các
                                    thương hiệu, cửa hàng uy tín, hàng
                                    nghìn loại mặt hàng từ
                                    <a href="">những cuốn sách</a> bản
                                    quyền đa dạng các thể loại tới
                                    <a href="">những dòng máy đọc sách</a>
                                    chính hãng, kèm theo dịch vụ giao
                                    hàng siêu tốc BookWorldNOW,
                                    BookWorld mang đến cho bạn một trải
                                    nghiệm mua sắm online bắt đầu bằng
                                    chữ tín. Thêm vào đó, ở BookWorld
                                    bạn có thể dễ dàng sử dụng vô vàn
                                    các tiện ích khác như
                                    <a href="">mua thẻ cào, thanh toán hoá đơn
                                        điện nước, các dịch vụ bảo
                                        hiểm.</a>
                                </p>
                                <p class="sub-title-text">
                                    Khuyến mãi ưu đãi ngập tràn
                                </p>
                                <p class="small-text">
                                    Bạn muốn săn giá sốc, BookWorld có
                                    giá sốc mỗi ngày cho bạn! Bạn là tín
                                    đồ của các thương hiệu, các
                                    <a href="">cửa hàng Official chính hãng</a>
                                    đang chờ đón bạn. Không cần săn mã
                                    freeship, vì BookWorld đã có hàng
                                    triệu sản phẩm trong chương trình
                                    Freeship+, không giới hạn lượt đặt,
                                    tiết kiệm thời gian vàng bạc của
                                    bạn. Mua thêm gói BookWorldNOW tiết
                                    kiệm để nhận 100% free ship 2h &
                                    trong ngày, hoặc mua gói
                                    <a href="">BookWorldNOW</a> cao cấp
                                    để nhận được 100% freeship, áp dụng
                                    cho 100% sản phẩm, 100% tỉnh thành
                                    Việt Nam. Bạn muốn tiết kiệm hơn
                                    nữa? Đã có BookWorldCARD,
                                    <a href="">thẻ tín dụng BookWorld hoàn
                                        tiền 15%</a>
                                    trên mọi giao dịch (tối đa hoàn
                                    600k/tháng)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="backend/JS/homepage.js"></script>
    <script src="backend/JS/login.js"></script>
</body>

</html>
