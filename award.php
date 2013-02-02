<?php  if ($term == "ws0708")  { ?>

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="tableinborder">

  <tr>

        <td class="catbg" align="center">


        <span style="font-size:14px;"><b>Die wiwistud.de RANGLISTE der Bachelor-Lehrveranstaltungen</b></span>

   </td>

  </tr>

</table>

<?php  

$qy_gesA   = mysql_query("SELECT abgegebenestimmen from users WHERE abgegebenestimmen > 0 && abgegebenestimmen != '100'");
$gesA = mysql_num_rows($qy_gesA); 

?>

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="tableinborder">

  <tr>

        <td class="tableb" align="justify">

        <span style="line-height:24px;font-size:12px;">
        Zur Ermittlung einer Rangliste der einzelnen <b>Bachelor-Lehrveranstaltungen</b> wurde eine Umfrage am Ende des <b>Wintersemesters 07/08</b> 
        durchgef&uuml;hrt. Jede(r) Bachelor Student/in hatte dazu auf <u><a href="http://www.wiwistud.de">wiwistud.de</a></u> die M&ouml;glichkeit 
        seine/ihre Veranstaltungen mit einer Gesamtnote zu bewerten. 
        Insgesamt haben <b><?php echo"$gesA";?></b> Studentinnen und Studenten teilgenommen.

        <br><br>

        Diese Rangliste soll <b>Bachelor-Student(inn)en der WiSo N&uuml;rnberg</b> helfen, die Qualit&auml;t verschiedener Veranstaltungen besser einsch&auml;tzen 
        zu k&ouml;nnen und soll sie folglich auch bei der Wahl der eigenen Kurse unterst&uuml;tzen.

        </span>

   </td>

  </tr>

</table>

<br>


<?php  
for ($cou_a=1;$cou_a<=5;$cou_a++) { ?>

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="tableinborder">

  <tr>

        <td class="catbg" align="left">

        <span class="big">

        <?php  if ($cou_a == 4) { ?>

        <b>Vertiefungen des 3. Semesters</b>

        <?php  } else if ($cou_a == 5) { ?> 

        <b>Sonstige</b>

        <?php  } else { ?>

        <b><?php echo"$cou_a";?>. Semester</b>

        <?php  } ?>

        </span>

        </td>

  </tr>

</table>


    <table cellspacing="1" cellpadding="4" class="tableinborder" width="100%">

         <tr>

<td class="cellbg"><b>Platz</b></td>
<td class="cellbg"><b>Veranstaltung</b></td>
<td class="cellbg">&nbsp;<b>Note</b></td>
<td class="cellbg"><b>Stimmen</b></td>

</tr>

<?php  

if ($cou_a == 3)  { $extra = " && schwerpunkt = 'bp'";  }


if ($cou_a < 4) { 

$qy_awa_res   = mysql_query("SELECT * from awardws0708 WHERE semester = '$cou_a' $extra && id != '22' ORDER BY ((note1*1+note2*2+note3*3+note4*4+note5*5+note6*6)/(note1+note2+note3+note4+note5+note6))");
 
}

else if ($cou_a == 4) {

$qy_awa_res   = mysql_query("SELECT * from awardws0708 WHERE semester = '3' && schwerpunkt != 'bp' && id != '22' ORDER BY ((note1*1+note2*2+note3*3+note4*4+note5*5+note6*6)/(note1+note2+note3+note4+note5+note6))");
 
} else if ($cou_a == 5)  {


$qy_awa_res = mysql_query("SELECT * from awardws0708 WHERE id = '22' ORDER BY ((note1*1+note2*2+note3*3+note4*4+note5*5+note6*6)/(note1+note2+note3+note4+note5+note6))");
 
}

  $anzahl = mysql_num_rows($qy_awa_res);

   $counti = 0;

   while ($rw_awa_res = mysql_fetch_assoc($qy_awa_res))  { 

          $counti++;

          $stimmen = $rw_awa_res[note1] +  $rw_awa_res[note2] + $rw_awa_res[note3] + $rw_awa_res[note4] + $rw_awa_res[note5] + $rw_awa_res[note6];

          $gesamt = $rw_awa_res[note1] * 1 + $rw_awa_res[note2] * 2 + $rw_awa_res[note3] * 3 + $rw_awa_res[note4] * 4 + $rw_awa_res[note5] * 5 + $rw_awa_res[note6] * 6;
         
          $schnitt = $gesamt / $stimmen;

          $schnitt = round($schnitt,2);

          $balken = ( $schnitt ) / 5;

          $balken = round($balken,2) * 100;

                if (strlen($schnitt) < 2)  $schnitt .= ".00";

                if (strlen($schnitt) < 3)  $schnitt .= "00";

                if (strlen($schnitt) < 4)  $schnitt .= "0";

          if ($counti == 1)  { 

            $styleBalk = "gfxBar2";

            $styleAwa = "background-color:#0c0;color:#fff";

        } else if ($schnitt > 4.0) {

            $styleBalk = "gfxBar3";

            $styleAwa = "background-color:#EB0404;color:#fff";

        } else {

            $styleBalk = "gfxBar5";

            $styleAwa = "background-color:#F18C1E;color:#fff";

        }

        if ($cou_a == 5)  {

            $styleBalk = "gfxBar3";

            $styleAwa = "background-color:#EB0404;color:#fff";

        }

        $schnitt = str_replace(".", ",", $schnitt);

?>

       <tr>

         <td class="tableb" style="<?php echo"$styleAwa";?>;font-size:16px" align="center"><b><?php echo"$counti";?></b></td>
 
         <td class="tablea" style="<?php echo"$styleAwa";?>;font-size:12px;width:440px">

         <b><?php  echo"$rw_awa_res[veranstaltung]"; ?></b></td>

         <td class="tableb">

         <table><tr>

         <td class="tbodygfx" style="width:175px">

         <div class="<?php echo"$styleBalk";?>">

         <div style="width: <?php echo"$balken";?>%"></div>
                                                
         </div>

              
         </td><td align="left" style="font-size:14px">&nbsp;<b><?php  echo"$schnitt"; ?></b></td></tr>

         </table>

         </td>

         <td class="tablea" align="right" style="font-size:12px"><b><?php  echo"$stimmen"; ?></b></td>

         </td>

       </tr>

<?php  } ?>

     </table>

<br>

<?php  }

}

else if ($term == "ss08") { include("awardSS08.php");
 }
else  if ($term == "ws0809")  { include("awardWS0809.php");}
