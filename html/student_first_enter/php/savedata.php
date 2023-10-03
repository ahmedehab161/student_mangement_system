<?php
    require('../php/connection.php');
    session_start();
    if(isset($_POST['save']))
    {
        $password = $_POST['password'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phonenumber = $_POST['phone'];

        $query = " UPDATE students SET password = '$password' , email = '$email' , address = '$address' , phone = '$phonenumber' WHERE stu_id = '{$_SESSION['first_time_id']}' ";
        mysqli_query($conn, $query);

        header("location:../login/login_stu.php");
    }
?>