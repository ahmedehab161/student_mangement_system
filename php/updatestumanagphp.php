<?php 
include("connection.php");


$select = "select * from student_mang";
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
    $new_image = $_FILES['image']['name'];
    
    $query = "UPDATE student_mang SET Id = '$Id' , Name = '$Name' , Username = '$Username', Password = '$Password' , Email = '$Email', Phone = '$Phone',  Gender = '$Gender', Address =  '$Address', Birth_date = '$Birth_date', image = '$image' , depart = 'manag' WHERE Id = '$Id'";
    $data = mysqli_query($conn, $query);
    header("location:add student manag.php");
    }

?>