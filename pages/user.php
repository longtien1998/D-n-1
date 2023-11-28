<?php
$resultuser = getUserByName($_SESSION["user"]);
$user = $_SESSION["user"];
$messagetong = '';
$message1 = '';
$message2 = '';
$message3 = '';
$message4 = '';
$message5 = '';
$message6 = '';
$message7 = '';
$row['urlimage']='./';
if (isset($_POST['luu']) && ($_POST['luu'])) {
    // lấy tên sap từ form
    $target_dir = "./uploads/";
    // đường dẫn đến thư mục file
    $target_file = $target_dir . basename($_FILES['filetoUpload']["name"]);

    //gán trạng thái upload file = 1 ( thành công)
    $uploadok = 1;
    // lấy định dạn ảnh
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // kiểm tra xem file đã  tồn tại chưa
    // if (file_exists($target_file)) {
    //     $message1 = '<h2 class="section-title px-5"><span class="px-2" style="color: red;">File đã tồn tại</span></h2><br>';
    //     // bật trạng thái upload khi cài file lỗi
    //     $uploadok = 0;
    // }
    // kiểm tra kích thước file
    if ($_FILES["filetoUpload"]["size"] > 500000) {
        $message2 = '<h2 class="section-title px-5"><span class="px-2" style="color: red;">File ảnh quá lớn</span></h2><br>';
        $uploadok = 0;
    }
    // kiểm tra định dạng file 
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "webp") {
        $message3 = '<h2 class="section-title px-5"><span class="px-2" style="color: red;">Chỉ chấp nhận file JPG, JPEG, PNG, GIF, WEBP</span></h2><br>';
        $uploadok = 0;
    }
    // kiểm tra nếu $uploadok = 0, tức là có lỗi xãy ra
    if ($uploadok == 0) {
        $message4 = '<h2 class="section-title px-5"><span class="px-2" style="color: red;">Tập tin không được tải lên</span></h2><br>';
    } else {
        // di chuyển file từ thư mục tạm lên thư mụ đích
        if (move_uploaded_file($_FILES["filetoUpload"]["tmp_name"], $target_file)) {
            // lấy địa chỉ ảnh sau khi đã upload thành công
            $path = $target_dir . basename($_FILES["filetoUpload"]["name"]);
            //chèn vào bảng product trong cơ sowe dữ liệu test
            $conn = connect_db();
            $query = "UPDATE useradmin SET urlimage ='$path' WHERE username ='$user'";

            $result = mysqli_query($conn, $query);
            echo $result;
            // kiểm tra kết quả try vấn
            if ($result) {

                $message5 = '<h2 class="section-title px-5"><span class="px-2" style="color: green;">Thêm ảnh thành công</span></h2>';
                header('refresh:2;index.php?action=user');
            } else {
                $message6 = '<h2 class="section-title px-5"><span class="px-2" style="color: red;">Có lỗi xảy ra</span></h2><br>';
            }
        } else {
            $message7 = '<h2 class="section-title px-5"><span class="px-2" style="color: red;">có lỗi xãy ra khi tải lên file</span></h2>';
        }
    }
    $messagetong = $message1 . $message2 . $message3 . $message4 . $message5 . $message6 . $message7;
}

?>



<div class="container my-5">
    <div class="row justify-content-center align-items-center min-vh-100 ">
        <div class="col-lg-8 ">
            <?php foreach ($resultuser as $row)
                echo ' 
                    <div class="bg-white p-4 rounded-lg shadow-lg border-success">
                        <div class="text-center">
                            <div class="profile-picture">
                                <img class="rounded-full border border-gray-100 shadow-sm" src="' . $row['urlimage'] . '" alt="Profile picture of Sara Tancredi wearing sunglasses and a teal top" width="200" height="200">
                            </div>
                            <button  type="button" class="upload btn btn-orange mx-2" ><i class="fa-solid fa-pen-to-square"></i></button> 
                            <div class="file row py-4">
                                <div class="col-lg-8 mx-auto">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Chọn file hình ảnh</label>
                                            <input id="filetoUpload" name="filetoUpload" type="file" class="form-control1" style="line-height: 17px;">
                                        </div>
                                        <div class=" mb-3 px-2 py-2 text-center">
                                            <input type="submit" name="luu" value="Lưu" class="btn btn-light m-0 rounded-pill px-4">
                                        </div>
                                        
                                    </form>
                                </div>
                                
                            </div>
                            <div>' . $messagetong . '</div>
                            <h1 class="text-black-700 font-semibold mt-4">' . $row['fullname'] . '</h1>
                            
                        </div>
                        <div class="mt-4">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Tên đăng nhập</label>
                                        <input type="text" class="form-control" name="name" id="name" value="' . $row['username'] . '" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="full-name">Họ Và Tên</label>
                                        <input type="text" class="form-control" name="fullname" id="full-name" value="' . $row['fullname'] . '" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" value="' . $row['email'] . '" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phone">Số điện thoại</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" value="' . $row['phone'] . '" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="location">Địa chỉ</label>
                                        <input type="text" class="form-control" id="location" name="location" value="' . $row['diachi'] . '" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="postal-code">Mã code</label>
                                        <input type="text" class="form-control" id="postal-code" name="postal-code" value="' . $row['macode'] . '" readonly>
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="button" class="btn btn-orange border-primary mx-2"><a href="/admin/index.php">Vào Quản Trị </a></button>
                                    <button type="button" class="btn btn-orange border-primary mx-2">Thoát</button>
                                    <button type="button" class="btn btn-orange border-success mx-2 " id="luu">Lưu</button>
                                    <button type="button" class="btn btn-orange border-success mx-2" id="sua">Sửa</button>
                                    
                                </div>
                            </form>
                        </div>
                    </div>';
            ?>
        </div>
    </div>
</div>
<form action="">
    <input type="file" name="" id="" value="chọn ảnh">
</form>
<script>
    window.onload = function() {
        let upload = document.querySelector('.upload');
        let file = document.querySelector('.file');
        file.style.display = "none";
        upload.onclick = function() {
            if (file.style.display === "none") file.style.display = "block";
            else file.style.display = "none";
        };

        let sua = document.querySelector('#sua');
        let save = document.querySelector('#luu');
        let name= document.getElementsByName('name')[0];
        let fullname= document.getElementsByName('fullname')[0];
        let email= document.getElementsByName('email')[0];
        let phone= document.getElementsByName('phone')[0];
        let location= document.getElementsByName('location')[0];
        let postal_code = document.getElementsByName('postal-code')[0];
        save.style.display = "none";
        
        sua.onclick = function(){
            if(save.style.display ==="none") {
                save.style.display = "";
                name.removeAttribute('readonly');
                fullname.removeAttribute('readonly');
                email.removeAttribute('readonly');
                phone.removeAttribute('readonly');
                location.removeAttribute('readonly');
                postal_code.removeAttribute('readonly');

            } else save.style.display = "none";
        };

    }
</script>