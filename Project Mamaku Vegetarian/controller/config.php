<?php
    $con = mysqli_connect("localhost","adminMamaku", "Unimas@1222", "mamaku_vegetarian");

    if($con === false)
    {
        echo "Connection Failed! :". mysqli_connect_error(); 
    }
?>