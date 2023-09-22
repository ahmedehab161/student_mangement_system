<?php

@include 'php/connection.php';

session_start();

if(isset($_POST['submit'])){
    @$Username = strtolower(mysqli_real_escape_string($conn, $_POST['Username']));
    @$pass = ($_POST['Password']);
    @$user_type = $_POST['user_type'];
 
    $select = " SELECT * FROM admin_login WHERE Username = '$Username' && Password = '$pass' ";
 
    $result = mysqli_query($conn, $select);
 
    if(mysqli_num_rows($result) > 0){
 
       $row = mysqli_fetch_array($result);
 
       if(strtolower($row['user_type']) == 'admin'){
          $_SESSION['admin_name'] = $row['Username'];
          header('location:Admin.html');
      }
    else{
       $error[] = "incorrect email or password!";
    }
}
};
?>

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
    <title>log-Admin</title>
    <!-- CSS Links -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/log-student.css">
</head>

<body class="body">
    <header>
        <div class="nav-left">
            <h1 class="logo">Admin</h1>
            <img src="imgs/course-02.jpg" alt="image">
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
            <form action="" method="post">
                <h1>Login Here</h1>
                <?php
                  if(isset($error)){
                        foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                        };
                  };
                ?>
                <div>
                    <img src="imgs/course-02.jpg" alt="" class="log-img-log">
                </div>
                <div class="inputs">
                    <input type="email" name="Username" placeholder="User Name">
                    <input type="password" name="Password" placeholder="Password">
                    <input type="submit" name="submit" value="login now" class="form-btn">
                </div>
            </form>
        </div>
    </div>
    <script src="js/slider.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="Js/all.min.js"></script>
    <script src="Js/main.js"></script>
</body>

</html>