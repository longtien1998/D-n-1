<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Tạo tài khoản Nhân Viên</span></h2>
    </div>
    <div class="text-center mb-4">

        <!-- <h2 class="section-title px-5"><span class="px-2">Register</span></h2> -->
    </div>
    <?php include "../dao/add-nhanvien.php" ?>
    <div class="main_container">
        <form action="" method="POST" class="form-login" id="form-1" style="width: 752px; text-align:start">
            <div class="form-header">
                <h3 class="form-heading">ĐĂNG KÝ</h3>
            </div>

            <?php echo $message; ?>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="manhanvien">Mã Nhân Viên</label>
                    <input type="text" class="form-control" id="manhanvien" name="manhanvien" value="NV00<?php echo $demnhanvien ;?>" placeholder="NV001" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="username">Tên đăng nhập</label>
                    <input type="text" class="form-control" name="username" id="username" value="<?php echo $username ;?>" >
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $password ;?>"  >
                </div>
                <div class="form-group col-md-6">
                    <label for="full-name">Họ Và Tên</label>
                    <input type="text" class="form-control" name="fullname" id="full-name" value="<?php echo $fullname ;?>"  placeholder="Tôn Long Tiến">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $email ;?>"  placeholder="longtien1998@gmail.com">
                </div>
                <div class="form-group col-md-6">
                    <label for="phone">Số điện thoại</label>
                    <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo $phone ;?>"  >
                </div>
                <!-- <div class="form-group col-md-6">
                    <label for="location">Địa chỉ</label>
                    <input type="text" class="form-control" id="location" name="location" value="<?php echo $diachi ;?>">
                </div> -->
                <!-- <div class="form-group col-md-6">
                    <label for="postal-code">Mã code</label>
                    <input type="text" class="form-control" id="postal-code" name="postal-code" value="<?php echo $macode ;?>">
                </div> -->
                <div class="form-group col-md-6">
                    <label for="congviec">Công Việc</label>
                    <!-- <input type="text" class="form-control" id="congviec" name="congviec" value="<?php echo $congviec ;?>"  > -->
                    <select name="congviec" class="form-control" id="congviec" required >
                        <option value="">Chọn công việc</option>
                        <option value="Lễ Tân">Lễ Tân</option>
                        <option value="Quản lý">Quản lý</option>
                        <option value="Dọn Phòng">Dọn Phòng</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="calamviec">Ca làm Việc</label>
                    <!-- <input type="text" class="form-control" id="calamviec" name="calamviec" value="<?php echo $calamviec ;?>" > -->
                    <select name="calamviec" class="form-control" id="calamviec" required >
                        <option value="">Chọn ca làm việc</option>
                        <option value="Ca full: 6h - 14h30">Ca full: 6h - 14h30</option>
                        <option value="Ca full: 14h - 22h30">Ca full: 14h - 22h30</option>
                        <option value="Ca full: 22h - 6h30">Ca full: 22h - 6h30</option>
                        <option value="Past-time: 6h - 10h30">Past-time: 6h - 10h30</option>
                        <option value="Past-time: 10h - 14h30">Past-time: 10h - 14h30</option>
                        <option value="Past-time: 14h - 18h30">Past-time: 14h - 18h30</option>
                        <option value="Past-time: 18h - 22h30">Past-time: 18h - 22h30</option>
                        <option value="Ca gãy: 8h - 16h30">Ca gãy: 8h - 16h30</option>
                        
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="ngayLamViec">Ngày làm việc</label>
                    <input type="date" class="form-control" id="ngayLamViec" name="ngayLamViec" value="<?php echo $ngayLamViec ;?>"  >
                </div>

            </div>
            <!-- <div class="form-group">
                        <label for="fullname" class="form-label">Họ và tên</label>
                        <input id="fullname" name="fullname" type="text" placeholder="VD: Tôn Long Tiến" class="form-control1" value="<?php $fullname; ?>" required>
                        <i class="fa-solid fa-user form-user"></i>
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label for="username" class="form-label">Tên đăng nhập</label>
                        <input id="username" name="username" type="text" placeholder="VD: longtien1998" class="form-control1" value="<?php $username; ?>" required>
                        <i class="fa-solid fa-user form-user"></i>
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="form-label">Công việc</label>
                        <input id="phone" name="phone" type="number" placeholder="VD: 0982268784" class="form-control1" value="<?php $phone; ?>" required>
                        <i class="fa-solid fa-user form-user"></i>
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="ngaylamviec" class="form-label">Ngày làm việc</label>
                        <input id="ngaylamviec" name="ngaylamviec" type="date" placeholder="VD: longtien1998@gmail.com" class="form-control1" value="<?php $email; ?>" required>
                        <i class="fa-solid fa-user form-user"></i>
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="calamviec" class="form-label">Ca làm việc</label>
                        <input id="calamviec" name="calamviec" type="text" placeholder="VD: longtien1998@gmail.com" class="form-control1" value="<?php $fullname; ?>" required>
                        <i class="fa-solid fa-user form-user"></i>
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="manhanvien" class="form-label">Mã Nhân Viên</label>
                        <input id="manhanvien" name="manhanvien" type="text" placeholder="VD: longtien1998@gmail.com" class="form-control1" value="<?php $fullname; ?>" required>
                        <i class="fa-solid fa-user form-user"></i>
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="id_ks" class="form-label">Id Khách sạn</label>
                        <input id="id_ks" name="id_ks" type="text" placeholder="VD: longtien1998@gmail.com" class="form-control1" value="<?php $fullname; ?>" required>
                        <i class="fa-solid fa-user form-user"></i>
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control1" required>
                        <i class="fa-solid fa-user-lock form-lock"></i>
                        <span class="form-message"></span>
                        <i class="fa-solid fa-eye-slash form-eye-slash"></i>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
                        <input id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu" type="password" class="form-control1" required>
                        <i class="fa-solid fa-user-lock form-lock"></i>
                        <span class="form-message"></span>
                        <i class="fa-solid fa-eye-slash form-eye-slash"></i>
                    </div> -->
            <button class="form-submit" type="submit" name="dangky">Đăng ký</button>
        </form>
        <div class="icon">
            <img src="/image/logo.png" alt="">
        </div>
    </div>
</div>