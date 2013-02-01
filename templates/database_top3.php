
<table width="<?php  echo"$width"; ?>" cellpadding="0" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="left">

      <table cellspacing="0" cellpadding="4" style="width:100%">

       <tr>

        <td class="catbg">

        <a href="index.php?do=database" class="catFont">Unterlagendatenbank</a>

        </td>
        <td align="right" class="catbg">

         <?php  if ($sec == "new")  { ?>

        neue Unterlagen seit deinem letzten Besuch am <?php  echo"$DATEp, $DATEp2"; ?> Uhr: <b><?php  echo"$check_rows2"; ?></b>

        <?php  } else  { ?>
        
        Unterlagen gesamt: <b><?php  echo"$check_rows2"; ?></b>

        <?php  } ?>

        </td>

       </tr>

      </table>

    </td>

  </tr>

  <?php  if ($sec == "")  { ?>

  <tr>

   <td class="tableb">

    <table cellpadding="5">

     <tr>

      <td align="left">

<table style="width:100%"><tr>
<td width="65" align="center"><img src="images/templates/<?php  echo"$template"; ?>/critical.gif"></td>
<td style="line-height:18px;">

       Diese Datenbank beinhaltet eine Sammlung aus hilfreichen <b>Stoffzusammenfassungen und Mitschriften vergangener Vorlesungen</b> oder
       sonstigen nützlichen Dateien für das Studium.
       <br>
       Jeder hat hier die Möglichkeit seine selbsterstellten Dokumente für alle anderen Komilliton(inn)en online zu stellen!
  </td></tr></table>
       </td>

      </tr>

    </table>

   </td>

  </tr>

  <?php  } ?>

</table>

<?php  if ($sec == "")  { echo"<br>"; } ?>