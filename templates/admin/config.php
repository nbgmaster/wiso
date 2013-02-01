<form name="admin_form" action="index.php?do=admin&sec=config&module=change" method="post">

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="center"  class="cellbg">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Forum Verzeichnis</b>

    </td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
    <tr>

         <td class="tablea" width="50%">

         <b>Forum Domain</b>

         </td>

         <td class="tablea" width="50%">

         <input class="input" type="text" name="board_domainf" maxlength="50" size="40" value="<?php  echo"".$row_config["board_domain"].""; ?>">

         </td>

    </tr>

         <td class="tablea" width="50%">

         <b>Forum Verzeichnis</b>

         </td>

         <td class="tablea" width="50%">

         <input class="input" type="text" name="board_directionf" maxlength="50" size="40" value="<?php  echo"".$row_config["board_direction"].""; ?>">

         </td>

    </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="center"  class="cellbg">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Forum Header</b>

    </td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
    <tr>

         <td class="tablea" width="50%">

         <b>Forum Titel</b>

         </td>

         <td class="tablea" width="50%">

         <input class="input" type="text" name="board_title" maxlength="100" size="40" value="<?php  echo"".$row_config["board_title"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Forum Beschreibung</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="board_description" maxlength="100" size="65" value="<?php  echo"".$row_config["board_description"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea" width="50%">

         <b>Titel & Beschreibung anzeigen</b>

         </td>

         <td class="tablea" width="50%">

         <?php  if ($row_config["header_titles"] == "1")  { ?>

         <input class="input" type="radio" name="header_titles" value="1" checked>Ja

         <input class="input" type="radio" name="header_titles" value="0">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="header_titles" value="1">Ja

         <input class="input" type="radio" name="header_titles" value="0" checked>Nein

         <?php  } ?>

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Banner anzeigen</b>

         </td>

         <td class="tablea">

         <?php  if ($row_config["banner"] == "1")  { ?>

         <input class="input" type="radio" name="banner" value="1" checked>Ja

         <input class="input" type="radio" name="banner" value="0">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="banner" value="1">Ja

         <input class="input" type="radio" name="banner" value="0" checked>Nein

         <?php  } ?>

         </td>

    </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="center" class="cellbg">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Allgemeine Einstellungen</b>

    </td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
   <tr>

         <td class="tablea" width="50%">

         <b>Forum deaktivieren</b>

         </td>

         <td class="tablea" width="50%">

         <?php  if ($row_config["board_disable"] == "1")  { ?>

         <input class="input" type="radio" name="board_disable" value="1" checked>Ja

         <input class="input" type="radio" name="board_disable" value="0">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="board_disable" value="1">Ja

         <input class="input" type="radio" name="board_disable" value="0" checked>Nein

         <?php  } ?>

         </td>

    </tr>

   <tr>

         <td class="tablea" width="50%">

         <b>Registrierung deaktivieren</b>

         </td>

         <td class="tablea" width="50%">

         <?php  if ($row_config["reg_disable"] == "1")  { ?>

         <input class="input" type="radio" name="reg_disable" value="1" checked>Ja

         <input class="input" type="radio" name="reg_disable" value="0">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="reg_disable" value="1">Ja

         <input class="input" type="radio" name="reg_disable" value="0" checked>Nein

         <?php  } ?>

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Accountaktivierung</b>

         </td>

         <td class="tablea">

         <?php  if ($row_config["account_activation"] == "no")  { ?>

         <input class="input" type="radio" name="account_activation" value="no" checked>keine

         <input class="input" type="radio" name="account_activation" value="email">per Email

         <input class="input" type="radio" name="account_activation" value="admin">per Admin

         <?php  } if ($row_config["account_activation"] == "email")  { ?>

         <input class="input" type="radio" name="account_activation" value="no">keine

         <input class="input" type="radio" name="account_activation" value="email" checked>per Email

         <input class="input" type="radio" name="account_activation" value="admin">per Admin

         <?php  } if ($row_config["account_activation"] == "admin") { ?>

         <input class="input" type="radio" name="account_activation" value="no">keine

         <input class="input" type="radio" name="account_activation" value="email">per Email

         <input class="input" type="radio" name="account_activation" value="admin" checked>per Admin

         <?php  } ?>

         </td>

    </tr>

 <tr>

         <td class="tablea">

         <b>Standard Style</b>

         </td>

         <td class="tablea">

         <select name="tpl_active">

         <?php 

           $query_template = mysql_query("SELECT * from $templates_tblname");

           while ($row_template = mysql_fetch_assoc($query_template))  {  

                  echo"<option value=\"$row_template[id]\"";

                  if ($row_template["id"] == $row_config["tpl_active"])  { 

                      echo"selected";
 
                  }
 
                  echo">".$row_template["tpl_name"]."</option>";

           }

         ?>

         </select>

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>User Style überschreiben</b>

         </td>

         <td class="tablea">

         <?php  if ($row_config["overwrite_user_tpl"] == "1")  { ?>

         <input class="input" type="radio" name="overwrite_user_tpl" value="1" checked>Ja

         <input class="input" type="radio" name="overwrite_user_tpl" value="0">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="overwrite_user_tpl" value="1">Ja

         <input class="input" type="radio" name="overwrite_user_tpl" value="0" checked>Nein

         <?php  } ?>

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Standard Sprache</b>

         </td>

         <td class="tablea">

         <select name="language" style="width:120px;">

         <option value="german">deutsch</option>

         </select>

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Admin Email</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="admin_email" maxlength="50" size="40" value="<?php  echo"".$row_config["admin_email"].""; ?>">

         </td>

    </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="center"  class="cellbg">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Seitenbegrenzungen</b>

    </td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
    <tr>

         <td class="tablea" width="50%">

         <b>Topics pro Seite</b>

         </td>

         <td class="tablea" width="50%">

         <input class="input" type="text" name="show_threads" maxlength="3" size="3" value="<?php  echo"".$row_config["show_threads"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Posts pro Seite</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="postsperpage" maxlength="3" size="3" value="<?php  echo"".$row_config["postsperpage"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Mitglieder pro Seite</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="show_members" maxlength="3" size="3" value="<?php  echo"".$row_config["show_members"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Private Nachrichten pro Seite</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="show_user_pm" maxlength="3" size="3" value="<?php  echo"".$row_config["show_user_pm"].""; ?>">

         </td>

    </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="center" class="cellbg">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Sonstige Variablen</b>

    </td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
    <tr>

         <td class="tablea" width="50%">

         <b>Max. PM in Inbox</b>

         </td>

         <td class="tablea" width="50%">

         <input class="input" type="text" name="max_pm_inbox" maxlength="3" size="3" value="<?php  echo"".$row_config["max_pm_inbox"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Max. PM in Outbox</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="max_pm_outbox" maxlength="3" size="3" value="<?php  echo"".$row_config["max_pm_outbox"].""; ?>">

         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>Refresh Zeit der meta Tags</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="refresh_time" maxlength="3" size="3" value="<?php  echo"".$row_config["refresh_time"].""; ?>"> Sekunden

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Zeitsperre zwischen Posts in Sekunden</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="reload_post" maxlength="5" size="3" value="<?php  echo"".$row_config["reload_post"].""; ?>"> Sekunden

         </td>

    </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="center" class="cellbg">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Module an/ausschalten</b>

    </td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

    <tr>

         <td class="tablea" width="50%">

         <b>Statistik auf der Hauptseite anzeigen</b>

         </td>

         <td class="tablea" width="50%">

         <?php  if ($row_config["stats_enable"] == "1")  { ?>

         <input class="input" type="radio" name="stats_enable" value="1" checked>Ja

         <input class="input" type="radio" name="stats_enable" value="0">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="stats_enable" value="1">Ja

         <input class="input" type="radio" name="stats_enable" value="0" checked>Nein

         <?php  } ?>

         </td>

    </tr>

    <tr>

         <td class="tablea" width="50%">

         <b>Geburtstagsticker auf der Hauptseite anzeigen</b>

         </td>

         <td class="tablea" width="50%">

         <?php  if ($row_config["birthday_enable"] == "1")  { ?>

         <input class="input" type="radio" name="birthday_enable" value="1" checked>Ja

         <input class="input" type="radio" name="birthday_enable" value="0">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="birthday_enable" value="1">Ja

         <input class="input" type="radio" name="birthday_enable" value="0" checked>Nein

         <?php  } ?>

         </td>

    </tr>
               
    <tr>

         <td class="tablea" width="50%">

         <b>Private Nachricht verschicken erlauben</b>

         </td>

         <td class="tablea" width="50%">

         <?php  if ($row_config["pm_disable"] == "0")  { ?>

         <input class="input" type="radio" name="pm_disable" value="0" checked>Ja

         <input class="input" type="radio" name="pm_disable" value="1">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="pm_disable" value="0">Ja

         <input class="input" type="radio" name="pm_disable" value="1" checked>Nein

         <?php  } ?>

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Email verschicken erlauben</b>

         </td>

         <td class="tablea">

         <?php  if ($row_config["email_disable"] == "0")  { ?>

         <input class="input" type="radio" name="email_disable" value="0" checked>Ja

         <input class="input" type="radio" name="email_disable" value="1">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="email_disable" value="0">Ja

         <input class="input" type="radio" name="email_disable" value="1" checked>Nein

         <?php  } ?>

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Nickname ändern erlauben</b>

         </td>

         <td class="tablea">

         <?php  if ($row_config["change_nick_disable"] == "0")  { ?>

         <input class="input" type="radio" name="change_nick_disable" value="0" checked>Ja

         <input class="input" type="radio" name="change_nick_disable" value="1">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="change_nick_disable" value="0">Ja

         <input class="input" type="radio" name="change_nick_disable" value="1" checked>Nein

         <?php  } ?>

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Signatur anzeigen</b>

         </td>

         <td class="tablea">

         <?php  if ($row_config["sig_disable"] == "0")  { ?>

         <input class="input" type="radio" name="sig_disable" value="0" checked>Ja

         <input class="input" type="radio" name="sig_disable" value="1">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="sig_disable" value="0">Ja

         <input class="input" type="radio" name="sig_disable" value="1" checked>Nein

         <?php  } ?>

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>HTML erlauben</b>

         </td>

         <td class="tablea">

         <?php  if ($row_config["html_disable"] == "0")  { ?>

         <input class="input" type="radio" name="html_disable" value="0" checked>Ja

         <input class="input" type="radio" name="html_disable" value="1">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="html_disable" value="0">Ja

         <input class="input" type="radio" name="html_disable" value="1" checked>Nein

         <?php  } ?>

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Smilies erlauben</b>

         </td>

         <td class="tablea">

         <?php  if ($row_config["smilies_disable"] == "0")  { ?>

         <input class="input" type="radio" name="smilies_disable" value="0" checked>Ja

         <input class="input" type="radio" name="smilies_disable" value="1">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="smilies_disable" value="0">Ja

         <input class="input" type="radio" name="smilies_disable" value="1" checked>Nein

         <?php  } ?>

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>BBCode erlauben</b>

         </td>

         <td class="tablea">

         <?php  if ($row_config["bbcode_disable"] == "0")  { ?>

         <input class="input" type="radio" name="bbcode_disable" value="0" checked>Ja

         <input class="input" type="radio" name="bbcode_disable" value="1">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="bbcode_disable" value="0">Ja

         <input class="input" type="radio" name="bbcode_disable" value="1" checked>Nein

         <?php  } ?>

         </td>

    </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="center" class="cellbg">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Avatar Einstellungen</b>

    </td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

         <td class="tablea" width="50%">

         <b>Avatars erlauben</b>

         </td>

         <td class="tablea" width="50%">

         <?php  if ($row_config["avatar_disable"] == "0")  { ?>

         <input class="input" type="radio" name="avatar_disable" value="0" checked>Ja

         <input class="input" type="radio" name="avatar_disable" value="1">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="avatar_disable" value="0">Ja

         <input class="input" type="radio" name="avatar_disable" value="1" checked>Nein

         <?php  } ?>

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Avatars von anderer Url erlauben</b>

         </td>

         <td class="tablea">

         <?php  if ($row_config["avatar_from_url"] == "0")  { ?>

         <input class="input" type="radio" name="avatar_from_url" value="0" checked>Ja

         <input class="input" type="radio" name="avatar_from_url" value="1">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="avatar_from_url" value="0">Ja

         <input class="input" type="radio" name="avatar_from_url" value="1" checked>Nein

         <?php  } ?>
         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>max. Avatar Breite x Höhe</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="avatar_max_width" maxlength="3" size="3" value="<?php  echo"".$row_config["avatar_max_width"].""; ?>">
         x
         <input class="input" type="text" name="avatar_max_height" maxlength="3" size="3" value="<?php  echo"".$row_config["avatar_max_height"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>max. Avatar Dateigröße</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="avatar_max_size" maxlength="10" size="6" value="<?php  echo"".$row_config["avatar_max_size"].""; ?>"> Bytes

         </td>

    </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="center"  class="cellbg">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Smilies</b>

    </td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

     <tr>

         <td class="tablea" width="50%">

         <b>Verzeichnis</b>

         </td>

         <td class="tablea" width="50%">

         <input class="input" type="text" name="smilies_direction" maxlength="50" size="40" value="<?php  echo"".$row_config["smilies_direction"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Smilies anzeigen</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="smilies_showstart" maxlength="10" size="6" value="<?php  echo"".$row_config["smilies_showstart"].""; ?>">

         </td>

    </tr>

</table>


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="center"  class="cellbg">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Dateiupload</b>

    </td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

     <tr>

         <td class="tablea" width="50%">

         <b>Datei Upload bei Posting erlauben</b>

         </td>

         <td class="tablea" width="50%">

         <?php  if ($row_config["file_upload"] == "1")  { ?>

         <input class="input" type="radio" name="file_upload" value="1" checked>Ja

         <input class="input" type="radio" name="file_upload" value="0">Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="file_upload" value="1">Ja

         <input class="input" type="radio" name="file_upload" value="0" checked>Nein

         <?php  } ?>

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>max. Dateigröße</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="file_max_size" maxlength="12" size="6" value="<?php  echo"".$row_config["file_max_size"].""; ?>"> Bytes

         </td>

    </tr>

</table>


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
   <tr>

       <td align="center" class="cellbg">

       <input class="input" type="submit" name="send_admin_data" value="Einstellungen ändern">

       </td>

     </tr>

  </form>

</table>