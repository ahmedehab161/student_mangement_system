<?php
    session_start();
    if(!isset($_SESSION['tableadminid']))
    {
        $_SESSION['error'] = "You Connot Enter This Page Befor Login";
        header('location:../../login/admin/login_admin.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../../../Image/Rectangle 3 copy.png">
    <title>Students</title>
    <link rel="stylesheet" href="../../../css/all.min.css" />
    <link rel="stylesheet" href="../../../css/framework.css" />
    <link rel="stylesheet" href="../../../css/Admin.css" />
    <link rel="stylesheet" href="../../../css/errors.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
</head>

<body>
    <?php
        require('php/csv_upload.php');
    ?>
    <div class="page d-flex">
        <div class="si">
            <div class="sidebar bg-white p-20 p-relative">
                <h3 class="p-relative txt-c mt-0">Admin</h3>
                <ul>
                    <li>
                        <a class="d-flex align-center fs-14 c-black rad-6 p-10 links" href="http://127.0.0.1/Student_mangement_system/html/admin/profile.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                              </svg>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex active align-center fs-14 c-black rad-6 p-10 links" href="http://127.0.0.1/Student_mangement_system/html/admin/student/admin_add_student.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                              </svg>
                            <span>Students</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-center fs-14 c-black rad-6 p-10 links" href="http://127.0.0.1/Student_mangement_system/html/admin/doctor/admin_add_doctor.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                              </svg>
                            <span>Doctors</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex  align-center fs-14 c-black rad-6 p-10 links" href="http://127.0.0.1/Student_mangement_system/html/admin/doctor/teaching_assistant.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                              </svg>
                            <span>Teaching Assistant</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex  align-center fs-14 c-black rad-6 p-10 links" style = "text-decoration: none;" href="../../../logout.php">
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
                <!-- Error Section -->
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
                <div class="newadds">
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5" id="exampleModalLabel">Student Data</h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                    </svg>
                                </div>

                                <div class="modal-body">
                                    

                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Image :</label>
                                            <input type="file" class="form-control imgs" id="message-text" name="image"></input>
                                        </div>
                                        <div class="mb-3">
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-id-card"></i></span>
                                                <input type="number" class="form-control" placeholder="Student ID" aria-label="Student ID" aria-describedby="addon-wrapping" name="student_id">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Name :</label>
                                            <input type="text" class="form-control name" id="recipient-name" name="name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Password :</label>
                                            <input type="number" class="form-control id" id="message-text" name="password"></input>
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Email :</label>
                                            <input type="email" class="form-control eml" id="message-text" name="email"></input>
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Phone :</label>
                                            <input type="number" class="form-control nums" id="message-text" name="phone"></input>
                                        </div>
                                    
                                            <div class="mb-3">
                                                <label  class="col-form-label">Gender :</label>
                                            <select name="gender"  required>
                                                <option value="">No Select</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            </div>
                                    
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Address :</label>
                                            <input type="text" class="form-control name" id="recipient-name" name="address">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Birth Date:</label>
                                            <input type="date" class="form-control name" id="recipient-name" name="birth">
                                        </div> 
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Department :</label>
                                            <select name="depart"  required>
                                                <option value="">No Select</option>
                                                <option value="CS">CS</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <input class="loginbt" type="submit" value="Save" name="add">
                                            <input  class="loginbtr" type="reset" value="Reset" name="reset">
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
                                    <h3 class="modal-title fs-5" id="exampleModalLabel2">Import Data From CSV File</h3>
                                    <i class="fa-solid fa-file-csv"></i>
                                </div>

                                <div class="modal-body">
                                    <form action="" method="post" enctype="multipart/form-data">
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
                <!-- Profile section -->
                <div class = "icons" style = "position: absolute;text-align: left;">
                    <a href = "../profile.php" style = "text-decoration:none;color:black;">
                        <img src="<?php if($_SESSION['image'] == NULL){echo "../../../imgs/avatar.png";}else{echo "../images/" . $_SESSION['image'];}; ?>" alt="User Image" />
                        <?php if($_SESSION['name'] == NULL){echo "No Name";}else{echo "<b>" . $_SESSION['name'] . "</b>";}; ?>
                    </a>
                </div>
                <!-- End Profile Section -->
                    <!-- Search -->
                    <div class="icons align-center">
                        <span>Search By Student ID</span>
                        <input class = "search" type = "number" id="myInput" onkeyup="myFunction()">
                    </div>
                <!-- End Search -->
            </div>
            <!-- End Head -->
            <div class="modal-content formes">
                <div class="doc-but">
                    <h1 class="p-relative">Students</h1>
                    <button type="button" class="btn btn-primary add" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                    </button>
                    <button type="button" class="btn btn-primary add" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 512 512">
                            <path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V304H176c-35.3 0-64 28.7-64 64V512H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM200 352h16c22.1 0 40 17.9 40 40v8c0 8.8-7.2 16-16 16s-16-7.2-16-16v-8c0-4.4-3.6-8-8-8H200c-4.4 0-8 3.6-8 8v80c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8v-8c0-8.8 7.2-16 16-16s16 7.2 16 16v8c0 22.1-17.9 40-40 40H200c-22.1 0-40-17.9-40-40V392c0-22.1 17.9-40 40-40zm133.1 0H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H333.1c-7.2 0-13.1 5.9-13.1 13.1c0 5.2 3 9.9 7.8 12l37.4 16.6c16.3 7.2 26.8 23.4 26.8 41.2c0 24.9-20.2 45.1-45.1 45.1H304c-8.8 0-16-7.2-16-16s7.2-16 16-16h42.9c7.2 0 13.1-5.9 13.1-13.1c0-5.2-3-9.9-7.8-12l-37.4-16.6c-16.3-7.2-26.8-23.4-26.8-41.2c0-24.9 20.2-45.1 45.1-45.1zm98.9 0c8.8 0 16 7.2 16 16v31.6c0 23 5.5 45.6 16 66c10.5-20.3 16-42.9 16-66V368c0-8.8 7.2-16 16-16s16 7.2 16 16v31.6c0 34.7-10.3 68.7-29.6 97.6l-5.1 7.7c-3 4.5-8 7.1-13.3 7.1s-10.3-2.7-13.3-7.1l-5.1-7.7c-19.3-28.9-29.6-62.9-29.6-97.6V368c0-8.8 7.2-16 16-16z"/>
                        </svg>
                    </button>
                </div>

                <div class="modal-body">
                    <table class="table" id="myTable">
                        <thead class="table-light">
                            <td>
                                <h6>Image</h6>
                            </td>
                            <td>
                                <h6>Student ID</h6>
                            </td>
                            <td>
                                <h6>Name</h6>
                            </td>
                            <td>
                                <h6>Department</h6>
                            </td>
                            <td>
                                <h6>Password</h6>
                            </td>
                            <td>
                                <h6>Email</h6>
                            </td>
                            <td>
                                <h6>Phone</h6>
                            </td>
                            <td>
                                <h6>Gender</h6>
                            </td>
                            <td>
                                <h6>Address</h6>
                            </td>
                            <td>
                                <h6>Activity</h6>
                            </td>
                            <td>
                                <h6>Birth Date</h6>
                            </td>
                            <td colspan = "2">
                                <h6>Operation</h6>
                            </td>
                        </thead>
                        <tbody>
                            <?php 
                                require('php/add_new_student.php');
                                $select = "select * from students";
                                $show = mysqli_query($conn, $select);
                                if(mysqli_num_rows($show) > 0)
                                {
                                    foreach($show as $data)
                                    {
                                        echo 
                                        '
                                            <tr>
                                                <td>
                                                    <img src = "../images/'. $data['image'] .'" height = "80px" width = "80px">
                                                </td>
                                                <td>
                                                    '. $data['stu_id'] .'
                                                </td>
                                                <td>
                                                    '. $data['name'] .'
                                                </td>
                                                <td>
                                                    '. $data['depart'] .'
                                                </td>
                                                <td>
                                                    '. $data['password'] .'
                                                </td>
                                                <td>
                                                    '. $data['email'] .'
                                                </td>
                                                <td>
                                                    '. '0' . $data['phone'] .'
                                                </td>
                                                <td>
                                                    '. $data['gender'] .'
                                                </td>
                                                <td>
                                                    '. $data['address'] .'
                                                </td>
                                                <td>
                                                    '. $data['activity'] .'
                                                </td>
                                                <td>
                                                    '. $data['birth_date'] .'
                                                </td>
                                                <td> 
                                                    <button type="button" class="btn btn-primary adds">
                                                        <a href = "'. $data['id'] .'">
                                                            <i class="fa-regular fa-pen-to-square" style = "color:white;"></i>
                                                        </a>
                                                    </button>
                                                </td>
                                                <td>
                                                    <form action = "php/delete_student.php" method = "POST">
                                                        <input type = "hidden" name = "id" value = " '. $data['id'] .' ">
                                                        <button type="submit" class="btn btn-secondary delet" data-bs-dismiss="modal">
                                                            <i class="fa-regular fa-trash-can" style = "color:white;"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                }
                                else
                                {
                                    echo 
                                    '
                                        <tr>
                                            <th style = "text-align:center;color:red;" colspan = "12">
                                                No Students Rigth Now ..!
                                            </th>
                                        </tr>

                                    ';
                                }                                
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src = "../../../js/destroyerror.js"></script>
        <script src = "../../../js/search.js"></script>
</body>
</html>