
<?php
    $conn = connect_db();
    $query = "SELECT * FROM  room WHERE loaiPhong = 'Double' ";
    $result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
  echo '<section class="col-lg-12">
    <div class="room1-description1">
        <h1>' . htmlspecialchars($row['tenPhong']) . '</h1>
        <div class="tien5">
            <p>
                <span class="so8">' . currency_format(htmlspecialchars($row['giaPhong'])) . '</span>
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
<section class="tiennghi1 col-lg-12">
    <div class="de4">
        <h2>Tiện Nghi</h2>
        <p>Đây là phòng đôi tuyệt vời, được nâng cấp với 2 giường cỡ king,
            một TV màn hình phẳng và <br> một không gian rộng lớn, đủ cho một đôi...
            , cùng với một phòng khách.</p>

    </div>
    <hr>
    <div class="de5">
        <h2>Chi tiết phòng</h2>
        
        <li>Người lớn: 4</li>
        <li>Tiện nghi: <span style="color: goldenrod;">Tủ quần áo với móc treo, Két cá nhân số, TV màn hình
                phẳng HD, Điện thoại.</span></li>
        <li>Kích cỡ: 28m<span class="num">2</span></li>
        <li>Loại giường: 1 giường</li>
        <li>Loại: ' . htmlspecialchars($row['loaiPhong']) . '</li>
    </div>
    <form class="book1" action="/index.php?action=addcart" method="post">
        <input type="hidden" name="id" value="' . htmlspecialchars($row['id']) . '">
        <input type="hidden" name="nguoiLon" value="'.$_SESSION['nguoiLon'].'">
        <input type="hidden" name="tenPhong" value="' . htmlspecialchars($row['tenPhong']) . '">
        <input type="hidden" name="loaiPhong" value="' . htmlspecialchars($row['loaiPhong']) . '">
        <input type="hidden" name="giaPhong" value="' . htmlspecialchars($row['giaPhong']) . '">
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
</section>  <hr class="my-5 ">';
break;
}

?>