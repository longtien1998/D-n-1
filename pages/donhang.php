<div>
    <h1>ID ĐƠN HÀNG : <?php echo $_SESSION['iddh']; ?></h1>
</div>

<div>
    <?php
    if (isset($_SESSION['iddh']) && ($_SESSION['iddh']) > 0) {
        $oderinfo = getoderinfo($_SESSION['iddh']);
        if (count($oderinfo) > 0) {
            foreach ($oderinfo as $value) {


    ?>
    
                <h3>Mã Đơn Hàng: <?= $value['madh']; ?></h3>
                <table class="dathang table" >
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