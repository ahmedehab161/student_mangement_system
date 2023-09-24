<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Title -->
    <link rel="shortcut icon" href="Image/Rectangle 3 copy.png">
    <title>Log Student</title>
    <!-- CSS Links -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/log-student.css">
    <link rel="stylesheet" href="css/errors.css">
</head>

<body class="body">
    <?php
        include ('php/stu-login.php');
    ?>
    <header>
        <div class="nav-left">
            <a href = "login_stu.php">
                <h1 class="logo">Student</h1>
            </a>
            <img src="imgs/team-03.png" alt="image">
        </div>
        <ul class="nav-right">
            <a href="index.html" id="home">
                <li>Home</li>
            </a>
            <a href="contact-us.html">
                <li>Contacts</li>
            </a>
        </ul>
    </header>
    <div class="main">
        <div class="content-right">
            <form action="" method = "post">
                <h1>Login Here</h1>
                <div>
                    <img src="imgs/team-03.png" alt="" class="log-img-log">
                </div>
                <div class="inputs">
                    <?php
                        if(isset($_SESSION['error']))
                        {
                            echo '<div id = "errorm" class = "error">';
                                echo $_SESSION['error'];
                            echo "</div>";
                        }
                    ?>
                    <input type="number" name="stuid" placeholder="Student ID" required>
                    <input type="password" name="Password" placeholder="Password" >
                    <input type="submit" name="submit" value="Login Now" class="form-btn">

                    <h5 style = "color:red;">
                        If It Is The First Time Entering The Site Do Not Enter A Password
                    </h5>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="Js/all.min.js"></script>
    <script src="Js/main.js"></script>
    <script>
        setTimeout(() => 
        {
            const errorm = document.getElementById('errorm');
            errorm.style.display = 'none';
            window.open('destroyerror.php');
        }, 4000);
    </script>
</body>

</html>