<script>

function wisostud(choice)  {

  d_sem  = document.getElementById("d_wisostudent");
  bd_sem = document.getElementById("bd_wisostudent");
  md_sem = document.getElementById("md_wisostudent");
  
  if (choice == 0 || choice == 3)  {

      d_sem.style.display = 'none';
      bd_sem.style.display = 'none';
      md_sem.style.display = 'none';
            
  }

  else  {

      d_sem.style.display = 'block';

      if (choice == 1) { bd_sem.style.display = 'block'; md_sem.style.display = 'none'; }
      if (choice == 2) { md_sem.style.display = 'block'; bd_sem.style.display = 'none'; }
            
  }

}

</script>

<table width="<?php echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="cellbg" align="center">

    <b>Erforderliche Angaben</b>

    </td>

  </tr>

</table>
     

  <table width="<?php echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
   
    <tr>

         <td class="tableb" align="left" width="50%" align="left">

         <b>Nickname</b>

         </td>

         <td class="tableb" align="left" width="50%" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" onblur='ajaxFunction()' id="r_nickname" name="r_nickname" maxlength="20" size="36" value="<?php echo"$_Sre_nickname"; ?>">
         (min. 3 Zeichen)
         <div id='ajaxDiv'></div>

         </td>

    </tr>
            
    <tr>

         <td class="tableb" align="left">

         <b>Email</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" onblur='ajaxFunction()' id="email" name="email" maxlength="60" size="36" value="<?php echo"$_Sre_email"; ?>">

         <div id='ajaxDiv2'></div>

         </td>

    </tr>

    <!--tr>

      <td colspan="2" class="tableb" align="left">

      <table cellspacing="0" cellpadding="0"><tr><td valign="top" style="padding-top:10px">

      &nbsp;&nbsp;<img src="images/templates/<?php echo"$template";?>/important.gif">

      </td><td style="line-height:24px;padding-top:10px">

      <span style="font-size:14px;">
      <b>&nbsp;&nbsp;Du musst deine Uni-Emailadresse angeben. Diese findest du auf deinem Studentenausweis!</b></span>
      <br>
      </span>
      <span style="font-size:12px">
      <ul type="square">
      <li><b>F�r Studenten der ReWi:</b> <u>vorname.nachname (at) wiso.stud.uni-erlangen.de</u></li>
      <li><b>Alternative: Benutzererkennung anstatt Vor- und Nachnamen:</b> <u>swjabond (at) wiso.stud.uni-erlangen.de</u></li>
      <li><b>F�r Lehrstuhlmitarbeiter der ReWi:</b> <u>vorname.nachname (at) wiso.uni-erlangen.de</u></li>
      </ul>
      <span style="font-size:14px;padding-left:6px">
      <b>
      &nbsp;Anmerkungen:
      </b></span>
      <br>
      <ul type="square">
      <li>F�r Studenten und Mitarbeiter der <b>anderen Fakult�ten</b> muss "wiso" entsprechend ersetzt werden<br> (z.b. durch <u>jura, phil, wing, mathe, etc.</u>)</li>
      <br>
      <li><b>WICHTIG: Dein Uni-Emailaccount muss bereits freigeschalten sein!</b><br> Hier gehts zur Freischaltung: <a href="https://www.freischaltung.uni-erlangen.de/freischaltung.shtml" target="_blank"><b>https://www.freischaltung.uni-erlangen.de</b></a> (nur im Uni-IntraNet erreichbar!)<br>
      <span style="font-size:11px">Das ist notwendig, da du nach der Registrierung einen <u><b>Aktivierungscode</b></u> an diese Emailadresse verschickt bekommst.</span></li>
      <br>
      <li>Deine Emailadresse ist f�r kein Mitglied von wiwistud.de sichtbar.</li>
      </ul>

      </td></tr></table>

      </td>

    </tr-->

    <tr>

         <td class="tableb" align="left">

         <b>Passwort</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="password" name="r_password" maxlength="20" size="36" value="<?php echo"$_Sre_password"; ?>">
         (min. 5 Zeichen)
         </td>

    </tr>

    <tr>

         <td class="tableb" align="left">

         <b>Passwort wiederholen</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="password" name="password2" maxlength="20" size="36">
         (min. 5 Zeichen)
         </td>

    </tr>

    <tr>

         <td class="tableb" align="left">

         <b>Geschlecht</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <select name="gender">

         <?php if($_Sre_gender != "") {

         if($_Sre_gender == "m") { ?>

         <option value="m" selected>m&auml;nnlich</option>   
         <option value="w">weiblich</option> 

         <?php } else { ?>

         <option value="m">m&auml;nnlich</option>   
         <option value="w" selected>weiblich</option> 

         <?php } 

         } else { ?>

         <option value="m">m&auml;nnlich</option>    
         <option value="w">weiblich</option> 

         <?php } ?>

         </select>

         </td>

    </tr>

     <tr>

         <td class="tableb" align="left">

         <b>Vorname</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="firstname" maxlength="20" size="36" value="<?php echo"$_Sre_firstname"; ?>">
         (min. 3 Zeichen)
         </td>

    </tr>

    <tr>

         <td class="tableb" align="left">

         <b>Nachname</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="lastname" maxlength="20" size="36" value="<?php echo"$_Sre_lastname"; ?>">
         (min. 3 Zeichen)
         </td>

    </tr>

    <tr>

         <td class="tableb" align="left">

         <b>Dein Status</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <select name="wisostudent" ONCHANGE="wisostud(this.value)">

         <option value="1"
         <?php if ($_Sre_wisostudent == "1")  { echo" selected"; } ?>
         >Bachelorstudent der WiSo</option>
                         
         <option value="2"
         <?php if ($_Sre_wisostudent == "2")  { echo" selected"; } ?>
         >Masterstudent der WiSo</option>

         <option value="3"
         <?php if ($_Sre_wisostudent == "3")  { echo" selected"; } ?>
         >Alumni der Wiso</option>
                   
         <option value="0"
         <?php if ($_Sre_wisostudent == "0")  { echo" selected"; } ?>
         >Kein Student / Absolvent der Wiso</option>

         </select>

         </td>

    </tr>

  </table>

