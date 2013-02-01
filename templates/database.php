  <tr>

  <td class="tablea" align="center" width="20">

    <?php 

    $fileicon = $row_database[attachment];
    $fileicon = substr($fileicon, strlen($fileicon)-3);


 if ($userdata_admin == "1" && $thisadmin == "0" && $check_cred == 0) {

echo"<a href=\"javascript:popthis('$row_database[id]',300,200,'includes/rate.php?u_id=$row_database[id]&user_id=$row_database[user_id]','window');\" title=\"Diesen Beitrag als positiv bewerten\">";

 } ?>

    <img src="images/database/<?php  echo"$fileicon.gif"; ?>" border="0">

<?php  if ($userdata_admin == "1" && $check_cred == 0) { ?>

</a>

<?php  if ($userdata_admin == "1" && $thisadmin == "0" && $check_cred == 0) { ?>

  <br>   <br>
  <select id="select_<?php echo"$row_database[id]";?>" style="font-size:10px;width:32px">
  <option value="1">1</option>
    <option value="2" selected="selected">2</option>
      <option value="3">3</option>
        <option value="4">4</option>
          <option value="5">5</option>
   </select>


<?php  } } ?>

    </td>

    <td valign="middle" style="padding: 4px;" class="tableb" align="left">

    <span style="line-height:20px;font-size:11px"><b>
    <?php  echo"$row_database[description]"; ?>
    </b></span>

    </td>

 <td class="tablea" align="center">

    <img src="images/templates/<?php  echo"$template"; ?>/download.gif" style="cursor:pointer;" onclick="location.href='index.php?do=db&user_id=<?php  echo"$userdata_id"; ?>&fileID=<?php  echo"$row_database[attachment]"; ?>'"></a>

    </td>

    <td class="tableb" valign="middle" align="center" style="line-height:20px;width:128px">

    <?php  // if ($sec == "new")  { 

           if ($row_database[category] == "stuff")  {

               $category = "Diverses"; $lecture = "";

           }

           if ($row_database[category] == "sem1")  {

               $category = "(B.A.) Semester 1";

               if ($row_database[lecture] == "UMV")  {

                   $lecture = "Unternehmen, Märkte, Volkswirtschaften";

               }

               if ($row_database[lecture] == "UU")  {

                   $lecture = "Unternehmer & Unternehmen";

               }

               if ($row_database[lecture] == "IT")  {

                   $lecture = "Grundlagen des E-Business";

               }

               if ($row_database[lecture] == "BF")  {

                   $lecture = "Buchführung";

               }

               if ($row_database[lecture] == "FM")  {

                   $lecture = "Finanzmathematik";

               }

               if ($row_database[lecture] == "LA")  {

                   $lecture = "Lineare Algebra";

               }

           }

           if ($row_database[category] == "sem2")  {

               $category = "(B.A.) Semester 2";

               if ($row_database[lecture] == "mikro")  {

                   $lecture = "Mikrookönomie";

               }

               if ($row_database[lecture] == "makro")  {

                   $lecture = "Makrookönomie";

               }

               if ($row_database[lecture] == "absatz")  {

                   $lecture = "Absatz / Marketing";

               }

               if ($row_database[lecture] == "jahresabschluss")  {

                   $lecture = "Jahresabschluss";

               }

               if ($row_database[lecture] == "recht")  {

                   $lecture = "Privat- und Handelsrecht I";

               }

               if ($row_database[lecture] == "ITp")  {

                   $lecture = "Internetpraktikum";

               }

           }


           if ($row_database[category] == "sem3")  {

               $category = "(B.A.) Semester 3";

               if ($row_database[lecture] == "stat")  {

                   $lecture = "Statistik";

               }

               if ($row_database[lecture] == "prod")  {

                   $lecture = "Produktion, Logistik, Beschaffung";

               }

               if ($row_database[lecture] == "wus")  {

                   $lecture = "Wirtschaft & Staat";

               }

               if ($row_database[lecture] == "recht2")  {

                   $lecture = "Privat- und Handelsrecht II";

               }

               if ($row_database[lecture] == "oerecht")  {

                   $lecture = "Öffentliches Recht I";

               }

           }


           if ($row_database[category] == "sem4")  {

               $category = "(B.A.) Semester 4";

               if ($row_database[lecture] == "stat2")  {

                   $lecture = "Praxis der emp. Wirschaftsforschung";

               }

               if ($row_database[lecture] == "EwA")  {

                   $lecture = "Einführung in das wissenschaftl. Arbeiten";

               }

               if ($row_database[lecture] == "praes")  {

                   $lecture = "Präsentationsfähigkeiten";

               }

               if ($row_database[lecture] == "oerecht2")  {

                   $lecture = "Öffentliches Recht II";

               }

           }

           if ($row_database[category] == "bwl")  {

               $category = "(B.A.) BWL";

               if ($row_database[lecture] == "control")  {

                   $lecture = "Kostenrechnung & Controlling";

               }

               if ($row_database[lecture] == "intuf")  {

                   $lecture = "Internationale Unternehmensführung";

               }

               if ($row_database[lecture] == "invest")  {

                   $lecture = "Investition und Finanzierung";

               }

               if ($row_database[lecture] == "stratint")  {

                   $lecture = "Strateg. und Internat. Management";

               }

               if ($row_database[lecture] == "intacc")  {

                   $lecture = "International Accounting and Controlling";

               }

               if ($row_database[lecture] == "markman")  {

                   $lecture = "Marketing Management";

               }

               if ($row_database[lecture] == "logi")  {

                   $lecture = "Operations and Logistics";

               }

               if ($row_database[lecture] == "entrepreneur")  {

                   $lecture = "Innovation and Entrepreneurship";

               }

               if ($row_database[lecture] == "finanz")  {

                   $lecture = "Finanzierung";

               }

               if ($row_database[lecture] == "tax")  {

                   $lecture = "Taxation";

               }

               if ($row_database[lecture] == "health")  {

                   $lecture = "Gesundheitsmanagement";

               }
               
               if ($row_database[lecture] == "bpaed")  {

                   $lecture = "Betriebspädagogik";

               }

           }

           if ($row_database[category] == "vwl")  {

               $category = "(B.A.) VWL";

               if ($row_database[lecture] == "auw")  {

                   $lecture = "Außenwirtschaft";

               }

               if ($row_database[lecture] == "OeoeS")  {

                   $lecture = "Ökonomie des öffentlichen Sektors";

               }

               if ($row_database[lecture] == "arbp")  {

                   $lecture = "Arbeitsmarktpolitik";

               }

               if ($row_database[lecture] == "wettbp")  {

                   $lecture = "Wettbewerbstheorie und –politik";

               }

               if ($row_database[lecture] == "apb")  {

                   $lecture = "Arbeit, Personal und Bildung";

               }

               if ($row_database[lecture] == "EoM")  {

                   $lecture = "Economics of Management";

               }

               if ($row_database[lecture] == "QwF")  {

                   $lecture = "Quantitative Wirtschaftsforschung";

               }

               if ($row_database[lecture] == "wp")  {

                   $lecture = "Wirtschaftspolitik";

               }

               if ($row_database[lecture] == "money")  {

                   $lecture = "Money and Capital Markets";

               }

               if ($row_database[lecture] == "coopst")  {

                   $lecture = "Cooperative Studies";

               }

           }

           if ($row_database[category] == "info")  {

               $category = "(B.A.) W-Informatik";

               if ($row_database[lecture] == "is")  {

                   $lecture = "Innovation Strategy";

               }

               if ($row_database[lecture] == "innot")  {

                   $lecture = "Innovation Technology";

               }

               if ($row_database[lecture] == "mtc")  {

                   $lecture = "Managing Technological Change";

               }

               if ($row_database[lecture] == "ebm")  {

                   $lecture = "E-Business Management";

               }

           }

           if ($row_database[category] == "wipaed")  {

               $category = "(B.A.) Wipäd";

               if ($row_database[lecture] == "gwip")  {

                   $lecture = "Grundlagen der Wipäd";

               }

               if ($row_database[lecture] == "praesmod")  {

                   $lecture = "Präsentations- und Moderationstechniken";

               }

               if ($row_database[lecture] == "berufwb")  {

                   $lecture = "Berufliche Weiterbildung";

               }

               if ($row_database[lecture] == "paedseminar")  {

                   $lecture = "Betriebspädagogisches Seminar";

               }

               if ($row_database[lecture] == "projstudi")  {

                   $lecture = "Erkundungsprojekt / Schulpraktische Studien";

               }

               if ($row_database[lecture] == "zweitfach")  {

                   $lecture = "Module der Zweitfach-Vertiefung";

               }

           }

           if ($row_database[category] == "intbus")  {

               $category = "(B.A.) Intern. Business";

               if ($row_database[lecture] == "intrecht1")  {

                   $lecture = "Europäisches und Internationales Recht";

               }

               if ($row_database[lecture] == "angel")  {

                   $lecture = "Angloamerikanische Gesellschaften";

               }

               if ($row_database[lecture] == "europglob")  {

                   $lecture = "Europäisierung & Globalisierung";

               }

               if ($row_database[lecture] == "intbez")  {

                   $lecture = "Internationale Beziehungen";

               }

               if ($row_database[lecture] == "intstud")  {

                   $lecture = "Internationale Studien";

               }

               if ($row_database[lecture] == "regional")  {

                   $lecture = "Regionalstudien";

               }

               if ($row_database[lecture] == "romanisch")  {

                   $lecture = "Romanischsprachige Gesellschaften";

               }

           }
                       
           if ($row_database[category] == "sozi")  {

               $category = "(B.A.) Sozialökönomik";

               if ($row_database[lecture] == "sozio")  {

                   $lecture = "Soziologie";

               }

               if ($row_database[lecture] == "transbez")  {

                   $lecture = "Internat. und transnationale Beziehungen";

               }

               if ($row_database[lecture] == "regio")  {

                   $lecture = "Regionen im internationalen System";

               }

               if ($row_database[lecture] == "grundpsy")  {

                   $lecture = "Grundl. + Anwend.felder d. Sozialpsychologie";

               }

               if ($row_database[lecture] == "empsozi")  {

                   $lecture = "Einführung in emp. Sozialforschung";

               }

               if ($row_database[lecture] == "compana")  {

                   $lecture = "Computergestützte Datenanalyse";

               }

               if ($row_database[lecture] == "intkom")  {

                   $lecture = "Internationale Kommunikation";

               }

               if ($row_database[lecture] == "personal")  {

                   $lecture = "Personal und Organisation";

               }

               if ($row_database[lecture] == "anamgesell")  {

                   $lecture = "Analyse moderner Gesellschaften";

               }

               if ($row_database[lecture] == "empmus")  {

                   $lecture = "Empirische Methoden und Statistik";

               }

               if ($row_database[lecture] == "komumed")  {

                   $lecture = "Kommunikation und Massenmedien";

               }

               if ($row_database[lecture] == "konsum")  {

                   $lecture = "Konsumentenverhalten";

               }

               if ($row_database[lecture] == "soziprakt")  {

                   $lecture = "Soziologisches Praktikum";

               }

               if ($row_database[lecture] == "sozialp")  {

                   $lecture = "Sozial- und Arbeitspolitik";

               }

               if ($row_database[lecture] == "spezkom")  {

                   $lecture = "Spezielle Kommunikationswissenschaft";

               }

               if ($row_database[lecture] == "wirtorgsoz")  {

                   $lecture = "Wirtschafts- und Organisationssoziologie";

               }

               if ($row_database[lecture] == "wsugesch")  {

                   $lecture = "Wirt.-, Sozial- u. Unternehmensgeschichte";

               }

           }

           if ($row_database[category] == "sonstige")  {

               $category = "(B.A.) Sonstige Vertiefungen";

               if ($row_database[lecture] == "daten")  {

                   $lecture = "Datenermittlung und Datenanalyse";

               }

               if ($row_database[lecture] == "arbeitsr")  {

                   $lecture = "Arbeitsrecht";

               }

               if ($row_database[lecture] == "gesellr")  {

                   $lecture = "Unternehmens- und Gesellschaftsrecht";

               }

               if ($row_database[lecture] == "versr")  {

                   $lecture = "Versicherungswesen";

               }

           }

           if ($row_database[category] == "master")  {

               $category = "Masterstudiengänge";

               if ($row_database[lecture] == "m_aup")   $lecture = "(M.Sc.) Arbeitsmarkt u. Personal"; 
               if ($row_database[lecture] == "m_eco")   $lecture = "(M.Sc.) Economics";
               if ($row_database[lecture] == "m_fact")  $lecture = "(M.A.) FACT";
               if ($row_database[lecture] == "m_ibs")   $lecture = "(M.Sc.) IBS";

               if ($row_database[lecture] == "m_iis")   $lecture = "(M.Sc.) IIS"; 
               if ($row_database[lecture] == "m_mgm")   $lecture = "(M.A.) Management";
               if ($row_database[lecture] == "m_mark")  $lecture = "(M.A.) Marketing";
               if ($row_database[lecture] == "m_sozi")  $lecture = "(M.A.) Sozialökonomik";
               if ($row_database[lecture] == "m_paed")  $lecture = "(M.A.) Wirtschaftspädagogik";
               
           }
           
           if ($lecture != "")  { echo"$lecture"; }  else  { echo"$category"; }

   //    }

    ?>

    </td>

    <td class="tablea" valign="middle">

    <table width="100%" cellspacing="0"><tr>

    <td align="left" class="tablea">

    von wem? </td><td align="right"> 

<?php  if ($thisUser != "") { ?>
<a href="index.php?do=profile&user_id=<?php  echo"$row_database[user_id]"; ?>"><?php  echo"$thisUser"; ?></a> 
<?php  $thisUser = ""; } else  { echo"User gelöscht"; } ?>

    </td></tr><tr><td align="left" class="tablea">
    eingetragen am: </td><td align="right" class="tablea"> <?php   echo"$this_date"; ?>

    </td></tr><tr><td align="left" class="tablea">
    <?php  if ($userdata_admin == "1")  { ?>

    Downloads: <?php  echo"$row_database[downloads]"; ?> </td><td align="right" class="tablea">
    <a href="index.php?do=database&sec=delete&category=<?php  echo"$row_database[category]&lecture=$row_database[lecture]"; ?>&u_id=<?php  echo"$row_database[id]"; ?>">
    löschen?
    </a>

    <?php  } else  { ?>

    Downloads: </td><td align="right" class="tablea"> <?php  echo"$row_database[downloads]"; 

    } ?> 

    </td></tr></table>

    </td>


  </tr>
