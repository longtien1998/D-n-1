<?php
// xử lý yêu cầu đăng kí khi đẩy form

$message = "";
if (isset($_GET['id'])) $id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // LẤY THÔNG TIN TỪ FORM
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    // $img = './uploads/user.png';

    // kiểm tra người dùng đã tồn tại hay chưa
    $conn = connect_db();
    $check_query = "UPDATE useradmin SET fullname='$fullname',username='$username',password='$password',email='$email',phone='$phone' WHERE id = '$id'";

    if (mysqli_query($conn, $check_query)) {
        $message = '<h2 class="section-title text-center px-5" style="color: green;"><span class="px-2">Update thành công</span></h2>';
    } else {
        // thêm tài khoản vào cơ sở dữ liệu

        $message = ' <h2 class="section-title text-center px-5" style="color: red;"><span class="px-2">Update thất bại</span></h2>';
    }
}

// đóng kết nối
