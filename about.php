<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About | EduLearn</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>

<div class="logo">EduLearn</div>

<nav>

<ul>

<li><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="courses.php">Courses</a></li>
<li><a href="contact.php">Contact</a></li>

<?php
if(isset($_SESSION['id']))
{
echo '<li><a href="dashboard.php">Dashboard</a></li>';
echo '<li><a href="logout.php">Logout</a></li>';
}
else
{
echo '<li><a href="login.php">Login</a></li>';
}
?>

</ul>

</nav>

</header>

<section class="page-header">

<h1>About EduLearn</h1>

</section>

<section class="content">

<h2>Who We Are</h2>

<p>

EduLearn is an educational platform that helps students learn
HTML, CSS, JavaScript, PHP and MySQL through practical projects.

</p>

<br>

<h2>Our Mission</h2>

<p>

To provide quality online education using modern web technologies
while giving students hands-on practical experience.

</p>

</section>

<footer>

<p>Copyright © 2026 EduLearn</p>

</footer>

</body>

</html>