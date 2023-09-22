<?php
    require('connection.php');
    session_start();

    if(isset($_SESSION['table_id_doctor']))
    {
        $_SESSION['error'] = "You Already Login";
        header('location:dr-Add-grades.php');
    }
    else
    {
        if(isset($_POST['submit']))
        {
            $ID = mysqli_real_escape_string($conn, $_POST['id']);
            $pass = $_POST['pass'];



            $select = " SELECT * FROM dr_staff WHERE work_id = '$ID' And password = '$pass' ";
            $result = mysqli_query($conn, $select);

            if(mysqli_num_rows($result) > 0)
            {

                $row = mysqli_fetch_array($result);

                if($row['activity'] == "notactive")
                {
                    $_SESSION['error'] = "This User Deactivated Please Contact Support";
                }
                else
                {
                    $_SESSION['table_id_doctor'] = $row['id'];
                    $_SESSION['id'] = $row['work_id'];
                    $_SESSION['na'] = $row['name'];
                    $_SESSION['error'] = null;
                    header('location:dr-Add-grades.php');
                }
            }
            else
            {
                $_SESSION['error'] = "Incorrect ID or Password!";
                header('location:login_dr.php');
            }
        }
    }
?>