<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

<title>Login</title>

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

<li><a href="register.php">Register</a></li>

</ul>

</nav>

</header>

<div class="form-container">

<h2>

Student Login

</h2>

<form action="php/login_process.php"
method="POST">

<input
type="email"
name="email"
placeholder="Email"
required>

<input
type="password"
name="password"
placeholder="Password"
required>

<button>

Login

</button>

</form>

</div>

</body>

</html>