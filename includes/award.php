<?php                

  if (isset($award_send_data) && $award == 0)  {

      $count_votes = 0;

      $sem1_alert = 0; $sem2_alert = 0; $sem3_alert = 0;
      $sem1b_alert = 0; $sem2b_alert = 0; $sem3b_alert = 0;

      for($w=1;$w<=28;$w++)  {

              $courseUP = "course_".$w;

              if ($_POST[$courseUP] != "ka" && $_POST[$courseUP] != "")  {

                      // Pr&uuml;fung auf Manipulationsverdacht


                      // VERY DANGEROUS!!!

                              if ($w <= 9 && $userdata_semester == 4)   {

                                  $sem1_alert++;   // Jemand aus dem vergangenen 3. Semester bewertet 1. Semester

                              }

                              if ($w >= 10 && $w <= 15 && $userdata_semester == 2)  {

                                  $sem2_alert++;   // Jemand aus dem vergangenen 1. Semester bewertet 2. Semester

                              }

                              if ($w >= 16 && $userdata_semester == 2)  {

                                  $sem3_alert++;   // Jemand aus dem vergangenen 1. Semester bewertet 3. Semester

                              }

                      /***************************/


                      // Additional Query:: Search for 'sozi' --> abgegebene Stimmen == 10 ??? --> Crucial!!


                      // Attention, but not as critical as above

                              if ($w <= 9 && $userdata_semester == 3)   {

                                  $sem1b_alert++;   // Jemand aus dem "3. Semester" bewertet 1. Semester

                              }

                              if ($w >= 10 && $w <= 15 && $userdata_semester == 1)  {

                                  $sem2b_alert++;   // Jemand aus dem 1. Semester bewertet 2. Semester

                              }

                              if ($w >= 16 && $userdata_semester == 1)  {

                                  $sem3b_alert++;   // Jemand aus dem 1. Semester bewertet 3. Semester

                              }

                      /****************************/

                      $count_votes++;

                      $idUP   = "note".$_POST[$courseUP];

                      $updUP  = "UPDATE $award_tblname Set $idUP = $idUP + 1 WHERE id = '$w'";
                      $sqlUP  = mysql_query($updUP);

              }

      }

      $update_user  = "UPDATE $user_tblname SET sem1_alert = '$sem1_alert', sem2_alert = '$sem2_alert', sem3_alert = '$sem3_alert', sem1b_alert = '$sem1b_alert', sem2b_alert = '$sem2b_alert', sem3b_alert = '$sem3b_alert', award = '1', abgegebenestimmen = '$count_votes' WHERE UserID = '$userdata_id'";

      mysql_query($update_user) OR die(mysql_error());

      $text01 = "Deine Abstimmung wurde gewertet!";

      $link = "index.php?do=team";

      $refresh_time = "2";

      include("./templates/refresh.php");

  }

  else  {

      include("./templates/award_top.php");

      include("./templates/award.php");

      include("./templates/award_bottom.php");

  }
