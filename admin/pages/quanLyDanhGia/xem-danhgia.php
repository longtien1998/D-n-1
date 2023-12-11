<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Danh Sách Đánh Giá</span></h2>
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
                    <th scope="col" style="width: 70px;">STT</th>
                    <th scope="col">Mã Bài viết</th>
                    <th scope="col">Họ Tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Đánh giá</th>
                    <th scope="col">Bình luận</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = "1";
                // hiển thị danh sách sản phẩm từ cơ sở dữ liệu
                $sql = "SELECT * FROM danhgia";
                $result = getData($sql);
                foreach ($result as $row) {
                    echo ' <tr>
                                <td>' . $i . '</td>
                                <td>' . $row['MaBaiViet'] . '</td>
                                <td>' . $row['hoTen'] . '</td>
                                <td>' . $row['email'] . '</td>
                                <td>' . $row['danhGia'] . ' Sao</td>
                                <td>' . $row['binhLuan'] . '</td>   
                            </tr>';
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>