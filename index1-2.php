<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ĐĂNG NHẬP</title>
    <link rel="stylesheet" href="./assets/css/reset.css" />
    <link rel="stylesheet" href="./assets/css/styles1-2.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600&family=Nunito+Sans&display=swap" rel="stylesheet" />
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
</head>

<body>
    <main>
        <header class="header">
            <div class="content">
                <div class="menu-inner">
                    <!--------Tool left-------->
                    <div class="tool-left">
                        <!------bars----->
                        <label for="nav-tablet-input" class="btn-showmenu">
                            <i class="fa-solid fa-bars fa-xl"></i>
                        </label>
                        <input type="checkbox" name="" class="nav-input" id="nav-tablet-input" hidden>
                        <label class="nav-overlay" for="nav-tablet-input"></label>

                        <nav class="navbar-tablet">
                            <label for="nav-tablet-input" class="nav-tablet-close">
                                <i class="fa-solid fa-xmark"></i>
                            </label>
                            <ul class="menu">
                                <li>
                                    <a href="./index.php">TRANG CHỦ</a>
                                </li>
                                <li>
                                    <a href="./index2.php">GIÀY</a>

                                </li>
                                <li>
                                    <a href="./index3.php">TÚI XÁCH</a>

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
                                <hr>
                                <li>
                                    <a href="./index1-2.php">ĐĂNG NHẬP</a>
                                </li>
                                <li>
                                    <a href="./index1-1.php">ĐĂNG KÝ</a>
                                </li>
                            </ul>

                        </nav>
                        <!---- Logo ----->
                        <div class="logo">
                            <a href="./index.php">
                                <img src="./assets/img/logo.jpg" alt="Home" />
                            </a>
                        </div>
                    </div>
                    <!----- Search wrap ------>
                    <div class="search-wrap">
                        <button type="submit" class="search-button">
                            <i class="fa-solid fa-magnifying-glass fa-xl" style="color: #545"></i>
                        </button>
                        <input type="text" placeholder="Tìm kiếm" />
                    </div>
                    <!---- Tool right ----->
                    <div class="tool-right">
                        <div class="search-mobi">
                            <i class="fa-solid fa-magnifying-glass fa-xl" style="color: #545"></i>
                        </div>
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
                            <i class="fa-solid fa-bag-shopping fa-2x cart-img"></i>
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
                                    <a href="./index2.php">GIÀY THỂ THAO</a>
                                </li>
                                <li>
                                    <a href="./index2.php">GIÀY SCANDALS</a>
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
                                    <a href="./index3.php">TÚI XÁCH CÔNG SỞ</a>
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
        <hr>

        <!------------form-login------------->
        <div class="form-login">
            <h1 class="heading-login">ĐĂNG NHẬP</h1>
            <form action="" method="post" id="user-sign-up">
                <ul>
                    <li>
                        <input type="text" id="email" name="Email" placeholder="Email" value required>
                    </li>
                    <li>
                        <input type="password" id="passWord" name="Pass" placeholder="Mật khẩu" value required>
                    </li>
                    <li>
                        <input type="submit" id="action-btn" value="ĐĂNG NHẬP" required>
                    </li>
                </ul>
            </form>

            <div class="text-line">Hoặc đăng nhập bằng...</div>
            <div class="login">
                <div class="login-w-f login-btn">
                    <a href="https://www.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjk4NjkzMjk1LCJjYWxsc2l0ZV9pZCI6MzgxMjI5MDc5NTc1OTQ2fQ%3D%3D" class="btn-login">
                        <span><i class="fa-brands fa-square-facebook fa-lg"></i>
                        </span>
                        <span>Facebook</span>
                    </a>
                </div>

                <div class="login-w-g login-btn">
                    <a href="https://myaccount.google.com/?hl=vi" class="btn-login">
                        <span><i class="fa-brands fa-google"></i>
                        </span>
                        <span>Google</span>
                    </a>
                </div>
            </div>
            <div class="get-password">
                <a href="index1-2.php">Đăng nhập</a>
                <a href="#!">Quên mật khẩu</a>
            </div>
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
                        <div class="title-group"> CHÍNH SÁCH </div>
                        <ul>
                            <li>
                                <a href="#!"> Chính sách bảo mật</a>
                            </li>
                            <li>
                                <a href="#!">Ưu đãi khách hàng thân thiết</a>
                            </li>
                            <li>
                                <a href="#!"> Chính sách bảo hành trọn gói</a>
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
                        <div class="title-group contact">KẾT NỐI VỚI CHÚNG TÔI</div>
                        <a href="#!"><i class="fa-brands fa-facebook fa-xl"></i></a>
                        <a href="https://www.instagram.com/zunglt/"> <i class="fa-brands fa-instagram fa-xl"></i></a>
                        <a href="#!"><i class="fa-brands fa-google fa-xl"></i></a></i><br>
                        <a href="#!"><i class="fa-solid fa-phone fa-xl"></i> 1900.2812</a>
                        <div class="title-group">PHƯƠNG THỨC THANH TOÁN</div>
                        <a href="#!"><i class="fa-brands fa-google-pay fa-2x"></i></a>
                        <a href="#!"><i class="fa-brands fa-cc-visa fa-2x"></i></a>
                        <a href="#!"><i class="fa-brands fa-cc-amazon-pay fa-2x"></i></a>
                    </div>
                </div>
            </div>
            <!----------footer-bottom------------>
            <div class="footer-bottom">
                <p>Chi nhánh Hà Nội: 102 Thái Thịnh, Đống Đa, Hà Nội.</p>
                <p> Chi nhánh Sài Gòn: Phường 14, Quận 10, Thành phố Hồ Chí Minh</p>
            </div>
        </footer>
    </main>
    <script src="https://kit.fontawesome.com/4f45c5a9f5.js" crossorigin="anonymous">
    </script>

    <!-- BACKEND PHP -->
    <?php include("./config/Login.php") ?>
</body>

</html>