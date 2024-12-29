<?php
     session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../style/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Mamaku Vegetarian</title>
    <link type="image/png" rel="icon" href="../assets/logo/Logo.png">
</head>
<body>
    <!--Header Main Menu or Home of Vegetarian Mamaku-->
    <div class="header">
    <a class="title"><img class="logo" src="../assets/logo/Logo.png" alt="logo">Mamaku Vegetarian</a>
        <div class="header-right">
            <a class="home" href="index.php">Home</a>
            <a class="menu" href="">Our Menu</a>
            <a class="cart" href="">Cart</a>
            <button class="sign-up"><a href="auth/signup.php">Sign Up</a></button>
            <button class="login"><a href="auth/login.php">Login</a></button>
        </div>
    </div>
    
    <div id="wallpaper">
        <h1>
            TASTE THE GREENERY WHILE ENJOYING THE SCENERY
        </h1>
        <br>
        <button class="MenuBTN">View All Menu</button>
    </div>
    <div id="center-content">
        <div>
            <h2>ABOUT MAMAKU VEGETARIAN</h2>
            <div class="container-vege">
                <h5>100% Vegan Goodness</h5>
                <p>We provide a variety of vegetables as well as other soy-based foods.</p>
            </div>
            <div class="container-fresh">
            <h5>Fresh from the market</h5>
            <p>We use the ingredients brought from the market, manintainig the freshness of the food.</p>
            </div>
            <div class="container-content">
            <h5>Flavourful & Nutritious</h5>
            <p>Our Meal packed with taste and nutrients make healthy eating enjoyble.</p>
            </div>
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