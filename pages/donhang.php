<div>
    <h1>ID ĐƠN HÀNG : <?= $iddh ?></h1>
    <?php
    
    if (isset($_SESSION['iddh']) && ($_SESSION['iddh']) > 0) {
        $getshowcart = getshowcart($_SESSION['iddh']);
        if ((isset($getshowcart)) && (count($getshowcart) > 0)) {
            echo '  <table>
                    <tr>
                        <th>STT</th>
                        <th>Tên Phòng</th>
                        <th>Hình</th>
                        <th>Giá Phòng</th>
                        <th>Loại Phòng</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                    </tr>';
            $i = 0;
            $tong = 0;
            foreach ($getshowcart as $item) {
                $tt = $item['soluong'] * $item['giaPhong'];
                $tong += $tt;
                echo '  <tr>
                            <td>' . ($i + 1) . '</td>
                            <td>' . $item['tenPhong'] . '</td>
                            <td><img src=" ../content/images/' . $item['hinhPhong'] . '"></td>
                            <td>' . $item['giaPhong'] . '</td>
                            <td>' . $item['soluong'] . '</td>
                            <td>' . $item['roomtype'] . '</td>
                            <td>' . $tt . '</td>
                    </tr>';
                $i++;
            }
            echo '<tr>
                <td colspan="5">Tổng đơn hàng của bạn</td>
                <td></td>
                <td>' . $tong . '</td>
                <td></td>
                <td></td>
            </tr>';

            echo '</table>';
        }
    } else {
        echo "Giỏ hàng rỗng. <a href='./pages/home.php'> Tiếp tục đặt hàng</a>";
    }
    ?>
</div>

<div>
    <?php
    if (isset($_SESSION['iddh']) && ($_SESSION['iddh']) > 0) {
        $oderinfo = getoderinfo($_SESSION['iddh']);
        if (count($oderinfo) > 0) {

    ?>
            <h3>Mã Đơn Hàng: <?= $oderinfo[0]['madh']; ?></h3>
            <table class="dathang">
                <tr>
                    <td>Tên Khách Hàng: <br> <?= $oderinfo[0]['hoten']; ?></td>
                </tr>
                <tr>
                    <td>Email: <br> <?= $oderinfo[0]['email']; ?></td>
                </tr>
                <tr>
                    <td>Số điện thoại: <br> <?= $oderinfo[0]['tel']; ?></td>
                </tr>
                <tr>
                    <td>Ngày Đến: <br> <?= $oderinfo[0]['checkin']; ?></td>
                </tr>
                <tr>
                    <td>Ngày Đi: <br> <?= $oderinfo[0]['checkout']; ?></td>
                </tr>
                <tr>
                    <td>Phương thức thanh toán</td>
                    <?
                    switch ($oderinfo[0]['pttt']) {
                        case '1':
                            $mess = "Thanh toán trực tiếp tại khách sạn";
                            break;
                        case '2':
                            $mess = "Thanh toán qua ví MoMo";
                            break;
                        case '3':
                            $mess = "Thanh toán qua Zalo Pay";
                            break;
                        case '4':
                            $mess = "Thanh toán qua ATM";
                            break;

                        default:
                            $mess = "Quý Khách Chưa Chọn Phương Thức Thanh Toán!";
                            break;
                    }
                    echo $mess;
                    ?>
                </tr>
            </table>
    <?php 
            }
        }
?>

</div>