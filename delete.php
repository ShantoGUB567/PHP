<?php
session_start();
include_once("connect.php");
?>
<form action="" method="post">
    <div> 
        Student ID: <input type="int" name="id" value=""/> </br>
        <input type="submit" name="delete" value="Delete" />  
    </div>
</form>

<?php
    if (isset($_POST['delete'])) {  
        if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            $sql = "DELETE FROM Student WHERE id=$id";    
            $run = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

            if ($run) {
                echo "<h1>Record Deleted Successfully</h1>";
            } else {
                echo "<h1>Delete Failed</h1>";
            }
        } else {
            echo "<h2>ID is required</h2>";  
        }
    }
?>