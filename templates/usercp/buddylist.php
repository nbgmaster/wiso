  <tr>

    <td class="tableb" align="left" onclick="location.href='index.php?do=profile&user_id=<?php  echo"$f_userid"; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <b> <?php  echo"$f_sorted"; ?> </b>

    </td>

    <td class="tablea" align="center" width="40">
  
    <img src="images/templates/<?php  echo"$template/$user_status"; ?>" border="0">

    </td>

    <td class="tableb" align="center" width="100">

    <a href="index.php?do=newpm&user_id=<?php  echo"$f_userid"; ?>" onmouseover="<?php  echo"$imgpn"; ?>.src='images/templates/<?php  echo"$template"; ?>/pn_hover.gif';" onmouseout="<?php  echo"$imgpn"; ?>.src='images/templates/<?php  echo"$template"; ?>/pn.gif';">
      
    <img src="images/templates/<?php  echo"$template"; ?>/pn.gif" name="<?php  echo"$imgpn"; ?>" title="PN schreiben" border="0"></a>
      
    </td>

    <td class="tablea" align="center" width="100">

    <a href="index.php?do=usercp&sec=<?php  echo"$sec"; ?>&del_id=<?php echo"$f_userid"; ?>" onmouseover="<?php  echo"$imgdel"; ?>.src='images/templates/<?php  echo"$template"; ?>/delete_small_hover.gif';" onmouseout="<?php  echo"$imgdel"; ?>.src='images/templates/<?php  echo"$template"; ?>/delete_small.gif';">
      
    <img src="images/templates/<?php  echo"$template"; ?>/delete_small.gif" name="<?php  echo"$imgdel"; ?>" title="User aus der Liste l&ouml;schen" border="0"></a>

    </a>
 
    </td>

  </tr>