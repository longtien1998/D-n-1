<?php
function taodonhang($madh, $tongdonhang, $pttt, $hoten, $tel, $email, $checkin, $checkout){
    $conn = connect_pdo();
    $sql = "INSERT INTO donhang (madh,tongdonhang,pttt,hoten,tel,email,checkin,checkout)
            VALUE ('" . $madh . "','" . $tongdonhang . "','" . $pttt . "','" . $hoten . "','" . $tel . "','" . $email . "','" . $checkin . "','" . $checkout . "')";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    return $last_id;
}


function addtocart($iddh,$idpro,$tenPhong,$maPhong,$loaiphong,$dongia,$soluong){
    $conn = connect_pdo();
    $sql = "INSERT INTO cart (iddh,idroom,tenPhong,maPhong,soluong,dongia,loaiPhong)
    VALUE ('" . $iddh . "','" . $idpro . "','" . $tenPhong . "','" . $maPhong . "','" . $soluong . "','" . $dongia . "','" . $loaiphong . "')";
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

