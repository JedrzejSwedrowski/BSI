<?php

    require("config.php");

    $uname = $_POST['uname'];
    $newpass  = md5($_POST['newpass']);
    $error = '';

    $sql = "SELECT user_id FROM user WHERE user_name = '" . $uname . "'";
    $result = mysqli_query($con,$sql) or die(mysqli_error());
    $msr = mysqli_num_rows($result);

    if($msr > 0){
    $sql = "UPDATE user SET user_pass='".$newpass."' WHERE user_name='".$uname."'";
    $result = mysqli_query($con,$sql) or die(mysqli_error());
    header("location:index.php");
} else {
    header("location:passwordreset.php?error=yes");
}

?>