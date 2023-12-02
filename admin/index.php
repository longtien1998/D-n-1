<?php
include "../config/connect.php";
include "../dao/pdo.php";
include "../dao/userDAO.php";
include "../dao/nhanvien.php";

include "../dao/room.php";

// include "../dao/tintuc.php";


include '../admin/layouts/header.php' ?>
<?php
if (!isset($_GET["action"])) $_GET["action"] = "index";
if (!isset($_GET["controller"])) $_GET["controller"] = "dashboard";
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