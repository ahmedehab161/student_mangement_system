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

            $select = "SELECT * FROM employees WHERE emp_id = '$id' AND password = '$pass'";
            $result = mysqli_query($conn , $select);
            $row = mysqli_fetch_array($result);
            
            if($row['password'] = $pass)
            {
                if(substr($id , 0 , 1) == 2 && $row['user_type'] == 'ADMIN')
                {
                    if(mysqli_num_rows($result) > 0)
                    {
                        
                        if($row['activity'] == "notactive")
                        {
                            error("This Account Is Not Active Please Go To Adminstration");
                            header('location:login_admin.php');
                        }
                        elseif($row['activity'] == "active")
                        {
                            $_SESSION['empid'] = $row['emp_id'];
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
                else
                {
                    error("This Account Not Allowed To Enter This Section");
                    header('location:login_admin.php');
                }
            }
            else
            {
                error("Your Password Is Not Correct");
            }
        }
    }
?>