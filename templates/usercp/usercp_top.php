<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder" style="height:14px">
               
  <tr>

    <td class="catbg" align="left">

    &nbsp;<a class="catbg" href="index.php?do=usercp">Pers&ouml;nliches Kontrollzentrum</a>

    <?php  echo"$usercp_navi"; ?>

    <?php  if($usercp_navi2 != "") { ?>
       

    <?php  echo"$usercp_navi2"; ?>

    <?php  } ?>

    </td>

  </tr>

</table>

<?php  if ($do != "inbox" && $do != "outbox")  { echo"<br>"; } ?>