<script language="JavaScript" type="text/javascript" src="./javascript/form_group.js"></script>


<form action="index.php?do=admin&sec=groups&module=create" method="post" name="groupform" onsubmit="return checkForm(this)">

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

    <td class="tablea" width="50%"><input class="input" type="text" name="groupname" maxlength="50"></td>

  </tr>

  <tr>

    <td class="tableb">Forum Hauptseite sichtbar?</td>

    <td class="tablea">

         <input class="input" type="radio" name="boardaccess" value="1" checked>Ja

         <input class="input" type="radio" name="boardaccess" value="0">Nein

  </td>

  </tr>

  <tr>

    <td class="tableb">Suchfunktion nutzbar</td>

    <td class="tablea">

         <input class="input" type="radio" name="searchaccess" value="1" checked>Ja

         <input class="input" type="radio" name="searchaccess" value="0">Nein

  </td>

  </tr>

  <tr>

    <td class="tableb">Private Nachrichten</td>

    <td class="tablea">

         <input class="input" type="radio" name="pmaccess" value="1" checked>Ja

         <input class="input" type="radio" name="pmaccess" value="0">Nein

  </td>

  </tr>

  <tr>

    <td class="tableb">Mitgliederliste</td>

    <td class="tablea">

         <input class="input" type="radio" name="memberaccess" value="1" checked>Ja

         <input class="input" type="radio" name="memberaccess" value="0">Nein

  </td>

  </tr>

  <tr>

    <td class="tableb">Profile sichtbar</td>

    <td class="tablea">

         <input class="input" type="radio" name="profileaccess" value="1" checked>Ja

         <input class="input" type="radio" name="profileaccess" value="0">Nein

  </td>

  </tr>

  <tr>

    <td class="tableb">Beiträge lesen</td>

    <td class="tablea">

         <input class="input" type="radio" name="readaccess" value="1" checked>Ja

         <input class="input" type="radio" name="readaccess" value="0">Nein

  </td>

  </tr>

  <tr>

    <td class="tableb">Beiträge schreiben</td>

    <td class="tablea">

         <input class="input" type="radio" name="postaccess" value="1" checked>Ja

         <input class="input" type="radio" name="postaccess" value="0">Nein

  </td>

  </tr>

</table>


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="center" class="tableb">

    <input class="input" type="submit" value="Gruppe erstellen" name="send_group_data">

    </td> 

  </tr>

</form>

</table>