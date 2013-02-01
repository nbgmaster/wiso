<script language="JavaScript" type="text/javascript" src="./javascript/form_rank.js"></script>


<form action="index.php?do=admin&sec=ranks&module=create" method="post" name="rankform" onsubmit="return checkForm(this)">

<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="cellbg" align="center">

    Benutzerrang erstellen

    </td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tableb" width="50%">Rangname</td>

    <td class="tablea" width="50%"><input class="input" type="text" name="rankname" maxlength="50"></td>

  </tr>

  <tr>

    <td class="tableb">Benutzergruppe</td>

    <td class="tablea">

    <select name="group">

    <?php  

    $query_groups = mysql_query("SELECT * from $groups_tblname Order by id");

    while ($row_groups = mysql_fetch_assoc($query_groups))  {  ?>

           <option value="<?php  echo"$row_groups[id]"; ?>"><?php  echo"$row_groups[groupname]"; ?></option>

    <?php  } ?>

    </select>

  </td>

  </tr>

  <tr>

    <td class="tableb">Ab Beiträge</td>

    <td class="tablea">

         <input class="input" type="text" name="minposts" value="0">

  </td>

  </tr>

  <tr>

    <td class="tableb">Anzahl Sterne <img src="images/templates/<?php  echo"$template"; ?>/star.gif"></td>

    <td class="tablea">

    <select name="stars">

    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>

    </select>

  </td>

  </tr>

</table>


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="center" class="tableb">

    <input class="input" type="submit" value="Rang erstellen" name="send_rank_data">

    </td> 

  </tr>

</form>

</table>