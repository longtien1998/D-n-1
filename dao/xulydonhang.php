<?php
function taodonhang($madh, $tongdonhang, $pttt, $hoten, $tel, $email,$currentDateTime){
    $conn = connect_pdo();
    $sql = "INSERT INTO donhang (madh,tongdonhang,pttt,hoten,tel,email,ngayGioDat)
            VALUE ('" . $madh . "','" . $tongdonhang . "','" . $pttt . "','" . $hoten . "','" . $tel . "','" . $email . "','" . $currentDateTime . "')";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    return $last_id;
}


function addtocart($iddh,$idroom,$tenPhong,$loaiPhong,$nguoiLon,$ngayDen,$ngayDi,$soNgay,$soluong,$dongia,$currentDateTime){
    $conn = connect_pdo();
    $sql = "INSERT INTO cart (iddh,idroom,tenPhong,loaiPhong,nguoiLon,ngayDen,ngayDi,soNgay,soluong,dongia,ngayDat)
    VALUE ('" . $iddh . "','" . $idroom . "','" . $tenPhong . "','" . $loaiPhong . "','" . $nguoiLon . "','" . $ngayDen . "','" . $ngayDi . "','" . $soNgay . "','" . $soluong . "','" . $dongia . "','" . $currentDateTime . "')";
    $conn->exec($sql);
}

function getshowcart($iddh){
    $conn = connect_pdo();
    $stmt = $conn->prepare("SELECT * FROM cart WHERE iddh=".$iddh);
    $stmt -> execute();
    $result = $stmt -> setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}


function getoderinfo($iddh){
    $conn = connect_pdo();
    $sql = "SELECT * FROM donhang WHERE id=$iddh";
    $stmt = $conn->prepare($sql);
    $stmt -> execute();
    $result = $stmt -> setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function donhang_count_all()//truy vấn và trả về sl kh từ csdl
{
    $sql = "SELECT * FROM donhang";
    return executeCount($sql);
}
?>

