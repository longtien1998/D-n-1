<?php
    // xử lý yêu cầu đăng kí khi đẩy form
    $fullname = '';
    $username = '';
    $email = '';
    $message = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // LẤY THÔNG TIN TỪ FORM
        $fullname = $_POST["fullname"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $img = './uploads/user.png';

        // kiểm tra người dùng đã tồn tại hay chưa
        $conn = connect_db();
        $check_query = "SELECT *FROM useradmin WHERE username = '$username'";
        $result = $conn->query($check_query);
        if ( $result->num_rows >0 ) {
            echo' <h3 class="section-title text-center px-4"><span class="px-2 ">tài khoản đã đăng kí</span></h3>';
        } else {
            // thêm tài khoản vào cơ sở dữ liệu
            
            $insert_query = "INSERT INTO useradmin (fullname,username,phone, password, email,urlimage) VALUES ('$fullname', '$username','$phone', '$password', '$email','$img')";
            if ($conn->query($insert_query) == TRUE) {
                $message = '<h2 class="section-title text-center px-5" style="color: green;"><span class="px-2">Đăng ký thành công</span></h2>';
            } else {
                $message = ' <h2 class="section-title text-center px-5" style="color: red;"><span class="px-2">Đăng ký thất bại</span></h2>';
            }
        }
    }

    // đóng kết nối
?>