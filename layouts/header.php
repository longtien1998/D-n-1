<?php
session_start();
include './config/connect.php';
include './dao/pdo.php';
include './thuvien/user.php';
include './dao/userDAO.php';
include './dao/nhanvien.php';

?>

<?php
// khởi tạo biên session

// session_start();
// kiểm tra xem sessionuser có tồn tại không ?
$user = '<a href="/index.php?action=login">Đăng nhập</a>';
if (isset($_SESSION["user"])) {


    // Thực thi truy vấn
    $result = useradmin($_SESSION["user"]);

    // Kiểm tra kết quả trả về
    if (mysqli_num_rows($result) > 0) {

        // Lấy thông tin người dùng từ cơ sở dữ liệu
        $user = '<span>Xin Chào </span>Admin <a class="user" href="/index.php?action=user">' . $_SESSION["user"] . '</a> <a href="/index.php?action=logout">Đăng xuất</a>';
    } else {
        $result = usernhanvien($_SESSION["user"]);
        if (mysqli_num_rows($result) > 0) {
            $user = '<span>Xin Chào </span>Nhân Viên <a class="user" href="/index.php?action=usernv">' . $_SESSION["user"] . '</a> <a href="/index.php?action=logout">Đăng xuất</a>';
        } else $user = '<a href="/index.php?action=login">Đăng nhập</a>';
    }
} else  $user = '<i class="fa-regular fa-circle-user fa-flip" style="color: #050505; font-size: 25px;"></i><a href="/index.php?action=login">Đăng nhập</a>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BONCHA - Best Hotel</title>

    <link rel="stylesheet" href="../public/bootstrap.min.css">
    <!-- <script src="../public/bootstrap.js"></script> -->
    <script src="../content/js/app.js"></script>
    <script src="../content/js/room.js"></script>
    <link rel="stylesheet" href="../content/css/main.css">
    <link rel="stylesheet" href="../content/css/room.css">
    <link rel="stylesheet" href="../content/css/login_re.css">

    <script src="https://kit.fontawesome.com/db4ae7b83e.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- <div class="container-fluid"> -->

    <div class="row border-bottom p-2 mr-0">
        <div class="row col-lg-9">
            <div class="mx-3">
                <a href="https://maps.app.goo.gl/fh5dNJN5qoVMQett6" target="_blank">
                    <i class="fa-solid fa-location-dot" style="color: #000000;"></i>
                    260 Võ Nguyên Giáp, Phường Mỹ An, Ngũ Hành Sơn, Đà Nẵng 550000, Việt Nam
                </a>
            </div>
            <div class="mx-3">
                <a href="">
                    <i class="fa-solid fa-phone-volume" style="color: #000000;"></i>
                    Liên hệ trực tiếp với chúng tôi tại (+84) 982 268 784
                </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="mx-3 ml-4">
                <?php echo $user; ?>
            </div>
        </div>

    </div>
    <header class="card-header row justify-content-around mr-0">
        <div class=" logo mx-5 text-center">
            <a href="/index.php">
                <h1>BONCHA</h1>
                <p>Best - Hotel</p>
            </a>
        </div>
        <div class="navbar align-content-center">
            <a href="/index.php?action=home" class="text-black-50 text-uppercase lead m-4">Trang chủ</a>
            <!-- <a href="/index.php?action=gioithieu" class="text-black-50 text-uppercase lead m-4">Giới thiệu</a> -->
            <a href="/index.php?action=phong" class="text-black-50 text-uppercase lead m-4">Phòng</a>
            <a href="/index.php?action=timphong" class="text-black-50 text-uppercase lead m-4">Tìm phòng</a>
            <a href="/index.php?action=nhahang" class="text-black-50  text-uppercase lead m-4">Nhà hàng & Bar</a>
            <a href="/index.php?action=service" class="text-black-50 text-uppercase lead m-4">Dịch Vụ</a>
            <a href="/index.php?action=contact" class="text-black-50 text-uppercase lead m-4">Liên lạc</a>
        </div>
        <div class=" align-self-center  ">
            <button class="custom-buy3 buy-3 nutmua"><span><a style="text-decoration: none; " href="/index.php?action=timphong"><span class="dat">ĐẶT NGAY</span></a></span></button>
        </div>
    </header>