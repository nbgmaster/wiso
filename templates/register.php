<script type="text/javascript" src="javascript/form_register.js" language="JavaScript1.2"></script>
<script type="text/javascript" src="javascript/ajax.js" language="JavaScript1.2"></script>

<form name="reg_form" action="index.php?do=register&sec=create_member" method="post" onsubmit="return check_user()">
     
   
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="cellbg" align="left">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> Registrierung

    </td>

  </tr>

</table>

<br>

<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="catbg" align="center">

    Erforderliche Angaben

    </td>

  </tr>

</table>
     
  <table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
    <tr>

         <td class="tablea" align="left" width="50%" align="left">
 
         <input type="hidden" value="<?php  echo"$timestamp"; ?>" name="regdate">

         <b>Nickname</b>

         </td>

         <td class="tablea" align="left" width="50%" align="left">

         <input type="text" onblur='ajaxFunction()' id="r_nickname" name="r_nickname" maxlength="20" size="40" value="<?php  echo"$r_nickname"; ?>">

         <div id='ajaxDiv'></div>

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Email</b>

         </td>

         <td class="tablea" align="left">

         <input type="text" onblur='ajaxFunction()' id="email" name="email" maxlength="60" size="40" value="<?php  echo"$email"; ?>">  

         <div id='ajaxDiv2'></div>

         </td>

    </tr>

    <tr>

      <td colspan="2" class="tablea" align="left">

      <b>Achtung:</b> Die Emailadresse muss gültig sein, damit du deinen Account freischalten kannst!

      </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Passwort</b>

         </td>

         <td class="tablea" align="left">

         <input type="password" name="r_password" maxlength="20" size="40">

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Passwort wiederholen</b>

         </td>

         <td class="tablea" align="left">

         <input type="password" name="password2" maxlength="20" size="40">

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Geschlecht</b>

         </td>

         <td class="tablea" align="left">

         <select name="gender">

         <?php  if($gender != "") {

         if($gender == "m") { ?>

         <option value="m" selected>männlich</option>   
         <option value="w">weiblich</option> 

         <?php  } else { ?>

         <option value="m">männlich</option>   
         <option value="w" selected>weiblich</option> 

         <?php  } 

         } else { ?>

         <option value="m">männlich</option>   
         <option value="w">weiblich</option> 

         <?php  } ?>

         </select>

         </td>

    </tr>

     <tr>

         <td class="tablea" align="left">

         <b>Vorname</b>

         </td>

         <td class="tablea" align="left">

         <input type="text" name="firstname" maxlength="20" size="40" value="<?php  echo"$firstname"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Nachname</b>

         </td>

         <td class="tablea" align="left">

         <input type="text" name="lastname" maxlength="20" size="40" value="<?php  echo"$lastname"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Studiengang</b>

         </td>

         <td class="tablea" align="left">

         <select name="study">

         <option value="bwl">Wirtschaftswissenschaften (Schwerpunkt BWL)</option>
         <option value="vwl">Wirtschaftswissenschaften (Schwerpunkt VWL)</option>
         <option value="info">Wirtschaftswissenschaften (Schwerpunkt Informatik)</option>
         <option value="paed">Wirtschaftswissenschaften (Schwerpunkt Pädagogik)</option>
         <option value="int">International Business Studies</option>
         <option value="sozi">Sozialökonomik</option>

         </select>

         </td>

    </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="catbg" align="center">

    Freiwillige Angaben
 
    </td>

  </tr>

