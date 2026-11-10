<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | EduLearn</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>

<div class="logo">EduLearn</div>

<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="courses.php">Courses</a></li>
<li><a href="login.php">Login</a></li>
</ul>
</nav>

</header>

<div class="form-container">

<h2>Create Account</h2>

<form action="php/register_process.php" method="POST" id="registerForm">

<input type="text"
name="fullname"
placeholder="Full Name"
required>

<input type="email"
name="email"
placeholder="Email Address"
required>

<input type="password"
name="password"
placeholder="Password"
required>

<input type="password"
name="confirmPassword"
placeholder="Confirm Password"
required>

<button type="submit">

Register

</button>

</form>

<p>

Already have an account?

<a href="login.php">

Login

</a>

</p>

</div>

<script src="js/validation.js"></script>

</body>
</html>