<script language="JavaScript" type="text/javascript" src="./javascript/form_group.js"></script>


<form action="index.php?do=admin&sec=groups&module=modify&g_id=<?php  echo"$g_id"; ?>" method="post" name="groupform" onsubmit="return checkForm(this)">

<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="cellbg" align="center">

    Allgemein

    </td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tableb" width="50%">Gruppenname</td>

    <td class="tablea" width="50%"><input class="input" type="text" name="groupname" value="<?php  echo"$row_group_data[groupname]"; ?>" maxlength="50"></td>

  </tr>

  <tr>

    <td class="tableb">Forum Hauptseite sichtbar?</td>

    <td class="tablea">

         <?php  if ($row_group_data["boardaccess"] == "1")  { ?>

         <input class="input" type="radio" name="boardaccess" value="1" checked>Ja

         <input class="input" type="radio" name="boardaccess" value="0">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="boardaccess" value="1">Ja

         <input class="input" type="radio" name="boardaccess" value="0" checked>Nein

         <?php  } ?>

  </td>

  </tr>

  <tr>

    <td class="tableb">Suchfunktion nutzbar</td>

    <td class="tablea">

         <?php  if ($row_group_data["searchaccess"] == "1")  { ?>

         <input class="input" type="radio" name="searchaccess" value="1" checked>Ja

         <input class="input" type="radio" name="searchaccess" value="0">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="searchaccess" value="1">Ja

         <input class="input" type="radio" name="searchaccess" value="0" checked>Nein

         <?php  } ?>

  </td>

  </tr>

  <tr>

    <td class="tableb">Private Nachrichten</td>

    <td class="tablea">

         <?php  if ($row_group_data["pmaccess"] == "1")  { ?>

         <input class="input" type="radio" name="pmaccess" value="1" checked>Ja

         <input class="input" type="radio" name="pmaccess" value="0">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="pmaccess" value="1">Ja

         <input class="input" type="radio" name="pmaccess" value="0" checked>Nein

         <?php  } ?>

  </td>

  </tr>

  <tr>

    <td class="tableb">Mitgliederliste</td>

    <td class="tablea">

         <?php  if ($row_group_data["memberaccess"] == "1")  { ?>

         <input class="input" type="radio" name="memberaccess" value="1" checked>Ja

         <input class="input" type="radio" name="memberaccess" value="0">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="memberaccess" value="1">Ja

         <input class="input" type="radio" name="memberaccess" value="0" checked>Nein

         <?php  } ?>

  </td>

  </tr>

  <tr>

    <td class="tableb">Profile sichtbar</td>

    <td class="tablea">

         <?php  if ($row_group_data["profileaccess"] == "1")  { ?>

         <input class="input" type="radio" name="profileaccess" value="1" checked>Ja

         <input class="input" type="radio" name="profileaccess" value="0">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="profileaccess" value="1">Ja

         <input class="input" type="radio" name="profileaccess" value="0" checked>Nein

         <?php  } ?>

  </td>

  </tr>

  <tr>

    <td class="tableb">Beiträge lesen</td>

    <td class="tablea">

         <?php  if ($row_group_data["readaccess"] == "1")  { ?>

         <input class="input" type="radio" name="readaccess" value="1" checked>Ja

         <input class="input" type="radio" name="readaccess" value="0">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="readaccess" value="1">Ja

         <input class="input" type="radio" name="readaccess" value="0" checked>Nein

         <?php  } ?>

  </td>

  </tr>

  <tr>

    <td class="tableb">Beiträge schreiben</td>

    <td class="tablea">

         <?php  if ($row_group_data["postaccess"] == "1")  { ?>

         <input class="input" type="radio" name="postaccess" value="1" checked>Ja

         <input class="input" type="radio" name="postaccess" value="0">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="postaccess" value="1">Ja

         <input class="input" type="radio" name="postaccess" value="0" checked>Nein

         <?php  } ?>

  </td>

  </tr>

  <tr>

    <td class="tableb">An Umfrage teilnehmen</td>

    <td class="tablea">

         <?php  if ($row_group_data["pollaccess"] == "1")  { ?>

         <input class="input" type="radio" name="pollaccess" value="1" checked>Ja

         <input class="input" type="radio" name="pollaccess" value="0">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="pollaccess" value="1">Ja

         <input class="input" type="radio" name="pollaccess" value="0" checked>Nein

         <?php  } ?>

  </td>

  </tr>

</table>


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="center" class="tableb">

    <input type="hidden" name="actual_groupname" value="<?php  echo"$row_group_data[groupname]"; ?>">

    <input class="input" type="submit" value="Gruppe ändern" name="send_group_data">

    </td> 

  </tr>

</form>

</table>