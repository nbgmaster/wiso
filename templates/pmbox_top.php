<script language="JavaScript" type="text/javascript" src="./javascript/form_del_pm.js"></script>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

<form name="pm_form" action="index.php?do=<?php  echo"$pmbox4"; ?>&sec=delete" method="post" onSubmit="return checkBoxes();">
              
  <tr>

    <td class="cellbg" width="30" align="center">
    &nbsp;
    </td>

    <td class="cellbg" align="left">
    <b>Betreff</b>
    </td>

    <td class="cellbg" width="110" align="left">
    <b>&nbsp;
    <?php  if($do == "inbox") { echo"von"; } else { echo"an"; } ?>
    </b>
    </td>

    <td class="cellbg" width="140" align="center">
    <b><?php  echo"$pmbox6"; ?> am</b>
    </td>

    <td class="cellbg" width="50" align="center">
    <b>l&ouml;schen</b>
    </td>

  </tr>
