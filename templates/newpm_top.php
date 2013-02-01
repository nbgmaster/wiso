<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="catbg">

    <?php  if ($user_id == "")  { ?>

    <b> Neue Private Nachricht versenden</b>

    <?php  } else { ?>

    <b> Private Nachricht an <?php  echo"".$row_user_id["UserName"].""; ?> schicken</b>

    <?php  } ?>
 
    </td>

  </tr>

</table>