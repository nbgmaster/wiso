
<?php 

if (isset($TOforum)) {

      if ($update_award == 0) {

              $chosed_c = explode(",", $_POST[imp_chosed]);

              $count_cz = count($chosed_c) - 1;

              $upd_aw  = "UPDATE $user_tblname SET award = '1', sem1_alert = '$count_cz' WHERE UserID = '$userdata_id'";

              mysql_query($upd_aw) OR die(mysql_error());

              foreach ($chosed_c as $chosed_f)  {

                  $comment  = "";  $counter1 = $counter2 = $counter3 = $counter4 = $counter5 = $counter6 = 0;

                  $gesamt   = "course_".$chosed_f."_1";
                  $quality  = "course_".$chosed_f."_2";
                  $ects     = "course_".$chosed_f."_3";
                  $klausur  = "course_".$chosed_f."_4";
                  $material = "course_".$chosed_f."_5";
                  $interest = "course_".$chosed_f."_6";
                 // $skills   = "course_".$chosed_f."_7";
                  $comment  = "course_".$chosed_f."_8";

                  if ($_POST[$gesamt] != "0")   $counter1 = 1;
                  if ($_POST[$quality] != "0")  $counter2 = 1;
                  if ($_POST[$ects] != "0")     $counter3 = 1;
                  if ($_POST[$klausur] != "0")  $counter4 = 1;
                  if ($_POST[$material] != "0") $counter5 = 1;
                  if ($_POST[$interest] != "0") $counter6 = 1;

                  // $gesamt_val = str_replace(",", ".", $_POST[$gesamt]);

                  $upd_c  = "UPDATE $award_tblname Set gesamtnote = gesamtnote + $_POST[$gesamt], quality = quality + $_POST[$quality], ects = ects + $_POST[$ects], klausur = klausur + $_POST[$klausur], material = material + $_POST[$material], interest = interest + $_POST[$interest], counter1 = counter1 + $counter1, counter2 = counter2 + $counter2, counter3 = counter3 + $counter3, counter4 = counter4 + $counter4, counter5 = counter5 + $counter5, counter6 = counter6 + $counter6 WHERE id = '$chosed_f'";
                  $sql_c  = mysql_query($upd_c);

                  if ($_POST[$comment] != "") {

                      //$_POST[$comment] = nl2br($_POST[$comment]);

                      $query_c   = "INSERT into award_comments_ws0809 (course, comment) ";
                      $query_c  .= "VALUES ('$chosed_f', '$_POST[$comment]')";

                      $result_c  = @mysql_query($query_c) OR die(mysql_error());

                  }

               }

               $link = "exception.php"; $refresh_time = "2"; $text01 = "Deine Teilnahme an der Umfrage ist erfolgreich abgeschlossen!";

               include("./templates/refresh.php");

        }

}

