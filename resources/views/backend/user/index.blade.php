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
                <h5>{{config('apps.user.tableHeading')}}</h5>
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
                            <th>Avatar</th>
                            <th>Thông tin thành viên</th>
                            <th>Địa chỉ</th>
                            <th>Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="checkbox" value="" class="input-checkbox checkBoxItem" >
                            </td>
                            <td>
                                <span class="image">
                                    <img width="100px" height="100px" src="https://thanhnien.mediacdn.vn/uploaded/tuyenth/2020_08_19/h1_PCVA.jpg?width=500" alt="">
                                </span>
                            </td>
                            <td>
                                <div class="info-item name">
                                    Họ Tên: Trung Đẹp Trai
                                </div>
                                <div class="info-item email">
                                    Email: trungthpthy@gmail.com
                                </div>
                                <div class="info-item phone">
                                    Phone: 0796387080
                                </div>
                            </td>
                            <td>
                                <div class="address-item name">
                                    Địa chỉ: Số 79 Tống Trân
                                </div>
                                <div class="address-item email">
                                    Phường: Quang Trung
                                </div>
                                <div class="address-item phone">
                                    Thành phố: Hưng Yên
                                </div>
                            </td>
                            <td>
                                <input type="checkbox" class="js-switch" checked />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('backend.dashboard.component.script')

<script>
    $(document).ready(function(){
        var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, { color: '#1AB394' });
    });
</script>
