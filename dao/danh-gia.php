<?php
function guidanhgia($maBV, $hoTen, $user, $email, $rating, $review)
{
    $conn = connect_pdo();
    // $sql = "INSERT INTO danhgia(maBaiViet,hoTen,user,email,danhGia,binhLuan) VALUES('$maBV', '$hoTen', '$email', '$rating', '$review')";
    $sql = "INSERT INTO `danhgia`(`MaBaiViet`, `hoTen`,`user`, `email`, `danhGia`, `binhLuan`) VALUES ('$maBV', '$hoTen', '$user', '$email', '$rating', '$review')";
    $conn->exec($sql);
}
function danhgia() //truy vấn và trả về sl kh từ csdl
{
    $sql = "SELECT * FROM danhgia";
    return getData($sql);
}
function danhgia_count() //truy vấn và trả về sl kh từ csdl
{
    $sql = "SELECT * FROM danhgia";
    return executeCount($sql);
}
?>