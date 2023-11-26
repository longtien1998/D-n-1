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
    }else{
        echo "Giỏ hàng rỗng. <a href='./pages/home.php'> Tiếp tục đặt hàng</a>";
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