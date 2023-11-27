<?php 
    // echo "Đăng xuất thành công";
    session_start();
    session_unset('user');
    session_destroy();


    header("Location: /index.php?action=home");
?>
