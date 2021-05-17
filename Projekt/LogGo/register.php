<?php
echo "<body style='background-color:lightgrey'>";
echo '<span style="color: darkblue; font-size: 25px" /><center><br><b>Rejestracja nowego konta</b></center></span>';
if(isset($error)) {
$ul =<<<EOD
<ul>
$error
</ul>
EOD;
echo $ul;
}
?>
<form method="post" action="trans.php">
<table align="center">
<br><tr>
<td width="105px"><b>Nick:</b></td>
<td>
<input type="text" name="name">
</td>
</tr>
<tr>
<td><b>Hasło:</b></td>
<td>
<input type="password" name="pass1">
</td>
</tr>
<tr>
<td><b>Powtórz hasło:</b></td>
<td>
<input type="password" name="pass2">
</td>
</tr>
<tr>
<td><b>E-mail:</b></td>
<td>
<input type="text" name="mail">
</td>
</tr>
<tr>
<td colspan="2" align="center"><br>
<input type="submit" style="width: 300px;" name="submit" value="Rejestruj">
</td>
</tr>
</table>
</form>
<center><i>Chcesz powrócić do panelu logowania?</i></center>
<center><input type="button" name="back" value="Powrót" onClick="window.location.href='index.php'"></center>