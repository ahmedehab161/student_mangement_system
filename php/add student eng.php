<?php 
include("connection.php");

if(isset($_GET['Id'])){
$Id=$_GET['Id'];
  $delete = mysqli_query($conn, "DELETE FROM `student_eng` WHERE `Id`='$Id'");
}

$select = "select * from student_eng";
$query = mysqli_query($conn, $select);

if($_POST['add'])
    {
    $Name     = $_POST['Name'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Id       = $_POST['Id'];
    $Email    = $_POST['Email'];
    $Phone    = $_POST['Phone'];
    $Gender   = $_POST['Gender'];
    $Address  = $_POST['Address'];
    $Birth_date = $_POST['Birth_date'];
   
    $target="images/".basename($_FILES['image']['name']);
    $image=$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],$target);
    
    $query = "INSERT INTO student_eng VALUES('$Id','$Name','$Username','$Password', '$Email','$Phone', '$Gender', '$Address','$Birth_date','$image','eng')";

    $data = mysqli_query($conn, $query);

    if($data)
    {
    echo "<script> alert('Done') </script>";

    }
    else
    {
    echo "<script> alert('Failed') </script>";
    }
    header("location:add student eng.php");
    }

?>