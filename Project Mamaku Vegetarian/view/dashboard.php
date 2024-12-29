<?php
 
 include '../controller/config.php';
 session_start();

 $mems_id = $_SESSION['mems_id'];

 if(!isset($mems_id))
 {
    header("Location: ../public/auth/login.php");
 }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link type="image/png" rel="icon" href="../../assets/logo/Logo.png">
    <title>Member Dashboard</title>
</head>
<body>
    <!--Left-side Navigation -->
    <div class="header-left">
        <title><img class="logo" src="../../assets/logo/Logo.png" alt="logo"> Mamaku Vegetarian</title>
            <div class="username">
            <p>Dear</p>
                <h6>Admin</h6>
            </div>    
        <div class="left-nav">
                <a class="Dashboard" href=".php">Dashboard</a>
                <a class="edit-menu" href=".php">Edit Menu</a>
                <a class="record" href="">Transaction record</a>
                <a class="account" href="">Member Account</a>
        </div>
        <a href="" class="btn-logout"><i>Logout</i></a>
    </div>

    <div class="dashboard-content">
        <div class="top-dashboard">
            <h5>Dashboard</h5>
            <div class="searh">
                <form method="post">
                <input type="search" name="search" class="txt-search">
                <button type="submit" name="search" class="btn-search"><i></i></button>
                </form>
                <a></a>
                <a></a>
            </div>
        </div>
        <div class="order">

        </div>
        <div class="menu-fav">

        </div>
        
        <div class="menu-top">

        </div>
        
    </div>

    <div class="footer">
        <div>
            <a>Mamaku Vegetarian</a>
            <h5>Student Pvaillion UNIMAS</h5>
            <p>93400 Kota Samarahan, Sarawak</p>
        </div>
        <div>
            <h5>CONTACT US</h5>

        </div>
        <div>

        </div>
        <p>Copyright &copy; Mamaku Vegetarian All right Reserved.</p>
    </div>
</body>
</html>