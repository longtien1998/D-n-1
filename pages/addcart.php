<div class="container-fluid">
    <div class="col-lg-12 ">
        <h1 class="py-5">ĐƠN HÀNG CỦA BẠN</h1>
        <?php include 'thanhtoan.php' ;
        ?>
        <?php
        if ((isset($_SESSION['giohang'])) && (count($_SESSION['giohang']) > 0)) {
            echo '<table class="table table-bordered table-striped table-hover col-lg-12 text-center" >
                    <tr class="thead-dark">
                        <th>STT</th>
                        <th>Tên Phòng</th>
                        <th>Loại Phòng</th>
                        <th>Người Lớn</th>
                        <th>Ngày Đến</th>
                        <th>Ngày Đi</th>
                        <th>Số Ngày</th>
                        <th>Giá Phòng</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                        <th>Trạng Thái</th>
                    </tr>';
            $i = 0;
            $tong = 0;
            foreach ($_SESSION['giohang'] as $item) {
                // echo $item[4];
                $tt = $item[6]*$item[7]*$item[8];
                $tong += $tt;
                echo '  <tr>
                            <td>' . ($i + 1) . '</td>
                            <td>' . $item[1] . '</td>
                            <td>' . $item[2] . '</td>
                            <td>' . $item[3] . ' Người</td>
                            <td>' . $item[4] . '</td>
                            <td>' . $item[5] . '</td>
                            <td>' . $item[6] . ' Ngày</td>
                            <td>' . currency_format($item[7]). '</td>
                            <td>' . $item[8]     . '</td>
                            <td>' . currency_format($tt). '</td>
                            <td> <a class="xoa p-2" href="index.php?action=delcart&i=' . $i . '">Xóa</a></td>
                    </tr>';
                $i++;
            }
            echo '<tr class="thead-dark">
                    <td colspan="9">Tổng đơn hàng của bạn: </td>
                    
                    <td colspan="2">' .currency_format($tong) . '</td>
                </tr>';

            echo '</table>';
        }
        ?>
        <br>
        <a href="index.php?action=phong" class="p-2 tieptuc">Tiếp tục mua hàng</a>
        <a href="index.php?action=delcart" class="p-2 xoaall">Xóa giỏ hàng</a>
    </div>
    </div>
<div class="container d-flex justify-content-center">
    <div class="col-lg-6 ">
        <h2 class="text-center">Thông Tin Đặt Hàng</h2>
        <form class="form-group" action="" method="post">
            <input type="hidden" name="tongdonhang" value="<?= $tong ?>">
            <table class="dathang">
                <tr>
                    <td>Họ và Tên: <br>
                        <input class="form-control" id="exampleFormControlInput1" type="text" name="hoten" placeholder="Nhập họ tên">
                    </td>
                </tr>
                <tr>
                    <td>Số điện thoại: <br>
                        <input class="form-control" id="exampleFormControlInput1" type="text" name="tel" placeholder="Nhập số điện thoại">
                    </td>
                </tr>
                <tr>
                    <td>Email: <br>
                        <input class="form-control" id="exampleFormControlInput1" type="text" name="email" placeholder="Nhập email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2 class="text-center py-5"> Phương thức thanh toán </h2>
                        <input type="radio" name="pttt" value="1" class="my-3 check-active">
                        <label for="" class="check-active">Thanh toán trực tiếp tại khách sạn</label> <br>
                        <input type="radio" name="pttt" value="2" class="my-3 check-active">
                        <label for="" class="check-active"> Thanh toán qua ví MoMo</label> <br>
                        <input type="radio" name="pttt" value="3" class="my-3 check-active">
                        <label for="" class="check-active">Thanh toán qua Zalo Pay</label>  <br>
                        <input type="radio" name="pttt" value="4" class="my-3 check-active">
                        <label for="" class="check-active">Thanh toán qua ATM</label>
                    </td>

                </tr>
                <tr class="text-center">
                    <td><input type="submit" value="Thanh Toán" name="thanhtoan" class="custom-buy15 buy-15 my-5 w-75"></td>
                </tr>
            </table>
        </form>
    </div>
</div>