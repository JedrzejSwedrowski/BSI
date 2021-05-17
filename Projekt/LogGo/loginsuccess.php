<?php

include "config.php";

session_start();

if(isset($_SESSION['user_id'])){
echo "<body style='background-color:lightgrey'>";
echo '<span style="color: darkgreen; font-size:25px;" /><center><br><b>TWOJE DANE</b></center></span>';
echo '<span style="color: brown; font-size:15px;" /><center><b>(Baza danych)</b></center></span>';
echo "<center><br>Zalogowałeś się jako <b>" .$_SESSION['user_name'];
echo "</b><br><b>E-mail: </b>" .$_SESSION['user_email'];
echo "<br><b>Data dołączenia: </b>" .$_SESSION['user_date'];
echo"<form>
<center><br><i>Wszystko gotowe?</i><br>       
          <input type=\"button\" name=\"logout\" value=\"Wyloguj\" onClick=\"window.location.href='logout.php'\"></center>
          </form>";
}

if(!empty($_SESSION['email']) and !empty($_SESSION['given_name'])){
    echo "<body style='background-color:lightgrey'>";
    echo '<span style="color: darkgreen; font-size:25px;" /><center><br><b>TWOJE DANE</b></center></span>';
    echo '<span style="color: blue; font-size:15px;" /><center><b>(Gooogle)</b></center></span>';  
    echo "<center><br>Zalogowałeś się jako <b>" .$_SESSION['given_name'];
      echo "<br></b><b>E-mail:</b>" .$_SESSION['email'];
      echo"<form>
    <center><br><i>Wszystko gotowe?</i><br>       
    <input type=\"button\" name=\"logout\" value=\"Wyloguj\" onClick=\"window.location.href='logout.php'\"></center>
    </form>";
    }

?>