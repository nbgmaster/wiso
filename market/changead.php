      <table cellspacing="1" cellpadding="3" width="<?php  echo"$width"; ?>" class="tableinborder">

       <tr>

        <td class="catbg">

        <a href="index.php?do=market" class="catFont">:: wiwistud.Börse</a>
        &nbsp;&nbsp;:: <a href="index.php?do=market&sec=myads" class="catFont">Meine Anzeigen</a>
        &nbsp;&nbsp;:: Anzeige bearbeiten

        </td>

       </tr>

      </table>

<br>

<script type="text/javascript" language="JavaScript1.2">

repeat = 0;

  function ChooseLectures(WhichSem)  {  


    if (WhichSem == "stuff")  {

        lectures = "<center>Stelle deinen Artikel in diese Kategorie falls er keiner Vorlesung zuordbar ist.</center>";

    }

    if (WhichSem.substr(3,4) == "1")  {

        lectures = "<b>Vorlesung:</b><br><br> <select name=\"lecture\" style=\"width:250px\"><option value=\"UMV\">Unternehmen, Märkte, Volkswirtschaften</option><option value=\"UU\">Unternehmer & Unternehmen</option><option value=\"IT\">Grundlagen des E-Business</option><option value=\"BF\">Buchführung</option><option value=\"FM\">Finanzmathematik</option><option value=\"LA\">Lineare Algebra</option></select>";

    }

    if (WhichSem.substr(3,4) == "2")  {

        lectures = "<b>Vorlesung:</b><br><br> <select name=\"lecture\" style=\"width:250px\"><option value=\"mikro\">Mikroökonomie</option><option value=\"makro\">Makroökonomie</option><option value=\"absatz\">Absatz / Marketing</option><option value=\"jahresabschluss\">Jahresabschluss</option><option value=\"recht\">Privat- und Handelsrecht I</option><option value=\"ITp\">Internetpraktikum</option></select>";

    }

    if (WhichSem.substr(3,4) == "3")  {

        lectures = "<b>Vorlesung:</b><br><br> <select name=\"lecture\" style=\"width:250px\"><option value=\"stat\">Statistik</option><option value=\"prod\">Produktion, Logistik, Beschaffung</option><option value=\"wus\">Wirtschaft & Staat</option><option value=\"recht2\">Privat- und Handelsrecht II</option><option value=\"oerecht\">Öffentliches Recht I</option></select>";

    }

     if (WhichSem.substr(3,4) == "4")  {

        lectures = "<b>Vorlesung:</b><br><br> <select name=\"lecture\" style=\"width:250px\"><option value=\"stat2\">Praxis der emp. Wirtschaftsforschung</option><option value=\"EwA\">Einführung in das wissenschaftl. Arbeiten</option><option value=\"praes\">Präsentationsfähigkeiten</option><option value=\"oerecht2\">Öffentliches Recht II</option></select>";

    }

    if (WhichSem == "bwl")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"control\">Kostenrechnung und Controlling</option><option value=\"intuf\">Internationale Unternehmensführung</option><option value=\"invest\">Investition und Finanzierung</option><option value=\"stratint\">Strateg. und Internat. Management</option><option value=\"intacc\">International Accounting and Controlling</option><option value=\"markman\">Marketing Management</option><option value=\"logi\">Operations and Logistics</option><option value=\"entrepreneuer\">Innovation and Entrepreneurship</option><option value=\"finanz\">Finanzierung</option><option value=\"tax\">Taxation</option><option value=\"bpaed\">Betriebspädagogik</option></select>";

    }

    if (WhichSem == "vwl")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><<option value=\"auw\">Außenwirtschaft</option><option value=\"OeoeS\">Ökonomie des öffentlichen Sektors</option><option value=\"arbp\">Arbeitsmarktpolitik</option><option value=\"wettbp\">Wettbewerbstheorie und –politik</option><option value=\"apb\">Arbeit, Personal und Bildung</option><option value=\"EoM\">Economics of Management</option><option value=\"QwF\">Quantitative Wirtschaftsforschung</option><option value=\"wp\">Wirtschaftspolitik</option><option value=\"money\">Money and Capital Markets</option><option value=\"coopst\">Cooperative Studies</option></select>";

    }

    if (WhichSem == "info")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"is\">Innovation Strategy</option><option value=\"innot\">Innovation Technology</option><option value=\"mtc\">Managing Technological Change</option><option value=\"ebm\">E-Business Management</option></select>";

    }

    if (WhichSem == "wipaed")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"gwip\">Grundlagen der Wipäd</option><option value=\"praesmod\">Präsentations- und Moderationstechniken</option><option value=\"berufwb\">Berufliche Weiterbildung</option><option value=\"paedsem\">Betriebspädagogisches Seminar</option><option value=\"projstudi\">Erkundungsprojekt / Schulpraktische Studien</option><option value=\"zweitfach\">Module der Zweitfach-Vertiefung</option></select>";

    }

    if (WhichSem == "intbus")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"intrecht1\">Europäisches und Internationales Recht</option><option value=\"angel\">Angloamerikanische Gesellschaften</option><option value=\"europglob\">Europäisierung & Globalisierung</option><option value=\"intbez\">Internationale Beziehungen</option><option value=\"intstud\">Internationale Studien</option><option value=\"regional\">Regionalstudien</option><option value=\"romanisch\">Romanischsprachige Gesellschaften</option>";

    }

    if (WhichSem == "sozi")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"sozio\">Soziologie</option><option value=\"transbez\">Internat. und transnationale Beziehungen</option><option value=\"regio\">Regionen im internationalen System</option><option value=\"grundpsy\">Grundl. + Anwend.felder d. Sozialpsychologie</option><option value=\"empsozi\">Einführung in empirische Sozialforschung</option><option value=\"compana\">Computergestützte Datenanalyse</option><option value=\"intkom\">Internationale Kommunikation</option><option value=\"personal\">Personal und Organisation</option><option value=\"anamgesell\">Analyse moderner Gesellschaften</option><option value=\"empmus\">Empirische Methoden und Statistik</option><option value=\"konsum\">Konsumentenverhalten</option><option value=\"soziprakt\">Soziologisches Praktikum</option><option value=\"sozialp\">Sozial- und Arbeitspolitik</option><option value=\"spezkom\">Spezielle Kommunikationswissenschaft</option><option value=\"wirtorgsoz\">Wirtschafts- und Organisationssoziologie</option><option value=\"wsugesch\">Wirt.-, Sozial- u. Unternehmensgeschichte</option></select>";

    }

    if (WhichSem == "sonstige")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"daten\">Datenermittlung und Datenanalyse</option><option value=\"arbeitsr\">Arbeitsrecht</option><option value=\"gesellr\">Unternehmens- und Gesellschaftsrecht</option><option value=\"versr\">Versicherungswesen</option></select>";

    }


    document.getElementById("LecturesField").innerHTML = lectures;

    if (repeat == 0)  {

<?php 

if ($lecture == "UMV")  { ?> document.market_form.lecture.selectedIndex = 0; <?php  }
if ($lecture == "UU")  { ?> document.market_form.lecture.selectedIndex = 1; <?php  }
if ($lecture == "IT")  { ?> document.market_form.lecture.selectedIndex = 2; <?php  }
if ($lecture == "BF")  { ?> document.market_form.lecture.selectedIndex = 3; <?php  }
if ($lecture == "FM")  { ?> document.market_form.lecture.selectedIndex = 4; <?php  }
if ($lecture == "lA")  { ?> document.market_form.lecture.selectedIndex = 5; <?php  }

if ($lecture == "mikro")  { ?> document.market_form.lecture.selectedIndex = 0; <?php  }
if ($lecture == "makro")  { ?> document.market_form.lecture.selectedIndex = 1; <?php  }
if ($lecture == "absatz")  { ?> document.market_form.lecture.selectedIndex = 2; <?php  }
if ($lecture == "jahresabschluss")  { ?> document.market_form.lecture.selectedIndex = 3; <?php  }
if ($lecture == "recht")  { ?> document.market_form.lecture.selectedIndex = 4; <?php  }
if ($lecture == "ITp")  { ?> document.market_form.lecture.selectedIndex = 5; <?php  }

if ($lecture == "stat")  { ?> document.market_form.lecture.selectedIndex = 0; <?php  }
if ($lecture == "prod")  { ?> document.market_form.lecture.selectedIndex = 1; <?php  }
if ($lecture == "wus")  { ?> document.market_form.lecture.selectedIndex = 2; <?php  }
if ($lecture == "recht2")  { ?> document.market_form.lecture.selectedIndex = 3; <?php  }
if ($lecture == "oerecht")  { ?> document.market_form.lecture.selectedIndex = 4; <?php  }

if ($lecture == "stat2")  { ?> document.market_form.lecture.selectedIndex = 0; <?php  }
if ($lecture == "EwA")  { ?> document.market_form.lecture.selectedIndex = 1; <?php  }
if ($lecture == "praes")  { ?> document.market_form.lecture.selectedIndex = 2; <?php  }
if ($lecture == "oerecht2")  { ?> document.market_form.lecture.selectedIndex = 3; <?php  }

if ($lecture == "control")  { ?> document.market_form.lecture.selectedIndex = 0; <?php  }
if ($lecture == "intuf")  { ?> document.market_form.lecture.selectedIndex = 1; <?php  }
if ($lecture == "invest")  { ?> document.market_form.lecture.selectedIndex = 2; <?php  }
if ($lecture == "stratint")  { ?> document.market_form.lecture.selectedIndex = 3; <?php  }
if ($lecture == "intacc")  { ?> document.market_form.lecture.selectedIndex = 4; <?php  }
if ($lecture == "markman")  { ?> document.market_form.lecture.selectedIndex = 5; <?php  }
if ($lecture == "logi")  { ?> document.market_form.lecture.selectedIndex = 6; <?php  }
if ($lecture == "entrepreneur")  { ?> document.market_form.lecture.selectedIndex = 7; <?php  }
if ($lecture == "finanz")  { ?> document.market_form.lecture.selectedIndex = 8; <?php  }
if ($lecture == "tax")  { ?> document.market_form.lecture.selectedIndex = 9; <?php  }
if ($lecture == "bpaed")  { ?> document.market_form.lecture.selectedIndex = 10; <?php  }

if ($lecture == "auw")  { ?> document.market_form.lecture.selectedIndex = 0; <?php  }
if ($lecture == "OeoeS")  { ?> document.market_form.lecture.selectedIndex = 1; <?php  }
if ($lecture == "arbp")  { ?> document.market_form.lecture.selectedIndex = 2; <?php  }
if ($lecture == "wettbp")  { ?> document.market_form.lecture.selectedIndex = 3; <?php  }
if ($lecture == "apb")  { ?> document.market_form.lecture.selectedIndex = 4; <?php  }
if ($lecture == "EoM")  { ?> document.market_form.lecture.selectedIndex = 5; <?php  }
if ($lecture == "QwF")  { ?> document.market_form.lecture.selectedIndex = 6; <?php  }
if ($lecture == "wp")  { ?> document.market_form.lecture.selectedIndex = 7; <?php  }
if ($lecture == "money")  { ?> document.market_form.lecture.selectedIndex = 8; <?php  }
if ($lecture == "coopst")  { ?> document.market_form.lecture.selectedIndex = 9; <?php  }

if ($lecture == "is")  { ?> document.market_form.lecture.selectedIndex = 0; <?php  }
if ($lecture == "innot")  { ?> document.market_form.lecture.selectedIndex = 1; <?php  }
if ($lecture == "mtc")  { ?> document.market_form.lecture.selectedIndex = 2; <?php  }
if ($lecture == "ebm")  { ?> document.market_form.lecture.selectedIndex = 3; <?php  }

if ($lecture == "gwip")  { ?> document.market_form.lecture.selectedIndex = 0; <?php  }
if ($lecture == "praesmod")  { ?> document.market_form.lecture.selectedIndex = 1; <?php  }
if ($lecture == "berufwb")  { ?> document.market_form.lecture.selectedIndex = 2; <?php  }
if ($lecture == "paedsem")  { ?> document.market_form.lecture.selectedIndex = 3; <?php  }
if ($lecture == "projstudi")  { ?> document.market_form.lecture.selectedIndex = 4; <?php  }
if ($lecture == "zweitfach")  { ?> document.market_form.lecture.selectedIndex = 5; <?php  }

if ($lecture == "intrecht1")  { ?> document.market_form.lecture.selectedIndex = 0; <?php  }
if ($lecture == "angel")  { ?> document.market_form.lecture.selectedIndex = 1; <?php  }
if ($lecture == "europglob")  { ?> document.market_form.lecture.selectedIndex = 2; <?php  }
if ($lecture == "intbez")  { ?> document.market_form.lecture.selectedIndex = 3; <?php  }
if ($lecture == "intstud")  { ?> document.market_form.lecture.selectedIndex = 4; <?php  }
if ($lecture == "regional")  { ?> document.market_form.lecture.selectedIndex = 5; <?php  }
if ($lecture == "romanisch")  { ?> document.market_form.lecture.selectedIndex = 6; <?php  }

if ($lecture == "sozio")  { ?> document.market_form.lecture.selectedIndex = 0; <?php  }
if ($lecture == "transbez")  { ?> document.market_form.lecture.selectedIndex = 1; <?php  }
if ($lecture == "regio")  { ?> document.market_form.lecture.selectedIndex = 2; <?php  }
if ($lecture == "grundpsy")  { ?> document.market_form.lecture.selectedIndex = 3; <?php  }
if ($lecture == "empsozi")  { ?> document.market_form.lecture.selectedIndex = 4; <?php  }
if ($lecture == "compana")  { ?> document.market_form.lecture.selectedIndex = 5; <?php  }
if ($lecture == "intkom")  { ?> document.market_form.lecture.selectedIndex = 6; <?php  }
if ($lecture == "personal")  { ?> document.market_form.lecture.selectedIndex = 7; <?php  }
if ($lecture == "anamgesell")  { ?> document.market_form.lecture.selectedIndex = 8; <?php  }
if ($lecture == "empmus")  { ?> document.market_form.lecture.selectedIndex = 9; <?php  }
if ($lecture == "komumed")  { ?> document.market_form.lecture.selectedIndex = 10; <?php  }
if ($lecture == "konsum")  { ?> document.market_form.lecture.selectedIndex = 10; <?php  }
if ($lecture == "soziprakt")  { ?> document.market_form.lecture.selectedIndex = 11; <?php  }
if ($lecture == "sozialp")  { ?> document.market_form.lecture.selectedIndex = 12; <?php  }
if ($lecture == "spezkom")  { ?> document.market_form.lecture.selectedIndex = 13; <?php  }
if ($lecture == "wirtorgsoz")  { ?> document.market_form.lecture.selectedIndex = 14; <?php  }
if ($lecture == "wsugesch")  { ?> document.market_form.lecture.selectedIndex = 15; <?php  }

if ($lecture == "daten")  { ?> document.market_form.lecture.selectedIndex = 0; <?php  }
if ($lecture == "arbeitsr")  { ?> document.market_form.lecture.selectedIndex = 1; <?php  }
if ($lecture == "gesellr")  { ?> document.market_form.lecture.selectedIndex = 2; <?php  }
if ($lecture == "versr")  { ?> document.market_form.lecture.selectedIndex = 3; <?php  }

?>

repeat = 1;

}       else {

         document.market_form.lecture.selectedIndex = 0;

         }

 }


