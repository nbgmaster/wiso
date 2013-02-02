
<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="cellbg" align="center">

    <b>Einstellungen</b>
 
    </td>

  </tr>

</table>

  <table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
    <tr>

         <td class="tableb" align="left" width="50%">

         <b>Mitglieder d&uuml;rfen dir Emails per Formmailer schicken?

         </td>

         <td class="tableb" align="left" width="50%">

         <?php  if($_Sre_formmailer != "") { 

         if($_Sre_formmailer == "1") { ?>

         <input id="checkbox" type="radio" name="formmailer" value="1"  checked="checked"> Ja &nbsp;
         <input id="checkbox" type="radio" name="formmailer" value="0"> Nein

         <?php  } else { ?>

         <input id="checkbox" type="radio" name="formmailer" value="1"> Ja &nbsp;
         <input id="checkbox" type="radio" name="formmailer" value="0" checked="checked"> Nein

         <?php  } 

         } else { ?>

         <input id="checkbox" type="radio" name="formmailer" value="1" checked="checked"> Ja &nbsp;
         <input id="checkbox" type="radio" name="formmailer" value="0"> Nein

         <?php  } ?>

         </td>

    </tr>

   <tr>

      <td colspan="2" class="tableb" align="left">

      <table cellspacing="0" cellpadding="0"><tr><td>

      &nbsp;<img src="images/templates/<?php echo"$template";?>/important.gif"> 

      </td><td>

      &nbsp;<b>Deine Emailadresse bleibt unabh&auml;ngig von dieser Einstellung unsichtbar f&uuml;r alle Mitglieder.</b>

      </td></tr></table>

      </td>

    </tr>

    <tr>

         <td class="tableb" align="left">

         <b>Ghost Modus</b>

         </td>

         <td class="tableb" align="left">

         <?php  if($_Sre_hide_user != "") { 

         if($_Sre_hide_user == "1") { ?>

         <input id="checkbox" type="radio" name="hide_user" value="1"  checked="checked"> Ja &nbsp;
         <input id="checkbox" type="radio" name="hide_user" value="0"> Nein

         <?php  } else { ?>

         <input id="checkbox" type="radio" name="hide_user" value="1"> Ja &nbsp;
         <input id="checkbox" type="radio" name="hide_user" value="0" checked="checked"> Nein

         <?php  } 

         } else { ?>

         <input id="checkbox" type="radio" name="hide_user" value="1"> Ja &nbsp;
         <input id="checkbox" type="radio" name="hide_user" value="0" checked="checked"> Nein

         <?php  } ?>

         </td>

    </tr>

     <tr>

         <td class="tableb" align="left">

         <b>Benachrichtigung per Email bei neuer privater Nachricht?</b>

         </td>

         <td class="tableb" align="left">

         <?php  if($_Sre_email_pm != "") { 

         if($_Sre_email_pm == "1") { ?>

         <input id="checkbox" type="radio" name="email_pm" value="1"  checked="checked"> Ja &nbsp;
         <input id="checkbox" type="radio" name="email_pm" value="0"> Nein

         <?php  } else { ?>

         <input id="checkbox" type="radio" name="email_pm" value="1"> Ja &nbsp;
         <input id="checkbox" type="radio" name="email_pm" value="0" checked="checked"> Nein

         <?php  } 

         } else { ?>

         <input id="checkbox" type="radio" name="email_pm" value="1"> Ja &nbsp;
         <input id="checkbox" type="radio" name="email_pm" value="0" checked="checked"> Nein

         <?php  } ?>

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

         if ($row_template[id] == $_Sre_board_style)  { echo"selected"; }

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


<table width="<?php  echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tablea" align="center">

    <input type="hidden" name="Aprinciples" value="accept"> 

    <input type="submit" class="buttons" name="reg_TOstep4" value="Weiter zu Schritt 4" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

    </td>
 
  </tr>

</form>

</table>
