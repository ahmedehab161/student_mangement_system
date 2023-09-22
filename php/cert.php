<?php
if(isset($_POST['get']))
                                {
                                    $find_semseter = "SELECT Year FROM semster WHERE semester_number = '{$_POST['semester']}' OR semester_number2 = '{$_POST['semester']}' ";
                                    $semseter_find = mysqli_query($conn , $find_semseter);

                                    while($semseter_find_result = mysqli_fetch_assoc($semseter_find))
                                    {
                                        echo
                                        '
                                           <span style = "text-align:center;font-size:20px;margin-left:320px;"> Year : '. $semseter_find_result['Year'] .' Semster Number :'. $_POST['semester'] .'</span>
                                        ';
                                    }

                                    $grade = " ";
                                    $find_subjects = "SELECT * FROM registeredcs WHERE stuId = '{$_SESSION['table_id']}' AND semester_registered_at	= '{$_POST['semester']}'  AND purState = 'Paid' ";
                                    $subjects_find = mysqli_query($conn , $find_subjects);
                                    
                                    $num = mysqli_num_rows($subjects_find);
                                    if($num > 0)
                                    { 
                                        while($subjects_find_result = mysqli_fetch_assoc($subjects_find))
                                        {
                                            $get_results = "SELECT * FROM subjects WHERE id = '{$subjects_find_result['subject_id']}' ";
                                            $results_get = mysqli_query($conn , $get_results);

                                            
                                            while($get_subjects_result = mysqli_fetch_assoc($results_get))
                                            {
                                                if($subjects_find_result['grade'] >= 90 && $subjects_find_result['grade'] <= 100)
                                                {
                                                    $grade = "A";
                                                }
                                                elseif($subjects_find_result['grade'] >= 80 && $subjects_find_result['grade'] <= 89)
                                                {
                                                    $grade = "B";
                                                }
                                                elseif($subjects_find_result['grade'] >= 70 && $subjects_find_result['grade'] <= 79)
                                                {
                                                    $grade = "C";
                                                }
                                                elseif($subjects_find_result['grade'] >= 50 && $subjects_find_result['grade'] <= 69)
                                                {
                                                    $grade = "D";
                                                }
                                                elseif($subjects_find_result['grade'] > 0 && $subjects_find_result['grade'] < 50)
                                                {
                                                    $grade = "F";
                                                }
                                                elseif($subjects_find_result['grade'] == NULL)
                                                {
                                                    $grade = " ";
                                                }
                                                echo
                                                '<tr scope="col">
                                                    <th scope="row"> ' . $get_subjects_result['subject_code'] . '</th>
                                                    <th scope="row"> ' . $get_subjects_result['subject_name'] . '</th>
                                                    <th scope="row"> ' . $grade . '</th>
                                                    <th scope="row"> ' . $get_subjects_result['noh'] . '</th>
                                                </tr>';
                                            }
                                        }
                                    }
                                    else
                                    {
                                        echo
                                            '
                                                <tr scope = "col">
                                                    <th scope="row" colspan="4">'. "This Semester Is Not Registered" .'</th>
                                                </tr>
                                            ';
                                    }
                                }
?>