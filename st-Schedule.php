<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        $_SESSION['error'] = "You Connot Enter This Page Befor Login";
        header('location:login_stu.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Schedule</title>
    <link rel="shortcut icon" href="Image/Rectangle 3 copy.png">
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/framework.css" />
    <link rel="stylesheet" href="css/Admin.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="page d-flex">
        <div class="si">
            <div class="sid sidebar bg-white p-20 p-relative">
                <h3 class="p-relative txt-c mt-0">Student</h3>
                <?php
                    require('nav.html')
                ?>
            </div>
        </div>  
            <div class="container">
                <div class="schedule-contents pb-30" style = "margin-left:380px;">

                    <div class="schedule-header pb-20 pt-30 ">
                        <div class="schedule-header__head position-relative">
                            <h2>Your Schedule</h2>
                        </div>
                    </div>
                    <div class="schedule my-30" data-aos="fade-right">
                        <table class="schedule-table">
                            <tr class="sch-hed">
                                <td>
                                    <h4>DAY</h4>
                                    
                                </td>
                                <td>
                                    <h4>--:--</h4>
                                </td>
                                <td>
                                    <h4>--:--</h4>
                                </td>
                                <td>
                                    <h4>--:--</h4>
                                <td>
                                    <h4>--:--</h4>
                                </td>
                                <td>
                                    <h4>--:--</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>subject</h4>
                                </td>
                                <td>
                                    <h4>subject</h4>
                                </td>
                                <td>
                                    <h4>subject</h4>
                                </td>
                                <td>
                                    <h4>subject</h4>
                                </td>
                                <td>
                                    <h4>subject</h4>
                                </td>
                                <td>
                                    <h4>subject</h4>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>