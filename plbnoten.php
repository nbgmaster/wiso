<?php


  // Security:: Set register globals off

  if (@ini_get('register_globals'))
  
      foreach ($_REQUEST as $key => $value)
     
               unset($GLOBALS[$key]);

  if (!empty($_GET))     extract($_GET);
  if (!empty($_POST))    extract($_POST);
  if (!empty($_COOKIE))  extract($_COOKIE);
  if (!empty($_SESSION)) extract($_SESSION);

  // Connect to Database

  $dbserver = "localhost";
  $dbuser   = "web9";
  $dbpass   = "#SMRbac01";
  $dbname   = "usr_web9_1";

  $db = mysql_connect($dbserver, $dbuser, $dbpass, $dbname);      

  mysql_select_db($dbname, $db) OR die(mysql_error());



 if ($do == "")  {


  $query_this = mysql_query("SELECT IP from note");
        
$muh2 = mysql_num_rows($query_this);


 ?>

<b><font size="+2">Berechnung des Notendurchschnitts der Bachelor-Klausur "Produktion, Logistik, Beschaffung"</font></b>

<br><br>
Gebe hier deine Note in der <u>"Produktion, Logistik, Beschaffung"-Klausur</u> an:
<br><br>

<form action="plbnoten.php?do=send" method="post">

<select name="note">

<option>1,0</option>
<option>1,3</option>
<option>1,7</option>
<option>2,0</option>
<option>2,3</option>
<option>2,7</option>
<option>3,0</option>
<option>3,3</option>
<option>3,7</option>
<option>4,0</option>
<option>4,3</option>
<option>4,7</option>
<option>5,0</option>

</select>

<br><br>

<input type="submit" value="Note eintragen">

</form>

Anzahl eingetragener Noten: <b><?php echo"$muh2"; ?></b>

<br><br>

Sobald gen&uuml;gend Noten eingetragen sind wird der Notendurchschnitt auf <a href="www.wiwistud.de"><b>wiwistud.de</b></a> ver&ouml;ffentlicht.



<?php } else if ($_POST[note] != "") { 


  $query_this_f = mysql_query("SELECT IP from note WHERE IP = '$_SERVER[REMOTE_ADDR]'");
        
$muh = mysql_num_rows($query_this_f);

if ($muh == "0")  {

    $query_out_box   = "INSERT into note (IP, note) ";
      $query_out_box  .= "VALUES ('$_SERVER[REMOTE_ADDR]', '$_POST[note]')";

      $result_out_box  = @mysql_query($query_out_box) OR die(mysql_error());


echo"Deine Note wurde eingetragen.";

}

else  { echo"Du hast deine Note bereits eingetragen."; }


?>     <meta http-equiv="refresh" content="2; url=plbnoten.php">

<br><br>
<i>Du wirst weitergeleitet...</i>
<?php




 } 
