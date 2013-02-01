<?php 
                      
  if ($_POST[Aprinciples] == "" && $do != "award" && !isset($upd_send_dataB) && !isset($award_send_data))  {

      $principlesL = "update";

      if ($update_profile == 0)  {

                 include("./templates/update_top.php");

                 include("./templates/update_step1.php");

      } else {

      include("./templates/award.php");

      }

   }  else  {

          if ($update_profile == 0)  {
              /*
          $qy_userP = mysql_query("SELECT UserName, firstname, lastname, study, semester, wisostudent from $user_tblname WHERE UserID = '$auto_logon_id'");

          while  ($row_userP  =  mysql_fetch_assoc($qy_userP))  {

                  $upp_nickname    = $row_userP[UserName];
                 // $upp_firstname   = $row_userP[firstname];
                //  $upp_lastname    = $row_userP[lastname];
                  $upp_wisostudent = $row_userP[wisostudent];
                  $upp_study       = $row_userP[study];
                  $upp_semester    = $row_userP[semester];

          }

          $nicklength = strlen($upp_nickname);

              */

          if (isset($_POST[study]))  {
               /*
              $wrong_par = 0;

              if (isset($_POST[r_nickname]))  {

                  $str_nickname = str_replace(" ", "", $_POST[r_nickname]);

                  $len_nickname = strlen($str_nickname);

                  if ($len_nickname < 3)   {  $wrong_par = 1;  $text01 = "Nickname ungültig!"; }

              }

              $str_firstname = str_replace(" ", "", $_POST[firstname]);

              $len_firstname = strlen($str_firstname);

              $str_lastname = str_replace(" ", "", $_POST[lastname]);

              $len_lastname = strlen($str_lastname);


              if ($len_firstname < 3)  {  $wrong_par = 1;  $text01 = "Vorname ungültig!";  }
              if ($len_lastname < 3)   {  $wrong_par = 1;  $text01 = "Nachname ungültig!"; }


              if ($wrong_par == 0)  {

                  $_POST[firstname] = str_replace("<", "&lt;", $_POST[firstname]);
                  $_POST[firstname] = str_replace(">", "&gt;", $_POST[firstname]);
                  $_POST[lastname] = str_replace("<", "&lt;", $_POST[lastname]);
                  $_POST[lastname] = str_replace(">", "&gt;", $_POST[lastname]);
                  $_POST[studivz] = str_replace("<", "&lt;", $_POST[studivz]);
                  $_POST[studivz] = str_replace(">", "&gt;", $_POST[studivz]);
                 *
                  if (isset($_POST[r_nickname]))  {

                      $_POST[r_nickname] = str_replace(">", "&gt;", $_POST[r_nickname]);
                      $_POST[r_nickname] = str_replace("<", "&lt;", $_POST[r_nickname]);

                      $update_user  = "UPDATE $user_tblname SET UserName = '$_POST[r_nickname]', wisostudent = '$_POST[wisostudent]', study = '$_POST[study]', semester = '$_POST[semester]' WHERE UserID = '$userdata_id'";

                  }

                  else  {

                      $update_user  = "UPDATE $user_tblname SET study = '$_POST[study]', wisostudent = '$_POST[wisostudent]', semester = '$_POST[semester]' WHERE UserID = '$userdata_id'";

                  }
                     */

                  if ($_POST[wisostudent] == 1) $study = $_POST[study];
                  if ($_POST[wisostudent] == 2) $study = $_POST[mstudy];                
                  
                  $update_user  = "UPDATE $user_tblname SET study = '$study', wisostudent = '$_POST[wisostudent]', semester = '$_POST[semester]', updateProfile = '1' WHERE UserID = '$userdata_id'";

                  mysql_query($update_user) OR die(mysql_error());

                  if ( $_POST[wisostudent] == 0 )  {

                       $upd_aw  = "UPDATE $user_tblname SET award = '1' WHERE UserID = '$userdata_id'";

                       mysql_query($upd_aw) OR die(mysql_error());

                  }

                 /*
                  include("./templates/update_top.php");

                  include("./templates/update_step2.php");


                  }

                  else  {
                              */

                    $link = "index.php"; $refresh_time = "2";     $text01 = "Dein Profil wurde geändert.";

                    include("./templates/refresh.php");

                  //}

            }
            /*
            else if (isset($upd_send_dataB))  {

                  if ($v_fid != "")  {

                      $v_cou  = 0;
                      $v_cou2 = 0;
                      $v_cid2[] = "";
                      $v_cid4[] = "";

                      foreach ($v_fid as $v_key => $v_fid2)  {

                               $v_cid2[$v_cou] = $v_cid[$v_key];
                               $v_cou++;

                      }


                      foreach ($v_cid2 as $v_cid3)  {

                               if (!in_array($v_cid3, $v_cid4) )  {

                                   $v_cid4[$v_cou2] = $v_cid3;
                                   $v_cou2++;

                               }

                      }

                      natsort($v_fid);
                      natsort($v_cid4);

                      $v_Cou1 = count($v_fid);
                      $v_Cou2 = count($v_cid4);

                      $v_Cou1x = "1";
                      $v_Cou2x = "1";

                      foreach ($v_fid as $v_fidDB)  {

                               $v_fDB .= $v_fidDB;

                               if ($v_Cou1 != $v_Cou1x)  {

                                   $v_fDB .= ",";

                                }

                                $v_Cou1x++;

                       }

                       foreach ($v_cid4 as $v_cidDB)  {

                                $v_cDB .= $v_cidDB;

                                if ($v_Cou2 != $v_Cou2x)  {

                                    $v_cDB .= ",";

                                }

                                $v_Cou2x++;

                        }


                    }

                    else  {

                        $v_cDB = ""; $v_fDB = "";

                    }

                    $qy_vUex = mysql_query("SELECT COUNT( id ) AS vUex from $view_tblname WHERE user = '$userdata_id' LIMIT 1");

                    $vUexrow = mysql_fetch_row( $qy_vUex );

                    $vUex = $vUexrow[ 0 ];

                    if ($vUex > 0)  {

                        $qy_Nview = "UPDATE $view_tblname SET c = '$v_cDB', f = '$v_fDB' WHERE user = '$userdata_id'";

                        mysql_query($qy_Nview) OR die(mysql_error());

                    }

                    else  {


                        $qy_Nview   = "INSERT into $view_tblname (c, f, user) ";
                        $qy_Nview  .= "VALUES ('$v_cDB', '$v_fDB', '$userdata_id')";

                        $result_Nview  = @mysql_query($qy_Nview) OR die(mysql_error());

                    }

                    $update_user  = "UPDATE $user_tblname SET updateProfile = '1' WHERE UserID = '$userdata_id'";

                    mysql_query($update_user) OR die(mysql_error());


                    $text01 = "Daten aktualisiert!";


                    if ($update_wiso == 0)  {

                        $update_userB  = "UPDATE $user_tblname SET award = '1' WHERE UserID = '$userdata_id'";

                        mysql_query($update_userB) OR die(mysql_error());

                    }

                    if ($update_award == "1")  {

                        $link = "index.php";

                    }  else  {

                        $link = "index.php?do=award";

                    }

                    $refresh_time = "2";

                    include("./templates/refresh.php");

          }

          else  {


                 include("./templates/update_top.php");

                // include("./templates/update_step1.php");
                 // include("./templates/update_step2.php");

                 include("award.php");

          }

          } // end :: profile

          else  {

              include("award.php");

          } */

     }
   }


