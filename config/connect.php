<?php
function connect_db()
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "quanlykhachsan";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  return $conn;
}

function connect_pdo()
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "quanlykhachsan";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}
//text thêm bài viết
// Trong tệp connect.php

// Kết nối đến cơ sở dữ liệu
function getConnection() {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "quanlykhachsan";

  // Tạo kết nối
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  return $conn;
}

// Thực hiện truy vấn và trả về kết quả
function executeResult($sql) {
  $conn = getConnection();

  // Thực hiện truy vấn
  $result = $conn->query($sql);

  // Kiểm tra lỗi
  if (!$result) {
      die("Query failed: " . $conn->error);
  }

  // Xử lý kết quả
  $data = array();
  while ($row = $result->fetch_assoc()) {
      $data[] = $row;
  }

  // Đóng kết nối
  $conn->close();

  return $data;
}
