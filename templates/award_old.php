
<script type="text/javascript" src="javascript/award.js" language="JavaScript1.2"></script>

<table width="<?php echo"$width";?>" cellpadding="0" cellspacing="0" height="100%">

<tr>

<td valign="top" width="200">

<table cellpadding="0" cellspacing="1" border="0" width="100%" class="tableinborder" height="100%">
<tr><td class="cellbg" align="center" height="15">
<b>Wichtige Hinweise</b></td></tr>
<tr><td class="tableb" height="200" valign="top" style="padding-left:8px;padding-top:5px;padding-right:8px" height="100%">

<span style="font-size:11px;line-height:22px;">

<b>KB</b> = Keine Bewertung / Enthaltung

<br><hr size="1">

<span style="color:red;font-size:13px"><b>Du kannst maximal <br>
<u>10 Veranstaltungen</u> bewerten!</b></span>
<br><br>

Bitte bewerte deshalb nur Veranstaltungen, <br>
<b>a) welche du <u>vergangenes Semester</u> besucht hast</b>
<br><br><center><i>und/oder</i></center><br>
<b>b) an deren Klausur du <u>letztes Semester</u> teilgenommen hast.</b>

<br> <br>

Nur so können wir eine aussagekräftige Umfrage gewährleisten und Manipulationsversuche verhindern!

<br><br>

<b>Danke!</b>

<br><br>

Diese Umfrage läuft noch bis zum <b>13.04.2008</b>.

<br><br>

Die Ergebnisse werden anschließend auf <b>wiwistud.de</b> veröffentlicht.

</span>

</td></tr></table>

</td>

<td width="5">&nbsp;</td>

<td>

  <table width="600" cellpadding="3" cellspacing="1" class="tableinborder">

<tr><td class="cellbg" width="380"><b>Veranstaltungen :: Semester 1</b></td>

<td class="cellbg" align="center"><b>Notendurchschnitt</b></td>

<?php  /*
<td class="cellbg" align="center"><b>1</b></td>
<td class="cellbg" align="center"><b>2</b></td>
<td class="cellbg" align="center"><b>3</b></td>
<td class="cellbg" align="center"><b>4</b></td>
<td class="cellbg" align="center"><b>5</b></td>
<td class="cellbg" align="center"><b>6</b></td>
*/ ?>

</tr>

<?php    $qy_awa = mysql_query("SELECT id, veranstaltung FROM $award_tblname WHERE semester = '1'");

  while  ($rw_awa  =  mysql_fetch_assoc($qy_awa)) {    ?>

<tr><td class="tableb" style="padding:9px" width="380">

<span style="font-size:11px"><?php  echo"$rw_awa[veranstaltung]"; ?></span></b>

</td>

 <td class="tablea" align="center">

 <select><option></option><option>1,0</option><option>1,3</option><option>1,7</option><option>2,0</option><option>2,3</option><option>2,7</option>
 <option>3,0</option><option>3,3</option><option>3,7</option><option>3,0</option><option>4,3</option><option>4,7</option><option>5,0</option>
 </select>

 </td>


<td class="tablea" align="center"><input class="radio" checked="checked" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'ka')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="ka" id="course_<?php  echo"$rw_awa[id]"; ?>_ka"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'a')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="1" id="course_<?php  echo"$rw_awa[id]"; ?>_a"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'b')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="2" id="course_<?php  echo"$rw_awa[id]"; ?>_b"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'c')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="3" id="course_<?php  echo"$rw_awa[id]"; ?>_c"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'd')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="4" id="course_<?php  echo"$rw_awa[id]"; ?>_d"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'e')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="5" id="course_<?php  echo"$rw_awa[id]"; ?>_e"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'f')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="6" id="course_<?php  echo"$rw_awa[id]"; ?>_f"></td>


</tr>

<?php  } ?>

</table>

<br>

  <table width="600" cellpadding="3" cellspacing="1" class="tableinborder">

<tr><td class="cellbg" width="380"><b>Veranstaltungen :: Semester 2</b></td>

<td class="cellbg" align="center"><b>Notendurchschnitt</b></td>

