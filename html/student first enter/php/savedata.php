<?php
    require('../../php/connection.php');
    if(isset($_POST['save']))
    {
        $name = "John Smith";
        $name_parts = explode(" ", $name);
        $first_name = $name_parts[0];
        
        $password = $_POST['password'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phonenumber = $_POST['phone'];

        $query = " UPDATE students SET password = '$password' , email = '$email' , address = '$address' , phone = '$phonenumber' , created_at = 'done' WHERE stu_id = '{$_SESSION['student_id']}' ";
        mysqli_query($conn, $query);

        $_SESSION['error'] = "Done";

        header("location:../../login_stu.php");
    }
?>