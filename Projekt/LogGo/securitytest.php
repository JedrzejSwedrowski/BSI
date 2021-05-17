<?php

    include "config.php";

    session_start();

    echo "<body style='background-color:lightgrey'>";
    echo '<span style="color: blue; font-size:30px;" /><center><br><b>Zabezpieczenie przeciwko botom</b></center></span>';
    echo "<center><br>Dzień dobry, <b>" .$_SESSION['user_name'];
    echo "</b><center>Aby otrzymać możliwość podglądu odpowiedz proszę na pytanie bezpieczeństwa<br></center>";
    echo "<form method=\"POST\" action=\"securitycheck.php\">
    <span style=\"color: green;\" /><center><br><i>Ile wynosi 2+2?</i></center></span><br>
    <center><input type=\"text\" name=\"answer\"></center>
    <center><br><input type=\"submit\" name=\"log\" value=\"Odpowiedź\"></center>
  </form>";
  echo '<span style="color: red;" /><center><b>Błędna odpowiedź zaskutkuje automatycznym wylogowaniem!</b></center></span>';

?>