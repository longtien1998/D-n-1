<?php
function taodonhang($madh, $tongdonhang, $pttt, $hoten, $tel, $email, $checkin, $checkout){
    $conn = connect_pdo();
    $sql = "INSERT INTO donhang (madh,tongdonhang,pttt,hoten,tel,email,checkin,checkout)
            VALUE ('" . $madh . "','" . $tongdonhang . "','" . $pttt . "','" . $hoten . "','" . $tel . "','" . $email . "','" . $checkin . "','" . $checkout . "')";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    return $last_id;
}


function addtocart($iddh,$idpro,$tenPhong,$img,$soluong,$dongia){
    $conn = connect_pdo();
    $sql = "INSERT INTO cart (iddh,idpro,tenPhong,img,soluong,dongia)
    VALUE ('" . $iddh . "','" . $idpro . "','" . $tenPhong . "','" . $img . "','" . $soluong . "','" . $dongia . "')";
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
    $stmt = $conn->prepare("SELECT * FROM donhang WHERE id=".$iddh);
    $stmt -> execute();
    $result = $stmt -> setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
?>
