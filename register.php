<?php
function register()
{
    if (!empty($_POST)) {
        $hoten = $_POST['hoten'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        echo $hoten;
        //tạo kết nối tới database
        $connect = new mysqli('localhost',"root","","php_basic");
        // Cho phép PHP lưu unicode --database
        mysqli_set_charset($connect,"utf8");
    //Kiểm tra kết nối có thành công không
        if ($connect->connect_error){
            var_dump($connect->connect_error);
            die();

        }
        //Thực hiện truy vấn dữ liệu -> insert data vào database
    $query = "INSERT INTO STUDENT(FULL_NAME, USER_NAME, PASSSWORD, EMAIL, PHONE_NUMBER) VALUE ('".$hoten."','".$username."','".$password."','".$email."','".$phone_number." ')";
    mysqli_query($connect,$query);
        // Đóng kết nối
      $connect->close();
    }
    }
