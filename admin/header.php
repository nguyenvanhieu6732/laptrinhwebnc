<!--------------Modal Image-------------->

<!----------------Header------------>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="script.js"></script>


<header class="header">
    <div class="content">
        <div class="menu-inner">
            <!--------Tool left-------->
            <div class="tool-left">
                <!------bars----->
                <label for="nav-tablet-input" class="btn-showmenu">
                    <i class="fa-solid fa-bars fa-xl"></i>
                </label>

                <input type="checkbox" name="" class="nav-input" id="nav-tablet-input" hidden />
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
                        <hr />
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
                    <button id="showButton">
                        <i class="fa-solid fa-bag-shopping fa-2x cart-img"></i>
                    </button>


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
<div class="slide-in-element">
    <div class="container mt-5">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Kết nối đến cơ sở dữ liệu
                $servername = "Localhost";
                $username = "root";
                $password = "";
                $dbname = "Login";

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Kiểm tra kết nối
                if ($conn->connect_error) {
                    die("Kết nối không thành công: " . $conn->connect_error);
                }

                // Lấy dữ liệu từ cơ sở dữ liệu
                $sql = "SELECT id, UserName, PassWord FROM users";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Xuất dữ liệu từ mỗi hàng
                    $stt = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<th scope='row'>" . $stt . "</th>";
                        echo "<td>" . $row["UserName"] . "</td>";
                        echo "<td>" . $row["PassWord"] . "</td>";
                        echo "</tr>";
                        $stt++;
                    }
                } else {
                    echo "<tr><td colspan='3'>Không có dữ liệu</td></tr>";
                }

                // Đóng kết nối
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</div>
<style>
    #showButton {
        background-color: #fff;
        border: 0;
    }

    body {
        /* overflow: hidden; */
        z-index: 1;
    }

    .slide-in-element {
        position: fixed;
        top: 10%;
        left: 100%;
        z-index: 1;
        background-color: #fff;
        color: #000;
        width: 50%;
        height: 90%;
        border-radius: 4px;
        transition: left 0.5s ease;
        box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var showButton = document.getElementById("showButton");
        var slideInElement = document.querySelector(".slide-in-element");

        showButton.addEventListener("click", function() {
            if (slideInElement.style.left === "50%") {
                slideInElement.style.left = "100%";
            } else {
                slideInElement.style.left = "50%";
            }
        });
    });
</script>
