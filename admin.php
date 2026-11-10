<?php
include 'php/auth.php';
include 'php/config.php';

if($_SESSION['role']!="admin"){
    header("Location: dashboard.php");
    exit();
}

$userCount = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM users"));
$courseCount = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM courses"));
$messageCount = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM contact_messages"));
?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Dashboard</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<header>

<div class="logo">EduLearn Admin</div>

<nav>

<ul>

<li><a href="admin.php">Dashboard</a></li>
<li><a href="add_course.php">Add Course</a></li>
<li><a href="logout.php">Logout</a></li>

</ul>

</nav>

</header>

<section class="dashboard">

<h1>Administrator Dashboard</h1>

<div class="stats">

<div class="stat-card">

<h2><?php echo $userCount; ?></h2>

<p>Students</p>

</div>

<div class="stat-card">

<h2><?php echo $courseCount; ?></h2>

<p>Courses</p>

</div>

<div class="stat-card">

<h2><?php echo $messageCount; ?></h2>

<p>Messages</p>

</div>

</div>

</section>

<h2 style="text-align:center;margin-top:40px;">Registered Users</h2>

<table>

<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Role</th>

</tr>

<?php

$result=mysqli_query($conn,"SELECT * FROM users");

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['fullname']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['role']; ?></td>

</tr>

<?php
}
?>

</table>

<h2 style="text-align:center;margin-top:40px;">Contact Messages</h2>

<table>

<tr>

<th>Name</th>

<th>Email</th>

<th>Subject</th>

<th>Message</th>

</tr>

<?php

$result=mysqli_query($conn,"SELECT * FROM contact_messages");

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['subject']; ?></td>

<td><?php echo $row['message']; ?></td>

</tr>

<?php
}
?>

</table>

</body>
</html>