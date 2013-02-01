      <table cellspacing="1" cellpadding="3" width="<?php  echo"$width"; ?>" class="tableinborder">

       <tr>

        <td class="catbg">

        <a href="index.php?do=database" class="catFont">Unterlagendatenbank</a>

        &nbsp;:: Neue Datei hochladen

        </td>

       </tr>

      </table>

<br>

<table width="<?php  echo"$width"; ?>" cellpadding="0" cellspacing="1" class="tableinborder">
               

  <tr>

   <td class="tableb">

<table cellpadding="0" cellspacing="1" border="0" width="<?php  echo"$width"; ?>">
  
  <tr>
  <td class="tableb" align="left">

<table style="width:100%"><tr>
<td width="65" align="right"><img src="images/templates/<?php  echo"$template"; ?>/critical.gif"></td>
<td>
<br>
  <span style="font-size : <?php  echo"$fontsize_header"; ?>px;line-height:20px;">


  <ul type="square">
  <li>keine Unterlagen oder Skripte erlaubt, die von den Lehrstühlen auf deren Website bereitgestellt werden</li>
  <li><b>Insbesondere <u>KEINE ALTEN KLAUSUREN</u>!!!</b></li>
  <li>nur selbsterstellte Dokumente dürfen hochgeladen werden</li>
  <li><b>bei Verstoß wird dein Account deaktiviert!</b></li>
  </ul></b></span>
  </td></tr></table>
  </td>
  </tr>

</table>

   </td>

  </tr>

</table>

<br>

<script type="text/javascript" language="JavaScript1.2">

  function ChooseLectures(WhichSem)  {

    if (WhichSem == "stuff")  {

        lectures = "<center>In diese Kategorie fallen Dateien, die nur studiumsbezogen und nicht fachbezogen sind.</center>";

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

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"control\">Kostenrechnung und Controlling</option><option value=\"intuf\">Internationale Unternehmensführung</option><option value=\"invest\">Investition und Finanzierung</option><option value=\"stratint\">Strateg. und Internat. Management</option><option value=\"intacc\">International Accounting and Controlling</option><option value=\"markman\">Marketing Management</option><option value=\"logi\">Operations and Logistics</option><option value=\"entrepreneuer\">Innovation and Entrepreneurship</option><option value=\"finanz\">Finanzierung</option><option value=\"tax\">Taxation</option><option value=\"health\">Gesundheitsmanagement</option><option value=\"bpaed\">Betriebspädagogik</option></select>";

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
    
    if (WhichSem == "master")  {

        lectures = "<b>Vorlesung:</b><br><br> <select id=\"lecture\" name=\"lecture\" style=\"width:250px\"><option value=\"m_aup\">(M.Sc.) Arbeitsmarkt u. Personal</option><option value=\"m_eco\">(M.Sc.) Economics</option><option value=\"m_fact\">(M.A.) FACT</option><option value=\"m_ibs\">(M.Sc.) IBS</option><option value=\"m_iis\">(M.Sc.) IIS</option><option value=\"m_mgm\">(M.A.) Management</option><option value=\"m_mark\">(M.A.)	Marketing</option><option value=\"m_sozi\">(M.A.) Sozialökonomik</option><option value=\"m_paed\">(M.A.) Wirtschaftspädagogik</option></select>";

    }

    document.getElementById("LecturesField").innerHTML = lectures;


 }


</script>

<script type="text/javascript" src="javascript/form_database.js" language="JavaScript1.2"></script>


<form name="database_form" action="index.php?do=database&sec=upload&module=change" method="post" enctype="multipart/form-data" onsubmit="return check_database()">

<table cellpadding="8" cellspacing="1" border="0" class="tableinborder" width="<?php  echo"$width"; ?>">

  <tr>

<td class="tablea" style="width:260px" align="left">

<b><u>Schritt 1:</u><br><br> Themengebiet wählen</b>

</td>

    <td class="tableb" style="width:150px">

    <b>Kategorie:</b><br><br>

    <select name="category" ONCHANGE="ChooseLectures(this.value)">

    <option value="stuff">Diverses</option>
    <option value="sem1">(B.A.) Semester 1</option>
    <option value="sem2">(B.A.) Semester 2</option>
    <option value="sem3">(B.A.) Semester 3</option>
    <option value="sem4" selected="selected">(B.A.) Semester 4</option>
    <option value="bwl">(B.A.) BWL</option>
    <option value="vwl">(B.A.) VWL</option>
    <option value="info">(B.A.) W-Informatik</option>
    <option value="wipaed">(B.A.) Wipäd</option>
    <option value="intbus">(B.A.) Intern. Business</option>
    <option value="sozi">(B.A.) Sozialökonomik</option>
    <option value="sonstige">(B.A.) Sonstige Vertiefungen</option>
    <option value="master">Masterstudiengänge</option>
    
    </select>

    </td>

    <td class="tableb" style="width:318px">

    <span id="LecturesField">
    <b>Vorlesung:</b><br><br>
   <select name="lecture" style="width:250px">
<option value="stat2">Praxis der emp. Wirtschaftsforschung</option>
<option value="EwA">Einführung in das wissenschaftl. Arbeiten</option>
<option value="praes">Präsentationsfähigkeiten</option>
<option value="oerecht2">Öffentliches Recht II</option>
</select>
  
    </span>

    </td>

  </tr>

</table>


<table cellpadding="8" cellspacing="1" border="0" class="tableinborder" width="<?php  echo"$width"; ?>">
             
  <tr>

    <td class="tablea" align="left" style="width:260px">

    <b><u>Schritt 2:</u><br><br>

    kurze und aussagekräftige<br> Beschreibung des Inhaltes<br><br> (max. 200 Zeichen)</b></td>

      <td class="tableb" align="left">

         <textarea name="description" onKeyUp="count();" onKeyDown="count();" onBlur = "count();" cols="60" rows="3"></textarea>


      </td>

      </tr>

</table>


<table cellpadding="8" cellspacing="1" border="0" class="tableinborder" width="<?php  echo"$width"; ?>">
  

      <tr>

        <td class="tablea" style="width:260px" align="left"><b><u>Schritt 3:</u><br><br> Datei von der Festplatte auswählen</b></td>

        <td class="tableb" align="left">

        <input name="file" type="file" size="50">

        <br><br>

<table cellspacing="0" cellpadding="0"><tr><td>
        <img src="images/database/jpg.gif" title="JPG-Bild">&nbsp;<img src="images/database/gif.gif" title="GIF & PNG - Bild">
        <img src="images/database/doc.gif" title="Word-Datei">&nbsp;<img src="images/database/xls.gif" title="Excel-Datei">&nbsp;<img src="images/database/ppt.gif" title="Powerpoint-Datei">
        &nbsp;<img src="images/database/zip.gif" title="Zip-Archiv">&nbsp;<img src="images/database/rar.gif" title="RAR-Archiv">
&nbsp;<img src="images/database/pdf.gif" title="PDF-Datei">
&nbsp;<img src="images/database/txt.gif" title="Textdatei">
        </td><td>&nbsp; max. Dateigröße: <b><?php  echo"$file_max_size2"; ?></b>
</td></tr></table>

        </td>

      </tr>

    </table>


<table cellpadding="8" cellspacing="1" border="0" class="tableinborder" width="<?php  echo"$width"; ?>">
  

      <tr>

        <td class="tablea" align="left" style="width:260px"></td>

        <td class="tableb" align="left">

        <input type="submit" class="buttons" value="Hochladen" name="send_postdata" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

        </td>

      </tr>

</table>
 
</form>

