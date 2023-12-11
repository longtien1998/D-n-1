<?php include './dao/login.php'; ?>
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">ĐĂNG NHẬP</span></h2>
    </div>
    <div class="text-center mb-4 ">
        <?php echo $message; ?>
    </div>
    <div class="main_container">
        <form action="" method="POST" class="form-login" id="form-1">
            <div class="form-header">
                <h3 class="form-heading">ĐĂNG NHẬP</h3>
            </div>
            <div class="form-group">
                <label for="username" class="form-label">Tên đăng nhập</label>
                <input id="username" name="username" type="text" placeholder="VD: longtien1998" class="form-control1" required>
                <i class="fa-solid fa-user form-user"></i>
                
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control1" required>
                <i class="fa-solid fa-user-lock form-lock"></i>
                <span class="form-message"></span>
                <i class="fa-solid fa-eye-slash form-eye-slash"></i>
            </div>

            <button class="form-submit" type="submit" name="dangnhap">Đăng nhập</button>

            <p class="register">
                Bạn chưa là khách hàng BONCHA - Best Hotel? <br>
                <a href="/index.php?action=register" class="register-link">Đăng ký</a>
            </p>
        </form>
        <div class="icon">
            <img src="" alt="">
        </div>
    </div>
</div>