<?php
include "../config/connect.php";
include "../dao/pdo.php";
include "../dao/userDAO.php";
include "../dao/nhanvien.php";
include "../thuvien/tintuc.php";


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

            default:
                include './pages/users-nhanvien/index.php';
                break;
        }
        break;
        case 'gioithieu':
            switch ($_GET["action"]) {
                case 'tintuc':
                    include './pages/gioithieu/tintuc.php';
                    break;
                case 'tin_them':
                    include './pages/gioithieu/tin_them.php';
                    break;
    
                default:
                    include './pages/gioithieu/tintuc.php';
                    break;
            }
            break;
   
    case 'quanlyroom':
        include './pages/quanlyroom/index.php';

        break;

    default:
        include 'pages/dashboads.php';
        break;
}
?>
<?php include './layouts/footer.php' ?>