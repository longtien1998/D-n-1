<?php

session_start();
?>
<?php
if (isset($_SESSION['user'])) {
  $data =  getUseradimByName($_SESSION['user']);
  if (!empty($data)) {
    $name = $data['fullname'];
    $hinh = $data['urlimage'];
    $hidden = '';
  } else {
    $datanv = getUsernhanvienByName($_SESSION['user']);
    $name = $datanv['tenNhanVien'];
    $hinh = $datanv['urlimage'];
    $hidden = 'class="hidden"';
  }
} else {
  $name = "Admin";
  $hinh = "uploads/user.png";
  $hidden = '';
}

$a1 = "";
$a2 = "";
$a3 = "";
$a4 = "";
$a5 = "";
$a6 = "";
$a7 = "";
if (!isset($_GET["controller"])) $_GET["controller"] = "dashboard";
if ($_GET["controller"] === 'dashboard') $a1 = "active";
else if ($_GET["controller"] === 'user-admin')  $a2 = 'active';
else if ($_GET["controller"] === 'user-nhanvien')  $a3 = 'active';
else if ($_GET["controller"] === 'quanlyroom')  $a4 = 'active';
else if ($_GET["controller"] === 'quanlyBooking')  $a5 = 'active';
else if ($_GET["controller"] === 'service')  $a6 = 'active';
else if ($_GET["controller"] === 'contact')  $a7 = 'active';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <!-- <link rel="stylesheet" type="text/css" href="/public/bootstrap.css"> -->
  <link rel="stylesheet" type="text/css" href="/admin/content-admin/css/main.css">
  <link rel="stylesheet" type="text/css" href="/admin/content-admin/css/style.css">
  <link rel="stylesheet" href="/content/css/login_re.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <!-- thư viện biểu đồ -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body onload="time()" class="app sidebar-mini rtl">
  <!-- Navbar-->
  <header class="app-header">
    <!-- Sidebar toggle button-->
    <div class="app-sidebar__toggle" href="" data-toggle="sidebar" aria-label="Hide Sidebar"></div>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


      <!-- User Menu-->
      <li><a class="app-nav__item" href="/dao/logout.php"><i class='bx bx-log-out bx-rotate-180'></i> </a>

      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->

  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../<?php echo $hinh; ?>" alt="User Image">
      <div>
<<<<<<< HEAD
        <p class="app-sidebar__user-name"><b>Tôn Long Tiến</b></b></p>
=======

        <p class="app-sidebar__user-name"><b><?php echo $name; ?></b></p>
>>>>>>> ebb27a5f233cf0f6b16caff9fda7d8b06f37edd4
        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
      </div>
    </div>
    <hr>
    <ul class="app-menu">
<<<<<<< HEAD
      
      <li><a class="app-menu__item active" href="/admin/index.php"><i class='app-menu__icon bx bx-tachometer'></i><span
            class="app-menu__label">Bảng điều khiển</span></a></li>
      <li><a class="app-menu__item " href="/admin/index.php?controller=user-admin"><i class='app-menu__icon bx bx-id-card'></i> <span
            class="app-menu__label">Quản lý Admin</span></a></li>
      <li><a class="app-menu__item" href="/admin/index.php?controller=user-nhanvien"><i class='app-menu__icon bx bx-user-voice'></i><span
            class="app-menu__label">Quản lý Nhân viên</span></a></li>
      <li><a class="app-menu__item" href="/admin/index.php?controller=quanlyroom"><i
            class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý phòng</span></a>
      </li>
      <li><a class="app-menu__item" href="table-data-oder.html"><i class='app-menu__icon bx bx-task'></i><span
            class="app-menu__label">Quản lý booking</span></a></li>
      <li><a class="app-menu__item" href="/admin/index.php?controller=gioithieu"><i class='app-menu__icon bx bx-run'></i><span
            class="app-menu__label">Quản lý tin tức
=======

      <li <?php echo $hidden; ?>><a class="app-menu__item <?php echo $a1;?>" href="/admin/index.php"><i class='app-menu__icon bx bx-tachometer'></i><span class="app-menu__label">Bảng điều khiển</span></a></li>
      <li <?php echo $hidden; ?>><a class="app-menu__item <?php echo $a2;?>" href="/admin/index.php?controller=user-admin"><i class='app-menu__icon bx bx-id-card'></i> <span class="app-menu__label">Quản lý Admin</span></a></li>
      <li <?php echo $hidden; ?>><a class="app-menu__item <?php echo $a3;?>" href="/admin/index.php?controller=user-nhanvien"><i class='app-menu__icon bx bx-user-voice'></i><span class="app-menu__label">Quản lý Nhân viên</span></a></li>
      <li <?php echo $hidden; ?>><a class="app-menu__item <?php echo $a4;?>" href="/admin/index.php?controller=quanlyroom"><i class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý phòng</span></a></li>
      <li><a class="app-menu__item <?php echo $a5;?>" href="/admin/index.php?controller=quanlyBooking"><i class='app-menu__icon bx bx-task'></i><span class="app-menu__label">Quản lý booking</span></a></li>
      <!-- <li><a class="app-menu__item" href="table-data-banned.html"><i class='app-menu__icon bx bx-run'></i><span
            class="app-menu__label">Quản lý nội bộ
>>>>>>> ebb27a5f233cf0f6b16caff9fda7d8b06f37edd4
          </span></a></li>
<!-- <li><a class="app-menu__item" href="table-data-money.html"><i class='app-menu__icon bx bx-dollar'></i><span
            class="app-menu__label">Bảng kê lương</span></a></li>
      <li><a class="app-menu__item" href="quan-ly-bao-cao.html"><i
            class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Báo cáo doanh thu</span></a>
      </li>
      <li><a class="app-menu__item" href="page-calendar.html"><i class='app-menu__icon bx bx-calendar-check'></i><span
<<<<<<< HEAD
            class="app-menu__label">Lịch công tác </span></a></li>  -->
      <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-cog'></i><span class="app-menu__label">Cài
=======
            class="app-menu__label">Lịch công tác </span></a></li> -->
      <li><a class="app-menu__item" href=""><i class='app-menu__icon bx bx-cog'></i><span class="app-menu__label ">Cài
>>>>>>> ebb27a5f233cf0f6b16caff9fda7d8b06f37edd4
            đặt hệ thống</span></a></li>
      <li><a class="app-menu__item" href="/index.php"><i class="app-menu__icon bx bx-log-in-circle"></i><span class="app-menu__label">Xem trang Chính</span></a></li>
    </ul>

  </aside>
  <div class="close-menu">
  </div>
  <main class="app-content">
    <div class="row">
      <div class="col-md-12">
        <div class="app-title">
          <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="#"><b>Bảng điều khiển</b></a></li>
          </ul>
          <div id="clock"></div>
        </div>
      </div>
    </div>