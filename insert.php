<?php
session_start();
include_once("connect.php");
?>
<form action="" method="post">
<div> 
id:<input type="int" name="id" value=""/> </br>
Student Name: <input type="text" name="st_name" value="" /> </br>
Department: <input type="text" name="st_dept" value="" /></br>
<input type="submit" name="submit" value="Insert" /></div>
</form>
<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['st_name']) && !empty($_POST['st_dept'])) {
        $id=$_POST["id"];
        $name = $_POST['st_name'];
        $Dept = $_POST['st_dept'];       

        $sql = "INSERT INTO Student(id,st_name, st_dept) VALUES('$id','$name', '$Dept')";
        $run = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

        if ($run) {
            echo "<h1>Submitted Successfully..</h1>";
        } else {
            echo "<h1>Not Submitted</h1>";
        }
    } else {
        echo "<h2>All Fields are required</h2>";
    }
}
?>