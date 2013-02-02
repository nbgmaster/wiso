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

function confirmSem() {

  var semesterT = document.getElementById("semester").value;
  return semesterT;

}

</script>


<form name="reg_form" action="index.php?do=update" method="post" onsubmit="if(document.getElementById('wisostudent').value==1)return confirm('Wenn du im SS 09 im '  + confirmSem() +  '. Semester bist, dann klicke auf OK, ansonsten korrigiere deine Angabe mit einem Klick auf Abbrechen.');">

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="tableinborder">



  <tr>



        <td class="catbg" align="left">



        <span class="big">

        <b>Forenupdate :: Aktualisiere deine Stammdaten</b>

        </span>



        </td>



  </tr>



</table>

 <table width="<?php  echo"$width"; ?>" cellpadding="10" cellspacing="1" border="0" class="tableinborder">

  <tr>

   <td align="justify" class="tablea" style="line-height:24px">

   <span style="font-size : 12px;">

  <b>Bitte helfe mit das Forum auf dem neuesten Stand zu halten, indem du deine Angaben &uuml;berpr&uuml;fst
  und ggf. anpasst.
   </span>

   </td>

  </tr>

</table>


<br>

  <table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

  <?php  /* if ($nicklength < 3)  {  ?>

     <tr>

         <td class="tableb" align="left">

         <b><span style="font-size:13px">Nickname</span></b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="r_nickname" id="r_nickname" onblur='ajaxFunction()' maxlength="20" size="40" value="<?php echo"$upp_nickname";?>">
         (min. 3 Zeichen)
         <div id='ajaxDiv'></div>

         </td>

    </tr>

    <?php  } ?>

     <tr>

         <td class="tableb" align="left" width="50%">

         <b>Vorname</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';" width="50%">

         <input type="text" name="firstname" maxlength="20" size="40" value="<?php echo"$upp_firstname";?>">
         (min. 3 Zeichen)
         </td>

    </tr>

    <tr>

         <td class="tableb" align="left">

         <b>Nachname</b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="lastname" maxlength="20" size="40" value="<?php echo"$upp_lastname";?>">
         (min. 3 Zeichen)
         </td>

    </tr>

    <?php  */ ?>

    <tr>

         <td class="tableb" align="left" width="40%">

         <b><span style="font-size:13px">Dein Status</span></b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';" width="40%">

         <select name="wisostudent" id="wisostudent" ONCHANGE="wisostud(this.value)" style="font-size:13px">

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

 <br>

<?php  if ($update_wiso == 1)  { ?>
<div id="bd_wisostudent" style="display:block">
<?php  } else { ?>
<div id="bd_wisostudent" style="display:none">
<?php  } ?>

  <table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

    <tr>

         <td class="tableb" align="left" width="50%">

         <b><span style="font-size:13px">Studiengang</span></b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';" width="50%">

         <select name="study" style="font-size:13px">

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

         </select>

         </td>

    </tr>
    
</table>

</div>


<?php  if ($update_wiso == 2)  { ?>
<div id="md_wisostudent" style="display:block">
<?php  } else { ?>
<div id="md_wisostudent" style="display:none">
<?php  } ?>

  <table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

    <tr>

         <td class="tableb" align="left" width="50%">

         <b><span style="font-size:13px">Studiengang</span></b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';" width="50%">

         <select name="mstudy" style="font-size:13px">
 
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

<?php  if ($update_wiso == 1 || $update_wiso == 2)  { ?>
<div id="d_wisostudent" style="display:block">
<?php  } else { ?>
<div id="d_wisostudent" style="display:none">
<?php  } ?>

  <table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

    <tr>

         <td class="tableb" align="left" width="50%">

         <b><span style="font-size:13px">Dein Fachsemester im <u>Wintersemester 09/10</u>?</span></b>

         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <select name="semester" id="semester" style="font-size:13px">

         <option value="1"
         <?php  if ($userdata_semester == "1")  { echo" selected"; } ?>
         >1</option>
         <option value="2"
         <?php  if ($userdata_semester == "2")  { echo" selected"; } ?>
         >2</option>
         <option value="3"
         <?php  if ($userdata_semester == "3")  { echo" selected"; } ?>
         >3</option>
         <option value="4"
         <?php  if ($userdata_semester == "4")  { echo" selected"; } ?>
         >4</option>
         <option value="5"
         <?php  if ($userdata_semester == "5")  { echo" selected"; } ?>
         >5</option>
         <option value="6"
         <?php  if ($userdata_semester == "6")  { echo" selected"; } ?>
         >6</option>
         <option value="7"
         <?php  if ($userdata_semester == "7")  { echo" selected"; } ?>
         >7</option>
         <option value="8"
         <?php  if ($userdata_semester == "8")  { echo" selected"; } ?>
         >8</option>
         <option value="9"
         <?php  if ($userdata_semester == "9")  { echo" selected"; } ?>
         >9</option>
         <option value="10"
         <?php  if ($userdata_semester == "10")  { echo" selected"; } ?>
         >10</option>
         
         </select>

         </td>

    </tr>

</table>

<br>

 <table width="<?php  echo"$width"; ?>" cellpadding="10" cellspacing="1" border="0" class="tableinborder">

  <tr>

   <td align="justify" class="tableb" style="line-height:24px">

   <span style="font-size : 13px;">

  <b><span style="color:red">Hinweis:</span> &Uuml;berpr&uuml;fe deine Semesterzahl auf Richtigkeit.

   </span>

   </td>

  </tr>

</table>


<br>  

</div>

<?php   /* ?>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

   <tr>

         <td class="tableb" align="left" width="250">

        <table cellspacing="0" cellpadding="0"><tr><td>

         <img src="images/templates/<?php echo"$template";?>/studivz2.gif">

         </td><td>

         &nbsp;<span style="font-size : <?php  echo"$fontsize_header"; ?>px;"><b>Link zu deinem studivz-Profil</b></span>


         </td></tr></table>


         </td>

         <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="studivz" maxlength="100" size="70"> (optional)

         </td>

    </tr>

</table>

<?php  */ ?>

<table width="<?php  echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tablea" align="center">

    <input type="hidden" name="Aprinciples" value="accept"> 

    <input type="submit" class="buttons" name="upd_send_data" value="Daten speichern und fortfahren" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

    </td>

  </tr>

</form>

</table>
