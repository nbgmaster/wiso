      <table cellspacing="1" cellpadding="3" width="<?php  echo"$width"; ?>" class="tableinborder">

       <tr>

        <td class="catbg">

        <a href="index.php?do=market" class="catFont">B&ouml;rse</a>

        &nbsp;:: Neue Anzeige inserieren

        </td>

       </tr>

      </table>

<br>

<?php   if ($browser == "IE" or $browser == "Netscape")  { ?>

<script type="text/javascript" language="JavaScript1.2">

  function ChooseLectures(WhichSem)  {  

    if (WhichSem == "stuff")  {

        lectures = "<center>Stelle deinen Artikel in diese Kategorie falls er keiner Vorlesung zuordbar ist.</center>";

    }

    if (WhichSem.substr(3,4) == "1")  {

        lectures = "<b>Vorlesung:</b><br><br> <select name=\"lecture\" style=\"width:250px\"><option value=\"UMV\">Unternehmen, M&auml;rkte, Volkswirtschaften</option><option value=\"UU\">Unternehmer & Unternehmen</option><option value=\"IT\">Grundlagen des E-Business</option><option value=\"BF\">Buchf&uuml;hrung</option><option value=\"FM\">Finanzmathematik</option><option value=\"LA\">Lineare Algebra</option></select>";

    }

    if (WhichSem.substr(3,4) == "2")  {

        lectures = "<b>Vorlesung:</b><br><br> <select name=\"lecture\" style=\"width:250px\"><option value=\"mikro\">Mikro&ouml;konomie</option><option value=\"makro\">Makro&ouml;konomie</option><option value=\"absatz\">Absatz / Marketing</option><option value=\"jahresabschluss\">Jahresabschluss</option><option value=\"recht\">Privat- und Handelsrecht I</option><option value=\"ITp\">Internetpraktikum</option></select>";

    }

    if (WhichSem.substr(3,4) == "3")  {

        lectures = "<b>Vorlesung:</b><br><br> <select name=\"lecture\" style=\"width:250px\"><option value=\"stat\">Statistik</option><option value=\"prod\">Produktion, Logistik, Beschaffung</option><option value=\"wus\">Wirtschaft & Staat</option><option value=\"recht2\">Privat- und Handelsrecht II</option><option value=\"oerecht\">&Ouml;ffentliches Recht I</option></select>";

    }

     if (WhichSem.substr(3,4) == "4")  {

        lectures = "<b>Vorlesung:</b><br><br> <select name=\"lecture\" style=\"width:250px\"><option value=\"stat2\">Praxis der emp. Wirtschaftsforschung</option><option value=\"EwA\">Einf&uuml;hrung in das wissenschaftl. Arbeiten</option><option value=\"praes\">Pr&auml;sentationsf&auml;higkeiten</option><option value=\"oerecht2\">&Ouml;ffentliches Recht II</option></select>";

    }

    if (WhichSem == "bwl")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"control\">Kostenrechnung und Controlling</option><option value=\"intuf\">Internationale Unternehmensf&uuml;hrung</option><option value=\"invest\">Investition und Finanzierung</option><option value=\"stratint\">Strateg. und Internat. Management</option><option value=\"intacc\">International Accounting and Controlling</option><option value=\"markman\">Marketing Management</option><option value=\"logi\">Operations and Logistics</option><option value=\"entrepreneuer\">Innovation and Entrepreneurship</option><option value=\"finanz\">Finanzierung</option><option value=\"tax\">Taxation</option><option value=\"bpaed\">Betriebsp&auml;dagogik</option></select>";

    }

    if (WhichSem == "vwl")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><<option value=\"auw\">Au&szlig;enwirtschaft</option><option value=\"OeoeS\">&Ouml;konomie des &ouml;ffentlichen Sektors</option><option value=\"arbp\">Arbeitsmarktpolitik</option><option value=\"wettbp\">Wettbewerbstheorie und –politik</option><option value=\"apb\">Arbeit, Personal und Bildung</option><option value=\"EoM\">Economics of Management</option><option value=\"QwF\">Quantitative Wirtschaftsforschung</option><option value=\"wp\">Wirtschaftspolitik</option><option value=\"money\">Money and Capital Markets</option><option value=\"coopst\">Cooperative Studies</option></select>";

    }

    if (WhichSem == "info")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"is\">Innovation Strategy</option><option value=\"innot\">Innovation Technology</option><option value=\"mtc\">Managing Technological Change</option><option value=\"ebm\">E-Business Management</option></select>";

    }

    if (WhichSem == "wipaed")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"gwip\">Grundlagen der Wip&auml;d</option><option value=\"praesmod\">Pr&auml;sentations- und Moderationstechniken</option><option value=\"berufwb\">Berufliche Weiterbildung</option><option value=\"paedsem\">Betriebsp&auml;dagogisches Seminar</option><option value=\"projstudi\">Erkundungsprojekt / Schulpraktische Studien</option><option value=\"zweitfach\">Module der Zweitfach-Vertiefung</option></select>";

    }

    if (WhichSem == "intbus")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"intrecht1\">Europ&auml;isches und Internationales Recht</option><option value=\"angel\">Angloamerikanische Gesellschaften</option><option value=\"europglob\">Europ&auml;isierung & Globalisierung</option><option value=\"intbez\">Internationale Beziehungen</option><option value=\"intstud\">Internationale Studien</option><option value=\"regional\">Regionalstudien</option><option value=\"romanisch\">Romanischsprachige Gesellschaften</option>";

    }

    if (WhichSem == "sozi")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"sozio\">Soziologie</option><option value=\"transbez\">Internat. und transnationale Beziehungen</option><option value=\"regio\">Regionen im internationalen System</option><option value=\"grundpsy\">Grundl. + Anwend.felder d. Sozialpsychologie</option><option value=\"empsozi\">Einf&uuml;hrung in empirische Sozialforschung</option><option value=\"compana\">Computergest&uuml;tzte Datenanalyse</option><option value=\"intkom\">Internationale Kommunikation</option><option value=\"personal\">Personal und Organisation</option><option value=\"anamgesell\">Analyse moderner Gesellschaften</option><option value=\"empmus\">Empirische Methoden und Statistik</option><option value=\"konsum\">Konsumentenverhalten</option><option value=\"soziprakt\">Soziologisches Praktikum</option><option value=\"sozialp\">Sozial- und Arbeitspolitik</option><option value=\"spezkom\">Spezielle Kommunikationswissenschaft</option><option value=\"wirtorgsoz\">Wirtschafts- und Organisationssoziologie</option><option value=\"wsugesch\">Wirt.-, Sozial- u. Unternehmensgeschichte</option></select>";

    }

    if (WhichSem == "sonstige")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"daten\">Datenermittlung und Datenanalyse</option><option value=\"arbeitsr\">Arbeitsrecht</option><option value=\"gesellr\">Unternehmens- und Gesellschaftsrecht</option><option value=\"versr\">Versicherungswesen</option></select>";

    }

    if (WhichSem == "master")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"m_aup\">(M.Sc.) Arbeitsmarkt u. Personal</option><option value=\"m_eco\">(M.Sc.) Economics</option><option value=\"m_fact\">(M.A.) FACT</option><option value=\"m_ibs\">(M.Sc.) IBS</option><option value=\"m_iis\">(M.Sc.) IIS</option><option value=\"m_mgm\">(M.A.) Management</option><option value=\"m_mark\">(M.A.)	Marketing</option><option value=\"m_sozi\">(M.A.) Sozial&ouml;konomik</option><option value=\"m_paed\">(M.A.) Wirtschaftsp&auml;dagogik</option></select>";

    }

    document.getElementById("LecturesField").innerHTML = lectures; 


 }


