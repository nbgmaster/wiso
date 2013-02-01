<?php 


  function GetUnterlagenNumbers($lectureU)  {

     //include("dbCon.php");

     if ($lectureU == "stuff")  { 

         $queryU = mysql_query("SELECT COUNT( id ) AS count_files from unterlagen WHERE category = '$lectureU' LIMIT 1");

     }

     else  {

         $queryU = mysql_query("SELECT COUNT( id ) AS count_files from unterlagen WHERE lecture = '$lectureU' LIMIT 1");

     }

     $chdataU = mysql_fetch_row( $queryU );

     $count_files = $chdataU[ 0 ];

     echo"$count_files";

  }


  $netscapeC = "a";

  $queryUn = mysql_query("SELECT COUNT( id ) AS netscapeC from unterlagen WHERE lecture = '$lecture' LIMIT 1");

  $chdataUn = mysql_fetch_row( $queryUn );

  $netscapeC = $chdataUn[ 0 ];

  

  if ($sec == "" or $sec == "new")  { 

      if ($sec == "new" && $resultDBnewOne > $dbNewNumbers)  { 

          $_SESSION["dbNewNumbers"] = $resultDBnewOne;

      }

      if ($sec == "")  {

          $query_database3 = mysql_query("SELECT * from $database_tblname");

          $check_rows2 = mysql_num_rows($query_database3); 

      }

      else  {

          $query_database3 = mysql_query("SELECT * from $database_tblname WHERE date > '$lastOnlineTime' && user_id != '$userdata_id' ORDER by date DESC");
  
          $check_rows2 = mysql_num_rows($query_database3); 

      }

      include("./templates/database_top3.php");

      if ($sec == "")  {

          include("./templates/database_top.php"); 

      }

      if ($sec == "")  { 

          $query_database2 = mysql_query("SELECT * from $database_tblname WHERE category = '$category' && lecture = '$lecture' ORDER by date DESC");
  
      }

      else  {

          $query_database2 = mysql_query("SELECT * from $database_tblname WHERE date > '$lastOnlineTime' && user_id != '$userdata_id' ORDER by date DESC");
  
      }

      $check_rows = mysql_num_rows($query_database2); 

      include("navi_sides.php"); 

     
      if ($sec == "")  {

      $query_database = mysql_query("SELECT * from $database_tblname WHERE category = '$category' && lecture = '$lecture' ORDER by date DESC LIMIT ".(($page-1)*$break).",$break");

      }

      else  {

      $query_database = mysql_query("SELECT * from $database_tblname WHERE date > '$lastOnlineTime' && user_id != '$userdata_id' ORDER by date DESC LIMIT ".(($page-1)*$break).",$break");

      }

      $count_files = $check_rows; 

      if ($count_files > 0)  { 

          include("./templates/database_top2.php");

          while ($row_database  = mysql_fetch_assoc($query_database))  { 


                 $credres = mysql_query("SELECT COUNT( id ) AS check_cred from $credits_tblname WHERE datei = '$row_database[id]' LIMIT 1");
 
                 $credrow = mysql_fetch_row( $credres );

                 $check_cred = $credrow[ 0 ]; 


                 $qy_cred = mysql_query("SELECT credits from $user_tblname WHERE UserID = '$row_database[user_id]'");

                 while ($rw_cred = mysql_fetch_assoc($qy_cred))  {

                        $creditnumber = $rw_cred[credits];

                 }

                 $this_date    =  date("d.m.Y",$row_database[date]); 

                 $query_thisuser      = mysql_query("SELECT UserName, admin from $user_tblname WHERE UserID = '$row_database[user_id]'");
         
                 while ($row_thisuser  = mysql_fetch_assoc($query_thisuser))  {  

                        $thisUser = $row_thisuser[UserName];
                        $thisadmin = $row_thisuser[admin];

                 }

          
                 $row_database[description] = str_replace("<br />", "", $row_database[description]);
                 $row_database[description] = str_replace("<", "&lt;", $row_database[description]);
                 $row_database[description] = str_replace(">", "&gt;", $row_database[description]);

                 $row_database[description] = nl2br($row_database[description]);

                 include("./templates/database.php");

          }

          include("./templates/close_table.php");

      }

      else  { 

          ?>

            <table width="<?php  echo"$width"; ?>" cellpadding="2" cellspacing="1" class="tableinborder">
            <tr><td class="tableb" align="center"><br>
            <span class="big"><b>

          <?php  

          if ($sec == "")  { 

             if ($netscapeC != "0" or $lecture == "empty") { 

                 echo"Wähle oben eine Kategorie und die gewünschte Vorlesung aus.";

             }

             else  {

                 echo"Es sind noch keine Einträge in dieser Kategorie vorhanden.";

             }

          }

          else  {

          ?> Keine Unterlagen vorhanden. <?php 

          }

          ?>

            </b></span>
            <br><br>
            </td></tr>
            </table>

          <?php 

      }

  }

  else  {

      if ($sec == "upload")  {

          set_time_limit  ( 0 );

          function byte_umrechner($bytes) {
  
             $size  = number_format(($bytes / pow(2,20)), 2);
             $size .= " MB";
             return $size;
 
          }

          $file_max_size2 = byte_umrechner($file_max_size);

         
          if ($module == "")  {

              include("./templates/database_upload.php");

          }

          else  {

              // Line Breaks
              //$description = nl2br($description);

              include("attachment.php");


              if ($upload_access == "yes")  {

                  $query_userdata2 = mysql_query("SELECT unterlagennumbers from $user_tblname WHERE UserID = '$auto_logon_id' && UserPass = '$auto_logon_session'");  
  
                  while  ($row_userdata2  =  mysql_fetch_assoc($query_userdata2))  {

                          $userdata_unterlagen  =  $row_userdata2["unterlagennumbers"];  //  Data:: User Unterlagen Postnumbers

                  }

                  $unterlagenT = $userdata_unterlagen + 1;

                  $query_unterlagenNumb = "UPDATE $user_tblname SET unterlagennumbers = '$unterlagenT' WHERE UserID = '$userdata_id'";     
  
                  mysql_query($query_unterlagenNumb) OR die(mysql_error());

              //    $description = str_replace("<", "&lt;", $description);
              //    $description = str_replace(">", "&gt;", $description);

                  $query_database = "INSERT INTO $database_tblname (user_id, category, lecture, description, attachment, date, dateiname)";
 
                  $query_database .= "VALUES ('$userdata_id', '$category', '$lecture', '$description', '$attachment', '$timestamp', '$filename')";
 
                  $result_database = @mysql_query($query_database) OR die(mysql_error());


                  $text01 = "Datei wurde hochgeladen!";
 
                  $link   = "index.php?do=database&category=$category&lecture=$lecture";
  

              }

              else  {

                  $refresh_time = "3";
 
                  $link   = "javascript:history.back()";

              }

              include("templates/refresh.php");


          }

      }


      if ($sec == "delete")  {

          if (!isset($send_del_data))  { 

              $query_access = mysql_query("SELECT user_id from $database_tblname WHERE id = '$u_id'");

              while ($row_access = mysql_fetch_assoc($query_access))  {

                     $goUid = $row_access[user_id];

              }

              if ($goUid == $userdata_id or $userdata_admin == "1")  {

                  $link   = "index.php?do=database&category=$category&lecture=$lecture";

                  include("./templates/delete_DB.php");

              }

              else  {

                  include("templates/no_permission.php");

              }

          }


          if (isset($send_del_data))  { 


              if ($send_del_data == "Ja")  {


                  $query_attach = mysql_query("SELECT * from $database_tblname WHERE id = '$dataID'");

                  while ($row_attach = mysql_fetch_assoc($query_attach))  { 
 
                         $delattachName = $row_attach[attachment];
                         $delUserT =  $row_attach[user_id];

                  }

                  unlink("database/$delattachName"); 


                  $query_Tuser = mysql_query("SELECT unterlagennumbers, credits from $user_tblname WHERE UserID = '$delUserT'");

                  while ($row_Tuser = mysql_fetch_assoc($query_Tuser))  {

                         $unterlagenT = $row_Tuser[unterlagennumbers];
                         $creditsT    = $row_Tuser[credits];

                  }

                  $qy_Tpoints = mysql_query("SELECT points from $credits_tblname WHERE datei = '$dataID'");

                  while ($rw_Tpoints = mysql_fetch_assoc($qy_Tpoints))  {

                         $old_points = $rw_Tpoints[points];

                  }

                  $differ = $creditsT - $old_points;

                  if ($differ < 0) $differ = 0;

                  $unterlagenT = $unterlagenT - 1;

                  $query_unterlagenNumb = "UPDATE $user_tblname SET unterlagennumbers = '$unterlagenT' WHERE UserID = '$delUserT'";

                  mysql_query($query_unterlagenNumb) OR die(mysql_error());


              //    $delete_dataP = "DELETE FROM $credits_tblname WHERE datei = '$dataID'";

              //    mysql_query($delete_dataP);


                  $delete_data = "DELETE FROM $database_tblname WHERE id = '$dataID'";

                  mysql_query($delete_data);
      
                  $refresh_time = "2";

                  $text01 = "Eintrag wurde entfernt!";

                  $link   = $linkData;

                  include("templates/refresh.php");

             }

         }

     }

  }

