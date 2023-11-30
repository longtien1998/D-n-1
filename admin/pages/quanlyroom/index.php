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
                                <td style="width: 100px;">
                                    <form action="" method="post">
                                        <input type="hidden" name="maphong"  value="' . $row['maPhong'] . ' ">
                                        <input type="submit" name="delete" id="deleteroom" value="Xóa" >
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
<script>
    let xoa3 = document.getElementById('deleteroom');
    xoa3.addEventListener('click', function() {
        let option3 = confirm("Bạn có muốn xóa phòng không?");
        if (option3) {
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $getmaphong = $_POST['maphong'];
                room2_delete($getmaphong);
            }
            ?>
        }
    });
</script>