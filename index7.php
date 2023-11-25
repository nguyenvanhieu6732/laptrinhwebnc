<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>LIÊN HỆ</title>
        <link rel="stylesheet" href="./assets/css/reset.css" />
        <link rel="stylesheet" href="./assets/css/styles7.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500&family=Nunito+Sans&display=swap"
            rel="stylesheet"
        />
    </head>
    <body>
        <main>
            <header class="header">
                <div class="content">
                    <div class="menu-inner">
                        <!---- Logo ----->
                        <div class="logo">
                            <a href="./index.php">
                                <img src="./assets/img/logo.jpg" alt="Home" />
                            </a>
                        </div>
                        <!----- Search wrap ------>
                        <div class="search-wrap">
                            <button type="submit" class="search-button">
                                <i
                                    class="fa-solid fa-magnifying-glass fa-xl"
                                    style="color: #545"
                                ></i>
                            </button>
                            <input type="text" placeholder="Tìm kiếm" />
                        </div>
                        <!---- Tool right ----->
                        <div class="tool-right">
                            <div class="account">
                                <ul>
                                    <li>
                                        <a href="./index1-1.php">ĐĂNG KÝ</a>
                                        <span style="padding: 5px"> / </span>
                                    </li>
                                    <li>
                                        <a href="./index1-2.php">ĐĂNG NHẬP</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="cart">
                                <i
                                    class="fa-solid fa-bag-shopping fa-2x cart-img"
                                ></i>
                                <span class="badge">(0)</span>
                            </div>
                        </div>
                    </div>
                    <!------ Navigation ------->
                    <nav class="navbar">
                        <ul class="menu">
                            <li>
                                <a href="./index.php">TRANG CHỦ</a>
                            </li>
                            <li>
                                <a href="./index2.php">GIÀY</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="./index2.php">GIÀY CAO GÓT</a>
                                    </li>
                                    <li>
                                        <a href="./index2.php"
                                            >GIÀY THỂ THAO</a
                                        >
                                    </li>
                                    <li>
                                        <a href="./index2.php"
                                            >GIÀY SCANDALS</a
                                        >
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="./index3.php">TÚI XÁCH</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="./index3.php">TÚI XÁCH TAY</a>
                                    </li>
                                    <li>
                                        <a href="./index3.php"
                                            >TÚI XÁCH CÔNG SỞ</a
                                        >
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="./index4.php">KÍNH MẮT</a>
                            </li>
                            <li>
                                <a href="./index5.php">VÍ</a>
                            </li>
                            <li>
                                <a href="./index6.php">BLOG</a>
                            </li>
                            <li>
                                <a href="./index8.php">KHUYẾN MÃI</a>
                            </li>
                            <li>
                                <a href="./index7.php">LIÊN HỆ</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>
            <hr />

            <!-------infor_login------->
            <p
                style="
                    display: flex;
                    justify-content: center;
                    font-size: 18px;
                    color: #000;
                    font-weight: 500;
                "
            >
                LIÊN HỆ
            </p>
            <div class="width-form-login">
                <label for="hoten">
                    <span class="span-login">Họ và tên</span>
                    <input type="text" id="hoten" value="" />
                </label>
                <label for="email">
                    <span class="span-login">Email</span>
                    <input type="email" id="email" value="" />
                </label>
                <label for="dienthoai">
                    <span class="span-login">Điện thoại</span>
                    <input type="text" id="dienthoai" value="" />
                </label>
                <label for="diachi">
                    <span class="span-login">Địa chỉ</span>
                    <input type="text" id="diachi" value="" />
                </label>
                <label for="noidung">
                    <span class="span-login">Nội dung liên hệ </span>
                    <textarea
                        name=""
                        id="noidung"
                        cols="58"
                        rows="10"
                        style="border: 1px solid #ccc"
                    ></textarea>
                </label>
                <button class="Send" onclick="send()" > Gửi </button>
            </div>

            <!-- ---------footer--------- -->

            <footer class="footer">
                <!---------main footer--------->
                <div class="main-footer">
                    <div class="content container">
                        <div class="group-footer">
                            <div class="title-group">CÔNG TY</div>
                            <ul>
                                <li>
                                    <a href="#!"> Giới thiệu</a>
                                </li>
                                <li>
                                    <a href="#!">Tuyển dụng</a>
                                </li>
                            </ul>
                        </div>
                        <div class="group-footer">
                            <div class="title-group">CHÍNH SÁCH</div>
                            <ul>
                                <li>
                                    <a href="#!"> Chính sách bảo mật</a>
                                </li>
                                <li>
                                    <a href="#!"
                                        >Ưu đãi khách hàng thân thiết</a
                                    >
                                </li>
                                <li>
                                    <a href="#!"
                                        >Chính sách bảo hành trọn gói</a
                                    >
                                </li>
                                <li>
                                    <a href="#!"> Chính sách giao nhận</a>
                                </li>
                                <li>
                                    <a href="#!"> Chính sách đổi sản phẩm</a>
                                </li>
                            </ul>
                        </div>
                        <div class="group-footer">
                            <div class="title-group">HỖ TRỢ KHÁCH HÀNG</div>
                            <ul>
                                <li>
                                    <a href="#!">Hướng dẫn mua hàng</a>
                                </li>
                                <li>
                                    <a href="#!">Tra cứu bảo hành</a>
                                </li>
                                <li>
                                    <a href="#!">Quy định về phiếu tặng</a>
                                </li>
                                <li>
                                    <a href="#!">Điều khoản sử dụng</a>
                                </li>
                            </ul>
                        </div>
                        <div class="group-footer">
                            <div class="title-group contact">
                                KẾT NỐI VỚI CHÚNG TÔI
                            </div>
                            <a href="#!">
                                <i class="fa-brands fa-facebook fa-xl"></i>
                            </a>
                            <a href="https://www.instagram.com/zunglt/">
                                <i class="fa-brands fa-instagram fa-xl"></i>
                            </a>
                            <a href="#!">
                                <i class="fa-brands fa-google fa-xl"></i>
                            </a>
                            <br />
                            <a href="#!">
                                <i class="fa-solid fa-phone fa-xl"></i>
                                1900.2812
                            </a>
                            <div class="title-group">
                                PHƯƠNG THỨC THANH TOÁN
                            </div>
                            <a href="#!">
                                <i class="fa-brands fa-google-pay fa-2x"></i>
                            </a>
                            <a href="#!">
                                <i class="fa-brands fa-cc-visa fa-2x"></i>
                            </a>
                            <a href="#!">
                                <i class="fa-brands fa-cc-amazon-pay fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!----------footer-bottom------------>
                <div class="footer-bottom">
                    <p>Chi nhánh Hà Nội: 102 Thái Thịnh, Đống Đa, Hà Nội.</p>
                    <p>
                        Chi nhánh Sài Gòn: Phường 14, Quận 10, Thành phố Hồ Chí
                        Minh
                    </p>
                </div>
            </footer>
        </main>
        <script src="./assets/js/main7.js"></script>
        <script
            src="https://kit.fontawesome.com/4f45c5a9f5.js"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
