<?php
    session_start();
    require('connection.php');
    

    $delet_subject = "DELETE FROM registeredcs WHERE id = {$_POST['id']} ";
    mysqli_query($conn , $delet_subject);

    header('location:../register.php');
?>