<?php
//kiểm tra giỏ hàng xem có có tồn tại hay kh, nếu kh thì tạo giỏ hàng rỗng trc
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
$_SESSION['ngayDen'] = '';
$_SESSION['ngayDi'] = '';
$_SESSION['nguoiLon'] = '';
$_SESSION['ngayDen'] = '';
include './layouts/header.php';
include './dao/xulydonhang.php';

?>
<?php ?>
<?php

switch ($_GET["action"]) {
    case 'home':

        if (isset($_POST['timngay']) && ($_POST['timngay'])) {
            $ngayDen = $_POST['ngayDen'];
            $ngayDi = $_POST['ngayDi'];
            $nguoiLon = $_POST['nguoiLon'];
            $loaiPhong = $_POST['loaiPhong'];

            $_SESSION['ngayDen'] = $ngayDen;
            $_SESSION['ngayDi'] = $ngayDi;
            $_SESSION['nguoiLon'] = $nguoiLon;

            if ($loaiPhong === "phongDon") {
                header("Location: /index.php?action=view1");
            }
            if ($loaiPhong === "phongDoi") {
                header("Location: /index.php?action=view2");
            }
            if ($loaiPhong === "phongGiaDinh") {
                header("Location: /index.php?action=view3");
            }
            if ($loaiPhong === "phongVip") {
                header("Location: /index.php?action=view4");
            }
        }
        include './pages/home.php';
        break;

    case 'gioithieu':

        include './pages/gioithieu.php';
        break;

    case 'phong':

        include './pages/phong.php';
        break;

    case 'addcart':

        //kiểm tra $post [addtocart] và nếu được click
        //lấy dữ liệu từ form để lưu vào giỏ
        if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
            //lấy dữ liệu từ form để lưu vào giỏ
            $id = $_POST['id'];
            $tenPhong = $_POST['tenPhong'];
            $ngayDen = $_POST['ngayDen'];
            $ngayDi = $_POST['ngayDi'];
            $loaiPhong = $_POST['loaiPhong'];
            $giaPhong = $_POST['giaPhong'];
            $nguoiLon = $_POST['nguoiLon'];
            // if (isset($_POST['sl']) && ($_POST['sl'] > 0)) {
            $sl = $_POST['sl'];
            // } else {
            //     $sl = 1;
            // }
            $fg = 0;

            $diff = abs(strtotime($ngayDi) - strtotime($ngayDen));
            $days = floor($diff  / (60 * 60 * 24));

            // $_SESSION['giohang'] = array();
            //kiểm tra sp có tồn tại trong giỏ hàng hay kh
            // nếu có chỉ cập nhật lại sl
            // $i = 0;
            // foreach ($_SESSION['giohang'] as $item) {
            //     if ($item[2] === $maPhong) {
            //         $slnew = $sl + $item[5];
            //         $_SESSION['giohang'][$i][5] = $slnew;
            //         $fg = 1;
            //         break;
            //     }
            //     $i++;
            // }
            // echo $slnew;

            //còn kh thì add mới lại sp vào giỏ hàng
            //khởi tạo mảng con trc khi đưa vào giỏ hàng
            if ($fg == 0) {
                $item = array($id, $tenPhong, $loaiPhong, $nguoiLon, $ngayDen, $ngayDi, $days, $giaPhong, $sl);
                // $_SESSION['giohang'] = $item;
                $_SESSION['giohang'][] = $item;
            }
            header("location: /index.php?action=addcart");
        }

        //view giỏ hàng
        include './pages/addcart.php';
        break;

    case 'delcart':


        if (isset($_GET['i']) && ($_GET['i'] >= 0)) {
            if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) array_splice($_SESSION['giohang'], $_GET['i'], 1);
        } else {
            if (isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
        }
        if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
            header('location: index.php?action=addcart');
        } else {
            header('location: index.php?action=addcart');
        }
        break;
        //thanh toán

    case 'thanhtoan':
        include './pages/donhang.php';
        break;


    case 'timphong':
        if (isset($_POST['timngay']) && ($_POST['timngay'])) {
            $ngayDen = $_POST['ngayDen'];
            $ngayDi = $_POST['ngayDi'];
            $nguoiLon = $_POST['nguoiLon'];
            $loaiPhong = $_POST['loaiPhong'];

            $_SESSION['ngayDen'] = $ngayDen;
            $_SESSION['ngayDi'] = $ngayDi;
            $_SESSION['nguoiLon'] = $nguoiLon;

            if ($loaiPhong === "phongDon") {
                header("Location: /index.php?action=view1");
            }
            if ($loaiPhong === "phongDoi") {
                header("Location: /index.php?action=view2");
            }
            if ($loaiPhong === "phongGiaDinh") {
                header("Location: /index.php?action=view3");
            }
            if ($loaiPhong === "phongVip") {
                header("Location: /index.php?action=view4");
            }
        }

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

    case 'view1':

        include './pages/view1.php';
        break;

    case 'view2':
        include './pages/view2.php';
        break;

    case 'view3':
        include './pages/view3.php';
        break;

    case 'view4':
        include './pages/view4.php';
        break;
    case 'user':
        include './pages/useradmin.php';
        break;
    case 'usernv':
        include './pages/usernhanvien.php';
        break;
    case 'userkh':
        include './pages/userkhachhang.php';
        break;
    default:
        include './pages/home.php';
        break;
}
?>

<?php include './layouts/footer.php' ?>