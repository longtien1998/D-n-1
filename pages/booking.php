<?php
session_start();
include "thuvien.php";
//tạo giỏ hàng
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
//xóa giỏ hàng
if (isset($_GET['delecart']) && ($_GET['delecart'] == 1)) unset($_SESSION['giohang']);
//xóa sản phâm trong giỏ hàng
if (isset($_GET['delid']) && ($_GET['delid'] >= 0)) {
    array_splice($_SESSION['giohang'], $_GET['delid'], 1);
}
//lấy dữ liệu từ form
if (isset($_POST['addcart']) && ($_POST['addcart'])) {
    $tenSp = $_POST['tenSp'];
    $hinh = $_POST['hinh'];
    $soluong = $_POST['soluong'];
    $giaSp = $_POST['giaSp'];

    $fl = 0; //kiểm tra sp có trong giỏ hàng kh

    for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
        if ($_SESSION['giohang'][$i][1] == $tenSp) {
            //nếu có sp có tên giống cart thì $fl = 1 sẽ đc đánh dấu là có sp
            $fl = 1;
            $soluongnew = $soluong + $_SESSION['giohang'][$i][3];
            $_SESSION['giohang'][$i][3] = $soluongnew;
            break;
        }
    }
    // nếu kh trùng sp trong giỏ hàng thì thêm mới
    if ($fl == 0) {
        //thêm mới sp vào giỏ hàng
        $sp = [$tenSp, $hinh, $soluong, $giaSp];
        $_SESSION['giohang'][] = $sp;
    }
    // var_dump($_SESSION['giohang']);

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <div class="content">
        <h1>King Phone</h1>
        <nav>
            <a href="index.php">Trang chủ</a>
            <a href="cart.php">Giỏ hàng</a>
        </nav>
        <div class="icon-z">
            <div class="icon">
                <a href="cart.php">
                    <i class="fas fa-shopping-cart" style="color: #fff;"></i>
                </a>
            </div>

            <div class="settings-icon">
                <i class="fas fa-bars"></i>
                <div class="caidat" id="setting-caidat">
                    <a href="user.php">tài khoản cá nhân</a>
                    <a href="logout.php" title="Logout">Đăng xuất</a>
                </div>
                </a>
            </div>
        </div>

    </div>

    <div class="container">
        <form action="../thuvien/bill.php"  method="post">

            <h2>Thông Tin Nhận Hàng</h2>
            <table>
                <tr>
                    <td>Họ Tên:</td>
                    <td><input class="a1" type="text" name="hoten" placeholder="Nhập họ tên"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input class="a2" type="text" name="email" placeholder="Nhập địa chỉ"></td>
                </tr>
                <tr>
                    <td>Số Điện Thoại:</td>
                    <td><input class="a3" type="text" name="tel" placeholder="Nhập số điện thoại"></td>
                </tr>
                <tr>
                    <td>Ngày Đến:</td>
                    <td><input class="a4" type="text" name="checkin"></td>
                </tr>
                <tr>
                    <td>Ngày Đi:</td>
                    <td><input class="a4" type="text" name="checkout"></td>
                </tr>
                <tr>
                    <td>Loại Phòng:</td>
                    <td><input class="a4" type="text" name="roomtype"></td>
                </tr>
            </table>

            <h2>Giỏ Hàng</h2>
            <table>
                <thead>
                    <tr style="text-align: center;">
                        <th>STT</th>
                        <th>Hình</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Đơn Giá</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                        <th>Xóa</th>
                    </tr>
                </thead>

                <?php echo showgiohang(); ?>
            </table>


            <input type="submit" value="Đồng ý đặt hàng" name="dongydathang" class="checkout-button">
            <a href="cart.php?delecart=1"><button class="checkout-button1">Xóa giỏ hàng</button></a>
            <button class="checkout-button2"><a class="a5" href="index.php">Tiếp tục mua hàng</a></button>

        </form>
    </div>
</body>

</html>