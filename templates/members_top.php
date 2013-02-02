<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="cellbg" align="center">
    <b>Nickname</b>
    </td>

    <?php  if ($do != "admin")  { ?>

    <td class="cellbg" align="center" width="90">
    <b>Email</b>
    </td>

    <td class="cellbg" align="center" width="90"">
    <b>StudiVZ</b>
    </td>

    <td class="cellbg" align="center" width="90">
    <b>Suchen</b>
    </td>

    <td class="cellbg" align="center" width="90">
    <b>PN</b>
    </td>

    <td class="cellbg" align="center" width="90">
    <b>Homie
    </td>

    <td class="cellbg" align="center" width="100">

    <?php  } else { ?>

    <td class="cellbg" align="center" width="100">

    <?php  } ?>

    <b>Registrierung
    </td>

    <?php  if ($do != "admin")  { ?>

    <td class="cellbg" align="center" width="60">

    <?php  } else { ?>

    <td class="cellbg" align="center" width="60">

    <?php  } ?>
    <b>Beitr&auml;ge
    </td>

  </tr>