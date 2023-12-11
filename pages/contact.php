<?php 
if(isset($_SESSION['user']) && ($_SESSION['user'])){
    $user = $_SESSION['user'];

} else {
    $user = "";
}
?>
<div class="tong6">
    <div class="trangchu6">
        <h5><a href="/index.php?action=home">Trang Chủ |</a></h5>
        <span>Contact</span>
    </div>
</div>
<section class="se8">
    <div class="a-10">
        <h3>CONTACT</h3>
    </div>
    </div>
</section>
<section class="ser12 row col-lg-12">
    <div class="contact_bodyleft  col-lg-5">
        <div class="diachi">
            <h2>Địa Chỉ Khách Sạn</h2>
            <span>260 Võ Nguyên Giáp, Phường Mỹ An, Ngũ Hành Sơn, Đà Nẵng 550000, Việt Nam</span>
        </div>
        <div class="dat">
            <h2>Đặt Phòng</h2>
            <span>https://www.boncha.com.vn/ <br>
                Gọi miễn phí: 1800 8888</span>
        </div>
        <div class="letan">
            <h2>Lễ Tân</h2>
            <span>
                Hotline: 1800 8888 <br>
                noname@gmail.com
            </span>
        </div>
    </div>
    <div class="contact_bodyright  col-lg-7">
        <div class="lienhe">
            <h2>Hãy góp ý cho chúng tôi!</h2>
            <span>Vui lòng không được để trống!</span>
        </div>

        <form class="danhgia " action="" onSubmit="return xoanv()" method="POST">
            <label for="name-1">Họ và tên:</label>
            <input type="text" id="name-1" name="name-1" required style="max-width: 600px;" placeholder="Vui lòng nhập họ tên"><br>

            <label for="email-1">Địa chỉ email:</label>
            <input type="email" id="email-1" name="email-1" required style="max-width: 600px;" placeholder="Vui lòng nhập email"><br>
            <label for="rating">Đánh giá:</label>
            <select id="rating-1" name="rating-1" required style="max-width: 600px; height: 40px;"><br>
                <option value="5">5 sao</option>
                <option value="4">4 sao</option>
                <option value="3">3 sao</option>
                <option value="2">2 sao</option>
                <option value="1">1 sao</option>
            </select><br>
            <input type="hidden" name="user" value="<?php echo $user; ?>">
            <label for="review">Ý kiến đánh giá:</label> 
            <textarea id="review" name="review" rows="4" required style="max-width: 600px;"></textarea>
            <div class="align-self-center col-lg my-5">
                <!-- <input id="" name="" type="submit" class="form-control text-dark border-warning bg-transparent text-uppercase" value="Kiểm tra" required /> -->
                <input type="submit" name="guidanhgia" value="Gửi đánh giá" class="custom-buy15 buy-15">
                <span class="form-message"></span>
            </div>
        </form>
    </div>
</section>
<?php
if (isset($_POST['guidanhgia']) && $_POST['guidanhgia']) {
        $user = $_POST['user'];
        $name = $_POST['name-1'];
        $email = $_POST['email-1'];
        $rating = $_POST['rating-1'];
        $review = $_POST['review'];
        $maBV = "BV".rand(100000,999999);
        guidanhgia($maBV,$name,$user,$email,$rating,$review);
        echo "<script>
        window.location.href = 'http://localhost:3000/index.php?action=contact';
        </script>
        ";
    
}
?>
<script>
    function xoanv() {
        let optnv = confirm("Bạn có muốn gửi đánh giá này không ?");
        if (optnv) {
            alert("Cảm ơn bạn đã đánh giá");
            return true;
        } else {
            return false;
        }
    }
</script>
