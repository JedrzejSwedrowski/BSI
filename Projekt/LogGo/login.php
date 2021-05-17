<?php
 
    session_start();
    
    include "config.php";
 
    $user_login = $_POST['login'];
    $user_pass  = md5($_POST['pass']);
    
    $sql = "SELECT * FROM user WHERE user_name = '".$user_login."' AND user_pass = '".$user_pass."';";
    $result = mysqli_query($con,$sql)
        or die("Podałeś błędny login lub hasło");
        
    $rows = mysqli_num_rows($result);
    
    if ($rows == 1) {
        
        $r = mysqli_fetch_assoc($result);
        
        $_SESSION['user_id']     = $r['user_id'];
        $_SESSION['user_name']   = $r['user_name'];
        $_SESSION['user_email']  = $r['user_email'];
        $_SESSION['user_rights'] = $r['user_rights'];
        $_SESSION['user_date']   = $r['user_date'];
        
        header("Location: securitytest.php");
    }
    else {
        echo "<body style='background-color:lightgrey'>";
        echo "<form action=\"index.php\">
        <span style=\"color: darkred; font-size:40px;\" /><center><br><b>Podałeś błędny login lub hasło!</b></center></span><br>
        <center><br><input type=\"submit\" name=\"pow\" value=\"Powrót\"></center>
      </form>";
    }
 
?>