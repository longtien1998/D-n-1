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
        $maKH ="KH".rand(10000,99999);

        // kiểm tra người dùng đã tồn tại hay chưa
        $conn = connect_db();
        $check_query = "SELECT *FROM user WHERE tenKhachHang = '$username'";
        $result = $conn->query($check_query);
        if ( $result->num_rows >0 ) {
            $message ='<h2 class="section-title text-center px-4"><span class="px-2 ">tài khoản đã đăng kí</span></h2>';
        } else {
            // thêm tài khoản vào cơ sở dữ liệu
            $insert_query ="INSERT INTO `user`(`maKhachHang`, `tenKhachHang`, `matKhau`, `email`, `hoTen`, `sDT`, `urlimage`) VALUES ('$maKH', '$username', '$password', '$email','$fullname','$phone','$img')";
            if ($conn->query($insert_query) == TRUE) {
                $message = '<h2 class="section-title text-center px-5" style="color: green;"><span class="px-2">Đăng ký thành công</span></h2>';
            } else {
                $message = ' <h2 class="section-title text-center px-5" style="color: red;"><span class="px-2">Đăng ký thất bại</span></h2>';
            }
        }
    }

    // đóng kết nối
?>