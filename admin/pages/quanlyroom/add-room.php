<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Tạo Phòng</span></h2>
    </div>
    <div class="text-center mb-4">

        <!-- <h2 class="section-title px-5"><span class="px-2">Register</span></h2> -->
    </div>
    <?php include "../dao/add-room.php" ?>
    <div class="main_container">
        <form action="" method="POST" class="form-login" id="form-1">
            <div class="form-header">
                <h3 class="form-heading">ĐĂNG KÝ PHÒNG</h3>
            </div>
            <?php echo $message; ?>
            <div class="form-group">
                <label for="nameroom" class="form-label">Tên Phòng</label>
                <input id="nameroom" name="nameroom" type="text" placeholder="VD: Phòng đơn" class="form-control1" value="<?php echo $nameroom; ?>" required>
                <i class="fa-solid fa-user form-user"></i>
            </div>

            <div class="form-group">
                <label for="maphong" class="form-label">Mã Phòng</label>
                <input id="maphong" name="maphong" type="text" placeholder="VD: R001" class="form-control1" value="<?php echo $maphong; ?>" required>
                <i class="fa-solid fa-user form-user"></i>
            </div>

            <div class="form-group">
                <label for="loaiphong" class="form-label">Loại Phòng</label>
                <!-- <input id="loaiphong" name="loaiphong" type="text" placeholder="VD: 0982268784" class="form-control1" value="<?php echo $loaiphong; ?>" required> -->
                <select name="loaiphong" id="loaiphong" class="form-control1">
                    <option value="">Mời chọn loại phòng</option>
                    <option value="Single">Single</option>
                    <option value="Double">Double</option>
                    <option value="Family">Family</option>
                    <option value="Suite">Suite</option>
                    <option value="VIP">VIP</option>
                </select>
                <i class="fa-solid fa-user form-user"></i>
            </div>
            <div class="form-group">
                <label for="giaphong" class="form-label">Giá Phòng</label>
                <input id="giaphong" name="giaphong" type="number"  class="form-control1" value="<?php echo $giaphong; ?>" required>
                <i class="fa-solid fa-user form-user"></i>
            </div>
            <button class="form-submit" type="submit" name="dangky">Đăng ký</button>
        </form>
        <div class="icon">
            <img src="/image/logo.png" alt="">
        </div>
    </div>
</div>