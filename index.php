
<?php include './layouts/header.php'; ?>

<?php
if (!isset($_GET["action"])) $_GET["action"] = "home";

switch ($_GET["action"]) {
    case 'home':
        include './pages/home.php';
        break;
    case 'gioithieu':
        include './pages/gioithieu.php';
        break;
    case 'phong':
        include './pages/phong.php';
        break;
    case 'timphong':
        include './pages/timphong.php';
        break;
    case 'nhahang':
        include './pages/nhahang.php';
        break;
    case 'service':
        include './pages/service.php';
        break;
    case 'contact':
        include './pages/contact.php';
        break;
    case 'login':
        include './pages/login.php';
        break;
    case 'register':
        include './pages/register.php';
        break;
    case 'logout':
        include './dao/logout.php';
        break;
    default:
        include './pages/home.php';
        break;
}
?>

<?php include './layouts/footer.php' ?>