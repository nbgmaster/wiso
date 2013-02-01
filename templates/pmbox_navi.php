<table width="<?php  echo"$width"; ?>" cellpadding="2" cellspacing="1" class="tableinborder">
               
  <tr>

<td class="tableb" width="350" align="center">

<a href="index.php?do=newpm" onmouseover="imgnewpm.src='images/templates/<?php  echo"$template"; ?>/newpm_icon_hover.gif';" onmouseout="imgnewpm.src='images/templates/<?php  echo"$template"; ?>/newpm_icon.gif';">
      
<img src="images/templates/<?php  echo"$template"; ?>/newpm_icon.gif" name="imgnewpm" title="Neue Nachricht schreiben" border="0"></a>
   
</a>

&nbsp; &nbsp; &nbsp; 

<?php  if ($do == "inbox")  { ?>

<a href="index.php?do=inbox" onmouseover="imginbox.src='images/templates/<?php  echo"$template"; ?>/received_icon.gif';" onmouseout="imginbox.src='images/templates/<?php  echo"$template"; ?>/received_icon_hover.gif';">
      
<img src="images/templates/<?php  echo"$template"; ?>/received_icon_hover.gif" name="imginbox" title="Posteingang" border="0"></a>

&nbsp; &nbsp; &nbsp; 

<a href="index.php?do=outbox" onmouseover="imgoutbox.src='images/templates/<?php  echo"$template"; ?>/transmitted_icon_hover.gif';" onmouseout="imgoutbox.src='images/templates/<?php  echo"$template"; ?>/transmitted_icon.gif';">
      
<img src="images/templates/<?php  echo"$template"; ?>/transmitted_icon.gif" name="imgoutbox" title="Postausgang" border="0"></a>

<?php  } else  { ?>


<a href="index.php?do=inbox" onmouseover="imginbox.src='images/templates/<?php  echo"$template"; ?>/received_icon_hover.gif';" onmouseout="imginbox.src='images/templates/<?php  echo"$template"; ?>/received_icon.gif';">
      
<img src="images/templates/<?php  echo"$template"; ?>/received_icon.gif" name="imginbox" title="Posteingang" border="0"></a>

&nbsp; &nbsp; &nbsp; 

<a href="index.php?do=outbox" onmouseover="imgoutbox.src='images/templates/<?php  echo"$template"; ?>/transmitted_icon.gif';" onmouseout="imgoutbox.src='images/templates/<?php  echo"$template"; ?>/transmitted_icon_hover.gif';">
      
<img src="images/templates/<?php  echo"$template"; ?>/transmitted_icon_hover.gif" name="imgoutbox" title="Postausgang" border="0"></a>


<?php  } ?>

</td>


       <td align="right" class="tableb" align="center">

<?php   $xlength = $message_numbers/$max_pm * 100; $xlength = round($xlength,0); 

if ($message_numbers >= $max_pm)  { $gfxdi = "gfxBar3"; } else if  ($xlength > 70)  { $gfxdi = "gfxBar5"; }

else  { $gfxdi = "gfxBar2"; }

 ?>


 <table><tr><td><b>Speicher <?php echo"$pmbox5";?>:</b></td>
   
         <td class="tbodygfxPN">

         <div class="<?php  echo"$gfxdi"; ?>">

         <div style="width: <?php  echo"$xlength%"; ?>"></div>
                                                
         </div>
                   
         </td><td><b><?php echo"$xlength%";?></b></tr>

         </table>



       </td>


</td></tr></table>
