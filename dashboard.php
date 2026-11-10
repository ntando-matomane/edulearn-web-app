<?php

include 'php/auth.php';

?>

<!DOCTYPE html>

<html>

<head>

<title>Dashboard</title>

<link rel="stylesheet"
href="css/style.css">

</head>

<body>

<header>

<div class="logo">

EduLearn

</div>

<nav>

<ul>

<li><a href="courses.php">Courses</a></li>

<li><a href="logout.php">Logout</a></li>

</ul>

</nav>

</header>

<section class="dashboard">

<section class="dashboard">

<h1>

Welcome,

<?php echo $_SESSION['name']; ?>

</h1>

<p>

Continue your learning journey.

</p>

<div class="stats">

<div class="stat-card">

<h2>4</h2>

<p>Courses Available</p>

</div>

<div class="stat-card">

<h2>HTML</h2>

<p>Recommended Course</p>

</div>

<div class="stat-card">

<h2>100%</h2>

<p>Responsive Website</p>

</div>

</div>

</section>

</body>

</html>