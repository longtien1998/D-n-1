<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Danh Sách Nhân Viên</span></h2>
    </div>
    <div class="container-fluid">
        <h3 class="bg-info p-3 text-center"><a href="/admin/index.php?controller=user-nhanvien&action=new-nhanvien">Thêm tài khoản Nhân Viên +</a></h3>
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
                    <th scope="col">Mã Nhân Viên</th>
                    <th scope="col">Tên Nhân Viên</th>
                    <th scope="col">Password</th>
                    <th scope="col">Công Việc</th>
                    <th scope="col">Ngày Làm Việc</th>
                    <th scope="col">Ca Làm Việc</th>
                    <th scope="col">id_KhachSan</th>
                    <th scope="col">Tên Đăng Nhập</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = "1";
                // hiển thị danh sách sản phẩm từ cơ sở dữ liệu
                $sql = "SELECT * FROM nhanvien";
                $result = getData($sql);
                foreach ($result as $row) {
                    echo ' <tr>
                                <td>' . $i . '</td>
                                <td>' . $row['maNhanVien'] . '</td>
                                <td>' . $row['tenNhanVien'] . '</td>
                                <td>' . $row['password'] . '</td>
                                <td>' . $row['congViec'] . '</td>
                                <td>' . $row['ngaylamViec'] . '</td>
                                <td>' . $row['caLamViec'] . '</td>
                                <td>' . $row['Id_KhachSan'] . '</td>
                                <td>' . $row['tenDangNhap'] . '</td>
                                <td style="width: 100px;">
                                    <form action="" method="post">
                                        <input type="hidden" name="manhanvien"  value="' . $row['maNhanVien'] . ' ">
                                        <input type="submit" name="delete" id="deletenv" value="Xóa" >
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
    let xoanv = document.getElementById('deletenv');
    xoanv.addEventListener('click', function() {
        let option2 = confirm("Bạn có muốn xóa Nhân viên không?");
        if (option2) {
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $getmanhanvien = $_POST['manhanvien'];
                nhanvien_delete($getmanhanvien);
                // header("refresh:1;");
            }
            ?>
        }
    });
</script>