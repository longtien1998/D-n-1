<?php

$conn = connect_db();
$query = "SELECT * FROM  room WHERE loaiPhong = 'VIP' ";
$result = mysqli_query($conn, $query);
?>

<?php
while ($row = mysqli_fetch_assoc($result)) {
  echo '
        <section>
            <div class="room3-description3">
                <h1>' . htmlspecialchars($row['tenPhong']) . '</h1>
                <div class="tien6">
                    <p>
                        <span class="so10">' . currency_format(htmlspecialchars($row['giaPhong'])) . '</span>
                        /1 đêm
                    </p>
                </div>
            </div>
            <div class="room3-gallery3">
                <img class="gallery3-hightlight3" id="0" src="../content/images/phongvip1-big.jpg"' . htmlspecialchars($row['img']) . ' alt="room3" />
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
                    lại...Chúng tích hợp những <br> tiện ích quan trọng như TV màn hình phẳng 45" , kết nối WiFi và 2 phòng
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
                <li>Loại: ' . htmlspecialchars($row['loaiPhong']) . '</li>
            </div>
            <hr>
            <form class="book1 d-flex justify-content-center w-25" action="/index.php?action=addcart" method="post" >
                <input type="hidden" name="id" value="' . htmlspecialchars($row['id']) . '">
                <input type="hidden" name="tenPhong" value="' . htmlspecialchars($row['tenPhong']) . '">
                <input type="hidden" name="loaiPhong" value="' . htmlspecialchars($row['loaiPhong']) . '">
                <input type="hidden" name="giaPhong" value="' . htmlspecialchars($row['giaPhong']) . '">
                <input id="" name="nguoiLon" type="hidden" min="1" max="10" class="form-control1" value="'.$_SESSION['nguoiLon'].'" />
                <div class="hop15">
                
                <div class="form-group col-lg">
                    <label for="" class="col-form-label">Số lượng: </label>
                    <input  type="number" name="sl" id="sl" class="form-control1" value="1" required />
                    <span class="form-message"></span>
                </div>
                <div class="form-group col-lg">
                    <label for="" class="col-form-label">Ngày Đến:</label>
                    <input id="" name="ngayDen" type="date" class="form-control1" value="'.$_SESSION['ngayDen'].'" required />
                    <span class="form-message"></span>
                </div>
                <div class="form-group col-lg">
                    <label for="" class="col-form-label">Ngày Đi:</label>
                    <input id="" name="ngayDi" type="date" class="form-control1" value="'.$_SESSION['ngayDi'].'" required />
                    <span class="form-message"></span>
                </div>
                
                <input type="submit" name="addtocart" value="Đặt Phòng" class="custom-buy15 buy-15">
            </div>
        </form>
        </section>
        <hr>';
        break;
}
?>