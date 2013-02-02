
<form action="index.php?action=logout" method="post">

<table cellpadding="0" cellspacing="1" border="0" width="<?php  echo"$width"; ?>" class="tableinborder">
   
 
<tr>

   <td align="left">
 
    <table cellspacing="0" cellpadding="4" width="100%">

      <tr>

        <td class="cellbg">

        <b>Hallo <?php  echo"$userdata_name"; ?></b>

        <?php  if ($userdata_admin == "1") { ?>
     
        [<a href="index.php?do=admin">Admin</a>]

        <?php  } ?>

        </td>

        <td align="right" class="cellbg">

        <b>Dein letzter Besuch war am: <?php  echo"$DATEp, $DATEp2"; ?> |

        aktuelles Datum: <?php  echo"$c_date, $c_time"; ?>

        </td>

      </tr>

    </table>

    </td>
   
 </tr>
   
  <tr>
   
  <td class="tableb">

    <table cellspacing="0" cellpadding="6" width="100%">

      <tr>

        <td style="border-right:<?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>">

        <span style="font-size : <?php  echo"$fontsize_header"; ?>px;line-height:22px">

        <b>

        Semester&uuml;bergang: Aktualisierung deiner Daten und Bewertung vergangener Lehrveranstaltungen 

 
        </span></b>

        </td>

        <td align="center" width="95">

         <input type="submit" class="buttons" value="Abmelden" name="submit_login_data" style="width:90px;" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

        <?php  echo"$table_end"; ?> 

      </td>

    </tr>

  </form>

  </table>

  </td>

 </tr>

</table>

<br>
