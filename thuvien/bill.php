<?php
session_start();
include "xulybking.php";
if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
    //lấy dữ liệu từ form để tạo đơn hàng
    $tenKH = $_POST['hoten'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $roomtype = $_POST['roomtype'];
    $thanhtoan = 0;


    //show form đơn hàng
    $thongtinkhachhang = 'Bạn đã đặt hàng thành công! <br> <h1>Mã Đơn Hàng Của bạn là: ' . $idbill . '</h1>
                            <h2>Thông Tin Nhận Hàng</h2>
                            <table class="thongtinkhachhang">
                            <tr>
                                <td width="28%">Họ Tên:</td>
                                <td>' . $tenKH . '</td>
                            </tr>
                            <tr>
                                <td>Địa Chỉ:</td>
                                <td>' . $email . '</td>
                            </tr>
                            <tr>
                                <td>Số Điện Thoại:</td>
                                <td>' . $tel . '</td>
                            </tr>
                            <tr>
                                <td>Ngày Đến:</td>
                                <td>' . $checkin . '</td>
                            </tr>
                            <tr>
                                <td>Ngày Đi:</td>
                                <td>' . $checkout . '</td>
                            </tr>
                            <tr>
                                <td>Loại Phòng:</td>
                                <td>' . $roomtype . '</td>
                            </tr>
                        </table> ';
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $thongtinkhachhang;
    ?>
</body>
</html>