<?php

if ($_POST) {
    $username = $_POST['Email'];
    $password = $_POST['Pass'];
    $connect = mysqli_connect('localhost', 'root', '', 'meniture');
    $sql = "select * from Users where Email = '$username'";
    $result = $connect->query($sql)->fetch_assoc();
    if ($result['PassWord'] == $password) {
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Đăng Nhập Thành Công!',
            showConfirmButton: false,
            timer: 900
          })    
          
          setTimeout(function(){ 
            window.location.href = 'index.php'; 
            }, 800);
          </script>";
    } else {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Đăng Nhập Thất Bại!',
                showConfirmButton: false,
                timer: 900
          })  
          setTimeout(function(){ 
            window.location.href = 'index1-2.php'; 
            }, 800);
      </script>";
    }
    $connect->close();
}
?>