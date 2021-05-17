<?php
 
 session_start();
    
    include "config.php";

    if(isset($_SESSION['logged_in'])){
      header("Location: loginsuccess.php");
    }

    if(isset($_SESSION['user_id'])){
      header("Location: loginsuccess.php");
    }
    else {
        echo "<body style='background-color:lightgrey'>";
				if(isset($_GET['wykonano'])) {
				echo "<center><i>Konto zostało utworzone! Możesz teraz sie zalogować</i></center><br>";
				}
        echo '<span style="color: darkblue; font-size: 40px" /><center><br><b>LogGo</b></center></span>';
        echo "<center><br><i>Witamy, proszę się zalogować aby uzyskać dostęp...</i></center>";
        echo "<form method=\"POST\" action=\"login.php\">
                <center><br><b>Login:</b></center>
                <center><input type=\"text\" name=\"login\"></center><br>
                <center><b>Hasło:</b></center>
                <center><input type=\"password\" name=\"pass\"><br></center>
                <center><br><input type=\"submit\" name=\"log\" value=\"Zaloguj\"></center>
              </form>";
        echo "<form action=\"register.php\">
        <center><i>Nie posiadasz konta?</i><br></center>        
        <center><input type=\"submit\" name=\"reg\" value=\"Utwórz konto\"></center>
              </form>";
              echo "<form action=\"passwordreset.php\">
              <center><i>Zapomniałeś hasła do konta?</i><br></center>        
              <center><input type=\"submit\" name=\"reset\" value=\"Zresetuj hasło\"></center>
              </form>";
              if(empty($_SESSION['logged_in'])){
                    echo "<form>
                    <center><i>Posiadasz konto Google?</i><br></center>        
                    <center><input type=\"button\" name=\"google\" value=\"Zaloguj przez konto Google\" onClick=\"window.location.href='$google_login_url'\"></center>
                    </form>";
                    }           
    }
            
?>