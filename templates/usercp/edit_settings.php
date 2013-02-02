
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
  
<form name="usercp_form" action="index.php?do=usercp&sec=edit_settings&module=change" method="post">
             
     <tr>

         <td class="tableb" align="left" width="50%">

         <b>Mitglieder d&uuml;rfen dir Emails per Formmailer schicken?</b>

         </td>

         <td class="tableb" align="left" width="50%">

         <?php  if($userdata_formmailer == "1") { ?>

         <input class="radio" type="radio" name="formmailer" value="1"  checked="checked"> Ja &nbsp;
         <input class="radio" type="radio" name="formmailer" value="0"> Nein

         <?php  } else { ?>

         <input class="radio" type="radio" name="formmailer" value="1"> Ja &nbsp;
         <input class="radio" type="radio" name="formmailer" value="0" checked="checked"> Nein

         <?php  }  ?>

         </td>

    </tr>

   <tr>

      <td colspan="2" class="tableb" align="left">

      <table cellspacing="0" cellpadding="0"><tr><td>

      &nbsp;<img src="images/templates/<?php echo"$template";?>/important.gif"> 

      </td><td>

      &nbsp;<b>Deine Emailadresse bleibt unabh&auml;ngig von dieser Einstellung weiterhin nicht sichtbar.</b>

      </td></tr></table>

      </td>

    </tr>

     <tr>

         <td class="tableb" align="left">

         <b>Ghost Modus</b>

         </td>

         <td class="tableb" align="left">

         <?php  if($userdata_hide_user == "1") { ?>

         <input class="radio" type="radio" name="hide_user" value="1"  checked="checked"> Ja &nbsp;
         <input class="radio" type="radio" name="hide_user" value="0"> Nein

         <?php  } else { ?>

         <input class="radio" type="radio" name="hide_user" value="1"> Ja &nbsp;
         <input class="radio" type="radio" name="hide_user" value="0" checked="checked"> Nein

         <?php  }  ?>

         </td>

    </tr>

     <tr>

         <td class="tableb" align="left">

         <b>Benachrichtigung per Email bei neuer privater Nachricht?</b>

         </td>

         <td class="tableb" align="left">

         <?php  if($userdata_email_pm == "1") { ?>

         <input class="radio" type="radio" name="email_pm" value="1"  checked="checked"> Ja &nbsp;
         <input class="radio" type="radio" name="email_pm" value="0"> Nein

         <?php  } else { ?>

         <input class="radio" type="radio" name="email_pm" value="1"> Ja &nbsp;
         <input class="radio" type="radio" name="email_pm" value="0" checked="checked"> Nein

         <?php  }  ?>

         </td>

    </tr>

     <tr>

         <td class="tableb" align="left">

         <b>Board Style</b>

         </td>

         <td class="tableb" align="left">

         <select name="board_style">

	 <?php 

	 $query_template = mysql_query("SELECT * from $templates_tblname ORDER by id");

         while($row_template = mysql_fetch_assoc($query_template)) 

         {  
  
         echo"<option value='$row_template[id]'";

         if($row_template[id] == $userdata_tpl) { echo"selected"; }

	 echo">$row_template[tpl_name]</option>";

         }  

	 ?>

         </select>

         </td>

    </tr>

     <tr>

         <td class="tableb" align="left">

         <b>Sprache</b>

         </td>

         <td class="tableb" align="left">

         <select name="language">
         <option value="german">Deutsch</option>   
         </select>

         </td>

    </tr>

</table>