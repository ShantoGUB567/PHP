<?php
session_start();
$username = "root";        
$password = "";            
$database = "clp-3";      
$port = 3306; 
$mysqli = new mysqli('localhost', $username, $password, $database, $port);

if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error . '<br><br>');
}

echo 'Connected successfully <br><br>';
?>

<!-- Student Form -->
<h2>Student Form</h2>
<form action="" method="post">
    <div> 
        Student ID: <input type="text" name="id" value=""/> </br>
        Student Name: <input type="text" name="st_name" value="" /> </br>
        Department: <input type="text" name="st_dept" value="" /></br>
        <input type="submit" name="submit_student" value="Insert Student" />
    </div>
</form> 

<!-- User Form -->
<h2>User Form</h2>
<form action="" method="post">
    <div> 
        Name: <input type="text" name="name" value=""/> </br>
        Email: <input type="email" name="email" value="" /> </br>
        Phone: <input type="text" name="phone" value="" /></br>
        <input type="submit" name="submit_user" value="Insert User" />
    </div>
</form> 

<?php
// Insert into student table
if (isset($_POST['submit_student'])) {
    if (!empty($_POST['id']) && !empty($_POST['st_name']) && !empty($_POST['st_dept'])) {
        $id = $_POST["id"];
        $name = $_POST['st_name'];
        $dept = $_POST['st_dept'];       

        $sql = "INSERT INTO student(id, student_name, department) VALUES('$id','$name', '$dept')";
        $run = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

        if ($run) {
            echo "<h3 style='color: green;'>Student Submitted Successfully</h3>";
        } else {
            echo "<h3 style='color: red;'>Student Not Submitted</h3>";
        }
    } else {
        echo "<h4>All Student Fields are required</h4>";
    }
}

// Insert into user table
if (isset($_POST['submit_user'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];       

        $sql = "INSERT INTO user(name, email, phone) VALUES('$name','$email', '$phone')";
        $run = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

        if ($run) {
            echo "<h3 style='color: green;'>User Submitted Successfully</h3>";
        } else {
            echo "<h3 style='color: red;'>User Not Submitted</h3>";
        }
    } else {
        echo "<h4>All User Fields are required</h4>";
    }
}
?>

<!-- Display Data -->
<h2>Student Table</h2>
<table border="1" cellpadding="5">
    <tr><th>ID</th><th>Name</th><th>Department</th></tr>
    <?php
    $result = mysqli_query($mysqli, "SELECT * FROM student");
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['student_name']}</td>
            <td>{$row['department']}</td>
        </tr>";
    }
    ?>
</table>

<h2>User Table</h2>
<table border="1" cellpadding="5">
    <tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th></tr>
    <?php
    $result = mysqli_query($mysqli, "SELECT * FROM user");
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['phone']}</td>
        </tr>";
    }
    ?>
</table>
