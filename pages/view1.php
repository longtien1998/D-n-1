<section>
  <div class="room-description">
    <h1>Phòng Đơn</h1>
    <div class="tien4">
      <p>
        <span class="vnd7">VND</span>
        <span class="so7">699.000</span>
        /1 đêm
      </p>
    </div>
  </div>
  <div class="room-gallery">
    <img class="gallery-hightlight" id="0" src="../content/images/room1-big.jpeg" alt="room" />
    <div class="room-preview">
      <img id="1" src="../content/images/room1-small.jpeg" onclick="showimg(1)" alt="" />
      <img id="2" src="../content/images/room2-small.jpeg" onclick="showimg(2)" alt="" />
      <img id="3" src="../content/images/room3-small.jpeg" onclick="showimg(3)" alt="" />
      <img id="4" src="../content/images/phongdoi4-small.png" onclick="showimg(4)" alt="" />
    </div>
  </div>
</section>
<section class="tiennghi">
  <div class="de1">
    <h2>Tiện Nghi</h2>
    <p>Hãy tận hưởng những căn hộ sang trọng của chúng tôi với toàn bộ sự tinh tế và sự thoải mái mà nội
      thất của nó mang lại... <br> Nó đi kèm với những tiện ích cần thiết như một TV màn hình phẳng 45", WiFi
      và 1 phòng tắm.</p>
  </div>
  <hr>
  <div class="de2">
    <h2>Chi tiết phòng</h2>
    <li>Người lớn: 3</li>
    <li>Tiện nghi: <span style="color: goldenrod;">Tủ quần áo với móc treo, Két cá nhân số, TV màn hình
        phẳng HD, Điện thoại.</span></li>
    <li>Kích cỡ: 25m<span class="num">2</span></li>
    <li>Loại giường: 1 giường</li>
    <li>Loại: Đôi ,Đơn</li>
  </div>
  <hr>
  <div class="de3">
    <h3> Đặt phòng</h3>
    <span>Vui lòng điền đầy đủ thông tin và chính xác!</span>
  </div>
  <form class="book1" action="booking.php" method="post">

    <label class="la" for="name">Họ và tên:</label>
    <input class="in" type="text" id="name" name="name" required>

    <label class="la" for="email">Email:</label>
    <input class="in" type="email" id="email" name="email" required>

    <label class="la" for="phone">Số điện thoại:</label>
    <input class="in" type="tel" id="phone" name="phone" required>

    <label class="la" for="checkin">Ngày nhận phòng:</label>
    <input class="in" type="date" id="checkin" name="checkin" required>

    <label class="la" for="checkout">Ngày trả phòng:</label>
    <input class="in" type="date" id="checkout" name="checkout" required>

    <label class="la" for="room-type">Loại phòng:</label>
    <select class="sa" id="room-type" name="room_type" required>
      <option value="single">Phòng đơn</option>
    </select>

    <div class="hop15">
      <button class="custom-buy15 buy-15"><span>ĐẶT NGAY</span></button>
    </div>
  </form>
</section>
<hr>