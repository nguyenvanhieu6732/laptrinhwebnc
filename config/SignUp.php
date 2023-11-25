<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $connect = mysqli_connect('localhost', 'root', '', 'login');

    $email = $_POST['email'];
    $password = $_POST['passWord'];

    $sqlexam  = "SELECT * FROM users WHERE username='$email'";
    $resultexam = mysqli_query($connect, $sqlexam);

    // Kiểm tra kết quả
    if (mysqli_num_rows($resultexam) > 0) {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Email đã được sử dụng!',
                showConfirmButton: false,
                timer: 1200
          })
          setTimeout(function(){ 
            window.location.href = 'index1-1.php'; 
            }, 1100);
          </script>";
    } else {

        $sql = "INSERT INTO users ( username, password) VALUES ( '$email', '$password')";
        $result = mysqli_query($connect, $sql);

        // Kiểm tra kết quả
        if ($result) {
            // Đăng ký thành công
            echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Đăng kí Thành Công!',
                showConfirmButton: false,
                timer: 900
              })    
              setTimeout(function(){ 
                window.location.href = 'index1-2.php'; 
                }, 800);
              </script>";
        }
    }
    mysqli_close($connect);
}
?>