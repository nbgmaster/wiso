<?php 

  if ($_POST[category] == "" && $category == "") {


      $category = "sem4";

      $lecture  = "empty";



  } 



  else  {



      if ($_POST[category] != "")  {



          $category    = "$_POST[category]";

          $lecture     = "$_POST[lecture]";



      }



  }



 include("database_stats.php");  

?>



<br>



<table width="<?php  echo"$width"; ?>" cellpadding="2" cellspacing="1" class="tableinborder">

<form method="post" action="index.php?do=database" name="formdatab">
            

  <tr>

<td class="tableb" align="center" style="width:160px">

    <input type="button" style="width:140px" class="buttons" onclick="location.href='index.php?do=database&sec=upload'" value="Datei hochladen" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

</td>



    <td align="right" style="width:660px" class="tableb">





<table border="0" cellspacing="0" cellpadding="0" width="100%">



  <tr>



    <td align="left"> 

    &nbsp;

    <span style="font-size:12px"><b>Kategorie:</b></span>



    <select name="category" ONCHANGE="Chooselecture(this.value)">


    <option value="stuff"

    <?php  if ($category == "stuff")  { echo" selected"; } ?>

    >Diverses</option>

    <option value="sem1"

    <?php  if ($category == "sem1")  { echo" selected"; } ?>

    >(B.A.) Semester 1</option>

    <option value="sem2"

    <?php  if ($category == "sem2")  { echo" selected"; } ?>

    >(B.A.) Semester 2</option>
    <option value="sem3"

    <?php  if ($category == "sem3")  { echo" selected"; } ?>

    >(B.A.) Semester 3</option>

    <option value="sem4"

    <?php  if ($category == "sem4")  { echo" selected"; } ?>

    >(B.A.) Semester 4</option>

    <option value="bwl"

    <?php  if ($category == "bwl")  { echo" selected"; } ?>

    >(B.A.) BWL</option>

    <option value="vwl"

    <?php  if ($category == "vwl")  { echo" selected"; } ?>

    >(B.A.) VWL</option>


    <option value="info"

    <?php  if ($category == "info")  { echo" selected"; } ?>

    >(B.A.) W-Informatik</option>

        <option value="wipaed"

    <?php  if ($category == "wipaed")  { echo" selected"; } ?>

    >(B.A.) Wip�d</option>

        <option value="intbus"

    <?php  if ($category == "intbus")  { echo" selected"; } ?>

    >(B.A.) Intern. Business</option>


        <option value="sozi"

    <?php  if ($category == "sozi")  { echo" selected"; } ?>

    >(B.A.) Sozial�konomik</option>


    <option value="sonstige"

    <?php  if ($category == "sonstige")  { echo" selected"; } ?>

    >(B.A.) Sonstige Vertiefungen</option>

    <option value="master"

    <?php  if ($category == "master")  { echo" selected"; } ?>

    >Masterstudieng�nge</option>
    
    </select>


    &nbsp;&nbsp;


    <?php  if ($category == "sem1")  {  ?>



    <span id="LecturesField">


    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >w�hle hier eine Vorlesung aus</option>


    <option value="UMV"

    <?php  if ($lecture == "UMV")  { echo" selected = selected"; } ?>

    >Unternehmen, M�rkte, Volkswirtschaften (<?php  GetUnterlagenNumbers("UMV"); ?>)</option>

    <option value="UU"

    <?php  if ($lecture == "UU")  { echo" selected = selected"; } ?>

    >Unternehmer & Unternehmen (<?php  GetUnterlagenNumbers("UU"); ?>)</option>

    <option value="IT"

    <?php  if ($lecture == "IT")  { echo" selected = selected"; } ?>

    >Grundlagen des E-Business (<?php  GetUnterlagenNumbers("IT"); ?>)</option>

    <option value="BF"

    <?php  if ($lecture == "BF")  { echo" selected = selected"; } ?>

    >Buchf�hrung (<?php  GetUnterlagenNumbers("BF"); ?>)</option>

    <option value="FM"

    <?php  if ($lecture == "FM")  { echo" selected = selected"; } ?>

    >Finanzmathematik (<?php  GetUnterlagenNumbers("FM"); ?>)</option>

    <option value="LA"

    <?php  if ($lecture == "LA")  { echo" selected = selected"; } ?>

    >Lineare Algebra (<?php  GetUnterlagenNumbers("LA"); ?>)</option>

    </select>



    </span> 



    <?php  } if ($category == "sem2")  { ?>



    <span id="LecturesField">


    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >w�hle hier eine Vorlesung aus</option>


    <option value="mikro"

    <?php  if ($lecture == "mikro")  { echo" selected = selected"; } ?>

    >Mikrook�nomie (<?php  GetUnterlagenNumbers("mikro"); ?>)</option>

    <option value="makro"

    <?php  if ($lecture == "makro")  { echo" selected = selected"; } ?>

    >Makro�konomie (<?php  GetUnterlagenNumbers("makro"); ?>)</option>

    <option value="absatz"

    <?php  if ($lecture == "absatz")  { echo" selected = selected"; } ?>

    >Absatz / Marketing (<?php  GetUnterlagenNumbers("absatz"); ?>)</option>

    <option value="jahresabschluss"

    <?php  if ($lecture == "jahresabschluss")  { echo" selected = selected"; } ?>

    >Jahresabschluss (<?php  GetUnterlagenNumbers("jahresabschluss"); ?>)</option>

    <option value="recht"

    <?php  if ($lecture == "recht")  { echo" selected = selected"; } ?>

    >Privat- und Handelsrecht I (<?php  GetUnterlagenNumbers("recht"); ?>)</option>

    <option value="ITp"

    <?php  if ($lecture == "ITp")  { echo" selected = selected"; } ?>

    >Internetpraktikum (<?php  GetUnterlagenNumbers("ITp"); ?>)</option>

    </select>



    </span> 


 <?php  } if ($category == "sem3")  { ?>



    <span id="LecturesField">


    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >w�hle hier eine Vorlesung aus</option>


    <option value="stat"

    <?php  if ($lecture == "stat")  { echo" selected = selected"; } ?>

    >Statistik (<?php  GetUnterlagenNumbers("stat"); ?>)</option>


    <option value="prod"

    <?php  if ($lecture == "prod")  { echo" selected = selected"; } ?>

    >Produktion, Logistik, Beschaffung (<?php  GetUnterlagenNumbers("prod"); ?>)</option>


    <option value="wus"

    <?php  if ($lecture == "wus")  { echo" selected = selected"; } ?>

    >Wirtschaft & Staat (<?php  GetUnterlagenNumbers("wus"); ?>)</option>


    <option value="recht2"

    <?php  if ($lecture == "recht2")  { echo" selected = selected"; } ?>

    >Privat- und Handelsrecht II (<?php  GetUnterlagenNumbers("recht2"); ?>)</option>


    <option value="oerecht"

    <?php  if ($lecture == "oerecht")  { echo" selected = selected"; } ?>

    >�ffentliches Recht I (<?php  GetUnterlagenNumbers("oerecht"); ?>)</option>


    </select>

    </span>


 <?php  } if ($category == "sem4")  {  ?>

    <span id="LecturesField">


    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >w�hle hier eine Vorlesung aus</option>


    <option value="stat2"

    <?php  if ($lecture == "stat2")  { echo" selected = selected"; } ?>

    >Praxis der emp. Wirtschaftsforschung (<?php  GetUnterlagenNumbers("stat2"); ?>)</option>


    <option value="EwA"

    <?php  if ($lecture == "EwA")  { echo" selected = selected"; } ?>

    >Einf�hrung in das wissenschaftl. Arbeiten (<?php  GetUnterlagenNumbers("EwA"); ?>)</option>


    <option value="praes"

    <?php  if ($lecture == "praes")  { echo" selected = selected"; } ?>

    >Pr�sentationsf�higkeiten (<?php  GetUnterlagenNumbers("praes"); ?>)</option>


    <option value="oerecht2"

    <?php  if ($lecture == "oerecht2")  { echo" selected = selected"; } ?>

    >�ffentliches Recht II (<?php  GetUnterlagenNumbers("oerecht2"); ?>)</option>


    </select>

    </span>


    <?php  } if ($category == "bwl")  {  ?>

    <span id="LecturesField">


    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >w�hle hier eine Vorlesung aus</option>


    <option value="control"

    <?php  if ($lecture == "control")  { echo" selected = selected"; } ?>

    >Kostenrechnung und Controlling (<?php  GetUnterlagenNumbers("control"); ?>)</option>


    <option value="intuf"

    <?php  if ($lecture == "intuf")  { echo" selected = selected"; } ?>

    >Internationale Unternehmensf�hrung (<?php  GetUnterlagenNumbers("intuf"); ?>)</option>


     <option value="invest"

    <?php  if ($lecture == "invest")  { echo" selected = selected"; } ?>

    >Investition und Finanzierung (<?php  GetUnterlagenNumbers("invest"); ?>)</option>


     <option value="stratint"

    <?php  if ($lecture == "stratint")  { echo" selected = selected"; } ?>

    >Strateg. und Internat. Management (<?php  GetUnterlagenNumbers("stratint"); ?>)</option>


    <option value="intacc"

    <?php  if ($lecture == "intacc")  { echo" selected = selected"; } ?>

    >International Accounting and Controlling (<?php  GetUnterlagenNumbers("intacc"); ?>)</option>


    <option value="markman"

    <?php  if ($lecture == "markman")  { echo" selected = selected"; } ?>

    >Marketing Management (<?php  GetUnterlagenNumbers("markman"); ?>)</option>


    <option value="logi"

    <?php  if ($lecture == "logi")  { echo" selected = selected"; } ?>

    >Operations and Logistics (<?php  GetUnterlagenNumbers("logi"); ?>)</option>


    <option value="entrepreneur"

    <?php  if ($lecture == "entrepreneur")  { echo" selected = selected"; } ?>

    >Innovation and Entrepreneurship (<?php  GetUnterlagenNumbers("entrepreneur"); ?>)</option>


    <option value="finanz"

    <?php  if ($lecture == "finanz")  { echo" selected = selected"; } ?>

    >Finanzierung (<?php  GetUnterlagenNumbers("finanz"); ?>)</option>


    <option value="tax"

    <?php  if ($lecture == "tax")  { echo" selected = selected"; } ?>

    >Taxation (<?php  GetUnterlagenNumbers("tax"); ?>)</option>


    <option value="health"

    <?php  if ($lecture == "health")  { echo" selected = selected"; } ?>

    >Gesundheitsmanagement (<?php  GetUnterlagenNumbers("health"); ?>)</option>


    <option value="bpaed"

    <?php  if ($lecture == "bpaed")  { echo" selected = selected"; } ?>

    >Betriebsp�dagogik (<?php  GetUnterlagenNumbers("bpaed"); ?>)</option>

    </select>

    </span>

    <?php  } if ($category == "vwl")  {  ?>

    <span id="LecturesField">


    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >w�hle hier eine Vorlesung aus</option>


    <option value="auw"

    <?php  if ($lecture == "auw")  { echo" selected = selected"; } ?>

    >Au�enwirtschaft (<?php  GetUnterlagenNumbers("auw"); ?>)</option>


    <option value="OeoeS"

    <?php  if ($lecture == "OeoeS")  { echo" selected = selected"; } ?>

    >�konomie des �ffentlichen Sektors (<?php  GetUnterlagenNumbers("OeoeS"); ?>)</option>


        <option value="arbp"

    <?php  if ($lecture == "arbp")  { echo" selected = selected"; } ?>

    >Arbeitsmarktpolitik (<?php  GetUnterlagenNumbers("arbp"); ?>)</option>


            <option value="wettbp"

    <?php  if ($lecture == "wettbp")  { echo" selected = selected"; } ?>

    >Wettbewerbstheorie und �politik (<?php  GetUnterlagenNumbers("wettbp"); ?>)</option>


    <option value="apb"

    <?php  if ($lecture == "apb")  { echo" selected = selected"; } ?>

    >Arbeit, Personal und Bildung (<?php  GetUnterlagenNumbers("apb"); ?>)</option>


    <option value="EoM"

    <?php  if ($lecture == "EoM")  { echo" selected = selected"; } ?>

    >Economics of Management (<?php  GetUnterlagenNumbers("EoM"); ?>)</option>


    <option value="QwF"

    <?php  if ($lecture == "QwF")  { echo" selected = selected"; } ?>

    >Quantitative Wirtschaftsforschung (<?php  GetUnterlagenNumbers("QwF"); ?>)</option>


    <option value="wp"

    <?php  if ($lecture == "wp")  { echo" selected = selected"; } ?>

    >Wirtschaftspolitik (<?php  GetUnterlagenNumbers("wp"); ?>)</option>


    <option value="money"

    <?php  if ($lecture == "money")  { echo" selected = selected"; } ?>

    >Money and Capital Markets (<?php  GetUnterlagenNumbers("money"); ?>)</option>


    <option value="coopst"

    <?php  if ($lecture == "coopst")  { echo" selected = selected"; } ?>

    >Cooperative Studies (<?php  GetUnterlagenNumbers("coopst"); ?>)</option>

    </select>



    </span>

    <?php  } if ($category == "info")  {  ?>

    <span id="LecturesField">


    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >w�hle hier eine Vorlesung aus</option>


    <option value="is"

    <?php  if ($lecture == "is")  { echo" selected = selected"; } ?>

    >Innovation Strategy (<?php  GetUnterlagenNumbers("is"); ?>)</option>


    <option value="innot"

    <?php  if ($lecture == "innot")  { echo" selected = selected"; } ?>

    >Innovation Technology (<?php  GetUnterlagenNumbers("innot"); ?>)</option>


    <option value="mtc"

    <?php  if ($lecture == "mtc")  { echo" selected = selected"; } ?>

    >Managing Technological Change (<?php  GetUnterlagenNumbers("mtc"); ?>)</option>


    <option value="ebm"

    <?php  if ($lecture == "ebm")  { echo" selected = selected"; } ?>

    >E-Business Management (<?php  GetUnterlagenNumbers("ebm"); ?>)</option>

    </select>



    </span>

    <?php  } if ($category == "wipaed")  {  ?>


    <span id="LecturesField">


    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >w�hle hier eine Vorlesung aus</option>


    <option value="gwip"

    <?php  if ($lecture == "gwip")  { echo" selected = selected"; } ?>

    >Grundlagen der Wip�d (<?php  GetUnterlagenNumbers("gwip"); ?>)</option>


    <option value="praesmod"

    <?php  if ($lecture == "praesmod")  { echo" selected = selected"; } ?>

    >Pr�sentations- und Moderationstechniken (<?php  GetUnterlagenNumbers("praesmod"); ?>)</option>


        <option value="berufwb"

    <?php  if ($lecture == "berufwb")  { echo" selected = selected"; } ?>

    >Berufliche Weiterbildung (<?php  GetUnterlagenNumbers("berufwb"); ?>)</option>


        <option value="paedsem"

    <?php  if ($lecture == "paedsem")  { echo" selected = selected"; } ?>

    >Betriebsp�dagogisches Seminar (<?php  GetUnterlagenNumbers("paedsem"); ?>)</option>


        <option value="projstudi"

    <?php  if ($lecture == "projstudi")  { echo" selected = selected"; } ?>

    >Erkundungsprojekt / Schulpraktische Studien (<?php  GetUnterlagenNumbers("projstudi"); ?>)</option>


    <option value="zweitfach"

    <?php  if ($lecture == "zweitfach")  { echo" selected = selected"; } ?>

    >Module der Zweitfach-Vertiefung (<?php  GetUnterlagenNumbers("zweitfach"); ?>)</option>

    </select>

    </span>

    <?php  } if ($category == "intbus")  {  ?>

    <span id="LecturesField">

    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >w�hle hier eine Vorlesung aus</option>


    <option value="�ntrecht1"

    <?php  if ($lecture == "intrecht1")  { echo" selected = selected"; } ?>

    >Europ�isches und Internationales Recht (<?php  GetUnterlagenNumbers("intrecht1"); ?>)</option>

    <option value="angel"

    <?php  if ($lecture == "angel")  { echo" selected = selected"; } ?>

    >Angloamerikanische Gesellschaften (<?php  GetUnterlagenNumbers("angel"); ?>)</option>


    <option value="europglob"

    <?php  if ($lecture == "europglob")  { echo" selected = selected"; } ?>

    >Europ�isierung & Globalisierung (<?php  GetUnterlagenNumbers("europglob"); ?>)</option>


        <option value="intbez"

    <?php  if ($lecture == "intbez")  { echo" selected = selected"; } ?>

    >Internationale Beziehungen (<?php  GetUnterlagenNumbers("intbez"); ?>)</option>


    <option value="intstud"

    <?php  if ($lecture == "intstud")  { echo" selected = selected"; } ?>

    >Internationale Studien (<?php  GetUnterlagenNumbers("intstud"); ?>)</option>


        <option value="regional"

    <?php  if ($lecture == "regional")  { echo" selected = selected"; } ?>

    >Regionalstudien (<?php  GetUnterlagenNumbers("regional"); ?>)</option>


        <option value="romanisch"

    <?php  if ($lecture == "romanisch")  { echo" selected = selected"; } ?>

    >Romanischsprachige Gesellschaften (<?php  GetUnterlagenNumbers("romanisch"); ?>)</option>

    </select>

    </span>



    <?php  } if ($category == "sozi")  {  ?>

    <span id="LecturesField">

    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >w�hle hier eine Vorlesung aus</option>


    <option value="sozio"

    <?php  if ($lecture == "sozio")  { echo" selected = selected"; } ?>

    >Soziologie (<?php  GetUnterlagenNumbers("sozio"); ?>)</option>

    <option value="transbez"

    <?php  if ($lecture == "transbez")  { echo" selected = selected"; } ?>

    >Internat. und transnationale Beziehungen (<?php  GetUnterlagenNumbers("transbez"); ?>)</option>


    <option value="regio"

    <?php  if ($lecture == "regio")  { echo" selected = selected"; } ?>

    >Regionen im internationalen System (<?php  GetUnterlagenNumbers("regio"); ?>)</option>


        <option value="grundpsy"

    <?php  if ($lecture == "grundpsy")  { echo" selected = selected"; } ?>

    >Grundl. + Anwend.felder d. Sozialpsychologie (<?php  GetUnterlagenNumbers("grundpsy"); ?>)</option>


    <option value="empsozi"

    <?php  if ($lecture == "empsozi")  { echo" selected = selected"; } ?>

    >Einf�hrung in empirische Sozialforschung (<?php  GetUnterlagenNumbers("empsozi"); ?>)</option>


        <option value="compana"

    <?php  if ($lecture == "compana")  { echo" selected = selected"; } ?>

    >Computergest�tzte Datenanalyse (<?php  GetUnterlagenNumbers("compana"); ?>)</option>


        <option value="intkom"

    <?php  if ($lecture == "intkom")  { echo" selected = selected"; } ?>

    >Internationale Kommunikation (<?php  GetUnterlagenNumbers("intkom"); ?>)</option>


        <option value="personal"

    <?php  if ($lecture == "personal")  { echo" selected = selected"; } ?>

    >Personal und Organisation (<?php  GetUnterlagenNumbers("personal"); ?>)</option>


        <option value="anamgesell"

    <?php  if ($lecture == "anamgesell")  { echo" selected = selected"; } ?>

    >Analyse moderner Gesellschaften (<?php  GetUnterlagenNumbers("anamgesell"); ?>)</option>


    <option value="empmus"

    <?php  if ($lecture == "empmus")  { echo" selected = selected"; } ?>

    >Empirische Methoden und Statistik (<?php  GetUnterlagenNumbers("empmus"); ?>)</option>


        <option value="komumed"

    <?php  if ($lecture == "komumed")  { echo" selected = selected"; } ?>

    >Kommunikation und Massenmedien (<?php  GetUnterlagenNumbers("komumed"); ?>)</option>


        <option value="konsum"

    <?php  if ($lecture == "konsum")  { echo" selected = selected"; } ?>

    >Konsumentenverhalten (<?php  GetUnterlagenNumbers("konsum"); ?>)</option>


            <option value="soziprakt"

    <?php  if ($lecture == "soziprakt")  { echo" selected = selected"; } ?>

    >Soziologisches Praktikum (<?php  GetUnterlagenNumbers("soziprakt"); ?>)</option>


        <option value="sozialp"

    <?php  if ($lecture == "sozialp")  { echo" selected = selected"; } ?>

    >Sozial- und Arbeitspolitik (<?php  GetUnterlagenNumbers("sozialp"); ?>)</option>


    <option value="spezkom"

    <?php  if ($lecture == "spezkom")  { echo" selected = selected"; } ?>

    >Spezielle Kommunikationswissenschaft (<?php  GetUnterlagenNumbers("spezkom"); ?>)</option>


        <option value="wirtorgsoz"

    <?php  if ($lecture == "wirtorgsoz")  { echo" selected = selected"; } ?>

    >Wirtschafts- und Organisationssoziologie (<?php  GetUnterlagenNumbers("wirtorgsoz"); ?>)</option>


        <option value="wsugesch"

    <?php  if ($lecture == "wsugesch")  { echo" selected = selected"; } ?>

    >Wirt.-, Sozial- u. Unternehmensgeschichte (<?php  GetUnterlagenNumbers("wsugesch"); ?>)</option>

    </select>

    </span>

    <?php  } if ($category == "sonstige")  {  ?>

    <span id="LecturesField">

    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >w�hle hier eine Vorlesung aus</option>


    <option value="daten"

    <?php  if ($lecture == "daten")  { echo" selected = selected"; } ?>

    >Datenermittlung und Datenanalyse (<?php  GetUnterlagenNumbers("daten"); ?>)</option>


    <option value="arbeitsr"

    <?php  if ($lecture == "arbeitsr")  { echo" selected = selected"; } ?>

    >Arbeitsrecht (<?php  GetUnterlagenNumbers("arbeitsr"); ?>)</option>


        <option value="gesellr"

    <?php  if ($lecture == "gesellr")  { echo" selected = selected"; } ?>

    >Unternehmens- und Gesellschaftsrecht (<?php  GetUnterlagenNumbers("gesellr"); ?>)</option>


        <option value="versr"

    <?php  if ($lecture == "versr")  { echo" selected = selected"; } ?>

    >Versicherungswesen (<?php  GetUnterlagenNumbers("versr"); ?>)</option>

    </select>

    </span>
      
    <?php  } if ($category == "master")  {  ?>

    <span id="LecturesField">

    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >w�hle hier eine Vorlesung aus</option>
               
    <option value="m_aup"

    <?php  if ($lecture == "m_aup")  { echo" selected = selected"; } ?>

    >(M.Sc.) Arbeitsmarkt u. Personal (<?php  GetUnterlagenNumbers("m_aup"); ?>)</option>

    <option value="m_eco"

    <?php  if ($lecture == "m_eco")  { echo" selected = selected"; } ?>

    >(M.Sc.) Economics (<?php  GetUnterlagenNumbers("m_eco"); ?>)</option>

    <option value="m_fact"

    <?php  if ($lecture == "m_fact")  { echo" selected = selected"; } ?>

    >(M.A.) FACT (<?php  GetUnterlagenNumbers("m_fact"); ?>)</option>

    <option value="m_ibs"

    <?php  if ($lecture == "m_ibs")  { echo" selected = selected"; } ?>

    >(M.Sc.) IBS (<?php  GetUnterlagenNumbers("m_ibs"); ?>)</option>
       
    <option value="m_iis"

    <?php  if ($lecture == "m_iis")  { echo" selected = selected"; } ?>

    >(M.Sc.) IIS (<?php  GetUnterlagenNumbers("m_iis"); ?>)</option>
    
    <option value="m_mgm"

    <?php  if ($lecture == "m_mgm")  { echo" selected = selected"; } ?>

    >(M.A.)	Management (<?php  GetUnterlagenNumbers("m_mgm"); ?>)</option>  
    
    <option value="m_mark"

    <?php  if ($lecture == "m_mark")  { echo" selected = selected"; } ?>

    >(M.A.) Marketing (<?php  GetUnterlagenNumbers("m_mark"); ?>)</option>
       
    <option value="m_sozi"

    <?php  if ($lecture == "m_sozi")  { echo" selected = selected"; } ?>

    >(M.A.) Sozial�konomik (<?php  GetUnterlagenNumbers("m_sozi"); ?>)</option>
    
    <option value="m_paed"

    <?php  if ($lecture == "m_paed")  { echo" selected = selected"; } ?>

    >(M.A.) Wirtschaftsp�dagogik (<?php  GetUnterlagenNumbers("m_paed"); ?>)</option>  


    </select>

    </span>

    <?php  } if ($category == "stuff")  { ?>



    <span id="LecturesField">
    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">
    <option>nicht f�cherbezogene Dateien (<?php  GetUnterlagenNumbers("stuff"); ?>)</option>
    </select>
    </span>



<?php  } if ($browser == "IE" or $browser == "Netscape")  {  ?>



<script type="text/javascript" language="JavaScript1.2">

  function sendTdata()  {

    document.formdatab.submit(); 

  }



  function Chooselecture(WhichSem)  {


    if (WhichSem == "stuff")  {



        lectureB = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"\">nicht f�cherbezogene Dateien (<?php GetUnterlagenNumbers("stuff"); ?>)</option></select>";


        document.getElementById("LecturesField").innerHTML = lectureB;


    }



    if (WhichSem.substr(3,4) == "1")  {



        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"UMV\">Unternehmen, M�rkte, Volkswirtschaften (<?php  GetUnterlagenNumbers(UMV); ?>)</option><option value=\"UU\">Unternehmer & Unternehmen (<?php  GetUnterlagenNumbers("UU"); ?>)</option><option value=\"IT\">Grundlagen des E-Business (<?php  GetUnterlagenNumbers("IT"); ?>)</option><option value=\"BF\">Buchf�hrung (<?php  GetUnterlagenNumbers("BF"); ?>)</option><option value=\"FM\">Finanzmathematik (<?php  GetUnterlagenNumbers("FM"); ?>)</option><option value=\"LA\">Lineare Algebra (<?php  GetUnterlagenNumbers("LA"); ?>)</option></select>";


        document.getElementById("LecturesField").innerHTML = lecturec;


    }



    if (WhichSem.substr(3,4) == "2")  {



        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"mikro\">Mikro�konomie (<?php  GetUnterlagenNumbers("mikro"); ?>)</option><option value=\"makro\">Makro�konomie (<?php  GetUnterlagenNumbers("makro"); ?>)</option><option value=\"absatz\">Absatz / Marketing (<?php  GetUnterlagenNumbers("absatz"); ?>)</option><option value=\"jahresabschluss\">Jahresabschluss (<?php  GetUnterlagenNumbers("jahresabschluss"); ?>)</option><option value=\"recht\">Privat- und Handelsrecht I (<?php  GetUnterlagenNumbers("recht"); ?>)</option><option value=\"ITp\">Internetpraktikum (<?php  GetUnterlagenNumbers("ITp"); ?>)</option></select>";

        lectured = "<option value=\"mikro\">Mikro�konomie (<?php  GetUnterlagenNumbers("mikro"); ?>)</option><option value=\"makro\">Makro�konomie (<?php  GetUnterlagenNumbers("makro"); ?>)</option><option value=\"absatz\">Absatz / Marketing (<?php  GetUnterlagenNumbers("absatz"); ?>)</option><option value=\"jahresabschluss\">Jahresabschluss (<?php  GetUnterlagenNumbers("jahresabschluss"); ?>)</option><option value=\"recht\">Privat- und Handelsrecht I (<?php  GetUnterlagenNumbers("recht"); ?>)</option><option value=\"ITp\">Internetpraktikum (<?php  GetUnterlagenNumbers("ITp"); ?>)</option>";

      
        document.getElementById("LecturesField").innerHTML = lecturec; 


    }



    if (WhichSem.substr(3,4) == "3")  {



        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"stat\">Statistik (<?php  GetUnterlagenNumbers("stat"); ?>)</option><option value=\"prod\">Produktion, Logistik, Beschaffung (<?php  GetUnterlagenNumbers("prod"); ?>)</option><option value=\"wus\">Wirtschaft & Staat (<?php  GetUnterlagenNumbers("wus"); ?>)</option><option value=\"recht2\">Privat- und Handelsrecht II (<?php  GetUnterlagenNumbers("recht2"); ?>)</option><option value=\"oerecht\">�ffentliches Recht I (<?php  GetUnterlagenNumbers("oerecht"); ?>)</option></select>";


        document.getElementById("LecturesField").innerHTML = lecturec;



    }

    if (WhichSem.substr(3,4) == "4")  {


        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"stat2\">Praxis der emp. Wirtschaftsforschung (<?php  GetUnterlagenNumbers("stat2"); ?>)</option><option value=\"EwA\">Einf�hrung in das wissenschaftl. Arbeiten (<?php  GetUnterlagenNumbers("EwA"); ?>)</option><option value=\"praes\">Pr�sentationsf�higkeiten (<?php  GetUnterlagenNumbers("praes"); ?>)</option><option value=\"oerecht2\">�ffentliches Recht II (<?php  GetUnterlagenNumbers("oerecht2"); ?>)</option></select>";


        document.getElementById("LecturesField").innerHTML = lecturec;


    }

    if (WhichSem == "bwl")  {



        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"control\">Kostenrechnung und Controlling (<?php  GetUnterlagenNumbers("control"); ?>)</option><option value=\"intuf\">Internationale Unternehmensf�hrung (<?php  GetUnterlagenNumbers("intuf"); ?>)</option><option value=\"invest\">Investition und Finanzierung (<?php  GetUnterlagenNumbers("invest"); ?>)</option><option value=\"stratint\">Strateg. und Internat. Management (<?php  GetUnterlagenNumbers("stratint"); ?>)</option><option value=\"intacc\">International Accounting and Controlling (<?php  GetUnterlagenNumbers("intacc"); ?>)</option><option value=\"markman\">Marketing Management (<?php  GetUnterlagenNumbers("markman"); ?>)</option><option value=\"logi\">Operations and Logistics (<?php  GetUnterlagenNumbers("logi"); ?>)</option><option value=\"entrepreneuer\">Innovation and Entrepreneurship (<?php  GetUnterlagenNumbers("entrepreneur"); ?>)</option><option value=\"finanz\">Finanzierung (<?php  GetUnterlagenNumbers("finanz"); ?>)</option><option value=\"tax\">Taxation (<?php  GetUnterlagenNumbers("tax"); ?>)</option><option value=\"health\">Gesundheitsmanagement (<?php  GetUnterlagenNumbers("health"); ?>)</option><option value=\"bpaed\">Betriebsp�dagogik (<?php  GetUnterlagenNumbers("bpaed"); ?>)</option></select>";



        document.getElementById("LecturesField").innerHTML = lecturec;



    }

    if (WhichSem == "vwl")  {



        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"auw\">Au�enwirtschaft (<?php  GetUnterlagenNumbers("auw"); ?>)</option><option value=\"OeoeS\">�konomie des �ffentlichen Sektors (<?php  GetUnterlagenNumbers("OeoeS"); ?>)</option><option value=\"arbp\">Arbeitsmarktpolitik (<?php  GetUnterlagenNumbers("arbp"); ?>)</option><option value=\"wettbp\">Wettbewerbstheorie und �politik (<?php  GetUnterlagenNumbers("wettbp"); ?>)</option><option value=\"apb\">Arbeit, Personal und Bildung (<?php  GetUnterlagenNumbers("apb"); ?>)</option><option value=\"EoM\">Economics of Management (<?php  GetUnterlagenNumbers("EoM"); ?>)</option><option value=\"QwF\">Quantitative Wirtschaftsforschung (<?php  GetUnterlagenNumbers("QwF"); ?>)</option><option value=\"wp\">Wirtschaftspolitik (<?php  GetUnterlagenNumbers("wp"); ?>)</option><option value=\"money\">Money and Capital Markets (<?php  GetUnterlagenNumbers("money"); ?>)</option><option value=\"coopst\">Cooperative Studies (<?php  GetUnterlagenNumbers("coopst"); ?>)</option></select>";

        document.getElementById("LecturesField").innerHTML = lecturec; 

 

    }

    if (WhichSem == "info")  {



        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"is\">Innovation Strategy (<?php  GetUnterlagenNumbers("is"); ?>)</option><option value=\"innot\">Innovation Technology (<?php  GetUnterlagenNumbers("innot"); ?>)</option><option value=\"mtc\">Managing Technological Change (<?php  GetUnterlagenNumbers("mtc"); ?>)</option><option value=\"ebm\">E-Business Management (<?php  GetUnterlagenNumbers("ebm"); ?>)</option></select>";


        document.getElementById("LecturesField").innerHTML = lecturec;


    }

    if (WhichSem == "wipaed")  {

        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"gwip\">Grundlagen der Wip�d (<?php  GetUnterlagenNumbers("gwip"); ?>)</option><option value=\"praesmod\">Pr�sentations- und Moderationstechniken (<?php  GetUnterlagenNumbers("praesmod"); ?>)</option><option value=\"berufwb\">Berufliche Weiterbildung (<?php  GetUnterlagenNumbers("berufwb"); ?>)</option><option value=\"paedsem\">Betriebsp�dagogisches Seminar (<?php  GetUnterlagenNumbers("paedsem"); ?>)</option><option value=\"projstudi\">Erkundungsprojekt / Schulpraktische Studien (<?php  GetUnterlagenNumbers("projstudi"); ?>)</option><option value=\"zweitfach\">Module der Zweitfach-Vertiefung (<?php  GetUnterlagenNumbers("zweitfach"); ?>)</option></select>";

        document.getElementById("LecturesField").innerHTML = lecturec;

    }

    if (WhichSem == "intbus")  {

        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"intrecht1\">Europ�isches und Internationales Recht (<?php  GetUnterlagenNumbers("intrecht1"); ?>)</option><option value=\"angel\">Angloamerikanische Gesellschaften (<?php  GetUnterlagenNumbers("angel"); ?>)</option><option value=\"europglob\">Europ�isierung & Globalisierung (<?php  GetUnterlagenNumbers("europglob"); ?>)</option><option value=\"intbez\">Internationale Beziehungen (<?php  GetUnterlagenNumbers("intbez"); ?>)</option><option value=\"intstud\">Internationale Studien (<?php  GetUnterlagenNumbers("intstud"); ?>)</option><option value=\"regional\">Regionalstudien (<?php  GetUnterlagenNumbers("regional"); ?>)</option><option value=\"romanisch\">Romanischsprachige Gesellschaften (<?php  GetUnterlagenNumbers("romanisch"); ?>)</option></select>";

        document.getElementById("LecturesField").innerHTML = lecturec;

    }


    if (WhichSem == "sozi")  {

        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"sozio\">Soziologie (<?php  GetUnterlagenNumbers("sozio"); ?>)</option><option value=\"transbez\">Internat. und transnationale Beziehungen (<?php  GetUnterlagenNumbers("transbez"); ?>)</option><option value=\"regio\">Regionen im internationalen System (<?php  GetUnterlagenNumbers("regio"); ?>)</option><option value=\"grundpsy\">Grundl. + Anwend.felder d. Sozialpsychologie (<?php  GetUnterlagenNumbers("grundpsy"); ?>)</option><option value=\"empsozi\">Einf�hrung in empirische Sozialforschung (<?php  GetUnterlagenNumbers("empsozi"); ?>)</option><option value=\"compana\">Computergest�tzte Datenanalyse (<?php  GetUnterlagenNumbers("compana"); ?>)</option><option value=\"intkom\">Internationale Kommunikation (<?php  GetUnterlagenNumbers("intkom"); ?>)</option><option value=\"personal\">Personal und Organisation (<?php  GetUnterlagenNumbers("personal"); ?>)</option><option value=\"anamgesell\">Analyse moderner Gesellschaften (<?php  GetUnterlagenNumbers("anamgesell"); ?>)</option><option value=\"empmus\">Empirische Methoden und Statistik (<?php  GetUnterlagenNumbers("empmus"); ?>)</option><option value=\"konsum\">Konsumentenverhalten (<?php  GetUnterlagenNumbers("konsum"); ?>)</option><option value=\"soziprakt\">Soziologisches Praktikum (<?php  GetUnterlagenNumbers("soziprakt"); ?>)</option><option value=\"sozialp\">Sozial- und Arbeitspolitik (<?php  GetUnterlagenNumbers("sozialp"); ?>)</option><option value=\"spezkom\">Spezielle Kommunikationswissenschaft (<?php  GetUnterlagenNumbers("spezkom"); ?>)</option><option value=\"wirtorgsoz\">Wirtschafts- und Organisationssoziologie (<?php  GetUnterlagenNumbers("wirtorgsoz"); ?>)</option><option value=\"wsugesch\">Wirt.-, Sozial- u. Unternehmensgeschichte (<?php  GetUnterlagenNumbers("wsugesch"); ?>)</option></select>";

        document.getElementById("LecturesField").innerHTML = lecturec;

    }

    if (WhichSem == "sonstige")  {

        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"daten\">Datenermittlung und Datenanalyse (<?php  GetUnterlagenNumbers("daten"); ?>)</option><option value=\"arbeitsr\">Arbeitsrecht (<?php  GetUnterlagenNumbers("arbeitsr"); ?>)</option><option value=\"gesellr\">Unternehmens- und Gesellschaftsrecht (<?php  GetUnterlagenNumbers("gesellr"); ?>)</option><option value=\"versr\">Versicherungswesen (<?php  GetUnterlagenNumbers("versr"); ?>)</option></select>";

        document.getElementById("LecturesField").innerHTML = lecturec;

    }

    if (WhichSem == "master")  {

        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"m_aup\">(M.Sc.) Arbeitsmarkt u. Personal (<?php  GetUnterlagenNumbers("m_aup"); ?>)</option><option value=\"m_eco\">(M.Sc.) Economics (<?php  GetUnterlagenNumbers("m_eco"); ?>)</option><option value=\"m_fact\">(M.A.) FACT (<?php  GetUnterlagenNumbers("m_fact"); ?>)</option><option value=\"m_ibs\">(M.Sc.) IBS (<?php  GetUnterlagenNumbers("m_ibs"); ?>)</option><option value=\"m_iis\">(M.Sc.) IIS (<?php  GetUnterlagenNumbers("m_iis"); ?>)</option><option value=\"m_mgm\">(M.A.) Management (<?php  GetUnterlagenNumbers("m_mgm"); ?>)</option><option value=\"m_mark\">(M.A.)	Marketing (<?php  GetUnterlagenNumbers("m_mark"); ?>)</option><option value=\"m_sozi\">(M.A.) Sozial�konomik (<?php  GetUnterlagenNumbers("m_sozi"); ?>)</option><option value=\"m_paed\">(M.A.) Wirtschaftsp�dagogik (<?php  GetUnterlagenNumbers("m_paed"); ?>)</option></select>";

        document.getElementById("LecturesField").innerHTML = lecturec;

    }

    document.formdatab.submit();



 }



</script>

<?php  } else  { ?>

<script type="text/javascript" language="JavaScript1.2">

  function sendTdata()  { 

    document.formdatab.submit();

  }



  function Chooselecture(WhichSem)  { 


    if (WhichSem == "stuff")  {



        lectureB = "<option value=\"\">nicht f�cherbezogene Dateien (<?php GetUnterlagenNumbers("stuff"); ?>)</option>";


        document.getElementById("lecture").innerHTML = lectureB;


    }



    if (WhichSem.substr(3,4) == "1")  {



        lecturec = "<option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"UMV\">Unternehmen, M�rkte, Volkswirtschaften (<?php  GetUnterlagenNumbers(UMV); ?>)</option><option value=\"UU\">Unternehmer & Unternehmen (<?php  GetUnterlagenNumbers("UU"); ?>)</option><option value=\"IT\">Grundlagen des E-Business (<?php  GetUnterlagenNumbers("IT"); ?>)</option><option value=\"BF\">Buchf�hrung (<?php  GetUnterlagenNumbers("BF"); ?>)</option><option value=\"FM\">Finanzmathematik (<?php  GetUnterlagenNumbers("FM"); ?>)</option><option value=\"LA\">Lineare Algebra (<?php  GetUnterlagenNumbers("LA"); ?>)</option>";


        document.getElementById("lecture").innerHTML = lecturec; 


    }



    if (WhichSem.substr(3,4) == "2")  {



        lecturec = "<option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"mikro\">Mikro�konomie (<?php  GetUnterlagenNumbers("mikro"); ?>)</option><option value=\"makro\">Makro�konomie (<?php  GetUnterlagenNumbers("makro"); ?>)</option><option value=\"absatz\">Absatz / Marketing (<?php  GetUnterlagenNumbers("absatz"); ?>)</option><option value=\"jahresabschluss\">Jahresabschluss (<?php  GetUnterlagenNumbers("jahresabschluss"); ?>)</option><option value=\"recht\">Privat- und Handelsrecht I (<?php  GetUnterlagenNumbers("recht"); ?>)</option><option value=\"ITp\">Internetpraktikum (<?php  GetUnterlagenNumbers("ITp"); ?>)</option>";


        document.getElementById("lecture").innerHTML = lecturec; 


    }

    if (WhichSem.substr(3,4) == "3")  {



        lecturec = "<option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"stat\">Statistik (<?php  GetUnterlagenNumbers("stat"); ?>)</option><option value=\"prod\">Produktion, Logistik, Beschaffung (<?php  GetUnterlagenNumbers("prod"); ?>)</option><option value=\"wus\">Wirtschaft & Staat (<?php  GetUnterlagenNumbers("wus"); ?>)</option><option value=\"recht2\">Privat- und Handelsrecht II (<?php  GetUnterlagenNumbers("recht2"); ?>)</option><option value=\"oerecht\">�ffentliches Recht I (<?php  GetUnterlagenNumbers("oerecht"); ?>)</option>";


        document.getElementById("lecture").innerHTML = lecturec;


    }


     if (WhichSem.substr(3,4) == "4")  {

        lecturec = "<option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"stat2\">Praxis der emp. Wirtschaftsforschung (<?php  GetUnterlagenNumbers("stat2"); ?>)</option><option value=\"EwA\">Einf�hrung in das wissenschaftl. Arbeiten (<?php  GetUnterlagenNumbers("EwA"); ?>)</option><option value=\"praes\">Pr�sentationsf�higkeiten (<?php  GetUnterlagenNumbers("praes"); ?>)</option><option value=\"oerecht2\">�ffentliches Recht II (<?php  GetUnterlagenNumbers("oerecht2"); ?>)</option>";

        document.getElementById("lecture").innerHTML = lecturec;

    }

    if (WhichSem == "bwl")  {


        lecturec = "<option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"control\">Kostenrechnung und Controlling (<?php  GetUnterlagenNumbers("control"); ?>)</option><option value=\"intuf\">Internationale Unternehmensf�hrung (<?php  GetUnterlagenNumbers("intuf"); ?>)</option><option value=\"invest\">Investition und Finanzierung (<?php  GetUnterlagenNumbers("invest"); ?>)</option><option value=\"stratint\">Strateg. und Internat. Management (<?php  GetUnterlagenNumbers("stratint"); ?>)</option><option value=\"intacc\">International Accounting and Controlling (<?php  GetUnterlagenNumbers("intacc"); ?>)</option><option value=\"markman\">Marketing Management (<?php  GetUnterlagenNumbers("markman"); ?>)</option><option value=\"logi\">Operations and Logistics (<?php  GetUnterlagenNumbers("logi"); ?>)</option><option value=\"entrepreneuer\">Innovation and Entrepreneurship (<?php  GetUnterlagenNumbers("entrepreneur"); ?>)</option><option value=\"finanz\">Finanzierung (<?php  GetUnterlagenNumbers("finanz"); ?>)</option><option value=\"tax\">Taxation (<?php  GetUnterlagenNumbers("tax"); ?>)</option><option value=\"bpaed\">Betriebsp�dagogik (<?php  GetUnterlagenNumbers("bpaed"); ?>)</option>";


        document.getElementById("lecture").innerHTML = lecturec;


    }

    if (WhichSem == "vwl")  {


        lecturec = "<option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"auw\">Au�enwirtschaft (<?php  GetUnterlagenNumbers("auw"); ?>)</option><option value=\"OeoeS\">�konomie des �ffentlichen Sektors (<?php  GetUnterlagenNumbers("OeoeS"); ?>)</option><option value=\"arbp\">Arbeitsmarktpolitik (<?php  GetUnterlagenNumbers("arbp"); ?>)</option><option value=\"wettbp\">Wettbewerbstheorie und �politik (<?php  GetUnterlagenNumbers("wettbp"); ?>)</option><option value=\"apb\">Arbeit, Personal und Bildung (<?php  GetUnterlagenNumbers("apb"); ?>)</option><option value=\"EoM\">Economics of Management (<?php  GetUnterlagenNumbers("EoM"); ?>)</option><option value=\"QwF\">Quantitative Wirtschaftsforschung (<?php  GetUnterlagenNumbers("QwF"); ?>)</option><option value=\"wp\">Wirtschaftspolitik (<?php  GetUnterlagenNumbers("wp"); ?>)</option><option value=\"money\">Money and Capital Markets (<?php  GetUnterlagenNumbers("money"); ?>)</option><option value=\"coopst\">Cooperative Studies (<?php  GetUnterlagenNumbers("coopst"); ?>)</option>";

        document.getElementById("lecture").innerHTML = lecturec; 


    }

    if (WhichSem == "info")  {

        lecturec = "<option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"is\">Innovation Strategy (<?php  GetUnterlagenNumbers("is"); ?>)</option><option value=\"innot\">Innovation Technology (<?php  GetUnterlagenNumbers("innot"); ?>)</option><option value=\"mtc\">Managing Technological Change (<?php  GetUnterlagenNumbers("mtc"); ?>)</option><option value=\"ebm\">E-Business Management (<?php  GetUnterlagenNumbers("ebm"); ?>)</option>";

        document.getElementById("lecture").innerHTML = lecturec;


    }

    if (WhichSem == "wipaed")  {

        lecturec = "<option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"gwip\">Grundlagen der Wip�d (<?php  GetUnterlagenNumbers("gwip"); ?>)</option><option value=\"praesmod\">Pr�sentations- und Moderationstechniken (<?php  GetUnterlagenNumbers("praesmod"); ?>)</option><option value=\"berufwb\">Berufliche Weiterbildung (<?php  GetUnterlagenNumbers("berufwb"); ?>)</option><option value=\"paedsem\">Betriebsp�dagogisches Seminar (<?php  GetUnterlagenNumbers("paedsem"); ?>)</option><option value=\"projstudi\">Erkundungsprojekt / Schulpraktische Studien (<?php  GetUnterlagenNumbers("projstudi"); ?>)</option><option value=\"zweitfach\">Module der Zweitfach-Vertiefung (<?php  GetUnterlagenNumbers("zweitfach"); ?>)</option>";

        document.getElementById("lecture").innerHTML = lecturec;

    }

    if (WhichSem == "intbus")  {

        lecturec = "<option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"intrecht1\">Europ�isches und Internationales Recht (<?php  GetUnterlagenNumbers("intrecht1"); ?>)</option><option value=\"angel\">Angloamerikanische Gesellschaften (<?php  GetUnterlagenNumbers("angel"); ?>)</option><option value=\"europglob\">Europ�isierung & Globalisierung (<?php  GetUnterlagenNumbers("europglob"); ?>)</option><option value=\"intbez\">Internationale Beziehungen (<?php  GetUnterlagenNumbers("intbez"); ?>)</option><option value=\"intstud\">Internationale Studien (<?php  GetUnterlagenNumbers("intstud"); ?>)</option><option value=\"regional\">Regionalstudien (<?php  GetUnterlagenNumbers("regional"); ?>)</option><option value=\"romanisch\">Romanischsprachige Gesellschaften (<?php  GetUnterlagenNumbers("romanisch"); ?>)</option>";

        document.getElementById("lecture").innerHTML = lecturec;

    }


    if (WhichSem == "sozi")  {

        lecturec = "<option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"sozio\">Soziologie (<?php  GetUnterlagenNumbers("sozio"); ?>)</option><option value=\"transbez\">Internat. und transnationale Beziehungen (<?php  GetUnterlagenNumbers("transbez"); ?>)</option><option value=\"regio\">Regionen im internationalen System (<?php  GetUnterlagenNumbers("regio"); ?>)</option><option value=\"grundpsy\">Grundl. + Anwend.felder d. Sozialpsychologie (<?php  GetUnterlagenNumbers("grundpsy"); ?>)</option><option value=\"empsozi\">Einf�hrung in empirische Sozialforschung (<?php  GetUnterlagenNumbers("empsozi"); ?>)</option><option value=\"compana\">Computergest�tzte Datenanalyse (<?php  GetUnterlagenNumbers("compana"); ?>)</option><option value=\"intkom\">Internationale Kommunikation (<?php  GetUnterlagenNumbers("intkom"); ?>)</option><option value=\"personal\">Personal und Organisation (<?php  GetUnterlagenNumbers("personal"); ?>)</option><option value=\"anamgesell\">Analyse moderner Gesellschaften (<?php  GetUnterlagenNumbers("anamgesell"); ?>)</option><option value=\"empmus\">Empirische Methoden und Statistik (<?php  GetUnterlagenNumbers("empmus"); ?>)</option><option value=\"konsum\">Konsumentenverhalten (<?php  GetUnterlagenNumbers("konsum"); ?>)</option><option value=\"soziprakt\">Soziologisches Praktikum (<?php  GetUnterlagenNumbers("soziprakt"); ?>)</option><option value=\"sozialp\">Sozial- und Arbeitspolitik (<?php  GetUnterlagenNumbers("sozialp"); ?>)</option><option value=\"spezkom\">Spezielle Kommunikationswissenschaft (<?php  GetUnterlagenNumbers("spezkom"); ?>)</option><option value=\"wirtorgsoz\">Wirtschafts- und Organisationssoziologie (<?php  GetUnterlagenNumbers("wirtorgsoz"); ?>)</option><option value=\"wsugesch\">Wirt.-, Sozial- u. Unternehmensgeschichte (<?php  GetUnterlagenNumbers("wsugesch"); ?>)</option>";

        document.getElementById("lecture").innerHTML = lecturec;

    }


    if (WhichSem == "sonstige")  {

        lecturec = "<option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"daten\">Datenermittlung und Datenanalyse (<?php  GetUnterlagenNumbers("daten"); ?>)</option><option value=\"arbeitsr\">Arbeitsrecht (<?php  GetUnterlagenNumbers("arbeitsr"); ?>)</option><option value=\"gesellr\">Unternehmens- und Gesellschaftsrecht (<?php  GetUnterlagenNumbers("gesellr"); ?>)</option><option value=\"versr\">Versicherungswesen (<?php  GetUnterlagenNumbers("versr"); ?>)</option>";

        document.getElementById("lecture").innerHTML = lecturec;

    }

    if (WhichSem == "master")  {

        lecturec = "<option value=\"empty\">w�hle hier eine Vorlesung aus</option><option value=\"daten\">Datenermittlung und Datenanalyse (<?php  GetUnterlagenNumbers("daten"); ?>)</option><option value=\"arbeitsr\">Arbeitsrecht (<?php  GetUnterlagenNumbers("arbeitsr"); ?>)</option><option value=\"gesellr\">Unternehmens- und Gesellschaftsrecht (<?php  GetUnterlagenNumbers("gesellr"); ?>)</option><option value=\"versr\">Versicherungswesen (<?php  GetUnterlagenNumbers("versr"); ?>)</option>";

        document.getElementById("lecture").innerHTML = lecturec;

    }

    document.formdatab.submit(); 


 }



</script>



<?php  } ?>





    </td>



  </tr>



</form>



</table>



</td>





</tr>



</table>