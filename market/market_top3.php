
<table width="<?php  echo"$width"; ?>" cellpadding="0" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="left">

      <table cellspacing="0" cellpadding="4" style="width:100%">

       <tr>

        <td class="catbg">

        <a href="index.php?do=market" class="catFont">B�rse</a>

        </td>
        <td align="right" class="catbg">

         <?php  if ($sec == "new")  { ?>

        neue Anzeigen seit deinem letzten Besuch am <?php  echo"$DATEp, $DATEp2"; ?> Uhr: <b><?php  echo"$check_rows2"; ?></b>

        <?php  } else  { ?>
        
        Anzeigen gesamt: <b><?php  echo"$check_rows2"; ?></b>

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
<td width="65" align="center"><img src="images/templates/<?php  echo"$template"; ?>/critical.gif"></td>
      <td style="line-height:22px;" align="left">

<b>Hier findest du kosteng�nstige Angebote anderer Studenten und hast selbst die M�glichkeit etwas zu offerieren, 
<br>beispielsweise deine gebrauchten Lehrb�cher.</b>
<br>
Der Artikel verschwindet erst aus der Auswahl, wenn der Verk�ufer diesen wieder entfernt hat, sp�testens jedoch nach<br> 4 Wochen. 
Es kann somit unter Umst�nden vorkommen, dass bereits verkaufte Artikel noch ausgewiesen werden. 

       </td>

      </tr>

    </table>

   </td>

  </tr>

  <?php  } ?>

</table>

<?php  if ($sec == "")  { echo"<br>"; } ?>