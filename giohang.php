<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Danh sách Sản Phẩm</title>
</head>

<body>

    <div class="container mt-5 ">
        <h2>Danh sách Sản Phẩm</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Tên Sản Phẩm</th>
                    <th scope="col">Số Lượng</th>
                    <th scope="col">Size</th>
                    <th scope="col">Đơn Giá</th>
                    <th scope="col">Thành Tiền</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Kết nối đến cơ sở dữ liệu
                $servername = "Localhost";
                $username = "root";
                $password = "";
                $dbname = "meniture";

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Kiểm tra kết nối
                if ($conn->connect_error) {
                    die("Kết nối không thành công: " . $conn->connect_error);
                }
                // Lấy dữ liệu từ cơ sở dữ liệu
                $sql = "SELECT product.Url_Product, 
                product.NameProduct,
                cart.Quantity,
                cart.SizeProduct,
                product.PriceProduct
                FROM cart, product
                WHERE cart.IdProduct = product.IdProduct;
                ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Biến đếm số thứ tự
                    $count = 1;

                    // Xuất dữ liệu từ mỗi hàng
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<th scope='row'>" . $count . "</th>";
                        echo "<td><img src='" . $row["Url_Product"] . "' alt='Ảnh Sản Phẩm' style='max-width: 100px; border-radius: 16px; border:1px solid #ccc'></td>";
                        echo "<td>" . $row["NameProduct"] . "</td>";
                        echo "<td><input type='number' class='form-control' id='quantity' value='1' min='1' onchange='updatePrice()' style ='width:60px'></td>";
                        echo "<td><input type='number' class='form-control' value='35' min='35' max='45'  style ='width:60px'></td>";
                        echo "<td><input type='text' class='form-control' id='price' style ='width:100px' readonly></td>";

                        echo "<td>
                            <button class='btn btn-danger' 
                                onclick='deleteProduct(" . $row["NameProduct"] . ")'>
                                Xóa
                            </button>     
                        </td>";
                        echo "</tr>";
                        $count++;
                    }
                } else {
                    echo "<tr><td colspan='5'>Không có dữ liệu</td></tr>";
                }

                // Đóng kết nối
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    <script>
  function updatePrice() {
    // Lấy giá trị từ ô input quantity
    var quantity = document.getElementById("quantity").value;

    // Giả sử giá sản phẩm là 10 đồng, bạn có thể thay đổi giá trị này tùy thuộc vào yêu cầu của bạn
    var pricePerUnit = 10;

    // Tính toán giá tổng dựa trên số lượng và giá per unit
    var totalPrice = quantity * pricePerUnit;

    // Cập nhật giá vào ô input price
    document.getElementById("price").value = totalPrice.toFixed(2); // Giữ hai chữ số thập phân
  }
    </script>
</body>

</html>