else if ($update_award == 0) {

$Ay_chosed[] = "";

for ($aa=1;$aa<140;$aa++) {

$courseX = "course_" . $aa;

$number = $_POST[$courseX];

if ($number > 0) {

$imp_chosed .= $number.",";

$Ay_chosed[] = $number;  }

}
 ?>


  <table width="100%" cellpadding="3" cellspacing="1" class="tableinborder">

  <form method="post" onsubmit="return confirm('Hiermit sendest du deine Bewertungen endg&uuml;ltig ab. OK?');">

     <tr><td class="catbg" style="font-size:13px">
<b>Die wiwistud.de RANGLISTE der Bachelor-Lehrveranstaltungen im Wintersemester 08/09</b></td></tr>

 <tr><td class="tableb"> <br>
    <span style="font-size:12px;line-height:24px;">
    <ul type="square">

 <li>Bewerte nun deine ausgew&auml;hlten Veranstaltungen <b>fair und objektiv!</b></li>
 <li>W&auml;hle hierzu f&uuml;r jedes Kriterium die gew&uuml;nschte Notenstufe mit den <b>Select-Boxen in der rechten Spalte</b> aus</li>
 <li><b>Werteskala:</b> 1,0 = sehr gut bis 5,0 = mangelhaft <b><u>bzw.</u></b> 1,0 = sehr bis 5,0 = gar nicht</li>
 <br>
 <li><u>Du hast auch die M&ouml;glichkeit einzelne Felder leer zu lassen</u></li>
 </ul>
 </span>

 </td></tr>

</table>

<br>

  <?php 

$sql = "SELECT id, veranstaltung FROM $award_tblname WHERE id IN('".implode("', '", $Ay_chosed)."')";
$result = mysql_query($sql);
while( $bc = mysql_fetch_assoc( $result ) ) {
  $courseID = $bc['id'];
    $bc = $bc['veranstaltung'];  ?>

  <table width="100%" cellpadding="3" cellspacing="1" class="tableinborder">

            <tr><td class="catbg" colspan="2" style="font-size:13px"><b><?php  echo"$bc"; ?></b></td>

</tr>

<tr><td class="tableb">

<table cellspacing="1" width="100%" class="tableinborder" cellpadding="8"><tr><td class="tableb" style="font-size:12px">

Welche <b>Gesamtnote</b> gibst du dieser Veranstaltung?
</td><td class="tablea"><select name="course_<?php echo"$courseID";?>_1"><option value="0"></option><option value="1.0">1,0</option><option value="1.3">1,3</option><option value="1.7">1,7</option><option value="2.0">2,0</option><option value="2.3">2,3</option>
<option value="2.7">2,7</option><option value="3.0">3,0</option><option value="3.3">3,3</option><option value="3.7">3,7</option><option value="4.0">4,0</option><option value="4.3">4,3</option>
<option value="4.7">4,7</option><option value="5.0">5,0</option></select></td>
</tr><tr>
<td class="tableb" style="font-size:12px">
<b>Qualit&auml;t des Vortrags</b> des Dozenten/Professors? <span style="font-size:11px">(Verst&auml;ndlichkeit, Bem&uuml;hen/Motivation, eingehen auf Fragen)</span>
 </td><td class="tablea"><select name="course_<?php echo"$courseID";?>_2"><option value="0"></option><option value="1.0">1,0</option><option value="1.3">1,3</option><option value="1.7">1,7</option><option value="2.0">2,0</option><option value="2.3">2,3</option>
<option value="2.7">2,7</option><option value="3.0">3,0</option><option value="3.3">3,3</option><option value="3.7">3,7</option><option value="4.0">4,0</option><option value="4.3">4,3</option>
<option value="4.7">4,7</option><option value="5.0">5,0</option></select></td>
</tr><tr>
<td class="tableb" style="font-size:12px">
Wie war das <b>Verh&auml;ltnis des Arbeitsaufwands</b> zu der <b>Anzahl an ECTS</b>? <span style="font-size:11px">(5,0 = unverh&auml;tnism&auml;&szlig;ig hoher Workload)</span>
</td><td class="tablea"><select name="course_<?php echo"$courseID";?>_3"><option value="0"></option><option value="1.0">1,0</option><option value="1.3">1,3</option><option value="1.7">1,7</option><option value="2.0">2,0</option><option value="2.3">2,3</option>
<option value="2.7">2,7</option><option value="3.0">3,0</option><option value="3.3">3,3</option><option value="3.7">3,7</option><option value="4.0">4,0</option><option value="4.3">4,3</option>
<option value="4.7">4,7</option><option value="5.0">5,0</option></select></td>
</tr><tr>
<td class="tableb" style="font-size:12px">
Wie <b>fair war die Klausur/Hausarbeit</b>? <span style="font-size:11px">(Schwierigkeitsgrad, ausreichend Zeit, Klarheit der Fragen, Bewertung)</span>
</td><td class="tablea"><select name="course_<?php echo"$courseID";?>_4"><option value="0"></option><option value="1.0">1,0</option><option value="1.3">1,3</option><option value="1.7">1,7</option><option value="2.0">2,0</option><option value="2.3">2,3</option>
<option value="2.7">2,7</option><option value="3.0">3,0</option><option value="3.3">3,3</option><option value="3.7">3,7</option><option value="4.0">4,0</option><option value="4.3">4,3</option>
<option value="4.7">4,7</option><option value="5.0">5,0</option></select></td>
</tr><tr>
<td class="tableb" style="font-size:13px">
Welche Qualit&auml;t hatten die <b>Materialien</b>?  <span style="font-size:11px">(Skript & Folien, Verf&uuml;gbarkeit, Aktualit&auml;t, Fehlerfreiheit, Verst&auml;ndlichk.)</span>
</td><td class="tablea"><select name="course_<?php echo"$courseID";?>_5"><option value="0"></option><option value="1.0">1,0</option><option value="1.3">1,3</option><option value="1.7">1,7</option><option value="2.0">2,0</option><option value="2.3">2,3</option>
<option value="2.7">2,7</option><option value="3.0">3,0</option><option value="3.3">3,3</option><option value="3.7">3,7</option><option value="4.0">4,0</option><option value="4.3">4,3</option>
<option value="4.7">4,7</option><option value="5.0">5,0</option></select></td>
</tr><tr>
<td class="tableb" style="font-size:12px">
Hat die Veranstaltung dein <b>Interesse an diesem Themengebiet</b> steigern k&ouml;nnen?
</td><td class="tablea"><select name="course_<?php echo"$courseID";?>_6"><option value="0"></option><option value="1.0">1,0</option><option value="1.3">1,3</option><option value="1.7">1,7</option><option value="2.0">2,0</option><option value="2.3">2,3</option>
<option value="2.7">2,7</option><option value="3.0">3,0</option><option value="3.3">3,3</option><option value="3.7">3,7</option><option value="4.0">4,0</option><option value="4.3">4,3</option>
<option value="4.7">4,7</option><option value="5.0">5,0</option></select></td>
</tr><!--tr>
<td class="tableb" style="font-size:12px">
Hat diese Veranstaltung deine Pers&ouml;nlichkeit gest&auml;rkt? <span style="font-size:11px">(z.B. Erhalt fachlicher oder sozialer F&auml;higkeiten)</span>
</td><td class="tablea"><select name="course_<?php echo"$courseID";?>_7"><option value="0"></option><option value="1.0">1,0</option><option value="1.3">1,3</option><option value="1.7">1,7</option><option value="2.0">2,0</option><option value="2.3">2,3</option>
<option value="2.7">2,7</option><option value="3.0">3,0</option><option value="3.3">3,3</option><option value="3.7">3,7</option><option value="4.0">4,0</option><option value="4.3">4,3</option>
<option value="4.7">4,7</option><option value="5.0">5,0</option></select></td>
</tr><tr-->
<td class="tableb" style="font-size:12px" colspan="2" align="center">
<br>
Hier kannst du noch <b>weitere Anmerkungen</b> zu dieser Veranstaltung hinterlassen: <span style="font-size:11px">(max. 200 W&ouml;rter)</span>
<br>    <br>
<textarea style="width:700px" class="tablea" rows="3" name="course_<?php echo"$courseID";?>_8"></textarea>

</td>

</tr></table>
</td>
</tr>

</table>

<br>

<?php  } ?>

<br>


<table width="<?php  echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tableb" align="center">
            <span style="font-size:13px">
Diese Umfrage l&auml;uft noch bis zum <b>05.04.2009</b>.

<br><br>

Die Ergebnisse werden voraussichtlich Mitte April auf <b>wiwistud.de</b> ver&ouml;ffentlicht.
                                         </span>
</td></tr></table>

            <br><br>

<table width="<?php  echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tablea" align="center">

    <input type="submit" class="buttons" name="TOforum" value="Bewertung absenden und weiter zum Forum" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

    </td>

  </tr>
<input type="hidden" name="imp_chosed" value="<?php  echo"$imp_chosed"; ?>">

</form>

</table>

<?php  }
