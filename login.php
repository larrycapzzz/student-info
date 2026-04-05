<?php
session_start();

if(isset($_POST['login'])){
    if($_POST['username']=="admin" && $_POST['password']=="1234"){
        $_SESSION['admin']=true;
        header("Location: index.php");
    } else {
        echo "Invalid login!";
    }
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
<h2>Admin Login</h2>
<form method="POST">
<input name="username" placeholder="Username"><br>
<input name="password" type="password" placeholder="Password"><br>
<button name="login">Login</button>
</form>
</div>