<div id="bd_wisostudent">

  <table width="<?php echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

    <tr>

         <td class="tableb" align="left" width="50%">

         <b>Studiengang</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';" width="50%">

         <select name="study">

         <option value="bwl"
         <?php if ($_Sre_study == "bwl")  { echo" selected"; } ?>
         >Wirtschaftswissenschaften (Schwerpunkt BWL)</option>
         <option value="vwl"
         <?php if ($_Sre_study == "vwl")  { echo" selected"; } ?>
         >Wirtschaftswissenschaften (Schwerpunkt VWL)</option>
         <option value="info"
         <?php if ($_Sre_study == "info")  { echo" selected"; } ?>
         >Wirtschaftswissenschaften (Schwerpunkt Informatik)</option>
         <option value="paed"
         <?php if ($_Sre_study == "paed")  { echo" selected"; } ?>
         >Wirtschaftswissenschaften (Schwerpunkt P�dagogik)</option>
         <option value="int"
         <?php if ($_Sre_study == "int")  { echo" selected"; } ?>
         >International Business Studies</option>
         <option value="sozi"
         <?php if ($_Sre_study == "sozi")  { echo" selected"; } ?>
         >Sozial�konomik</option>

         </select>

         </td>
  
    </tr>
    
</table>

</div>

