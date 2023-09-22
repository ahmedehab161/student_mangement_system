<?php 
include("connection.php");


$select = "select * from student_cs";
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
    $image = $_FILES['image']['name'];

    $query = "UPDATE student_cs SET Name = '$Name', Username = '$Username', Password = '$Password', Id = '$Id', Email = '$Email', Phone = '$Phone', Gender = '$Gender', Address = '$Address', Birth_date = '$Birth_date', image = '$image' , depart = 'cs' WHERE Id = '$Id'";
    $data = mysqli_query($conn, $query);

    if($data){
        echo "<script>alert('Done')</script>";
    }else{
        echo "<script>alert('failed')</script>";
    }

    header("location:add student cs.php");

}
?>