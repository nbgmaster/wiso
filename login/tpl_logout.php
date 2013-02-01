<?php 

  // Check:: New PM

  if ($userdata_id != "")  {

      $NPm1res = mysql_query("SELECT COUNT( out_id ) AS newpms from $pm_in_tblname WHERE receiver_id = '$userdata_id' && status = '0' LIMIT 1");

      $NPm1row = mysql_fetch_row( $NPm1res );

      $newpms  = $NPm1row[ 0 ];

  }

         $pointstot2 = 0;

         $qy_tot2 = mysql_query("SELECT points from $credits_tblname WHERE user = '$userdata_id'");

         while ($rw_tot2 = mysql_fetch_assoc($qy_tot2))  {

                $pointstot2 = $pointstot2 + $rw_tot2[points];

         }

  $NPmres = mysql_query("SELECT COUNT( out_id ) AS newpms2 from $pm_in_tblname WHERE receiver_id = '$userdata_id' && time > '$lastOnlineTime' LIMIT 1");

  $NPmrow = mysql_fetch_row( $NPmres );

  $newpms2 = $NPmrow[ 0 ];

  $tharesm = mysql_query("SELECT COUNT( id ) AS tha_numbm from $thanks_tblname WHERE poster_uid = '$userdata_id' LIMIT 1");

  $tharowm = mysql_fetch_row( $tharesm );

  $tha_numbm = $tharowm[ 0 ];

?>


 
<table cellpadding="0" cellspacing="0" border="0" width="100%">

<form action="index.php?action=logout" method="post">
    

<tr>

   <td align="center">  

<table cellpadding="3"><tr><td style="line-height:20px" align="center">

         <b>Neu seit letztem Besuch</b> (<i><?php  echo"$DATEp, $DATEp2"; ?></i>)</b>

</td></tr></table>


  <?php  if ($newPostsResult > 0 or $resultDBnewOne > 0 or $newAdsResult > 0 or $newpms > 0 or $newpms2 > 0)  {  ?>

    <table cellpadding="0" cellspacing="0" style="width:160px;border-top:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000">

      <tr>

        <td style="width:100%;">

        <table cellpadding="2" cellspacing="0" width="100%">

  <?php  } if ($newPostsResult > 0)  {  ?>

<tr>

<?php  if ($resultDBnewOne > 0 or $newAdsResult > 0 or $newpms > 0 or $newpms2 > 0) { ?>

<td class="tablec" onmouseover="this.className='mouseover2';return overlib('Neue Beiträge anzeigen.');" onmouseout="this.className='mouseout3';return nd();" onclick="location.href='index.php?do=showNewPosts'" style="border-bottom:1px solid #000">

<?php  } else  { ?>

<td class="tablec" onmouseover="this.className='mouseover2';return overlib('Neue Beiträge anzeigen.');" onmouseout="this.className='mouseout3';return nd();" onclick="location.href='index.php?do=showNewPosts'">


<?php  } ?>


<table cellspacing="0" cellpadding="0" width="100%">
<tr>

         <td align="left">

 <table cellspacing="0" cellpadding="3" width="100%">


<tr>

<td align="left" width="80" class="mfont">

<b><u>Beiträge:</u></b>

</td>

<td align="right" class="mfont"> <b><?php  echo"$newPostsResult"; ?></b>


         </td></tr></table>
         </td></tr></table>

</td></tr>

<?php  }


 if ($newpms > 0 or $newpms2 > 0)  { 

?><tr><?php 

if ($resultDBnewOne > 0 or $newAdsResult > 0) { ?>

<td class="tablec" onmouseover="this.className='mouseover2';return overlib('Neue private Nachrichten lesen.<br><br>Neu seit letztem Besuch: <b><?php echo"$newpms2";?></b><br>( Noch ungelesene Nachrichten:<b> <?php echo"$newpms";?></b> )');" onmouseout="this.className='mouseout3';return nd();" onclick="location.href='index.php?do=inbox'" style="border-bottom:1px solid #000">

<?php  } else  { ?>

<td class="tablec" onmouseover="this.className='mouseover2';return overlib('Neue private Nachrichten lesen.<br><br>Neu seit letztem Besuch: <b><?php echo"$newpms2";?></b><br>( Noch ungelesene Nachrichten:<b> <?php echo"$newpms";?></b> )');" onmouseout="this.className='mouseout3';return nd();" onclick="location.href='index.php?do=inbox'">

<?php  } ?>



<table cellspacing="0" cellpadding="0" width="100%">
<tr>

         <td align="left">

 <table cellspacing="0" cellpadding="3" width="100%">


<tr>

<td align="left" width="80" class="mfont">

<b><u>Nachrichten:</u></b>

</td>

<td align="right" class="mfont"> <b><?php  echo"$newpms2 ($newpms)"; ?></b>


         </td></tr></table>
</td>

</tr>
</table>
</td></tr>

<?php  }

