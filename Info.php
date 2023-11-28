<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meniture</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600&family=Nunito+Sans&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/reset.css" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./assets/css/Info.css" />
</head>

<body>
    <!-- Header -->
    <?php
        include("./admin/header.php");
        ?>
    <hr />
    <main>
        <!-- Breadcumb -->
        <div class="content">
            <div class="breadcrumb">
                <ul class="navigation">
                    <li><a href="./index.html">Trang chủ</a></li>
                    <li><a href="./index2.html">Giày</a></li>
                    <li><a href="#!">Giày Sandals</a></li>
                    <li><a href="#!">SANDAL DA THẬT GÓT 7P</a></li>
                </ul>
            </div>
            <div class="info">
                <div class="group-image">
                    <div class="list-image">
                        <a href="https://pos.nvncdn.net/f0fdc3-116319/ps/20220321_SwNzo6hXHzMdW6L9HIcxwxdd.jpg"
                            class="item">
                            <img src="https://pos.nvncdn.net/f0fdc3-116319/ps/20220321_SwNzo6hXHzMdW6L9HIcxwxdd.jpg"
                                alt="" />
                        </a>
                        <a href="https://pos.nvncdn.net/f0fdc3-116319/ps/20220321_v0tWdek9bhDh13UbA3KAKeAq.jpg"
                            class="item">
                            <img src="https://pos.nvncdn.net/f0fdc3-116319/ps/20220321_v0tWdek9bhDh13UbA3KAKeAq.jpg"
                                alt="" />
                        </a>
                        <a href="https://pos.nvncdn.net/f0fdc3-116319/ps/20220321_cf0nMUX81gGo7K4kaXl1er3w.jpg"
                            class="item">
                            <img src="https://pos.nvncdn.net/f0fdc3-116319/ps/20220321_cf0nMUX81gGo7K4kaXl1er3w.jpg"
                                alt="" />
                        </a>
                    </div>
                </div>
                <div class="product-info">
                    <h1 class="title-product">
                        SANDAL BÍT MŨI DA BÓNG GÓT MIKA
                    </h1>
                    <span class="product-price">290,000 ₫</span>
                    <div class="group-option">
                        <div class="title">
                            Kích cỡ <span class="change">Tất cả</span>
                        </div>
                        <ul class="list-size">
                            <li>38</li>
                            <li>39</li>
                        </ul>
                    </div>
                    <div class="product-quantity">
                        <div class="title">Số lượng</div>
                        <div class="qty-content">
                            <div class="number-minus item-number">-</div>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="250" />
                            <div class="number-plus item-number">+</div>
                        </div>
                    </div>
                    <div class="addToCart">
                        <a href="#!" class="">THÊM VÀO GIỎ HÀNG</a>
                    </div>
                    <div class="promotion-content">
                        <div class="item-promotion">
                            <img src="https://web.nvnstatic.net/tp/T0333/img/tmp/delivery-h.png" alt="" />
                            <p class="text">
                                Miễn phí vận chuyển toàn quốc cho đơn hàng
                                từ 500.000đ (Duy nhất ngày 27.04.2020)
                            </p>
                        </div>
                        <div class="item-promotion">
                            <img src="https://web.nvnstatic.net/tp/T0333/img/tmp/gift-h.png" alt="" />
                            <p class="text">
                                Tặng ngay mặt nạ ngủ dưỡng ẩm Laneige trị giá 250.000đ cho đơn hàng từ 800.000đ
                            </p>
                        </div>
                        <div class="item-promotion">
                            <img src="https://web.nvnstatic.net/tp/T0333/img/tmp/call-h.png" alt="" />
                            <p class="text">
                                1800 6909 - Hotline đặt hàng (Miễn cước, 8h30 - 22h)
                            </p>
                        </div>
                        <div class="item-promotion">
                            <img src="https://web.nvnstatic.net/tp/T0333/img/tmp/delivery-h.png" alt="" />
                            <p class="text">
                                Giao hàng nhanh trên toàn quốc
                            </p>
                        </div>
                        <div class="item-promotion">
                            <img src="https://web.nvnstatic.net/tp/T0333/img/tmp/payment-h.png" alt="" />
                            <p class="text">
                                Thanh toán tiện lợi với nhiều hình thức
                            </p>
                        </div>
                        <div class="item-promotion">
                            <img src="https://web.nvnstatic.net/tp/T0333/img/tmp/guarantee-h.png" alt="" />
                            <p class="text">
                                Bảo hành sản phẩm trọn đời (trừ mắt kính, thắt lưng)
                            </p>
                        </div>
                        <div class="item-promotion">
                            <img src="https://web.nvnstatic.net/tp/T0333/img/tmp/return-h.png" alt="" />
                            <p class="text">
                                Miễn phí đổi sản phẩm trong 7 ngày (trừ mắt kính, thắt lưng)
                            </p>
                        </div>
                    </div>
                    <div class="description">
                        <h2>Mô tả sản phẩm</h2>
                        <p class="text">Thiết kế da bóng vân cá sấu sang trọng, nữ tính</p>
                        <p class="text">Chất liệu da bền đẹp ,dễ vệ sinh</p>
                        <p class="text">Gót nhọn thanh lịch cho dáng đi uyển chuyển, quý phái.</p>
                    </div>
                </div>
            </div>
            <div class="content-product">
                <ul class="head">
                    <li><a href="#!">THÔNG TIN CHI TIẾT</a></li>
                    <li><a href="#!">HƯỚNG DẪN CHỌN SIZE</a></li>
                </ul>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <script src="./assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/4f45c5a9f5.js" crossorigin="anonymous"></script>

    <?php
    include("./admin/footer.php");
    ?>
</body>

</html>