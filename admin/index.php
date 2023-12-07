<?php
include "../config/connect.php";
include "../dao/pdo.php";
include "../dao/userDAO.php";
include "../dao/nhanvien.php";
include "../dao/khachhang.php";
include "../dao/xulydonhang.php";
include "../dao/don-hang.php";


include "../dao/room.php";

// include "../dao/tintuc.php";


include '../admin/layouts/header.php' ?>
<?php
if (!isset($_GET["action"])) $_GET["action"] = "index";

switch ($_GET["controller"]) {
    case 'user-admin':
        switch ($_GET["action"]) {
            case 'index':
                include './pages/users-admin/index.php';
                break;
            case 'new-admin':
                include './pages/users-admin/new.php';
                break;
            case 'updateAdmin':
                include './pages/users-admin/updateAdmin.php';
                break;
            default:
                include './pages/users-admin/index.php';
                break;
        }
        break;
    case 'user-nhanvien':
        switch ($_GET["action"]) {
            case 'index':
                include './pages/users-nhanvien/index.php';
                break;
            case 'new-nhanvien':
                include './pages/users-nhanvien/add-nhanvien.php';
                break;
            case 'updatenhanvien':
                include './pages/users-nhanvien/updatenhanvien.php';
                break;
            default:
                include './pages/users-nhanvien/index.php';
                break;
        }
        break;
    case 'quanlyroom':
        switch ($_GET["action"]) {
            case 'index':
                include './pages/quanlyroom/index.php';
                break;
            case 'updateroom':
                include './pages/quanlyroom/update-room.php';
                break;
            case 'add-room':
                include './pages/quanlyroom/add-room.php';
                break;
            default:
                include './pages/quanlyroom/index.php';
                break;
        }

        break;
    case 'quanlyBooking':
        switch ($_GET["action"]) {
            case 'index':
                include './pages/quanlyBooking/index.php';
                break;
            case 'xemchitiet':
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $trangthaidonhang = $_POST['trangthaidonhang'];
                    $madh = $_POST['ttdh'];
                    $conn = connect_db();
                    $check_query1 = "UPDATE donhang SET trangThaiDonHang='$trangthaidonhang' WHERE madh='$madh'";
                    if (mysqli_query($conn, $check_query1)) {
                        echo "<script>alert('Cập nhật thành công')</script>";
                        // header("refresh:1 , /admin/index.php?controller=quanlyBooking&action=xemchitiet&madonhang=$madh");
                    }
                }

                include './pages/quanlyBooking/chitiet.php';
                break;
            default:
                include './pages/quanlyBooking/index.php';
                break;
        }

        break;

    default:
        include 'pages/dashboads.php';
        break;
}
?>
<?php include './layouts/footer.php' ?>