</table>

   <table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
    <tr>

         <td class="tablea" align="left" width="50%">

         <b>Geburtstag</b>

         </td>

         <td class="tablea" align="left" width="50%">

         <select name="birthday">
         <option value="" selected="selected"></option>
         <option value="1">01</option><option value="2">02</option> <option value="3">03</option><option value="4">04</option>
         <option value="5">05</option><option value="6">06</option> <option value="7">07</option><option value="8">08</option>
         <option value="9">09</option><option value="10">10</option> <option value="11">11</option><option value="12">12</option>
         <option value="13">13</option><option value="14">14</option> <option value="15">15</option><option value="16">16</option>
         <option value="17">17</option><option value="18">18</option> <option value="19">19</option><option value="20">20</option>
         <option value="21">21</option><option value="22">22</option> <option value="23">23</option><option value="24">24</option>
         <option value="25">25</option><option value="26">26</option> <option value="27">27</option><option value="28">28</option>
         <option value="29">29</option><option value="30">30</option> <option value="31">31</option>
         </select>

         &nbsp;.&nbsp;

         <select name="birthmonth">
         <option value="" selected></option>
         <option value="1">01</option><option value="2">02</option> <option value="3">03</option><option value="4">04</option>
         <option value="5">05</option><option value="6">06</option> <option value="7">07</option><option value="8">08</option>
         <option value="9">09</option><option value="10">10</option> <option value="11">11</option><option value="12">12</option>
         </select>

         &nbsp;.&nbsp;


  	<select name="birthyear">
        <option value="" selected="selected"></option>

        <?php 

         $ThisYear = date("Y");

         $OptionsBegin = $ThisYear - 70;

         $OptionsEnd = $ThisYear - 15;

         for ($CountTotal =  $OptionsBegin; $CountTotal <= $OptionsEnd; $CountTotal++)  {    

             echo"<option value=\"$CountTotal\">$CountTotal</option>"; 

         }

         ?>

         </select>

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Herkunft</b>

         </td>

         <td class="tablea" align="left">

         <input type="text" name="hometown" maxlength="30" size="40" value="<?php  echo"$hometown"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Wohnort</b>

         </td>

         <td class="tablea" align="left">

         <input type="text" name="place" maxlength="20" size="40" value="<?php  echo"$place"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Straße, Hausnummer, etc.</b>

         </td>

         <td class="tablea" align="left">

         <input type="text" name="street" maxlength="50" size="40" value="<?php  echo"$street"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Telefonnummer</b>

         </td>

         <td class="tablea" align="left">

         <input type="text" name="telefon" maxlength="20" size="40" value="<?php  echo"$telefon"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Handynummer</b>

         </td>

         <td class="tablea" align="left">

         <input type="text" name="handy" maxlength="20" size="40" value="<?php  echo"$handy"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Homepage</b>

         </td>

         <td class="tablea" align="left">

         <input type="text" name="homepage" maxlength="30" size="40" value="<?php  echo"$homepage"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>ICQ</b>

         </td>

         <td class="tablea" align="left">

         <input type="text" name="icq" maxlength="10" size="40" value="<?php  echo"$icq"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>AIM Screenname</b>

         </td>

         <td class="tablea" align="left">

         <input type="text" name="aim" maxlength="50" size="40" value="<?php  echo"$aim"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>YIM Screenname</b>

         </td>

         <td class="tablea" align="left">

         <input type="text" name="yim" maxlength="50" size="40" value="<?php  echo"$yim"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>MSN Screenname</b>

         </td>

         <td class="tablea" align="left">

         <input type="text" name="msn" maxlength="50" size="40" value="<?php  echo"$msn"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Beruf</b>

         </td>

         <td class="tablea" align="left">

         <input type="text" name="job" maxlength="50" size="40" value="<?php  echo"$job"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Hobbys / Interessen</b>

         </td>

         <td class="tablea" align="left">

         <input type="text" name="hobbys" maxlength="200" size="40" value="<?php  echo"$hobbys"; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea" align="left">

         <b>Lieblingsessen</b>

         </td>

         <td class="tablea" align="left">

         <input type="text" name="favorite_food" maxlength="50" size="40" value="<?php  echo"$favorite_food"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Lieblingsgetränk</b>

         </td>

         <td class="tablea" align="left">

         <input type="text" name="favorite_drink" maxlength="50" size="40" value="<?php  echo"$favorite_drink"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Lieblingsmusik</b>

         </td>

         <td class="tablea" align="left">

         <input type="text" name="favorite_music" maxlength="50" size="40" value="<?php  echo"$favorite_music"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Lieblingsfilm</b>

         </td>

         <td class="tablea" align="left">

         <input type="text" name="favorite_movie" maxlength="50" size="40" value="<?php  echo"$favorite_movie"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Lieblingslocation</b>

         </td>

         <td class="tablea" align="left">

         <input type="text" name="favorite_location" maxlength="50" size="40" value="<?php  echo"$favorite_location"; ?>">

         </td>

    </tr>


    <tr>

         <td class="tablea" align="left">

         <b>Sonstiges</b> (max. 200 Zeichen)

         </td>

         <td class="tablea" align="left">

         <textarea name="misc" onKeyUp="count();" onKeyDown="count();" onBlur = "count();" cols="50" rows="6"><?php  echo"$misc"; ?></textarea>

         </td>

    </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="catbg" align="center">

    Einstellungen
 
    </td>

  </tr>