</script>

<?php  } else  { ?>


<script type="text/javascript" language="JavaScript1.2">

  function sendTdata()  {

    document.formdatab.submit(); 

  }

  function ChooseLectures(WhichSem)  {  
    if (WhichSem == "stuff")  {

        lectures = "<center>Stelle deinen Artikel in diese Kategorie falls er keiner Vorlesung zuordbar ist.</center>";

    }

    if (WhichSem.substr(3,4) == "1")  {

        lectures = "<b>Vorlesung:</b><br><br> <select name=\"lecture\" style=\"width:250px\"><option value=\"UMV\">Unternehmen, M&auml;rkte, Volkswirtschaften</option><option value=\"UU\">Unternehmer & Unternehmen</option><option value=\"IT\">Grundlagen des E-Business</option><option value=\"BF\">Buchf&uuml;hrung</option><option value=\"FM\">Finanzmathematik</option><option value=\"LA\">Lineare Algebra</option></select>";

    }

    if (WhichSem.substr(3,4) == "2")  { 

        lectures = "<b>Vorlesung:</b><br><br> <select name=\"lecture\" style=\"width:250px\"><option value=\"mikro\">Mikro&ouml;konomie</option><option value=\"makro\">Makro&ouml;konomie</option><option value=\"absatz\">Absatz / Marketing</option><option value=\"jahresabschluss\">Jahresabschluss</option><option value=\"recht\">Privat- und Handelsrecht I</option><option value=\"ITp\">Internetpraktikum</option></select>";

    }

    if (WhichSem.substr(3,4) == "3")  {

        lectures = "<b>Vorlesung:</b><br><br> <select name=\"lecture\" style=\"width:250px\"><option value=\"stat\">Statistik</option><option value=\"prod\">Produktion, Logistik, Beschaffung</option><option value=\"wus\">Wirtschaft & Staat</option><option value=\"recht2\">Privat- und Handelsrecht II</option><option value=\"oerecht\">&Ouml;ffentliches Recht I</option></select>";

    }

     if (WhichSem.substr(3,4) == "4")  {

        lectures = "<b>Vorlesung:</b><br><br> <select name=\"lecture\" style=\"width:250px\"><option value=\"stat2\">Praxis der emp. Wirtschaftsforschung</option><option value=\"EwA\">Einf&uuml;hrung in das wissenschaftl. Arbeiten</option><option value=\"praes\">Pr&auml;sentationsf&auml;higkeiten</option><option value=\"oerecht2\">&Ouml;ffentliches Recht II</option></select>";

    }

    if (WhichSem == "bwl")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"control\">Kostenrechnung und Controlling</option><option value=\"intuf\">Internationale Unternehmensf&uuml;hrung</option><option value=\"invest\">Investition und Finanzierung</option><option value=\"stratint\">Strateg. und Internat. Management</option><option value=\"intacc\">International Accounting and Controlling</option><option value=\"markman\">Marketing Management</option><option value=\"logi\">Operations and Logistics</option><option value=\"entrepreneuer\">Innovation and Entrepreneurship</option><option value=\"finanz\">Finanzierung</option><option value=\"tax\">Taxation</option><option value=\"bpaed\">Betriebsp&auml;dagogik</option></select>";

    }

    if (WhichSem == "vwl")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><<option value=\"auw\">Au&szlig;enwirtschaft</option><option value=\"OeoeS\">&Ouml;konomie des &ouml;ffentlichen Sektors</option><option value=\"arbp\">Arbeitsmarktpolitik</option><option value=\"wettbp\">Wettbewerbstheorie und –politik</option><option value=\"apb\">Arbeit, Personal und Bildung</option><option value=\"EoM\">Economics of Management</option><option value=\"QwF\">Quantitative Wirtschaftsforschung</option><option value=\"wp\">Wirtschaftspolitik</option><option value=\"money\">Money and Capital Markets</option><option value=\"coopst\">Cooperative Studies</option></select>";

    }

    if (WhichSem == "info")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"is\">Innovation Strategy</option><option value=\"innot\">Innovation Technology</option><option value=\"mtc\">Managing Technological Change</option><option value=\"ebm\">E-Business Management</option></select>";

    }

    if (WhichSem == "wipaed")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"gwip\">Grundlagen der Wip&auml;d</option><option value=\"praesmod\">Pr&auml;sentations- und Moderationstechniken</option><option value=\"berufwb\">Berufliche Weiterbildung</option><option value=\"paedsem\">Betriebsp&auml;dagogisches Seminar</option><option value=\"projstudi\">Erkundungsprojekt / Schulpraktische Studien</option><option value=\"zweitfach\">Module der Zweitfach-Vertiefung</option></select>";

    }

    if (WhichSem == "intbus")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"intrecht1\">Europ&auml;isches und Internationales Recht</option><option value=\"angel\">Angloamerikanische Gesellschaften</option><option value=\"europglob\">Europ&auml;isierung & Globalisierung</option><option value=\"intbez\">Internationale Beziehungen</option><option value=\"intstud\">Internationale Studien</option><option value=\"regional\">Regionalstudien</option><option value=\"romanisch\">Romanischsprachige Gesellschaften</option>";

    }

    if (WhichSem == "sozi")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"sozio\">Soziologie</option><option value=\"transbez\">Internat. und transnationale Beziehungen</option><option value=\"regio\">Regionen im internationalen System</option><option value=\"grundpsy\">Grundl. + Anwend.felder d. Sozialpsychologie</option><option value=\"empsozi\">Einf&uuml;hrung in empirische Sozialforschung</option><option value=\"compana\">Computergest&uuml;tzte Datenanalyse</option><option value=\"intkom\">Internationale Kommunikation</option><option value=\"personal\">Personal und Organisation</option><option value=\"anamgesell\">Analyse moderner Gesellschaften</option><option value=\"empmus\">Empirische Methoden und Statistik</option><option value=\"konsum\">Konsumentenverhalten</option><option value=\"soziprakt\">Soziologisches Praktikum</option><option value=\"sozialp\">Sozial- und Arbeitspolitik</option><option value=\"spezkom\">Spezielle Kommunikationswissenschaft</option><option value=\"wirtorgsoz\">Wirtschafts- und Organisationssoziologie</option><option value=\"wsugesch\">Wirt.-, Sozial- u. Unternehmensgeschichte</option></select>";

    }

    if (WhichSem == "sonstige")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"daten\">Datenermittlung und Datenanalyse</option><option value=\"arbeitsr\">Arbeitsrecht</option><option value=\"gesellr\">Unternehmens- und Gesellschaftsrecht</option><option value=\"versr\">Versicherungswesen</option></select>";

    }

    if (WhichSem == "master")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"m_aup\">(M.Sc.) Arbeitsmarkt u. Personal</option><option value=\"m_eco\">(M.Sc.) Economics</option><option value=\"m_fact\">(M.A.) FACT</option><option value=\"m_ibs\">(M.Sc.) IBS</option><option value=\"m_iis\">(M.Sc.) IIS</option><option value=\"m_mgm\">(M.A.) Management</option><option value=\"m_mark\">(M.A.)	Marketing</option><option value=\"m_sozi\">(M.A.) Sozial&ouml;konomik</option><option value=\"m_paed\">(M.A.) Wirtschaftsp&auml;dagogik</option></select>";

    }

    document.getElementById("LecturesField").innerHTML = lectures; 

 }


