
  <table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="cellbg" align="center">

    <b>&Uuml;berpr&uuml;fen der Stammdaten</b>

    </td>

  </tr>

</table>
     
  <table width="<?php  echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">

    <?php 

         if ($_Sre_gender == "m")  { 

             $_Sre_gender2 = "male.gif"; 

         } 

         else  { 

             $_Sre_gender2 = "female.gif"; 
  
         }


    ?>
               
    <tr>

         <td class="tablea" align="left" width="80" align="left">

         <b>Nickname</b>

         </td>

         <td class="tableb" align="left" width="150" align="left">

         <?php  echo"$_Sre_nickname"; ?> <img src="images/templates/<?php echo"$template/$_Sre_gender2";?>">

         </td>


         <td class="tablea" align="left" width="80">

         <b>Email</b>

         </td>

         <td class="tableb" align="left" width="400">

         <?php  echo"$_Sre_email"; ?>

         </td>

    </tr>

    <tr>


         <td class="tablea" align="left">

         <b>Vorname</b>

         </td>

         <td class="tableb" align="left">

         <?php  echo"$_Sre_firstname"; ?>

         </td>

    <td class="tablea" align="left">

         <b>Nachname</b>

         </td>

         <td class="tableb" align="left">

         <?php  echo"$_Sre_lastname"; ?>

         </td>


    </tr>

    <?php  if ($_Sre_wisostudent == "1")  { ?>  


    <tr>

       <td class="tablea" align="left">

         <b>Semester</b>

         </td>

         <td class="tableb" align="left">

         <?php  echo"$_Sre_semester"; ?>

         </td>


   
         <td class="tablea" align="left">

         <b>Studiengang</b>

         </td>

         <td class="tableb" align="left">

        <?php  

         if ($_Sre_study == "bwl")  { $_Sre_study2 = "Wirtschaftswissenschaften (Schwerpunkt BWL)"; }
         if ($_Sre_study == "vwl")  { $_Sre_study2 = "Wirtschaftswissenschaften (Schwerpunkt VWL)"; }
         if ($_Sre_study == "info")  { $_Sre_study2 = "Wirtschaftswissenschaften (Schwerpunkt Informatik)"; }
         if ($_Sre_study == "paed")  { $_Sre_study2 = "Wirtschaftswissenschaften (Schwerpunkt P&auml;dagogik)"; }
         if ($_Sre_study == "int")  { $_Sre_study2 = "International Business Studies"; }
         if ($_Sre_study == "sozi")  { $_Sre_study2 = "Sozial&ouml;konomik"; }

         echo"$_Sre_study2"; ?>

         </td>

    </tr>

    <?php  } ?>

</table>

<br>


<!--table width="<?php  echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tableb" align="left">

    <span style="font-size:12px;line-height:24px">

    <b>WICHTIG:</b>

    <ul type="square">
    <li>Solltest du in den n&auml;chsten 24 Stunden <b>keinen Aktivierungscode</b> an deine Emailadresse <b><?php  echo"$_Sre_email"; ?></b> zugeschickt bekommen, dann
    melde dich bei einem Administrator.</li>
    <ul>

    </span>

    </td>

  </tr>

</table>

<br-->

<table width="<?php  echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tableb" align="left">

<b>Wichtig ist die Angabe einer g&uuml;ltigen Emailadresse, da Du dich sonst nicht freischalten kannst!</b>

    </td>

   <td class="tablea">

   <input type="hidden" name="Aprinciples" value="accept">

   <input onclick="location.href='index.php?do=register'" type="submit" style="width:210px" class="buttons" value="Stammdaten nochmal &auml;ndern" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

   </td>
 
  </tr>

  <tr>

    <td class="tableb" align="left">

<b>Alle anderen Einstellungen kannst Du sp&auml;ter jederzeit im Profil &auml;ndern.</b>

    </td>

   <td class="tablea">

   <input onclick="location.href='index.php?do=register&step=3'" type="submit" name="reg_back" style="width:210px" class="buttons" value="Einstellungen nochmal &auml;ndern" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

   </td>
 
  </tr>

</table>

<br>

<table width="<?php  echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tablea" align="center">

    <input type="submit" class="buttons" name="send_reg_data" value="Registrierung abschlie&szlig;en" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

    </td>
 
  </tr>

</form>

</table>
