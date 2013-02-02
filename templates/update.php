<table cellpadding="4" cellspacing="1" border="0" width="100%" class="tableinborder">
   
  <tr>
    
        <td class="tableb" align="left">
 
        <span style="font-size : <?php  echo"$fontsize_header"; ?>px;"><b>

        Bevor Du das Forum wieder wie gewohnt nutzen kannst, musst Du einige Daten pr&uuml;fen und
        ggf. anpassen.
 
        </span></b>

        </td>

  </tr>

</table>


<br>

  <table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

     <tr>

         <td class="tableb" align="left">

         <b>Vorname</b>

         </td>

         <td class="tableb" align="left">

         <input type="text" name="firstname" maxlength="20" size="40" value="<?php  echo"$upp_firstname"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tableb" align="left">

         <b>Nachname</b>

         </td>

         <td class="tableb" align="left">

         <input type="text" name="lastname" maxlength="20" size="40" value="<?php  echo"$upp_lastname"; ?>">

         </td>

    </tr>

    <tr>

         <td class="tableb" align="left">

         <b>Studiengang</b>

         </td>

         <td class="tableb" align="left">

         <select name="study">

         <option value="bwl"
         <?php  if ($upp_study == "bwl")  { echo" selected"; } ?>
         >Wirtschaftswissenschaften (Schwerpunkt BWL)</option>
         <option value="vwl"
         <?php  if ($upp_study == "vwl")  { echo" selected"; } ?>
         >Wirtschaftswissenschaften (Schwerpunkt VWL)</option>
         <option value="info"
         <?php  if ($upp_study == "info")  { echo" selected"; } ?>
         >Wirtschaftswissenschaften (Schwerpunkt Informatik)</option>
         <option value="paed"
         <?php  if ($upp_study == "paed")  { echo" selected"; } ?>
         >Wirtschaftswissenschaften (Schwerpunkt P&auml;dagogik)</option>
         <option value="int"
         <?php  if ($upp_study == "int")  { echo" selected"; } ?>
         >International Business Studies</option>
         <option value="sozi"
         <?php  if ($upp_study == "sozi")  { echo" selected"; } ?>
         >Sozial&ouml;konomik</option>

         </select>

         </td>

    </tr>

    <tr>

         <td class="tableb" align="left">

         <b>Semester</b>

         </td>

         <td class="tableb" align="left">

         <select name="semester">

         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>

         </select>

         </td>

    </tr>

   <tr>

         <td class="tableb" align="center" width="250">

        <table cellspacing="0" cellpadding="0"><tr><td>

         <img src="images/templates/<?php echo"$template";?>/studivz2.gif"> 

         </td><td>

         &nbsp;&nbsp;<span style="font-size : <?php  echo"$fontsize_header"; ?>px;"><b>Link zu deinem studivz-Profil</b></span>


         </td></tr></table>


         </td>

         <td class="tableb" align="left">

         <input type="text" name="studivz" maxlength="100" size="70" value="<?php  echo"$_Sre_studivz"; ?>">

         </td>

    </tr>

</table>



<br>

<table width="<?php  echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tablea" align="center">

    <input type="submit" class="input" name="upd_TOstep2" value="Weiter zu Schritt 2" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

    </td>
 
  </tr>

</form>

</table>