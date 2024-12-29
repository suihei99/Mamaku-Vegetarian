<?php
    include '../../controller/config.php';

    session_start();

    if(isset($_POST['submit']))
    {
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $pass = mysqli_real_escape_string($con,md5($_POST['pass']));

        $select_users = mysqli_query($con, "SELECT * FROM `users` WHERE user_email = '$email' AND user_password = '$pass' ") or die("Query Failed!");

        if(mysqli_num_rows($select_users)>0)
        {
            $row = mysqli_fetch_assoc($select_users);
            
            if($row['user_role'] == 'admin')
            {
                $_SESSION['admin_fname'] = $row['first_name'];
                $_SESSION['admin_lname'] = $row['last_name'];
                $_SESSION['admin_email'] = $row['user_email'];
                $_SESSION["admin_id"] = $row['user_id'];
                header("Location: ../../view/admin/dashboard.php");

            }elseif($row['user_role'] == 'Member')
            {
                $_SESSION['mems_fname'] = $row['first_name'];
                $_SESSION['mems_lname'] = $row['last_name'];
                $_SESSION['mems_email'] = $row['user_email'];
                $_SESSION['mems_id'] = $row['user_id'];
                header("Location: ../../view/dashboard.php");
            }
        }else{
            echo "<script> alert('Incorrect email or password!'); </script>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../../style/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Sign In</title>
    <link type="image/png" rel="icon" href="../../assets/logo/Logo.png">
</head>
<body>
<div class="inside-container">
<!--left of container for logo and sub title -->
        <div class="left-container">
        <a class="title" href="../index.php"><img class="logo" src="../../assets/logo/Logo.png" alt="logo Vegetarian">Mamaku Vegetarian</a>
        <br>
                <p><q class="qoutation">Experience Begin Vegan</q></p>
                <br>
                <p class="left-item">New to Mamaku Vegetarian?</p>
                <br>
                <p class="txt-signup">Sign Up Today</p>
                <br>
                <a class="btn-register" href="signup.php">Register Now</a>
        </div>
        <div class="right-container-login">
            <form method="POST" action="">
            <h3 class="title-form">Sign In</h3>
                <div class="txt-form">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="txt-form">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" required>
                </div>
                <br>
                <button class="btn-register" name="submit" type="submit">Sign In</button>
            </form>
        </div>
    </div>
</body>
</html>