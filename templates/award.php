
<?php 

if (!isset($TOforum) && !isset($NOpoll)) { include("./templates/update_top.php");    }


 if (isset($NOpoll)) {

      $upd_aw  = "UPDATE $user_tblname SET award = '1' WHERE UserID = '$userdata_id'";

      mysql_query($upd_aw) OR die(mysql_error());

      $link = "index.php"; $refresh_time = "2"; $text01 = "Du hast die Teilnahme an der Umfrage abgelehnt!";

      include("./templates/refresh.php");

       }

 else if (isset($TOstep2) || isset($TOforum)) {

include("templates/award2.php");

} else {   ?>

<script type="text/javascript" src="javascript/award.js" language="JavaScript1.2"></script>
<script>

function changeDIVS() {

document.getElementById("mainframe1").style.display = "none";
document.getElementById("mainframe2").style.display = "block";

}

function atleast1() {

if (ayN.length == 0) {

alert("Du musst mindestens 1 Lehrveranstaltung auswählen!");
return false;
}

else if (ayN.length == 1) {

return confirm ('Du hast '+ayN.length+' Lehrveranstaltung ausgewählt. Fortfahren?');

}

else  {

return confirm ('Du hast '+ayN.length+' Lehrveranstaltungen ausgewählt. Fortfahren?');

}

}

</script>

<table width="<?php echo"$width";?>" cellpadding="0" cellspacing="0" height="100%">

<tr>

<td valign="top">
  <div style="display:block" id="mainframe1">
<table cellpadding="4" cellspacing="1" border="0" width="100%" class="tableinborder" height="100%">
<tr><td class="catbg" style="font-size:13px">
<b>Die wiwistud.de RANGLISTE der Bachelor-Lehrveranstaltungen im Wintersemester 08/09</b></td></tr>
<tr><td class="tableb" height="200" valign="top" style="padding-left:8px;padding-top:5px;padding-right:8px" height="100%">
  <br>
<span style="font-size:13px;line-height:24px;">
Normalerweise bekommst <b>DU</b> am Ende des Semesters eines Note in deinen belegten Fächern, aber <b>jetzt kannst Du den Spieß umdrehen!</b>
<br><br><center>
<b><span style="font-size:14px">Bewerte deshalb deine besuchten Lehrveranstaltungen <br>aus dem letzten Semester (WS 08/09) auf wiwistud.de!</span></b> </center>
<br>
</span>

<span style="font-size:12px;line-height:24px;">
<b>Wichtige Anmerkungen:</b>
<br>
  <ul type="square">

   <li> Deine Daten werden <b>anonym</b> gespeichert (Bewertungen können nicht auf deinen Account zurückverfolgt werden) </li>
<li>Du kannst noch bis zum <b>05.04.2009</b> an dieser Umfrage teilnehmen!</b></li>
<li>Die Umfrage nimmt <b>maximal 5-10 Minuten</b> in Anspruch.</b></li>
</ul>        <br>
<table width="100%"><tr><td align="center">
<input type="button" class="buttons" onclick="changeDIVS()" value="Ich möchte an dieser Umfrage jetzt teilnehmen" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

</td><form onsubmit="return confirm('Willst du wirklich nicht an dieser Umfrage teilnehmen?\nDie Teilnahme ist noch bis zum 05.04.2009 möglich.');">
<td align="center">
<input type="submit" class="buttons" name="NOpoll" value="Ich möchte an dieser Umfrage jetzt NICHT teilnehmen" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

</td></tr> </form></table>
             <br>
</td></tr></table>

       </td></tr>
       </table>
           </div>

<div style="display:none" id="mainframe2">

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="tableinborder" height="100%">
     <tr><td class="catbg" style="font-size:13px">
<b>Die wiwistud.de RANGLISTE der Bachelor-Lehrveranstaltungen im Wintersemester 2008/2009</b></td></tr>
       <tr><td class="tableb">
                                                   <br>
<span style="font-size:12px;line-height:24px;">
<span style="font-size:14px;">
&nbsp;&nbsp;<b>Diese Umfrage besteht aus <u>2 SCHRITTEN</u>:</b> </span>
<br>
  <ul type="square">  <li>
<u>1. Schritt:</u>
<br>
Wähle unten zunächst die Veranstaltungen aus, <b>die du im WINTERSEMESTER 08/09 entweder BESUCHT hast</b> und/oder
an <b>deren Klausur du LETZTES SEMESTER <u>teilgenommen</u> hast</b></li> <br>
<ul type="square"><li>du kannst <b>maximal 12 Veranstaltungen</b> auswählen und anschließend bewerten</li></ul>

<br>
<li><u>2. Schritt:</u>
<br>
Bewertung deiner ausgewählten Veranstaltungen  </li>
</ul>
</span>

</td></tr></table>

<br>

<table cellpadding="4" cellspacing="1" border="0" width="98%" class="tableinborder" height="100%">
<tr><td class="cellbg"><b>Schritt 1</b></td></tr><tr>

<form method="post" onSubmit="return atleast1();">

<td class="tablea">

<table><tr><td valign="top">

  <table width="380" cellpadding="3" cellspacing="1" class="tableinborder">

<tr><td class="cellbg" width="360"><b>Veranstaltungen :: Semester 1</b></td>

<td class="cellbg" align="center"><b></b></td>


</tr>

<?php    $qy_awa = mysql_query("SELECT id, veranstaltung FROM $award_tblname WHERE semester = '1' ORDER by veranstaltung");

  while  ($rw_awa  =  mysql_fetch_assoc($qy_awa)) {    ?>

<tr><td class="tableb" style="padding:9px" width="360" onclick="checkN2(<?php  echo"$rw_awa[id]"; ?>)" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

<span style="font-size:11px"><?php  echo"$rw_awa[veranstaltung]"; ?></span></b>

</td>

 <td class="tablea" align="center" width="20">

<input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>)" type="checkbox" name="course_<?php  echo"$rw_awa[id]"; ?>" value="<?php  echo"$rw_awa[id]"; ?>" id="course_<?php  echo"$rw_awa[id]"; ?>">

 </td>

</tr>

<?php  } ?>

