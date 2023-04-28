<?php
$servername = "localhost:3306";
$dbname = "module_4";
$dbusername = "root";
$password = "Db2\$Gntu";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>