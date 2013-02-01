<?php 

 

  if ($_POST[category] == "" && $category == "") { 



      $category = "all";

      $lecture  = "";



  } 



  else  {



      if ($_POST[category] != "")  {



          $category    = "$_POST[category]";

          $lecture     = "$_POST[lecture]";



      }



  }



?>



<table width="<?php  echo"$width"; ?>" cellpadding="2" cellspacing="1" class="tableinborder">

<form method="post" action="index.php?do=market" name="formdatab">
            

  <tr>

<td class="tableb" align="center" style="width:160px">

    <input type="button" style="width:160px" class="buttons" onclick="location.href='index.php?do=market&sec=upload'" value="Neue Anzeige schalten" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

</td>


<td class="tableb" align="center" style="width:110px">

    <input type="button" style="width:110px" class="buttons" onclick="location.href='index.php?do=market&sec=myads'" value="Meine Anzeigen" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

</td>



    <td align="right" style="width:506px" class="tableb">





<table border="0" cellspacing="0" cellpadding="0" width="100%">



  <tr>



    <td align="left"> 

    &nbsp;

    <span style="font-size:12px"><b>Kategorie:</b></span>



    <select name="category" ONCHANGE="Chooselecture(this.value)">
    <option value="all"

    <?php  if ($category == "all")  { echo" selected"; } ?>

    >Alle</option>

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

    >(B.A.) Wipäd</option>

        <option value="intbus"

    <?php  if ($category == "intbus")  { echo" selected"; } ?>

    >(B.A.) Intern. Business</option>


        <option value="sozi"

    <?php  if ($category == "sozi")  { echo" selected"; } ?>

    >(B.A.) Sozialökonomik</option>


    <option value="sonstige"

    <?php  if ($category == "sonstige")  { echo" selected"; } ?>

    >Sonstige Vertief.</option>

    <option value="master"

    <?php  if ($category == "master")  { echo" selected"; } ?>

    >Masterstudiengänge</option>
    
    </select>

    
    &nbsp;&nbsp;


    <?php  if ($category == "sem1")  {  ?>



    <span id="LecturesField">


    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >wähle hier eine Vorlesung aus</option>


    <option value="UMV"

    <?php  if ($lecture == "UMV")  { echo" selected = selected"; } ?>

    >Unternehmen, Märkte, Volkswirtschaften (<?php  GetboerseNumbers("UMV"); ?>)</option>

    <option value="UU"

    <?php  if ($lecture == "UU")  { echo" selected = selected"; } ?>

    >Unternehmer & Unternehmen (<?php  GetboerseNumbers("UU"); ?>)</option>

    <option value="IT"

    <?php  if ($lecture == "IT")  { echo" selected = selected"; } ?>

    >Grundlagen des E-Business (<?php  GetboerseNumbers("IT"); ?>)</option>

    <option value="BF"

    <?php  if ($lecture == "BF")  { echo" selected = selected"; } ?>

    >Buchführung (<?php  GetboerseNumbers("BF"); ?>)</option>

    <option value="FM"

    <?php  if ($lecture == "FM")  { echo" selected = selected"; } ?>

    >Finanzmathematik (<?php  GetboerseNumbers("FM"); ?>)</option>

    <option value="LA"

    <?php  if ($lecture == "LA")  { echo" selected = selected"; } ?>

    >Lineare Algebra (<?php  GetboerseNumbers("LA"); ?>)</option>

    </select>



    </span> 



    <?php  } if ($category == "sem2")  { ?>



    <span id="LecturesField">


    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >wähle hier eine Vorlesung aus</option>


    <option value="mikro"

    <?php  if ($lecture == "mikro")  { echo" selected = selected"; } ?>

    >Mikrookönomie (<?php  GetboerseNumbers("mikro"); ?>)</option>

    <option value="makro"

    <?php  if ($lecture == "makro")  { echo" selected = selected"; } ?>

    >Makroökonomie (<?php  GetboerseNumbers("makro"); ?>)</option>

    <option value="absatz"

    <?php  if ($lecture == "absatz")  { echo" selected = selected"; } ?>

    >Absatz / Marketing (<?php  GetboerseNumbers("absatz"); ?>)</option>

    <option value="jahresabschluss"

    <?php  if ($lecture == "jahresabschluss")  { echo" selected = selected"; } ?>

    >Jahresabschluss (<?php  GetboerseNumbers("jahresabschluss"); ?>)</option>

    <option value="recht"

    <?php  if ($lecture == "recht")  { echo" selected = selected"; } ?>

    >Privat- und Handelsrecht I (<?php  GetboerseNumbers("recht"); ?>)</option>

    <option value="ITp"

    <?php  if ($lecture == "ITp")  { echo" selected = selected"; } ?>

    >Internetpraktikum (<?php  GetboerseNumbers("ITp"); ?>)</option>

    </select>



    </span> 


 <?php  } if ($category == "sem3")  { ?>



    <span id="LecturesField">


    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >wähle hier eine Vorlesung aus</option>


    <option value="stat"

    <?php  if ($lecture == "stat")  { echo" selected = selected"; } ?>

    >Statistik (<?php  GetboerseNumbers("stat"); ?>)</option>


    <option value="prod"

    <?php  if ($lecture == "prod")  { echo" selected = selected"; } ?>

    >Produktion, Logistik, Beschaffung (<?php  GetboerseNumbers("prod"); ?>)</option>


    <option value="wus"

    <?php  if ($lecture == "wus")  { echo" selected = selected"; } ?>

    >Wirtschaft & Staat (<?php  GetboerseNumbers("wus"); ?>)</option>


    <option value="recht2"

    <?php  if ($lecture == "recht2")  { echo" selected = selected"; } ?>

    >Privat- und Handelsrecht II (<?php  GetboerseNumbers("recht2"); ?>)</option>


    <option value="oerecht"

    <?php  if ($lecture == "oerecht")  { echo" selected = selected"; } ?>

    >Öffentliches Recht I (<?php  GetboerseNumbers("oerecht"); ?>)</option>


    </select>



    </span>


 <?php  } if ($category == "sem4")  {  ?>

    <span id="LecturesField">


    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >wähle hier eine Vorlesung aus</option>


    <option value="stat2"

    <?php  if ($lecture == "stat2")  { echo" selected = selected"; } ?>

    >Praxis der emp. Wirtschaftsforschung (<?php  GetboerseNumbers("stat2"); ?>)</option>


    <option value="EwA"

    <?php  if ($lecture == "EwA")  { echo" selected = selected"; } ?>

    >Einführung in das wissenschaftl. Arbeiten (<?php  GetboerseNumbers("EwA"); ?>)</option>


    <option value="praes"

    <?php  if ($lecture == "praes")  { echo" selected = selected"; } ?>

    >Präsentationsfähigkeiten (<?php  GetboerseNumbers("praes"); ?>)</option>


    <option value="oerecht2"

    <?php  if ($lecture == "oerecht2")  { echo" selected = selected"; } ?>

    >Öffentliches Recht II (<?php  GetboerseNumbers("oerecht2"); ?>)</option>


    </select>

    </span>

    <?php  } if ($category == "bwl")  {  ?>

    <span id="LecturesField">


    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >wähle hier eine Vorlesung aus</option>


    <option value="control"

    <?php  if ($lecture == "control")  { echo" selected = selected"; } ?>

    >Kostenrechnung und Controlling (<?php  GetboerseNumbers("control"); ?>)</option>


    <option value="intuf"

    <?php  if ($lecture == "intuf")  { echo" selected = selected"; } ?>

    >Internationale Unternehmensführung (<?php  GetboerseNumbers("intuf"); ?>)</option>


     <option value="invest"

    <?php  if ($lecture == "invest")  { echo" selected = selected"; } ?>

    >Investition und Finanzierung (<?php  GetboerseNumbers("invest"); ?>)</option>


     <option value="stratint"

    <?php  if ($lecture == "stratint")  { echo" selected = selected"; } ?>

    >Strateg. und Internat. Management (<?php  GetboerseNumbers("stratint"); ?>)</option>


    <option value="intacc"

    <?php  if ($lecture == "intacc")  { echo" selected = selected"; } ?>

    >International Accounting and Controlling (<?php  GetboerseNumbers("intacc"); ?>)</option>


    <option value="markman"

    <?php  if ($lecture == "markman")  { echo" selected = selected"; } ?>

    >Marketing Management (<?php  GetboerseNumbers("markman"); ?>)</option>


    <option value="logi"

    <?php  if ($lecture == "logi")  { echo" selected = selected"; } ?>

    >Operations and Logistics (<?php  GetboerseNumbers("logi"); ?>)</option>


    <option value="entrepreneur"

    <?php  if ($lecture == "entrepreneur")  { echo" selected = selected"; } ?>

    >Innovation and Entrepreneurship (<?php  GetboerseNumbers("entrepreneur"); ?>)</option>


    <option value="finanz"

    <?php  if ($lecture == "finanz")  { echo" selected = selected"; } ?>

    >Finanzierung (<?php  GetboerseNumbers("finanz"); ?>)</option>


    <option value="tax"

    <?php  if ($lecture == "tax")  { echo" selected = selected"; } ?>

    >Taxation (<?php  GetboerseNumbers("tax"); ?>)</option>


    <option value="bpaed"

    <?php  if ($lecture == "bpaed")  { echo" selected = selected"; } ?>

    >Betriebspädagogik (<?php  GetboerseNumbers("bpaed"); ?>)</option>

    </select>

    </span>

    <?php  } if ($category == "vwl")  {  ?>

    <span id="LecturesField">


    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >wähle hier eine Vorlesung aus</option>


    <option value="auw"

    <?php  if ($lecture == "auw")  { echo" selected = selected"; } ?>

    >Außenwirtschaft (<?php  GetboerseNumbers("auw"); ?>)</option>


    <option value="OeoeS"

    <?php  if ($lecture == "OeoeS")  { echo" selected = selected"; } ?>

    >Ökonomie des öffentlichen Sektors (<?php  GetboerseNumbers("OeoeS"); ?>)</option>


        <option value="arbp"

    <?php  if ($lecture == "arbp")  { echo" selected = selected"; } ?>

    >Arbeitsmarktpolitik (<?php  GetboerseNumbers("arbp"); ?>)</option>


            <option value="wettbp"

    <?php  if ($lecture == "wettbp")  { echo" selected = selected"; } ?>

    >Wettbewerbstheorie und –politik (<?php  GetboerseNumbers("wettbp"); ?>)</option>


    <option value="apb"

    <?php  if ($lecture == "apb")  { echo" selected = selected"; } ?>

    >Arbeit, Personal und Bildung (<?php  GetboerseNumbers("apb"); ?>)</option>


    <option value="EoM"

    <?php  if ($lecture == "EoM")  { echo" selected = selected"; } ?>

    >Economics of Management (<?php  GetboerseNumbers("EoM"); ?>)</option>


    <option value="QwF"

    <?php  if ($lecture == "QwF")  { echo" selected = selected"; } ?>

    >Quantitative Wirtschaftsforschung (<?php  GetboerseNumbers("QwF"); ?>)</option>


    <option value="wp"

    <?php  if ($lecture == "wp")  { echo" selected = selected"; } ?>

    >Wirtschaftspolitik (<?php  GetboerseNumbers("wp"); ?>)</option>


    <option value="money"

    <?php  if ($lecture == "money")  { echo" selected = selected"; } ?>

    >Money and Capital Markets (<?php  GetboerseNumbers("money"); ?>)</option>


    <option value="coopst"

    <?php  if ($lecture == "coopst")  { echo" selected = selected"; } ?>

    >Cooperative Studies (<?php  GetboerseNumbers("coopst"); ?>)</option>

    </select>



    </span>

    <?php  } if ($category == "info")  {  ?>

    <span id="LecturesField">


    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >wähle hier eine Vorlesung aus</option>


    <option value="is"

    <?php  if ($lecture == "is")  { echo" selected = selected"; } ?>

    >Innovation Strategy (<?php  GetboerseNumbers("is"); ?>)</option>


    <option value="innot"

    <?php  if ($lecture == "innot")  { echo" selected = selected"; } ?>

    >Innovation Technology (<?php  GetboerseNumbers("innot"); ?>)</option>


    <option value="mtc"

    <?php  if ($lecture == "mtc")  { echo" selected = selected"; } ?>

    >Managing Technological Change (<?php  GetboerseNumbers("mtc"); ?>)</option>


    <option value="ebm"

    <?php  if ($lecture == "ebm")  { echo" selected = selected"; } ?>

    >E-Business Management (<?php  GetboerseNumbers("ebm"); ?>)</option>

    </select>



    </span>

    <?php  } if ($category == "wipaed")  {  ?>


    <span id="LecturesField">


    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >wähle hier eine Vorlesung aus</option>


    <option value="gwip"

    <?php  if ($lecture == "gwip")  { echo" selected = selected"; } ?>

    >Grundlagen der Wipäd (<?php  GetboerseNumbers("gwip"); ?>)</option>


    <option value="praesmod"

    <?php  if ($lecture == "praesmod")  { echo" selected = selected"; } ?>

    >Präsentations- und Moderationstechniken (<?php  GetboerseNumbers("praesmod"); ?>)</option>


        <option value="berufwb"

    <?php  if ($lecture == "berufwb")  { echo" selected = selected"; } ?>

    >Berufliche Weiterbildung (<?php  GetboerseNumbers("berufwb"); ?>)</option>


        <option value="paedsem"

    <?php  if ($lecture == "paedsem")  { echo" selected = selected"; } ?>

    >Betriebspädagogisches Seminar (<?php  GetboerseNumbers("paedsem"); ?>)</option>


        <option value="projstudi"

    <?php  if ($lecture == "projstudi")  { echo" selected = selected"; } ?>

    >Erkundungsprojekt / Schulpraktische Studien (<?php  GetboerseNumbers("projstudi"); ?>)</option>


    <option value="zweitfach"

    <?php  if ($lecture == "zweitfach")  { echo" selected = selected"; } ?>

    >Module der Zweitfach-Vertiefung (<?php  GetboerseNumbers("zweitfach"); ?>)</option>

    </select>

    </span>

    <?php  } if ($category == "intbus")  {  ?>

    <span id="LecturesField">

    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >wähle hier eine Vorlesung aus</option>


    <option value="íntrecht1"

    <?php  if ($lecture == "intrecht1")  { echo" selected = selected"; } ?>

    >Europäisches und Internationales Recht (<?php  GetboerseNumbers("intrecht1"); ?>)</option>

    <option value="angel"

    <?php  if ($lecture == "angel")  { echo" selected = selected"; } ?>

    >Angloamerikanische Gesellschaften (<?php  GetboerseNumbers("angel"); ?>)</option>


    <option value="europglob"

    <?php  if ($lecture == "europglob")  { echo" selected = selected"; } ?>

    >Europäisierung & Globalisierung (<?php  GetboerseNumbers("europglob"); ?>)</option>


        <option value="intbez"

    <?php  if ($lecture == "intbez")  { echo" selected = selected"; } ?>

    >Internationale Beziehungen (<?php  GetboerseNumbers("intbez"); ?>)</option>


    <option value="intstud"

    <?php  if ($lecture == "intstud")  { echo" selected = selected"; } ?>

    >Internationale Studien (<?php  GetboerseNumbers("intstud"); ?>)</option>


        <option value="regional"

    <?php  if ($lecture == "regional")  { echo" selected = selected"; } ?>

    >Regionalstudien (<?php  GetboerseNumbers("regional"); ?>)</option>


        <option value="romanisch"

    <?php  if ($lecture == "romanisch")  { echo" selected = selected"; } ?>

    >Romanischsprachige Gesellschaften (<?php  GetboerseNumbers("romanisch"); ?>)</option>

    </select>

    </span>



    <?php  } if ($category == "sozi")  {  ?>

    <span id="LecturesField">

    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >wähle hier eine Vorlesung aus</option>


    <option value="sozio"

    <?php  if ($lecture == "sozio")  { echo" selected = selected"; } ?>

    >Soziologie (<?php  GetboerseNumbers("sozio"); ?>)</option>

    <option value="transbez"

    <?php  if ($lecture == "transbez")  { echo" selected = selected"; } ?>

    >Internat. und transnationale Beziehungen (<?php  GetboerseNumbers("transbez"); ?>)</option>


    <option value="regio"

    <?php  if ($lecture == "regio")  { echo" selected = selected"; } ?>

    >Regionen im internationalen System (<?php  GetboerseNumbers("regio"); ?>)</option>


        <option value="grundpsy"

    <?php  if ($lecture == "grundpsy")  { echo" selected = selected"; } ?>

    >Grundl. + Anwend.felder d. Sozialpsychologie (<?php  GetboerseNumbers("grundpsy"); ?>)</option>


    <option value="empsozi"

    <?php  if ($lecture == "empsozi")  { echo" selected = selected"; } ?>

    >Einführung in empirische Sozialforschung (<?php  GetboerseNumbers("empsozi"); ?>)</option>


        <option value="compana"

    <?php  if ($lecture == "compana")  { echo" selected = selected"; } ?>

    >Computergestützte Datenanalyse (<?php  GetboerseNumbers("compana"); ?>)</option>


        <option value="intkom"

    <?php  if ($lecture == "intkom")  { echo" selected = selected"; } ?>

    >Internationale Kommunikation (<?php  GetboerseNumbers("intkom"); ?>)</option>


        <option value="personal"

    <?php  if ($lecture == "personal")  { echo" selected = selected"; } ?>

    >Personal und Organisation (<?php  GetboerseNumbers("personal"); ?>)</option>


        <option value="anamgesell"

    <?php  if ($lecture == "anamgesell")  { echo" selected = selected"; } ?>

    >Analyse moderner Gesellschaften (<?php  GetboerseNumbers("anamgesell"); ?>)</option>


    <option value="empmus"

    <?php  if ($lecture == "empmus")  { echo" selected = selected"; } ?>

    >Empirische Methoden und Statistik (<?php  GetboerseNumbers("empmus"); ?>)</option>


        <option value="komumed"

    <?php  if ($lecture == "komumed")  { echo" selected = selected"; } ?>

    >Kommunikation und Massenmedien (<?php  GetboerseNumbers("komumed"); ?>)</option>


        <option value="konsum"

    <?php  if ($lecture == "konsum")  { echo" selected = selected"; } ?>

    >Konsumentenverhalten (<?php  GetboerseNumbers("konsum"); ?>)</option>


            <option value="soziprakt"

    <?php  if ($lecture == "soziprakt")  { echo" selected = selected"; } ?>

    >Soziologisches Praktikum (<?php  GetboerseNumbers("soziprakt"); ?>)</option>


        <option value="sozialp"

    <?php  if ($lecture == "sozialp")  { echo" selected = selected"; } ?>

    >Sozial- und Arbeitspolitik (<?php  GetboerseNumbers("sozialp"); ?>)</option>


    <option value="spezkom"

    <?php  if ($lecture == "spezkom")  { echo" selected = selected"; } ?>

    >Spezielle Kommunikationswissenschaft (<?php  GetboerseNumbers("spezkom"); ?>)</option>


        <option value="wirtorgsoz"

    <?php  if ($lecture == "wirtorgsoz")  { echo" selected = selected"; } ?>

    >Wirtschafts- und Organisationssoziologie (<?php  GetboerseNumbers("wirtorgsoz"); ?>)</option>


        <option value="wsugesch"

    <?php  if ($lecture == "wsugesch")  { echo" selected = selected"; } ?>

    >Wirt.-, Sozial- u. Unternehmensgeschichte (<?php  GetboerseNumbers("wsugesch"); ?>)</option>

    </select>

    </span>

    <?php  } if ($category == "sonstige")  {  ?>

    <span id="LecturesField">

    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >wähle hier eine Vorlesung aus</option>


    <option value="daten"

    <?php  if ($lecture == "daten")  { echo" selected = selected"; } ?>

    >Datenermittlung und Datenanalyse (<?php  GetboerseNumbers("daten"); ?>)</option>


    <option value="arbeitsr"

    <?php  if ($lecture == "arbeitsr")  { echo" selected = selected"; } ?>

    >Arbeitsrecht (<?php  GetboerseNumbers("arbeitsr"); ?>)</option>


        <option value="gesellr"

    <?php  if ($lecture == "gesellr")  { echo" selected = selected"; } ?>

    >Unternehmens- und Gesellschaftsrecht (<?php  GetboerseNumbers("gesellr"); ?>)</option>


        <option value="versr"

    <?php  if ($lecture == "versr")  { echo" selected = selected"; } ?>

    >Versicherungswesen (<?php  GetboerseNumbers("versr"); ?>)</option>

    </select>

    </span>

    <?php  } if ($category == "master")  {  ?>

    <span id="LecturesField">

    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">

    <option value="empty"
    <?php  if ($lecture == "empty")  { echo" selected = selected"; } ?>
    >wähle hier eine Vorlesung aus</option>
               
    <option value="m_aup"

    <?php  if ($lecture == "m_aup")  { echo" selected = selected"; } ?>

    >(M.Sc.) Arbeitsmarkt u. Personal (<?php  GetboerseNumbers("m_aup"); ?>)</option>

    <option value="m_eco"

    <?php  if ($lecture == "m_eco")  { echo" selected = selected"; } ?>

    >(M.Sc.) Economics (<?php  GetboerseNumbers("m_eco"); ?>)</option>

    <option value="m_fact"

    <?php  if ($lecture == "m_fact")  { echo" selected = selected"; } ?>

    >(M.A.) FACT (<?php  GetboerseNumbers("m_fact"); ?>)</option>

    <option value="m_ibs"

    <?php  if ($lecture == "m_ibs")  { echo" selected = selected"; } ?>

    >(M.Sc.) IBS (<?php  GetboerseNumbers("m_ibs"); ?>)</option>
       
    <option value="m_iis"

    <?php  if ($lecture == "m_iis")  { echo" selected = selected"; } ?>

    >(M.Sc.) IIS (<?php  GetboerseNumbers("m_iis"); ?>)</option>
    
    <option value="m_mgm"

    <?php  if ($lecture == "m_mgm")  { echo" selected = selected"; } ?>

    >(M.A.)	Management (<?php  GetboerseNumbers("m_mgm"); ?>)</option>  
    
    <option value="m_mark"

    <?php  if ($lecture == "m_mark")  { echo" selected = selected"; } ?>

    >(M.A.) Marketing (<?php  GetboerseNumbers("m_mark"); ?>)</option>
       
    <option value="m_sozi"

    <?php  if ($lecture == "m_sozi")  { echo" selected = selected"; } ?>

    >(M.A.) Sozialökonomik (<?php  GetboerseNumbers("m_sozi"); ?>)</option>
    
    <option value="m_paed"

    <?php  if ($lecture == "m_paed")  { echo" selected = selected"; } ?>

    >(M.A.) Wirtschaftspädagogik (<?php  GetboerseNumbers("m_paed"); ?>)</option>  


    </select>

    </span>
    
    <?php  } if ($category == "stuff")  { ?>



    <span id="LecturesField">
    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">
    <option>sonstige Angebote (<?php  GetboerseNumbers("stuff"); ?>)</option>
    </select>
    </span>



<?php  } if ($category == "all")  { ?>



    <span id="LecturesField">    
    <select id="lecture" name="lecture" style="width:250px" ONCHANGE="sendTdata()">
    <option>sortiert nach Datum</option>
    </select>
    </span>



<?php  }  if ($browser == "IE" or $browser == "Netscape")  {  ?>



<script type="text/javascript" language="JavaScript1.2">

  function sendTdata()  {

    document.formdatab.submit(); 

  }



  function Chooselecture(WhichSem)  { 



    if (WhichSem == "stuff")  {



        lectureB = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"\">sonstige Angebote (<?php GetboerseNumbers("stuff"); ?>)</option></select>";


        document.getElementById("LecturesField").innerHTML = lectureB; 


    }



    if (WhichSem.substr(3,4) == "1")  {



        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"UMV\">Unternehmen, Märkte, Volkswirtschaften (<?php  GetboerseNumbers(UMV); ?>)</option><option value=\"UU\">Unternehmer & Unternehmen (<?php  GetboerseNumbers("UU"); ?>)</option><option value=\"IT\">Grundlagen des E-Business (<?php  GetboerseNumbers("IT"); ?>)</option><option value=\"BF\">Buchführung (<?php  GetboerseNumbers("BF"); ?>)</option><option value=\"FM\">Finanzmathematik (<?php  GetboerseNumbers("FM"); ?>)</option><option value=\"LA\">Lineare Algebra (<?php  GetboerseNumbers("LA"); ?>)</option></select>";


        document.getElementById("LecturesField").innerHTML = lecturec; 


    }



    if (WhichSem.substr(3,4) == "2")  { 



        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"mikro\">Mikroökonomie (<?php  GetboerseNumbers("mikro"); ?>)</option><option value=\"makro\">Makroökonomie (<?php  GetboerseNumbers("makro"); ?>)</option><option value=\"absatz\">Absatz / Marketing (<?php  GetboerseNumbers("absatz"); ?>)</option><option value=\"jahresabschluss\">Jahresabschluss (<?php  GetboerseNumbers("jahresabschluss"); ?>)</option><option value=\"recht\">Privat- und Handelsrecht I (<?php  GetboerseNumbers("recht"); ?>)</option><option value=\"ITp\">Internetpraktikum (<?php  GetboerseNumbers("ITp"); ?>)</option></select>";

        lectured = "<option value=\"mikro\">Mikroökonomie (<?php  GetboerseNumbers("mikro"); ?>)</option><option value=\"makro\">Makroökonomie (<?php  GetboerseNumbers("makro"); ?>)</option><option value=\"absatz\">Absatz / Marketing (<?php  GetboerseNumbers("absatz"); ?>)</option><option value=\"jahresabschluss\">Jahresabschluss (<?php  GetboerseNumbers("jahresabschluss"); ?>)</option><option value=\"recht\">Privat- und Handelsrecht I (<?php  GetboerseNumbers("recht"); ?>)</option><option value=\"ITp\">Internetpraktikum (<?php  GetboerseNumbers("ITp"); ?>)</option>";


        document.getElementById("LecturesField").innerHTML = lecturec; 


    }



    if (WhichSem.substr(3,4) == "3")  { 



        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"stat\">Statistik (<?php  GetboerseNumbers("stat"); ?>)</option><option value=\"prod\">Produktion, Logistik, Beschaffung (<?php  GetboerseNumbers("prod"); ?>)</option><option value=\"wus\">Wirtschaft & Staat (<?php  GetboerseNumbers("wus"); ?>)</option><option value=\"recht2\">Privat- und Handelsrecht II (<?php  GetboerseNumbers("recht2"); ?>)</option><option value=\"oerecht\">Öffentliches Recht I (<?php  GetboerseNumbers("oerecht"); ?>)</option></select>";


        document.getElementById("LecturesField").innerHTML = lecturec;



    }


    if (WhichSem.substr(3,4) == "4")  {


        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"stat2\">Praxis der emp. Wirtschaftsforschung (<?php  GetboerseNumbers("stat2"); ?>)</option><option value=\"EwA\">Einführung in das wissenschaftl. Arbeiten (<?php  GetboerseNumbers("EwA"); ?>)</option><option value=\"praes\">Präsentationsfähigkeiten (<?php  GetboerseNumbers("praes"); ?>)</option><option value=\"oerecht2\">Öffentliches Recht II (<?php  GetboerseNumbers("oerecht2"); ?>)</option></select>";


        document.getElementById("LecturesField").innerHTML = lecturec;


    }

    if (WhichSem == "bwl")  {



        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"control\">Kostenrechnung und Controlling (<?php  GetboerseNumbers("control"); ?>)</option><option value=\"intuf\">Internationale Unternehmensführung (<?php  GetboerseNumbers("intuf"); ?>)</option><option value=\"invest\">Investition und Finanzierung (<?php  GetboerseNumbers("invest"); ?>)</option><option value=\"stratint\">Strateg. und Internat. Management (<?php  GetboerseNumbers("stratint"); ?>)</option><option value=\"intacc\">International Accounting and Controlling (<?php  GetboerseNumbers("intacc"); ?>)</option><option value=\"markman\">Marketing Management (<?php  GetboerseNumbers("markman"); ?>)</option><option value=\"logi\">Operations and Logistics (<?php  GetboerseNumbers("logi"); ?>)</option><option value=\"entrepreneuer\">Innovation and Entrepreneurship (<?php  GetboerseNumbers("entrepreneur"); ?>)</option><option value=\"finanz\">Finanzierung (<?php  GetboerseNumbers("finanz"); ?>)</option><option value=\"tax\">Taxation (<?php  GetboerseNumbers("tax"); ?>)</option><option value=\"bpaed\">Betriebspädagogik (<?php  GetboerseNumbers("bpaed"); ?>)</option></select>";



        document.getElementById("LecturesField").innerHTML = lecturec;



    }

    if (WhichSem == "vwl")  {



        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"auw\">Außenwirtschaft (<?php  GetboerseNumbers("auw"); ?>)</option><option value=\"OeoeS\">Ökonomie des öffentlichen Sektors (<?php  GetboerseNumbers("OeoeS"); ?>)</option><option value=\"arbp\">Arbeitsmarktpolitik (<?php  GetboerseNumbers("arbp"); ?>)</option><option value=\"wettbp\">Wettbewerbstheorie und –politik (<?php  GetboerseNumbers("wettbp"); ?>)</option><option value=\"apb\">Arbeit, Personal und Bildung (<?php  GetboerseNumbers("apb"); ?>)</option><option value=\"EoM\">Economics of Management (<?php  GetboerseNumbers("EoM"); ?>)</option><option value=\"QwF\">Quantitative Wirtschaftsforschung (<?php  GetboerseNumbers("QwF"); ?>)</option><option value=\"wp\">Wirtschaftspolitik (<?php  GetboerseNumbers("wp"); ?>)</option><option value=\"money\">Money and Capital Markets (<?php  GetboerseNumbers("money"); ?>)</option><option value=\"coopst\">Cooperative Studies (<?php  GetboerseNumbers("coopst"); ?>)</option></select>";

        document.getElementById("LecturesField").innerHTML = lecturec;



    }

    if (WhichSem == "info")  {



        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"is\">Innovation Strategy (<?php  GetboerseNumbers("is"); ?>)</option><option value=\"innot\">Innovation Technology (<?php  GetboerseNumbers("innot"); ?>)</option><option value=\"mtc\">Managing Technological Change (<?php  GetboerseNumbers("mtc"); ?>)</option><option value=\"ebm\">E-Business Management (<?php  GetboerseNumbers("ebm"); ?>)</option></select>";


        document.getElementById("LecturesField").innerHTML = lecturec;


    }

    if (WhichSem == "wipaed")  {

        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"gwip\">Grundlagen der Wipäd (<?php  GetboerseNumbers("gwip"); ?>)</option><option value=\"praesmod\">Präsentations- und Moderationstechniken (<?php  GetboerseNumbers("praesmod"); ?>)</option><option value=\"berufwb\">Berufliche Weiterbildung (<?php  GetboerseNumbers("berufwb"); ?>)</option><option value=\"paedsem\">Betriebspädagogisches Seminar (<?php  GetboerseNumbers("paedsem"); ?>)</option><option value=\"projstudi\">Erkundungsprojekt / Schulpraktische Studien (<?php  GetboerseNumbers("projstudi"); ?>)</option><option value=\"zweitfach\">Module der Zweitfach-Vertiefung (<?php  GetboerseNumbers("zweitfach"); ?>)</option></select>";

        document.getElementById("LecturesField").innerHTML = lecturec;

    }

    if (WhichSem == "intbus")  {

        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"intrecht1\">Europäisches und Internationales Recht (<?php  GetboerseNumbers("intrecht1"); ?>)</option><option value=\"angel\">Angloamerikanische Gesellschaften (<?php  GetboerseNumbers("angel"); ?>)</option><option value=\"europglob\">Europäisierung & Globalisierung (<?php  GetboerseNumbers("europglob"); ?>)</option><option value=\"intbez\">Internationale Beziehungen (<?php  GetboerseNumbers("intbez"); ?>)</option><option value=\"intstud\">Internationale Studien (<?php  GetboerseNumbers("intstud"); ?>)</option><option value=\"regional\">Regionalstudien (<?php  GetboerseNumbers("regional"); ?>)</option><option value=\"romanisch\">Romanischsprachige Gesellschaften (<?php  GetboerseNumbers("romanisch"); ?>)</option></select>";

        document.getElementById("LecturesField").innerHTML = lecturec;

    }


    if (WhichSem == "sozi")  {

        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"sozio\">Soziologie (<?php  GetboerseNumbers("sozio"); ?>)</option><option value=\"transbez\">Internat. und transnationale Beziehungen (<?php  GetboerseNumbers("transbez"); ?>)</option><option value=\"regio\">Regionen im internationalen System (<?php  GetboerseNumbers("regio"); ?>)</option><option value=\"grundpsy\">Grundl. + Anwend.felder d. Sozialpsychologie (<?php  GetboerseNumbers("grundpsy"); ?>)</option><option value=\"empsozi\">Einführung in empirische Sozialforschung (<?php  GetboerseNumbers("empsozi"); ?>)</option><option value=\"compana\">Computergestützte Datenanalyse (<?php  GetboerseNumbers("compana"); ?>)</option><option value=\"intkom\">Internationale Kommunikation (<?php  GetboerseNumbers("intkom"); ?>)</option><option value=\"personal\">Personal und Organisation (<?php  GetboerseNumbers("personal"); ?>)</option><option value=\"anamgesell\">Analyse moderner Gesellschaften (<?php  GetboerseNumbers("anamgesell"); ?>)</option><option value=\"empmus\">Empirische Methoden und Statistik (<?php  GetboerseNumbers("empmus"); ?>)</option><option value=\"konsum\">Konsumentenverhalten (<?php  GetboerseNumbers("konsum"); ?>)</option><option value=\"soziprakt\">Soziologisches Praktikum (<?php  GetboerseNumbers("soziprakt"); ?>)</option><option value=\"sozialp\">Sozial- und Arbeitspolitik (<?php  GetboerseNumbers("sozialp"); ?>)</option><option value=\"spezkom\">Spezielle Kommunikationswissenschaft (<?php  GetboerseNumbers("spezkom"); ?>)</option><option value=\"wirtorgsoz\">Wirtschafts- und Organisationssoziologie (<?php  GetboerseNumbers("wirtorgsoz"); ?>)</option><option value=\"wsugesch\">Wirt.-, Sozial- u. Unternehmensgeschichte (<?php  GetboerseNumbers("wsugesch"); ?>)</option></select>";

        document.getElementById("LecturesField").innerHTML = lecturec;

    }

    if (WhichSem == "sonstige")  {

        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"daten\">Datenermittlung und Datenanalyse (<?php  GetboerseNumbers("daten"); ?>)</option><option value=\"arbeitsr\">Arbeitsrecht (<?php  GetboerseNumbers("arbeitsr"); ?>)</option><option value=\"gesellr\">Unternehmens- und Gesellschaftsrecht (<?php  GetboerseNumbers("gesellr"); ?>)</option><option value=\"versr\">Versicherungswesen (<?php  GetboerseNumbers("versr"); ?>)</option></select>";

        document.getElementById("LecturesField").innerHTML = lecturec;

    }

    if (WhichSem == "master")  {

        lecturec = "<select id=\"lecture\" name=\"lecture\" style=\"width:250px\" ONCHANGE=\"sendTdata()\"><option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"m_aup\">(M.Sc.) Arbeitsmarkt u. Personal (<?php  GetboerseNumbers("m_aup"); ?>)</option><option value=\"m_eco\">(M.Sc.) Economics (<?php  GetboerseNumbers("m_eco"); ?>)</option><option value=\"m_fact\">(M.A.) FACT (<?php  GetboerseNumbers("m_fact"); ?>)</option><option value=\"m_ibs\">(M.Sc.) IBS (<?php  GetboerseNumbers("m_ibs"); ?>)</option><option value=\"m_iis\">(M.Sc.) IIS (<?php  GetboerseNumbers("m_iis"); ?>)</option><option value=\"m_mgm\">(M.A.) Management (<?php  GetboerseNumbers("m_mgm"); ?>)</option><option value=\"m_mark\">(M.A.)	Marketing (<?php  GetboerseNumbers("m_mark"); ?>)</option><option value=\"m_sozi\">(M.A.) Sozialökonomik (<?php  GetboerseNumbers("m_sozi"); ?>)</option><option value=\"m_paed\">(M.A.) Wirtschaftspädagogik (<?php  GetboerseNumbers("m_paed"); ?>)</option></select>";

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



        lectureB = "<option value=\"\">sonstige Angebote (<?php GetboerseNumbers("stuff"); ?>)</option>";


        document.getElementById("lecture").innerHTML = lectureB;


    }



    if (WhichSem.substr(3,4) == "1")  {



        lecturec = "<option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"UMV\">Unternehmen, Märkte, Volkswirtschaften (<?php  GetboerseNumbers(UMV); ?>)</option><option value=\"UU\">Unternehmer & Unternehmen (<?php  GetboerseNumbers("UU"); ?>)</option><option value=\"IT\">Grundlagen des E-Business (<?php  GetboerseNumbers("IT"); ?>)</option><option value=\"BF\">Buchführung (<?php  GetboerseNumbers("BF"); ?>)</option><option value=\"FM\">Finanzmathematik (<?php  GetboerseNumbers("FM"); ?>)</option><option value=\"LA\">Lineare Algebra (<?php  GetboerseNumbers("LA"); ?>)</option>";


        document.getElementById("lecture").innerHTML = lecturec;


    }



    if (WhichSem.substr(3,4) == "2")  {



        lecturec = "<option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"mikro\">Mikroökonomie (<?php  GetboerseNumbers("mikro"); ?>)</option><option value=\"makro\">Makroökonomie (<?php  GetboerseNumbers("makro"); ?>)</option><option value=\"absatz\">Absatz / Marketing (<?php  GetboerseNumbers("absatz"); ?>)</option><option value=\"jahresabschluss\">Jahresabschluss (<?php  GetboerseNumbers("jahresabschluss"); ?>)</option><option value=\"recht\">Privat- und Handelsrecht I (<?php  GetboerseNumbers("recht"); ?>)</option><option value=\"ITp\">Internetpraktikum (<?php  GetboerseNumbers("ITp"); ?>)</option>";


        document.getElementById("lecture").innerHTML = lecturec;


    }

    if (WhichSem.substr(3,4) == "3")  {



        lecturec = "<option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"stat\">Statistik (<?php  GetboerseNumbers("stat"); ?>)</option><option value=\"prod\">Produktion, Logistik, Beschaffung (<?php  GetboerseNumbers("prod"); ?>)</option><option value=\"wus\">Wirtschaft & Staat (<?php  GetboerseNumbers("wus"); ?>)</option><option value=\"recht2\">Privat- und Handelsrecht II (<?php  GetboerseNumbers("recht2"); ?>)</option><option value=\"oerecht\">Öffentliches Recht I (<?php  GetboerseNumbers("oerecht"); ?>)</option>";


        document.getElementById("lecture").innerHTML = lecturec;


    }

     if (WhichSem.substr(3,4) == "4")  {

        lecturec = "<option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"stat2\">Praxis der emp. Wirtschaftsforschung (<?php  GetboerseNumbers("stat2"); ?>)</option><option value=\"EwA\">Einführung in das wissenschaftl. Arbeiten (<?php  GetboerseNumbers("EwA"); ?>)</option><option value=\"praes\">Präsentationsfähigkeiten (<?php  GetboerseNumbers("praes"); ?>)</option><option value=\"oerecht2\">Öffentliches Recht II (<?php  GetboerseNumbers("oerecht2"); ?>)</option>";

        document.getElementById("lecture").innerHTML = lecturec;

    }

    if (WhichSem == "bwl")  {


        lecturec = "<option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"control\">Kostenrechnung und Controlling (<?php  GetboerseNumbers("control"); ?>)</option><option value=\"intuf\">Internationale Unternehmensführung (<?php  GetboerseNumbers("intuf"); ?>)</option><option value=\"invest\">Investition und Finanzierung (<?php  GetboerseNumbers("invest"); ?>)</option><option value=\"stratint\">Strateg. und Internat. Management (<?php  GetboerseNumbers("stratint"); ?>)</option><option value=\"intacc\">International Accounting and Controlling (<?php  GetboerseNumbers("intacc"); ?>)</option><option value=\"markman\">Marketing Management (<?php  GetboerseNumbers("markman"); ?>)</option><option value=\"logi\">Operations and Logistics (<?php  GetboerseNumbers("logi"); ?>)</option><option value=\"entrepreneuer\">Innovation and Entrepreneurship (<?php  GetboerseNumbers("entrepreneur"); ?>)</option><option value=\"finanz\">Finanzierung (<?php  GetboerseNumbers("finanz"); ?>)</option><option value=\"tax\">Taxation (<?php  GetboerseNumbers("tax"); ?>)</option><option value=\"bpaed\">Betriebspädagogik (<?php  GetboerseNumbers("bpaed"); ?>)</option>";


        document.getElementById("lecture").innerHTML = lecturec;


    }

    if (WhichSem == "vwl")  {


        lecturec = "<option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"auw\">Außenwirtschaft (<?php  GetboerseNumbers("auw"); ?>)</option><option value=\"OeoeS\">Ökonomie des öffentlichen Sektors (<?php  GetboerseNumbers("OeoeS"); ?>)</option><option value=\"arbp\">Arbeitsmarktpolitik (<?php  GetboerseNumbers("arbp"); ?>)</option><option value=\"wettbp\">Wettbewerbstheorie und –politik (<?php  GetboerseNumbers("wettbp"); ?>)</option><option value=\"apb\">Arbeit, Personal und Bildung (<?php  GetboerseNumbers("apb"); ?>)</option><option value=\"EoM\">Economics of Management (<?php  GetboerseNumbers("EoM"); ?>)</option><option value=\"QwF\">Quantitative Wirtschaftsforschung (<?php  GetboerseNumbers("QwF"); ?>)</option><option value=\"wp\">Wirtschaftspolitik (<?php  GetboerseNumbers("wp"); ?>)</option><option value=\"money\">Money and Capital Markets (<?php  GetboerseNumbers("money"); ?>)</option><option value=\"coopst\">Cooperative Studies (<?php  GetboerseNumbers("coopst"); ?>)</option>";

        document.getElementById("lecture").innerHTML = lecturec;


    }

    if (WhichSem == "info")  {

        lecturec = "<option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"is\">Innovation Strategy (<?php  GetboerseNumbers("is"); ?>)</option><option value=\"innot\">Innovation Technology (<?php  GetboerseNumbers("innot"); ?>)</option><option value=\"mtc\">Managing Technological Change (<?php  GetboerseNumbers("mtc"); ?>)</option><option value=\"ebm\">E-Business Management (<?php  GetboerseNumbers("ebm"); ?>)</option>";

        document.getElementById("lecture").innerHTML = lecturec;


    }

    if (WhichSem == "wipaed")  {

        lecturec = "<option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"gwip\">Grundlagen der Wipäd (<?php  GetboerseNumbers("gwip"); ?>)</option><option value=\"praesmod\">Präsentations- und Moderationstechniken (<?php  GetboerseNumbers("praesmod"); ?>)</option><option value=\"berufwb\">Berufliche Weiterbildung (<?php  GetboerseNumbers("berufwb"); ?>)</option><option value=\"paedsem\">Betriebspädagogisches Seminar (<?php  GetboerseNumbers("paedsem"); ?>)</option><option value=\"projstudi\">Erkundungsprojekt / Schulpraktische Studien (<?php  GetboerseNumbers("projstudi"); ?>)</option><option value=\"zweitfach\">Module der Zweitfach-Vertiefung (<?php  GetboerseNumbers("zweitfach"); ?>)</option>";

        document.getElementById("lecture").innerHTML = lecturec;

    }

    if (WhichSem == "intbus")  {

        lecturec = "<option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"intrecht1\">Europäisches und Internationales Recht (<?php  GetboerseNumbers("intrecht1"); ?>)</option><option value=\"angel\">Angloamerikanische Gesellschaften (<?php  GetboerseNumbers("angel"); ?>)</option><option value=\"europglob\">Europäisierung & Globalisierung (<?php  GetboerseNumbers("europglob"); ?>)</option><option value=\"intbez\">Internationale Beziehungen (<?php  GetboerseNumbers("intbez"); ?>)</option><option value=\"intstud\">Internationale Studien (<?php  GetboerseNumbers("intstud"); ?>)</option><option value=\"regional\">Regionalstudien (<?php  GetboerseNumbers("regional"); ?>)</option><option value=\"romanisch\">Romanischsprachige Gesellschaften (<?php  GetboerseNumbers("romanisch"); ?>)</option>";

        document.getElementById("lecture").innerHTML = lecturec;

    }


    if (WhichSem == "sozi")  {

        lecturec = "<option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"sozio\">Soziologie (<?php  GetboerseNumbers("sozio"); ?>)</option><option value=\"transbez\">Internat. und transnationale Beziehungen (<?php  GetboerseNumbers("transbez"); ?>)</option><option value=\"regio\">Regionen im internationalen System (<?php  GetboerseNumbers("regio"); ?>)</option><option value=\"grundpsy\">Grundl. + Anwend.felder d. Sozialpsychologie (<?php  GetboerseNumbers("grundpsy"); ?>)</option><option value=\"empsozi\">Einführung in empirische Sozialforschung (<?php  GetboerseNumbers("empsozi"); ?>)</option><option value=\"compana\">Computergestützte Datenanalyse (<?php  GetboerseNumbers("compana"); ?>)</option><option value=\"intkom\">Internationale Kommunikation (<?php  GetboerseNumbers("intkom"); ?>)</option><option value=\"personal\">Personal und Organisation (<?php  GetboerseNumbers("personal"); ?>)</option><option value=\"anamgesell\">Analyse moderner Gesellschaften (<?php  GetboerseNumbers("anamgesell"); ?>)</option><option value=\"empmus\">Empirische Methoden und Statistik (<?php  GetboerseNumbers("empmus"); ?>)</option><option value=\"konsum\">Konsumentenverhalten (<?php  GetboerseNumbers("konsum"); ?>)</option><option value=\"soziprakt\">Soziologisches Praktikum (<?php  GetboerseNumbers("soziprakt"); ?>)</option><option value=\"sozialp\">Sozial- und Arbeitspolitik (<?php  GetboerseNumbers("sozialp"); ?>)</option><option value=\"spezkom\">Spezielle Kommunikationswissenschaft (<?php  GetboerseNumbers("spezkom"); ?>)</option><option value=\"wirtorgsoz\">Wirtschafts- und Organisationssoziologie (<?php  GetboerseNumbers("wirtorgsoz"); ?>)</option><option value=\"wsugesch\">Wirt.-, Sozial- u. Unternehmensgeschichte (<?php  GetboerseNumbers("wsugesch"); ?>)</option>";

        document.getElementById("lecture").innerHTML = lecturec;

    }


    if (WhichSem == "sonstige")  {

        lecturec = "<option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"daten\">Datenermittlung und Datenanalyse (<?php  GetboerseNumbers("daten"); ?>)</option><option value=\"arbeitsr\">Arbeitsrecht (<?php  GetboerseNumbers("arbeitsr"); ?>)</option><option value=\"gesellr\">Unternehmens- und Gesellschaftsrecht (<?php  GetboerseNumbers("gesellr"); ?>)</option><option value=\"versr\">Versicherungswesen (<?php  GetboerseNumbers("versr"); ?>)</option>";

        document.getElementById("lecture").innerHTML = lecturec;

    }

    if (WhichSem == "master")  {

        lecturec = "<option value=\"empty\">wähle hier eine Vorlesung aus</option><option value=\"daten\">Datenermittlung und Datenanalyse (<?php  GetboerseNumbers("daten"); ?>)</option><option value=\"arbeitsr\">Arbeitsrecht (<?php  GetboerseNumbers("arbeitsr"); ?>)</option><option value=\"gesellr\">Unternehmens- und Gesellschaftsrecht (<?php  GetboerseNumbers("gesellr"); ?>)</option><option value=\"versr\">Versicherungswesen (<?php  GetboerseNumbers("versr"); ?>)</option>";

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

