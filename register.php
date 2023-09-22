<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        $_SESSION['error'] = "You Connot Enter This Page Befor Login";
        header('location:login_stu.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="Image/Rectangle 3 copy.png">
        <title>Subjects Register</title>
        <link rel="stylesheet" href="css/all.min.css" />
        <link rel="stylesheet" href="css/framework.css" />
        <link rel="stylesheet" href="css/dr-forms.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/errors.css">
        <link rel="stylesheet" href="css/tables.css">
    </head>
    <body>
            <div class="page d-flex">
        <div class="si">
            <div class="sid sidebar bg-white p-20 p-relative">
                <h3 class="p-relative txt-c mt-0">Student</h3>
                <?php
                    require('nav.html');
                    require('php/registered_subjects.php');
                    require('php/Register_subject.php');
                ?>
            </div>
        </div>
        <div class="content w-full">
            <!-- Start Head -->
            <div class="head bg-white p-15 between-flex">
                <div>
                    <?php
                        if(@$_SESSION['error_add'] != null)
                        {
                            echo '<div id = "errorm" class = "error">';
                                echo $_SESSION['error_add'];
                            echo "</div>";
                        }
                    ?>
                </div>
                <div>
                </div>
                <div class="icons d-flex align-center">
                    <span class="notification p-relative">
                        <i class="fa-regular fa-bell fa-lg"></i>
                    </span>
                    <img src="imgs/avatar.png" alt="" />
                </div>
            </div>
            <!-- End Head -->
            <h1 class="p-relative">Register</h1>
            <!-- Start Welcome Widget -->
            <div class="welcome bg-white rad-10 txt-c-mobile block-mobile section1">
                
                <div class="body txt-c d-flex p-20 mt-20 mb-20 block-mobile">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 48 48"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#2F88FF" stroke="#000" d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z"/>
                            <path stroke="#fff" stroke-linecap="round" d="M24.0084 12.0001L24.0072 24.0089L32.4866 32.4883"/></g>
                        </svg>
                        <span class="d-block c-grey fs-12 mt-10" style = "font-size: 20px;">
                            <?php echo "3" . " / " . $number_of_houres_allowed ?>
                        </span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 48 48"><g fill="none" stroke="#000" stroke-linejoin="round" stroke-width="4"><path fill="#2F88FF" d="M8 40C8 36 8 10 8 10C8 6.68629 10.8654 4 14.4 4H40V36C40 36 19.9815 36 14.4 36C9.36225 36 8 36.6842 8 40Z"/>
                            <path stroke-linecap="round" d="M12 44H40V36H12C9.79086 36 8 37.7909 8 40C8 42.2091 9.79086 44 12 44Z" clip-rule="evenodd"/></g>
                        </svg>
                        <span class="d-block c-grey fs-14 mt-10" style = "font-size: 20px;">
                            <?php echo "0" . " / " . $number_of_subjects_allowed ?>
                        </span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><g fill="none">
                            <path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="currentColor" d="M12 3a3 3 0 0 0-1 5.83V11H8a3 3 0 0 0-3 3v1.17a3.001 3.001 0 1 0 2 0V14a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v1.17a3.001 3.001 0 1 0 2 0V14a3 3 0 0 0-3-3h-3V8.83A3.001 3.001 0 0 0 12 3Z"/></g>
                        </svg> 
                        <span class="d-block c-grey fs-14 mt-10" style = "font-size: 20px;">
                            <?php
                               echo $depart;
                            ?>
                        </span>
                    </div>
                    <button type="button" class="btn btn-info btn-lg" style = "background-color:green;" data-toggle="modal" data-target="#myModal">Register</button>

                <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                        
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Register</h4>
                                </div>
                                <div class="modal-body">
                                <p>These Subjects That Allowed For You In This Semester Year(<?php echo $year_current . " Semester " . $number_we_at ;?>)</p>
                                <table class="table table-bordered align-center">
                                    <thead>
                                        <tr>
                                            <th scope="col" style = "text-align:center;">#</th>
                                            <th scope="col" style = "text-align:center;">Subject Name</th>
                                            <th scope="col" style = "text-align:center;">Subject Code</th>
                                            <th scope="col" style = "text-align:center;">Numbers Of Hours</th>
                                            <th scope="col" style = "text-align:center;">Subject Type</th>
                                            <th scope="col" style = "text-align:center;">Registered / Not</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $num = mysqli_num_rows($query_subject);
                                            if($num > 0)
                                            {
                                                while($allowed_to_register = mysqli_fetch_assoc($query_subject))
                                                {
                                                    $j += 1;
                                                    if($allowed_to_register['semester'] == $number_we_at)
                                                    {
                                                        $subject_type = "Need To Register Now";
                                                    }

                                                    $subject_check = "SELECT * From registeredcs WHERE stuId = '{$_SESSION['table_id']}' AND subject_id = '{$allowed_to_register['id']}' ";
                                                    $check_subject = mysqli_query($conn , $subject_check);

                                                    $num2 = mysqli_num_rows($check_subject);
                                                    if($num2 <= 0)
                                                    {
                                                        echo
                                                        '<tr scope="col">
                                                                <th scope="row" style = "text-align:center;">' . $j .'</th>
                                                                <th scope="row" style = "text-align:center;">' . $allowed_to_register['subject_name'] .'</th>
                                                                <th scope="row" style = "text-align:center;">' . $allowed_to_register['subject_code'] .'</th>
                                                                <th scope="row" style = "text-align:center;">' . $allowed_to_register['noh'] .'</th>
                                                                <th scope="row" style = "text-align:center;">' . $subject_type .'</th>
                                                            <form action = "php/Register_subject.php" method = "POST">
                                                                <input type="hidden" name="subject_id" value="'.$allowed_to_register['id'].'">
                                                                <th scope ="row" style = "text-align:center;"><input type="submit" name = "save" class="btn btn-info btn-lg" value = "Save" style = "background-color:green;"></th>
                                                            </form>
                                                        </tr>';
                                                    }
                                                    else if($num2 > 0)
                                                    {
                                                        echo
                                                        '<tr scope="col">
                                                            <th scope="row" style = "text-align:center;">' . $j .'</th>
                                                            <th scope="row" style = "text-align:center;">' . $allowed_to_register['subject_name'] .'</th>
                                                            <th scope="row" style = "text-align:center;">' . $allowed_to_register['subject_code'] .'</th>
                                                            <th scope="row" style = "text-align:center;">' . $allowed_to_register['noh'] .'</th>
                                                            <th scope="row" style = "text-align:center;">' . $subject_type .'</th>
                                                            <th scope ="row" style = "text-align:center;"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32"><g fill="none"><g filter="url(#f238id0)"><rect width="27.875" height="27.875" x="1.879" y="2.313" fill="url(#f238id5)" rx="3.6"/><rect width="27.875" height="27.875" x="1.879" y="2.313" fill="url(#f238id8)" rx="3.6"/></g><g filter="url(#f238id1)"><path stroke="url(#f238id6)" stroke-linecap="round" stroke-width="1.5" d="M28.067 4.813v22.875"/></g><g filter="url(#f238id2)"><path stroke="url(#f238id7)" stroke-linecap="round" stroke-width="1.5" d="M5.343 4.125h21.782"/></g><g filter="url(#f238id3)"><path fill="#53BB7D" d="M13.476 23.25a1.51 1.51 0 0 1-1.06-.43l-5.744-5.642a1.453 1.453 0 0 1 0-2.08a1.517 1.517 0 0 1 2.118 0l4.686 4.601L23.677 9.681a1.517 1.517 0 0 1 2.118 0a1.452 1.452 0 0 1 0 2.08l-11.26 11.058a1.504 1.504 0 0 1-1.06.431Z"/></g><g filter="url(#f238id4)"><path fill="#FCF2FF" d="M13.476 23.25a1.51 1.51 0 0 1-1.06-.43l-5.744-5.642a1.453 1.453 0 0 1 0-2.08a1.517 1.517 0 0 1 2.118 0l4.616 4.532a.1.1 0 0 0 .14 0l10.131-9.95a1.517 1.517 0 0 1 2.118 0a1.452 1.452 0 0 1 0 2.08l-11.26 11.06c-.292.287-.676.43-1.06.43Z"/></g><defs><filter id="f238id0" width="30.375" height="29.375" x="1.379" y="1.313" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"/><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="2" dy="-1"/><feGaussianBlur stdDeviation="1.5"/><feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic"/><feColorMatrix values="0 0 0 0 0.176471 0 0 0 0 0.521569 0 0 0 0 0.309804 0 0 0 1 0"/><feBlend in2="shape" result="effect1_innerShadow_18590_1991"/><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dy="-1"/><feGaussianBlur stdDeviation="1.5"/><feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic"/><feColorMatrix values="0 0 0 0 0.25098 0 0 0 0 0.490196 0 0 0 0 0.462745 0 0 0 1 0"/><feBlend in2="effect1_innerShadow_18590_1991" result="effect2_innerShadow_18590_1991"/><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="-.5" dy=".5"/><feGaussianBlur stdDeviation=".5"/><feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic"/><feColorMatrix values="0 0 0 0 0.356863 0 0 0 0 0.905882 0 0 0 0 0.560784 0 0 0 1 0"/><feBlend in2="effect2_innerShadow_18590_1991" result="effect3_innerShadow_18590_1991"/></filter><filter id="f238id1" width="5.5" height="28.375" x="25.317" y="2.063" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"/><feGaussianBlur result="effect1_foregroundBlur_18590_1991" stdDeviation="1"/></filter><filter id="f238id2" width="27.281" height="5.5" x="2.593" y="1.375" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"/><feGaussianBlur result="effect1_foregroundBlur_18590_1991" stdDeviation="1"/></filter><filter id="f238id3" width="22" height="16" x="5.234" y="8.25" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"/><feGaussianBlur result="effect1_foregroundBlur_18590_1991" stdDeviation=".5"/></filter><filter id="f238id4" width="20.8" height="14.8" x="5.834" y="8.85" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"/><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="-.4" dy=".4"/><feGaussianBlur stdDeviation=".375"/><feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic"/><feColorMatrix values="0 0 0 0 0.913725 0 0 0 0 0.886275 0 0 0 0 0.968627 0 0 0 1 0"/><feBlend in2="shape" result="effect1_innerShadow_18590_1991"/><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx=".4" dy="-.4"/><feGaussianBlur stdDeviation=".2"/><feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic"/><feColorMatrix values="0 0 0 0 1 0 0 0 0 0.988235 0 0 0 0 1 0 0 0 1 0"/><feBlend in2="effect1_innerShadow_18590_1991" result="effect2_innerShadow_18590_1991"/></filter><linearGradient id="f238id5" x1="15.817" x2="15.817" y1="5.887" y2="39.14" gradientUnits="userSpaceOnUse"><stop stop-color="#5AD98F"/><stop offset="1" stop-color="#51C685"/></linearGradient><linearGradient id="f238id6" x1="28.567" x2="28.567" y1="4.813" y2="27.688" gradientUnits="userSpaceOnUse"><stop stop-color="#74FCA8"/><stop offset="1" stop-color="#61DB90"/></linearGradient><linearGradient id="f238id7" x1="28.281" x2="2.749" y1="4.375" y2="4.375" gradientUnits="userSpaceOnUse"><stop stop-color="#66F39D"/><stop offset="1" stop-color="#60E496"/></linearGradient><radialGradient id="f238id8" cx="0" cy="0" r="1" gradientTransform="matrix(-1.56249 1.46876 -1.71548 -1.82495 27.536 4.406)" gradientUnits="userSpaceOnUse"><stop stop-color="#80FFB3"/><stop offset="1" stop-color="#80FFB3" stop-opacity="0"/></radialGradient></defs></g></svg></th>
                                                        </tr>';
                                                    }
                                                }
                                            }
                                            else
                                            {
                                                echo
                                                '<tr scope="col">
                                                    <th colspan = "6" scope="row" style = "text-align:center;">'. "There Is No Registered Subjects Yet For That Student" .'</th>
                                                </tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                <p>If You Choose Save The Selected Subjects Will Be Saved And You Must Go To University To Pay Them</p>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
                
        
            </div>
            <!-- End Welcome Widget -->
            <!-- Start Ticket Widget -->
            <div class="tickets p-20 bg-white rad-10 section2">
                <h2 class="mt-0 mb-10">Subjects</h2>
               <p class="mt-0 mb-20 c-grey fs-15">-----------------------</p>
                <div>
                    <table class="table table-bordered align-center">
                        <thead>
                            <tr>
                                <th scope="col" style = "text-align:center;">#</th>
                                <th scope="col" style = "text-align:center;">Subject Name</th>
                                <th scope="col" style = "text-align:center;">Subject Code</th>
                                <th scope="col" style = "text-align:center;">Number Of Hours</th>
                                <th scope="col" style = "text-align:center;">Notes</th>
                                <th scope="col" style = "text-align:center;">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                
                                $num = mysqli_num_rows($query4);
                                if($num > 0)
                                {
                                    while($registeredcs_logged = mysqli_fetch_assoc($query4))
                                    {
                                        $subject_id = $registeredcs_logged['subject_id'];
                                        $i += 1;

                                        /* =====> This Query Get Details Data Of Registered Subjects For Current Logged User <===== */

                                        $selectfk = " SELECT subject_name , subject_code , noh FROM subjects WHERE id = '$subject_id'";
                                        $query3= mysqli_query($conn, $selectfk);

                                        while($resultfk = mysqli_fetch_assoc($query3))
                                        {
                                            if($registeredcs_logged['purState'] == "Not Paid")
                                            {
                                                echo
                                                '<tr scope="col">
                                                    <th scope="row" style = "text-align:center;">' . $i .'</th>
                                                    <th scope ="row" style = "text-align:center;">'. $resultfk['subject_name'] .'</th>
                                                    <th scope ="row" style = "text-align:center;">'. $resultfk['subject_code'] .'</th>
                                                    <th scope ="row" style = "text-align:center;">'. $resultfk['noh'] .'</th>
                                                    <th scope ="row" style = "text-align:center;">'. '<p style = "background:red;color:white;border-radius: 8px;" >' . $registeredcs_logged['purState'] . '</p>' .'</th>
                                                    <form action = "php/delete_subject.php" method = "POST">
                                                        <th scope ="row" style = "text-align:center;"><input type="hidden" name="id" value="'.$registeredcs_logged['id'].'"><input type="submit" class="btn btn-info btn-lg" value = "Delete" style = "background-color:red;"></th>
                                                    </form>
                                                </tr>';
                                            }
                                            else if($registeredcs_logged['purState'] == "Paid")
                                            {
                                                echo
                                                '<tr scope="col">
                                                    <th scope="row" style = "text-align:center;">' . $i .'</th>
                                                    <th scope ="row" style = "text-align:center;">'. $resultfk['subject_name'] .'</th>
                                                    <th scope ="row" style = "text-align:center;">'. $resultfk['subject_code'] .'</th>
                                                    <th scope ="row" style = "text-align:center;">'. $resultfk['noh'] .'</th>
                                                    <th scope ="row" style = "text-align:center;">'. '<p style = "background:green;color:white;border-radius: 8px;" >' . $registeredcs_logged['purState'] . '</p>' .'</th>
                                                    <th scope ="row" style = "text-align:center;">' . " You Need To Go To Administration To Delete a Paid Subject" .'</th>
                                                </tr>';
                                            }
                                        }
                                    }
                                }
                                else
                                {
                                    echo
                                    '<tr scope="col">
                                        <th colspan = "6" scope="row" style = "text-align:center;">'. "There Is No Registered Subjects Yet For That Student" .'</th>
                                    </tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
        
            <!-- End Ticket Widget -->      
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="js/app.js"></script>
        <script> 
            setTimeout(() => 
                {
                    const errorm = document.getElementById('errorm');
                    errorm.style.display = 'none';
                }, 4000);
        </script>
    </body>
</html>