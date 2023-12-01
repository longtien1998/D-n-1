<?php
 function truysuattintucall(){
    $conn = connect_db();
    $query = "SELECT * FROM baiViet ";

    // Thực thi truy vấn
    $result = mysqli_query($conn, $query);
    return $result;
}
 ?>