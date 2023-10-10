<?php
    require('student/php/connection.php');
    session_start();
    if(!isset($_SESSION['tableadminid']))
    {
        $_SESSION['error'] = "You Connot Enter This Page Befor Login";
        header('location:../login/admin/login_admin.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../../Image/Rectangle 3 copy.png">
    <title>Admin</title>
    <link rel="stylesheet" href="../../css/all.min.css" />
    <link rel="stylesheet" href="../../css/framework.css" />
    <link rel="stylesheet" href="../../css/Admin.css" />
    <link rel="stylesheet" href="../../css/profile.css" />
    <link rel="stylesheet" href="../../css/errors.css" />
    <link rel="stylesheet" href="../../css/overlay.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="page d-flex">
        <div class="si">
            <div class="sidebar bg-white p-20 p-relative">
                <h3 class="p-relative txt-c mt-0">Admin</h3>
                <ul>
                    <li>
                        <a class="d-flex active align-center fs-14 c-black rad-6 p-10 links" href="http://127.0.0.1/Student_mangement_system/html/admin/profile.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                              </svg>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-center fs-14 c-black rad-6 p-10 links" href="http://127.0.0.1/Student_mangement_system/html/admin/student/admin_add_student.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                              </svg>
                            <span>Students</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex  align-center fs-14 c-black rad-6 p-10 links" href="http://127.0.0.1/Student_mangement_system/html/admin/doctor/admin_add_doctor.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                              </svg>
                            <span>Doctors</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex  align-center fs-14 c-black rad-6 p-10 links" href="teaching.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                              </svg>
                            <span>Teaching Assistant</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex  align-center fs-14 c-black rad-6 p-10 links" href="doctor and subject.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5ZM9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8Zm1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5Zm-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5ZM7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"/>
                              </svg>
                            <span>Doctor And Subject</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex  align-center fs-14 c-black rad-6 p-10 links" href="student and subject.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5ZM9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8Zm1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5Zm-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5ZM7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"/>
                              </svg>
                            <span>Student And Subject</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex  align-center fs-14 c-black rad-6 p-10 links" style = "text-decoration: none;" href="../../logout.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 48 48">
                                <g fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
                                    <path d="M23.9917 6H6V42H24" />
                                    <path d="M33 33L42 24L33 15" />
                                    <path d="M16 23.9917H42" />
                                </g>
                            </svg>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content w-full">
            <!-- Start Head -->
            <div class="head bg-white p-15 between-flex a">
                <div class="newadds">
                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5" id="exampleModalLabel2">Change Password</h3>
                                    <i class="fa-solid fa-lock"></i>
                                </div>

                                <div class="modal-body">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Old Password</label>
                                            <input type="password" placeholder = "Password"><br>
                                            <label for="recipient-name" class="col-form-label">New Password</label>
                                            <input type="text" placeholder = "New Password"><br>
                                            <label for="recipient-name" class="col-form-label">Confirm Password</label>
                                            <input type="text" placeholder = "Confirm Password">
                                        </div>
                                        <div class="modal-footer">
                                            <input class="loginbt" type="submit" value="Change" name="Change">
                                            <input  class="loginbtr" type="reset" value="Undo" name="reset">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="newadds">
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5" id="exampleModalLabel2">Change Photo</h3>
                                    <i class="fa-solid fa-photo-film"></i>
                                </div>

                                <div class="modal-body">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Choose File</label>
                                            <input type="file" required class="form-control name" name="exceldata">
                                        </div>
                                        <div class="modal-footer">
                                            <input class="loginbt" type="submit" value="Upload" name="upload">
                                            <input  class="loginbtr" type="reset" value="Undo" name="reset">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <?php
                        if(isset($_SESSION['error']))
                        {
                            echo '<div id = "errorm" class = "error">';
                                echo $_SESSION['error'];
                            echo "</div>";
                        }
                        elseif(isset($_SESSION['suc']))
                        {
                            echo '<div id = "sucm" class = "success">';
                                echo $_SESSION['suc'];
                            echo "</div>";
                        }
                    ?>
                </div>
                <div class="icons d-flex align-center">
                    
                </div>
            </div>
            <!-- End Head -->
        </div>
        <div class = "container">
            <div class = "postion">
                <img class = "image" src="<?php if($_SESSION['image'] == NULL){echo "../../imgs/avatar.png";}else{echo "images/" . $_SESSION['image'];} ?>" alt="User Image" />
                <p class = "name"><b>Ahmed Ehab</b></p>
                <p class = "type"><b>UserType : ADMIN</b></p>
                
                    <p><b> 
                        <?php
                        // Time Ago
                            function time_ago($date) {
                                    $timestamp = strtotime($date);
                                    $time_ago = time() - $timestamp;
                                    $time_ago = ($time_ago < 1) ? 1 : $time_ago;
                                    $tokens = array(
                                        31536000 => 'year',
                                        2592000 => 'month',
                                        604800 => 'week',
                                        86400 => 'day',
                                        3600 => 'hour',
                                        60 => 'minute',
                                        1 => 'second'
                                    );
                                    foreach ($tokens as $unit => $text) {
                                        if ($time_ago < $unit) continue;
                                        $numberOfUnits = floor($time_ago / $unit);
                                        return $numberOfUnits . ' ' . $text . (($numberOfUnits > 1) ? 's' : '') . ' ago';
                                    }
                                }
                            // Date Formate =>> Y-D-M / Time Formate =>> 24 hour
                            $select = "select updated_at from dr_staff WHERE work_id = {$_SESSION['workid']}";
                            $show = mysqli_query($conn, $select);
                            foreach($show as $data)
                            {
                                echo time_ago($data['updated_at']);
                            }


                            // echo "<div id = 'date'>";
                            //     if(date("Y-m-d H:i:s") > "2023-10-09 17:40:00")
                            //     {
                            //         echo 
                            //         '<div id="overlay">
                            //             <div id="content">
                            //                 <p class = "text">Register Closed Now</p>
                            //             </div>
                            //         </div>';
                            //     }
                            //     else
                            //     {
                            //             //Set the date and time
                            //             $date = new DateTime('2023-10-09 17:40:00');

                            //             //Get the current date and time
                            //             $now = new DateTime();

                            //              Calculate the difference between the current date and time and the target date and time
                            //             $interval = $date->diff($now);

                            //             //Display the remaining time
                            //             echo 'Remaining time: ' . $interval->format('%h hours, %i minutes, %s seconds');
                            //     }
                            // echo "</div>";
                        ?>
                    </b></p>
            </div>

            <div class = "pos">
                <div>
                    <button type = "button" class = "btn2" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        <i class="fa-solid fa-lock"></i>
                        Change Password
                    </button>
                </div>
                <div>
                    <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <i class="fa-solid fa-photo-film"></i>
                        Change Photo
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src = "../../js/destroyerror.js"></script>
    <script>
        setInterval(function() {
            $('#date').load('profile.php #date');
        }, 1000);
    </script>
</body>

</html>