<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ĐĂNG KÝ</title>
    <link rel="stylesheet" href="./assets/css/reset.css" />
    <link rel="stylesheet" href="./assets/css/styles1-1.css" />
    <link rel="stylesheet" href="./assets/js/jquery-3.4.1.min.js">
    <link rel="stylesheet" href="./assets/js/sweetalert2.all.min.js">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="./assets/js/jquery-3.4.1.min.js"></script>
    <script src="./assets/js/sweetalert2.all.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600&family=Nunito+Sans&display=swap" rel="stylesheet" />
</head>

<body >
    <main>
    <?php
        include("./admin/header.php");
    ?>
        <hr />
        <!------------form-login------------->
        <form action="" method="post">

            <div class="form-login">
                <h1 class="heading-login">ĐĂNG KÝ THÀNH VIÊN</h1>
                <form action="" method="post">
                    <ul>
                        <li>
                            <input type="text" id="fullName" name="fullName" placeholder="Họ và Tên" oninput="validateName(this)" required />
                        </li>
                        <li>
                            <input type="text" id="email" name="email" placeholder="Email" value oninput="validateEmail(this.value)" required />
                        </li>
                        <li>
                            <input type="password" id="passWord" name="passWord" placeholder="Mật khẩu (gồm 8 ký tự bao gồm số, chữ cái, ký tự đặc biệt)" value oninput="validatePass(this)" required />
                        </li>
                        <li>
                            <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Điện thoại" value oninput="validatePhone(this)" required />
                        </li>
                        <li>
                            <input type="submit" name="submit" class="action-btn" value="ĐĂNG KÝ" required />
                        </li>
                    </ul>
                </form>
        </form>

        <div class="text-line">Hoặc đăng nhập bằng...</div>
        <div class="login">
            <div class="login-w-f login-btn">
                <a href="#!" class="btn-login">
                    <span>
                        <i class="fa-brands fa-square-facebook fa-lg"></i>
                    </span>
                    <span>Facebook</span>
                </a>
            </div>

            <div class="login-w-g login-btn">
                <a href="#!" class="btn-login">
                    <span><i class="fa-brands fa-google"></i> </span>
                    <span>Google</span>
                </a>
            </div>
        </div>
        <div class="get-password">
            <a href="">Đăng nhập</a>
            <a href="#!">Quên mật khẩu</a>
        </div>
        </div>

        <!-- ---------footer--------- -->
<?php
    include("./admin/footer.php");
?>
    </main>
    <script src="https://kit.fontawesome.com/4f45c5a9f5.js" crossorigin="anonymous"></script>
    <script src="./assets/js/main1-1.js"></script>
<?php
    include("./config/SignUp.php");
?>

    
</body>

</html>