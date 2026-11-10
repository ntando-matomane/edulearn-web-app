<?php

session_start();

include 'php/config.php';

?>

<!DOCTYPE html>

<html>

<head>

<title>Courses</title>

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

<li><a href="about.php">About</a></li>

<li><a href="contact.php">Contact</a></li>

</ul>

</nav>

</header>

<section class="page-header">

<h1>

Our Courses

</h1>

<input

type="text"

id="search"

placeholder="Search Course..."

>

</section>

<section class="courses" id="courseContainer">

<?php

$result=mysqli_query($conn,"SELECT * FROM courses");

while($course=mysqli_fetch_assoc($result))

{

?>

<div class="course-card">

<img
src="images/<?php echo $course['image'];?>">

<h2>

<?php echo $course['course_name'];?>

</h2>

<p>

<?php echo $course['description'];?>

</p>

<h4>

Duration:

<?php echo $course['duration'];?>
<?php
if(isset($_SESSION['role']) && $_SESSION['role']=="admin")
{
?>

<a class="btn"
href="edit_course.php?id=<?php echo $course['id']; ?>">
Edit
</a>

<a class="btn"
href="delete_course.php?id=<?php echo $course['id']; ?>"
onclick="return confirm('Delete this course?')">
Delete
</a>

<?php
}
?>

</h4>

</div>

<?php

}

?>

</section>

<script src="js/script.js"></script>

</body>

</html>