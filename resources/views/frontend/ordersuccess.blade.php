<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('backend/CSS/style.css') }}" />
</head>

<body>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

        body {
            background-color: #eee;
            font-family: "Poppins", sans-serif;
            font-weight: 300
        }

        .cart {
            height: 100vh
        }

        .progresses {
            display: flex;
            align-items: center
        }

        .line {
            width: 76px;
            height: 6px;
            background: #63d19e
        }

        .steps {
            display: flex;
            background-color: #63d19e;
            color: #fff;
            font-size: 12px;
            width: 30px;
            height: 30px;
            align-items: center;
            justify-content: center;
            border-radius: 50%
        }

        .check1 {
            display: flex;
            background-color: #63d19e;
            color: #fff;
            font-size: 17px;
            width: 60px;
            height: 60px;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-bottom: 10px
        }

        .invoice-link {
            font-size: 15px
        }

        .order-button {
            height: 50px
        }

        .background-muted {
            background-color: #fafafc
        }
    </style>

</body>

</html>

<div class="container mt-4 mb-4">
    <div class="row d-flex cart align-items-center justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="d-flex justify-content-center border-bottom">
                    <div class="p-3">
                        <div class="progresses">
                            <div class="steps"> <span><i class="fa fa-check"></i></span> </div> <span
                                class="line"></span>
                            <div class="steps"> <span><i class="fa fa-check"></i></span> </div> <span
                                class="line"></span>
                            <div class="steps"> <span class="font-weight-bold">3</span> </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-md-6 border-right p-5">
                        <div class="text-center order-details">
                            <div class="d-flex justify-content-center mb-5 flex-column align-items-center"> <span
                                    class="check1"><i class="fa fa-check"></i></span> <span class="font-weight-bold">Cảm
                                    ơn {{ $order->customer_name }} đã đặt hàng tại BookWorld!</span> <small
                                    class="mt-2">Đơn hàng sẽ sớm được gửi đến bạn</small> <a href="#"
                                    class="text-decoration-none invoice-link">Đơn hàng của tôi</a> </div>
                            <a href="{{ route('auth.homepage') }}" style="text-decoration: none"><button
                                    class="btn btn-danger btn-block order-button">TIẾP TỤC MUA HÀNG</button></a>

                        </div>
                    </div>
                    <div class="col-md-6 background-muted">
                        <div class="p-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center"> <span><i
                                        class="fa fa-clock-o text-muted"></i> 3 ngày vận chuyển</span> <span><i
                                        class="fa fa-refresh text-muted"></i> Tối đa 2 lần chỉnh sửa</span> </div>
                            <div class="mt-3">
                                <h6 class="mb-0">Sản phẩm được đặt</h6>
                                @foreach ($selectedProducts as $item)
                                    <div class="packet-item-list">
                                        <div>
                                            <div class="packet-item-styled">
                                                <div class="item-icon">
                                                    <img width="64" height="64" src="{{ asset($item->image) }}"
                                                        alt="">
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-info_first-line">
                                                        <span class="item-info_product-name">
                                                            {{ $item->product_name }}
                                                        </span>
                                                    </div>
                                                    <div class="item-info_second-line">
                                                        <div class="item-info_qty">SL: x{{ $item->quantity }}</div>
                                                        <div class="item-info_price">
                                                            {{ number_format($item->price, 0, ',', '.') }}
                                                            <sup>₫</sup>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="row g-0 border-bottom">
                            <div class="col-md-6">
                                <div class="p-3 d-flex justify-content-center align-items-center"> <span>Tổng số
                                        lượng</span>
                                </div>
                            </div>
                            <div class="col-md-6 border-right">
                                <div class="p-3 d-flex justify-content-center align-items-center">
                                    <span>x{{ $totalQuantity }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 border-bottom">
                            <div class="col-md-6">
                                <div class="p-3 d-flex justify-content-center align-items-center"> <span>Tạm tính</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 d-flex justify-content-center align-items-center">
                                    <span>{{ number_format($totalPrice, 0, ',', '.') }}<sup>₫</sup></span>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 border-bottom">
                            <div class="col-md-6">
                                <div class="p-3 d-flex justify-content-center align-items-center"> <span>Phí vận
                                        chuyển</span> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 d-flex justify-content-center align-items-center">
                                    <span>{{ number_format($shippingFee, 0, ',', '.') }}<sup>₫</sup></span>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-6">
                                <div class="p-3 d-flex justify-content-center align-items-center">
                                    <span class="font-weight-bold">Tổng tiền phải trả
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 d-flex justify-content-center align-items-center">
                                    <span class="font-weight-bold">
                                        {{ number_format($totalPrice + $shippingFee, 0, ',', '.') }}
                                        <sup>₫</sup>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div> </div>
            </div>
        </div>
    </div>
</div>
