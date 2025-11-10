<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$conn->query("INSERT INTO students (name, email) VALUES ('$name', '$email')");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Student Management</title>
</head>
<body>
    <h1>DATABASE CONNECTIVITY PRACTICAL</h1>
<h2>Add Student</h2>
<form method="post">
Name: <input type="text" name="name" required><br>
Email: <input type="email" name="email" required><br>
<input type="submit" value="Add Student">
</form>
<h2>Students List</h2>
<table border="1" cellpadding="5">
<tr><th>ID</th><th>Name</th><th>Email</th><th>Action</th></tr>
<?php
$result = $conn->query("SELECT * FROM students");
while ($row = $result->fetch_assoc()) {
echo "<tr>
<td>{$row['id']}</td>
<td>{$row['name']}</td>

<td>{$row['email']}</td>
<td>
<a href='edit.php?id={$row['id']}'>Edit</a> |
<a href='delete.php?id={$row['id']}'>Delete</a>
</td>
</tr>";
}
?>
</table>
</body>
</html>