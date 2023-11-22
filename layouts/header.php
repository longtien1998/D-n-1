
<?php 
    session_start() ;
    include './config/connect.php';
    include './thuvien/user.php';
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
        $user= 'Admin <a class="user" href="/admin/index.php">'.$_SESSION["user"] . '</a> <a href="/index.php?action=logout">Đăng xuất</a>';
    } else {
        $user='Nhân Viên <a class="user" href="/admin/index.php">'.$_SESSION["user"] . '</a> <a href="/index.php?action=logout">Đăng xuất</a>';
    }
} else  $user = '<a href="/index.php?action=login">Đăng nhập</a>'; 
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
        <div class="row border-bottom p-2">
            <div class="row col-lg-9">
                <div class="mx-3">
                    <a href="https://maps.app.goo.gl/fh5dNJN5qoVMQett6" target="_blank">
                        <i class="fa-solid fa-location-dot" style="color: #000000;"></i>
                        80 Bạch Đằng, Hải Châu 1, Hải Châu, Đà Nẵng 550000, Việt Nam
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
                <span>Xin Chào</span>
                <i class="fa-regular fa-circle-user fa-flip" style="color: #050505; font-size: 25px;"></i>
                    <!-- <a href="/index.php?action=login">Đăng nhập</a> -->
                    <?php echo $user; ?>
                </div>
            </div>
        </div>
        <header class="card-header row justify-content-around mr-0">
            <div class=" logo mx-5 text-center">
                <a href="">
                    <h1>BONCHA</h1>
                    <p>Best - Hotel</p>
                </a>
            </div>
            <div class="navbar align-content-center">
                <a href="/index.php?action=home" class="text-black-50 text-uppercase lead m-4">Trang chủ</a>
                <a href="/index.php?action=phong" class="text-black-50 text-uppercase lead m-4">Trang</a>
                <a href="/index.php?action=viewphong" class="text-black-50 text-uppercase lead m-4">Phòng</a>
                <a href="/index.php?action=home" class="text-black-50 text-uppercase lead m-4">Nhà Hàng & Bar</a>
                <a href="/index.php?action=home" class="text-black-50  text-uppercase lead m-4">Tiện nghi</a>
                <a href="/index.php?action=home" class="text-black-50 text-uppercase lead m-4">Giới thiệu</a>
                <a href="/index.php?action=home" class="text-black-50 text-uppercase lead m-4">Liên lạc</a>
            </div>
            <div class="btn-outline-warning align-self-center ">
                <button type="submit" class=" text-dark  border-warning bg-transparent text-black-50 text-uppercase lead p-3 px-5" name="search-on">Đặt phòng</button>
            </div>
        </header>