<?php

$conn = connect_db();
$query = "SELECT * FROM  room WHERE loaiPhong = 'Family' ";
$result = mysqli_query($conn, $query);
?>
<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo '
        <section>
            <div class="room2-description2">
                <h1>' . htmlspecialchars($row['tenPhong']) . '</h1>
                <div class="tien6">
                    <p>
                        <span class="so9">' . currency_format(htmlspecialchars($row['giaPhong'])) . '</span>
                        /1 đêm
                    </p>
                </div>
            </div>
            <div class="room2-gallery2">
                <img class="gallery2-hightlight2" id="0" src="../content/images/phonggiadinh1-big.jpg" ' . htmlspecialchars($row['img']) . ' alt="room2" />
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
                <li>Trẻ em: 2</li>
                <li>Tiện nghi: <span style="color: goldenrod;">Tủ quần áo với móc treo, Két cá nhân số hóa, Wi-Fi
                        tốc độ cao miễn phí và kết nối internet cáp.</span></li>
                <li>Kích cỡ: 30m<span class="num">2</span></li>
                <li>Loại giường: 2 giường </li>
                <li>Loại: ' . htmlspecialchars($row['loaiPhong']) . '</li>
            </div>
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
        <hr class="my-5 ">
        ';
    break;
}
?>