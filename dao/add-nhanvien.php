<?php
// xử lý yêu cầu đăng kí khi đẩy form
$demnhanvien = dem_nhanvien()+1;
$fullname = "";
$username = "";
$password = "";
$email = "";
$phone = "";
$congviec = "";
$calamviec = "";
$ngayLamViec = "";
$message="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // LẤY THÔNG TIN TỪ FORM
    $manhanvien = $_POST['manhanvien'];
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $congviec = $_POST["congviec"];
    $calamviec = $_POST["calamviec"];
    $ngayLamViec = $_POST["ngayLamViec"];
    $img = './uploads/user.png';

    // kiểm tra người dùng đã tồn tại hay chưa
    $conn = connect_db();
    $check_query = "SELECT *FROM nhanvien WHERE tenDangNhap = '$username'";
    $result = $conn->query($check_query);
    if ($result->num_rows > 0) {
        echo ' <h3 class="section-title text-center px-4"><span class="px-2 ">tài khoản đã đăng kí</span></h3>';
    } else {
        // thêm tài khoản vào cơ sở dữ liệu

        $insert_query = "INSERT INTO nhanvien (maNhanVien,tenNhanVien,password,congViec,ngaylamViec,caLamViec,tenDangNhap,urlimage,email,phone) VALUES ('$manhanvien','$fullname', '$password','$congviec','$ngayLamViec','$calamviec', '$username', '$img','$email','$phone')";
        if ($conn->query($insert_query) == TRUE) {
            $message = '<h2 class="section-title text-center px-5" style="color: green;"><span class="px-2">Đăng ký thành công</span></h2>';
            header("Refresh:0; url=page2.php");
        } else {
            $message = ' <h2 class="section-title text-center px-5" style="color: red;"><span class="px-2">Đăng ký thất bại</span></h2>';
        }
    }
}

// đóng kết nối
