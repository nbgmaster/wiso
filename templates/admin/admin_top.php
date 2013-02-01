<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="cellbg" align="left">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <a href="index.php?do=admin">Admin Center</a>

    <?php  if ($admin_navi != "")  { ?>

    &nbsp;

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <?php  echo"$admin_navi"; ?>

    <?php  } if ($admin_navi2 != "") { ?>
        
    &nbsp;

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <?php  echo"$admin_navi2"; ?>

    <?php  } ?>

    </td>

  </tr>

</table>

<br>