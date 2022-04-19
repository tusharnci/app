<?php 

$host = "localhost";
$user = "nciexam_db";
$pass = "JcCCnW0NhC";
$db   = "nciexam_db";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>