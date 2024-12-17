<?php
session_start();
include_once("connect.php");
?>
<form action="" method="post">
    <div> 
        Student ID: <input type="int" name="id" value=""/> </br>
        Student Name: <input type="text" name="st_name" value="" /> </br>
        Department: <input type="text" name="st_dept" value="" /></br>
        <input type="submit" name="submit" value="Insert" />
    </div>
</form>
<?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['st_name']) && !empty($_POST['st_dept'])) {
            $id=$_POST["id"];
            $name = $_POST['st_name'];
            $dept = $_POST['st_dept'];  
            $updates = [];
            if (!empty($name)) {
                $updates[] = "st_name='$name'";
            }
            if (!empty($dept)) {
                $updates[] = "st_dept='$dept'";
            }

        
            $update_query = implode(", ", $updates);
            $sql = "UPDATE Student SET $update_query WHERE id=$id";     
            $run = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

            if ($run) {
                echo "<h1>Updated Successfully..</h1>";
            } else {
                echo "<h1>Not Updated</h1>";
            }
        } else {
            echo "<h2>All Fields are required</h2>";
        }
    }
?>