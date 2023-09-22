<?php 
include("connection.php");


$query = mysqli_query($conn, "select * from add_dr");
$query1 = mysqli_query($conn, "select * from subjects");
$query2 = mysqli_query($conn, "select * from dr_sub");

if($_POST['add'])
{
    $drName     = $_POST['drName'];
    $subjects = $_POST['subjects'];
    $classroom = $_POST['class'];
    $classroom1 = implode("/", $classroom);

    $query = "UPDATE dr_sub SET Doctor = '$drName' , Subject = '$subjects' , ClassRoom = '$classroom1' WHERE Doctor = '$drName' ";

    $data = mysqli_query($conn, $query);
     

    header("location:updatedrandsub.php");
}
?>