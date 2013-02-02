<?php  if (isset($_SESSION["searchoptions"])) session_unregister(searchoptions); ?>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="catbg" width="50%" align="left">

    <a class="catbg" href="index.php?do=members"><b>Mitglieder</b></a>
 
    &nbsp;<b>:: Mitglieder nach bestimmten Kriterien suchen</b>

    </td>

  </tr>

</table>  
  
<br>

<table class="tableinborder" cellspacing="1" cellpadding="4" width="<?php  echo"$width"; ?>">

<form action="index.php?do=members&sec=searchresults" method="post">

 <tr>

  <td class="tableb" width="50%">

  <b>Benutzername:</b>

  </td><td class="tableb" width="50%">

  <input type="text" name="uname">

  </td></tr>

 <tr>

  <td class="tableb" width="50%">

  <b>Vorname:</b>

  </td><td class="tableb" width="50%">

  <input type="text" name="firstname">

  </td></tr>


 <tr>

  <td class="tableb" width="50%">

  <b>Nachname:</b>

  </td><td class="tableb" width="50%">

  <input type="text" name="lastname">

  </td></tr>


 <tr>

  <td class="tableb" width="50%">

  <b>Geschlecht:</b>

  </td><td class="tableb" width="50%">

        <select name="gender">

         <option value=""></option>
        <option value="m">m&auml;nnlich</option>
        <option value="w">weiblich</option>
         
        </select>

  </td></tr>

 <tr>

  <td class="tableb" width="50%">

  <b>Geburtsjahr:</b>

  </td><td class="tableb" width="50%">

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

  </td></tr>

  <tr><td class="tableb">

  <b>Semester:</b>

  </td><td class="tableb">

        <select name="semester">

         <option value=""></option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>

        </select>

  </td></tr><tr><td class="tableb">

  <b>Studienschwerpunkt:</b>
 
  </td><td class="tableb">

        <select name="study">

         <option value=""></option>
         <option value="bwl">Wirtschaftswissenschaften (Schwerpunkt BWL)</option>
         <option value="vwl">Wirtschaftswissenschaften (Schwerpunkt VWL)</option>
         <option value="info">Wirtschaftswissenschaften (Schwerpunkt Informatik)</option>
         <option value="paed">Wirtschaftswissenschaften (Schwerpunkt P&auml;dagogik)</option>
         <option value="int">International Business Studies</option>
         <option value="sozi">Sozial&ouml;konomik</option>

        </select>

  </td></tr><tr><td class="tableb">

<b>Nur Profile mit studiVZ-Angabe anzeigen?</b>

</td><td class="tableb">

         <select name="studivz">

         <option value="0">Nein</option>
         <option value="1">Ja</option>

         </select>

</td>

</tr></table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="tablea" align="center">

    <input type="submit" class="buttons" name="members_data" value="Mitglieder suchen" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

    </td>

  </tr>

</form>

</table>