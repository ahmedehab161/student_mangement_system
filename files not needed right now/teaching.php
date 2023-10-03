<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="Image/Rectangle 3 copy.png">
    <title>Teaching Assistant</title>
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/framework.css" />
    <link rel="stylesheet" href="css/Admin.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
</head>

<body>
    <?php 
        include("php/add ta.php");
    ?>
    <div class="page d-flex">
        <div class="si">
            <div class="sidebar bg-white p-20 p-relative">
                <h3 class="p-relative txt-c mt-0">Admin</h3>
                <ul>
                    <li>
                        <a class="d-flex align-center fs-14 c-black rad-6 p-10 links" href="websiet/index.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                              </svg>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-center fs-14 c-black rad-6 p-10 links" href="student.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                              </svg>
                            <span>Student</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-center fs-14 c-black rad-6 p-10 links" href="doctor.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                              </svg>
                            <span>Doctors</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex active align-center fs-14 c-black rad-6 p-10 links" href="teaching.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                              </svg>
                            <span>Teaching Assistant</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex  align-center fs-14 c-black rad-6 p-10 links" href="Admin Add Schedule.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
                                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
                              </svg>
                            <span>Schedule</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex  align-center fs-14 c-black rad-6 p-10 links" href="Admin Add Exam sch.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                                <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                              </svg>
                            <span>Exam Schedule</span>
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
                            <span>student And Subject</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content w-full">
            <!-- Start Head -->
            <div class="head bg-white p-15 between-flex a">
                <div class="newadds">
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5" id="exampleModalLabel">Teaching Assistant Data</h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                      </svg>
                                </div>
                                <div class="modal-body">
                                    <form method="post" enctype="multipart/form-data">
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

                                            <input type="email" class="form-control eml" id="message-text" name="Email "placeholder="email">
                                        </div>
                                        <div class="mb-3">

                                            <input type="number" class="form-control nums" id="message-text" name="Phone" placeholder="phone">
                                        </div>
                                        <div class="mb-3">
                                            <select class="form-select" aria-label="Default select example" name="Gender">
                                                <option selected>Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>                                              
                                              </select>
                                        </div>
                                        <div class="mb-3">

                                            <input type="text" class="form-control name" id="recipient-name" placeholder="Address" name="Address">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Week days:</label>
                                            <div class="chek">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="days[]" type="checkbox" id="inlineCheckbox1" value="Saturday">
                                                    <label class="form-check-label" for="inlineCheckbox1">Saturday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input"  name="days[]" type="checkbox" id="inlineCheckbox2" value="Sunday">
                                                    <label class="form-check-label" for="inlineCheckbox2">Sunday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input"  name="days[]" type="checkbox" id="inlineCheckbox2" value="Monday">
                                                    <label class="form-check-label" for="inlineCheckbox2">Monday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input"  name="days[]" type="checkbox" id="inlineCheckbox2" value="Tuesday">
                                                    <label class="form-check-label" for="inlineCheckbox2">Tuesday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input"  name="days[]" type="checkbox" id="inlineCheckbox2" value="Wednesday">
                                                    <label class="form-check-label" for="inlineCheckbox2">Wednesday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input"  name="days[]" type="checkbox" id="inlineCheckbox2" value="Thursday">
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
                <div class="icons d-flex align-center">
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                              </svg>
                            <span>Enquiry</span>
                        </button>
                        <form class="dropdown-menu p-4">
                            <div class="mb-3">

                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="mb-3">

                                <input type="number" class="form-control" placeholder="id">
                            </div>

                            <button type="submit" class="btn btn-primary">Enquiry</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Head -->
            <div class="modal-content formes">
                <div class="doc-but">
                    <h1 class="p-relative">Teaching Assistant</h1>
                    <button type="button" class="btn btn-primary add" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">                        
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                      </svg>
                        </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead class="table-light">
                            <td>
                                <h6>image</h6>
                            </td>
                            <td>
                                <h6>Id</h6>
                            </td>
                            <td>
                                <h6>Name</h6>
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
                                <h6>Week days</h6>
                            </td>
                            <td>
                                <h6>Free Hours</h6>
                            </td>
                            <td>
                                <h6>Operation</h6>
                            </td>
                        </thead>
                        <tbody>
                            <?php
                            $num=mysqli_num_rows($query);
                            if($num> 0){
                            while($result=mysqli_fetch_assoc($query)){


                            echo "  
                            <tr>
                                <td><img src='images/".$result['image']."' style='width:50px;height:50px;'></td>
                                <td>".$result['Id']."</td>
                                <td>".$result['Name']."</td>
                                <td>".$result['Password']."</td>
                                <td>".$result['Email']."</td>
                                <td>".$result['Phone']."</td>
                                <td>".$result['Gender']."</td>
                                <td>".$result['Address']."</td>
                                <td>".$result['days']."</td>
                                <td>".$result['fhours']."</td>
                                <td> 
                                    <button type='button' class='btn btn-primary adds'>
                                        <a href='update_ta.php' >
                                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                                <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                                            </svg>
                                        </a>
                                    </button>

                                    
                                
                                    <button type='button' class='btn btn-secondary delet' data-bs-dismiss='modal'>
                                    <a  href='teaching.php?Id=".$result['Id']."'>  
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                                            <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                                        </svg>
                                    </a>
                                        
                                    </button>
                                </td>


                            
                            </tr>
                            ";
                            }

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
</body>
<?php 
    include("php/add ta.php");
?>
</html>