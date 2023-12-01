<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Danh Sách Phòng</span></h2>
    </div>
    <div class="container-fluid">
        <h3 class="bg-info p-3 text-center"><a href="/admin/index.php?controller=user-nhanvien&action=new-room">Thêm Phòng +</a></h3>
    </div>
    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $getmanhanvien = $_POST['manhanvien'];
    //     nhanvien_delete($getmanhanvien);
    // }
    ?>
    <div class="container-fluid table-responsive-lg">
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" style="width: 100px;">STT</th>
                    <th scope="col">Mã Phòng</th>
                    <th scope="col">Tên Phòng</th>
                    <th scope="col">Loại Phòng</th>
                    <th scope="col">Giá Phòng</th>
                    <th scope="col">Trạng Thái</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = "1";
                // hiển thị danh sách sản phẩm từ cơ sở dữ liệu
                $sql = "SELECT * FROM room";
                $result = getData($sql);
                foreach ($result as $row) {
                    echo ' <tr>
                                <td>' . $i . '</td>
                                <td>' . $row['maPhong'] . '</td>
                                <td>' . $row['tenPhong'] . '</td>
                                <td>' . $row['loaiPhong'] . '</td>
                                <td>' . $row['giaPhong'] . '</td>
                                <td>' . $row['tThai'] . '</td>
                                <td><a href="/admin/index.php?controller=quanlyroom&action=updateroom&maphong='.$row['maPhong'].'">Update</a></td>
                                <td style="width: 100px;">
                                    <form onSubmit="return xoa()" action="" method="post">
                                        <input type="hidden" name="maphong"  value="' . $row['maPhong'] . '">
                                        <input type="submit" name="delete" value="Xóa" >
                                    </form>
                                </td>   
                            </tr>';
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php
if (isset($_POST['delete']) && isset($_POST['maphong'])) {
    if (!empty($_POST['maphong'])) {
        room2_delete($_POST['maphong']);
        echo "<script>
        window.location.href = 'http://localhost:3000/admin/index.php?controller=quanlyroom';
        </script>
        ";
    }
}
?>
<script>
    function xoa() {
        let opt = confirm("Bạn có muốn xóa phòng này không ?");
        if (opt) {
            return true;
        } else {
            return false;
        }
    }
</script>