</script>

<?php  } ?>

<script type="text/javascript" src="javascript/form_market.js" language="JavaScript1.2"></script>

<form name="market_form" action="index.php?do=market&sec=upload&module=change" method="post" enctype="multipart/form-data" onsubmit="return check_database()">
  

<table cellpadding="8" cellspacing="1" border="0" class="tableinborder" width="<?php  echo"$width"; ?>">

  <tr>

<td class="tablea" style="width:260px" align="left">

<b><u>Schritt 1:</u><br><br> Themengebiet w&auml;hlen</b>

</td>

    <td class="tableb" style="width:150px">

    <b>Kategorie:</b><br><br>

    <select name="category" ONCHANGE="ChooseLectures(this.value)">

    <option value="stuff">Diverses</option>
    <option value="sem1">(B.A.) Semester 1</option>
    <option value="sem2">(B.A.) Semester 2</option>
    <option value="sem3" selected="selected">(B.A.) Semester 3</option>
    <option value="sem4">(B.A.) Semester 4</option>
    <option value="bwl">(B.A.) BWL</option>
    <option value="vwl">(B.A.) VWL</option>
    <option value="info">(B.A.) Informatik</option>
    <option value="wipaed">(B.A.) Wip&auml;d</option>
    <option value="intbus">(B.A.) Intern. Business</option>
    <option value="sozi">(B.A.) Sozial&ouml;konomik</option>
    <option value="sonstige">(B.A.) Sonstige Vertiefungen</option>
    <option value="master">Masterstudieng&auml;nge</option>
    
    </select>

    </td>

    <td class="tableb" style="width:318px">

