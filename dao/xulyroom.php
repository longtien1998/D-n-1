<?php
function themsp($tenPhong, $img, $giaPhong)
{
    $conn = connect_pdo();
    $sql = "INSERT INTO room (tenPhong,img,giaPhong) VALUES ('" . $tenPhong . "','" . $img . "','" . $giaPhong . "')";
    // use exec() because no results are returned
    $conn->exec($sql);
}

?>
