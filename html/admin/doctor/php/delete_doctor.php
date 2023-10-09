<?php
    require('connection.php');

    $delet_doctor = "DELETE FROM dr_staff WHERE id = {$_POST['id']} ";
    mysqli_query($conn , $delet_doctor);

    header('location:../admin_add_doctor.php');
?>