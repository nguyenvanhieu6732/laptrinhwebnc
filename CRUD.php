<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Danh sách Người Dùng</title>
</head>
<body>

    <div class="container mt-5">
        <h2>Danh sách Người Dùng</h2>
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
                    while($row = $result->fetch_assoc()) {
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

</body>
</html>
