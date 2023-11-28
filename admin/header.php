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
                <a class="cart" href="./giohang.php">
                    <button id="showButton">
                        <i class="fa-solid fa-bag-shopping fa-2x cart-img"></i>
                    </button>
                </a>
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


