<script type="text/javascript" src="javascript/window_position.js" language="JavaScript1.2"></script>

<?php 

  function GetboerseNumbers($lectureU)  {

    // include("dbCon.php");

     $timestamp = time();

     if ($lectureU == "stuff")  { 

         $queryU = mysql_query("SELECT COUNT( id ) AS count_files from boerse WHERE durance > '$timestamp' && category = '$lectureU' LIMIT 1");

     }

     else  {

         $queryU = mysql_query("SELECT COUNT( id ) AS count_files from boerse WHERE durance > '$timestamp' && lecture = '$lectureU' LIMIT 1");

     }

     $chdataU = mysql_fetch_row( $queryU );

     $count_files = $chdataU[ 0 ];

     echo"$count_files";

  }


  $netscapeC = "a";

  $queryUn = mysql_query("SELECT COUNT( id ) AS netscapeC from boerse WHERE lecture = '$lecture' LIMIT 1");

  $chdataUn = mysql_fetch_row( $queryUn );

  $netscapeC = $chdataUn[ 0 ];

  

  if ($sec == "" or $sec == "new")  { 


      if ($sec == "")  {

          $query_boerse3 = mysql_query("SELECT * from $boerse_tblname WHERE durance > '$timestamp'");

          $check_rows2 = mysql_num_rows($query_boerse3); 

      }

      else  {

          $query_boerse3 = mysql_query("SELECT * from $boerse_tblname WHERE date > '$lastOnlineTime' && user_id != '$userdata_id' && durance > '$timestamp' ORDER by date DESC");
  
          $check_rows2 = mysql_num_rows($query_boerse3);

      }

      include("market_top3.php");

      if ($sec == "")  {

          include("market_top.php"); 

      }

      if ($sec == "")  { 

          if ($_POST[category] == "all" or $category == "all")  {

              $query_boerse2 = mysql_query("SELECT * from $boerse_tblname WHERE durance > '$timestamp' ORDER by date DESC");

          }

          else  {

              $query_boerse2 = mysql_query("SELECT * from $boerse_tblname WHERE category = '$category' && lecture = '$lecture' && durance > '$timestamp' ORDER by date DESC");

          }
  
      }

      else  {

          $query_boerse2 = mysql_query("SELECT * from $boerse_tblname WHERE date > '$lastOnlineTime' && user_id != '$userdata_id' && durance > '$timestamp' ORDER by date DESC");
  
      }

      $check_rows = mysql_num_rows($query_boerse2); 

      include("includes/navi_sides.php"); 
  

      if ($sec == "")  {

          if ($_POST[category] == "all" or $category == "all")  {

              $query_boerse = mysql_query("SELECT * from $boerse_tblname WHERE durance > '$timestamp' ORDER by date DESC LIMIT ".(($page-1)*$break).",$break");

          }

          else  {

              $query_boerse = mysql_query("SELECT * from $boerse_tblname WHERE category = '$category' && lecture = '$lecture' && durance > '$timestamp' ORDER by date DESC LIMIT ".(($page-1)*$break).",$break");

          }

      }

      else  {

      $query_boerse = mysql_query("SELECT * from $boerse_tblname WHERE date > '$lastOnlineTime' && user_id != '$userdata_id' && durance > '$timestamp' ORDER by date DESC LIMIT ".(($page-1)*$break).",$break");

      }

      $count_files = $check_rows; 

      if ($count_files > 0)  { 

          include("market_top2.php");

          while ($row_boerse  = mysql_fetch_assoc($query_boerse))  { 

                 $this_date    =  date("d.m.Y",$row_boerse[date]); 

                 $query_thisuser      = mysql_query("SELECT UserName, formmailer from $user_tblname WHERE UserID = '$row_boerse[user_id]'");
         
                 while ($row_thisuser  = mysql_fetch_assoc($query_thisuser))  {  

                        $thisUser = $row_thisuser[UserName];
                        $mailPerm = $row_thisuser[formmailer];

                 }

                 include("market.php");

          }

        //  include("templates/close_table.php");

      }

      else  { 

          ?>

            <table width="<?php  echo"$width"; ?>" cellpadding="2" cellspacing="1" class="tableinborder">
            <tr><td class="tableb" align="center"><br>
            <span class="big"><b>

          <?php  

          if ($sec == "")  { 

             if ($netscapeC != "0" or $lecture == "empty") { 

                 echo"W&auml;hle oben eine Kategorie und die gew&uuml;nschte Vorlesung aus.";

             }

             else  {

                 echo"Es sind noch keine Eintr&auml;ge in dieser Kategorie vorhanden.";

             }

          }

          else  {

          ?> Keine Anzeigen vorhanden. <?php 

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

          function byte_umrechner($bytes) {
  
             $size  = number_format(($bytes / pow(2,20)), 2);
             $size .= " MB";
             return $size;
 
          }

          $file_max_size2 = byte_umrechner($file_max_size);

         
          if ($module == "")  {

              include("market_upload.php");

          }

          else  {

              // Line Breaks
  
              $description = stripslashes($description);

              if ($_FILES["file"]["name"] != "")  { include("attachment.php"); } else $upload_access = "yes";

              if ($upload_access == "yes")  {

                  $oneweek = 24*60*60*7;

                  $durance = $durance * $oneweek;

                  $durance = $timestamp + $durance;

                  $title = str_replace("<", "&lt;", $title);
                  $title = str_replace(">", "&gt;", $title);
                  $description = str_replace("<", "&lt;", $description);
                  $description = str_replace(">", "&gt;", $description);
  
                  $query_boerse = "INSERT INTO $boerse_tblname (user_id, category, lecture, title, description, attachment, date, dateiname, durance)";
 
                  $query_boerse .= "VALUES ('$userdata_id', '$category', '$lecture', '$title', '$description', '$attachment', '$timestamp', '$filename', '$durance')";
 
                  $result_boerse = @mysql_query($query_boerse) OR die(mysql_error());


                  $text01 = "Anzeige wurde ver&ouml;ffentlicht!";
 
                  $link   = "index.php?do=market&category=$category&lecture=$lecture";
  

              }

              else  {

                  $refresh_time = "3";
 
                  $link   = "javascript:history.back()";

              }

              include("templates/refresh.php");


          }

      }


  if ($sec == "change" && isset($send_postdata))  {

             function byte_umrechner($bytes) {
  
                 $size  = number_format(($bytes / pow(2,20)), 2);
                 $size .= " MB";
                 return $size;
 
              }

              $file_max_size2 = byte_umrechner($file_max_size);


              // Line Breaks
  
              $description = stripslashes($description);


              $title = str_replace("<", "&lt;", $title);
              $title = str_replace(">", "&gt;", $title);
              $description = str_replace("<", "&lt;", $description);
              $description = str_replace(">", "&gt;", $description);

  
              $upad = "UPDATE $boerse_tblname SET title = '$title', description = '$description', category = '$category', lecture = '$lecture' WHERE id = '$ad_id'";     

              mysql_query($upad) OR die(mysql_error());

              $text04 = "Anzeige wurde ge&auml;ndert!";
 
              $link   = "index.php?do=market&sec=myads";


              if ($del_attach == "1")  {

                  $query_at = mysql_query("SELECT attachment from $boerse_tblname WHERE id = '$ad_id'");

                  while ($row_at = mysql_fetch_assoc($query_at))  { 

                         $old_at = $row_at[attachment];

                  }

                  $update_at  = "UPDATE $boerse_tblname Set attachment = '', dateiname = '' WHERE id = '$ad_id'";  
                  $sql_at     = mysql_query($update_at);

                  unlink("boerse/$old_at"); 

              }


              if ($_FILES["file"]["name"] != "")  { include("attachment.php"); 

                  if ($upload_access == "yes")  {

                      $upad2 = "UPDATE $boerse_tblname SET attachment = '$attachment', dateiname = '$filename' WHERE id = '$ad_id'";     

                      mysql_query($upad2) OR die(mysql_error());
 
                  }

                  else  {

                      $refresh_time = "3";
 
                      $link   = "javascript:history.back()";
 
                  }

              }

              include("templates/refresh.php");


      }


      if ($sec == "delete")  {

          if (isset($send_del_data))  { 

              if ($_POST["deloption"] != "")  {

                  if ($deloption == "del_myad")  {

                      foreach ($del_id as $element)  {


                         $query_at = mysql_query("SELECT attachment from $boerse_tblname WHERE id = '$element'");

                         while ($row_at = mysql_fetch_assoc($query_at))  { 

                                if ($row_at[attachment] != "") unlink("boerse/$row_at[attachment]");

                         }


                         $delete_ad = "DELETE FROM $boerse_tblname WHERE id = '$element'";     

                         mysql_query($delete_ad) OR die(mysql_error());  
   
                      }

                      $text01 = "Anzeige wurde gel&ouml;scht!";
 
                  }

                  else  { 


                      $query_at = mysql_query("SELECT attachment from $boerse_tblname WHERE user_id = '$userdata_id'");

                      while ($row_at = mysql_fetch_assoc($query_at))  { 

                             if ($row_at[attachment] != "") unlink("boerse/$row_at[attachment]");

                      }


                      $delete_ads = "DELETE FROM $boerse_tblname WHERE user_id = '$userdata_id'";     

                      mysql_query($delete_ads) OR die(mysql_error());  


                      $text01 = "Deine Anzeigen wurden gel&ouml;scht!";
 
                  }

                  $refresh_time = "2";

                  $link   = "index.php?do=market&sec=myads";

                  include("templates/refresh.php");

             }

         }

     }

     if ($sec == "myads")  { 

         include("myads_top.php");

         $qyMad = mysql_query("SELECT COUNT( id ) AS totalR from $boerse_tblname WHERE durance > '$timestamp' && user_id = '$userdata_id' LIMIT 1");
  
         $chMad = mysql_fetch_row( $qyMad );

         $totalR = $chMad[ 0 ];
 
         if ($totalR > 0)  {

             include("myads.php");

         }

         else { 

            ?> <table width="<?php  echo"$width"; ?>" cellpadding="2" cellspacing="1" class="tableinborder">
            <tr><td class="tableb" align="center"><br>
            <span class="big"><b>Du hast zur Zeit keine eigenen Anzeigen inseriert.</b></span><br><br></td></tr></table><?php 

         }

     }

     if ($sec == "changead")  { 


         $qychange = mysql_query("SELECT * from $boerse_tblname WHERE id = '$ad_id'");

         while ($rowchange = mysql_fetch_assoc($qychange))  {

                $pUch = $rowchange[user_id];

                $category    = "$rowchange[category]";
                $lecture     = "$rowchange[lecture]";
                $description = "$rowchange[description]";
                $title       = "$rowchange[title]";
                $attach      = "$rowchange[attachment]";

         }              

         if ($pUch == $userdata_id)  {

             include("changead.php");

         }   

         else  {

             header ("Location:index.php?do=market&sec=myads");
 
         }

     }


  }
