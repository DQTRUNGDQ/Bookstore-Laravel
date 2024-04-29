@include('backend.dashboard.component.head')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>{{ config('apps.product.title') }}</h2>
        <ol class="breadcrumb" style="margin-bottom: 10px">
            <li>
                <a href="{{ route('dashboard.index') }}">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('product.index') }}"><span>{{ config('apps.product.title') }}</span></a>
            </li>
            <li class="active">
                <strong>{{ config('apps.product.subHeadingAdd') }}</strong>
            </li>
        </ol>
    </div>
</div>

<div class="row" style="background: #fff; padding: 10px 80px;">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0" style="font-size:24px; color:#000">THÊM SÁCH</h4>
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
                <form action="{{ route('product.AddToDB') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên sách</label>
                        <input id="name" name="name" type="text" class="form-control">
                        @if ($errors->has('name'))
                            <span class="error-message">
                                * {{ $errors->first('name') }}
                            </span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Tác giả</label>
                                <input id="author" name="author" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Giá</label>
                                <input id="price" name="price" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Đánh giá (1-5)</label>
                                <input id="rating" name="rating" type="number" max="5" min="1"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Số lượng</label>
                                <input id="quantity" name="quantity" type="number" min="0"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>% giảm giá (0 - 100)</label>
                                <input id="discount_percent" name="discount_percent" type="number" min="0"
                                    max="100" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Ngày giao hàng dự kiến</label>
                                <input id="quantity" name="delivery_time" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
            </div>


            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="category_id">Id thể loại</label>
                        <input id="category_id" name="category_id" type="number" min="1" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Thể loại</label>
                        <select id="category" name="category" class="form-control select2">
                            <option>Lựa chọn</option>
                            <option value="Sách Văn Học">Sách Văn Học</option>
                            <option value="Sách Kinh Tế">Sách Kinh Tế</option>
                            <option value="Sách Thiếu Nhi">Sách Thiếu Nhi</option>
                            <option value="Sách Kỹ Năng Sống">Sách Kỹ Năng Sống</option>
                            <option value="Sách Bà Mẹ - Em Bé">Sách Bà Mẹ - Em Bé</option>
                            <option value="Sách Giáo Khoa - Giáo Trình">Sách Giáo Khoa - Giáo Trình</option>
                            <option value="Sách Tham Khảo">Sách Tham Khảo</option>
                            <option value="Sách Kiến Thức Tổng Hợp">Sách Kiến Thức Tổng Hợp</option>
                            <option value="Sách Khoa Học - Kỹ Thuật">Sách Khoa Học - Kỹ Thuật </option>
                            <option value="Sách Lịch Sử">Sách Lịch Sử</option>
                            <option value="Điện Ảnh - Nhạc - Họa">Điện Ảnh - Nhạc - Họa</option>
                            <option value="Truyện Tranh, Manga, Comic">Truyện Tranh, Manga, Comic</option>
                            <option value="Sách Tôn Giáo - Tâm Linh">Sách Tôn Giáo - Tâm Linh</option>
                            <option value="Sách Văn Hóa - Địa Lý - Du Lịch">Sách Văn Hóa - Địa Lý - Du Lịch
                            </option>
                            <option value="Sách Chính Trị - Pháp Lý">Sách Chính Trị - Pháp Lý</option>
                            <option value="Sách Nông - Lâm - Ngư Nghiệp">Sách Nông - Lâm - Ngư Nghiệp</option>
                            <option value="Sách Công Nghệ Thông Tin">Sách Công Nghệ Thông Tin</option>
                            <option value="Sách Y Học">Sách Y Học</option>
                            <option value="Tạp Chí - CatalogueBắc Giang">Tạp Chí - Catalogue</option>
                            <option value="Sách Tâm lý - Giới tính">Sách Tâm lý - Giới tính</option>
                            <option value="Sách Thường Thức - Gia Đình">Sách Thường Thức - Gia Đình</option>
                            <option value="Thể Dục - Thể Thao">Thể Dục - Thể Thao</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="subcategory">Thể loại cụ thể</label>
                        <input id="subcategory" name="subcategory" type="text" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group mb-0">
                <label for="productdesc">Đặc trưng cho cuốn sách</label>
                <textarea class="form-control" style="margin-top:10px" id="feature1" name="feature1" rows="4"
                    placeholder="Đặc trưng 1"></textarea>
                <textarea class="form-control" style="margin-top:10px" id="feature2" name="feature2" rows="4"
                    placeholder="Đặc trưng 2"></textarea>
                <textarea class="form-control" style="margin-top:10px" id="feature2" name="feature3" rows="4"
                    placeholder="Đặc trưng 3"></textarea>
            </div>

            <label for="mainImg">Ảnh sản phẩm (Ảnh chính)</label>
            <div class="p-4 border-top" style="margin-bottom: 20px">
                <div class="dropzone">
                    <div class="fallback">
                        <input name="image" type="file" multiple="multiple" class="form-control border"
                            style="height: 100; outline: none">
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

            <label for="">Hình thu nhỏ ở trang chi tiết (4 hình)</label>
            <div class="p-4 border-top" style="margin-top:10px">
                <div class="dropzone">
                    <div class="fallback">
                        <input name="thumbnail1" type="file" multiple="multiple" class="form-control border"
                            style="height: 100; outline: none">
                    </div>
                </div>
            </div>

            <div class="p-4 border-top" style="margin-top:10px">
                <div class="dropzone">
                    <div class="fallback">
                        <input name="thumbnail2" type="file" multiple="multiple" class="form-control border"
                            style="height: 100; outline: none">
                    </div>
                </div>
            </div>

            <div class="p-4 border-top" style="margin-top:10px">
                <div class="dropzone">
                    <div class="fallback">
                        <input name="thumbnail3" type="file" multiple="multiple" class="form-control border"
                            style="height: 100; outline: none">
                    </div>
                </div>
            </div>

            <div class="p-4 border-top" style="margin-top:10px">
                <div class="dropzone">
                    <div class="fallback">
                        <input name="thumbnail4" type="file" multiple="multiple" class="form-control border"
                            style="height: 100; outline: none">
                    </div>
                </div>
            </div>

            <div class="row mb-4" style="margin-top:40px">
                <div class="col text-right">
                    <a href="{{ route('product.index') }}" class="btn btn-danger"> <i class="fa-solid fa-xmark"></i>
                        Hủy
                    </a>
                    <button type="submit" class="btn btn-success"> <i class="fa-regular fa-floppy-disk"></i>
                        Xác nhận thêm </button>
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
