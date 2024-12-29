<?php
 
 include '../../controller/config.php';
 session_start();

 $admin_id = $_SESSION['admin_id'];
 $admin_fname = $_SESSION['admin_fname'];
 $admin_lname = $_SESSION['admin_lname'];
 $admin_email = $_SESSION['admin_email'];

 if(!isset($admin_id))
 {
    header("Location: ../../public/auth/login.php");
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="image/png" rel="icon" href="../../assets/logo/Logo.png">
    <link rel="stylesheet" href="../../style/dashboard.css">
    <link rel="stylesheet" href="../../style/header.css">
    <link rel="stylesheet" href="../../style/footer.css">
    <title>Admin Dashboard</title>
</head>
<body>
<!--Left-side Navigation -->
    <div class="header-left">
        <div class="side-nav">
        <b class="title"><img class="logo" src="../../assets/logo/Logo.png" alt="logo"> Mamaku Vegetarian</b>
            <ul class="nav-links">
                <li>
                <p class="dear">Dear</p>
                <h6 class="name"><?php echo $admin_fname ."\t". $admin_lname; ?></h6>
                </li>
                <li class="active" >
                <a href=".php"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                <a href=".php"><i class="fa fa-edit"></i> Edit Menu</a>
                </li>
                <li>
                <a href=""><i class="fa fa-exchange"></i> Transaction record</a>
                </li>
                <li>
                <a href=""><i class="fa fa-id-card-o"></i> Member Account</a>
                </li>
            </ul>
            <a href="../../public/auth/logout.php" class="btn-logout"><i class="fa fa-sign-out"></i>Logout</a>
        </div>
        
    </div>

    <!--content of dashboard -->
    <div class="dashboard-content">
        <div class="top-dashboard">
            <h5>Dashboard</h5>
            <div class="searh">
                <form method="post">
                <input type="search" name="search" class="txt-search">
                <button type="submit" name="search" class="btn-search"><i class="fa fa-search"></i></button>
                </form>
                <a><i></i></a>
                <a><i></i></a>
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
        <div class="left-info">
            <p class="title-footer"><img class="logo-footer" src="../../assets/logo/Logo.png" alt="logo">Mamaku Vegetarian</p>
            <h5>Student Pvaillion UNIMAS</h5>
            <p>93400 Kota Samarahan, Sarawak</p>
        </div>
        <div class="contact-info">
            <ul class="ctc">
                <li class="ctc-title"><p>Contact Us</p></li>
                <li><a href><i class="fa fa-instagram"></i></a></li>
                <li><a href><i class="fa fa-whatsapp"></i></a></li>
            </ul>
        </div>
        <div class="btm-footer">
            <p>Copyright &copy; Mamaku Vegetarian All right Reserved.</p>
        </div>  
    </div>
</body>
</html>