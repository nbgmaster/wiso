
<script language="JavaScript" type="text/javascript" src="./javascript/form_del_myad.js"></script>

<form name="myads_form" action="index.php?do=market&sec=delete" method="post" onSubmit="return checkBoxes();">


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="cellbg" width="30" align="center">

    </td>

    <td class="cellbg" align="left">
    <b>Titel</b>
    </td>

    <td class="cellbg" align="left" width="150">
    <b>Angebot läuft ab in...</b>
    </td>

    <td class="cellbg" width="30" align="center">
    <b>löschen</b>
    </td>

  </tr>

<?php 

  $query_myads = mysql_query("SELECT * from $boerse_tblname WHERE durance > '$timestamp' && user_id = '$userdata_id' order by date, category, lecture");
 

  while ($row_myads  =  mysql_fetch_assoc($query_myads))  {




                       $timeago  = $row_myads[durance] - $timestamp;

                       $timeago2 = $timeago / 60 / 60 / 24; 

                       $days     = floor($timeago2); 

                       $left     = $days * 60 * 60 * 24;

                       $left2    = $timeago - $left;

                       $andnow   = $left2 / 60 / 60;

                       $hours    = floor($andnow);

                       $left3    = $hours * 60 * 60;

                       $left4    = $andnow - $left3;

                       $minutes  = $left4 / 60;

                       $minutes  = floor($minutes);

                       $secondes = $timeago;  


?>


 <tr>

    <td class="tablea" align="center" width="30">

    <a href="index.php?do=market&sec=changead&ad_id=<?php echo"$row_myads[id]";?>">
    <img src="images/templates/<?php  echo"$template"; ?>/b_edit.png" border="0"></a>

    </td>

    <td align="left" class="tableb">

    <span style="font-size : <?php  echo"$fontsize_header"; ?>px;">

    <b><?php  echo"".$row_myads["title"].""; ?></b></span>

    </td>

    <td class="tableb" align="left">

<?php  


 if ($days > 0)  {  

     if ($days == "1") echo"$days Tag"; else echo"$days Tagen"; 

     if ($hours > 0)  {  if ($hours == "1") echo", $hours Stunde"; else echo", $hours Stunden";  } 

 }

 else if ($hours > 0)  {  

     if ($hours == "1") echo"$hours Stunde"; else echo"$hours Stunden";

     if ($minutes > 0)  {  if ($minutes == "1") echo", $minutes Minute"; else echo", $minutes Minuten";  } 

 }

 else if ($minutes > 0)  { 

     if ($minutes == "1") echo", $minutes Minute"; else echo", $minutes Minuten";

     if ($secondes > 0)  {  if ($secondes == "1") echo", $secondes Sekunde"; else echo", $secondes Sekunden"; }

 }

 else if ($secondes > 0)  { if ($secondes == "1")  echo"$secondes Sekunde"; else echo"$secondes Sekunden";  } 

?>

    </td>


    <td class="tablea" align="center">

    <input class="checkbox" type="checkbox" name="del_id[]" value="<?php  echo"".$row_myads["id"].""; ?>">

    </td>

  </tr>

<?php 

  }

?>

</table>

<br>

<table width="<?php  echo"$width"; ?>" cellpadding="0" cellspacing="1">

  <tr>

    <td align="center">

    <table style="width:100%;">

      <tr>

        <td align="right">

        <select name="deloption">

        <option value="del_myad">Markierte Anzeigen löschen</option>
        <option value="del_all_ads">Alle Anzeigen löschen</option>

        </select>

        </td>

        <td align="center" width="40">

        <input type="submit" name="send_del_data" value="Go" class="buttons" style="height:18px;font-size:10px" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

        <input type="hidden" name="user_id" value="<?php  echo"$user_id"; ?>">

        </td>

       </tr>

    </table>

    </td>

  </tr>

</form>

</table>
