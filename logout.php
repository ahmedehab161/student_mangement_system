<?php

@include 'connection.php';

echo "<script> alert('You are about to logout') </script>";

session_start();
session_unset();
session_destroy();

header('location:index.html');

?>