<?php  if ($friendnumbers == "0")  { echo"</td></tr></table><br>Du hast noch keine Benutzer eingetragen."; } ?>

      </td>

    </tr>

  </table>

  </td>

  <td>&nbsp;</td>

  <td valign="top" align="left">

  <form action="index.php?do=addbuddy" method="post">

  <table cellpadding="4" cellspacing="1" class="tableinborder" width="100%">
 
    <tr>

      <td class="tableb"> 

      <b>Benutzer hinzuf&uuml;gen:</b> 
      <input type="hidden" name="buddyfunction" value="<?php  echo"$this_function"; ?>">
      <input type="text" name="buddyname" size="30">&nbsp;<input type="submit" value="Hinzuf&uuml;gen" class="buttons" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">
     
      <font class="small">

      <br><br>

      <?php  if ($sec == "buddylist")  { ?>

      Gebe hier den Namen eines Benutzers ein, der deiner Freundesliste hinzugef&uuml;gt werden soll.
      <br>
      Alternativ kannst du den gew&uuml;nschten Benutzer auch &uuml;ber die <a href="index.php?do=members">Mitgliederliste</a> suchen und hinzuf&uuml;gen.

      <?php  } if ($sec == "ignorelist")  { ?>

      Gebe hier den Namen eines Benutzers ein, der deiner Ignorier-Liste hinzugef&uuml;gt werden soll. 
      <br>
      Der User kann dir dann keine privaten Nachrichten oder Emails mehr schreiben.

      <?php  } ?>

      </font>

      </td>

    </tr>

  </table>

  </form>

  </td>

 </tr>

</table>