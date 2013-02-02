    <table cellpadding="0" cellspacing="0" width="<?php  echo"$width"; ?>">

<tr><td style="width:20%;">

   <table cellpadding="0" cellspacing="1" class="tableinborder" style="width:100%;">

       <tr>

         <td class="catbg" style="height:19px;">

         <table cellspacing="0" cellpadding="0" style="width:100%" border="0">

           <tr>

             <td align="left">

                  <font color="#<?php  echo"$fontcolor_cat"; ?>">&nbsp;<b>Top 5 Uploader</b></font>

                  </td>

                </tr>
  
               </table>

               </td>

            </tr>

         </table>

    <table cellpadding="0" cellspacing="0" style="width:100%;border:1px solid #<?php  echo"$bordercolor"; ?>;border-top:0px solid;">


<?php  

 $count_hover = "1";

 $query_database_stU = mysql_query("SELECT * from $user_tblname ORDER by unterlagennumbers DESC LIMIT 5");
  
   while ($row_database_stU = mysql_fetch_assoc($query_database_stU))  {  ?>  

  <tr>
 
<?php  if ($count_hover == "1" or $count_hover == "3" or $count_hover == "5") { ?>


<td class="tableb" onclick="location.href='index.php?do=profile&user_id=<?php  echo"$row_database_stU[UserID]"; ?>';" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

<?php  } else  { ?>

<td class="tablea" onclick="location.href='index.php?do=profile&user_id=<?php  echo"$row_database_stU[UserID]"; ?>';" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout2';">

<?php  }

$count_hover++;

 ?>

        <table style="width:100%;" cellpadding="4" cellspacing="0">

             <tr>

              <td align="left"> 

              <?php  echo"<table cellspacing=\"0\" cellpadding=\"0\"><tr><td><img src=\"images/templates/$template/user_member.gif\"></td><td>&nbsp;$row_database_stU[UserName]</td></tr></table>"; ?>

              </td>

              <td align="right">

              <?php  echo"$row_database_stU[unterlagennumbers]"; ?>

              </td>

            </tr> 

</table>

</td>
</tr>

            <?php  } ?>

          </table>

    

