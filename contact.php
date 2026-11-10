<?php
session_start();
?>

<!DOCTYPE html>

<html>

<head>

<title>

Contact

</title>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

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

<li><a href="index.php">Home</a></li>

<li><a href="courses.php">Courses</a></li>

</ul>

</nav>

</header>

<div class="form-container">

<h2>

Contact Us

</h2>

<form

action="php/contact_process.php"

method="POST">

<input
type="text"
name="name"
placeholder="Full Name"
required>

<input
type="email"
name="email"
placeholder="Email"
required>

<input
type="text"
name="subject"
placeholder="Subject"
required>

<textarea
name="message"
rows="6"
placeholder="Message"
required>

</textarea>

<button>

Send Message

</button>

</form>

</div>

</body>

</html>