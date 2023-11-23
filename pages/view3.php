<section>
        <div class="room2-description2">
            <h1>Phòng Gia Đình</h1>
            <div class="tien6">
                <p>
                    <span class="vnd9">VND</span>
                    <span class="so9">1.299.000</span>
                    /1 đêm
                </p>
            </div>
        </div>
        <div class="room2-gallery2">
            <img class="gallery2-hightlight2" id="0" src="../content/images/phonggiadinh1-big.jpg" alt="room2" />
            <div class="room2-preview2">
                <img id="1" src="../content/images/phonggiadinh1-small.jpg" onclick="showimg(1)" alt="" />
                <img id="2" src="../content/images/phonggiadinh2-small.jpg" onclick="showimg(2)" alt="" />
                <img id="3" src="../content/images/phonggiadinh3-small.jpg" onclick="showimg(3)" alt="" />
                <img id="4" src="../content/images/phonggiadinh4-small.jpg" onclick="showimg(4)" alt="" />

            </div>
        </div>

    </section>
    <section class="tiennghi2">
        <div class="de7">
            <h2>Tiện Nghi</h2>
            <p>Hãy tận hưởng sự sang trọng và thoải mái trong các căn hộ cổ điển của chúng tôi...Chúng tích hợp
                những tiện ích quan trọng như TV màn hình phẳng 45" <br>,kết nối Wi-Fi và 2 phòng tắm với
                một phòng khách và 2 phòng ngủ, đủ lớn và lịch lãm để coi như là
                những phòng ngủ của một căn hộ</p>

        </div>
        <hr>
        <div class="de8">
            <h2>Chi tiết phòng</h2>
            <li>Người lớn: 2</li>
            <li>Tiện nghi: <span style="color: goldenrod;">Tủ quần áo với móc treo, Két cá nhân số hóa, Wi-Fi
                    tốc độ cao miễn phí và kết nối internet cáp.</span></li>
            <li>Kích cỡ: 30m<span class="num">2</span></li>
            <li>Loại giường: 1 giường </li>
            <li>Loại: Đôi</li>
        </div>
        <hr>
        <div class="de9">
            <h3> Đặt phòng</h3>
            <span>Vui lòng điền đầy đủ thông tin và chính xác!</span>
        </div>
        <form class="book3" action="booking.php" method="post">

            <label class="la2" for="name">Họ và tên:</label>
            <input class="in2" type="text" id="name" name="name" required>

            <label class="la2" for="email">Email:</label>
            <input class="in2" type="email" id="email" name="email" required>

            <label class="la2" for="phone">Số điện thoại:</label>
            <input class="in2" type="tel" id="phone" name="phone" required>

            <label class="la2" for="checkin">Ngày nhận phòng:</label>
            <input class="in2" type="date" id="checkin" name="checkin" required>

            <label class="la2" for="checkout">Ngày trả phòng:</label>
            <input class="in2" type="date" id="checkout" name="checkout" required>

            <label class="la2" for="room-type">Loại phòng:</label>
            <select class="sa2" id="room-type" name="room_type" required>
                <option value="single">Phòng Gia Đình</option>
            </select>

            <div class="hop17">
                <button class="custom-buy17 buy-17"><span>ĐẶT NGAY</span></button>
            </div>
        </form>
    </section>
    <hr>