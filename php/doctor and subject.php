<?php 
include("connection.php");

if(isset($_GET['Id'])){
    $Id=$_GET['Id'];
      $delete = mysqli_query($conn, "DELETE FROM `dr_sub` WHERE `Id`='$Id'");
    }

$query = mysqli_query($conn, "select * from add_dr");
$query1 = mysqli_query($conn, "select * from subjects");
$query2 = mysqli_query($conn, "select * from dr_sub");

if($_POST['add'])
{
    $drName     = $_POST['drName'];
    $subjects = $_POST['subjects'];
    $classroom = $_POST['class'];
    $classroom1 = implode("/", $classroom);

    $query = "INSERT INTO dr_sub VALUES('$drName' , '$subjects' ,'$classroom1' , ' ')";

    $data = mysqli_query($conn, $query);
    header("location:doctor and subject.php");
}
    
    
?>