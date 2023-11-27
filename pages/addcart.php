    <div>
        <h1>ĐƠN HÀNG CỦA BẠN</h1>
        <?php
        if ((isset($_SESSION['giohang'])) && (count($_SESSION['giohang']) > 0)) {
            echo '  <table>
                    <tr>
                        <th>STT</th>
                        <th>Tên Phòng</th>
                        <th>Hình</th>
                        <th>Giá Phòng</th>
                        <th>Loại Phòng</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                        <th>Trạng Thái</th>
                    </tr>';
            $i = 0;
            $tong = 0;
            foreach ($_SESSION['giohang'] as $item) {
                $tt = $item[3] * $item[5];
                $tong += $tt;
                echo '  <tr>
                            <td>' . ($i + 1) . '</td>
                            <td>' . $item[1] . '</td>
                            <td>' . $item[2] . '</td>
                            <td>' . $item[3] . 'VND</td>
                            <td>' . $item[4] . '</td>
                            <td>' . $item[5] . '</td>
                            <td>' . $tt . '.000 VND</td>
                            <td> <a href="index.php?action=delcart&i=' . $i . '">Xóa</a></td>
                    </tr>';
                $i++;
            }
            echo '<tr>
                <td colspan="5">Tổng đơn hàng của bạn</td>
                <td></td>
                <td>' . $tong . '.000 VND</td>
                <td></td>
                <td></td>
            </tr>';

            echo '</table>';
        }
        ?>
        <br>
        <a href="index.php?action=phong">Tiếp tục mua hàng</a> |<a href="index.php?action=home">Thanh Toán</a>| <a href="index.php?action=delcart">Xóa giỏ hàng</a>
    </div>

    <div>
        <h3>thông tin đặt hàng</h3>
        <form action="index.php?action=thanhtoan" method="post">
            <input type="hidden" name="tongdonhang" value="<?= $tong ?>">
            <table class="dathang">
                <tr>
                    <td>Họ và Tên: <br>
                        <input type="text" name="hoten" placeholder="Nhập họ tên">
                    </td>
                </tr>
                <tr>
                    <td>Email: <br>
                        <input type="text" name="email" placeholder="Nhập email">
                    </td>
                </tr>
                <tr>
                    <td>Số điện thoại: <br>
                        <input type="text" name="tel" placeholder="Nhập số điện thoại">
                    </td>
                </tr>
                <tr>
                    <td>Ngày Đến: <br>
                        <input type="date" name="checkin" placeholder="Nhập ngày đến">
                    </td>
                </tr>
                <tr>
                    <td>Ngày Đi: <br>
                        <input type="date" name="checkout" placeholder="Nhập ngày đi">
                    </td>
                </tr>
                <tr>
                    <td>Phương thức thanh toán </td>
                    <td> <input type="radio" name="pttt" value="1"> Thanh toán trực tiếp tại khách sạn <br>
                     <input type="radio" name="pttt" value="2"> Thanh toán qua ví MoMo  <br>
                     <input type="radio" name="pttt" value="3"> Thanh toán qua Zalo Pay <br>
                     <input type="radio" name="pttt" value="4"> Thanh toán qua ATM </td>

                </tr>
                <tr>
                    <td><input type="submit" value="Thanh Toán" name="thanhtoan"></td>
                </tr>
            </table>
        </form>
    </div>