<?php  /*
<td class="cellbg" align="center"><b>1</b></td>
<td class="cellbg" align="center"><b>2</b></td>
<td class="cellbg" align="center"><b>3</b></td>
<td class="cellbg" align="center"><b>4</b></td>
<td class="cellbg" align="center"><b>5</b></td>
<td class="cellbg" align="center"><b>6</b></td>
*/ ?>
</tr>

<?php    $qy_awa = mysql_query("SELECT id, veranstaltung FROM $award_tblname WHERE semester = '2'");

  while  ($rw_awa  =  mysql_fetch_assoc($qy_awa)) {    ?>

<tr><td class="tableb" style="padding:9px" width="380">

<span style="font-size:11px"><?php  echo"$rw_awa[veranstaltung]"; ?></span></b>

</td>


 <td class="tablea" align="center">

 <select><option></option><option>1,0</option><option>1,3</option><option>1,7</option><option>2,0</option><option>2,3</option><option>2,7</option>
 <option>3,0</option><option>3,3</option><option>3,7</option><option>3,0</option><option>4,3</option><option>4,7</option><option>5,0</option>
 </select>

 </td>

<?php  /*
<td class="tablea" align="center"><input class="radio" checked="checked" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'ka')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="ka" id="course_<?php  echo"$rw_awa[id]"; ?>_ka"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'a')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="1" id="course_<?php  echo"$rw_awa[id]"; ?>_a"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'b')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="2" id="course_<?php  echo"$rw_awa[id]"; ?>_b"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'c')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="3" id="course_<?php  echo"$rw_awa[id]"; ?>_c"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'd')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="4" id="course_<?php  echo"$rw_awa[id]"; ?>_d"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'e')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="5" id="course_<?php  echo"$rw_awa[id]"; ?>_e"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'f')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="6" id="course_<?php  echo"$rw_awa[id]"; ?>_f"></td>
*/ ?>
</tr>

<?php  } ?>

</table>

<br>

  <table width="600" cellpadding="3" cellspacing="1" class="tableinborder">

<tr><td class="cellbg" width="380"><b>Veranstaltungen :: Semester 3</b></td>

<td class="cellbg" align="center"><b>Notendurchschnitt</b></td>

<?php  /*
<td class="cellbg" align="center"><b>1</b></td>
<td class="cellbg" align="center"><b>2</b></td>
<td class="cellbg" align="center"><b>3</b></td>
<td class="cellbg" align="center"><b>4</b></td>
<td class="cellbg" align="center"><b>5</b></td>
<td class="cellbg" align="center"><b>6</b></td>
*/ ?>
</tr>

<?php    $qy_awa = mysql_query("SELECT id, veranstaltung FROM $award_tblname WHERE semester = '3' && schwerpunkt = 'bp'");

  while  ($rw_awa  =  mysql_fetch_assoc($qy_awa)) {    ?>

<tr><td class="tableb" style="padding:9px" width="380">

<span style="font-size:11px"><?php  echo"$rw_awa[veranstaltung]"; ?></span></b>

</td>


 <td class="tablea" align="center">

 <select><option></option><option>1,0</option><option>1,3</option><option>1,7</option><option>2,0</option><option>2,3</option><option>2,7</option>
 <option>3,0</option><option>3,3</option><option>3,7</option><option>3,0</option><option>4,3</option><option>4,7</option><option>5,0</option>
 </select>

 </td>

<?php  /*
<td class="tablea" align="center"><input class="radio" checked="checked" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'ka')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="ka" id="course_<?php  echo"$rw_awa[id]"; ?>_ka"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'a')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="1" id="course_<?php  echo"$rw_awa[id]"; ?>_a"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'b')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="2" id="course_<?php  echo"$rw_awa[id]"; ?>_b"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'c')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="3" id="course_<?php  echo"$rw_awa[id]"; ?>_c"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'd')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="4" id="course_<?php  echo"$rw_awa[id]"; ?>_d"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'e')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="5" id="course_<?php  echo"$rw_awa[id]"; ?>_e"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'f')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="6" id="course_<?php  echo"$rw_awa[id]"; ?>_f"></td>
*/ ?>
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


<br>

  <table width="600" cellpadding="3" cellspacing="1" class="tableinborder">

<tr><td class="cellbg" width="380"><b>Veranstaltungen :: Semester 4</b></td>

<td class="cellbg" align="center"><b>Note</b></td>

</tr>

<?php    $qy_awa4 = mysql_query("SELECT id, veranstaltung FROM $award_tblname WHERE semester = '4' && schwerpunkt = 'bp'");
       
  while  ($rw_awa4  =  mysql_fetch_assoc($qy_awa4)) { echo"X";   ?>

<tr><td class="tableb" style="padding:9px" width="380">

<span style="font-size:11px"><?php  echo"$rw_awa4[veranstaltung]"; ?></span></b>

</td>


 <td class="tablea" align="center">

 <select><option></option><option>1,0</option><option>1,3</option><option>1,7</option><option>2,0</option><option>2,3</option><option>2,7</option>
 <option>3,0</option><option>3,3</option><option>3,7</option><option>3,0</option><option>4,3</option><option>4,7</option><option>5,0</option>
 </select>

 </td>

</tr>

<?php  }} ?>

