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

        <div class="content-container">
            <div class="content-sidebar-wrap">
                <div class="content">
                    <article class="entry">
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="">
                                    Bài Viết Blog đầu tay: Giới thiệu một chút về Blog BookWorld
                                </a>
                            </h2>
                            <div class="entry-meta">
                                <span class="entry-time">April 08, 2024</span>
                                <span class="entry-author">
                                    <a href="">
                                        <span class="entry-author-name">Quốc Trung</span>
                                    </a>
                                </span>
                                <span class="entry-comment-links">
                                    <a href="">14 Comments</a>
                                </span>
                            </div>
                        </header>

                        <div class="entry-content">
                            <a href="" class="entry-image-links">
                                <img width="600" height="400" src="../../../public/upload/img/blog/greece.avif"
                                    alt="">
                            </a>
                            <p>
                                Xin chào các bạn, đây trang web blog cá nhân được mở rộng ra từ BookWorld,
                                ở đây mình sẽ chia sẻ trải nghiệm trong cuộc sống, nghiên cứu, và làm việc của tôi
                                (Trung), review về những gì liên quan đến sách...Và hy vọng qua blog của tôi, bạn tìm
                                thấy điều gì đó có ích cho cuộc sống của bạn.

                                <a href="" class="more-links">[Read more...]</a>
                            </p>

                        </div>

                        <footer class="entry-footer">
                            <p class="entry-meta">
                                <span class="entry-categories">
                                    Filed Under:
                                    <a href="">Cuộc sống (LIFE)</a> ,
                                    <a href="">Chia Sẻ</a>
                                </span>
                            </p>
                        </footer>
                    </article>
                </div>
                <div class="sidebar"></div>
            </div>
        </div>
    </div>

</body>

@include('frontend.component.footer')
