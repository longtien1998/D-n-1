
<?php 
    function useradmin($sql){
        $conn = connect_db();
        $query = "SELECT * FROM useradmin WHERE username='$sql' ";

        // Thực thi truy vấn
        $result = mysqli_query($conn, $query);
        return $result;
    }

    function usernhanvien($sql){
        $conn = connect_db();
        $query = "SELECT * FROM nhanvien WHERE tenDangNhap='$sql' ";

        // Thực thi truy vấn
        $result = mysqli_query($conn, $query);
        return $result;
    }
    function userKH($sql){
        $conn = connect_db();
        $query = "SELECT * FROM user WHERE tenKhachHang='$sql' ";

        // Thực thi truy vấn
        $result = mysqli_query($conn, $query);
        return $result;
    }
?>