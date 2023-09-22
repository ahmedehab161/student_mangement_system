<?php 
include("connection.php");



if($_POST['Registration'])
{
    $name     = $_POST['name'];
    $id = $_POST['id'];
    $subjectName = $_POST['SubName'];
    $grade       = $_POST['grade'];

    $query = "INSERT INTO st_grades VALUES('$id','$name','$subjectName', '$grade' , '')";

    mysqli_query($conn, $query);

    header("location:dr-add-grades.php");

}
?>