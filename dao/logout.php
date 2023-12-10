<?php 
    // echo "Đăng xuất thành công";
    // session_start();
    unset($_SESSION['user']);
    session_destroy();


    header("location: /index.php?action=home");
?>
