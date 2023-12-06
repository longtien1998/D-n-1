<?php
if (isset($_POST['update_posts'])) {
    $id = $_GET['id'];
    $tieude = $_POST['tieude'];
    $url = $_POST['url'];
    $noidung = $_POST['noidung'];
    $img = $_POST['img'];

    $sql = "UPDATE `post` SET tieude='$tieude', '$url', noidung='$noidung', img='$img' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<b>Record updated successfully</b>";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
