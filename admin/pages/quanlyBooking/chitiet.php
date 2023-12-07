<?php
if (isset($_GET['madonhang']))
    $madonhang = $_GET['madonhang'];
$data = getdonhang($madonhang);
$data['trangThaiDonHang'];
switch ($data['trangThaiDonHang']) {
    case 1:
        $mess2 = 'Chưa xác nhận';
        break;
    case 2:
        $mess2 = 'Đã xác nhận';
        break;
    case 3:
        $mess2 = 'Hủy đơn';
        break;

    default:
        $mess2 = 'Chưa xác nhận';
        break;
}
?>

<div class="container-fluid py-5">
    
    <div class="row justify-content-between py-3 m-0">
        <h2 class="col-lg-5">Mã đơn hàng: <?php echo $madonhang; ?></h2>
        <form action="" class="col-lg-4" method="POST">
            <label for="" class="form-label">Trạng thái đơn hàng: </label>
            <input type="hidden" name="ttdh" value="<?= $madonhang; ?>">
            <select name="trangthaidonhang" id="" class="form-control w-auto d-inline">
                <option value="<?php echo $data['trangThaiDonHang']; ?>"><?php echo $mess2 ?></option>
                <option value="1">Chưa xác nhận</option>
                <option value="2">Xác nhận</option>
                <option value="3">Hủy Đơn</option>
            </select>
            <input type="submit" value="Cập nhập" name="updatedh" class="form-submit w-25">
        </form>
    </div>
    <?php

    ?>
    <?php
    $iddh = $data['id'];

    if (isset($iddh)) {
        $rows = getshowcart($iddh);
        echo    '<table class="table table-bordered table-striped table-hover text-center" >
                    <tr class="thead-dark">
                        <th>STT</th>
                        <th>Tên Phòng</th>
                        <th>Mã Phòng</th>
                        <th>Loại Phòng</th>
                        <th>Số Lượng</th>
                        <th>Đơn Giá </th>
                    </tr>';
        $i = 1;
        foreach ($rows as $row) {
            echo    '<tr>
                        <td>' . $i . '</td>
                        <td>' . $row['tenPhong'] . '</td>
                        <td>' . $row['maPhong'] . '</td>
                        <td>' . $row['loaiPhong'] . '</td>
                        <td>' . $row['soluong']     . '</td>
                        <td>' . currency_format($row['dongia']) . '</td>
                    </tr>';
            $i++;
        }
        echo '</table>';
    }
    ?>
    <div class="container">
        <table class="dathang table table-bordered table-striped table-hover text-center">
            <tr>
                <td>Tên Khách Hàng: </td>
                <td><?= $data['hoten']; ?></td>
            </tr>
            <tr>
                <td>Số điện thoại:</td>
                <td><?= $data['tel']; ?></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><?= $data['email']; ?></td>
            </tr>
            <tr>
                <td>Ngày Đến:</td>
                <td><?= $data['checkin']; ?></td>
            </tr>
            <tr>
                <td>Ngày Đi:</td>
                <td><?= $data['checkout']; ?></td>
            </tr>
            <tr>
                <td>Phương thức thanh toán</td>

                <?php $tttt = $data['pttt'];
                switch ($data['pttt']) {
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
            <tr>
                <td>Trạng thái đơn hàng: </td>
                <?php
                switch ($data['trangThaiDonHang']) {
                    case 1:
                        $mess1 = '<td id="ttdh" class="bg-warning text-light p3-2 ">Chưa xác nhận</td>';
                        break;
                    case 2:
                        $mess1 = '<td id="ttdh" class="bg-success text-light p3-2 ">Đã xác nhận</td>';
                        break;
                    case 3:
                        $mess1 = '<td id="ttdh" class="bg-danger text-light p3-2 ">Hủy</td>';
                        break;

                    default:
                        $mess1 = '<td id="ttdh" class="bg-warning text-light p3-2 ">Chưa xác nhận</td>';
                        break;
                }
                ?>
                <?= $mess1; ?>
            </tr>
        </table>
    </div>

</div>
<script>

</script>