<?php   if ($browser == "IE" or $browser == "Netscape")  { ?>

    <span id="LecturesField">

    </span>

    <script type="text/javascript" language="JavaScript1.2">

    lectures = "<b>Vorlesung:</b><br><br> <select name=\"lecture\" style=\"width:250px\"><option value=\"stat\">Statistik</option><option value=\"prod\">Produktion, Logistik, Beschaffung</option><option value=\"wus\">Wirtschaft & Staat</option><option value=\"recht2\">Privat- und Handelsrecht II</option><option value=\"oerecht\">&Ouml;ffentliches Recht I</option></select>";

    document.getElementById("LecturesField").innerHTML = lectures; 

    </script>

<?php  } else { ?>

    <span id="LecturesField">

    <b>Vorlesung:</b><br><br> 

<select name="lecture" style="width:250px">
<option value="stat">Statistik</option>
<option value="prod">Produktion, Logistik, Beschaffung</option>
<option value="wus">Wirtschaft & Staat</option>
<option value="recht2">Privat- und Handelsrecht II</option>
<option value="oerecht">&Ouml;ffentliches Recht I</option>
</select>

    </span>

<?php  } ?>

    </td>

  </tr>

</table>

<table cellpadding="8" cellspacing="1" border="0" class="tableinborder" width="<?php  echo"$width"; ?>">
             
  <tr>

    <td class="tablea" align="left" style="width:260px">

    <b><u>Schritt 2:</u>&nbsp;

    Anzeigentitel</b></td>

      <td class="tableb" align="left">

         <input name="title" size="50" maxlength="50">


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

         <textarea name="description" onKeyUp="count();" onKeyDown="count();" onBlur = "count();" cols="60" rows="6"></textarea>


      </td>

      </tr>

