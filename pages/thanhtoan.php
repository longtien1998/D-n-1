<?php

//nếu kiểm tra cái post ['thanh toan] và được click 
if ((isset($_POST['thanhtoan'])) && ($_POST['thanhtoan'])) {
    //thì lấy dữ liệu
    $tongdonhang = $_POST['tongdonhang'];
    $hoten = $_POST['hoten'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $pttt = $_POST['pttt'];
    $madh = "DH" . rand(1000000, 9999999);
    $_SESSION['madh'] = $madh;
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $currentDateTime = date('Y-m-d h:i:s');
    // echo $currentDateTime;
    // tạo đơn hàng
    //và trả về 1 id đơn hàng
    $iddh = taodonhang($madh, $tongdonhang, $pttt, $hoten, $tel, $email, $currentDateTime);
    $_SESSION['iddh'] = $iddh;
    if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
        foreach ($_SESSION['giohang'] as $item) {
            addtocart($iddh, $item[0], $item[1], $item[2], $item[3], $item[4], $item[5], $item[6], $item[8], $item[6]*$item[7]* $item[8],$currentDateTime);
        }
        unset($_SESSION['giohang']);
        header("Location: /index.php?action=thanhtoan");
    }
}
?>