if ($newAdsResult > 0)  { 


?><tr><?php 

if ($resultDBnewOne > 0) { ?>

<td class="tablec" onmouseover="this.className='mouseover2';return overlib('Neue Inserate anzeigen.');" onmouseout="this.className='mouseout3';return nd();" onclick="location.href='index.php?do=market&sec=new'" style="border-bottom:1px solid #000">

<?php  } else { ?>

<td class="tablec" onmouseover="this.className='mouseover2';return overlib('Neue Inserate anzeigen.');" onmouseout="this.className='mouseout3';return nd();" onclick="location.href='index.php?do=market&sec=new'">

<?php  } ?>




<table cellspacing="0" cellpadding="0" width="100%">
<tr>

         <td align="left">

 <table cellspacing="0" cellpadding="3" width="100%">


<tr>

<td align="left" width="80" class="mfont">

<b><u>Inserate:</u></b>

</td>

<td align="right" class="mfont"> <b><?php  echo"$newAdsResult"; ?></b>


         </td></tr></table>
         </td>

</tr></table>

</td></tr>



<?php  }
 
 if ($resultDBnewOne > 0)  {  ?>
 
<tr>

<td class="tablec" onmouseover="this.className='mouseover2';return overlib('Neue Unterlagen anzeigen.');" onmouseout="this.className='mouseout3';return nd();" onclick="location.href='index.php?do=database&sec=new'">


<table cellspacing="0" cellpadding="0" width="100%">
<tr>

         <td align="left">

 <table cellspacing="0" cellpadding="3" width="100%">


<tr>

<td align="left" width="80" class="mfont">


<b><u>Unterlagen:</u></b>

</td>

<td align="right" class="mfont"> <b><?php 
              echo"$resultDBnewOne"; 
              ?></b>


         </td></tr></table>
 </td>

</tr></table>

</td></tr>

<?php  } 


 if ($newPostsResult > 0 or $resultDBnewOne > 0 or $newAdsResult > 0 or $newpms > 0 or $newpms2 > 0)  {  

?>

         </td>

</tr></table>


</td>

</tr>
</table>


<?php   }


 if ($newPostsResult == 0 && $newpms == 0 && $newpms2 == 0 && $newAdsResult == 0 && $resultDBnewOne == 0)  { 

?>
<table width="160" cellspacing="1" cellpadding="5" class="tableinborder">
<tr><td class="tablea" align="center">
<i>keine neuen Aktivitäten</i>
</td></tr></table>

<?php  } /* if ($userdata_admin == "0")  { ?>

<br>

<table cellspacing="0" cellpadding="1" width="160" border=0><tr><td width="132" align="center">


<table cellspacing="0" cellpadding="2">

<tr><td align="center">

<b>Deine Bonuspunkte:</b>

</td></tr>

<tr><td align="center">

 <?php  if ($myCurs == 0)  { ?>

         <table width="114" cellspacing="0" cellpadding="0" onmouseover="return overlib('Dein momentaner Punktestand beträgt:<br> <b><?php  echo"$userdata_credits"; ?> von 10 Punkten!</b><br><br>Gesamtpunktzahl: <b><?php echo"$pointstot2";?></b><br><br>Anzahl positiver Bewertungen gesamt:<br>Beiträge: <b><?php  echo"$resultmycreP"; ?></b>&nbsp;&nbsp;Unterlagen: <b><?php  echo"$resultmycreD"; ?></b><br><br>Bedankungen erhalten: <b><?php echo"$tha_numbm";?></b>');" onmouseout="return nd();">
   
<?php  } else { ?>

         <table width="114" cellspacing="0" cellpadding="0" style="cursor:pointer" onclick="location.href='index.php?do=showCredits&user_id=<?php echo"$userdata_id";?>&show=p';" onmouseover="return overlib('Dein momentaner Punktestand beträgt:<br> <b><?php  echo"$userdata_credits"; ?> von 10 Punkten!</b><br><br>Gesamtpunktzahl: <b><?php echo"$pointstot2";?></b><br><br>Anzahl positiver Bewertungen gesamt:<br>Beiträge: <b><?php  echo"$resultmycreP"; ?></b>&nbsp;&nbsp;Unterlagen: <b><?php  echo"$resultmycreD"; ?></b><br><br>Bedankungen erhalten: <b><?php echo"$tha_numbm";?></b><br><br><i>(Mausklick auf Balken zur Detailansicht)</i>');" onmouseout="return nd();">

<?php  } ?>

<tr>
         <td class="tbodygfxCredits2">

         <?php  if ($percent_mycred != "100")  { ?>

         <div class="gfxBar">

         <?php  } else { ?>

         <div class="gfxBarCredits">

         <?php  } ?>

         <div style="width: <?php  echo"$percent_mycred%"; ?>"></div>
                                                
         </div>
                   
         </td></tr>

         </table>

</td></tr></table>

</td><td valign="center" align="left" width="28">

<a href="javascript:popthis2(680,575,'credits.php','window');">
<?php  if ($browser == "IE")  { ?>
<img src="images/templates/<?php  echo"$template"; ?>/h_faq2.jpg" name="img_faq" border="0"  onmouseover="return overlib('Was bedeuten diese Punkte?');" onmouseout="return nd();">
<?php  } else { ?>
<img src="images/templates/<?php  echo"$template"; ?>/h_faq.png" name="img_faq" border="0"  onmouseover="return overlib('Was bedeuten diese Punkte?');" onmouseout="return nd();">
<?php  } ?>
</a>


</td></tr>


<tr><td align="center" colspan="2">

<?php  if ($percent_mycred == "100")  { ?>
<br>
<a href="javascript:popthis2(500,400,'credits_cash.php','window');">
<u><span style="font-size:11px"><b>Punkte jetzt einlösen!</b></span></u>
</a>
<br>
<br>
<?php  } ?>

</td></tr></table>

<?php  } */ ?> 

<table>

<tr><td align="center">
<br>
        <input type="submit" class="buttons" value="Abmelden" name="submit_login_data" style="width:90px;" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">
<br><br>  </form>

<?php  if ($update_profile == "1"  && $update_award == "1" && $userdata_id != "" && $auto_logon_id != "" && $auto_logon_session != "" && $do == "" && $f == "" && $c == "" && $t == "")  { ?>

<table cellspacing="0" cellpadding="0"><form action="index.php" method="post"><tr>   <td>
  <select onChange="this.form.submit();" name="changeviewM" style="width:160px;font-size:12px">

  <option value="1"
  <?php  if ($act_view == 1)  { echo" selected"; } ?>
  >nur meine Foren anzeigen</option>

  <option value="0"
  <?php  if ($act_view == 0)  { echo" selected"; } ?>
  >alle Foren anzeigen</option>

  </select>
</td></tr>
</form>
</table>

<br>

<?php  } ?>

</td></tr>

</table>

</td></tr></table>
      

 
