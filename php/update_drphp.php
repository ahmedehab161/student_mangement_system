<?php 
include("connection.php");



$select = "select * from add_dr";
$query = mysqli_query($conn, $select);

if($_POST['add'])
{
    $Name     = $_POST['Name'];
    $Password = $_POST['Password'];
    $Id = $_POST['Id'];
    $Email       = $_POST['Email'];
    $Phone    = $_POST['Phone'];
    $Gender    = $_POST['Gender'];
    $Address   = $_POST['Address'];
    $days = $_POST['days'];
    $days1 = implode("/", $days);
    $shours=$_POST['shours'];
    $ehours=$_POST['ehours'];
    $fhours=$shours." "."to"." ".$ehours;  
    $target="images/".basename($_FILES['image']['name']);
    $image=$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],$target);


    $query = "UPDATE add_dr SET Name = '$Name', Id = '$Id' , Password = '$Password' ,Email = '$Email', Phone = '$Phone', Gender = '$Gender', Address = '$Address' , days = '$days1', fhours = '$fhours' , image = '$image' WHERE Id = '$Id'";

    $data = mysqli_query($conn, $query);

    if($data)
    {
        echo "<script> alert('Done') </script>";

    }
    else
    {
        echo "<script> alert('Failed') </script>";
    }
    header("location:doctor.php");

}
?>