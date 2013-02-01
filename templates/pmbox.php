
 <tr>

    <td class="tablea" align="center" width="30">

    <img src="images/templates/<?php  echo"$template/$msg_status"; ?>">

    </td>

    <td style="padding-top:6px;padding-bottom:6px" align="left" class="tableb" onclick="location.href='index.php?do=<?php  echo"$pmbox4"; ?>&sec=read&m_id=<?php  echo"".$row_messages["id"].""; ?>';" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <span style="font-size : <?php  echo"$fontsize_header"; ?>px;">

    <b><?php  echo"".$row_messages["title"].""; ?></b></span>

    </td>

    <td class="tablea" align="left" width="110" onclick="location.href='index.php?do=profile&user_id=<?php  echo"$msg_user_id"; ?>';" onmouseover="this.className='mouseout';" onmouseout="this.className='mouseout2';">

    &nbsp;<?php  echo"$msg_user_name"; ?>

    </td>

    <td class="tableb" align="center" width="140">

    <?php  echo"$pm_time"; ?> Uhr

    </td>

    <td class="tablea" align="center" width="50">

    <input class="checkbox" type="checkbox" name="del_id[]" value="<?php  echo"".$row_messages["id"].""; ?>">

    </td>

  </tr>
