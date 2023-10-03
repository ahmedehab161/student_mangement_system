<?php 
require("connection.php");


if($_POST['add'])
{
    $name     = $_POST['name'];
    $student_id = $_POST['student_id'];
    $password = $_POST['password'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $gender   = $_POST['gender'];
    $address  = $_POST['address'];
    $birth_date = $_POST['birth'];
    $depart = $_POST['depart'];

    $newfilename = date('dmYHis').str_replace(" " , "" , basename($_FILES["image"]["name"]));
    move_uploaded_file($_FILES["image"]["tmp_name"], "../images/" . $newfilename);

    $query = "INSERT INTO students VALUES('' , '$newfilename' , '$student_id' , '$name' , '$password' , '$email' , '$address' , '$phone' , '$gender' , '$birth_date' , '$depart' , 'active' , '1' , '18' , '8' , '0' , 'F' , '0' , NULL , NULL , NULL)";
    mysqli_query($conn , $query);

    
    header('location:admin_add_student.php');
}
?>