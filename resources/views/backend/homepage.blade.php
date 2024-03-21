<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>BookWorld</title>

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
                        <a href="">
                            <img src="./upload/logo/logo.png" alt="" width="180" height="40" />
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
                                        <p>Nhập email và mật khẩu của tài khoản BookWorld</p>
                                    </div>
                                    <form method="post" action ="{{ route('auth.login') }}">
                                        @csrf
                                        <div class="input">
                                            <input type="text" 
                                            name="email" 
                                            id="email"
                                            placeholder="acb@email.com" 
                                            value ="{{ old('email') }}"
                                            >
                                            
                                        </div>
                                        <!-- Thông báo lỗi validate -->
                                            @if ($errors->has('email'))
                                                    <span class="error-message">
                                                    *   {{
                                                            $errors->first('email')
                                                        }}
                                                    </span>
                                            @endif
                                        <div class="input">
                                            <input 
                                            type="password" 
                                            name="password"
                                            id="password"
                                            placeholder="Mật khẩu"
                                            >
                                            <span class="show-pass">Hiện</span>
                                        </div>
                                        <!-- Thông báo lỗi validate -->
                                            @if ($errors->has('password'))
                                                    <span class="error-message">
                                                    *   {{
                                                            $errors->first('password')
                                                        }}
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
                                                <img width="58px" src="./upload/img/Login/fb.png" alt="">
                                            </li>
                                            <li class="social-item">
                                                <img width="58px" src="./upload/img/Login/gg.png" alt="">
                                            </li>
                                        </ul>
                                        <p class="note">
                                            Bằng việc tiếp tục, bạn đã đọc và đồng ý với
                                            <a href="">điều khoản sử dụng</a> và
                                            <a href="">Chính sách bảo mật thông tin cá nhân</a> của BookWorld
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="login-right">
                                <img width="203" src="./upload/img/Login/loginright.png" alt="">
                                <div class="content-lgr">
                                    <h4>Mua sắm tại BookWorld</h4>
                                    <span>Siêu ưu đãi mỗi ngày</span>
                                </div>
                            </div>
                        </div>

                        <div id="registerModal" class="modal" style="display:none">
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
                                            >
                                        </div>
                                        <div class="input">
                                            <input type="email" name="email" placeholder="acb@email.com" value>
                                        </div>
                                        <div class="input">
                                            <input type="password" name="password" placeholder="Mật khẩu">
                                        </div>
                                        <div class="input">
                                            <input type="password" name="password_confirm" placeholder="Nhập lại mật khẩu">
                                        </div>
                                        <div class="input">
                                            <input type="tel" name="phone" placeholder="Số điện thoại" maxlength="10">
                                        </div>
                                        <button type="submit">Đăng Ký</button>
                                    </form>
                                </div>
                            </div>
                            <div class="login-right-rg">
                                <img width="203" src="./upload/img/Login/loginright.png" alt="">
                                <div class="content-lgr">
                                    <h4>Mua sắm tại BookWorld</h4>
                                    <span>Siêu ưu đãi mỗi ngày</span>
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
