<?php
$servername = "localhost";
$dbname = "institute_db";
$username = "root";
$password = "";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
  print $e->getMessage();
}