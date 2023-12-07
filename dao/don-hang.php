<?php 
    function getdonhang($madonhang){
        $sql = "SELECT * FROM donhang WHERE madh=?";
        $data =  pdo_query_one($sql,$madonhang);
    return $data;
    }
    function updatedonhang($trangthaidh, $madonhang){ //cập nhật thông tin loại hh đã có trong csdl
        $sql = "UPDATE donhang SET trangThaiDonHang='$trangthaidh' WHERE madh='$madonhang'";
        pdo_execute($sql);
        // header("Refresh:0");
    }
?>
