<?php
function themsp($tenPhong, $img, $giaPhong)
{
    $conn = connect_pdo();
    $sql = "INSERT INTO room (tenPhong,img,giaPhong) VALUES ('" . $tenPhong . "','" . $img . "','" . $giaPhong . "')";
    // use exec() because no results are returned
    $conn->exec($sql);
}

function getonesp($id) {
    $conn = connect_pdo();
    $stmt = $conn->prepare("SELECT * FROM room WHERE id =" .$id);
    $stmt->execute();
    $kq = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $kq;
}

?>
