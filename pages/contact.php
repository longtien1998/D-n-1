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
    <section class="ser12 row">
        <div class="contact_bodyleft w-25">
            <div class="diachi">
                <h2>Địa Chỉ Khách Sạn</h2>
                <span>410 Nguyễn Lương Bằng, Liên Chiểu, Đà Nẵng</span>
            </div>
            <div class="dat">
                <h2>Đặt Phòng</h2>
                <span>https://www.boncha.com.vn/ <br>
                    Gọi miễn phí: 0888885679</span>
            </div>
            <div class="letan">
                <h2>Lễ Tân</h2>
                <span>
                    Hotline: 1800 8888 <br>
                    noname@gmail.com
                </span>
            </div>
        </div>
        <div class="contact_bodyright w-75 ">
            <div class="lienhe">
                <h2>Hãy góp ý cho chúng tôi!</h2>
                <span>Vui lòng không được để trống!</span>
            </div>

            <form class="danhgia" action="">
                <label for="name-1">Họ và tên:</label>
                <input type="text" id="name-1" name="name-1" required style="width: 600px;" placeholder="Vui lòng nhập họ tên">

                <label for="email-1">Địa chỉ email:</label>
                <input type="email" id="email-1" name="email-1" required style="width: 600px;" placeholder="Vui lòng nhập email">
                <label for="rating">Đánh giá:</label>
                <select id="rating-1" name="rating-1" required style="width: 600px; height: 40px;" >
                    <option value="5">5 sao</option>
                    <option value="4">4 sao</option>
                    <option value="3">3 sao</option>
                    <option value="2">2 sao</option>
                    <option value="1">1 sao</option>
                </select>
                <label for="review">Ý kiến đánh giá:</label> <br>
                <textarea id="review" name="review" rows="4" required style="width: 600px;"></textarea>
                <div class="hop19">
                    <button onclick="xacnhan() " class="custom-buy19 buy-19"><span>Gửi đánh giá</span></button>
                </div>
                <script>
                    function xacnhan() {
                        alert("Cảm ơn bạn đã đánh giá");
                    }
                </script>
            </form>
        </div>
    </section>