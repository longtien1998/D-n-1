<div class="container py-5">
    <div class="p-4">
        <h1 class="py-3">ID ĐƠN HÀNG : <?php echo $_SESSION['iddh']; ?></h1>
        <h3>Mã Đơn Hàng: <?= $madh; ?></h3>
    </div>

    <div class="">
        <?php
        if (isset($_SESSION['iddh']) && ($_SESSION['iddh']) > 0) {
            $oderinfo = getoderinfo($_SESSION['iddh']);
            $getshowcart = getshowcart($_SESSION['iddh']);
            echo '<table class="table table-bordered table-striped table-hover text-center" >
                    <tr class="thead-dark">
                        <th>STT</th>
                        <th>Tên Phòng</th>
                        <th>Mã Phòng</th>
                        <th>Loại Phòng</th>
                        <th>Số Lượng</th>
                        <th>Đơn Giá </th>
                    </tr>';

            if (count($getshowcart) > 0) {
                $i = 1;
                foreach ($getshowcart as $row) {
                    echo '<tr>
                    <td>' . $i . '</td>
                    <td>' . $row['tenPhong'] . '</td>
                    <td>' . $row['maPhong'] . '</td>
                    <td>' . $row['loaiPhong'] . '</td>
                    <td>' . $row['soluong']     . '</td>
                    <td>' . currency_format($row['dongia']) . '</td>
                </tr>';
                    $i++;
                }
            }

            if (count($oderinfo) > 0) {
                foreach ($oderinfo as $value) { ?>
                    <table class="dathang table">
                        <tr>
                            <td>Tên Khách Hàng: </td>
                            <td><?= $value['hoten']; ?></td>
                        </tr>
                        <tr>
                            <td>Số điện thoại:</td>
                            <td><?= $value['tel']; ?></td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td><?= $value['email']; ?></td>
                        </tr>
                        <tr>
                            <td>Ngày Đến:</td>
                            <td><?= $value['checkin']; ?></td>
                        </tr>
                        <tr>
                            <td>Ngày Đi:</td>
                            <td><?= $value['checkout']; ?></td>
                        </tr>
                        <tr>
                            <td>Phương thức thanh toán</td>

                            <?php $tttt = $value['pttt'];
                            switch ($value['pttt']) {
                                case 1:
                                    $mess = "Thanh toán trực tiếp tại khách sạn";
                                    break;
                                case 2:
                                    $mess = "Thanh toán qua ví MoMo";
                                    break;
                                case 3:
                                    $mess = "Thanh toán qua Zalo Pay";
                                    break;
                                case 4:
                                    $mess = "Thanh toán qua ATM";
                                    break;

                                default:
                                    $mess = "Quý Khách Chưa Chọn Phương Thức Thanh Toán!";
                                    break;
                            }

                            ?>
                            <td><?php echo $mess; ?></td>
                        </tr>
                    </table>
        <?php
                }
            }
        }
        ?>


    </div>
</div>