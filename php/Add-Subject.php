<?php 
include("connection.php");

if(isset($_GET['Id'])){
$Id=$_GET['Id'];
  $delete = mysqli_query($conn, "DELETE FROM `subjects` WHERE `Id`='$Id'");
}

$select = "select * from subjects";
$query = mysqli_query($conn, $select);

if($_POST['add'])
{
    $code     = $_POST['code'];
    $subname = $_POST['Name'];
    $classroom = $_POST['classr'];
    $classroom1 = implode("/", $classroom);
    $nor = $_POST['numofhou'];

    $query = "INSERT INTO subjects VALUES('$code' , '$subname' , '$classroom1' , '$nor' , ' ')";
    $data = mysqli_query($conn, $query);
    header("location:Add Subject.php");
}
?>