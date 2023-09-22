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
        <title>Certificate</title>
        <link rel="stylesheet" href="css/all.min.css" />
        <link rel="stylesheet" href="css/framework.css" />
        <link rel="stylesheet" href="css/dr-forms.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
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
                    require('php/connection.php');
                ?>
            </div>
        </div>
        <div class="content w-full">
            <!-- Start Head -->
            <div class="head bg-white p-15 between-flex">
                <div>
                    <?php
                        if($_SESSION['error'] != null)
                        {
                            echo '<div id = "errorm" class = "error">';
                                echo $_SESSION['error'];
                            echo "</div>";
                        }
                    ?>
                </div>
                <div class="icons d-flex align-center">
                    <span class="notification p-relative">
                <i class="fa-regular fa-bell fa-lg"></i>
              </span>
                    <img src="imgs/avatar.png" alt="" />
                </div>
            </div>
            <!-- End Head -->
            <h1 class="p-relative">Results</h1>
            <!-- Start Welcome Widget -->
            <div class="welcome bg-white rad-10 txt-c-mobile block-mobile section1">
                <div class="intro p-20 d-flex space-between bg-eee">
                    
                </div>
                <img src="imgs/avatar.png" alt="" class="avatar" />
                <div class="body txt-c d-flex p-20 mt-20 mb-20 block-mobile">
                    <div>
                        Name
                        <span class="d-block c-grey fs-14 mt-10">
                            <?php
                                echo $_SESSION['na'];
                            ?>
                        </span>
                    </div>
                    <div>
                        ID
                        <span class="d-block c-grey fs-14 mt-10">
                            <?php
                                echo $_SESSION['id'];
                            ?> 
                        </span>
                    </div>
                    <div>
                    Department 
                        <span class="d-block c-grey fs-14 mt-10">
                            <?php
                                echo $_SESSION['de'];
                            ?>
                        </span>
                    </div>
                </div>
        
            </div>
            <!-- End Welcome Widget -->
            <!-- Start Ticket Widget -->
            <div class="tickets p-20 bg-white rad-10 section2">
                <h2 class="mt-0 mb-10">Grades</h2>
                <p class="mt-0 mb-20 c-grey fs-15">-----------------</p>
                <div class="d-flex txt-c gap-20 f-wrap section3" style = "margin-left:300px;">
                    <div class="box p-20 rad-10 fs-13 c-grey sec">
                        <i class="fa-regular fa-rectangle-list fa-2x mb-10 c-orange"></i>
                        <h5>(Appreciation)</h5>
                        <span class="d-block c-black fw-bold fs-25 mb-5">
                            <?php
                                echo $_SESSION['cumulative_appreciation'];
                            ?>
                        </span>
                    </div>
                    <div class="box p-20 rad-10 fs-13 c-grey sec">
                        <i class="fa-solid fa-spinner fa-2x mb-10 c-blue"></i>
                        <h5>(GBA)</h5>
                        <span class="d-block c-black fw-bold fs-25 mb-5">
                            <?php
                                echo $_SESSION['total_gba'];
                            ?>
                        </span>
                    </div>
                    <div class="box p-20 rad-10 fs-13 c-grey sec">
                        <i class="fa-regular fa-circle-check fa-2x mb-10 c-green"></i>
                        <h5><span>(136/--)</span></h5>
                        <span class="d-block c-black fw-bold fs-25 mb-5"> 
                            (136 / <?php echo $_SESSION['finished_hour']; ?>)
                        </span>
                    </div>
                   
                </div>

                <div class="box p-20 rad-10 fs-13 c-grey sec" style = "text-align:center;margin:10px;">
                    <form method = "POST">
                        <span class="c-black fw-bold fs-25 mb-5"> 
                            <span><b style = "font-size:20px;margin:10px;">Semester : </b></span>
                            <span class="c-black fw-bold fs-25 mb-5"> 
                                <select name = "semester" style = "width:110px;height:50px;text-align:center;background:blue;color:white;border-radius:10px;">
                                    <?php
                                        $find_semseter2 = "SELECT * FROM semster";
                                        $semseter_find2 = mysqli_query($conn , $find_semseter2);
                                        $num = mysqli_num_rows($semseter_find2);
                                        if($num > 0)
                                        {
                                            while($semseter_find_result2 = mysqli_fetch_assoc($semseter_find2))
                                            {
                                                echo
                                                '
                                                    <option value = "'.$semseter_find_result2['semester_number'].'">'. $semseter_find_result2['semester_number'] .'</option>
                                                    <option value = "'.$semseter_find_result2['semester_number2'].'">'. $semseter_find_result2['semester_number2'] .'</option>
                                                ';
                                            }
                                        }
                                        else
                                        {
                                            echo
                                            '
                                                <option>No Data</option>
                                            ';
                                        }
                                    ?>
                                </select>
                            </span>

                        </span>
                        <span class="c-black fw-bold fs-25 mb-5"> 
                            <input name = "get" type = "submit" value = "Results" style = "height:50px;width:80px;background:green;border:1px solid black;border-radius:10px;color:white;margin:10px;">
                        </span>
                    </form>
                </div>
            
        
            <!-- End Ticket Widget -->
            <div class="modal-body" >
                <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Subject code</th>
                                <th scope="col">Subject Name</th>
                                <th scope="col">Appreciation</th>
                                <th scope="col">Number Of Hours</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                require('php/cert.php');
                            ?>
                        </tbody>
                    </table>
            </div>          
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