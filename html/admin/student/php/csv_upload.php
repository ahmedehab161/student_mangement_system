<?php
    if(isset($_POST['upload']))
    {
    //     $excelMimes = array('text/xls', 'text/xlsx', 'application/excel', 'application/vnd.msexcel', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    //     if(!empty($_FILES['exceldata']['name']) && in_array($_FILES['exceldata']['type'] , $excelMimes)){ 
         
    //     // If the file is uploaded 
    //     if(is_uploaded_file($_FILES['exceldata']['tmp_name'])){ 
    //         $reader = new Xlsx(); 
    //         $spreadsheet = $reader->load($_FILES['exceldata']['tmp_name']); 
    //         $worksheet = $spreadsheet->getActiveSheet();  
    //         $worksheet_arr = $worksheet->toArray(); 
 
    //         // Remove header row 
    //         unset($worksheet_arr[0]); 
 
    //         foreach($worksheet_arr as $row){ 
    //             $student_id = $row[0]; 
    //             $name = $row[1]; 
    //             $depart = strtoupper($row[2]); 
    //             $gender = $row[3];
    //             mysqli_query($conn , "INSERT INTO `students` (`id`, `image`, `stu_id`, `name`, `password`, `email`, `address`, `phone`, `gender`, `depart`, `activity`, `current_semster`, `noh_allowed`, `no_subjects`, `Total_Gba`, `Grade`, `finished_hour`, `created_at`, `updated_at`) VALUES (NULL, NULL, '$student_id', '$name', NULL, NULL, NULL, NULL, '$gender', '$depart', 'active', '1', '0', '0', '0', 'F', '0', NULL, NULL)");
    //         } 
             
    //         suc("Done"); 
    //     }
    //     else
    //     { 
    //         error("Error"); 
    //     } 
    // }
    // else
    // { 
    //     error("Not Supported Type"); 
    // } 


    // $excelMimes = array('text/xls', 'text/xlsx', 'application/excel', 'application/vnd.msexcel', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    //     if(!empty($_FILES['exceldata']['name']) && in_array($_FILES['exceldata']['type'] , $excelMimes)){
    //         $obj = PhpOffice\PhpSpreadsheet\IOFactory::load($_FILES['exceldata']['name']);
    //         $spreadsheet = $obj->load($_FILES['exceldata']['tmp_name']);
    //         unset($worksheet_arr[0]); 
 
    //         foreach($worksheet_arr as $row){ 
    //             $student_id = $row[0]; 
    //             $name = $row[1]; 
    //             $depart = strtoupper($row[2]); 
    //             $gender = $row[3];
    //             mysqli_query($conn , "INSERT INTO `students` (`id`, `image`, `stu_id`, `name`, `password`, `email`, `address`, `phone`, `gender`, `depart`, `activity`, `current_semster`, `noh_allowed`, `no_subjects`, `Total_Gba`, `Grade`, `finished_hour`, `created_at`, `updated_at`) VALUES (NULL, NULL, '$student_id', '$name', NULL, NULL, NULL, NULL, '$gender', '$depart', 'active', '1', '0', '0', '0', 'F', '0', NULL, NULL)");
    //         } 
    //     }
    //     else
    //     {
    //         error("This Extinetion Is Not Supported");
    //     }
    
} 
?>