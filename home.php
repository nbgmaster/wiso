<?php  if (!$do)  { ?>
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="left" class="catbg" width="60%">

    <b>Herzlich Willkommen</b>

    </td>

    </tr><tr>

    <td align="center" class="tableb">



    <span style="font-size:13px;line-height:24px">
    <b>Bachelorpioniere.de presents...</b></span>
   <br>
<span style="font-size:11px;line-height:24px">

    wiwistud.de - die Plattform für alle Bachelor- & Masterstudenten des Fachbereichs Wirtschaftswissenschaften <br>der
    Universität Erlangen-Nürnberg</b>
    </span>

    </td>

  </tr>

</table>


<br>

<table width="<?php  echo"$width"; ?>" cellpadding="0" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="left" class="catbg" width="60%" style="height:19px">

    &nbsp;<b>Nutze die vielen Vorteile bei uns</b>

    </td>

    </tr><tr>

    <td align="center" class="tableb" style="width:100%">

<table cellspacing="0" cellpadding="5" style="line-height:24px;width:100%"><tr><td class="tableb" align="center" width="60">
<img src="images/home/community_big.gif"></td><td class="tableb" valign="middle">
<span style="font-size:11px">
Diskutiere über <b>aktuelle Ereignisse und Vorlesungen</b> an deiner Fakultät
    </span>
</td></tr><tr><td class="tablea" align="center">
<img src="images/home/info.gif"></td><td class="tablea" valign="middle">
<span style="font-size:11px">
Finde Hilfe bei <b>inhaltlichen Fragen zu Klausuren oder Vorlesungen</b>

    </span>
</td></tr><tr><td class="tableb" align="center">
<img src="images/home/database.gif"></td><td class="tableb" valign="middle">
<span style="font-size:11px">
Unsere <b>Unterlagendatenbank</b> liefert dir Mitschriften aus Vorlesungen und Zusammenfassungen von Skripten
    </span>
</td></tr><tr><td class="tablea" align="center">
<img src="images/home/package.gif"></td><td class="tablea" valign="middle">
<span style="font-size:11px">
Durch unsere neue <b>Börse</b> kannst du bares Geld sparen, beispielsweise durch Kauf eines gebrauchten Buches

    </span>
</td></tr><tr><td class="tableb" align="center">
<img src="images/home/find.gif"></td><td class="tableb" valign="middle">
<span style="font-size:11px">
<b>Lehrstuhlwebsites</b> sowie wichtige Weblinks (z.B. zur Prüfungsanmeldung) erreichbar mit nur einem Mausklick
    </span>
</td></tr>
</table>

    </td>

  </tr>

</table>


<br>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="left" class="catbg">

    <b>Hinweise</b>

    </td>

    </tr><tr>

    <td align="center" class="tablea" style="width:100%">
    
<table style="width:100%"><tr>
<td width="65" align="center"><img src="images/home/warning.gif"></td>
<td style="line-height:20px;">
Dein Browser muss <b>Javascript</b> unterstützen und es darf nicht deaktiviert sein.
Desweiteren muss er <b>Cookies</b> akzeptieren.
<br>
Zur optimalen Darstellung von wiwistud.de empfehlen wir den <a href="http://www.firefox-browser.de" target="_blank">
<b><u>Firefox</u></b></a> oder einen verwandten Browser mit der Gecko-Engine.
<?php  if ($browser != "Netscape") { echo"<br>"; } ?>
Solltest du weitere Fragen haben, so kannst du einen Administrator kontaktieren. Wie das geht erfährst du in den 
<a href="index.php?do=faq"><u><b>FAQ</b></u></a>.
</td>
</tr></table>

    </td>

  </tr>

</table>

<?php  } else if ($do != "team") {

include("templates/no_permission.php");

}
