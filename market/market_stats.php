
     <table cellpadding="0" cellspacing="1" class="tableinborder" style="width:100%;">

       <tr>

         <td class="catbg" style="height:19px;">

         <table cellspacing="0" cellpadding="0" style="width:100%" border="0">

           <tr>

             <td align="left">

             <font color="#<?php  echo"$fontcolor_cat"; ?>">&nbsp;<b>Die neuesten 5 Unterlagen</b></font>

             </td>

             <td width="125" align="left"><font color="#<?php  echo"$fontcolor_cat"; ?>"><b>Verfasser</b></font></td>

             <td width="83" align="left"><font color="#<?php  echo"$fontcolor_cat"; ?>"><b>am</b></font></td>

             <td width="28" align="right" title="Downloads"><font color="#<?php  echo"$fontcolor_cat"; ?>"><b>DL</b></font>&nbsp;</td>

           </tr>

         </table>

         </td>

      </tr> 

  </table>  

    <table cellpadding="0" cellspacing="0" style="width:100%;border:1px solid #<?php  echo"$bordercolor"; ?>;border-top:0px solid;">

    <?php 

$count_hover = "1";

 $query_database_st = mysql_query("SELECT * from $database_tblname ORDER by date DESC LIMIT 5");

                 while ($row_database_st = mysql_fetch_assoc($query_database_st))  {  ?>

      <tr>

<?php 

        if ($row_database_st[category] == "stuff")  {

               $categoryS = "Diverses"; $lectureS = "";

           }

           if ($row_database_st[category] == "sem1")  {

               $categoryS = "(B.A.) Semester 1";

               if ($row_database_st[lecture] == "UMV")  {

                   $lectureS = "Unternehmen, Märkte, Volkswirtschaften";

               }

               if ($row_database_st[lecture] == "UU")  {

                   $lectureS = "Unternehmer & Unternehmen";

               }

               if ($row_database_st[lecture] == "IT")  {

                   $lectureS = "Grundlagen des E-Business";

               }

               if ($row_database_st[lecture] == "BF")  {

                   $lectureS = "Buchführung";

               }

               if ($row_database_st[lecture] == "FM")  {

                   $lectureS = "Finanzmathematik";

               }

               if ($row_database_st[lecture] == "LA")  {

                   $lectureS = "Lineare Algebra";

               }

           }

           if ($row_database_st[category] == "sem2")  {

               $categoryS = "(B.A.) Semester 2";

               if ($row_database_st[lecture] == "mikro")  {

                   $lectureS = "Mikrookönomie";

               }

               if ($row_database_st[lecture] == "makro")  {

                   $lectureS = "Makrookönomie";

               }

               if ($row_database_st[lecture] == "absatz")  {

                   $lectureS = "Absatz / Marketing";

               }

               if ($row_database_st[lecture] == "jahresabschluss")  {

                   $lectureS = "Jahresabschluss";

               }

               if ($row_database_st[lecture] == "recht")  {

                   $lectureS = "Privat- und Handelsrecht I";

               }

               if ($row_database_st[lecture] == "ITp")  {

                   $lectureS = "Internetpraktikum";

               }

           }


           if ($row_database_st[category] == "sem3")  {

               $categoryS = "(B.A.) Semester 3";

               if ($row_database_st[lecture] == "stat")  {

                   $lectureS = "Statistik";

               }

               if ($row_database_st[lecture] == "prod")  {

                   $lectureS = "Produktion, Logistik, Beschaffung";

               }

               if ($row_database_st[lecture] == "wus")  {

                   $lectureS = "Wirtschaft & Staat";

               }

               if ($row_database_st[lecture] == "recht2")  {

                   $lectureS = "Privat- und Handelsrecht II";

               }

               if ($row_database_st[lecture] == "oerecht")  {

                   $lectureS = "Öffentliches Recht I";

               }

           }


           if ($row_database_st[category] == "sem4")  {

               $categoryS = "(B.A.) Semester 4";

               if ($row_database_st[lecture] == "stat2")  {

                   $lectureS = "Praxis der emp. Wirschaftsforschung";

               }

               if ($row_database_st[lecture] == "EwA")  {

                   $lectureS = "Einführung in das wissenschaftl. Arbeiten";

               }

               if ($row_database_st[lecture] == "praes")  {

                   $lectureS = "Präsentationsfähigkeiten";

               }

               if ($row_database_st[lecture] == "oerecht2")  {

                   $lectureS = "Öffentliches Recht II";

               }

           }

           if ($row_database_st[category] == "bwl")  {

               $categoryS = "(B.A.) BWL";

               if ($row_database_st[lecture] == "control")  {

                   $lectureS = "Kostenrechnung & Controlling";

               }

               if ($row_database_st[lecture] == "intuf")  {

                   $lectureS = "Internationale Unternehmensführung";

               }

               if ($row_database_st[lecture] == "invest")  {

                   $lectureS = "Investition und Finanzierung";

               }

               if ($row_database_st[lecture] == "stratint")  {

                   $lectureS = "Strateg. und Internat. Management";

               }

               if ($row_database_st[lecture] == "intacc")  {

                   $lectureS = "International Accounting and Controlling";

               }

               if ($row_database_st[lecture] == "markman")  {

                   $lectureS = "Marketing Management";

               }

               if ($row_database_st[lecture] == "logi")  {

                   $lectureS = "Operations and Logistics";

               }

               if ($row_database_st[lecture] == "entrepreneur")  {

                   $lectureS = "Innovation and Entrepreneurship";

               }

               if ($row_database_st[lecture] == "finanz")  {

                   $lectureS = "Finanzierung";

               }

               if ($row_database_st[lecture] == "tax")  {

                   $lectureS = "Taxation";

               }

               if ($row_database_st[lecture] == "bpaed")  {

                   $lectureS = "Betriebspädagogik";

               }

           }

           if ($row_database_st[category] == "vwl")  {

               $categoryS = "(B.A.) VWL";

               if ($row_database_st[lecture] == "auw")  {

                   $lectureS = "Außenwirtschaft";

               }

               if ($row_database_st[lecture] == "OeoeS")  {

                   $lectureS = "Ökonomie des öffentlichen Sektors";

               }

               if ($row_database_st[lecture] == "arbp")  {

                   $lectureS = "Arbeitsmarktpolitik";

               }

               if ($row_database_st[lecture] == "wettbp")  {

                   $lectureS = "Wettbewerbstheorie und –politik";

               }

               if ($row_database_st[lecture] == "apb")  {

                   $lectureS = "Arbeit, Personal und Bildung";

               }

               if ($row_database_st[lecture] == "EoM")  {

                   $lectureS = "Economics of Management";

               }

               if ($row_database_st[lecture] == "QwF")  {

                   $lectureS = "Quantitative Wirtschaftsforschung";

               }

               if ($row_database_st[lecture] == "wp")  {

                   $lectureS = "Wirtschaftspolitik";

               }

               if ($row_database_st[lecture] == "money")  {

                   $lectureS = "Money and Capital Markets";

               }

               if ($row_database_st[lecture] == "coopst")  {

                   $lectureS = "Cooperative Studies";

               }

           }

           if ($row_database_st[category] == "info")  {

               $categoryS = "(B.A.) W-Informatik";

               if ($row_database_st[lecture] == "is")  {

                   $lectureS = "Innovation Strategy";

               }

               if ($row_database_st[lecture] == "innot")  {

                   $lectureS = "Innovation Technology";

               }

               if ($row_database_st[lecture] == "mtc")  {

                   $lectureS = "Managing Technological Change";

               }

               if ($row_database_st[lecture] == "ebm")  {

                   $lectureS = "E-Business Management";

               }

           }

           if ($row_database_st[category] == "wipaed")  {

               $categoryS = "(B.A.) Wipäd";

               if ($row_database_st[lecture] == "gwip")  {

                   $lectureS = "Grundlagen der Wipäd";

               }

               if ($row_database_st[lecture] == "praesmod")  {

                   $lectureS = "Präsentations- und Moderationstechniken";

               }

               if ($row_database_st[lecture] == "berufwb")  {

                   $lectureS = "Berufliche Weiterbildung";

               }

               if ($row_database_st[lecture] == "paedseminar")  {

                   $lectureS = "Betriebspädagogisches Seminar";

               }

               if ($row_database_st[lecture] == "projstudi")  {

                   $lectureS = "Erkundungsprojekt / Schulpraktische Studien";

               }

               if ($row_database[lecture] == "zweitfach")  {

                   $lecture = "Module der Zweitfach-Vertiefung";

               }

           }

           if ($row_database_st[category] == "intbus")  {

               $categoryS = "(B.A.) Intern. Business";

               if ($row_database_st[lecture] == "intrecht1")  {

                   $lectureS = "Europäisches und Internationales Recht";

               }

               if ($row_database_st[lecture] == "angel")  {

                   $lectureS = "Angloamerikanische Gesellschaften";

               }

               if ($row_database_st[lecture] == "europglob")  {

                   $lectureS = "Europäisierung & Globalisierung";

               }

               if ($row_database_st[lecture] == "intbez")  {

                   $lectureS = "Internationale Beziehungen";

               }

               if ($row_database_st[lecture] == "intstud")  {

                   $lectureS = "Internationale Studien";

               }

               if ($row_database_st[lecture] == "regional")  {

                   $lectureS = "Regionalstudien";

               }

               if ($row_database_st[lecture] == "romanisch")  {

                   $lectureS = "Romanischsprachige Gesellschaften";

               }

           }

           if ($row_database_st[category] == "sozi")  {

               $categoryS = "(B.A.) Sozialökönomik";

               if ($row_database_st[lecture] == "sozio")  {

                   $lectureS = "Soziologie";

               }

               if ($row_database_st[lecture] == "transbez")  {

                   $lectureS = "Internat. und transnationale Beziehungen";

               }

               if ($row_database_st[lecture] == "regio")  {

                   $lectureS = "Regionen im internationalen System";

               }

               if ($row_database_st[lecture] == "grundpsy")  {

                   $lectureS = "Grundl. + Anwend.felder d. Sozialpsychologie";

               }

               if ($row_database_st[lecture] == "empsozi")  {

                   $lectureS = "Einführung in emp. Sozialforschung";

               }

               if ($row_database_st[lecture] == "compana")  {

                   $lectureS = "Computergestützte Datenanalyse";

               }

               if ($row_database_st[lecture] == "intkom")  {

                   $lectureS = "Internationale Kommunikation";

               }

               if ($row_database_st[lecture] == "personal")  {

                   $lectureS = "Personal und Organisation";

               }

               if ($row_database_st[lecture] == "anamgesell")  {

                   $lectureS = "Analyse moderner Gesellschaften";

               }

               if ($row_database_st[lecture] == "empmus")  {

                   $lectureS = "Empirische Methoden und Statistik";

               }

               if ($row_database_st[lecture] == "komumed")  {

                   $lectureS = "Kommunikation und Massenmedien";

               }

               if ($row_database_st[lecture] == "konsum")  {

                   $lectureS = "Konsumentenverhalten";

               }

               if ($row_database_st[lecture] == "soziprakt")  {

                   $lectureS = "Soziologisches Praktikum";

               }

               if ($row_database_st[lecture] == "sozialp")  {

                   $lectureS = "Sozial- und Arbeitspolitik";

               }

               if ($row_database_st[lecture] == "spezkom")  {

                   $lectureS = "Spezielle Kommunikationswissenschaft";

               }

               if ($row_database_st[lecture] == "wirtorgsoz")  {

                   $lectureS = "Wirtschafts- und Organisationssoziologie";

               }

               if ($row_database_st[lecture] == "wsugesch")  {

                   $lectureS = "Wirt.-, Sozial- u. Unternehmensgeschichte";

               }

           }

           if ($row_database_st[category] == "sonstige")  {

               $categoryS = "(B.A.) Sonstige Vertiefungen";

               if ($row_database_st[lecture] == "daten")  {

                   $lectureS = "Datenermittlung und Datenanalyse";

               }

               if ($row_database_st[lecture] == "arbeitsr")  {

                   $lectureS = "Arbeitsrecht";

               }

               if ($row_database_st[lecture] == "gesellr")  {

                   $lectureS = "Unternehmens- und Gesellschaftsrecht";

               }

               if ($row_database_st[lecture] == "versr")  {

                   $lectureS = "Versicherungswesen";

               }
               
               
               if ($row_database_st[category] == "master")  {

                   $categoryS = "Masterstudiengänge";

               if ($row_database_st[lecture] == "m_aup")   $lectureS = "(M.Sc.) Arbeitsmarkt u. Personal"; 
               if ($row_database_st[lecture] == "m_eco")   $lectureS = "(M.Sc.) Economics";
               if ($row_database_st[lecture] == "m_fact")  $lectureS = "(M.A.) FACT";
               if ($row_database_st[lecture] == "m_ibs")   $lectureS = "(M.Sc.) IBS";
               if ($row_database_st[lecture] == "m_iis")   $lectureS = "(M.Sc.) IIS"; 
               if ($row_database_st[lecture] == "m_mgm")   $lectureS = "(M.A.)	Management";
               if ($row_database_st[lecture] == "m_mark")  $lectureS = "(M.A.)	Marketing";
               if ($row_database_st[lecture] == "m_sozi")  $lectureS = "(M.A.) Sozialökonomik";
               if ($row_database_st[lecture] == "m_paed")  $lectureS = "(M.A.) Wirtschaftspädagogik";
               
           }

           }
        if ($lectureS != "")  {  $titleU = "$categoryS, $lectureS";  }  else  { $titleU ="$categoryS"; }

if ($count_hover == "1" or $count_hover == "3" or $count_hover == "5") { ?>


<td title="<?php  echo"$titleU"; ?>" class="tableb" onclick="location.href='index.php?do=database&category=<?php  echo"$row_database_st[category]&lecture=$row_database_st[lecture]";?>';" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

<?php  } else  { ?>

<td title="<?php  echo"$titleU"; ?>" class="tablea" onclick="location.href='index.php?do=database&category=<?php  echo"$row_database_st[category]&lecture=$row_database_st[lecture]";?>';" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout2';">

<?php  }

$count_hover++;

 ?>

        <table style="width:100%;" cellpadding="4" cellspacing="0">

             <tr>

              <td align="left"> 


              <?php 

                if (strlen($row_database_st[description]) > 60) { 

                    $row_database_st[description] = substr($row_database_st[description],0,57).'...'; 

                } 

                $Tdescription = strip_tags($row_database_st[description]);

                echo"<img src=images/templates/$template/arrow_r.gif>&nbsp;$Tdescription"; 

              ?>

              </td>

              <td width="115" align="left">

              <?php  

                GetUser($row_database_st[user_id]); 

              ?>

              </td>

              <td width="75">

              <?php  

                $timeU = date("d.m.Y",$row_database_st[date]);

                echo $timeU;

              ?>

              </td>


              <td width="25" align="right">

              <?php  echo"$row_database_st[downloads]"; ?>

              </td>

            </tr> 

</table>

      </td>

            </tr> 

            <?php  } ?>

          </table>
