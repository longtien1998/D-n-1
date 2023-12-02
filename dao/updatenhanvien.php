<?php
$message="";
if(isset($_GET['manhanvien'])) $manhanvien=$_GET['manhanvien'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // LẤY THÔNG TIN TỪ FORM
    $manhanvien = $_POST['manhanvien'];
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $location = $_POST["location"];
    $postal_code = $_POST["postal-code"];
    $congviec = $_POST["congviec"];
    $calamviec = $_POST["calamviec"];
    $ngayLamViec = $_POST["ngayLamViec"];
    // $img = './uploads/user.png';

    // kiểm tra người dùng đã tồn tại hay chưa
    $conn = connect_db();
    $check_query = "UPDATE nhanvien SET tenDangNhap ='$username',tenNhanVien='$fullname',password='$fullname',congViec='$congviec',ngaylamViec='$ngayLamViec',caLamViec='$calamviec',email='$email',phone='$phone',diachi='$location',macode='$postal_code' WHERE maNhanVien = '$manhanvien'";
    if (mysqli_query($conn,$check_query)) {
        $message = '<h2 class="section-title text-center px-5" style="color: green;"><span class="px-2">Update thành công</span></h2>';
    } else {
        // thêm tài khoản vào cơ sở dữ liệu
        $message = ' <h2 class="section-title text-center px-5" style="color: red;"><span class="px-2">Update thất bại</span></h2>';
    }
}
?>