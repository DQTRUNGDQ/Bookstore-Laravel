@include('frontend.component.header')

<body>
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
            <div class="breadcrumb-container">
                <a href="" class="breadcrumb-item">
                    <span>Trang chủ</span>
                </a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="" class="breadcrumb-item">
                    <span>{{ $breadcrumb['category'] }}</span>
                </a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="" class="breadcrumb-item">
                    <span>{{ $breadcrumb['subcategory'] }}</span>
                </a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="" class="breadcrumb-item">
                    <span>{{ $breadcrumb['name'] }}</span>
                </a>
            </div>

            <div class="product-detail">
                <div class="product-content-dt">
                    <div class="item-left">
                        <div class="wrapper">
                            <div
                                style="display:flex;flex-direction:column;width:400px;height:700px;background:white;position:sticky;top:12px;gap:16px;padding:16px 0px 12px 0px; margin-bottom:20px">
                                <div class="gallery">
                                    <div class="main-image">
                                        <img id="mainImg" src=" {{ asset($productdetails->image) }}"
                                            alt="Main Image">
                                    </div>
                                    <div class="thumbnails">
                                        <img class="thumbnail selected" src="{{ asset($productdetails->thumbnail1) }}"
                                            alt="Thumbnail 1">
                                        <img class="thumbnail" src="{{ asset($productdetails->thumbnail2) }}"
                                            alt="Thumbnail 2">
                                        <img class="thumbnail" src="{{ asset($productdetails->thumbnail3) }}"
                                            alt="Thumbnail 3">
                                        <img class="thumbnail" src="{{ asset($productdetails->thumbnail4) }}"
                                            alt="Thumbnail 4">
                                    </div>
                                </div>

                                <div class="description-sm">
                                    <div class="des-title">
                                        Đặc điểm nổi bật
                                    </div>
                                    <div class=des-content>
                                        <div class="des-highlight">
                                            <img width="16px" height="16px" src="{{ asset('./upload/img/Productdetails/highlight.png') }}"
                                                alt="">
                                            {{ $productdetails->feature1 }}
                                        </div>
                                        <div class="des-highlight">
                                            <img width="16px" height="16px" src="{{ asset('./upload/img/Productdetails/highlight.png') }}"
                                                alt="">
                                            {{ $productdetails->feature2 }}
                                        </div>
                                        <div class="des-highlight">
                                            <img width="16px" height="16px" src="{{ asset('./upload/img/Productdetails/highlight.png') }}"
                                                alt="">
                                            {{ $productdetails->feature3 }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-info-ct">
                                <div class="body-container">
                                    <div class="widget-title">
                                        <div style="width:552px; height: 124px;">
                                            <div class="header-title">
                                                <div class="brandAuthor">
                                                    <img width="89" height="20" src="{{ asset('./upload/img/Productdetails/official.png') }}"
                                                        alt="">
                                                    <h6>
                                                        Tác giả:
                                                        <a href="">
                                                            {{ $productdetails->author }}
                                                        </a>
                                                    </h6>
                                                </div>
                                                <h1 class="title-book">{{ $productdetails->name }}</h1>
                                                <div class="rating-book">
                                                    <div style="display:flex; align-items: center;">
                                                        <div class="Review">
                                                            <div
                                                                style="font-size:14px; line-height:150%; font-weight:500;margin-right:5px">
                                                                5.0
                                                            </div>
                                                            <div class="review-star">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                            </div>
                                                            <div class="number">({{ $productdetails->quantity }})</div>
                                                            <div class="separator"></div>
                                                        </div>
                                                        <div class="quantity-sold">
                                                            Đã bán {{ $productdetails->sold}}+
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-title">
                                                <div class="styled-price">
                                                    <div class="product-price">
                                                        <div class="price-current">{{ number_format($productdetails->pricediscount, 0, ',', '.') }}
                                                            <sup>₫</sup>
                                                        </div>
                                                        <div class="price-discount">-{{ $productdetails->discount }}%</div>
                                                        <div class="price-shock">
                                                            <img width="72" height="22"
                                                                src="{{ asset('./upload/img/Productdetails/priceshock.png') }}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="widget-title">
                                        <div class="widget-title-styled">
                                            Thông tin vận chuyển
                                        </div>
                                        <div class="widget-content-styled">
                                            <div style="display: flex; align-items: center; justify-content: space-between;cursor: pointer;gap:
                                                4px;font-size: 14px;font-weight: 400;line-height: 150%;">
                                                <div class="current-location">
                                                    Giao đến TX. Mỹ Hào, P. Nhân Hòa, Hưng Yên
                                                </div>
                                                <span style="color: #55c57a;">Đổi</span>
                                            </div>

                                        </div>
                                        <div class="widget-content-styled">
                                            <div class="shipping-info">
                                                <div class="shipping-info-header">
                                                    <img width="32" height="16" src="{{asset('./upload/img/Productdetails/shipping.png')}}"
                                                        alt="">
                                                    <div class="shipping-info-text">Giao Thứ Sáu</div>
                                                </div>
                                                <div class="shipping-info-fee">
                                                    <div>
                                                        <span style="color:#27272A;">
                                                            Trước 19h, 30/03: 22.000
                                                        </span>
                                                        <sup>
                                                            <small>₫</small>
                                                        </sup>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-title">
                                        <div class="widget-title-styled">
                                            <div class="widget-rule">
                                                <div class="widget-title">
                                                    Mua 3 Giảm 5%
                                                </div>
                                                <a href="">
                                                    <span class="see-more">
                                                        Xem Thêm
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="widget-content-styled">
                                            <div class="wrapper-combo">
                                                <div class="wrapper-rule">
                                                    <div class="rule-item">
                                                        <img width="16" height="16" src="{{ asset('/upload/img/Productdetails/rule.png') }}"
                                                            alt="">
                                                        <span>Mua 3 giảm 5%</span>
                                                    </div>

                                                </div>
                                                <div class="wrapper-item">
                                                    @foreach($similarproducts as $similarproduct)
                                                        @if($similarproduct->dealtoday_id == $productdetails->dealtoday_id)
                                                            <img style="display: block; height: 76px; width: auto; object-fit: contain; cursor: pointer; opacity: 1;"
                                                                src="{{ asset($similarproduct->imgbook) }}" alt="">
                                                        @endif
                                                    @endforeach
                                                </div>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-title">
                                        <div class="widget-title-styled">
                                            Sản phẩm tương tự
                                        </div>
                                        <div style="padding-top: 20px;">
                                            <div class="content">
                                                <div class="slider"
                                                    style="gap: 8px; transition: all 0.5s ease-in-out 0s; transform: translateX(0px);">
                                                    <div class="product-group">
                                                        <div class="grid-item">
                                                            <div class="product-card-container">
                                                                <a href="">
                                                                    <div class="styled-item">
                                                                        <div class="thumbnails-styled">
                                                                            <img width="130" height="130"
                                                                                src="{{asset('./upload/img/productdetails/sanphamtuongtu/comboosho.jpg')}}"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="content-styled">
                                                                            <div class="info">
                                                                                <div class="name-info">
                                                                                    <h3> Combo Sách Osho - Đàn Ông + Đàn Bà +
                                                                                        Ươm Mầm</h3>
                                                                                    <div class="review-star"
                                                                                        style="margin-top:5px">
                                                                                        <i class="fa-solid fa-star"></i>
                                                                                        <i class="fa-solid fa-star"></i>
                                                                                        <i class="fa-solid fa-star"></i>
                                                                                        <i class="fa-solid fa-star"></i>
                                                                                        <i class="fa-solid fa-star"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-discount">
                                                                                    <div class="price-discount-styled">
                                                                                        299.500
                                                                                        <sup>₫</sup>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="product-card-container">
                                                                <a href="">
                                                                    <div class="styled-item">
                                                                        <div class="thumbnails-styled">
                                                                            <img width="130" height="130"
                                                                                src="{{asset('./upload/img/productdetails/sanphamtuongtu/yeunhungdieukhonghoanhao.jpg')}}"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="content-styled">
                                                                            <div class="info">
                                                                                <div class="name-info">
                                                                                    <h3> Yêu Những Điều Không Hoàn Hảo</h3>
                                                                                    <div class="review-star"></div>
                                                                                </div>
                                                                                <div class="product-discount">
                                                                                    <div class="price-discount-styled">
                                                                                        107.000
                                                                                        <sup>₫</sup>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="product-card-container">
                                                                <a href="">
                                                                    <div class="styled-item">
                                                                        <div class="thumbnails-styled">
                                                                            <img width="130" height="130"
                                                                                src="{{asset('./upload/img/productdetails/sanphamtuongtu/neubiettramnalahuuhan.jp')}}g"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="content-styled">
                                                                            <div class="info">
                                                                                <div class="name-info">
                                                                                    <h3> Nếu Biết Trăm Năm Là Hữu Hạn</h3>
                                                                                    <div class="review-star"></div>
                                                                                </div>
                                                                                <div class="product-discount">
                                                                                    <div class="price-discount-styled">
                                                                                        239.350
                                                                                        <sup>₫</sup>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="product-card-container">
                                                                <a href="">
                                                                    <div class="styled-item">
                                                                        <div class="thumbnails-styled">
                                                                            <img width="130" height="130"
                                                                                src="{{asset('./upload/img/productdetails/sanphamtuongtu/deardarling.jpg')}}"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="content-styled">
                                                                            <div class="info">
                                                                                <div class="name-info">
                                                                                    <h3> Dear, Darling</h3>
                                                                                    <div class="review-star"></div>
                                                                                </div>
                                                                                <div class="product-discount">
                                                                                    <div class="price-discount-styled">
                                                                                        62.900
                                                                                        <sup>₫</sup>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="product-card-container">
                                                                <a href="">
                                                                    <div class="styled-item">
                                                                        <div class="thumbnails-styled">
                                                                            <img width="130" height="130"
                                                                                src="{{asset('./upload/img/productdetails/sanphamtuongtu/damtreodaiduongden.png')}}"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="content-styled">
                                                                            <div class="info">
                                                                                <div class="name-info">
                                                                                    <h3> Đám Trẻ Ở Đại Dương Đen</h3>
                                                                                    <div class="review-star"></div>
                                                                                </div>
                                                                                <div class="product-discount">
                                                                                    <div class="price-discount-styled">
                                                                                        60.600
                                                                                        <sup>₫</sup>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="product-card-container">
                                                                <a href="">
                                                                    <div class="styled-item">
                                                                        <div class="thumbnails-styled">
                                                                            <img width="130" height="130"
                                                                                src="{{asset('./upload/img/productdetails/sanphamtuongtu/kedienbentraithientaibenphai.jpg')}}"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="content-styled">
                                                                            <div class="info">
                                                                                <div class="name-info">
                                                                                    <h3> Tác Phẩm Kinh Điển: Thiên Tài Bên Trái,
                                                                                        Kẻ Điên Bên Phải / Sách Văn Học Hay
                                                                                        (Tặng Kèm Bookmark Thiết Kế Bookmark
                                                                                        Happy Life)</h3>
                                                                                    <div class="review-star"></div>
                                                                                </div>
                                                                                <div class="product-discount">
                                                                                    <div class="price-discount-styled">
                                                                                        163.250
                                                                                        <sup>₫</sup>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="product-card-container">
                                                                <a href="">
                                                                    <div class="styled-item">
                                                                        <div class="thumbnails-styled">
                                                                            <img width="130" height="130"
                                                                                src="{{asset('./upload/img/productdetails/sanphamtuongtu/chungtaroisehptheocachkhacnhau.jpg')}}"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="content-styled">
                                                                            <div class="info">
                                                                                <div class="name-info">
                                                                                    <h3> Chúng Ta Rồi Sẽ Hạnh Phúc, Theo Những
                                                                                        Cách Khác Nhau [Tặng Kèm: 01 Bookmark]
                                                                                    </h3>
                                                                                    <div class="review-star"></div>
                                                                                </div>
                                                                                <div class="product-discount">
                                                                                    <div class="price-discount-styled">
                                                                                        61.400
                                                                                        <sup>₫</sup>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="product-card-container">
                                                                <a href="">
                                                                    <div class="styled-item">
                                                                        <div class="thumbnails-styled">
                                                                            <img width="130" height="130"
                                                                                src="{{asset('./upload/img/productdetails/sanphamtuongtu/buocchamlaigiuathegianvoiva.jpg')}}"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="content-styled">
                                                                            <div class="info">
                                                                                <div class="name-info">
                                                                                    <h3> Bước Chậm Lại Giữa Thế Gian Vội Vã (Tái
                                                                                        Bản)</h3>
                                                                                    <div class="review-star"></div>
                                                                                </div>
                                                                                <div class="product-discount">
                                                                                    <div class="price-discount-styled">
                                                                                        63.750
                                                                                        <sup>₫</sup>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="product-group">
                                                        <div class="grid-item">
                                                            <div class="product-card-container">
                                                                <a href="">
                                                                    <div class="styled-item">
                                                                        <div class="thumbnails-styled">
                                                                            <img width="130" height="130"
                                                                                src="{{asset('./upload/img/productdetails/sanphamtuongtu/comboosho.jpg')}}"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="content-styled">
                                                                            <div class="info">
                                                                                <div class="name-info">
                                                                                    <h3> Combo Sách Osho - Đàn Ông + Đàn Bà +
                                                                                        Ươm Mầm</h3>
                                                                                    <div class="review-star"
                                                                                        style="margin-top:5px">
                                                                                        <i class="fa-solid fa-star"></i>
                                                                                        <i class="fa-solid fa-star"></i>
                                                                                        <i class="fa-solid fa-star"></i>
                                                                                        <i class="fa-solid fa-star"></i>
                                                                                        <i class="fa-solid fa-star"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-discount">
                                                                                    <div class="price-discount-styled">
                                                                                        299.500
                                                                                        <sup>₫</sup>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="product-card-container">
                                                                <a href="">
                                                                    <div class="styled-item">
                                                                        <div class="thumbnails-styled">
                                                                            <img width="130" height="130"
                                                                                src="{{asset('./upload/img/productdetails/sanphamtuongtu/yeunhungdieukhonghoanhao.jpg')}}"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="content-styled">
                                                                            <div class="info">
                                                                                <div class="name-info">
                                                                                    <h3> Yêu Những Điều Không Hoàn Hảo</h3>
                                                                                    <div class="review-star"></div>
                                                                                </div>
                                                                                <div class="product-discount">
                                                                                    <div class="price-discount-styled">
                                                                                        107.000
                                                                                        <sup>₫</sup>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="product-card-container">
                                                                <a href="">
                                                                    <div class="styled-item">
                                                                        <div class="thumbnails-styled">
                                                                            <img width="130" height="130"
                                                                                src="{{asset('./upload/img/productdetails/sanphamtuongtu/neubiettramnalahuuhan.jp')}}g"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="content-styled">
                                                                            <div class="info">
                                                                                <div class="name-info">
                                                                                    <h3> Nếu Biết Trăm Năm Là Hữu Hạn</h3>
                                                                                    <div class="review-star"></div>
                                                                                </div>
                                                                                <div class="product-discount">
                                                                                    <div class="price-discount-styled">
                                                                                        239.350
                                                                                        <sup>₫</sup>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="product-card-container">
                                                                <a href="">
                                                                    <div class="styled-item">
                                                                        <div class="thumbnails-styled">
                                                                            <img width="130" height="130"
                                                                                src="{{asset('./upload/img/productdetails/sanphamtuongtu/deardarling.jpg')}}"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="content-styled">
                                                                            <div class="info">
                                                                                <div class="name-info">
                                                                                    <h3> Dear, Darling</h3>
                                                                                    <div class="review-star"></div>
                                                                                </div>
                                                                                <div class="product-discount">
                                                                                    <div class="price-discount-styled">
                                                                                        62.900
                                                                                        <sup>₫</sup>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="product-card-container">
                                                                <a href="">
                                                                    <div class="styled-item">
                                                                        <div class="thumbnails-styled">
                                                                            <img width="130" height="130"
                                                                                src="{{asset('./upload/img/productdetails/sanphamtuongtu/damtreodaiduongden.png')}}"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="content-styled">
                                                                            <div class="info">
                                                                                <div class="name-info">
                                                                                    <h3> Đám Trẻ Ở Đại Dương Đen</h3>
                                                                                    <div class="review-star"></div>
                                                                                </div>
                                                                                <div class="product-discount">
                                                                                    <div class="price-discount-styled">
                                                                                        60.600
                                                                                        <sup>₫</sup>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="product-card-container">
                                                                <a href="">
                                                                    <div class="styled-item">
                                                                        <div class="thumbnails-styled">
                                                                            <img width="130" height="130"
                                                                                src="{{asset('./upload/img/productdetails/sanphamtuongtu/kedienbentraithientaibenphai.jpg')}}"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="content-styled">
                                                                            <div class="info">
                                                                                <div class="name-info">
                                                                                    <h3> Tác Phẩm Kinh Điển: Thiên Tài Bên Trái,
                                                                                        Kẻ Điên Bên Phải / Sách Văn Học Hay
                                                                                        (Tặng Kèm Bookmark Thiết Kế Bookmark
                                                                                        Happy Life)</h3>
                                                                                    <div class="review-star"></div>
                                                                                </div>
                                                                                <div class="product-discount">
                                                                                    <div class="price-discount-styled">
                                                                                        163.250
                                                                                        <sup>₫</sup>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="product-card-container">
                                                                <a href="">
                                                                    <div class="styled-item">
                                                                        <div class="thumbnails-styled">
                                                                            <img width="130" height="130"
                                                                                src="{{asset('./upload/img/productdetails/sanphamtuongtu/chungtaroisehptheocachkhacnhau.jpg')}}"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="content-styled">
                                                                            <div class="info">
                                                                                <div class="name-info">
                                                                                    <h3> Chúng Ta Rồi Sẽ Hạnh Phúc, Theo Những
                                                                                        Cách Khác Nhau [Tặng Kèm: 01 Bookmark]
                                                                                    </h3>
                                                                                    <div class="review-star"></div>
                                                                                </div>
                                                                                <div class="product-discount">
                                                                                    <div class="price-discount-styled">
                                                                                        61.400
                                                                                        <sup>₫</sup>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="product-card-container">
                                                                <a href="">
                                                                    <div class="styled-item">
                                                                        <div class="thumbnails-styled">
                                                                            <img width="130" height="130"
                                                                                src="{{asset('./upload/img/productdetails/sanphamtuongtu/buocchamlaigiuathegianvoiva.jpg')}}"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="content-styled">
                                                                            <div class="info">
                                                                                <div class="name-info">
                                                                                    <h3> Bước Chậm Lại Giữa Thế Gian Vội Vã (Tái
                                                                                        Bản)</h3>
                                                                                    <div class="review-star"></div>
                                                                                </div>
                                                                                <div class="product-discount">
                                                                                    <div class="price-discount-styled">
                                                                                        63.750
                                                                                        <sup>₫</sup>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="widget-title">
                                    </div> -->
                                    <div class="widget-title">
                                        <div class="widget-title-styled">
                                            Thông tin nhà bán
                                        </div>
                                        <div class="widget-seller">
                                            <a href="">
                                                <img width="40" height="40" src="{{ asset('./upload/logo/favicon-32x32-white.pn') }}g" alt=""
                                                    style="border-radius: 50%;opacity: 1;background-color:#55c57a; padding:5px 10px">
                                            </a>
                                            <div style="display:flex; flex-direction:column; gap: 8px">
                                                <div class="seller-name">
                                                    <div class="seller-name-styled">
                                                        <a href="">
                                                            <span>BookWorld Trading</span>
                                                            <img width="72" height="20" src="{{asset('./upload/img/auth.png')}}"
                                                                alt="chinhhang">


                                                        </a>
                                                    </div>
                                                    <div class="seller-action">
                                                        <div class="action follow">
                                                            <img width="16" height="16" src="{{asset('./upload/img/follow.png')}}"
                                                                alt="theodoi">
                                                            <span>Theo Dõi</span>
                                                        </div>
                                                        <div class="button-chat">
                                                            <img width="16" height="16" src="{{asset('./upload/img/chat.png')}}" alt="chat">
                                                            <span>Chat</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="seller-detail-info">
                                                    <div class="item-review">
                                                        <div class="title">
                                                            <img width="16" height="16" src="{{asset('./upload/img/staricon.png')}}" alt="">
                                                            <span>4.8</span>
                                                        </div>
                                                        <div class="sub-title">(5.5tr+ đánh giá)</div>
                                                    </div>
                                                    <div class="item-normal">
                                                        <div class="title">
                                                            <span>499.9k+</span>
                                                        </div>
                                                        <div class="sub-title">Theo dõi</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-title">
                                        <div class="widget-title-styled"
                                            style="display: flex; align-items: center; justify-content: space-between; cursor: pointer;">
                                            <div>An tâm mua sắm</div>
                                            <img width="20" height="20" src="{{asset('./upload/img/angleright.png')}}" alt="">
                                        </div>
                                        <div style="display:flex; flex-direction:column; margin-top:10px">
                                            <div class="styled">
                                                <img width="20" height="20" src="{{asset('./upload/img/box.png')}}" alt="hoantien">
                                                <span>
                                                    <b>Được mở hộp kiểm tra</b>
                                                    khi nhận hàng
                                                </span>
                                            </div>
                                            <div class="styled">
                                                <img width="20" height="20" src="{{asset('./upload/img/compensationmoney.png')}}"
                                                    alt="doitrahang">
                                                <span>
                                                    <b>Được hoàn tiền 100%</b>
                                                    nếu là hàng giả
                                                </span>
                                            </div>
                                            <div class="styled">
                                                <img width="20" height="20" src="{{asset('./upload/img/compensation.png')}}"
                                                    alt="kiemtrahang">
                                                <span>
                                                    <b>Đổi trả miễn phí tại nhà trong 30 ngày</b>
                                                    nếu sản phẩm lỗi
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-title">
                                        <div class="widget-title-styled">
                                            <div>Thông tin chi tiết</div>
                                        </div>
                                        <div style="display:flex; flex-direction:column; margin-top:10px">
                                            <div class="styled">
                                                <div class="content-row-styled">
                                                    <span style="width: 300px; color: rgb(128, 128, 137);">
                                                        Phiên bản sách
                                                    </span>
                                                    <span style="width: 249px;">{{ $productdetails->versiontype }}</span>
                                                </div>
                                            </div>
                                            <div class="styled">
                                                <div class="content-row-styled">
                                                    <span style="width: 300px; color: rgb(128, 128, 137);">
                                                        Công ty phát hành
                                                    </span>
                                                    <span style="width: 249px;">{{ $productdetails->issuingcompany }}</span>
                                                </div>
                                            </div>
                                            <div class="styled">
                                                <div class="content-row-styled">
                                                    <span style="width: 300px; color: rgb(128, 128, 137);">
                                                        Ngày xuất bản
                                                    </span>
                                                    <span style="width: 249px;">{{ $productdetails->publicationdate }}</span>
                                                </div>
                                            </div>
                                            <div class="styled">
                                                <div class="content-row-styled">
                                                    <span style="width: 300px; color: rgb(128, 128, 137);">
                                                        Kích thước
                                                    </span>
                                                    <span style="width: 249px;">{{ $productdetails->size }}</span>
                                                </div>
                                            </div>
                                            <div class="styled">
                                                <div class="content-row-styled">
                                                    <span style="width: 300px; color: rgb(128, 128, 137);">
                                                        Dịch Giả
                                                    </span>
                                                    <span style="width: 249px;">{{ $productdetails->translator }}</span>
                                                </div>
                                            </div>
                                            <div class="styled">
                                                <div class="content-row-styled">
                                                    <span style="width: 300px; color: rgb(128, 128, 137);">
                                                        Loại bìa
                                                    </span>
                                                    <span style="width: 249px;">{{ $productdetails->covertype }}</span>
                                                </div>
                                            </div>
                                            <div class="styled">
                                                <div class="content-row-styled">
                                                    <span style="width: 300px; color: rgb(128, 128, 137);">
                                                        Số trang
                                                    </span>
                                                    <span style="width: 249px;">
                                                        {{ $productdetails->pages }}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="styled">
                                                <div class="content-row-styled">
                                                    <span style="width: 300px; color: rgb(128, 128, 137);">
                                                        Nhà xuất bản
                                                    </span>
                                                    <span style="width: 249px;">
                                                        {{ $productdetails->publishingcompany }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-title">
                                        <div class="widget-title-style">
                                            <div class="widget-title-styled">
                                                <div>Mô tả sản phẩm</div>
                                            </div>
                                        </div>
                                        <div class="toggle-content">
                                            <p style="text-align:justify">
                                                <strong>{{ $productdetails->titledescription }}</strong>
                                            </p>
                                            <p style="text-align:justify">
                                                {!! nl2br($productdetails->description) !!}
                                            </p>
                                            <p class="fade-out-text" style="text-align:justify">
                                                {!! nl2br($productdetails->descriptionmore) !!}
                                                <span class="gradient"></span>
                                            </p>
                                            <p>&nbsp;</p>
                                            <p class="hidden" id="additional-content">
                                                Giá sản phẩm trên BookWorld đã bao gồm thuế theo luật hiện hành. Bên cạnh đó,
                                                tuỳ vào
                                                loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí
                                                khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn
                                                hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....
                                            </p>

                                            <a class="btn-more" onclick="toggleGradient()">Xem thêm</a>
                                        </div>
                                    </div>
                                    <!-- <div class=" widget-title">
                                    </div>
                                    <div class="widget-title"></div> -->
                                </div>
                            </div>
                        </div>

                        <div class="customer-review-widget"></div>
                    </div>

                    <div class="item-right">
                        <div
                            style="position:sticky;top:12px;display:flex;flex-direction:column;align-items:stretch;gap:12px; margin-top:-20px">
                            <div class="widget-container-styled">
                                <div class="widget-seller styled">
                                    <a href="">
                                        <img width="40" height="40" src="{{ asset('./upload/logo/favicon-32x32-white.png')}}" alt=""
                                            style="border-radius: 50%;opacity: 1;background-color:#55c57a; padding:5px 10px">
                                    </a>
                                    <div style="display:flex; flex-direction:column; gap: 8px">
                                        <div class="seller-name">
                                            <div class="seller-name-styled">
                                                <a href="">
                                                    <span>BookWorld Trading</span>
                                                    <img width="72" height="20" src="{{ asset('./upload/img/auth.pn') }}g" alt="chinhhang">


                                                </a>
                                            </div>
                                        </div>
                                        <div class="seller-detail-info">
                                            <div class="item-review">
                                                <div class="title">
                                                    <img width="16" height="16" src="{{ asset('./upload/img/staricon.png')}}" alt="">
                                                    <span>4.8</span>
                                                </div>
                                                <div class="sub-title" style="color:#808089">(5.5tr+ đánh giá)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <div>
                                        <div class="quantity-input mg-t">
                                            <p class="label">
                                                Số lượng
                                            </p>
                                            <div class="group-input">
                                                <button class="disable">
                                                    <i class="fa-solid fa-minus"></i>

                                                </button>
                                                <input type="text" value="1" class="inpit">
                                                <button>
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-container-styled mg-t">
                                        <div class="price-label-styled">Tạm tính</div>
                                        <div class="price-product">
                                            63.000
                                            <sup>
                                                ₫
                                            </sup>
                                        </div>
                                    </div>
                                    <div class="group-button">
                                        <button class="buy-now-btn">
                                            Mua ngay
                                        </button>
                                        <button class="add-to-cart-btn cart-styled">
                                            Thêm vào giỏ
                                        </button>
                                        <button class="buy-second-btn cart-styled">
                                            Mua trước trả sau
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div></div>
            <div></div>
            <div></div>
        </div>

        </div>

    </main>

@include('frontend.component.footer')