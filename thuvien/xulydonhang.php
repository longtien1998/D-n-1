<?php 
    function taodonhang($madh,$tongdonhang,$pttt,$hoten,$tel,$email,$checkin,$checkout){
            $conn = connect_pdo();
            $sql = "INSERT INTO donhang (tongdonhang,madh,pttt,hoten,tel,email,checkin,checkout)
            VALUE ('".$madh."','".$tongdonhang."','".$pttt."','".$hoten."','".$tel."','".$email."','".$checkin."','".$checkout."')";
            $conn->exec($sql);
            $last_id = $conn->lastInsertId();
            return $last_id;
}
?>