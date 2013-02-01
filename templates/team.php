
      <tr>

         <?php  if ($userdata_id != "")  { ?>

         <td class="tableb" width="100" align="left" onclick="location.href='index.php?do=profile&user_id=<?php  echo"$team_userid"; ?>';" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <?php  } else { ?>

         <td class="tableb" width="100" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <?php  } ?>

         <b><?php  echo"$team_username"; ?></b>

         </td>

         <td class="tableb" align="center">

         <?php  echo"$team_mail2"; ?>
        <img src="images/templates/<?php  echo"$template"; ?>/email.gif" name="<?php  echo"$imgemail"; ?>" title="Email schreiben" border="0">
         <?php  echo"$team_mail3"; ?>

         </td>

         <?php  if ($userdata_id != "")  { ?>

         <td class="tableb" align="center" width="100">

         <?php   echo"$team_pm"; ?>
         <img src="images/templates/<?php  echo"$template"; ?>/pn.gif" name="<?php  echo"$imgpn"; ?>" title="PN schreiben" border="0">
         <?php  echo"$team_pm2";  ?>

         </td>

         <?php  } ?>

    </tr>
