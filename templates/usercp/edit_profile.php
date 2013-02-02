<script type="text/javascript" src="javascript/form_editprofile.js" language="JavaScript1.2"></script>


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


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

 <form name="usercp_form" action="index.php?do=usercp&sec=edit_profile&module=change" method="post" onsubmit="return check_user()">
              
  <tr>

         <td class="tableb" align="left">

         <b>Geschlecht</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <select name="gender">

         <?php  if($userdata_gender == "m") { ?>

         <option value="m" selected>m&auml;nnlich</option>   
         <option value="w">weiblich</option> 

         <?php  } else { ?>

         <option value="m">m&auml;nnlich</option>   
         <option value="w" selected>weiblich</option> 

         <?php  }  ?>

         </select>

         </td>

    </tr>


     <tr>

         <td class="tableb" align="left" width="50%">

         <b>Vorname</b>

         </td>

         <td class="tableb" align="left" width="50%" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="firstname" maxlength="20" size="40" value="<?php  echo"$userdata_firstname"; ?>">

         </td>

    </tr>

     <tr>

         <td class="tableb" align="left">

         <b>Nachname</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="lastname" maxlength="20" size="40" value="<?php  echo"$userdata_lastname"; ?>">

         </td>

    </tr>

     <tr>

         <td class="tableb" align="left">

         <b>Geburtstag</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <select name="birthday">
         <option value=""></option>

         <?php 

         for ($CountTotal = 1; $CountTotal <= 31; $CountTotal++)  {  
  
            if ($CountTotal == $userdata_birthday)  {

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
  
            if ($CountTotal2 == $userdata_birthmonth)  {

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

              if ($CountTotal3 == $userdata_birthyear)  {

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

         <b>Dein Status</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <select name="wisostudent" ONCHANGE="wisostud(this.value)">
 
         <option value="1"
         <?php  if ($userdata_wisostudent == "1")  { echo" selected"; } ?>
         >Bachelorstudent der WiSo</option>
                         
         <option value="2"
         <?php  if ($userdata_wisostudent == "2")  { echo" selected"; } ?>
         >Masterstudent der WiSo</option>

         <option value="3"
         <?php  if ($userdata_wisostudent == "3")  { echo" selected"; } ?>
         >Alumni der Wiso</option>
                   
         <option value="0"
         <?php  if ($userdata_wisostudent == "0")  { echo" selected"; } ?>
         >Kein Student / Absolvent der Wiso</option>

         </select>

         </td>

    </tr>
    
 </table>

<div id="bd_wisostudent">

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

     <tr>

         <td class="tableb" align="left" width="50%">

         <b>Studiengang</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';" width="50%"-->

         <select name="study">
 
         <option value="bwl"
         <?php  if ($userdata_study == "bwl")  { echo" selected"; } ?>
         >Wirtschaftswissenschaften (Schwerpunkt BWL)</option>
                         
         <option value="vwl"
         <?php  if ($userdata_study == "vwl")  { echo" selected"; } ?>
         >Wirtschaftswissenschaften (Schwerpunkt VWL)</option>

         <option value="info"
         <?php  if ($userdata_study == "info")  { echo" selected"; } ?>
         >Wirtschaftswissenschaften (Schwerpunkt Informatik)</option>
                   
         <option value="paed"
         <?php  if ($userdata_study == "paed")  { echo" selected"; } ?>
         >Wirtschaftswissenschaften (Schwerpunkt P&auml;dagogik)</option>

         <option value="int"
         <?php  if ($userdata_study == "int")  { echo" selected"; } ?>
         >International Business Studies</option>
                         
         <option value="sozi"
         <?php  if ($userdata_study == "sozi")  { echo" selected"; } ?>
         >Sozial&ouml;konomik</option>

         <option value="ing"
         <?php  if ($userdata_study == "ing")  { echo" selected"; } ?>
         >Wirtschaftsingenieurwesen</option>

         </select>
         
         </td>

    </tr>
    
</table>
    
</div>

<div id="md_wisostudent">

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

     <tr>

         <td class="tableb" align="left" width="50%">

         <b>Studiengang</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';" width="50%"-->

         <select name="mstudy">
 
         <option value="m_ap"
         <?php  if ($userdata_study == "m_ap")  { echo" selected"; } ?>
         >Arbeitsmarkt und Personal</option>
                         
         <option value="m_eco"
         <?php  if ($userdata_study == "m_eco")  { echo" selected"; } ?>
         >(Doctoral) Master of Science in Economics</option>

         <option value="m_fact"
         <?php  if ($userdata_study == "m_fact")  { echo" selected"; } ?>
         >Finance, Auditing, Controlling, Taxation (FACT)</option>
                   
         <option value="m_ibs"
         <?php  if ($userdata_study == "m_ibs")  { echo" selected"; } ?>
         >International Business Studies (MIBS)</option>

         <option value="m_iis"
         <?php  if ($userdata_study == "m_iis")  { echo" selected"; } ?>
         >International Information Systems (IIS)</option>
                         
         <option value="m_mgm"
         <?php  if ($userdata_study == "m_mgm")  { echo" selected"; } ?>
         >Management</option>

         <option value="m_marketing"
         <?php  if ($userdata_study == "m_marketing")  { echo" selected"; } ?>
         >Marketing</option>
                   
         <option value="m_sozi"
         <?php  if ($userdata_study == "m_sozi")  { echo" selected"; } ?>
         >Sozial&ouml;konomik</option>

         <option value="m_paed"
         <?php  if ($userdata_study == "m_paed")  { echo" selected"; } ?>
         >Wirtschaftsp&auml;dagogik</option>
         
         </select>

         </td>

    </tr>
    
</table>
    
</div>

<div id="d_wisostudent">

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

     <tr>

         <td class="tableb" align="left" width="50%">

         <b>Semester</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';" width="50%">

         <select name="semester">
 
         <option value="1"<?php  if ($userdata_semester == "1")  { echo" selected"; } ?>>1</option>
         <option value="2"<?php  if ($userdata_semester == "2")  { echo" selected"; } ?>>2</option>
         <option value="3"<?php  if ($userdata_semester == "3")  { echo" selected"; } ?>>3</option>
         <option value="4"<?php  if ($userdata_semester == "4")  { echo" selected"; } ?>>4</option>
         <option value="5"<?php  if ($userdata_semester == "5")  { echo" selected"; } ?>>5</option>
         <option value="6"<?php  if ($userdata_semester == "6")  { echo" selected"; } ?>>6</option>
         <option value="7"<?php  if ($userdata_semester == "7")  { echo" selected"; } ?>>7</option>
         <option value="8"<?php  if ($userdata_semester == "8")  { echo" selected"; } ?>>8</option>
         <option value="9"<?php  if ($userdata_semester == "9")  { echo" selected"; } ?>>9</option>
         <option value="10"<?php  if ($userdata_semester == "10")  { echo" selected"; } ?>>10</option>

         </td>

    </tr>

</table>

</div>

  <?php  if ($userdata_wisostudent == "0" || $userdata_wisostudent == "3")  { ?>

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
    
  else if ($userdata_wisostudent == "1") {
    
  ?>
    
      <script>
      
        bd_sem = document.getElementById("bd_wisostudent");
        md_sem = document.getElementById("md_wisostudent");
              
        bd_sem.style.display = 'block';
        md_sem.style.display = 'none';
            
       </script>
     
   <?php  
   
   } 
   
   else if ($userdata_wisostudent == "2") { 
   
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

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
   
    <tr>

         <td class="tableb" align="left" width="50%">

        <table cellspacing="0" cellpadding="0"><tr><td>

         <img src="images/templates/<?php echo"$template";?>/studivz2.gif">&nbsp;

         </td><td>

         <span style="font-size : <?php  echo"$fontsize_header"; ?>px;"><b>Link zu deinem studivz-Profil</b></span>

         </td></tr></table>


         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';" width="50%">

         <input type="text" name="studivz" maxlength="100" size="48" value="<?php  echo"$userdata_studivz"; ?>">

         </td>

    </tr>


     <tr>

         <td class="tableb" align="left">

         <b>Herkunft</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="hometown" maxlength="50" size="40" value="<?php  echo"$userdata_hometown"; ?>">

         </td>

    </tr>

     <tr>

         <td class="tableb" align="left">

         <b>Wohnort</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="place" maxlength="20" size="40" value="<?php  echo"$userdata_place"; ?>">

         </td>

    </tr>

     <tr>

         <td class="tableb" align="left">

         <b>Stra&szlig;e, PLZ, etc.</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="street" maxlength="50" size="40" value="<?php  echo"$userdata_street"; ?>">

         </td>

    </tr>

     <tr>

         <td class="tableb" align="left">

         <b>Telefonnummer</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="telefon" maxlength="20" size="40" value="<?php  echo"$userdata_telefon"; ?>">

         </td>

    </tr>

     <tr>

         <td class="tableb" align="left">

         <b>Handynummer</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="handy" maxlength="20" size="40" value="<?php  echo"$userdata_handy"; ?>">

         </td>

    </tr>

     <tr>

         <td class="tableb" align="left">

         <b>Homepage</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="homepage" maxlength="30" size="40" value="<?php  echo"$userdata_homepage"; ?>">

         </td>

    </tr>

     <tr>

         <td class="tableb" align="left">

         <b>ICQ</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="icq" maxlength="10" size="40" value="<?php  echo"$userdata_icq"; ?>">

         </td>

    </tr>

     <tr>

         <td class="tableb" align="left">

         <b>Nebenjob</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="job" maxlength="50" size="40" value="<?php  echo"$userdata_job"; ?>">

         </td>

    </tr>

     <tr>

         <td class="tableb" align="left">

         <b>Hobbys</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="hobbys" maxlength="200" size="40" value="<?php  echo"$userdata_hobbys"; ?>">

         </td>

    </tr>

</table>
