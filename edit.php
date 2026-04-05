<?php
include 'config.php';
$id=$_GET['id'];

$row=$conn->query("SELECT * FROM students WHERE id=$id")->fetch_assoc();

if(isset($_POST['update'])){
$conn->query("UPDATE students SET
firstname='$_POST[firstname]',
lastname='$_POST[lastname]',
email='$_POST[email]',
course='$_POST[course]'
WHERE id=$id");

header("Location: index.php");
}
?>

<form method="POST">
<input name="firstname" value="<?php echo $row['firstname']; ?>"><br>
<input name="lastname" value="<?php echo $row['lastname']; ?>"><br>
<input name="email" value="<?php echo $row['email']; ?>"><br>
<input name="course" value="<?php echo $row['course']; ?>"><br>
<button name="update">Update</button>
</form>