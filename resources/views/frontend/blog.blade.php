@include('frontend.component.header')

<body>
    <div class="main-container">
        <div class="navigation-container">
            <div class="nav-primary">
                <ul class="menu-left">
                    <li class="menu-item">
                        <a href="">
                            <span>BLOG</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="">
                            <span>BOOKWORLD SHOP</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="">
                            <span>REVIEW SÁCH</span>
                        </a>
                    </li>
                    <li class="menu-item">
                    </li>
                </ul>
            </div>
            <div class="nav-middle">
                <a href="">
                    <img width="150" height="150" src="../../../public/upload/img/blog.png" alt="">
                </a>
            </div>
            <div class="nav-secondary">
                <ul class="menu-right">
                    <li class="menu-item">
                        <a href="">
                            <span>BẢN TIN</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="">
                            <span>MỤC LỤC</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="">
                            <span>GIỚI THIỆU</span>
                        </a>
                        <div class="display-styled">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="">
                                        <span>
                                            Về Admin Quốc Trung
                                        </span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="">
                                        <span>Về BookWorld</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item">
                        <a href="">
                            <span></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</body>

@include('frontend.component.footer')
