<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../../Image/Rectangle 3 copy.png">
    <title>First Enter</title>
    <link rel="stylesheet" href="../../css/all.min.css" />
    <link rel="stylesheet" href="../../css/framework.css" />
    <link rel="stylesheet" href="../../css/dr-forms.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../../css/tables.css">
    <link rel="stylesheet" href="../../css/mycss.css">

</head>

<body>
    <?php
        require('php/savedata.php');
    ?>
    <div class="page d-flex">
        <div class="content w-full">
            <h1 class="p-relative">Student Data</h1>
            
            
            <!-- Start Settings Box -->
            <form action="#" method="POST">
                <div class="p-20 bg-white rad-10 section2">
                
                    <div class="form-group">
                        <h3 style = "text-align:center;">Please Be Careful Buting The Password It Cannot Change Later</h3>
                        <?php
                            if(isset($_SESSION['error']))
                            {
                                echo '<div id = "errorm" class = "error">';
                                    echo $_SESSION['error'];
                                echo "</div>";
                            }
                        ?>

                        <div class="firsttimeform">
                            <lable class = "lableme">Your Password</lable>
                            <input class = "inputme" name = "password" type = "password" placeholder = "Enter Password" required>
                            <br>
                            <lable class="lableme">Your Email</lable>
                            <input class="inputme" name = "email" type="text" placeholder="Enter Email" required>
                            <lable class="lableme">Your Address</lable>
                            <input class="inputme" name = "address" type="text" placeholder="Enter Address" required>
                            <lable class="lableme">Your Phone Number</lable>
                            <input class="inputme" name = "phone" type="text" placeholder="Enter Phone Number" required>
                            <br>
                            <input class = "buttonme" value = "Save"  type = "submit" name = "save">
                        </div>
                    </div>
                <h4><iconify-icon icon="pajamas:question" style = "color:blue;"></iconify-icon> Why Iam Seeing This Page?</h4>
                <p style="font-size: 15px;"><iconify-icon icon="icomoon-free:arrow-right2"></iconify-icon> Because This Is The First Time For You To Enter Your Account</p>
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