</script>

<script type="text/javascript" src="javascript/form_market.js" language="JavaScript1.2"></script>


<form name="market_form" action="index.php?do=market&sec=change" method="post" enctype="multipart/form-data" onsubmit="return check_database()">

<table cellpadding="8" cellspacing="1" border="0" class="tableinborder" width="<?php  echo"$width"; ?>">
  
  <tr>

<td class="tablea" style="width:260px" align="left">

<b><u>Schritt 1:</u><br><br> Themengebiet wählen</b>

</td>

    <td class="tableb" style="width:150px">

    <b>Kategorie:</b><br><br>

    <select name="category" ONCHANGE="ChooseLectures(this.value)">

    <option value="stuff"
    <?php  if ($category == "stuff")  { echo" selected"; } ?>
    >Diverses</option>

    <option value="sem1"
    <?php  if ($category == "sem1")  { echo" selected"; } ?>
    >Semester 1</option>

    <option value="sem2"
    <?php  if ($category == "sem2")  { echo" selected"; } ?>
    >Semester 2</option>

    <option value="sem3"
    <?php  if ($category == "sem3")  { echo" selected"; } ?>
    >Semester 3</option>

    <option value="sem4"

    <?php  if ($category == "sem4")  { echo" selected"; } ?>

    >Semester 4</option>

    <option value="bwl"

    <?php  if ($category == "bwl")  { echo" selected"; } ?>

    >BWL</option>

    <option value="vwl"

    <?php  if ($category == "vwl")  { echo" selected"; } ?>

    >VWL</option>


    <option value="info"

    <?php  if ($category == "info")  { echo" selected"; } ?>

    >Informatik</option>

        <option value="wipaed"

    <?php  if ($category == "wipaed")  { echo" selected"; } ?>

    >Wipäd</option>

        <option value="intbus"

    <?php  if ($category == "intbus")  { echo" selected"; } ?>

    >Intern. Business</option>


        <option value="sozi"

    <?php  if ($category == "sozi")  { echo" selected"; } ?>

    >Sozialökonomik</option>


    <option value="sonstige"

    <?php  if ($category == "sonstige")  { echo" selected"; } ?>

    >Sonstige Vertiefungen</option>

    </select>

    </td>

    <td class="tableb" style="width:318px">

    <span id="LecturesField">

    </span>

    <script type="text/javascript" language="JavaScript1.2">

    ChooseLectures("<?php  echo"$category"; ?>");

    </script>

    </td>

  </tr>

