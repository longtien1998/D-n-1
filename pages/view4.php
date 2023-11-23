<section>
        <div class="room3-description3">
            <h1>Phòng VIP</h1>
            <div class="tien6">
                <p>
                    <span class="vnd10">VND</span>
                    <span class="so10">2.149.000</span>
                    /1 đêm
                </p>
            </div>
        </div>
        <div class="room3-gallery3">
            <img class="gallery3-hightlight3" id="0" src="../content/images/phongvip1-big.jpg" alt="room3" />
            <div class="room3-preview3">
                <img id="1" src="../content/images/phongvip1-small.jpg" onclick="showimg(1)" alt="" />
                <img id="2" src="../content/images/phongvip2-small.jpg" onclick="showimg(2)" alt="" />
                <img id="3" src="../content/images/phongvip3-small.jpg" onclick="showimg(3)" alt="" />
                <img id="4" src="../content/images/phongvip4-small.jpg" onclick="showimg(4)" alt="" />

            </div>
        </div>

    </section>
    <section class="tiennghi3">
        <div class="de10">
            <h2>Tiện Nghi</h2>
            <p>Hãy tận hưởng các căn hộ cổ điển của chúng tôi với sự lịch lãm và thoải mái mà nội thất của nó mang
                lại...Chúng tích hợp những <br> tiện ích quan trọng như TV màn hình phẳng 45"  , kết nối WiFi và 2 phòng
                tắm cùng
                một phòng khách.</p>
        </div>
        <hr>
        <div class="de11">
            <h2>Chi tiết phòng</h2>
            <li>Người lớn: 2</li>
            <li>Tiện nghi: <span style="color: goldenrod;"> Máy lạnh, Bồn tắm và vòi sen và máy sấy tóc, Tủ quần
                    áo với móc treo,<br> Két cá nhân số hóa, Wi-Fi tốc độ cao miễn phí và kết nối internet cáp, TV
                    màn hình phẳng HD, Điện thoại.</span></li>
            <li>Kích cỡ: 35m<span class="num">2</span></li>
            <li>Loại giường: 1 giường</li>
            <li>Loại: 3</li>
        </div>
        <hr>
        <div class="de12">
            <h3> Đặt phòng</h3>
            <span>Vui lòng điền đầy đủ thông tin và chính xác!</span>
        </div>
        <form class="book4" action="booking.php" method="post">

            <label class="la3" for="name">Họ và tên:</label>
            <input class="in3" type="text" id="name" name="name" required>

            <label class="la3" for="email">Email:</label>
            <input class="in3" type="email" id="email" name="email" required>

            <label class="la3" for="phone">Số điện thoại:</label>
            <input class="in3" type="tel" id="phone" name="phone" required>

            <label class="la3" for="checkin">Ngày nhận phòng:</label>
            <input class="in3" type="date" id="checkin" name="checkin" required>

            <label class="la3" for="checkout">Ngày trả phòng:</label>
            <input class="in3" type="date" id="checkout" name="checkout" required>

            <label class="la3" for="room-type">Loại phòng:</label>
            <select class="sa3" id="room-type" name="room_type" required>
                <option value="single">Phòng Vip</option>
            </select>

            <div class="hop18">
                <button class="custom-buy18 buy-18"><span>ĐẶT NGAY</span></button>
            </div>
        </form>
    </section>
    <hr>