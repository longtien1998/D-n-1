<?php
$result = getUserByName($_SESSION["user"]);

?>



<div class="container my-5">
    <div class="row justify-content-center align-items-center min-vh-100 ">
        <div class="col-lg-8 ">
            <?php foreach ($result as $row)
                echo ' 
                    <div class="bg-white p-4 rounded-lg shadow-lg border-success">
                        <div class="text-center">
                            <div class="profile-picture">
                                <img class="rounded-full border border-gray-100 shadow-sm" src="../content/images/face.png" alt="Profile picture of Sara Tancredi wearing sunglasses and a teal top" width="200" height="200">
                            </div>
                            <button  type="button" class="upload btn btn-orange mx-2" onclick="show()" ><i class="fa-solid fa-pen-to-square"></i></button> 
                            <div class="file row py-4">
                                <div class="col-lg-8 mx-auto">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Chọn file hình ảnh</label>
                                            <input id="filetoUpload" name="filetoUpload" type="file" class="form-control1" style="line-height: 17px;">
                                        </div>
                                        <div class=" mb-3 px-2 py-2 text-center">
                                            <input type="submit" value="Lưu" class="btn btn-light m-0 rounded-pill px-4">
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                            <h1 class="text-black-700 font-semibold mt-4">' . $row['fullname'] . '</h1>
                            
                        </div>
                        <div class="mt-4">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Tên đăng nhập</label>
                                        <input type="text" class="form-control" id="name" value="' . $row['username'] . '" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="full-name">Họ Và Tên</label>
                                        <input type="text" class="form-control" id="full-name" value="' . $row['fullname'] . '" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" value="' . $row['email'] . '" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phone">Số điện thoại</label>
                                        <input type="tel" class="form-control" id="phone" value="' . $row['phone'] . '" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="location">Địa chỉ</label>
                                        <input type="text" class="form-control" id="location" value="' . $row['diachi'] . '" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="postal-code">Mã code</label>
                                        <input type="text" class="form-control" id="postal-code" value="' . $row['macode'] . '" readonly>
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="button" class="btn btn-orange border-primary mx-2">Thoát</button>
                                    <button type="button" class="btn btn-orange border-success mx-2" id="sua">Sửa</button>
                                    <button type="button" class="btn btn-orange border-success mx-2" id="luu">Lưu</button>
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
    let upload = document.querySelector('.upload');
    let file = document.querySelector('.file');
    upload.onclick = function(){
        if(file.style.display === "none") file.style.display ="block";
        else file.style.display ="none";
    };
    
</script>