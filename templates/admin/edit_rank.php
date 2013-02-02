<script language="JavaScript" type="text/javascript" src="./javascript/form_rank.js"></script>


<form action="index.php?do=admin&sec=ranks&module=modify&r_id=<?php  echo"$r_id"; ?>" method="post" name="rankform" onsubmit="return checkForm(this)">

<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="cellbg" align="center">

    Benutzerrang bearbeiten

    </td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tableb" width="50%">Rangname</td>

    <td class="tablea" width="50%"><input class="input" type="text" name="rankname" value="<?php  echo"$row_rank_data[r_rankname]"; ?>" maxlength="50"></td>

  </tr>

  <tr>

    <td class="tableb">Benutzergruppe</td>

    <td class="tablea">

    <select name="group">

    <?php  

    $query_groups = mysql_query("SELECT * from $groups_tblname Order by id");

    while ($row_groups = mysql_fetch_assoc($query_groups))  {  ?>

    <option value="<?php  echo"$row_groups[id]"; ?>"

    <?php  if ($row_groups[id] == $row_rank_data[r_group])  { echo"selected"; } ?>

    ><?php  echo"$row_groups[groupname]"; ?></option>

    <?php  } ?>

    </select>

  </td>

  </tr>

  <tr>

    <td class="tableb">Ab Beitr&auml;ge</td>

    <td class="tablea">

         <input class="input" type="text" name="minposts" value="<?php  echo"$row_rank_data[r_minposts]"; ?>">

  </td>

  </tr>

  <tr>

    <td class="tableb">Anzahl Sterne <img src="images/templates/<?php  echo"$template"; ?>/star.gif"></td>

    <td class="tablea">

    <select name="stars">

    <option value="1"
    <?php  if ($row_rank_data[r_stars] == "1")  { echo" selected"; } ?>
    >1</option>

    <option value="2"
    <?php  if ($row_rank_data[r_stars] == "2")  { echo" selected"; } ?>
    >2</option>

    <option value="3"
    <?php  if ($row_rank_data[r_stars] == "3")  { echo" selected"; } ?>
    >3</option>

    <option value="4"
    <?php  if ($row_rank_data[r_stars] == "4")  { echo" selected"; } ?>
    >4</option>

    <option value="5"
    <?php  if ($row_rank_data[r_stars] == "5")  { echo" selected"; } ?>
    >5</option>

    </select>

  </td>

  </tr>

</table>


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="center" class="tableb">

    <input type="hidden" name="actual_rankname" value="<?php  echo"$row_rank_data[r_rankname]"; ?>">

    <input class="input" type="submit" value="Rang &auml;ndern" name="send_rank_data">

    </td> 

  </tr>

</form>

</table>