<?php 
          $stimmen = ($rw_ss08[counter1] + $rw_ss08[counter2] + $rw_ss08[counter3] + $rw_ss08[counter4] + $rw_ss08[counter5] + $rw_ss08[counter6]) / 6;
          $stimmen = round($stimmen,0);

          if ($stimmen >= 3) {

          $gesamtnote = $rw_ss08[gesamtnote] / $rw_ss08[counter1];
          $quality = $rw_ss08[quality] / $rw_ss08[counter2];
          $ects = $rw_ss08[ects] / $rw_ss08[counter3];
          $klausur = $rw_ss08[klausur] / $rw_ss08[counter4];
          $material = $rw_ss08[material] / $rw_ss08[counter5];
          $interest = $rw_ss08[interest] / $rw_ss08[counter6];

          // gleichung: y = -0,25x + 1,25

          $balken_ges  = (( -0.25 * $gesamtnote ) + 1.25) * 160;
          $balken_quali = (( -0.25 * $quality ) + 1.25) * 160;
          $balken_ects  = (( -0.25 * $ects ) + 1.25) * 160;
          $balken_klausur = (( -0.25 * $klausur ) + 1.25) * 160;
          $balken_mat  = (( -0.25 * $material ) + 1.25) * 160;
          $balken_int = (( -0.25 * $interest ) + 1.25) * 160;

          $gesamtnote = round($gesamtnote,2);
          $quality = round($quality,2);
          $ects = round($ects,2);
          $klausur = round($klausur,2);
          $material = round($material,2);
          $interest = round($interest,2);

         if ( strlen($gesamtnote) == 1 ) $gesamtnote.=".00";
         else if ( strlen($gesamtnote) == 3 ) $gesamtnote.="0";
         if ( strlen($quality) == 1 ) $quality.=".00";
         else if ( strlen($quality) == 3 ) $quality.="0";
         if ( strlen($ects) == 1 ) $ects.=".00";
         else if ( strlen($ects) == 3 ) $ects.="0";
         if ( strlen($klausur) == 1 ) $klausur.=".00";
         else if ( strlen($klausur) == 3 ) $klausur.="0";
         if ( strlen($material) == 1 ) $material.=".00";
         else if ( strlen($material) == 3 ) $material.="0";
         if ( strlen($interest) == 1 ) $interest.=".00";
         else if ( strlen($interest) == 3 ) $interest.="0";

         if ($gesamtnote >= 1)  { $bg_ges = "#9FD230"; }
         if ($gesamtnote >= 2)  { $bg_ges = "#DCFF93"; }
         if ($gesamtnote >= 3)  { $bg_ges = "#FFB500"; }
         if ($gesamtnote >= 4)  { $bg_ges = "#FF8401"; }
         if ($quality >= 1)  { $bg_quali = "#9FD230"; }
         if ($quality >= 2)  { $bg_quali = "#DCFF93"; }
         if ($quality >= 3)  { $bg_quali = "#FFB500"; }
         if ($quality >= 4)  { $bg_quali = "#FF8401"; }
         if ($ects >= 1)  { $bg_ects = "#9FD230"; }
         if ($ects >= 2)  { $bg_ects = "#DCFF93"; }
         if ($ects >= 3)  { $bg_ects = "#FFB500"; }
         if ($ects >= 4)  { $bg_ects = "#FF8401"; }
         if ($klausur >= 1)  { $bg_klausur = "#9FD230"; }
         if ($klausur >= 2)  { $bg_klausur = "#DCFF93"; }
         if ($klausur >= 3)  { $bg_klausur = "#FFB500"; }
         if ($klausur >= 4)  { $bg_klausur = "#FF8401"; }
         if ($material >= 1)  { $bg_mat = "#9FD230"; }
         if ($material >= 2)  { $bg_mat = "#DCFF93"; }
         if ($material >= 3)  { $bg_mat = "#FFB500"; }
         if ($material >= 4)  { $bg_mat = "#FF8401"; }
         if ($interest >= 1)  { $bg_int = "#9FD230"; }
         if ($interest >= 2)  { $bg_int = "#DCFF93"; }
         if ($interest >= 3)  { $bg_int = "#FFB500"; }
         if ($interest >= 4)  { $bg_int = "#FF8401"; }

         $rw_ss08[veranstaltung] = str_replace(",", "</span><br><br><span style=font-size:16px>", $rw_ss08[veranstaltung]);

//$pos_c1 = round($tot_s1*0.33,0);
//$pos_c2 = round($tot_s1*0.66,0);

//$col_pos = "C10E0E";
//if ($position <= $pos_c2) { $col_pos = "FAF100"; }   // D67400
//if ($position <= $pos_c1) { $col_pos = "20823B"; }

if ($gesamtnote <= 5) {  $col_pos = "C10E0E";  }
if ($gesamtnote <= 3.49) {  $col_pos = "FAF100";  }
if ($gesamtnote <= 2) {  $col_pos = "20823B";  }

/*

         if ($browser == "IE")  {

             include("stylesheets/style_IE.php");

         }

         else if ($browser == "IE7")  {

             include("stylesheets/style_IE7.php");

         }*/

?>

<table width="100%"><tr><td width="32%" valign="top">
<br><br><br>
<table cellspacing="0" cellpadding="0"><tr><td style="background-color:#<?php  echo"$cell_bg02"; ?>">
<b><span style="font-size:28pt;color:#<?php echo $col_pos; ?>">Platz <?php  echo $position; ?></span></b>
</td></tr></table>
<br>
<table class="tableinborder" cellspacing="1" cellpadding="10" width="250"><tr><td class="tablea">
<b><span style="font-size:18px;color:#<?php echo $col_pos; ?>"><?php  echo"$rw_ss08[veranstaltung]"; ?></span> </b>
</td></tr></table>
<br> <br>
<center>
<table cellspacing="0" cellpadding="0"><tr><td>
<b><span style="font-size:18px">&#216;</span></b></td><td><span style="font-size:12px"> &nbsp;abgegebene Stimmen: <b><?php  echo $stimmen; ?></b></span> </td></tr></table>
</center>
</td>  <td>&nbsp;</td>
<td width="65%" align="left">

        <table width="100%">
        <tr><td width="225">&nbsp;</td><td><table cellpadding="0" cellspacing="0" border="0">

                <tr>
                        <td>&nbsp;</td>
                        <td colspan="2"><div style="float: left;">sehr schlecht</div><div style="text-align: right;">sehr gut</div></td>
                </tr>

                <tr>
                        <td>&nbsp;</td>
                        <td style="padding-bottom: 4px;padding-top:2px">5.0&nbsp;&nbsp;</td>
                        <td style="padding-bottom: 4px;padding-top:2px"><img src="images/templates/<?php echo"$template";?>/ranking_explanation.png" width="162" height="10">&nbsp;&nbsp;1.0</td>
                </tr>
                               </table>
                               </td>
                               </tr>

                <tr> <td colspan="3" align="left"><table cellspacing="1" class="tableinborder" width="100%">
                <tr><td class="tablea" align="left"><table><tr><td width="220" align="left"><b><span style="font-size:14px">Gesamtnote:</span></b></td>

                 <td class="tgfx" align="left">
                 <table cellspacing="0" cellpadding="0" align="left"><tr><td style="padding-left:30px">
                 <div class="gfxB" style="width:<?php echo"$balken_ges";?>px;background-color:<?php echo"$bg_ges";?>;height:18px">
                 </div></td><td>&nbsp;&nbsp;&nbsp;<b><span style="font-size:14px"><?php  echo $gesamtnote; ?></span></b></td>
                 </tr></table></td></tr></table>  </td></tr></table>
                 </td>

                 </tr>
                <tr> <td colspan="3" style="cursor:default;padding-top:6px" onmouseover="return overlib('Wie verständlich war der Vortrag des Dozenten oder Professors; Bemühen/Motivation, Eingehen auf Fragen.');" onmouseout="return nd();" style="padding-top:6px"><table cellspacing="1" class="tableinborder" width="100%">
                <tr><td class="tablea"><table><tr><td width="220"><b><span style="font-size:12px">Qualität des Vortrags:</span></td><td class="tgfx">
                 <table cellspacing="0" cellpadding="0"><tr><td style="padding-left:30px">
                 <div class="gfxB" style="width:<?php echo"$balken_quali";?>px;background-color:<?php echo"$bg_quali";?>">
                 </div></td><td>&nbsp;&nbsp;<b><span style="font-size:12px"><?php  echo $quality; ?></span></b></td>
                 </tr></table></td></tr></table>  </td></tr></table>
                 </td></tr>
                <tr> <td colspan="3" style="cursor:default;" onmouseover="return overlib('Eine 5.0 bedeutet, dass der Arbeitsaufwand für die Veranstaltung unverhältnismäßig groß war.');" onmouseout="return nd();"><table cellspacing="1" class="tableinborder" width="100%">
                <tr><td class="tablea"><table><tr><td width="220"><b><span style="font-size:12px">Verhältnis Arbeitsaufwand/ECTS:</span></td><td class="tgfx">
                 <table cellspacing="0" cellpadding="0"><tr><td style="padding-left:30px">
                 <div class="gfxB" style="width:<?php echo"$balken_ects";?>px;background-color:<?php echo"$bg_ects";?>">
                 </div></td><td>&nbsp;&nbsp;<b><span style="font-size:12px"><?php  echo $ects; ?></b></span></b></td>
                 </tr></table></td></tr></table>  </td></tr></table>
                 </td></tr>
                <tr> <td colspan="3" style="cursor:default;" onmouseover="return overlib('Schwierigkeitsgrad, ausreichend Zeit, Klarheit der Fragen, Bewertung');" onmouseout="return nd();"><table cellspacing="1" class="tableinborder" width="100%">
                <tr><td class="tablea"><table><tr><td width="220"><b><span style="font-size:12px">Fairness Klausur / Hausarbeit:</span></td><td class="tgfx">
                 <table cellspacing="0" cellpadding="0"><tr><td style="padding-left:30px">
                 <div class="gfxB" style="width:<?php echo"$balken_klausur";?>px;background-color:<?php echo"$bg_klausur";?>">
                 </div></td><td>&nbsp;&nbsp;<b><span style="font-size:12px"><?php  echo $klausur; ?></span></b></td>
                 </tr></table></td></tr></table>  </td></tr></table>
                 </td></tr>
                <tr> <td colspan="3" style="cursor:default;" onmouseover="return overlib('Skript & Folien, Verfügbarkeit, Aktualität, Fehlerfreiheit, Verständlichkeit');" onmouseout="return nd();"><table cellspacing="1" class="tableinborder" width="100%">
                <tr><td class="tablea"><table><tr><td width="220"><b><span style="font-size:12px">Qualität der Materialien:</span></td><td class="tgfx">
                 <table cellspacing="0" cellpadding="0"><tr><td style="padding-left:30px">
                 <div class="gfxB" style="width:<?php echo"$balken_mat";?>px;background-color:<?php echo"$bg_mat";?>">
                 </div></td><td>&nbsp;&nbsp;<b><span style="font-size:12px"><?php  echo $material; ?></span></b></td>
                 </tr></table></td></tr></table>  </td></tr></table>
                 </td></tr>
                <tr> <td colspan="3" style="cursor:default;" onmouseover="return overlib('Der/Die Student(in) wurde gefragt, ob sein/ihr Interesse an dem Themengebiet <b>nach</b> dieser Veranstaltung zugenommen hat.');" onmouseout="return nd();"><table cellspacing="1" class="tableinborder" width="100%">
                <tr><td class="tablea"><table><tr><td width="220"><b><span style="font-size:10px">Interesse an Themengebiet gestiegen:</span></td><td class="tgfx">
                 <table cellspacing="0" cellpadding="0"><tr><td style="padding-left:30px">
                 <div class="gfxB" style="width:<?php echo"$balken_int";?>px;background-color:<?php echo"$bg_int";?>">
                 </div></td><td>&nbsp;<b><?php  echo $interest; ?></b></td>
                 </tr></table></td></tr></table>  </td></tr></table>
                </td></tr>
                </table>
                </td>
                </tr>
</table>

<?php 

$qy_awa_com1   = mysql_query("SELECT comment from award_comments_ss08 WHERE course = '$rw_ss08[id]'");
$com1_tot = mysql_num_rows($qy_awa_com1);

if ($com1_tot > 0)  {

?><br>
<b>&nbsp;Kommentare:</b><br> <center>
<table cellspacing="0" style="border:1px dashed #000;margin-top:2px" width="99%" cellpadding="6"><tr><td class="tablea" style="font-size:11px">
<?php 
$com1_cou = 1;
while ($rw_com1 = mysql_fetch_assoc($qy_awa_com1))  {
echo"$rw_com1[comment]";
if ($com1_cou != $com1_tot) echo" <b><span style=font-size:16px>+++</span></b> ";
$com1_cou++;
}

?>
</td></tr></table>  </center>

<?php  } ?>

<br>
<hr style="border-color:#000;color:#000" size="1">
<br>

<?php 

$position++;

}