</table>

<table cellpadding="8" cellspacing="1" border="0" class="tableinborder" width="<?php  echo"$width"; ?>">
             
  <tr>

    <td class="tablea" align="left" style="width:260px">

    <b><u>Schritt 2:</u>&nbsp;

    Anzeigentitel</b></td>

      <td class="tableb" align="left">

         <input name="title" size="50" maxlength="50" value="<?php  echo"$title"; ?>">


      </td>

      </tr>

</table>


<table cellpadding="8" cellspacing="1" border="0" class="tableinborder" width="<?php  echo"$width"; ?>">
             
  <tr>

    <td class="tablea" align="left" style="width:260px">

    <b><u>Schritt 3:</u>&nbsp; Beschreibung<br><br>
<span style="line-height:18px">
    Zustand des Verkaufsgegenstandes?<br> Preis? Private Telefonnummer?<br> Weitere wichtige Hinweise?
</span>
<br><br> </b>(max. 200 Zeichen)</td>

      <td class="tableb" align="left">

         <textarea name="description" onKeyUp="count();" onKeyDown="count();" onBlur = "count();" cols="60" rows="3"><?php  echo"$description"; ?></textarea>


      </td>

      </tr>

</table>


<table cellpadding="8" cellspacing="1" border="0" class="tableinborder" width="<?php  echo"$width"; ?>">
  

      <tr>

        <td class="tablea" style="width:260px" valign="top" align="left"><b><u>Schritt 5:</u> (optional)<br><br>Bild des Verkaufsgegenstandes</b></td>

        <td class="tableb" align="left">

