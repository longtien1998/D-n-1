<?php
    // Kết nối Database
    require '../config/connect.php';
    $id = $_GET['id'];
    $query = mysqli_query($conn, "select * from `post` where id='$id'");
    $row = mysqli_fetch_assoc($query);
?>
    <form method="POST" class="form">
        <h2>Sửa thành viên</h2>
        <label>Tiêu đề:<br />
            <input type="text" value="<?php echo $row['tieude']; ?>" name="tieude" id="tieude" /></label><br />
        <label>URL:<br />
            <input type="text" value="<?php echo $row['url']; ?>" name="url" id="url" /></label><br />
        <label>Nội dung:<br />
            <textarea value="" name="noidung" id="noidung" rows="10" cols="80" /><?php echo $row['noidung']; ?></textarea></label><br />
        <label>Hình ảnh: <br />
            <input type="text" value="<?php echo $row['img']; ?>" name="img" /></label><br />
        <input type="submit" value="Update" name="update_posts">
        <?php require_once './update-baiviet.php'; ?>
    </form>