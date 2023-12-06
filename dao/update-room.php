<?php
if (isset($_GET['maphong'])) $maphong = $_GET['maphong'];
// xử lý yêu cầu đăng kí khi đẩy form

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // LẤY THÔNG TIN TỪ FORM
    $nameroom = $_POST["nameroom"];
    $maphong = $_POST["maphong"];
    $giaphong = $_POST["giaphong"];
    $loaiphong = $_POST["loaiphong"];



    $conn = connect_db();
    $check_query = "UPDATE room SET maPhong='$maphong',tenPhong='$nameroom',loaiPhong='$loaiphong',giaPhong='$giaphong',tThai='' WHERE id='$maphong'";
    if (mysqli_query($conn, $check_query)) {
        $message = '<h2 class="section-title text-center px-5" style="color: green;"><span class="px-2">Update thành công</span></h2>';
    } else {
        $message = ' <h2 class="section-title text-center px-5" style="color: red;"><span class="px-2">Update thất bại</span></h2>';
    }
}

// đóng kết nối
