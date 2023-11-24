<section>
    <div class="room1-description1">
        <h1>Phòng Đôi</h1>
        <div class="tien5">
            <p>
                <span class="vnd8">VND</span>
                <span class="so8">869.000</span>
                /1 đêm
            </p>
        </div>
    </div>
    <div class="room1-gallery1">
        <img class="gallery1-hightlight1" id="0" src="../content/images/phongdoi1-big.png" alt="room1" />
        <div class="room1-preview1">
            <img id="1" src="../content/images/phongdoi1-small.png" onclick="showimg(1)" alt="" />
            <img id="2" src="../content/images/phongdoi2-small.png" onclick="showimg(2)" alt="" />
            <img id="3" src="../content/images/phongdoi3-small.png" onclick="showimg(3)" alt="" />
            <img id="4" src="../content/images/phongdoi4-small.png" onclick="showimg(4)" alt="" />

        </div>
    </div>

</section>
<section class="tiennghi1">
    <div class="de4">
        <h2>Tiện Nghi</h2>
        <p>Đây là phòng đôi tuyệt vời, được nâng cấp với 2 giường cỡ king,
            một TV màn hình phẳng và <br> một không gian rộng lớn, đủ cho một đôi...
            , cùng với một phòng khách.</p>

    </div>
    <hr>
    <div class="de5">
        <h2>Chi tiết phòng</h2>
        <li>Người lớn: 3</li>
        <li>Tiện nghi: <span style="color: goldenrod;">Tủ quần áo với móc treo, Két cá nhân số, TV màn hình
                phẳng HD, Điện thoại.</span></li>
        <li>Kích cỡ: 28m<span class="num">2</span></li>
        <li>Loại giường: 1 giường</li>
        <li>Loại: Đôi ,Đơn</li>
    </div>
    <hr>
    <div class="de6">
        <h3> Đặt phòng</h3>
        <span>Vui lòng điền đầy đủ thông tin và chính xác!</span>
    </div>
    <form class="book2" action="booking.php" method="post">

        <label class="la1" for="name">Họ và tên:</label>
        <input class="in1" type="text" id="name" name="name" required>

        <label class="la1" for="email">Email:</label>
        <input class="in1" type="email" id="email" name="email" required>

        <label class="la1" for="phone">Số điện thoại:</label>
        <input class="in1" type="tel" id="phone" name="phone" required>

        <label class="la1" for="checkin">Ngày nhận phòng:</label>
        <input class="in1" type="date" id="checkin" name="checkin" required>

        <label class="la1" for="checkout">Ngày trả phòng:</label>
        <input class="in1" type="date" id="checkout" name="checkout" required>

        <label class="la1" for="room-type">Loại phòng:</label>
        <select class="sa1" id="room-type" name="room_type" required>
            <option value="single">Phòng đơn</option>
        </select>

        <div class="hop16">
            <button class="custom-buy16 buy-16"><span>ĐẶT NGAY</span></button>
        </div>
    </form>
</section>
<hr>