<?php
 
 include '../../controller/config.php';

 if(isset($_POST['submit'])){

    $user_type = "Member";
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $pass = mysqli_real_escape_string($con,md5($_POST['pass']));
    $cpass = mysqli_real_escape_string($con,md5($_POST['cpass']));
    $fname = mysqli_real_escape_string($con,$_POST['fname']);
    $lname = mysqli_real_escape_string($con,$_POST['lname']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $gender = $_POST['gender'];
    $birth =date('Y-m-d',strtotime($_POST['birth']));

    $select_users = mysqli_query($con,"SELECT * FROM `users` WHERE user_email = '$email' AND user_password = '$pass'") or die("query failed!");

    if(mysqli_num_rows($select_users)>0)
    {
        
        echo "<script> alert('user already exist'); </script>";
    }else{
        if($pass != $cpass)
        {
            echo "<script> alert('Password and confirm password is not matched!'); </script>";
        }else{
            $query = "INSERT INTO `users`(user_role,user_email,user_password,first_name,last_name,phone,gender,user_birth)VALUES('$user_type','$email','$cpass','$fname','$lname','$phone','$gender','$birth')";
            if(!mysqli_query($con,$query))
            {
                echo "<script> alert('Query Failed: '); </script>";
            }else{
                echo "<script> alert('Registered Succesfully! '); </script>";
            }
            
            
        }

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
    <title>Sign Up</title>
    <link type="image/png" rel="icon" href="../../assets/logo/Logo.png">
</head>
<body>

    <div class="inside-container">
<!--left of container for logo and sub title -->
        <div class="left-container">
        <a class="title" href="../index.php"><img class="logo" src="../../assets/logo/Logo.png" alt="logo Vegetarian">Mamaku Vegetarian</a>
        <br>
                <p class="left-item">Member Registration</p>
                <br>
                <p class="qoutation">Experience Begin Vegan</p>
                <br>
                <p class="left-item">Already a Member?</p>
                <br>
                <a class="left-item" href="login.php">Sign-in here!</a>
        </div>
        <div class="right-container">
            <form method="POST" action="">
            <h3 class="title-form">Sign Up</h3>
                <div class="txt-form">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="txt-form">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" required>
                </div>
                <div class="txt-form">
                    <label for="cpass">Confirm Password</label>
                    <input type="password" name="cpass" id="cpass" required>
                </div>
                <div class="txt-name">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" required>
                </div>
                <div class="txt-name">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" required>
                </div>
                <div class="txt-form">
                    <label for="phone">Phone Number</label>
                    <input type="tel" name="phone" id="phone" placeholder="012-3456789" pattern="[0]{1}[1]{1}[0-9]{1}-[0-9]{7,8}" required>
                </div>
                <div class="txt-name">
                    <label for="gender" >Gender</label>
                    <select name="gender" id="gender" required>
                        <option value="">---gender---</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="txt-name">
                    <label for="birth">Date of Birth</label>
                    <input type="date" name="birth" id="birth" required>
                </div>
                <br>
                <button class="btn-register" name="submit" type="submit">Register</button>
            </form>
        </div>
    </div>
    
</body>
</html>