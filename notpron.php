<?php 


  if (@ini_get('register_globals'))

      foreach ($_REQUEST as $key => $value)

               unset($GLOBALS[$key]);

  if (!empty($_GET))     extract($_GET);
  if (!empty($_POST))    extract($_POST);
  if (!empty($_COOKIE))  extract($_COOKIE);
  if (!empty($_SESSION)) extract($_SESSION);


include("dbCon.php");


if ($do == "del")  {

                  $delete = "DELETE FROM notpron WHERE id = '$_GET[id]'";

                  mysql_query($delete);

}

if ($_POST[wert] != "") {


      $query   = "INSERT into notpron (wert, zahl) ";
      $query  .= "VALUES ('$_POST[wert]', '$_POST[zahl]')";

      $result  = @mysql_query($query) OR die(mysql_error());

}

?>
<form method="post">
Name: <input type="text" name="wert">&nbsp;Wertigkeit: <input type="text" name="zahl">
<br>
<input type="submit" value="Eintragen" name="formi">
</form>
<br><br>

<?php 

$counter = 1;
$summe = 0;

          $qyB = mysql_query("SELECT * from notpron ORDER by id");

?><table cellpadding="3" cellspacing="4" width="800"><tr style=\"border:1px solid #000\"><td><b>Anzahl</b></td><td><b>Name</b></td><td><b>Wertigkeit</b></td><td><b>löschen</b></td></tr><?php 

          while ($rwB  =  mysql_fetch_assoc($qyB))  {

echo"<tr style=\"border:1px solid #000\"><td style=\"border:1px solid #000\">$counter</td><td style=\"border:1px solid #000\">$rwB[wert]</td><td style=\"border:1px solid #000\">$rwB[zahl]</td><td style=\"border:1px solid #000\"><a href=?do=del&id=$rwB[id]>löschen</a></td></tr>";

$counter++;

$summe = $summe + $rwB[zahl];

}

?></table>

<br><br>
Summe: <?php  echo $summe; ?>

