<?php
session_start();
include_once("connect.php");


// Insert into user table
if (isset($_POST['submit_user'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO user (name, email, phone) VALUES ('$name', '$email', '$phone')";
    $conn->query($sql);
}

// Insert into student table
if (isset($_POST['submit_student'])) {
    $student_id = $_POST['student_id'];
    $student_name = $_POST['student_name'];
    $department = $_POST['department'];

    $sql = "INSERT INTO student (student_id, student_name, department) VALUES ('$student_id', '$student_name', '$department')";
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert and Display Data</title>
</head>
<body>
    <h2>User Form</h2>
    <form method="POST">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Phone: <input type="text" name="phone" required><br><br>
        <input type="submit" name="submit_user" value="Add User">
    </form>

    <h2>Student Form</h2>
    <form method="POST">
        Student ID: <input type="text" name="student_id" required><br><br>
        Student Name: <input type="text" name="student_name" required><br><br>
        Department: <input type="text" name="department" required><br><br>
        <input type="submit" name="submit_student" value="Add Student">
    </form>

    <h2>User Table</h2>
    <table border="1">
        <tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th></tr>
        <?php
        $result = $conn->query("SELECT * FROM user");
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['phone']}</td></tr>";
        }
        ?>
    </table>

    <h2>Student Table</h2>
    <table border="1">
        <tr><th>ID</th><th>Student ID</th><th>Name</th><th>Department</th></tr>
        <?php
        $result = $conn->query("SELECT * FROM student");
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['id']}</td><td>{$row['student_id']}</td><td>{$row['student_name']}</td><td>{$row['department']}</td></tr>";
        }
        ?>
    </table>
</body>
</html>