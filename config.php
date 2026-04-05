<?php
$host = "sql100.infinityfree.com";
$user = "if0_41567341";
$password = "nFurYJNrLq";
$dbname = "if0_41567341_student_db";
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}
?>