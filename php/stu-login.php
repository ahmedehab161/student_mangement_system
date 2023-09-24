<?php
    session_start();
    require('connection.php');
    function error($msg)
    {
        $_SESSION['error'] = $msg;
        return $_SESSION['error'];
    }
if(isset($_SESSION['username']))
{
    $_SESSION['error'] = "You Already Login";
    header('location:stud_cert.php');

}
else
{
    if(isset($_POST['submit']))
    {
        $ID = mysqli_real_escape_string($conn , $_POST['stuid']);
        $pass = $_POST['Password'];

        $select = "SELECT * FROM students WHERE stu_id = '$ID'";
        $result = mysqli_query($conn , $select);
        $row = mysqli_fetch_array($result);

        if(mysqli_num_rows($result) > 0)
        {
            if($row['activity'] == "notactive")
            {
                error("This Account Is Not Active Please Go To Adminstration");
                header('location:login_stu.php');
            }
            else
            {
                if($row['password'] != NULL)
                {
                    if($pass == $row['password'])
                    {
                        $_SESSION['table_id'] = $row['id'];
                        $_SESSION['username'] = $row['email'];
                        $_SESSION['id'] = $row['stu_id'];
                        $_SESSION['de'] = $row['depart'];
                        $_SESSION['na'] = $row['name'];
                        $_SESSION['cumulative_appreciation'] = $row['Grade'];
                        $_SESSION['total_gba'] = $row['Total_Gba'];
                        $_SESSION['finished_hour'] = $row['finished_hour'];
                        $_SESSION['error'] = null;
                        header('location:stud_cert.php');
                    }
                    else
                    {
                        error("Wrong Password");
                        header('location:login_stu.php');
                    }
                }
                elseif($row['password'] == NULL)
                {
                    $_SESSION['first_time_id'] = $ID;
                    error("Data Saved");
                    header('location:html/student first enter/student_first_data.php');
                }
            }
        }
        else
        {
            error("Student Not Found Or Wrong ID");
            header('location:login_stu.php');
        }
    }
}
?>