</table>

<br><br>  

  <table width="380" cellpadding="3" cellspacing="1" class="tableinborder">

<tr><td class="cellbg" width="360"><b>Veranstaltungen :: Semester 2</b></td>

<td class="cellbg" align="center"><b></b></td>

</tr>

<?php    $qy_awa = mysql_query("SELECT id, veranstaltung FROM $award_tblname WHERE semester = '2' ORDER by veranstaltung");

  while  ($rw_awa  =  mysql_fetch_assoc($qy_awa)) {    ?>

<tr><td class="tableb" style="padding:9px" width="360" onclick="checkN2(<?php  echo"$rw_awa[id]"; ?>)" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

<span style="font-size:11px"><?php  echo"$rw_awa[veranstaltung]"; ?></span></b>

</td>


 <td class="tablea" align="center" width="20">

<input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>)" type="checkbox" name="course_<?php  echo"$rw_awa[id]"; ?>" value="<?php  echo"$rw_awa[id]"; ?>" id="course_<?php  echo"$rw_awa[id]"; ?>">

 </td>

</tr>

<?php  } ?>

</table>

<br><br>

  <table width="380" cellpadding="3" cellspacing="1" class="tableinborder">

<tr><td class="cellbg" width="360"><b>Veranstaltungen :: Semester 3</b></td>

<td class="cellbg" align="center"><b></b></td>

</tr>

<?php    $qy_awa = mysql_query("SELECT id, veranstaltung FROM $award_tblname WHERE semester = '3' && schwerpunkt = 'bp' ORDER by veranstaltung");

  while  ($rw_awa  =  mysql_fetch_assoc($qy_awa)) {    ?>

<tr><td class="tableb" style="padding:9px" width="380" onclick="checkN2(<?php  echo"$rw_awa[id]"; ?>)" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

<span style="font-size:11px"><?php  echo"$rw_awa[veranstaltung]"; ?></span></b>

</td>


 <td class="tablea" align="center" width="20">

<input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>)" type="checkbox" name="course_<?php  echo"$rw_awa[id]"; ?>" value="<?php  echo"$rw_awa[id]"; ?>" id="course_<?php  echo"$rw_awa[id]"; ?>">

 </td>


</tr>

<?php  } ?>

</table>

