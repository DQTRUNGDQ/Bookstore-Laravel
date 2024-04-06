@include('backend.dashboard.component.head')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>{{ config('apps.user.title') }}</h2>
        <ol class="breadcrumb" style="margin-bottom: 10px">
            <li>
                <a href="{{ route('dashboard.index') }}">Dashboard</a>
            </li>
            <li class="active">
                <strong>{{ config('apps.user.title') }}</strong>
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
                        <a href="{{ url('/admin/users/addUser') }}" class="btn btn-success">
                            <i class="fa-solid fa-circle-plus"></i>
                            <span>Thêm một người dùng mới</span>
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
                            <th style="width: 320px">Tên</th>
                            <th>Ngày tạo</th>
                            <th>Thông tin thành viên</th>
                            <th>Vai trò</th>
                            <th>Tình trạng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    <input type="checkbox" value="" class="input-checkbox checkBoxItem">
                                </td>
                                <td>
                                    {{ $user->id }}
                                </td>
                                <td>
                                    <a href="#" class="image img-cover">
                                        <img width="100px" height="100px" src="{{ asset($user->image) }}"
                                            alt="">
                                        <span>{{ $user->name }}</span>
                                    </a>
                                </td>
                                <td>
                                    {{ $user->created_at }}
                                </td>
                                <td>
                                    <div class="info-item email">
                                        <strong>Email:</strong>{{ $user->email }}
                                    </div>
                                    <div class="info-item phone">
                                        <strong>SĐT</strong>{{ $user->phone }}
                                    </div>
                                    <div class="info-item phone">
                                        <strong>Ngày sinh</strong>{{ $user->birthday }}
                                    </div>
                                    <div class="info-item">
                                        <strong>Địa chỉ</strong>{{ $user->address }}
                                    </div>
                                </td>
                                <td>
                                    <div class="address-item role">
                                        {{ $user->role }}
                                    </div>
                                </td>
                                <td>
                                    {{-- <input type="checkbox" class="js-switch" checked /> --}}
                                </td>
                                <td>
                                    <div class="action">
                                        <a href="{{ route('user.edit', ['id' => $user->id]) }}" class="settings">
                                            <i class="fa-solid fa-gear"></i>
                                        </a>
                                        <a href="{{ route('user.delete', ['id' => $user->id]) }}" class="delete">
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