<div id="md_wisostudent">

  <table width="<?php echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

    <tr>

         <td class="tableb" align="left" width="50%">

         <b>Studiengang</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';" width="50%">

         <select name="mstudy">
 
         <option value="m_ap"
         <?php if ($userdata_study == "m_ap")  { echo" selected"; } ?>
         >Arbeitsmarkt und Personal</option>
                         
         <option value="m_eco"
         <?php if ($userdata_study == "m_eco")  { echo" selected"; } ?>
         >(Doctoral) Master of Science in Economics</option>

         <option value="m_fact"
         <?php if ($userdata_study == "m_fact")  { echo" selected"; } ?>
         >Finance, Auditing, Controlling, Taxation (FACT)</option>
                   
         <option value="m_ibs"
         <?php if ($userdata_study == "m_ibs")  { echo" selected"; } ?>
         >International Business Studies (MIBS)</option>

         <option value="m_iis"
         <?php if ($userdata_study == "m_iis")  { echo" selected"; } ?>
         >International Information Systems (IIS)</option>
                         
         <option value="m_mgm"
         <?php if ($userdata_study == "m_mgm")  { echo" selected"; } ?>
         >Management</option>

         <option value="m_marketing"
         <?php if ($userdata_study == "m_marketing")  { echo" selected"; } ?>
         >Marketing</option>
                   
         <option value="m_sozi"
         <?php if ($userdata_study == "m_sozi")  { echo" selected"; } ?>
         >Sozial�konomik</option>

         <option value="m_paed"
         <?php if ($userdata_study == "m_paed")  { echo" selected"; } ?>
         >Wirtschaftsp�dagogik</option>
         
         </select>


         </td>
  
    </tr>
    
</table>

</div>

<div id="d_wisostudent">

  <table width="<?php echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

    <tr>

         <td class="tableb" align="left" width="50%">

         <b>Dein aktuelles Fachsemester</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <select name="semester">

         <option value="1"
         <?php if ($_Sre_semester == "1")  { echo" selected"; } ?>
         >1</option>
         <option value="2"
         <?php if ($_Sre_semester == "2")  { echo" selected"; } ?>
         >2</option>
         <option value="3"
         <?php if ($_Sre_semester == "3")  { echo" selected"; } ?>
         >3</option>
         <option value="4"
         <?php if ($_Sre_semester == "4")  { echo" selected"; } ?>
         >4</option>
         <option value="5"
         <?php if ($_Sre_semester == "5")  { echo" selected"; } ?>
         >5</option>
         <option value="6"
         <?php if ($_Sre_semester == "6")  { echo" selected"; } ?>
         >6</option>
         <option value="7"
         <?php if ($_Sre_semester == "7")  { echo" selected"; } ?>
         >7</option>
         <option value="8"
         <?php if ($_Sre_semester == "8")  { echo" selected"; } ?>
         >8</option>
         <option value="9"
         <?php if ($_Sre_semester == "9")  { echo" selected"; } ?>
         >9</option>
         <option value="10"
         <?php if ($_Sre_semester == "10")  { echo" selected"; } ?>
         >10</option>

         </select>

         </td>

    </tr>

</table>

</div>

  <?php if ($_Sre_wisostudent == "0" || $_Sre_wisostudent == "3")  { ?>

    <script>
      d_sem = document.getElementById("d_wisostudent");
      bd_sem = document.getElementById("bd_wisostudent");
      md_sem = document.getElementById("md_wisostudent");
              
      d_sem.style.display = 'none';
      bd_sem.style.display = 'none';
      md_sem.style.display = 'none';
     
    </script>

  <?php 
    
  } 
    
  else if ($_Sre_wisostudent == "1" || !$_Sre_wisostudent) {
    
  ?>
    
      <script>
      
        bd_sem = document.getElementById("bd_wisostudent");
        md_sem = document.getElementById("md_wisostudent");
              
        bd_sem.style.display = 'block';
        md_sem.style.display = 'none';
            
       </script>
     
   <?php 
   
   } 
   
   else if ($_Sre_wisostudent == "2") { 
   
   ?>
     
        <script>
          bd_sem = document.getElementById("bd_wisostudent");        
          md_sem = document.getElementById("md_wisostudent");
          md_sem.style.display = 'block'; 
          bd_sem.style.display = 'none';
              
         </script>
          
     <?php
    
    }    

?>

<table width="<?php echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tablea" align="center">

    <input type="hidden" name="Aprinciples" value="accept"> 

    <input type="submit" class="buttons" name="reg_TOstep2" value="Weiter zu Schritt 2" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

    </td>
 
  </tr>

</form>

</table>
