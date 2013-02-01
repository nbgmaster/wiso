<script language="JavaScript" type="text/javascript" src="./javascript/admin/edit_user.js"></script>


<form name="admin_form" action="index.php?do=admin&sec=edit_user&module=change" method="post" onsubmit="return check_admin()">

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="cellbg" align="center"  bgcolor="<?php  echo"#$cell_bg02"; ?>">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Erforderliche Angaben</b>

    </td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
    <tr>

         <td class="tablea" width="40%">
 
         <b>Nickname</b>

         </td>

         <td class="tablea" width="60%">

         <input class="input" type="text" name="nickname" maxlength="20" size="40" value="<?php  echo"".$row_admin_userdata["UserName"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">
 
         <b>Passwort</b>

         </td>

         <td class="tablea">

         <input class="input" type="password" name="password" value="**********" maxlength="20" size="40">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Admin</b>

         </td>

          <td class="tablea">
      

         <select name="admin" style="width:100px;">

         <?php  if($row_admin_userdata["admin"] == "1") { ?>

         <option value="1" selected>Admin</option>   
         <option value="0">User</option>

         <?php  } else { ?>

         <option value="1">Admin</option>   
         <option value="0" selected>User</option>

         <?php  }  ?>


         </td>

    </tr>


     <tr>

         <td class="tablea">

         <b>Aktiv</b>

         </td>

          <td class="tablea">


         <select name="useractive" style="width:100px;">

         <?php  if($row_admin_userdata["UserActive"] == "1") { ?>

         <option value="1" selected>Ja</option>
         <option value="0">Nein</option>

         <?php  } else { ?>

         <option value="1">Ja</option>
         <option value="0" selected>Nein</option>

         <?php  }  ?>


         </td>

    </tr>

 <tr>

         <td class="tablea">

         <b>Geschlecht</b>

         </td>

         <td class="tablea">

         <select name="gender" style="width:100px;">

         <?php  if($row_admin_userdata["gender"] == "m") { ?>

         <option value="m" selected>männlich</option>   
         <option value="w">weiblich</option> 

         <?php  } else { ?>

         <option value="m">männlich</option>   
         <option value="w" selected>weiblich</option> 

         <?php  }  ?>

         </select>

         </td>

    </tr>

     <tr>

         <td class="tablea" width="50%">
 
         <b>Emailadresse</b>

         </td>

         <td class="tablea" width="50%">

         <input class="input" type="text" name="email" maxlength="50" size="40" value="<?php  echo"".$row_admin_userdata["UserMail"].""; ?>">

         </td>

    </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="cellbg" align="center">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Freiwillige Angaben</b>

    </td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

         <td class="tablea" width="50%">

         <b>Vorname</b>

         </td>

         <td class="tablea" width="50%">

         <input class="input" type="text" name="firstname" maxlength="20" size="40" value="<?php  echo"".$row_admin_userdata["firstname"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Nachname</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="lastname" maxlength="20" size="40" value="<?php  echo"".$row_admin_userdata["lastname"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Geburtstag</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="birthday" maxlength="2" size="2" value="<?php  echo"".$row_admin_userdata["birthday"].""; ?>">&nbsp;.&nbsp;

         <input class="input" type="text" name="birthmonth" maxlength="2" size="2" value="<?php  echo"".$row_admin_userdata["birthmonth"].""; ?>">&nbsp;.&nbsp;

         <input class="input" type="text" name="birthyear" maxlength="4" size="4" value="<?php  echo"".$row_admin_userdata["birthyear"].""; ?>">

         </td>

    </tr>

  <tr>

         <td class="tablea">

         <b>Studiengang</b>

         </td>

         <td class="tablea">

         <select name="study">

         <option value="bwl"   <?php  if ($row_admin_userdata[study]  == "bwl")   { echo"selected"; } ?> >Wirtschaftswissenschaften (Schwerpunkt BWL)</option>
         <option value="vwl"   <?php  if ($row_admin_userdata[study]  == "vwl")   { echo"selected"; } ?> >Wirtschaftswissenschaften (Schwerpunkt VWL)</option>
         <option value="info"  <?php  if ($row_admin_userdata[study]  == "info")  { echo"selected"; } ?> >Wirtschaftswissenschaften (Schwerpunkt Informatik)</option>
         <option value="paed"  <?php  if ($row_admin_userdata[study]  == "paed")  { echo"selected"; } ?> >Wirtschaftswissenschaften (Schwerpunkt Pädagogik)</option>
         <option value="int"   <?php  if ($row_admin_userdata[study] == "int")    { echo"selected"; } ?> >International Business Studies</option>
         <option value="sozi"  <?php  if ($row_admin_userdata[study]  == "sozi")  { echo"selected"; } ?> >Sozialökonomik</option>

         </select>

         </td>

    </tr>


     <tr>

         <td class="tablea">

         <b>Wohnort</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="place" maxlength="20" size="40" value="<?php  echo"".$row_admin_userdata["place"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Straße, PLZ, etc.</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="street" maxlength="50" size="40" value="<?php  echo"$row_admin_userdata[street]"; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Telefonnummer</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="telefon" maxlength="20" size="40" value="<?php  echo"$row_admin_userdata[telefon]"; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Handynummer</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="handy" maxlength="20" size="40" value="<?php  echo"$row_admin_userdata[handy]"; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Homepage</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="homepage" maxlength="30" size="40" value="<?php  echo"".$row_admin_userdata["homepage"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>ICQ</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="icq" maxlength="10" size="40" value="<?php  echo"".$row_admin_userdata["icq"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>AIM Screenname</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="aim" maxlength="50" size="40" value="<?php  echo"".$row_admin_userdata["aim"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>YIM Screenname</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="yim" maxlength="50" size="40" value="<?php  echo"".$row_admin_userdata["yim"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>MSN Screenname</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="msn" maxlength="50" size="40" value="<?php  echo"".$row_admin_userdata["msn"].""; ?>">

         </td>

    </tr>


     <tr>

         <td class="tablea">

         <b>Beruf</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="job" maxlength="20" size="40" value="<?php  echo"".$row_admin_userdata["job"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Hobbys / Interessen</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="hobbys" maxlength="200" size="40" value="<?php  echo"".$row_admin_userdata["hobbys"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Lieblingsessen</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="favorite_food" maxlength="50" size="40" value="<?php  echo"".$row_admin_userdata["favorite_food"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Lieblingsgetränk</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="favorite_drink" maxlength="50" size="40" value="<?php  echo"".$row_admin_userdata["favorite_drink"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Lieblingsmusik</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="favorite_music" maxlength="50" size="40" value="<?php  echo"".$row_admin_userdata["favorite_music"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Lieblingsfilm</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="favorite_movie" maxlength="50" size="40" value="<?php  echo"".$row_admin_userdata["favorite_movie"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Lieblingslocation</b>

         </td>

         <td class="tablea">

         <input class="input" type="text" name="favorite_location" maxlength="50" size="40" value="<?php  echo"".$row_admin_userdata["favorite_location"].""; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Sonstiges</b> (max. 200 Zeichen)

         </td>

         <td class="tablea">

         <textarea name="misc" onKeyUp="count();" onKeyDown="count();" onBlur = "count();" cols="50" rows="6"><?php  echo"".$row_admin_userdata["misc"].""; ?></textarea>

         </td>

    </tr>

</table>


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="cellbg" align="center">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Einstellungen</b>

    </td>

  </tr>

</table>

<?php  echo"$table_begin"; ?><table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

         <td class="tablea" width="50%">

         <b>Emailadresse für andere Miglieder sichtbar?</b>

         </td>

         <td class="tablea" width="50%">

         <?php  if($row_admin_userdata["hide_email"] == "1") { ?>

         <input class="input" type="radio" name="hide_email" value="1"  checked="checked"> Ja &nbsp;
         <input class="input" type="radio" name="hide_email" value="0"> Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="hide_email" value="1"> Ja &nbsp;
         <input class="input" type="radio" name="hide_email" value="0" checked="checked"> Nein

         <?php  } ?>

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Emails schicken per Formmailer zulassen?

         </td>

         <td class="tablea">

         <?php  if($row_admin_userdata["formmailer"] == "1") { ?>

         <input class="input" type="radio" name="formmailer" value="1"  checked="checked"> Ja &nbsp;
         <input class="input" type="radio" name="formmailer" value="0"> Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="formmailer" value="1"> Ja &nbsp;
         <input class="input" type="radio" name="formmailer" value="0" checked="checked"> Nein

         <?php  }  ?>

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Ghost Modus</b>

         </td>

         <td class="tablea">

         <?php  if($row_admin_userdata["hide_user"] == "1") { ?>

         <input class="input" type="radio" name="hide_user" value="1"  checked="checked"> Ja &nbsp;
         <input class="input" type="radio" name="hide_user" value="0"> Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="hide_user" value="1"> Ja &nbsp;
         <input class="input" type="radio" name="hide_user" value="0" checked="checked"> Nein

         <?php  }  ?>

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Email Nachricht bei neuer PM</b>

         </td>

         <td class="tablea">

         <?php  if($row_admin_userdata["email_pm"] == "1") { ?>

         <input class="input" type="radio" name="email_pm" value="1"  checked="checked"> Ja &nbsp;
         <input class="input" type="radio" name="email_pm" value="0"> Nein

         <?php  } else { ?>

         <input class="input" type="radio" name="email_pm" value="1"> Ja &nbsp;
         <input class="input" type="radio" name="email_pm" value="0" checked="checked"> Nein

         <?php  }  ?>

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Board Style</b>

         </td>

         <td class="tablea">

         <select name="board_style">

         <?php 

           $query_template = mysql_query("SELECT * from $templates_tblname ORDER by id");

           while ($row_template = mysql_fetch_assoc($query_template))  {  
    
                  echo"<option value=".$row_template["id"]."";

                  if ($row_template["template"] == $row_admin_userdata["template"])  { 

                      echo"selected"; 

                  }

                  echo">$row_template[tpl_name]</option>";

           }  

           ?>

           </select>

           </td>

         </tr>

         <tr>

           <td class="tablea">

           <b>Sprache</b>
 
           </td>

           <td class="tablea">

           <select name="language">
           <option value="german">Deutsch</option>   
           </select>

           </td>

         </tr>

       </table>


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="tableb" align="center">

    <input class="input" type="hidden" name="user_id" value="<?php  echo"".$row_admin_userdata["UserID"].""; ?>">
    <input class="input" type="submit" name="send_admin_data" value="Profildaten ändern">

    </td>

  </tr>

</form>

</table>