</table>

  <table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
    <tr>

         <td class="tablea" align="left" width="50%">

         <b>Emailadresse für andere Miglieder sichtbar?</b>

         </td>

         <td class="tablea" align="left" width="50%">

         <?php  if($hide_email != "") { 

         if($hide_email == "1") { ?>

         <input type="radio" name="hide_email" value="1"  checked="checked"> Ja &nbsp;
         <input type="radio" name="hide_email" value="0"> Nein

         <?php  } else { ?>

         <input type="radio" name="hide_email" value="1"> Ja &nbsp;
         <input type="radio" name="hide_email" value="0" checked="checked"> Nein

         <?php  } 

         } else { ?>

         <input type="radio" name="hide_email" value="1" checked="checked"> Ja &nbsp;
         <input type="radio" name="hide_email" value="0"> Nein

         <?php  } ?>

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Emails schicken per Formmailer zulassen?

         </td>

         <td class="tablea" align="left">

         <?php  if($formmailer != "") { 

         if($formmailer == "1") { ?>

         <input type="radio" name="formmailer" value="1"  checked="checked"> Ja &nbsp;
         <input type="radio" name="formmailer" value="0"> Nein

         <?php  } else { ?>

         <input type="radio" name="formmailer" value="1"> Ja &nbsp;
         <input type="radio" name="formmailer" value="0" checked="checked"> Nein

         <?php  } 

         } else { ?>

         <input type="radio" name="formmailer" value="1" checked="checked"> Ja &nbsp;
         <input type="radio" name="formmailer" value="0"> Nein

         <?php  } ?>

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Ghost Modus</b>

         </td>

         <td class="tablea" align="left">

         <?php  if($hide_user != "") { 

         if($hide_user == "1") { ?>

         <input type="radio" name="hide_user" value="1"  checked="checked"> Ja &nbsp;
         <input type="radio" name="hide_user" value="0"> Nein

         <?php  } else { ?>

         <input type="radio" name="hide_user" value="1"> Ja &nbsp;
         <input type="radio" name="hide_user" value="0" checked="checked"> Nein

         <?php  } 

         } else { ?>

         <input type="radio" name="hide_user" value="1"> Ja &nbsp;
         <input type="radio" name="hide_user" value="0" checked="checked"> Nein

         <?php  } ?>

         </td>

    </tr>

     <tr>

         <td class="tablea" align="left">

         <b>Email Nachricht bei neuer PM</b>

         </td>

         <td class="tablea" align="left">

         <?php  if($email_pm != "") { 

         if($email_pm == "1") { ?>

         <input type="radio" name="email_pm" value="1"  checked="checked"> Ja &nbsp;
         <input type="radio" name="email_pm" value="0"> Nein

         <?php  } else { ?>

         <input type="radio" name="email_pm" value="1"> Ja &nbsp;
         <input type="radio" name="email_pm" value="0" checked="checked"> Nein

         <?php  } 

         } else { ?>

         <input type="radio" name="email_pm" value="1"> Ja &nbsp;
         <input type="radio" name="email_pm" value="0" checked="checked"> Nein

         <?php  } ?>

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Board Style</b>

         </td>

         <td class="tablea" align="left">

         <select name="board_style">

	 <?php 

	 $query_template = mysql_query("SELECT * from $templates_tblname ORDER by id");

         while($row_template = mysql_fetch_assoc($query_template)) 

         {  
  
         echo"<option value='$row_template[id]'>$row_template[tpl_name]</option>";

         }  

	 ?>

         </select>

         </td>

    </tr>

    <tr>

         <td class="tablea" align="left">

         <b>Sprache</b>

         </td>

         <td class="tablea" align="left">

         <select name="language">
         <option value="german">Deutsch</option>   
         </select>

         </td>

    </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tablea" align="center">

    <input type="submit" class="input" name="send_reg_data" value="Registrierung abschließen">

    </td>
 
  </tr>

</form>

</table>