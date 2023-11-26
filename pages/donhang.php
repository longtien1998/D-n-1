<div>
    <h1>ID ĐƠN HÀNG : <?=$iddh?></h1>
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
                            <td>' . $item[3] . '.000 VND</td>
                            <td>' . $item[4] . '</td>
                            <td>' . $item[5] . '</td>
                            <td>' . $tt . '.000 VND</td>
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
</div>

<div>
    <h3>thông tin đặt hàng</h3>

    <input type="hidden" name="tongdonhang" value="<?= $tong ?>">
    <table class="dathang">
        <tr>
            <td><input type="text" name="hoten" placeholder="Nhập họ tên"></td>
        </tr>
        <tr>
            <td><input type="text" name="email" placeholder="Nhập email"></td>
        </tr>
        <tr>
            <td><input type="text" name="tel" placeholder="Nhập số điện thoại"></td>
        </tr>
        <tr>
            <td><input type="date" name="checkin" placeholder="Nhập ngày đến"></td>
        </tr>
        <tr>
            <td><input type="date" name="checkout" placeholder="Nhập ngày đi"></td>
        </tr>

    </table>

</div>