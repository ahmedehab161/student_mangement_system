<!DOCTYPE HTML>
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
    <link rel="shortcut icon" href="../../../Image/Rectangle 3 copy.png">
    <title>Admin</title>
    <!-- CSS Links -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/all.min.css">
    <link rel="stylesheet" href="../../../css/log-student.css">
    <link rel="stylesheet" href="../../../css/errors.css" />
</head>

<body class="body">
    <?php
        require('php/admin_login.php');
    ?>
    <header>
        <div class="nav-left">
            <h1 class="logo">Admin</h1>
            <img src="../../../imgs/course-02.jpg" alt="image">
        </div>
        <ul class="nav-right">
            <a href="../../../index.html" id="home">
                <li>Home</li>
            </a>
            <a href="../../../contact-us.html">
                <li>Contacts</li>
            </a>
        </ul>
    </header>
    <div class="main">
        <div class="content-right">
            <form action="" method="POST">
                <h1>Login Here</h1>
                <div>
                    <img src="../../../imgs/course-02.jpg" alt="" class="log-img-log">
                </div>
                <?php
                    if(isset($_SESSION['error']))
                    {
                        echo '<div id = "errorm" class = "error">';
                            echo $_SESSION['error'];
                        echo "</div>";
                    }
                ?>
                <div class="inputs">
                    <input type="number" name="workid" placeholder="Work ID" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="submit" name="submit" value="Login Now" class="form-btn">
                </div>
            </form>
        </div>
    </div>
    <script src="js/slider.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="Js/all.min.js"></script>
    <script src="Js/main.js"></script>
    <script src = "../../../js/destroyerror.js"></script>
</body>

</html>