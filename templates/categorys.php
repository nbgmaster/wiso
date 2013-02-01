<?php  if ($c == "")  { echo"<br>"; } ?>
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="left" class="catbg" style="height:17px">

    <table cellspacing="0" cellpadding="0" width="100%">

      <tr>

        <?php  if ($c == "")  { ?>

        <td width="18">
        <?php  if ($hidecat_var != "1")  {  if ($userdata_email != "")  { ?> 
        <a href="index.php?hidecat=<?php  echo"".$rwCats["id"].""; ?>"> <?php  } ?>
        <img src="images/templates/<?php  echo"$template"; ?>/collapse.gif" border="0">
        <?php  } else {  if ($userdata_email != "")  { ?>
        <a href="index.php?showcat=<?php  echo"".$rwCats["id"].""; ?>"> <?php  } ?>
        <img src="images/templates/<?php  echo"$template"; ?>/expand.gif" border="0">
        <?php  }  if ($userdata_email != "")  { ?>
        </a> <?php  } ?>
        </td> 

        <?php  } ?>

        <td>
        <a href="index.php?c=<?php  echo"".$rwCats["id"].""; ?>" class="catFont">
        <?php  echo"".$rwCats["title"].""; ?> 
        </a>
        </td>

        <td align="right">
        <a href="#top"><img src="images/templates/<?php  echo"$template"; ?>/up.gif" border="0"></a>
        </td>

       </tr>

    </table>

    </a>

    </td>

  </tr>

</table>