</td> <td width="1%">&nbsp;</td>
<td style="width:79%;">

     <table cellpadding="0" cellspacing="1" class="tableinborder" style="width:100%;">

       <tr>

         <td class="catbg" style="height:19px;">

         <table cellspacing="0" cellpadding="0" style="width:100%" border="0">

           <tr>

             <td align="left">

             <font color="#<?php  echo"$fontcolor_cat"; ?>">&nbsp;<b>Die neuesten 5 Unterlagen</b></font>

             </td>

             <td width="155" align="left"><font color="#<?php  echo"$fontcolor_cat"; ?>"><b>Kategorie</b></font></td>

             <td width="104" align="left"><font color="#<?php  echo"$fontcolor_cat"; ?>"><b>Verfasser</b></font></td>


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

                   $lectureS = "Unternehmen, M&auml;rkte, Volkswirtschaften";

               }

               if ($row_database_st[lecture] == "UU")  {

                   $lectureS = "Unternehmer & Unternehmen";

               }

               if ($row_database_st[lecture] == "IT")  {

                   $lectureS = "Grundlagen des E-Business";

               }

               if ($row_database_st[lecture] == "BF")  {

                   $lectureS = "Buchf&uuml;hrung";

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

                   $lectureS = "Mikrook&ouml;nomie";

               }

               if ($row_database_st[lecture] == "makro")  {

                   $lectureS = "Makrook&ouml;nomie";

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

                   $lectureS = "&Ouml;ffentliches Recht I";

               }

           }


           if ($row_database_st[category] == "sem4")  {

               $categoryS = "(B.A.) Semester 4";

               if ($row_database_st[lecture] == "stat2")  {

                   $lectureS = "Praxis der emp. Wirschaftsforschung";

               }

               if ($row_database_st[lecture] == "EwA")  {

                   $lectureS = "Einf&uuml;hrung in das wissenschaftl. Arbeiten";

               }

               if ($row_database_st[lecture] == "praes")  {

                   $lectureS = "Pr&auml;sentationsf&auml;higkeiten";

               }

               if ($row_database_st[lecture] == "oerecht2")  {

                   $lectureS = "&Ouml;ffentliches Recht II";

               }

           }

           if ($row_database_st[category] == "bwl")  {

               $categoryS = "(B.A.) BWL";

               if ($row_database_st[lecture] == "control")  {

                   $lectureS = "Kostenrechnung & Controlling";

               }

               if ($row_database_st[lecture] == "intuf")  {

                   $lectureS = "Internationale Unternehmensf&uuml;hrung";

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
                            
               if ($row_database[lecture] == "health")  {

                   $lecture = "Gesundheitsmanagement";

               }

               if ($row_database_st[lecture] == "bpaed")  {

                   $lectureS = "Betriebsp&auml;dagogik";

               }

           }

           if ($row_database_st[category] == "vwl")  {

               $categoryS = "(B.A.) VWL";

               if ($row_database_st[lecture] == "auw")  {

                   $lectureS = "Au&szlig;enwirtschaft";

               }

               if ($row_database_st[lecture] == "OeoeS")  {

                   $lectureS = "&Ouml;konomie des &ouml;ffentlichen Sektors";

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

               $categoryS = "(B.A.) Wip&auml;d";

               if ($row_database_st[lecture] == "gwip")  {

                   $lectureS = "Grundlagen der Wip&auml;d";

               }

               if ($row_database_st[lecture] == "praesmod")  {

                   $lectureS = "Pr&auml;sentations- und Moderationstechniken";

               }

               if ($row_database_st[lecture] == "berufwb")  {

                   $lectureS = "Berufliche Weiterbildung";

               }

               if ($row_database_st[lecture] == "paedseminar")  {

                   $lectureS = "Betriebsp&auml;dagogisches Seminar";

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

                   $lectureS = "Europ&auml;isches und Internationales Recht";

               }

               if ($row_database_st[lecture] == "angel")  {

                   $lectureS = "Angloamerikanische Gesellschaften";

               }

               if ($row_database_st[lecture] == "europglob")  {

                   $lectureS = "Europ&auml;isierung & Globalisierung";

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

               $categoryS = "(B.A.) Sozial&ouml;k&ouml;nomik";

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

                   $lectureS = "Einf&uuml;hrung in emp. Sozialforschung";

               }

               if ($row_database_st[lecture] == "compana")  {

                   $lectureS = "Computergest&uuml;tzte Datenanalyse";

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

               $categoryS = "Masterstudieng&auml;nge";

               if ($row_database_st[lecture] == "m_aup")   $lectureS = "(M.Sc.) Arbeitsmarkt u. Personal"; 
               if ($row_database_st[lecture] == "m_eco")   $lectureS = "(M.Sc.) Economics";
               if ($row_database_st[lecture] == "m_fact")  $lectureS = "(M.A.) FACT";
               if ($row_database_st[lecture] == "m_ibs")   $lectureS = "(M.Sc.) IBS";
               if ($row_database_st[lecture] == "m_iis")   $lectureS = "(M.Sc.) IIS"; 
               if ($row_database_st[lecture] == "m_mgm")   $lectureS = "(M.A.)	Management";
               if ($row_database_st[lecture] == "m_mark")  $lectureS = "(M.A.)	Marketing";
               if ($row_database_st[lecture] == "m_sozi")  $lectureS = "(M.A.) Sozial&ouml;konomik";
               if ($row_database_st[lecture] == "m_paed")  $lectureS = "(M.A.) Wirtschaftsp&auml;dagogik";
               
           }
           
           
           }
        if ($lectureS != "")  {  $titleU = "$categoryS, $lectureS";  }  else  { $titleU ="$categoryS"; }


if ($count_hover == "1" or $count_hover == "3" or $count_hover == "5") { ?>


<td onmouseover="this.className='mouseover';return overlib('<?php  echo"$titleU"; ?>');" onmouseout="this.className='mouseout';return nd();" class="tableb" onclick="location.href='index.php?do=db&user_id=<?php  echo"$userdata_id"; ?>&fileID=<?php  echo"$row_database_st[attachment]"; ?>'">

<?php  } else  { ?>

<td onmouseover="this.className='mouseover';return overlib('<?php  echo"$titleU"; ?>');" onmouseout="this.className='mouseout2';return nd();" class="tablea" onclick="location.href='index.php?do=db&user_id=<?php  echo"$userdata_id"; ?>&fileID=<?php  echo"$row_database_st[attachment]"; ?>'">

<?php  }

$count_hover++;

 ?>

        <table style="width:100%;" cellpadding="3" cellspacing="0">

             <tr>

              <td align="left"> 


              <?php 

                if (strlen($row_database_st[description]) > 50) { 

                    $row_database_st[description] = substr($row_database_st[description],0,47).'...'; 

                } 

                $Tdescription = strip_tags($row_database_st[description]);

    $fileicon = $row_database_st[attachment];
    $fileicon = substr($fileicon, strlen($fileicon)-3);


                echo"<table cellspacing=\"0\" cellpadding=\"0\"><tr><td width=\"20\" align=\"center\"><img src=\"images/database/$fileicon.gif\"></td><td>&nbsp;$Tdescription</td></tr></table>"; 

              ?>

              </td>

              <td width="150">

              <?php  
/*
                $timeU = date("d.m.Y",$row_database_st[date]);

                echo $timeU;

*/


           if ($lectureS != "")  { 


                if (strlen($lectureS) > 24) {

                    $lectureS = substr($lectureS,0,21).'...'; 

                } 


echo"$lectureS"; 


}  else  { echo"$categoryS"; }

              ?>

              </td>


              <td width="100" align="left">

              <?php  

                GetUser($row_database_st[user_id]); 

              ?>

              </td>


            </tr> 

</table>

      </td>

            </tr> 

            <?php  } ?>

          </table>

          </td>

        </tr>
  
     </table>       
