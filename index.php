<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}
include 'config.php';

$count = $conn->query("SELECT COUNT(*) as total FROM students");
$total = $count->fetch_assoc()['total'];
?>

<link rel="stylesheet" href="style.css">

<div class="header">Student Information System</div>

<div class="container-main">

<div class="sidebar">
<a href="index.php">STUDENT LIST</a>
<a href="developer.php">DEVELOPERS</a>
<a href="about.php">ABOUT</a>
<a href="logout.php">LOGOUT</a>
</div>

<div class="content">

<div class="card">
<p>Total Students</p>
<h2><?php echo $total; ?></h2>
</div>

<form action="add.php" method="POST">
<input name="firstname" placeholder="First Name">
<input name="lastname" placeholder="Last Name">
<input name="email" placeholder="Email">
<input name="course" placeholder="Course">
<button>Add</button>
</form>

<table>
<tr>
<th>ID</th><th>First</th><th>Last</th><th>Email</th><th>Course</th><th>Action</th>
</tr>

<?php
$res=$conn->query("SELECT * FROM students");
while($r=$res->fetch_assoc()){
echo "<tr>
<td>{$r['id']}</td>
<td>{$r['firstname']}</td>
<td>{$r['lastname']}</td>
<td>{$r['email']}</td>
<td>{$r['course']}</td>
<td>
<a class='btn-edit' href='edit.php?id={$r['id']}'>edit</a>
<a class='btn-delete' href='delete.php?id={$r['id']}'>delete</a>
</td>
</tr>";
}
?>

</table>

</div>
</div>