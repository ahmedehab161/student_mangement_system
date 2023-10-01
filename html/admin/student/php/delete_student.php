<?php
    require('connection.php');

    $delet_student = "DELETE FROM students WHERE id = {$_POST['id']} ";
    mysqli_query($conn , $delet_student);

    header('location:../admin_add_student.php');
?>