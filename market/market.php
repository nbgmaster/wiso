<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="left" class="cellbg">

    <span style="font-size:12px"><b><?php  echo"$row_boerse[title]"; ?></b></span>

    </td>

    <td align="center" class="cellbg" width="200">

    <b>Kontakt aufnehmen</b>

    </td>

 </tr>
          
<tr>
    <td valign="middle" style="padding: 4px;" class="tableb" align="left">


    <?php             // Line Breaks

        $row_boerse[description] = wordwrap($row_boerse[description], 90, " ", 1); 
           $row_boerse[description] = nl2br($row_boerse[description]);  

 echo"<span style=\"line-height:20px;\">$row_boerse[description]"; 

?>
    </span>


</td><td width="200" class="tablea" align="center">
<table><tr><td>
<img src="images/templates/<?php echo"$template";?>/user_icon.gif">&nbsp;</td><td>
<a href="index.php?do=profile&user_id=<?php  echo"$row_boerse[user_id]"; ?>"><span style="font-size:11px"><b><u><?php  echo"$thisUser"; ?></u></b></span></a> 
</td></tr></table>
<br>
    <?php 

    $imgpn    = "imgpn_$row_boerse[id]";
    $imgemail = "imgemail_$row_boerse[id]";

    ?>


<br>

<?php  

 if(strlen($row_boerse[title]) > 30) { 

 $pTitle = substr($row_boerse[title], 0, 27).'...';

 } else  { $pTitle = "$row_boerse[title]"; }


 $pTitle2 = "Inserat: $pTitle";

?>
    <a href="index.php?do=newpm&user_id=<?php  echo"$row_boerse[user_id]"; ?>&title=<?php echo"$pTitle2";?>" onmouseover="<?php  echo"$imgpn"; ?>.src='images/templates/<?php  echo"$template"; ?>/pn_hover.gif';" onmouseout="<?php  echo"$imgpn"; ?>.src='images/templates/<?php  echo"$template"; ?>/pn.gif';">
      
    <img src="images/templates/<?php  echo"$template"; ?>/pn.gif" name="<?php  echo"$imgpn"; ?>" title="PN schreiben" border="0"></a>

<?php  if ($mailPerm == "1") { ?>
           
&nbsp;

    <a href="index.php?do=email&user_id=<?php  echo"$row_boerse[user_id]"; ?>&subject=<?php echo"$pTitle2";?>" onmouseover="<?php  echo"$imgemail"; ?>.src='images/templates/<?php  echo"$template"; ?>/email_hover.gif';" onmouseout="<?php  echo"$imgemail"; ?>.src='images/templates/<?php  echo"$template"; ?>/email.gif';">
      
    <img src="images/templates/<?php  echo"$template"; ?>/email.gif" name="<?php  echo"$imgemail"; ?>" title="Email schreiben" border="0"></a>

<?php  } ?>

    </td>

  </tr>


<tr>

<?php   

if ($row_boerse[attachment] != "")  { 

    $size  = getimagesize("boerse/$row_boerse[attachment]");

    $size_w = $size[0] + 20;
    $size_h = $size[1] + 20;

if ($size_w > 820)  { $size_w = 820; }
if ($size_h > 520)  { $size_h = 520; }

?>


<td class="tablea" onclick="javascript:window_position(<?php echo"$size_w";?>,<?php echo"$size_h";?>,'market/picture.php?id=<?php echo"$row_boerse[attachment]"; ?>','Bildanzeige');" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout2';">

<table cellspacing="0" cellpadding="0"><tr><td><img src="images/templates/<?php echo"$template";?>/photo_icon.gif"></td>

<td>&nbsp;<u><b>BILD</b></u></td></tr></table>

<?php  } else { echo"<td class=\"tablea\">"; } ?>



</td><td class="tablea" align="center">


<?php 

             $day_date4 = $timestamp - 86400;
	     $day_date5 = date("d.m.Y",$day_date4);

             if ($this_date == $c_date)  { 

                 $this_date = "<b>Heute</b>";

             }

             if ($this_date == $day_date5)  { 

                 $this_date = "<i>Gestern</i>";

             } 

?>

eingetragen seit: <?php   echo"$this_date"; ?>

</td></tr>


</table>

<br>