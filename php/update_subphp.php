<?php 
include("connection.php");


$select = "select * from subjects";
$query = mysqli_query($conn, $select);

if($_POST['add'])
{
    $code     = $_POST['code'];
    $subname = $_POST['Name'];
    $classroom = $_POST['classr'];
    $classroom1 = implode("/", $classroom);
    $nor = $_POST['numofhou'];

    $query = "UPDATE subjects SET subject_code = '$code' , subjectName = '$subname' , Classroom = '$classroom1' , nor = '$nor' WHERE subject_code = '$code'";
    $data = mysqli_query($conn, $query);
    header("location:Add Subject.php");
}
?>