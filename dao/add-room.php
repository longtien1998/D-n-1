<?php
    // xử lý yêu cầu đăng kí khi đẩy form
    $nameroom = '';
    $maphong = '';
    $giaphong = '';
    $loaiphong="";
    $message = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // LẤY THÔNG TIN TỪ FORM
        $nameroom = $_POST["nameroom"];
        $maphong = $_POST["maphong"];
        $giaphong = $_POST["giaphong"];
        $loaiphong = $_POST["loaiphong"];
        

        // kiểm tra người dùng đã tồn tại hay chưa
        $conn = connect_db();
        $check_query = "SELECT *FROM room WHERE maPhong = '$maphong'";
        $result = $conn->query($check_query);
        if ( $result->num_rows >0 ) {
            $message ='<h2 class="section-title text-center px-4" style="color: red;><span class="px-2 ">Mã phòng đã đăng kí</span></h2>';
        } else {
            // thêm tài khoản vào cơ sở dữ liệu
            
            $insert_query = "INSERT INTO room (tenPhong,maPhong,loaiPhong, giaPhong) VALUES ('$nameroom', '$maphong','$loaiphong', '$giaphong')";
            if ($conn->query($insert_query) == TRUE) {
                $message = '<h2 class="section-title text-center px-5" style="color: green;"><span class="px-2">Đăng ký thành công</span></h2>';
            } else {
                $message = ' <h2 class="section-title text-center px-5" style="color: red;"><span class="px-2">Đăng ký thất bại</span></h2>';
            }
        }
    }

    // đóng kết nối
?>