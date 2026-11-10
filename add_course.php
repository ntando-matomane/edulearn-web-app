<?php
include 'php/auth.php';

if($_SESSION['role']!="admin"){
    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>

<html>

<head>

<title>Add Course</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="form-container">

<h2>Add Course</h2>

<form action="php/add_course_process.php"

method="POST">

<input

type="text"

name="course"

placeholder="Course Name"

required>

<textarea

name="description"

placeholder="Course Description"

required>

</textarea>

<input

type="text"

name="duration"

placeholder="Duration"

required>

<input

type="text"

name="image"

placeholder="Image filename (example html.jpg)"

required>

<button>

Save Course

</button>

</form>

</div>

</body>

</html>