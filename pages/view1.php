
<?php

$conn = connect_db();

$query = "SELECT * FROM cart";
$result = mysqli_query($conn, $query);
?>



<?php
while ($row = mysqli_fetch_assoc($result)) {
  echo '
  
<section>
  <div class="room-description">
    <h1>Phòng Đơn' . htmlspecialchars($row['tenPhong']) .'</h1>
    <div class="tien4">
      <p>
        <span class="vnd7">VND</span>
        <span class="so7">699.000 ' . htmlspecialchars($row['giaPhong']) . '</span>
        /1 đêm
      </p>
    </div>
  </div>
  <div class="room-gallery">
    <img class="gallery-hightlight" id="0" src="../content/images/room1-big.jpeg" ' . htmlspecialchars($row['hinhPhong']) . ' alt="room" />
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
    <li>Loại: ' . htmlspecialchars($row['roomtype']) . '</li>
    
  </div>
  <hr>
  </section>
              <form action="/index.php?action=addcart" method="post">
                <input type="submit" name="addtocart" value="Mua Hàng">
                <input type="hidden" name="id" value="' . htmlspecialchars($row['id']) . '">
                <input type="hidden" name="tenPhong" value="' . htmlspecialchars($row['tenPhong']) . '">
                <input type="hidden" name="giaPhong" value="' . htmlspecialchars($row['giaPhong']) . '">
                <input type="hidden" name="hinhPhong" value="' . htmlspecialchars($row['hinhPhong']) . '">
                <input type="hidden" name="roomtype" value="' . htmlspecialchars($row['roomtype']) . '">
                
              
            </form>
        </div>
    </div>';
}
?>