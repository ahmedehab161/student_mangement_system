<?php
    session_start();
    require('php/connection.php');
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
    <title>Doctor</title>
    <link rel="stylesheet" href="../../../css/all.min.css" />
    <link rel="stylesheet" href="../../../css/framework.css" />
    <link rel="stylesheet" href="../../../css/Admin.css" />
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
                        <a class="d-flex align-center fs-14 c-black rad-6 p-10 links" href="http://127.0.0.1/Student_mangement_system/html/admin/profile.php">
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
                        <a class="d-flex active align-center fs-14 c-black rad-6 p-10 links" href="http://127.0.0.1/Student_mangement_system/html/admin/doctor/admin_add_doctor.php">
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
                                    <h3 class="modal-title fs-5" id="exampleModalLabel">Doctor Data</h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                      </svg>
                                </div>
                                <div class="modal-body">
                                    <form  method="post"  enctype="multipart/form-data">
                                        <div class="mb-3">

                                            <input type="text" class="form-control name" id="recipient-name" name="Name" placeholder="Name">
                                        </div>
                                        <div class="mb-3">

                                            <input type="text" class="form-control id" id="message-text" name="Password" placeholder="password">
                                        </div>
                                        <div class="mb-3">

                                            <input type="number" class="form-control id" id="message-text" name="Id" placeholder="Id">
                                        </div>
                                        <div class="mb-3">

                                            <input type="email" class="form-control eml" id="message-text" name="Email" placeholder="email">
                                        </div>
                                        <div class="mb-3">

                                            <input type="number" class="form-control nums" id="message-text" name="Phone" placeholder="phone">
                                        </div>
                                        <div class="mb-3">
                                            <select class="form-select" name="Gender" aria-label="Default select example">
                                                <option selected>Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>                                              
                                              </select>
                                        </div>
                                        <div class="mb-3">

                                            <input type="text" class="form-control name" id="recipient-name" name="Address" placeholder="Address">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Week days:</label>
                                            <div class="chek">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="days[]" type="checkbox" id="inlineCheckbox1" value="Saturday">
                                                    <label class="form-check-label" for="inlineCheckbox1">Saturday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="days[]" type="checkbox" id="inlineCheckbox2" value="Sunday">
                                                    <label class="form-check-label" for="inlineCheckbox2">Sunday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="days[]" type="checkbox" id="inlineCheckbox2" value="Monday">
                                                    <label class="form-check-label" for="inlineCheckbox2">Monday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="days[]" type="checkbox" id="inlineCheckbox2" value="Tuesday">
                                                    <label class="form-check-label" for="inlineCheckbox2">Tuesday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="days[]" type="checkbox" id="inlineCheckbox2" value="Wednesday">
                                                    <label class="form-check-label" for="inlineCheckbox2">Wednesday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="days[]" type="checkbox" id="inlineCheckbox2" value="Thursday">
                                                    <label class="form-check-label" for="inlineCheckbox2">Thursday</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Sabbatical hours:</label>
                                            <div class="for-tim">
                                                <div class="form-group main-for-tim">
                                                    <label for="number" class="sr-only">Add Free Hours</label>
                                                    <input class="form-control input-lg-tim" name="shours" type="time" placeholder="Add Free Hours" required></input>
                                                </div>
                                                <div class="h2-to">
                                                    <h5>to</h5>
                                                </div>
                                                <div class="form-group main-for-tim">
                                                    <label for="number" class="sr-only">Add Free Hours</label>
                                                    <input class="form-control input-lg-tim" name="ehours" type="time" placeholder="Add Free Hours" required></input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">img:</label>
                                            <input type="file" class="form-control imgs" id="message-text" name="image">
                                        </div>
                                        <div class="modal-footer">
                                            <input class="btn btn-primary adds" type="submit" value="Save" name="add">
                                            <!-- <button type="submit" class="btn btn-primary adds" name="add">Save</button> -->
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                        <?php if($_SESSION['name'] == NULL){echo "No Name";}else{echo $_SESSION['name'];}; ?>
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
                    <h1 class="p-relative">Doctors</h1>
                    <button type="button" class="btn btn-primary add" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">                        
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
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
                                <h6>Work ID</h6>
                            </td>
                            <td>
                                <h6>Name</h6>
                            </td>
                            <td>
                                <h6>Password</h6>
                            </td>
                            <td>
                                <h6>Phone</h6>
                            </td>
                            <td>
                                <h6>Email</h6>
                            </td>
                            <td>
                                <h6>Address</h6>
                            </td>
                            <td>
                                <h6>Gender</h6>
                            </td>
                            <td>
                                <h6>Work Days</h6>
                            </td>
                            <td>
                                <h6>Activity</h6>
                            </td>
                            <td colspan = "2">
                                <h6>Operation</h6>
                            </td>
                        </thead>
                        <tbody>
                            <?php
                                require('php/add_new_doctor.php');
                                $select = "select * from dr_staff";
                                $show = mysqli_query($conn , $select);
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
                                                    '. $data['work_id'] .'
                                                </td>
                                                <td>
                                                    '. $data['name'] .'
                                                </td>
                                                <td>
                                                    '. $data['password'] .'
                                                </td>
                                                <td>
                                                    '. $data['phone'] .'
                                                </td>
                                                <td>
                                                    '. $data['email'] .'
                                                </td>
                                                <td>
                                                    '. $data['address'] .'
                                                </td>
                                                <td>
                                                    '. $data['gender'] .'
                                                </td>
                                                <td>
                                                    '. $data['work_days'] .'
                                                </td>
                                                <td>
                                                    '. $data['activity'] .'
                                                </td>
                                                <td> 
                                                    <button type="button" class="btn btn-primary adds">
                                                        <a href = "'. $data['id'] .'">
                                                            <i class="fa-regular fa-pen-to-square" style = "color:white;"></i>
                                                        </a>
                                                    </button>
                                                </td>
                                                <td>
                                                    <form action = "php/delete_doctor.php" method = "POST">
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src = "../../../js/search.js"></script>
</body>
</html>