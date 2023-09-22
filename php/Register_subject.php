<?php
    session_start();
    require('connection.php');
    

    $semester_query = "SELECT * From semster";
    $query_semester = mysqli_query($conn , $semester_query);
    while($semester_number = mysqli_fetch_assoc($query_semester))
    {
        if($semester_number['current'] == 'yes')
        {
            $year_current = $semester_number['Year'];
            $number_we_at = $semester_number['semester_number'];

            $subject_query = "SELECT * FROM subjects WHERE semester = '$number_we_at' ";
            $query_subject = mysqli_query($conn , $subject_query);

            if(isset($_POST['save']))
            {
                $id_of_current_stu = $_SESSION['table_id'];

                $already_exist = "SELECT * From registeredcs WHERE stuId = '$id_of_current_stu' AND subject_id = '{$_POST['subject_id']}' ";
                $exist_already = mysqli_query($conn , $already_exist);
                

                $num = mysqli_num_rows($exist_already);
                if($num <= 0)
                {
                    $insert_query = "INSERT INTO registeredcs VALUES( '' , '$id_of_current_stu' , 'Not Paid' , '{$_POST['subject_id']}' , '{$semester_number['semester_number']}' ,null)";
                    mysqli_query($conn , $insert_query);

                    $_SESSION['error_add'] = null;

                    header('location:../register.php');
                }
                else if($num >= 1)
                {
                    $_SESSION['error_add'] = "You Already Registered This Subject";

                    header('location:../register.php');
                }
            }
        }
        else if($semester_number['current2'] == 'yes')
        {
            $year_current = $semester_number['Year'];
            $number_we_at = $semester_number['semester_number2'];

            $subject_query = "SELECT * FROM subjects WHERE semester = '$number_we_at' ";
            $query_subject = mysqli_query($conn , $subject_query);

            if(isset($_POST['save']))
            {
                $id_of_current_stu = $_SESSION['table_id'];

                $already_exist = "SELECT * From registeredcs WHERE stuId = '$id_of_current_stu' AND subject_id = '{$_POST['subject_id']}' ";
                $exist_already = mysqli_query($conn , $already_exist);
                

                $num = mysqli_num_rows($exist_already);
                if($num <= 0)
                {
                    $insert_query = "INSERT INTO registeredcs VALUES( '' , '$id_of_current_stu' , 'Not Paid' , '{$_POST['subject_id']}' , '{$semester_number['semester_number2']}' ,null)";
                    mysqli_query($conn , $insert_query);

                    $_SESSION['error_add'] = null;

                    header('location:../register.php');
                }
                else if($num >= 1)
                {
                    $_SESSION['error_add'] = "You Already Registered This Subject";

                    header('location:../register.php');
                }
            }
        }
    }
?>