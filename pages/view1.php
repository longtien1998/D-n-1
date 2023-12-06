
<div class="mess text-center text-danger bg-white border-radius p-2 ">
  <h2 class="py-2 px-2">Thêm giỏ hàng thất bại</h2>
</div>
<?php

$conn = connect_db();
$query = "SELECT * FROM  room WHERE loaiPhong = 'Single' ";
$result = mysqli_query($conn, $query);
?>

<?php
while ($row = mysqli_fetch_assoc($result)) {
  echo '<section class="p-2 mt-5">
        <div class="room-description">
          <h1>' . htmlspecialchars($row['tenPhong']) . '</h1>
          <div class="tien4">
            <p>
              
              <span class="so7">' . currency_format(htmlspecialchars($row['giaPhong'])) . '</span>
              /1 đêm
            </p>
          </div>
        </div>
        <div class="room-gallery">
          <img class="gallery-hightlight" id="0" src="../content/images/room1-big.jpeg" ' . htmlspecialchars($row['img']) . ' alt="room" />
          <div class="room-preview">
            <img id="1" src="../content/images/room1-small.jpeg" onclick="showimg(1)" alt="" />
            <img id="2" src="../content/images/room2-small.jpeg" onclick="showimg(2)" alt="" />
            <img id="3" src="../content/images/room3-small.jpeg" onclick="showimg(3)" alt="" />
            <img id="4" src="../content/images/phongdoi4-small.png" onclick="showimg(4)" alt="" />
          </div>
        </div>
      </section>
      <section class="tiennghi">
        <div class="de1 ">
          <h2>Tiện Nghi</h2>
          <p>Hãy tận hưởng những căn hộ sang trọng của chúng tôi với toàn bộ sự tinh tế và sự thoải mái mà nội
            thất của nó mang lại... <br> Nó đi kèm với những tiện ích cần thiết như một TV màn hình phẳng 45", WiFi
            và 1 phòng tắm.</p>
        </div>
        <div class="de2 border-top">
          <h2>Chi tiết phòng</h2>
          <p>Mã phòng: ' . htmlspecialchars($row['maPhong']) . '</p>
          <li>Người lớn: 2</li>
          <li>Tiện nghi: <span style="color: goldenrod;">Tủ quần áo với móc treo, Két cá nhân số, TV màn hình
              phẳng HD, Điện thoại.</span></li>
          <li>Kích cỡ: 25m<span class="num">2</span></li>
          <li>Loại giường: 1 giường</li>
          <li>Loại: ' . htmlspecialchars($row['loaiPhong']) . '</li> 
        </div>
        <form class="book1" action="/index.php?action=addcart" method="post">
              <input type="hidden" name="id" value="' . htmlspecialchars($row['id']) . '">
              <input type="hidden" name="maPhong" value="' . htmlspecialchars($row['maPhong']) . '">
              <input type="hidden" name="tenPhong" value="' . htmlspecialchars($row['tenPhong']) . '">
              <input type="hidden" name="loaiPhong" value="' . htmlspecialchars($row['loaiPhong']) . '">
              <input type="hidden" name="giaPhong" value="' . htmlspecialchars($row['giaPhong']) . '">
              <div class="hop15">
                <input type="number" name="sl" id="sl" value="1" class="my-3 w-25">
                <br>
                <input type="submit" name="addtocart" value="Đặt Phòng" class="custom-buy15 buy-15">
            </div>
        </form>
      </section> 
      <hr class="my-5 ">
      ';
}

?>
<!-- <div class="hop15">
  <button class="custom-buy6 buy-6"><span><a style="text-decoration: none; " href="index.php?action=view1&addcart=add&maphong=' . htmlspecialchars($row['maPhong']) . '">ĐẶT NGAY</a></span></button>
</div> -->