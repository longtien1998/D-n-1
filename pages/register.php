<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Đăng ký tài khoản</span></h2>
    </div>
    <div class="text-center mb-4">

        <!-- <h2 class="section-title px-5"><span class="px-2">Register</span></h2> -->
    </div>
    <?php include './dao/add-user.php' ?>
    <div class="main_container">
        <form action="" method="POST" class="form-login" id="form-1">
            <div class="form-header">
                <h3 class="form-heading">ĐĂNG KÝ</h3>
            </div>
            <?php echo $message; ?>
            <div class="form-group">
                <label for="fullname" class="form-label">Họ và tên</label>
                <input id="fullname" name="fullname" type="text" placeholder="VD: Tôn Long Tiến" class="form-control1" value="<?php echo $fullname; ?>" required>
                <i class="fa-solid fa-user form-user"></i>
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="username" class="form-label">Tên đăng nhập</label>
                <input id="username" name="username" type="text" placeholder="VD: longtien1998" class="form-control1" value="<?php echo $username; ?>" required>
                <i class="fa-solid fa-user form-user"></i>
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="phone" class="form-label">Số điện thoại</label>
                <input id="phone" name="phone" type="number" placeholder="VD: 0982268784" class="form-control1" value="<?php echo $phone; ?>" required>
                <i class="fa-solid fa-user form-user"></i>
                <span class="form-message"></span>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" name="email" type="text" placeholder="VD: longtien1998@gmail.com" class="form-control1" value="<?php echo $email; ?>" required>
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
            </div>
            <button class="form-submit" type="submit" name="dangky">Đăng ký</button>
        </form>
        <div class="icon">
            <img src="/image/logo.png" alt="">
        </div>
    </div>
</div>