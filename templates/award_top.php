
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

        <span style="font-size : 13px;line-height:22px">

        <b>...und zum Schluss ein kleines EasterEGG von uns für euch!</b>

        </span>

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

    <table cellspacing="1" cellpadding="6" width="100%" class="tableinborder">

      <tr><td class="tablea">
                <span style="font-size:13px;line-height:26px">

Wir möchten mit eurer Hilfe die
<br><br><span style="font-size:18px;"><center><b><span style="color:green">beste</span> sowie die
<span style="color:red">schlechteste</span> Lehrveranstaltung</center></span><br>
des vergangenen Wintersemesters 07/08</b> mit einem Award prämieren.

</span>
      </td></tr></table>

      <br>


    <table cellspacing="1" cellpadding="6" width="100%" class="tableinborder">

      <tr><td class="tableb">
                <span style="font-size : 13px;line-height:26px">
                Deshalb kannst du hier den Lehrstühlen Schulnoten zwischen 1 und 6 vergeben.
<b><u>Bitte urteile fair und objektiv!</u></b>

Wenn du nicht an dieser Umfrage teilnehmen möchtest, kannst du die Auswahlboxen einfach
unverändert lassen.
   </td></tr></table>

      <br>

          <table cellspacing="1" cellpadding="6" width="100%" class="tableinborder">

      <tr><td class="tablea">
                <span style="font-size : 13px;line-height:26px">

<b>Unter allen Teilnehmern verlosen wir 2 Kinogutscheine für das Cinecitta, einen
Büchergutschein vom Hugendubel sowie einen Cocktailgutschein in der Skybar.</b>

   </td></tr></table>

      <br>

          <table cellspacing="1" cellpadding="6" width="100%" class="tableinborder">

      <tr><td class="tableb">
                <span style="font-size : 13px;line-height:26px">
<b><span style="color:red">Beachte:</span></b> Eine spätere Teilnahme / Änderung ist nicht mehr möglich!
<br>
<b>Deine Daten werden <u>anonym</u> und <u>streng vertraulich</u> behandelt und an keine Dritten
weitergegeben.
</span>
      </td></tr></table>



<br>

<form name="award_form" action="index.php" method="post">

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="tableinborder">

  <tr>

        <td class="catbg" align="left">

        <span class="big">

        <b>Welche Gesamtnote würdest du den folgenden Veranstaltungen geben? Note 1 (sehr gut) bis 6 (ungenügend)</b>

        </span>

        </td>

  </tr>

</table>

<br>
