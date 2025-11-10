<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id = $id");
$student = $result->fetch_assoc();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST['name'];
$email = $_POST['email'];
$conn->query("UPDATE students SET name='$name', email='$email' WHERE id=$id");
header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head><title>Edit Student</title></head>
<body>
<h2>Edit Student</h2>
<form method="post">
Name: <input type="text" name="name" value="<?= $student['name'] ?>"
required><br>
Email: <input type="email" name="email" value="<?= $student['email'] ?>"
required><br>
<input type="submit" value="Update Student">
</form>
</body>
</html>