</table>

<?php  if ($userdata_study != "sozi" && $userdata_semester >= 3)  {

          if ($userdata_study == "bwl")  { $ud_study = "Schwerpunkt BWL"; }
          if ($userdata_study == "vwl")  { $ud_study = "Schwerpunkt VWL";  }
          if ($userdata_study == "info") { $ud_study = "Schwerpunkt Informatik"; }
          if ($userdata_study == "paed") { $ud_study = "Schwerpunkt Pädagogik";  }
          if ($userdata_study == "int")  { $ud_study = "International Business Studies";  }

?>

<br>

  <table width="600" cellpadding="3" cellspacing="1" class="tableinborder">

<tr><td class="cellbg" width="380"><b>Veranstaltungen :: <?php  echo"$ud_study"; ?></b></td>
<td class="cellbg" align="center"><b>Notendurchschnitt</b></td>

<?php  /*
<td class="cellbg" align="center"><b>1</b></td>
<td class="cellbg" align="center"><b>2</b></td>
<td class="cellbg" align="center"><b>3</b></td>
<td class="cellbg" align="center"><b>4</b></td>
<td class="cellbg" align="center"><b>5</b></td>
<td class="cellbg" align="center"><b>6</b></td>
*/ ?>
</tr>

<?php 

if ($userdata_study == "int") $userdata_study = "vwl";

$qy_awa = mysql_query("SELECT id, veranstaltung FROM $award_tblname WHERE schwerpunkt = '$userdata_study'");

  while  ($rw_awa  =  mysql_fetch_assoc($qy_awa)) {    ?>

<tr><td class="tableb" style="padding:9px" width="380">

<span style="font-size:11px"><?php  echo"$rw_awa[veranstaltung]"; ?></span></b>

</td>


 <td class="tablea" align="center">

 <select><option></option><option>1,0</option><option>1,3</option><option>1,7</option><option>2,0</option><option>2,3</option><option>2,7</option>
 <option>3,0</option><option>3,3</option><option>3,7</option><option>3,0</option><option>4,3</option><option>4,7</option><option>5,0</option>
 </select>

 </td>

<?php  /*
<td class="tablea" align="center"><input class="radio" checked="checked" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'ka')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="ka" id="course_<?php  echo"$rw_awa[id]"; ?>_ka"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'a')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="1" id="course_<?php  echo"$rw_awa[id]"; ?>_a"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'b')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="2" id="course_<?php  echo"$rw_awa[id]"; ?>_b"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'c')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="3" id="course_<?php  echo"$rw_awa[id]"; ?>_c"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'd')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="4" id="course_<?php  echo"$rw_awa[id]"; ?>_d"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'e')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="5" id="course_<?php  echo"$rw_awa[id]"; ?>_e"></td>
<td class="tableb" align="center"><input class="radio" onclick="checkN(<?php  echo"$rw_awa[id]"; ?>, 'f')" type="radio" name="course_<?php  echo"$rw_awa[id]"; ?>" value="6" id="course_<?php  echo"$rw_awa[id]"; ?>_f"></td>
*/ ?>
</tr>

<?php  } ?>

</table>

<?php  } ?>

</td>

</tr></table>