</table>


<table cellpadding="8" cellspacing="1" border="0" class="tableinborder" width="<?php  echo"$width"; ?>">
             
  <tr>

    <td class="tablea" align="left" style="width:260px">

    <b><u>Schritt 4:</u><br><br>

    Anzeigendauer</b></td>

      <td class="tableb" align="left">

         <select name="durance">

         <option value="1">1 Woche</option>
         <option value="2">2 Wochen</option>
         <option value="3">3 Wochen</option>
         <option value="4">4 Wochen</option>

         </select>

&nbsp;Nach Ablauf dieser Frist wird die Anzeige automatisch gel&ouml;scht.

      </td>

      </tr>

</table>

<table cellpadding="8" cellspacing="1" border="0" class="tableinborder" width="<?php  echo"$width"; ?>">
  

      <tr>

        <td class="tablea" style="width:260px" align="left"><b><u>Schritt 5:</u> (optional)<br><br>Bild des Verkaufsgegenstandes</b></td>

        <td class="tableb" align="left">

        <input name="file" type="file" size="50">

        <br><br>

<table cellspacing="0" cellpadding="0"><tr><td>
        <img src="images/database/jpg.gif" title="JPG-Bild">&nbsp;<img src="images/database/gif.gif" title="GIF & PNG - Bild">
        </td><td>&nbsp; max. Dateigr&ouml;&szlig;e: <b><?php  echo"500 KB"; ?></b>
</td></tr></table>

        </td>

      </tr>

    </table>

<table cellpadding="8" cellspacing="1" border="0" class="tableinborder" width="<?php  echo"$width"; ?>">
  

      <tr>

        <td class="tablea" align="left" style="width:260px"></td>

        <td class="tableb" align="left">

        <input type="submit" class="buttons" value="Anzeige ver&ouml;ffentlichen" name="send_postdata" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

        </td>

      </tr>

</table>
 
</form>

