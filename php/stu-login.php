<?php
    session_start();
    require('connection.php');

if(isset($_SESSION['username']))
{
    $_SESSION['error'] = "You Already Login";
    header('location:stud_cert.php');

}
else
{
    if(isset($_POST['submit']))
    {
        $ID = mysqli_real_escape_string($conn, $_POST['stuid']);
        $pass = $_POST['Password'];

    
        $select = " SELECT * FROM students WHERE stu_id = '$ID' and password = '$pass'";
        $result = mysqli_query($conn, $select);


        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_array($result);

            if($row[''])
            {
                $_SESSION['student_id'] = $_POST['stuid'];
                header('location:html/studen first enter/student_first_data.php');
            }
            else
            {
                if($row['activity'] == "notactive")
                {
                    $_SESSION['error'] = "This User Deactivated Please Contact Support";
                }
                else
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
            }   
        }
        else
        {
            $_SESSION['error'] = "Incorrect ID Or Password!";
        }
    }
}
?>