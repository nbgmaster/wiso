
<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="cellbg" align="center">

    <b>Optionale Angaben</b>
 
    </td>

  </tr>

</table>

<br>

<table width="<?php  echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">

      
    <tr>

         <td class="tableb" align="center" width="250">

        <table cellspacing="0" cellpadding="0"><tr><td>

         <img src="images/templates/<?php echo"$template";?>/studivz2.gif"> 

         </td><td>

         &nbsp;&nbsp;<span style="font-size : <?php  echo"$fontsize_header"; ?>px;"><b>Link zu deinem studivz-Profil</b></span>


         </td></tr></table>


         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="studivz" maxlength="100" size="65" value="<?php  echo"$_Sre_studivz"; ?>">

         </td>

    </tr>


</table>

<br>


   <table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
     
    <tr>

         <td class="tableb" align="left" width="50%">

         <b>Geburtstag</b>

         </td>

         <td class="tableb" align="left" width="50%" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <select name="birthday">

         <option value=""></option>

         <?php  

         for ($CountTotal = 1; $CountTotal <= 31; $CountTotal++)  {  
  
            if ($CountTotal == $_Sre_birthday)  {

                  echo"<option value=\"$CountTotal\" selected=\"selected\">$CountTotal</option>"; 

              }

              else  {

                  echo"<option value=\"$CountTotal\">$CountTotal</option>"; 

              }

         }

         ?>

         </select>

         &nbsp;.&nbsp;

         <select name="birthmonth">    

         <option value=""></option>

         <?php 

         for ($CountTotal2 = 1; $CountTotal2 <= 12; $CountTotal2++)  {  
  
            if ($CountTotal2 == $_Sre_birthmonth)  {

                  echo"<option value=\"$CountTotal2\" selected=\"selected\">$CountTotal2</option>"; 

              }

              else  {

                  echo"<option value=\"$CountTotal2\">$CountTotal2</option>"; 

              }

         }

         ?>

         </select>

         &nbsp;.&nbsp;


        <select name="birthyear">

        <option value=""></option>

        <?php 

         $ThisYear = date("Y");

         $OptionsBegin = $ThisYear - 70;

         $OptionsEnd = $ThisYear - 15;

         for ($CountTotal3 =  $OptionsBegin; $CountTotal3 <= $OptionsEnd; $CountTotal3++)  {    

              if ($CountTotal3 == $_Sre_birthyear)  {

                  echo"<option value=\"$CountTotal3\" selected=\"selected\">$CountTotal3</option>"; 

              }

              else  {

                  echo"<option value=\"$CountTotal3\">$CountTotal3</option>"; 

              }

         }

         ?>


         </select>

         </td>

    </tr>

    <tr>

         <td class="tableb" align="left">

         <b>Herkunft</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="hometown" maxlength="30" size="40" value="<?php  echo"$_Sre_hometown"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tableb" align="left">

         <b>Wohnort</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="place" maxlength="20" size="40" value="<?php  echo"$_Sre_place"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tableb" align="left">

         <b>Straﬂe, Hausnummer, etc.</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="street" maxlength="50" size="40" value="<?php  echo"$_Sre_street"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tableb" align="left">

         <b>Telefonnummer</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="telefon" maxlength="20" size="40" value="<?php  echo"$_Sre_telefon"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tableb" align="left">

         <b>Handynummer</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="handy" maxlength="20" size="40" value="<?php  echo"$_Sre_handy"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tableb" align="left">

         <b>Homepage</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="homepage" maxlength="30" size="40" value="<?php  echo"$_Sre_homepage"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tableb" align="left">

         <b>ICQ</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="icq" maxlength="10" size="40" value="<?php  echo"$_Sre_icq"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tableb" align="left">

         <b>Nebenjob</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="job" maxlength="50" size="40" value="<?php  echo"$_Sre_job"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tableb" align="left">

         <b>Hobbys</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="hobbys" maxlength="200" size="40" value="<?php  echo"$_Sre_hobbys"; ?>">

         </td>

    </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tablea" align="center">

    <input type="hidden" name="Aprinciples" value="accept"> 

    <input type="submit" class="buttons" name="reg_TOstep3" value="Weiter zu Schritt 3" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

    </td>
 
  </tr>

</form>

</table>
