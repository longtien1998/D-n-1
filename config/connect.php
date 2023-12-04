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
<<<<<<< HEAD
?>
=======

>>>>>>> ebb27a5f233cf0f6b16caff9fda7d8b06f37edd4
