<?php
  function connect_db() {   
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "quanlykhachsan";

      
      // Create connection
      $conn = new mysqli($servername, $username, $password,$dbname);
      
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      // echo "Connected successfully";
      return $conn;
  }

  function connect_pdo(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quanlykhachsan";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }
?>

