<?php
    session_start();
    require('connection.php');

    function error($msg)
    {
        $_SESSION['error'] = $msg;
        return $_SESSION['error'];
    }
    function suc($msg)
    {
        $_SESSION['suc'] = $msg;
        return $_SESSION['suc'];
    }

    if(isset($_POST['change']))
    {
        $oldpassword = $_POST['old_password'];
        $newpassword = $_POST['new_password'];
        $confirmpassword = $_POST['confirm_password'];

        $select = "SELECT * FROM dr_staff WHERE work_id = {$_SESSION['workid']}";
        $query = mysqli_query($conn , $select);

        if($newpassword == $confirmpassword)
        {
            foreach($query as $data)
            {
                if($data['password'] == $oldpassword)
                {
                    $update = "UPDATE dr_staff SET password = '$confirmpassword' WHERE work_id = {$_SESSION['workid']}";
                    mysqli_query($conn , $update);
                    suc("Password Updated");
                    header("location:profile.php");
                }
                else
                {
                    error("Wrong Old Password");
                    header("location:profile.php");
                }
            }
        }
        else
        {
            error("New Password And Confirm Feilds Must Be Identical");
            header("location:profile.php");
        }
    }
    elseif(isset($_POST['upload'])) 
    {
        $timeanddate = date("d-m-Y H:i:s");

        $photo = mysqli_query($conn , "SELECT image FROM dr_staff WHERE work_id = {$_SESSION['workid']}");
        foreach($photo as $photodelete)
        {
            $file = "images/" . $photodelete['image'];
            unlink($file);
        }

        $newfilename = date('dmYHis').str_replace(" " , "" , basename($_FILES["image"]["name"]));
        move_uploaded_file($_FILES["image"]["tmp_name"] , "images/" . $newfilename);

        // $photo2 = mysqli_query($conn , "SELECT image FROM dr_staff WHERE work_id = {$_SESSION['workid']}");
        // foreach($photo2 as $newphoto)
        // {
        //     $_SESSION['image'] = $newphoto['image'];
        // }

        $update = "UPDATE dr_staff SET image = '$newfilename' , updated_at = '$timeanddate' WHERE work_id = {$_SESSION['workid']}";
        mysqli_query($conn , $update);
        
        suc("Photo Changed");
        header("location:profile.php");
    }
?>