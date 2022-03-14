<?php
function register()
{
    if (!empty($_POST)) {
        $hoten = $_POST['hoten'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phone_number'];
        //tạo kết nối tới database
        $connect = new mysqli('localhost',"root","",'myDB');
        // Cho phép PHP lưu unicode --database
        mysqli_set_charset($connect,"utf8");
    //Kiểm tra kết nối có thành công không
        if ($connect->connect_error){
            var_dump($connect->connect_error);
            die("Connection failed: ". $connect->connect_error);
        } echo " Connection successfully";
//        // sql to create table
//        $sql = "CREATE TABLE MyGuests1 (
//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//fullname VARCHAR(30) NOT NULL,
//username VARCHAR(30) NOT NULL,
//password VARCHAR(50),
//email VARCHAR(30) ,
//phonenumber VARCHAR(30),
//reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//)";
//                if ($connect->query($sql) === TRUE) {
//            echo "Table MyGuests created successfully";
//        } else {
//            echo "Error creating table: " . $connect->error;
//        }
//        $connect->close();
//        $sql = "INSERT INTO MyGuests (FULLNAME, USERNAME, PASSSWORD, EMAIL, PHONENUMBER)
//                VALUES ('".$hoten."', '".$username."', '".$password."','".$email."','".$phonenumber."',)";
//        if (mysqli_query($connect, $sql)) {
//            echo "New record created successfully";
//        } else {
//            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
//        }

//        mysqli_close($connect);

 //sql to create table
//        $sql = "CREATE TABLE MyGuests3 (
//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//FULLNAME VARCHAR(30) NOT NULL,
//USERNAME VARCHAR(30) NOT NULL,
//PASSWORD VARCHAR(30) NOT NULL,
//EMAIL VARCHAR(50),
//PHONENUMBER VARCHAR(30) NOT NULL,
//
//reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//)";
//
//        if (mysqli_query($connect, $sql)) {
//            echo "Table MyGuests created successfully";
//        } else {
//            echo "Error creating table: " . mysqli_error($connect);
//        }
//
//        mysqli_close($connect);

        $sql = "INSERT INTO MyGuests2 (firstname, lastname, email)
VALUES ('".$hoten."', '".$username."', '".$password."')";

        if (mysqli_query($connect, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }

        mysqli_close($connect);


//
//        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com')";
//
//        if ($conn->query($sql) === TRUE) {
//            $last_id = $conn->insert_id;
//            echo "New record created successfully. Last inserted ID is: " . $last_id;
//        } else {
//            echo "Error: " . $sql . "<br>" . $conn->error;
//        }
//
//        $conn->close();

//        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com');";
//        $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('Mary', 'Moe', 'mary@example.com');";
//        $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('Julie', 'Dooley', 'julie@example.com')";
//
//        if (mysqli_multi_query($conn, $sql)) {
//            echo "New records created successfully";
//        } else {
//            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//        }
//
//        mysqli_close($conn);
    }
    }