<?php  

if ($attach != "")  { 

echo"<table cellspacing=\"0\" cellpadding=\"0\"><tr><td>Du hast bereits ein Bild angehängt.</td><td width=\"10\"></td><td>";
echo"<table cellspacing=\"0\" cellpadding=\"0\"><tr><td>";
echo"<b>Bild löschen:</b></td><td><input type=\"checkbox\" id=\"checkbox\" value=\"1\" name=\"del_attach\">";
echo"</td></tr></table></td></tr></table>";

echo"<br>Solltest du ein neues Bild auswählen wird das alte automatisch überschrieben!<br><br>";
echo"<b>Neues Bild:</b> "; 


}

?>

<input name="file" type="file" size="50">

        <br><br>

<table cellspacing="0" cellpadding="0"><tr><td>
        <img src="images/database/jpg.gif" title="JPG-Bild">&nbsp;<img src="images/database/gif.gif" title="GIF & PNG - Bild">
        </td><td>&nbsp; max. Dateigröße: <b><?php  echo"500 KB"; ?></b>
</td></tr></table>

        </td>

      </tr>

    </table>

<table cellpadding="8" cellspacing="1" border="0" class="tableinborder" width="<?php  echo"$width"; ?>">
  

      <tr>

        <td class="tablea" align="left" style="width:260px"><b><u>Schritt 6:</u></td>

        <td class="tableb" align="left">
        <input type="hidden" name="ad_id" value="<?php  echo"$ad_id"; ?>">
        <input type="submit" class="buttons" value="Anzeige ändern" name="send_postdata" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

        </td>

      </tr>

</table>
 
</form>

