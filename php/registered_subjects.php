<?php
    require('connection.php');
    
    /* =====> This Query To get data of subject number allowed and allowed number of houres <===== */

    $student_id_logged = $_SESSION['id'];
    $select2 = " SELECT * FROM  students WHERE stu_id = '$student_id_logged'";
    $query2 = mysqli_query($conn, $select2);

    while($student_semester_data = mysqli_fetch_assoc($query2))
    {
        $number_of_houres_allowed = $student_semester_data['noh_allowed'];
        $number_of_subjects_allowed = $student_semester_data['no_subjects'];
        $id_of_logged_now = $student_semester_data['id'];
        
        $select4 = " SELECT * FROM  registeredcs WHERE stuId = '$id_of_logged_now'";
        $query4 = mysqli_query($conn, $select4);
    } 
    
    $depart = $_SESSION['de'];

?>