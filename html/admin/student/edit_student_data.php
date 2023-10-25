<?php
    session_start();
    require('php/connection.php');
    require('php/add_new_student.php');

    $id_table = $_GET['id'];
    $stu_id = $_GET['stu'];
    $depart = $_GET['depart'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../../../Image/Rectangle 3 copy.png">
    <title>Edit Student Data</title>
    <link rel="stylesheet" href="../../../css/all.min.css" />
    <link rel="stylesheet" href="../../../css/framework.css" />
    <link rel="stylesheet" href="../../../css/dr-forms.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../../../css/tables.css">
    <link rel="stylesheet" href="../../../css/mycss.css">

</head>

<body>
    <div class="page d-flex">
        <div class="content w-full">
            <h1 class="p-relative">Edit Data</h1>
            
            
            <!-- Start Settings Box -->
            <form action="#" method="POST">
                <div class="p-20 bg-white rad-10 section2">
                
                    <div class = "d-grid gap-3">
                        <div class = "text-center border border-primary h-90">
                            <lable>Student ID :</lable>
                            <lable><?php echo $stu_id;?></lable>
                        </div>
                        <lable>Name</lable>
                        <input type = "text" name = "name">
                        <lable>Department</lable>
                        <input type = "text" name = "depart" value = "<?php echo $depart?>" disabled>
                        <lable>Email</lable>
                        <input type = "text" name = "email">
                        <lable>Phone</lable>
                        <input type = "text" name = "phone">
                        <lable>Gender</lable>
                        <input type = "text" name = "gender">
                        <lable>Address</lable>
                        <input type = "text" name = "address">
                        <lable>Activity</lable>
                        <input type = "text" name = "activity">
                        <div class="firsttimeform">
                            <button type = "submit" name = "save">Save</button>
                            <button type = "reset">Clear</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- End Settings Box -->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>