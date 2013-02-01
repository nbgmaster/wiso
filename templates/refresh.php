<table width="<?php  echo"$width"; ?>" cellpadding="8" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="tableb" align="center" width="50%">
    
    <b><font style="font-size:14px">

    <?php   echo"$text01 $text02 $text03 $text04 $text05 $text06"; ?>

    </font></b>
    
    </td></tr><tr>

    <td class="tablea" align="center" width="50%" onclick="location.href='<?php  echo"$link"; ?>'" onmouseover="this.className='mouseout';" onmouseout="this.className='mouseout2';">
   <font style="font-size:12px">
    ...Du wirst weitergeleitet...

    <br><br>

    Falls die automatische Weiterleitung nicht funktioniert, klicke bitte <a href="<?php  echo"$link"; ?>">hier</a>.

<?php  if(preg_match("/register/",$link)) { $link = "index.php"; }  ?>
    <meta http-equiv="refresh" content="<?php  echo"$refresh_time"; ?>; url=<?php  echo"$link"; ?>">


    </td>

  </tr>
    
</table>
<br>