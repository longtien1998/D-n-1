
    <div class="noidung">
        <table border="1">
            <tr>
                <td>Tiêu đề:</td>
                <td>Nội dung:</td>
                <td>Hình ảnh:</td>
                <td>Sửa:</td>
                <td>Xoá:</td>
            </tr>
            <?php
            require '../config/connect.php';
            // Up bài viết
            if (isset($_POST['btn_submit'])) {
                $id = $_GET['id'];
                $tieude = $_POST['tieude'];
                $url = $_POST['url'];
                $noidung = $_POST['noidung'];
                // Upload ảnh 
                $img = $_FILES['img']['name'];
                $errors = array();
                $file_name = $_FILES['img']['name'];
                $file_size = $_FILES['img']['size'];
                $file_tmp = $_FILES['img']['tmp_name'];
                $file_type = $_FILES['img']['type'];
                $file_ext = strtolower(end(explode('.', $_FILES['img']['name'])));

                $expensions = array("jpeg", "jpg", "png");

                if (in_array($file_ext, $expensions) === false) {
                    $errors[] = "Chỉ hỗ trợ upload file JPEG hoặc PNG.";
                }

                if ($file_size > 2097152) {
                    $errors[] = 'Kích thước file không được lớn hơn 2MB';
                }
                $target = "photo/" . basename($img);
                $sql = "INSERT INTO post ( tieude,url,noidung,img ) VALUES ( '$tieude','$url', '$noidung', '$img' )";
                if (mysqli_query($conn, $sql) && move_uploaded_file($_FILES['img']['tmp_name'], $target) && empty($errors) == true) {
                    echo '<script language="javascript">alert("Đăng bài viết thành công!");</script>';
                } else {
                    echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý");</script>';
                }
            }
            $conn = connect_db();
            $sql = "SELECT * FROM post WHERE id";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td><h2>" . $row['tieude'] . "</h2></td>";
                echo "<td><p>" . $row['noidung'] . "</p></td>";
                echo "<td><img src='photo/" . $row['img'] . "' height=100></td>";
                echo '<td><a href="edit-baiviet.php?id=' . $row['id'] . '">Edit</a></td> | <td><a href="del-baiviet.php?id=' . $row['id'] . '">Delete</a></td>';
                echo "</tr>";
            }
            ?>
        </table>
