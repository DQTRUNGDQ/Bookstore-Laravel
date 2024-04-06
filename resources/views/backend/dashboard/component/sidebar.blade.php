    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    @if (Auth::check())
                        <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" src="{{ asset(Auth::user()->image) }}"
                                    width="48" height="48" />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong
                                            class="font-bold">{{ Auth::user()->name }}</strong>
                                    </span> <span class="text-muted text-xs block">Nhà phát triển <b
                                            class="caret"></b></span>
                                </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Hồ sơ</a></li>
                                <li><a href="contacts.html">Liên hệ</a></li>
                                <li><a href="mailbox.html">Hòm Thư</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('auth.logout') }}">Đăng xuất</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            BW+
                        </div>
                    @endif
                </li>
                <li class="active">
                    <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Quản Lý Thành Viên</span>
                        <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="index.html">Quản Lý Nhóm Người Dùng</a></li>
                        <li><a href="{{ route('user.index') }}">Quản Lý Người Dùng</a></li>
                    </ul>
                </li>

                <li class="active">
                    <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Quản Lý Sản Phẩm</span>
                        <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="#">Quản Lý Sách</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>
