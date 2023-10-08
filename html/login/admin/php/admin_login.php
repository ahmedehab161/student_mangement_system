<?php
    session_start();
    require('connection.php');
    function error($msg)
    {
        $_SESSION['error'] = $msg;
        return $_SESSION['error'];
    }
    if(isset($_SESSION['workid']))
    {
        $_SESSION['error'] = "You Already Login";
        header('location:../../../html/admin/profile.php');

    }
    else
    {
        if(isset($_POST['submit']))
        {
            $id = mysqli_real_escape_string($conn , $_POST['workid']);
            $pass = $_POST['password'];

            $select = "SELECT * FROM dr_staff WHERE work_id = '$id' AND password = '$pass'";
            $result = mysqli_query($conn , $select);
            $row = mysqli_fetch_array($result);

            if(mysqli_num_rows($result) > 0)
            {
                if($row['activity'] == "notactive")
                {
                    error("This Account Is Not Active Please Go To Adminstration");
                    header('location:login_admin.php');
                }
                elseif($row['activity'] == "active")
                {
                    $_SESSION['workid'] = $row['work_id'];
                    $_SESSION['image'] = $row['image'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['tableadminid'] = $row['id'];
                    header('location:../../../html/admin/profile.php');
                }
            }
            else
            {
                error("WRONG ID OR PASSWORD");
                header('location:login_admin.php');
            }
        }
    }
?>