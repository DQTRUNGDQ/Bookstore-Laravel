@include('backend.dashboard.component.head')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>{{ config('apps.user.title') }}</h2>
        <ol class="breadcrumb" style="margin-bottom: 10px">
            <li>
                <a href="{{ route('dashboard.index') }}">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('user.index') }}"><span>{{ config('apps.user.title') }}</span></a>
            </li>
            <li class="active">
                <strong>{{ config('apps.user.subHeadingEdit') }}</strong>
            </li>
        </ol>
    </div>
</div>

<div class="row" style="background: #fff; padding: 10px 80px;">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0" style="font-size:24px; color:#000">CẬP NHẬT NGƯỜI DÙNG</h4>
        </div>
    </div>
</div>

<div class="AddUser-container">
    <div class="card">
        <a href="">
            <div>
                <div class="title-styled">
                    <div style="display: flex; align-items:center">
                        <div>
                            <div class="avatar-title">
                                <div class="title-numb">
                                    01
                                </div>
                            </div>
                        </div>
                        <div class="title-text">
                            <h5>Thông tin cơ bản</h5>
                            <p>Điền đầy đủ thông tin ở bên dưới</p>
                        </div>
                    </div>

                    <i class="fa-solid fa-angle-up" style="font-size:18px"></i>
                </div>
            </div>
        </a>

        <div class="p-4 border-top">
            <div class="form-add">
                <form action="{{ route('user.UpdateToDB', ['id' => $user->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên người dùng</label>
                        <input id="name" name="name" value="{{ $user->name }}" type="text"
                            class="form-control">
                        @if ($errors->has('name'))
                            <span class="error-message">
                                * {{ $errors->first('name') }}
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input id="password" name="password" type="password" value="{{ $user->password }}"
                            class="form-control">
                        @if ($errors->has('password'))
                            <span class="error-message">
                                * {{ $errors->first('password') }}
                            </span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="role">Vai trò</label>
                                <input id="role" name="role" type="text" value="{{ $user->role }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="birthday">Ngày/tháng/năm sinh</label>
                                <input id="birthday" name="birthday" type="datetime" value="{{ $user->birthday }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" name="email" type="email" value="{{ $user->email }}"
                                    class="form-control">
                                @if ($errors->has('email'))
                                    <span class="error-message">
                                        * {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>

                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="phone">Số điện thoại</label>
                                <input id="phone" name="phone" type="tel" value="{{ $user->phone }}"
                                    class="form-control">
                                @if ($errors->has('phone'))
                                    <span class="error-message">
                                        * {{ $errors->first('phone') }}
                                    </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Tỉnh thành
                                    @if (!$user->province)
                                        đã chọn trước đó:
                                        <span style="color:red">Chưa được chọn</span>
                                    @elseif ($user->province == 'Lựa chọn')
                                        đã chọn trước đó:
                                        <span style="color:red">Chưa được chọn</span>
                                    @else
                                        đã chọn trước đó:
                                        <span style="color: #55c57a; font-size:15px"> {{ $user->province }}
                                            </spans>
                                    @endif
                                </label>
                                <select id="province" name="province" class="form-control select2">
                                    <option>Lựa chọn</option>
                                    <option value="Hà Nội">Hà Nội</option>
                                    <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                    <option value="Hải Phòng">Hải Phòng</option>
                                    <option value="Cần Thơ">Cần Thơ</option>
                                    <option value="Đà Nẵng">Đà Nẵng</option>
                                    <option value="Hà Giang">Hà Giang</option>
                                    <option value="Cao Bằng">Cao Bằng</option>
                                    <option value="Lai Châu">Lai Châu</option>
                                    <option value="Lào Cai">Lào Cai</option>
                                    <option value="Tuyên Quang">Tuyên Quang</option>
                                    <option value="Lạng Sơn">Lạng Sơn</option>
                                    <option value="Bắc Kạn">Bắc Kạn</option>
                                    <option value="Thái Nguyên">Thái Nguyên</option>
                                    <option value="Yên Bái">Yên Bái</option>
                                    <option value="Sơn La">Sơn La</option>
                                    <option value="Phú Thọ">Phú Thọ</option>
                                    <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                    <option value="Quảng Ninh">Quảng Ninh</option>
                                    <option value="Bắc Giang">Bắc Giang</option>
                                    <option value="Bắc Ninh">Bắc Ninh</option>
                                    <option value="Hải Dương">Hải Dương</option>
                                    <option value="Hưng Yên">Hưng Yên</option>
                                    <option value="Thái Bình">Thái Bình</option>
                                    <option value="Hà Nam">Hà Nam</option>
                                    <option value="Nam Định">Nam Định</option>
                                    <option value="Ninh Bình">Ninh Bình</option>
                                    <option value="Thanh Hóa">Thanh Hóa</option>
                                    <option value="Nghệ An">Nghệ An</option>
                                    <option value="Hà Tĩnh">Hà Tĩnh</option>
                                    <option value="Quảng Bình">Quảng Bình</option>
                                    <option value="Quảng Trị">Quảng Trị</option>
                                    <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                                    <option value="Quảng Nam">Quảng Nam</option>
                                    <option value="Quảng Ngãi">Quảng Ngãi</option>
                                    <option value="Bình Định">Bình Định</option>
                                    <option value="Phú Yên">Phú Yên</option>
                                    <option value="Khánh Hòa">Khánh Hòa</option>
                                    <option value="Ninh Thuận">Ninh Thuận</option>
                                    <option value="Bình Thuận">Bình Thuận</option>
                                    <option value="Kon Tum">Kon Tum</option>
                                    <option value="Gia Lai">Gia Lai</option>
                                    <option value="Đắk Lắk">Đắk Lắk</option>
                                    <option value="Đắk Nông">Đắk Nông</option>
                                    <option value="Lâm Đồng">Lâm Đồng</option>
                                    <option value="Bình Phước">Bình Phước</option>
                                    <option value="Tây Ninh">Tây Ninh</option>
                                    <option value="Bình Dương">Bình Dương</option>
                                    <option value="Đồng Nai">Đồng Nai</option>
                                    <option value="Bà Rịa-Vũng Tàu">Bà Rịa-Vũng Tàu</option>
                                    <option value="Long An">Long An</option>
                                    <option value="Tiền Giang">Tiền Giang</option>
                                    <option value="Bến Tre">Bến Tre</option>
                                    <option value="Trà Vinh">Trà Vinh</option>
                                    <option value="Vĩnh Long">Vĩnh Long</option>
                                    <option value="Đồng Tháp">Đồng Tháp</option>
                                    <option value="An Giang">An Giang</option>
                                    <option value="Kiên Giang">Kiên Giang</option>
                                    <option value="Cần Thơ">Cần Thơ</option>
                                    <option value="Hậu Giang">Hậu Giang</option>
                                    <option value="Sóc Trăng">Sóc Trăng</option>
                                    <option value="Bạc Liêu">Bạc Liêu</option>
                                    <option value="Cà Mau">Cà Mau</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Địa chỉ</label>
                                <input id="address" name="address" type="text" value="{{ $user->address }}"
                                    class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="role">Mã tỉnh (*không bắt buộc)</label>
                                <input id="province_id" name="province_id" type="text"
                                    value="{{ $user->province_id }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="email">Mã huyện (*không bắt buộc)</label>
                                <input id="district_id" name="district_id" type="text"
                                    value="{{ $user->district_id }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="ward_id">Mã phường (*không bắt buộc)</label>
                                <input id="ward_id" name="ward_id" type="text" value="{{ $user->ward_id }}"
                                    class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <label for="productdesc">Mô tả người dùng</label>
                        <textarea class="form-control" id="productdesc" value="{{ $user->description }}" rows="4"></textarea>
                    </div>

                    <div class="p-4 border-top">
                        <div class="dropzone">
                            <div class="fallback">
                                <span style="color: red; font-size:15px; font-weight:600">* Bắt buộc phải cập nhật
                                    lại</span>
                                <input name="avatar" type="file" multiple="multiple" class="form-control border"
                                    style="height: 100; outline: none">
                                <img width="70" height="70" src="{{ asset($user->image) }}" alt="">
                            </div>
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="fa-solid fa-cloud-arrow-up"
                                        style="width: 56px; height:80px; font-size:40px"></i>
                                </div>
                                <h4 style="font-size: 20">Kéo thả file ảnh của bạn vào đây hoặc click vào để lựa chọn.
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4" style="margin-top:40px">
                        <div class="col text-right">
                            <a href="{{ route('user.index') }}" class="btn btn-danger"> <i
                                    class="fa-solid fa-xmark"></i> Hủy </a>
                            <button type="submit" class="btn btn-success"> <i class="fa-regular fa-floppy-disk"></i>
                                Xác nhận cập nhật </button>
                        </div> <!-- end col -->
                    </div> <!-- end row-->
                </form>
            </div>
        </div>
    </div>

    <div class="footer-styled">
        <div class="container-footer">
            <div class="row-styled">
                <div>
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © TrungDevTrai2k3.
                </div>
                <div>
                    <div class="text-sm-right d-none d-sm-block" style="margin-right: 150px">
                        Được sáng tạo bởi <i class="fa-solid fa-heart text-danger"></i> bởi <a
                            href="http://bookworld.com/public/homepage" target="_blank" class="text-reset">BookWorld
                            - TrungDevTrai2k3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- end row -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
