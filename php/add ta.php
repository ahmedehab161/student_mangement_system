<?php 
include("connection.php");

if(isset($_GET['Id'])){
$Id=$_GET['Id'];
  $delete = mysqli_query($conn, "DELETE FROM `add_ta` WHERE `Id`='$Id'");
}

$select = "select * from add_ta";
$query = mysqli_query($conn, $select);

if($_POST['add'])
{
    $Name     = $_POST['Name'];
    $Password = $_POST['Password'];
    $Id       = $_POST['Id'];
    $Email    = $_POST['Email'];
    $Phone    = $_POST['Phone'];
    $Gender   = $_POST['Gender'];
    $Address  = $_POST['Address'];
    $days     = $_POST['days'];
    $shours   = $_POST['shours'];
    $ehours   = $_POST['ehours'];
    $fhours   = $shours." "."to"." ".$ehours;
   
    $target="images/".basename($_FILES['image']['name']);
    $image=$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],$target);

    foreach($days as $day){
        $x=$x.$day."<br>";
    }

    $query = "INSERT INTO add_ta VALUES('$Id','$Name','$Password','$Email','$Phone','$Gender', '$Address','$x','$fhours','$image')";

    $data = mysqli_query($conn, $query);

    if($data)
    {
        echo "<script> alert('Done') </script>";

    }
    else
    {
        echo "<script> alert('Failed') </script>";
    }
    header("location:teaching.php");

}
?>