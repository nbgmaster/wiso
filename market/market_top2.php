<?php 

           if ($row_boerse[category] == "stuff")  {

               $category = "Diverses"; $lecture = "";

           }

           if ($row_boerse[category] == "sem1")  {

               $category = "(B.A.) Semester 1";

               if ($row_boerse[lecture] == "UMV")  {

                   $lecture = "Unternehmen, M&auml;rkte, Volkswirtschaften";

               }

               if ($row_boerse[lecture] == "UU")  {

                   $lecture = "Unternehmer & Unternehmen";

               }

               if ($row_boerse[lecture] == "IT")  {

                   $lecture = "Grundlagen des E-Business";

               }

               if ($row_boerse[lecture] == "BF")  {

                   $lecture = "Buchf&uuml;hrung";

               }

               if ($row_boerse[lecture] == "FM")  {

                   $lecture = "Finanzmathematik";

               }

               if ($row_boerse[lecture] == "LA")  {

                   $lecture = "Lineare Algebra";

               }

           }

           if ($row_boerse[category] == "sem2")  {

               $category = "(B.A.) Semester 2";

               if ($row_boerse[lecture] == "mikro")  {

                   $lecture = "Mikrook&ouml;nomie";

               }

               if ($row_boerse[lecture] == "makro")  {

                   $lecture = "Makrook&ouml;nomie";

               }

               if ($row_boerse[lecture] == "absatz")  {

                   $lecture = "Absatz / Marketing";

               }

               if ($row_boerse[lecture] == "jahresabschluss")  {

                   $lecture = "Jahresabschluss";

               }

               if ($row_boerse[lecture] == "recht")  {

                   $lecture = "Privat- und Handelsrecht I";

               }

               if ($row_boerse[lecture] == "ITp")  {

                   $lecture = "Internetpraktikum";

               }

           }


           if ($row_boerse[category] == "sem3")  {

               $category = "(B.A.) Semester 3";

               if ($row_boerse[lecture] == "stat")  {

                   $lecture = "Statistik";

               }

               if ($row_boerse[lecture] == "prod")  {

                   $lecture = "Produktion, Logistik, Beschaffung";

               }

               if ($row_boerse[lecture] == "wus")  {

                   $lecture = "Wirtschaft & Staat";

               }

               if ($row_boerse[lecture] == "recht2")  {

                   $lecture = "Privat- und Handelsrecht II";

               }

               if ($row_boerse[lecture] == "oerecht")  {

                   $lecture = "&Ouml;ffentliches Recht I";

               }

           }


           if ($row_boerse[category] == "sem4")  {

               $category = "(B.A.) Semester 4";

               if ($row_boerse[lecture] == "stat2")  {

                   $lecture = "Praxis der emp. Wirschaftsforschung";

               }

               if ($row_boerse[lecture] == "EwA")  {

                   $lecture = "Einf&uuml;hrung in das wissenschaftl. Arbeiten";

               }

               if ($row_boerse[lecture] == "praes")  {

                   $lecture = "Pr&auml;sentationsf&auml;higkeiten";

               }

               if ($row_boerse[lecture] == "oerecht2")  {

                   $lecture = "&Ouml;ffentliches Recht II";

               }

           }

           if ($row_boerse[category] == "bwl")  {

               $category = "(B.A.) BWL";

               if ($row_boerse[lecture] == "control")  {

                   $lecture = "Kostenrechnung & Controlling";

               }

               if ($row_boerse[lecture] == "intuf")  {

                   $lecture = "Internationale Unternehmensf&uuml;hrung";

               }

               if ($row_boerse[lecture] == "invest")  {

                   $lecture = "Investition und Finanzierung";

               }

               if ($row_boerse[lecture] == "stratint")  {

                   $lecture = "Strateg. und Internat. Management";

               }

               if ($row_boerse[lecture] == "intacc")  {

                   $lecture = "International Accounting and Controlling";

               }

               if ($row_boerse[lecture] == "markman")  {

                   $lecture = "Marketing Management";

               }

               if ($row_boerse[lecture] == "logi")  {

                   $lecture = "Operations and Logistics";

               }

               if ($row_boerse[lecture] == "entrepreneur")  {

                   $lecture = "Innovation and Entrepreneurship";

               }

               if ($row_boerse[lecture] == "finanz")  {

                   $lecture = "Finanzierung";

               }

               if ($row_boerse[lecture] == "tax")  {

                   $lecture = "Taxation";

               }

               if ($row_boerse[lecture] == "bpaed")  {

                   $lecture = "Betriebsp&auml;dagogik";

               }

           }

           if ($row_boerse[category] == "vwl")  {

               $category = "(B.A.) VWL";

               if ($row_boerse[lecture] == "auw")  {

                   $lecture = "Au&szlig;enwirtschaft";

               }

               if ($row_boerse[lecture] == "OeoeS")  {

                   $lecture = "&Ouml;konomie des &ouml;ffentlichen Sektors";

               }

               if ($row_boerse[lecture] == "arbp")  {

                   $lecture = "Arbeitsmarktpolitik";

               }

               if ($row_boerse[lecture] == "wettbp")  {

                   $lecture = "Wettbewerbstheorie und –politik";

               }

               if ($row_boerse[lecture] == "apb")  {

                   $lecture = "Arbeit, Personal und Bildung";

               }

               if ($row_boerse[lecture] == "EoM")  {

                   $lecture = "Economics of Management";

               }

               if ($row_boerse[lecture] == "QwF")  {

                   $lecture = "Quantitative Wirtschaftsforschung";

               }

               if ($row_boerse[lecture] == "wp")  {

                   $lecture = "Wirtschaftspolitik";

               }

               if ($row_boerse[lecture] == "money")  {

                   $lecture = "Money and Capital Markets";

               }

               if ($row_boerse[lecture] == "coopst")  {

                   $lecture = "Cooperative Studies";

               }

           }

           if ($row_boerse[category] == "info")  {

               $category = "(B.A.) W-Informatik";

               if ($row_boerse[lecture] == "is")  {

                   $lecture = "Innovation Strategy";

               }

               if ($row_boerse[lecture] == "innot")  {

                   $lecture = "Innovation Technology";

               }

               if ($row_boerse[lecture] == "mtc")  {

                   $lecture = "Managing Technological Change";

               }

               if ($row_boerse[lecture] == "ebm")  {

                   $lecture = "E-Business Management";

               }

           }

           if ($row_boerse[category] == "wipaed")  {

               $category = "(B.A.) Wip&auml;d";

               if ($row_boerse[lecture] == "gwip")  {

                   $lecture = "Grundlagen der Wip&auml;d";

               }

               if ($row_boerse[lecture] == "praesmod")  {

                   $lecture = "Pr&auml;sentations- und Moderationstechniken";

               }

               if ($row_boerse[lecture] == "berufwb")  {

                   $lecture = "Berufliche Weiterbildung";

               }

               if ($row_boerse[lecture] == "paedseminar")  {

                   $lecture = "Betriebsp&auml;dagogisches Seminar";

               }

               if ($row_boerse[lecture] == "projstudi")  {

                   $lecture = "Erkundungsprojekt / Schulpraktische Studien";

               }

               if ($row_boerse[lecture] == "zweitfach")  {

                   $lecture = "Module der Zweitfach-Vertiefung";

               }

           }

           if ($row_boerse[category] == "intbus")  {

               $category = "(B.A.) Intern. Business";

               if ($row_boerse[lecture] == "intrecht1")  {

                   $lecture = "Europ&auml;isches und Internationales Recht";

               }

               if ($row_boerse[lecture] == "angel")  {

                   $lecture = "Angloamerikanische Gesellschaften";

               }

               if ($row_boerse[lecture] == "europglob")  {

                   $lecture = "Europ&auml;isierung & Globalisierung";

               }

               if ($row_boerse[lecture] == "intbez")  {

                   $lecture = "Internationale Beziehungen";

               }

               if ($row_boerse[lecture] == "intstud")  {

                   $lecture = "Internationale Studien";

               }

               if ($row_boerse[lecture] == "regional")  {

                   $lecture = "Regionalstudien";

               }

               if ($row_boerse[lecture] == "romanisch")  {

                   $lecture = "Romanischsprachige Gesellschaften";

               }

           }

           if ($row_boerse[category] == "sozi")  {

               $category = "(B.A.) Sozial&ouml;k&ouml;nomik";

               if ($row_boerse[lecture] == "sozio")  {

                   $lecture = "Soziologie";

               }

               if ($row_boerse[lecture] == "transbez")  {

                   $lecture = "Internat. und transnationale Beziehungen";

               }

               if ($row_boerse[lecture] == "regio")  {

                   $lecture = "Regionen im internationalen System";

               }

               if ($row_boerse[lecture] == "grundpsy")  {

                   $lecture = "Grundl. + Anwend.felder d. Sozialpsychologie";

               }

               if ($row_boerse[lecture] == "empsozi")  {

                   $lecture = "Einf&uuml;hrung in emp. Sozialforschung";

               }

               if ($row_boerse[lecture] == "compana")  {

                   $lecture = "Computergest&uuml;tzte Datenanalyse";

               }

               if ($row_boerse[lecture] == "intkom")  {

                   $lecture = "Internationale Kommunikation";

               }

               if ($row_boerse[lecture] == "personal")  {

                   $lecture = "Personal und Organisation";

               }

               if ($row_boerse[lecture] == "anamgesell")  {

                   $lecture = "Analyse moderner Gesellschaften";

               }

               if ($row_boerse[lecture] == "empmus")  {

                   $lecture = "Empirische Methoden und Statistik";

               }

               if ($row_boerse[lecture] == "komumed")  {

                   $lecture = "Kommunikation und Massenmedien";

               }

               if ($row_boerse[lecture] == "konsum")  {

                   $lecture = "Konsumentenverhalten";

               }

               if ($row_boerse[lecture] == "soziprakt")  {

                   $lecture = "Soziologisches Praktikum";

               }

               if ($row_boerse[lecture] == "sozialp")  {

                   $lecture = "Sozial- und Arbeitspolitik";

               }

               if ($row_boerse[lecture] == "spezkom")  {

                   $lecture = "Spezielle Kommunikationswissenschaft";

               }

               if ($row_boerse[lecture] == "wirtorgsoz")  {

                   $lecture = "Wirtschafts- und Organisationssoziologie";

               }

               if ($row_boerse[lecture] == "wsugesch")  {

                   $lecture = "Wirt.-, Sozial- u. Unternehmensgeschichte";

               }

           }

           if ($row_boerse[category] == "sonstige")  {

               $category = "(B.A.) Sonstige Vertiefungen";

               if ($row_boerse[lecture] == "daten")  {

                   $lecture = "Datenermittlung und Datenanalyse";

               }

               if ($row_boerse[lecture] == "arbeitsr")  {

                   $lecture = "Arbeitsrecht";

               }

               if ($row_boerse[lecture] == "gesellr")  {

                   $lecture = "Unternehmens- und Gesellschaftsrecht";

               }

               if ($row_boerse[lecture] == "versr")  {

                   $lecture = "Versicherungswesen";

               }

           if ($row_boerse[category] == "master")  {

               $category = "Masterstudieng&auml;nge";

               if ($row_boerse[lecture] == "m_aup")   $lecture = "(M.Sc.) Arbeitsmarkt u. Personal"; 
               if ($row_boerse[lecture] == "m_eco")   $lecture = "(M.Sc.) Economics";
               if ($row_boerse[lecture] == "m_fact")  $lecture = "(M.A.) FACT";
               if ($row_boerse[lecture] == "m_ibs")   $lecture = "(M.Sc.) IBS";

               if ($row_boerse[lecture] == "m_iis")   $lecture = "(M.Sc.) IIS"; 
               if ($row_boerse[lecture] == "m_mgm")   $lecture = "(M.A.) Management";
               if ($row_boerse[lecture] == "m_mark")  $lecture = "(M.A.) Marketing";
               if ($row_boerse[lecture] == "m_sozi")  $lecture = "(M.A.) Sozial&ouml;konomik";
               if ($row_boerse[lecture] == "m_paed")  $lecture = "(M.A.) Wirtschaftsp&auml;dagogik";
               
           }
           
           }

          // if ($lecture != "")  { echo"$lecture"; }  else  { echo"$category"; }
