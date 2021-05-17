<?php

include "config.php";

session_start();

    echo "<body style='background-color:lightgrey'>";
    echo '<span style="color: darkgreen; font-size:25px;" /><center><br><b>Resetowanie hasła</b></center></span>';
    echo "<br><center><i>Proszę podać Twoją nazwę użytkownika oraz nowe hasło dla tego konta</i><br></center>";
    echo "<center><i>Pamiętaj, że to działa tylko dla kont zajerestrowanych w tym serwisie</i><br></center>";
    echo "<form method=\"POST\" action=\"passwordreseta.php\">
                <center><br><b>Login:</b></center>
                <center><input type=\"text\" name=\"uname\"></center><br>
                <center><b>Nowe hasło:</b></center>
                <center><input type=\"password\" name=\"newpass\"><br></center>
                <center><br><input type=\"submit\" name=\"reset\" value=\"Resetuj\"></center>
              </form>";
              if(isset($_GET['error'])) {
			echo '<span style="color: darkred;" /><center><b>Takie konto nie istnieje!</b></center></span><br>';
				}
    echo '<span style="color: red;" /><center><b>Podanie błędnego loginu skutkuje wyświetleniem komunikatu o błędzie</b></center></span>';
    echo "<form method=\"POST\" action=\"index.php\">
    <br><center><i>Chcesz powrócić do arkusza logowania?</i></center>
    <center><input type=\"submit\" name=\"reset\" value=\"Powrót\"></center>
    </form>";

?>