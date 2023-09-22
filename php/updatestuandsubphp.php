<?php 
include("connection.php");


$query = mysqli_query($conn, "select * from subjects");
$query1 = mysqli_query($conn, "select * from student_cs");
$query2 = mysqli_query($conn, "select * from student_eng");
$query3 = mysqli_query($conn, "select * from student_mang");

$select = "select * from st_sub";
$query4 = mysqli_query($conn, $select);

if($_POST['add'])
{
    $Id = $_POST['Id'];
    $SubjectName     = $_POST['SubName'];
    $student = $_POST['student'];
    $student1 = implode("/", $student);

    $query = "UPDATE st_sub SET StudentName = '$student1' , SubjectName  = '$SubjectName' WHERE SubjectName = '$SubjectName' ";

    $data = mysqli_query($conn, $query);

    if($data)
    {
        echo "<script> alert('Done') </script>";

    }
    else
    {
        echo "<script> alert('Failed') </script>";
    }
    header("location:student and subject.php");
}
    
    
?>