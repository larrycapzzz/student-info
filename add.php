<?php
include 'config.php';
$conn->query("INSERT INTO students(firstname,lastname,email,course)
VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[course]')");
header("Location: index.php");
?>