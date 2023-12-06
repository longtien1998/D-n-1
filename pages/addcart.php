<div class="container">
    <div class="col-12 ">
        <h1>ĐƠN HÀNG CỦA BẠN</h1>
        <?php
        if ((isset($_SESSION['giohang'])) && (count($_SESSION['giohang']) > 0)) {
            echo '<table class="table table-bordered table-striped table-hover text-center" >
                    <tr class="thead-dark">
                        <th>STT</th>
                        <th>Tên Phòng</th>
                        <th>Hình</th>
                        <th>Loại Phòng</th>
                        <th>Giá Phòng</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                        <th>Trạng Thái</th>
                    </tr>';
            $i = 0;
            $tong = 0;
            foreach ($_SESSION['giohang'] as $item) {
                $tt = $item[4] * $item[5];
                $tong += $tt;
                echo '  <tr>
                            <td>' . ($i + 1) . '</td>
                            <td>' . $item[1] . '</td>
                            <td>' . $item[2] . '</td>
                            <td>' . $item[3] . '</td>
                            <td>' . $item[4] . 'VND</td>
                            <td>' . $item[5]     . '</td>
                            <td>' . $tt . 'VND</td>
                            <td> <a href="index.php?action=delcart&i=' . $i . '">Xóa</a></td>
                    </tr>';
                $i++;
            }
            echo '<tr class="thead-dark">
                    <td colspan="6">Tổng đơn hàng của bạn: </td>
                    
                    <td colspan="2">' . $tong . 'VND</td>
                </tr>';

            echo '</table>';
        }
        ?>
        <br>
        <a href="index.php?action=phong">Tiếp tục mua hàng</a> | <a href="index.php?action=delcart">Xóa giỏ hàng</a>
    </div>

    <div class="col-12 ">
        <h2 class="text-center">Thông Tin Đặt Hàng</h2>
        <form class="form-group" action="/index.php?action=thanhtoan" method="post">
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
                    <td>Ngày Đến: <br>
                        <input class="form-control" id="exampleFormControlInput1" type="date" name="checkin" placeholder="Nhập ngày đến">
                    </td>
                </tr>
                <tr>
                    <td>Ngày Đi: <br>
                        <input class="form-control" id="exampleFormControlInput1" type="date" name="checkout" placeholder="Nhập ngày đi">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2 class="text-center"> Phương thức thanh toán </h2>
                        <input type="radio" name="pttt" value="1"> Thanh toán trực tiếp tại khách sạn <br>
                        <input type="radio" name="pttt" value="2"> Thanh toán qua ví MoMo <br>
                        <input type="radio" name="pttt" value="3"> Thanh toán qua Zalo Pay <br>
                        <input type="radio" name="pttt" value="4"> Thanh toán qua ATM
                    </td>

                </tr>
                <tr>
                    <td><input type="submit" value="Thanh Toán" name="thanhtoan"></td>
                </tr>
            </table>
        </form>
    </div>
</div>