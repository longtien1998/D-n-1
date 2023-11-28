<?php
//kiểm tra giỏ hàng xem có có tồn tại hay kh, nếu kh thì tạo giỏ hàng rỗng trc
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
include './layouts/header.php';
include './dao/xulydonhang.php';

?>

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

    case 'addcart':
        //lấy dữ liệu từ form để lưu vào giỏ
        if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
            $id = $_POST['id'];
            $tenPhong = $_POST['tenPhong'];
            $hinhPhong = $_POST['img'];
            $loaiPhong = $_POST['loaiPhong'];
            $giaPhong = $_POST['giaPhong'];
            if (isset($_POST['sl']) && ($_POST['sl'] > 0)) {
                $sl = $_POST['sl'];
            } else {
                $sl = 1;
            }
            $fg = 0;
            //kiểm tra sp có tồn tại trong giỏ hàng hay kh
            // nếu có chỉ cập nhật lại sl
            $i = 0;
            foreach ($_SESSION['giohang'] as $item) {
                if ($item[1] === $tenPhong) {
                    $slnew = $sl + $item[5];
                    $_SESSION['giohang'][$i][5] = $slnew;
                    $fg = 1;
                    break;
                }
                $i++;
            }

            //còn kh thì add mới lại sp vào giỏ hàng
            //khởi tạo mảng con trc khi đưa vào giỏ hàng
            if ($fg == 0) {
                $item = array($id, $tenPhong, $img, $loaiPhong, $giaPhong, $sl);
                $_SESSION['giohang'][] = $item;
            }
            header('location: index.php?action=addcart');
        }

        //view giỏ hàng
        include './pages/addcart.php';
        break;

    case 'delcart':
        if (isset($_GET['i']) && ($_GET['i'] > 0)) {
            if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0))
                array_slice($_SESSION['giohang'], $_GET['i'], 1);
        } else {
            if (isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
        }
        if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
            header('location: index.php?action=addcart');
        } else {
            header('location: index.php?action=view1');
        }
        break;

        //thanh toán

    case 'thanhtoan':
        //nếu kiểm tra cái post ['thanh toan] và được click 
        if ((isset($_POST['thanhtoan'])) && ($_POST['thanhtoan'])) {
            //thì lấy dữ liệu
            $tongdonhang = $_POST['tongdonhang'];
            $hoten = $_POST['hoten'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $checkin = $_POST['checkin'];
            $checkout = $_POST['checkout'];
            $pttt = $_POST['pttt'];
            $madh = "KH" . rand(10000, 99999);
            // Siddh = "DH".rand(100,999);
            // tạo đơn hàng
            //và trả về 1 id đơn hàng
            $iddh = taodonhang($madh, $tongdonhang, $pttt, $hoten, $tel, $email, $checkin, $checkout);
            $_SESSION['iddh'] = $iddh; // ????? hộ poly chỉ 
            if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
                foreach ($_SESSION['giohang'] as $item) {
                    addtocart($iddh, $item[0], $item[1], $item[2], $item[3], $item[4], $item[5]);
                }
                unset($_SESSION['giohang']);
            }
        }
        include './pages/donhang.php';
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
        include './pages/user.php';
        break;
    default:
        include './pages/home.php';
        break;
}
?>

<?php include './layouts/footer.php' ?>