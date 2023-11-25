<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide In From Right</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <button id="showButton">Hiển thị</button>
    <div class="slide-in-element">Nội dung của bạn ở đây</div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            /* Ngăn chặn tràn nội dung */
        }

        .slide-in-element {
            position: absolute;
            top: 10%;
            left:100%;
            /* Bắt đầu ở phải ngoài màn hình */
            /* transform: translate(-50%, -50%);     */
            z-index: 1;
            background-color: #3498db;
            color: #fff;
            width: 50%;
            height: 90%;
            border-radius: 4px;
            transition: left 0.5s ease;
            /* Hiệu ứng chuyển động trong 0.5 giây với hàm chuyển động là 'ease' */
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
</body>

</html>