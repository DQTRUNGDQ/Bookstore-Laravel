@include('backend.dashboard.component.head')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>{{ config('apps.product.title') }}</h2>
        <ol class="breadcrumb" style="margin-bottom: 10px">
            <li>
                <a href="{{ route('dashboard.index') }}">Dashboard</a>
            </li>
            <li class="active">
                <strong>{{ config('apps.product.title') }}</strong>
            </li>
        </ol>
    </div>
</div>

<div class="row mb20 mt20">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <div class="actions">
                    <h5>{{ config('apps.user.tableHeading') }}</h5>
                    <div>
                        <a href="#" class="btn btn-primary">
                            <i class="fa-solid fa-file-export"></i>
                            <span>Xuất Excel</span>

                        </a>
                        <a href="{{ route('product.add') }}" class="btn btn-success">
                            <i class="fa-solid fa-circle-plus"></i>
                            <span>Thêm một sản phẩm mới</span>
                        </a>
                    </div>
                </div>

                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a></li>
                        <li><a href="#">Config option 2</a></li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" value ="" id="checkAll" class="input-checkbox">
                            </th>
                            <th>#</th>
                            <th style="width: 120px">Ảnh</th>
                            <th style="width: 220px">Tên</th>
                            <th>Ngày tạo</th>
                            <th style="width: 320px">Thông tin cơ bản</th>
                            <th style="width: 320px">Thông tin chi tiết</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    <input type="checkbox" value="" class="input-checkbox checkBoxItem">
                                </td>
                                <td>
                                    {{ $product->id }}
                                </td>
                                <td>
                                    <img width="100px" height="100px" src="{{ asset($product->image) }}"
                                        alt="">
                                </td>
                                <td>
                                    <a href="#" class="image img-cover">

                                        <span>{{ $product->name }}</span>
                                    </a>
                                </td>
                                <td>
                                    {{ $product->created_at }}
                                </td>
                                <td>
                                    <div class="info-item author">
                                        <strong>Tác giả:</strong>{{ $product->author }}
                                    </div>
                                    <div class="info-item phone">
                                        <strong>danh mục</strong>{{ $product->category }}
                                    </div>
                                    <div class="info-item phone">
                                        <strong>thể loại</strong>{{ $product->subcategory }}
                                    </div>

                                </td>
                                <td>
                                    @foreach ($productDetails as $productDetail)
                                        @if ($productDetail->product_id == $product->id)
                                            <div class="info-item">
                                                <strong>Nhà phát hành</strong>{{ $productDetail->issuingcompany }}
                                            </div>
                                            <div class="info-item">
                                                <strong>Phiên bản</strong>{{ $productDetail->versiontype }}
                                            </div>
                                            <div class="info-item">
                                                <strong>Ngày xuất bản</strong>{{ $productDetail->publicationdate }}
                                            </div>
                                            <div class="info-item">
                                                <strong>Kích thước</strong>{{ $productDetail->size }}
                                            </div>
                                            <div class="info-item">
                                                <strong>Dịch giả</strong>{{ $productDetail->translator }}
                                            </div>
                                            <div class="info-item">
                                                <strong>Loại bìa</strong>{{ $productDetail->covertype }}
                                            </div>
                                            <div class="info-item">
                                                <strong>Số trang</strong>{{ $productDetail->pages }}
                                            </div>
                                            <div class="info-item">
                                                <strong>Ngôn ngữ</strong>{{ $productDetail->language }}
                                            </div>
                                            <div class="info-item">
                                                <strong>Nhà xuất bản</strong>{{ $productDetail->publishingcompany }}
                                            </div>
                                        @endif
                                    @endforeach

                                </td>
                                <td>
                                    <div class="action">
                                        <a href="{{ route('product.edit', ['id' => $product->id]) }}" class="settings">
                                            <i class="fa-solid fa-gear"></i>
                                        </a>
                                        <a href="{{ route('product.delete', ['id' => $product->id]) }}" class="delete">
                                            <i class="fa-solid fa-circle-xmark"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="clear-fix">
                    <div class="hint-text">
                        Hiển thị
                        <b>1</b>
                        trên
                        <b>1</b>
                        Mục
                    </div>
                    <ul class="pagination">
                        <li class="page-item disable">
                            <a href="#" class="page-link">Trước đó</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">2</a>
                        </li>
                        <li class="page-item active">
                            <a href="#" class="page-link">3</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">4</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">5</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">Tiếp theo</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



@include('backend.dashboard.component.script')

<script>
    $(document).ready(function() {
        var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, {
            color: '#1AB394'
        });
    });
</script>

<script src="temp/js/plugins/flot/jquery.flot.js"></script>
<script src="temp/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="temp/js/plugins/flot/jquery.flot.spline.js"></script>
<script src="temp/js/plugins/flot/jquery.flot.resize.js"></script>
<script src="temp/js/plugins/flot/jquery.flot.pie.js"></script>
<script src="temp/js/plugins/flot/jquery.flot.symbol.js"></script>
<script src="temp/js/plugins/flot/jquery.flot.time.js"></script>
<script src="temp/js/plugins/peity/jquery.peity.min.js"></script>
<script src="temp/js/demo/peity-demo.js"></script>
<script src="temp/js/inspinia.js"></script>
<script src="temp/js/plugins/pace/pace.min.js"></script>
<script src="temp/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="temp/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="temp/js/plugins/easypiechart/jquery.easypiechart.js"></script>
<script src="temp/js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="temp/js/demo/sparkline-demo.js"></script>