<?php  if ($userdata_study != "sozi" && $userdata_semester >= 3)  {

          if ($userdata_study == "bwl")  { $ud_study = "Schwerpunkt BWL"; }
          if ($userdata_study == "vwl")  { $ud_study = "Schwerpunkt VWL";  }
          if ($userdata_study == "info") { $ud_study = "Schwerpunkt Informatik"; }
          if ($userdata_study == "paed") { $ud_study = "Schwerpunkt Pädagogik";  }
          if ($userdata_study == "int")  { $ud_study = "International Business Studies";  }

?>

   <br><br>
  <table width="380" cellpadding="3" cellspacing="1" class="tableinborder">

<tr><td class="cellbg" width="360"><b>Veranstaltungen :: Semester 4</b></td>

<td class="cellbg" align="center"><b></b></td>

</tr>

<?php    $qy_awa4 = mysql_query("SELECT id, veranstaltung FROM $award_tblname WHERE semester = '4' && schwerpunkt = 'bp' ORDER by veranstaltung");
       
  while  ($rw_awa4  =  mysql_fetch_assoc($qy_awa4)) {   ?>

<tr><td class="tableb" style="padding:9px" width="380" onclick="checkN2(<?php  echo"$rw_awa4[id]"; ?>)" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

<span style="font-size:11px"><?php  echo"$rw_awa4[veranstaltung]"; ?></span></b>

</td>


 <td class="tablea" align="center" width="20">

<input class="radio" onclick="checkN(<?php  echo"$rw_awa4[id]"; ?>)" type="checkbox" name="course_<?php  echo"$rw_awa4[id]"; ?>" value="<?php  echo"$rw_awa4[id]"; ?>" id="course_<?php  echo"$rw_awa4[id]"; ?>">


 </td>

</tr>

<?php  }} ?>

</table>

<br><br>

<?php  if ($userdata_study != "sozi" && $userdata_semester >= 3)  {

for ($ii=0;$ii<6;$ii++) {

          if ($ii == "0")  { $userdata_studyX = "bwl";  $ud_study = "Schwerpunkt BWL"; }
          if ($ii == "1") { $userdata_studyX = "vwl";  $ud_study = "Schwerpunkt VWL";  }
          if ($ii == "2") { $userdata_studyX = "info"; $ud_study = "Schwerpunkt Informatik"; }
          if ($ii == "3") { $userdata_studyX = "paed";  $ud_study = "Schwerpunkt Pädagogik";  }
          if ($ii == "4") { $userdata_studyX = "int";  $ud_study = "International Business Studies";  }
          if ($ii == "5") { $userdata_studyX = "sonst";  $ud_study = "Sonstige";  }

if ($ii == 1)  { ?> </td><td width="10"></td><td valign="top">  <?php  }
?>

  <table width="380" cellpadding="3" cellspacing="1" class="tableinborder">

<tr><td class="cellbg" width="360"><b>Veranstaltungen :: <?php  echo"$ud_study"; ?></b></td>
<td class="cellbg" align="center"><b></b></td>


</tr>

<?php 

if ($userdata_study == "int") $userdata_study = "vwl";

$qy_awa = mysql_query("SELECT id, veranstaltung FROM $award_tblname WHERE schwerpunkt = '$userdata_studyX'  ORDER by veranstaltung");

  while  ($rw_awa  =  mysql_fetch_assoc($qy_awa)) {

?>

<tr><td class="tableb" style="padding:9px" width="380" onclick="checkN2(<?php  echo"$rw_awa[id]"; ?>)" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

<span style="font-size:11px"><?php  echo"$rw_awa[veranstaltung]"; ?></span></b>

</td>


 <td class="tablea" align="center" width="20">

<input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>)" type="checkbox" name="course_<?php  echo"$rw_awa[id]"; ?>" value="<?php  echo"$rw_awa[id]"; ?>" id="course_<?php  echo"$rw_awa[id]"; ?>">


 </td>

</tr>

<?php  } ?>

</table>
    <br>  <br>
<?php  }} ?>

</td>

</tr></table>    </td>

</tr></table>

<br>

<table width="<?php  echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tableb" align="center">

    <input type="submit" class="buttons" name="TOstep2" value="Weiter zum 2. Schritt" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

    </td>

  </tr>

</form>

</div>

</table>

<?php 
}
