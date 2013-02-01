<?php 

  $newthreadno = "0";

  $message = stripslashes($message);
  $message = str_replace("'", "\'", $message);

/*

      $newtitle = str_replace("<", "&lt;", $newtitle);
      $newtitle = str_replace(">", "&gt;", $newtitle);
      $title = str_replace("<", "&lt;", $title);
      $title = str_replace(">", "&gt;", $title);
      $message = str_replace("<", "&lt;", $message);
      $message = str_replace(">", "&gt;", $message);
*/

if (strlen($message) > 10000) { $message = substr($message,0, 10000); $_POST[message] = substr($_POST[message],0, 10000); }

  // Post PM

  if ($_POST[user_id] != "" or $_POST[user_idB] != "") { 

      if ($_POST[user_idB] == "1")  {

          $qyB = mysql_query("SELECT UserID from $user_tblname WHERE UserName = '$_POST[newpm_receiver]'");
          //$qyBrows = mysql_num_rows($qyB);

          while ($rwB  =  mysql_fetch_assoc($qyB))  {

                 $user_id = "$rwB[UserID]";
     
          }

      }

      if ($user_id != "")  {

      $query_out_box   = "INSERT into $pm_out_tblname (sender_id, receiver_id, title, message, time, status) ";
      $query_out_box  .= "VALUES ('$userdata_id', '$user_id', '$title','$message', '$timestamp', '0')";

      $result_out_box  = @mysql_query($query_out_box) OR die(mysql_error());

      $query_newest_out_id = mysql_query("SELECT id from $pm_out_tblname ORDER by id");
  
      while ($row_newest_out_id  =  mysql_fetch_assoc($query_newest_out_id))  { 

             $newest_out_id = $row_newest_out_id["id"];

      }

      $query_in_box  = "INSERT into $pm_in_tblname (sender_id, receiver_id, title, message, time, status, out_id)";
      $query_in_box .= "VALUES ('$userdata_id', '$user_id', '$title', '$message', '$timestamp', '0', '$newest_out_id')";

      $result_in_box = @mysql_query($query_in_box);

      $query_email_pm = mysql_query("SELECT UserName, UserMail, email_pm from $user_tblname WHERE UserID = '$user_id'");
   
      while ($row_email_pm  =  mysql_fetch_assoc($query_email_pm))  {

             if ($row_email_pm[email_pm] == "1")  { 

                 $Header  = "MIME-Version: 1.0\n";

                 $Header .= "Content-type: text/html; charset=iso-8859-1\n";

                 $Header .= "From: admin@wiwistud.de\n";

                 $from  = "From: admin@wiwistud.de"; 

                 $to = $row_email_pm[UserMail]; 

                 $subject = "Neue private Nachricht!"; 

                 $message = 

"Hallo $row_email_pm[UserName]!
 
$userdata_name hat dir auf http://www.wiwistud.de eine private Nachricht geschickt!


Dein 
wiwistud.de Team


- Achtung: Keine Antwort an diese Emailadresse möglich!";

                 mail($to, $subject, $message, $from);

              }

      }


      $refresh_time = "1";

      $link   = "index.php?do=outbox";

      $text01 = "Nachricht verschickt!";

      }

      else  {

          $_SESSION["pm_title_o"] = $title;
          $_SESSION["pm_message_o"] = $message; 

          $refresh_time = "2";
  
          $link   = "javascript:history.back()";

          $text01 = "Empfänger ungültig!";

      }

      include("templates/refresh.php");

  }

  else  {


  if (isset($preview))  {

  function byte_umrechner($bytes) {
 
      $size  = number_format(($bytes / pow(2,20)), 2);
      $size .= " MB";
      return $size;

  } 

  if($html_disable == "0")     { $html_mode    = "An"; } else { $html_mode    = "Aus"; }
  if($smilies_disable == "0")  { $smilies_mode = "An"; } else { $smilies_mode = "Aus"; }
  if($bbcode_disable == "0")   { $bbcode_mode  = "An"; } else { $bbcode_mode  = "Aus"; }


      include('includes/navi_links.php'); 
      include("templates/reply.php"); 

      if ($title == "")  {

          include("includes/row_last_posts.php");

      }

  }

  else  {

      $upload_access = "yes";

      $tempname    = $_FILES["file"]["tmp_name"]; 

      if ($tempname != "" && $_POST[poll] != "1")  {

          set_time_limit  ( 0 );

          include("includes/attachment.php");
 
      }

  if ($upload_access == "yes")  {

      // Edit Post

      if ($_POST[p_id] != "")  { 

          if ($userdata_id == $_POST[p_userid] or $userdata_admin == "1" or $mod_user_status == "1")  { 


              if ($del_attach == "1" or $attachment != "")  {

                  $query_at = mysql_query("SELECT attachment from $posts_tblname WHERE id = '$p_id'");

                  while ($row_at = mysql_fetch_assoc($query_at))  { 

                         $old_at = $row_at[attachment];

                  }

                  if ($old_at != "")  {

                      $update_at  = "UPDATE $posts_tblname Set attachment = '', dateiname = '' WHERE id = '$p_id'";  
                      $sql_at     = mysql_query($update_at);

                      unlink("attachments/$old_at"); 

                  }

              }


              if ($attachment != "")  {
                   
                  $query_edit_post = "UPDATE $posts_tblname SET title = '$newtitle', message = '$message', attachment = '$attachment', dateiname = '$filename', edittime = '$timestamp', edit_user = '$userdata_id' WHERE id = '$p_id'";     

              }

              else  {

                  $query_edit_post = "UPDATE $posts_tblname SET title = '$newtitle', message = '$message', edittime = '$timestamp', edit_user = '$userdata_id' WHERE id = '$p_id'";     

              }

              mysql_query($query_edit_post) OR die(mysql_error());

              $query_newest_id = mysql_query("SELECT t from $posts_tblname WHERE id = '$p_id' ORDER by id");

              while ($row_newest_id  =  mysql_fetch_assoc($query_newest_id))  { 

              $newest_id = $row_newest_id["t"];

              }
      

 $qy_gotoP = mysql_query("SELECT id from $posts_tblname WHERE t = '$newest_id' ORDER by time");

 $countGT = "0";
    
         while ($rw_gotoP = mysql_fetch_assoc($qy_gotoP))  { 

                if ($rw_gotoP[id] == $_POST[p_id])  {

                    $GTnumbers = $countGT;

                }

                $countGT++;

         }

 $output = $GTnumbers / $postsperpage; 


              $output = floor($output); 

              $output++; 

              if ($output == "1")  { 

                  $link = "index.php?t=$newest_id#$p_id"; 

              }

              else  {

                  $link = "index.php?t=$newest_id&page=$output#$p_id";
 
              }


              $text01 = "Beitrag ";
              $text02 = "geändert!";

          }

          else  {

          include("templates/no_permission.php");

          }

      }

      // Post new thread

      else  {

          $title   = str_replace("<", "&lt;", $title);
          $title   = str_replace(">", "&gt;", $title);
          $message = str_replace("<", "&lt;", $message);
          $message = str_replace(">", "&gt;", $message);


          $dptime = $timestamp - $reload_post;


          $dbpres = mysql_query("SELECT COUNT( id ) AS doublepost from $posts_tblname WHERE user_id = '$userdata_id' && time > '$dptime' LIMIT 1");
 
          $dbprow = mysql_fetch_row( $dbpres );

          $doublepost = $dbprow[ 0 ];

                      
          if ($userdata_id == "")  { $userdata_id = "0"; }

          if ($_POST[poll] == "1")  {

              include("templates/poll.php");

          }

          $query_catC   = mysql_query("SELECT cat from $f_tblname WHERE id = '$f'");

          while ($row_catC = mysql_fetch_assoc($query_catC))  {  

                 $ThisC = $row_catC[cat];

          }

          if ($doublepost == "0" or $doublepost == "")  { 

              if ($_POST[title] != "" && $_POST[poll] != "1")  {  
 
                  $query_threads  = "INSERT into $threads_tblname (c, f, threadname, author_id, hits, rankingtime, status, announce) ";

                  $query_threads .= "VALUES ('$ThisC', '$f','$title','$userdata_id','0', '$timestamp', '1', '$announce')";
    
                  $result_threads = @mysql_query($query_threads) OR die(mysql_error());


                  $query_newest_t = mysql_query("SELECT id from $threads_tblname WHERE f = ".$f." ORDER by id");

                  while ($row_newest_t = mysql_fetch_assoc($query_newest_t))  {  
                   
                         $newest_t = $row_newest_t["id"];
       
                  }
                 /* 
                  if (isset($_COOKIE["newP"])) {
                
                       $new_newP = explode(",", $_COOKIE["newP"]);           
                       if (!in_array($newest_t, $new_newP)) { $new_newP[] = $newest_t; }     
                       $new_newP = array_unique($new_newP);            
                       $new_newP = implode(",", $new_newP); 
                    
                  } else { $new_newP = $newest_t.','; }
                  
     
                    setcookie("test", $new_newP, time()+60*60); 
                         setcookie("newP", "du wurscht", time()-60*60);
                  setcookie("newP", "du wurscht", time()+60*60);
                     $_COOKIE['newP'] = $new_newP;      */
  
                  if ($_POST[poll_question] != "")  {

                      $poll_question = str_replace("<", "&lt;", $poll_question);
                      $poll_question = str_replace(">", "&gt;", $poll_question);
                      $poll_data1 = str_replace("<", "&lt;", $poll_data1);
                      $poll_data1 = str_replace(">", "&gt;", $poll_data1);
                      $poll_data2 = str_replace("<", "&lt;", $poll_data2);
                      $poll_data2 = str_replace(">", "&gt;", $poll_data2);
                      $poll_data3 = str_replace("<", "&lt;", $poll_data3);
                      $poll_data3 = str_replace(">", "&gt;", $poll_data3);
                      $poll_data4 = str_replace("<", "&lt;", $poll_data4);
                      $poll_data4 = str_replace(">", "&gt;", $poll_data4);
                      $poll_data5 = str_replace("<", "&lt;", $poll_data5);
                      $poll_data5 = str_replace(">", "&gt;", $poll_data5);
                      $poll_data6 = str_replace("<", "&lt;", $poll_data6);
                      $poll_data6 = str_replace(">", "&gt;", $poll_data6);
 
                      $query_polls  = "INSERT into $polls_tblname (t, question, answer1, answer2, answer3, answer4, answer5, answer6) ";

                      $query_polls .= "VALUES ('$newest_t', '$poll_question','$poll_data1','$poll_data2','$poll_data3', '$poll_data4', '$poll_data5', '$poll_data6')";
   
                      $result_polls = @mysql_query($query_polls) OR die(mysql_error());

                  }

                  if ($attachment != "")  {

                      $query_posts  = "INSERT into $posts_tblname (f, t, user_id, title, message, time, attachment, dateiname) ";
        
                      $query_posts .= "VALUES ('$f','$newest_t','$userdata_id', '$title', '$message','$timestamp', '$attachment', '$filename')";

                  }

                  else  {

                      $query_posts  = "INSERT into $posts_tblname (f, t, user_id, title, message, time) ";
        
                      $query_posts .= "VALUES ('$f','$newest_t','$userdata_id', '$title', '$message','$timestamp')";

                  }

                  $qyUsPosts = mysql_query("SELECT postnumbers from $user_tblname WHERE UserID = '$auto_logon_id' && UserPass = '$auto_logon_session'");  
  
                  while  ($rwUsPosts  =  mysql_fetch_assoc($qyUsPosts))  {

                          $actual_pnumbers = $rwUsPosts[postnumbers];

                  }

                  $actual_pnumbers   = $actual_pnumbers + 1;

                  if ( $f != '10' )  {

                       $update_pnumbers = "UPDATE $user_tblname SET postnumbers = '$actual_pnumbers' WHERE UserID = '$userdata_id'";     
                       mysql_query($update_pnumbers);

                  }


                  $result_posts = @mysql_query($query_posts) OR die(mysql_error());
                  
                  $var_fuckyou = 1;

              }

          }

          else  { $newthreadno = "1"; }


          // New Post

         
          if ($_POST[forum_id] != "")  {  { 

              if ($doublepost == "0" or $doublepost == "")  { 

                  if ($attachment != "")  {
  
                      $query_posts  = "INSERT into $posts_tblname (f, t, user_id, title, message, time, attachment, dateiname) ";

                      $query_posts .= "VALUES ('$forum_id','$t','$userdata_id','$newtitle', '$message','$timestamp', '$attachment', '$filename')";

                   }

                   else  { 

                      $query_posts  = "INSERT into $posts_tblname (f, t, user_id, title, message, time) ";

                      $query_posts .= "VALUES ('$forum_id','$t','$userdata_id','$newtitle', '$message','$timestamp')";

                   }


                   $qyUsPosts = mysql_query("SELECT postnumbers from $user_tblname WHERE UserID = '$auto_logon_id' && UserPass = '$auto_logon_session'");  
  
                   while  ($rwUsPosts  =  mysql_fetch_assoc($qyUsPosts))  {

                           $actual_pnumbers = $rwUsPosts[postnumbers];

                   }

                   $actual_pnumbers   = $actual_pnumbers + 1;

                   if ( $forum_id != '10' )  {

                        $update_pnumbers = "UPDATE $user_tblname SET postnumbers = '$actual_pnumbers' WHERE UserID = '$userdata_id'";     
                        mysql_query($update_pnumbers);

                   }


                   $result_posts = @mysql_query($query_posts) OR die(mysql_error());

              }    

              else  { $newthreadno = "2"; }  


              $ponures = mysql_query("SELECT COUNT( id ) AS post_numbers2 from $posts_tblname WHERE time < '$timestamp' && t = '$t' LIMIT 1");
 
              $ponurow = mysql_fetch_row( $ponures );

              $post_numbers2 = $ponurow[ 0 ];


      
              $output = $post_numbers2 / $postsperpage;

              $output = floor($output); 

              $output++; 


              $sidenumbers    = $postnumbers / $postsperpage;

              $query_check_id = mysql_query("SELECT * from $posts_tblname WHERE t = '$t' ORDER by id");

              while ($row_check_id = mysql_fetch_assoc($query_check_id))  {  

                     $newest_id = $row_check_id["id"]; 

              }

          }   

      } 

      // Update rankingtime

      $query_rankingtime = "UPDATE $threads_tblname SET rankingtime = '$timestamp' WHERE id = '$t'";     

      mysql_query($query_rankingtime) OR die(mysql_error());

      $query_rankingtime = "UPDATE $f_tblname SET rankingtime = '$timestamp' WHERE id = '$forum_id'";     

      mysql_query($query_rankingtime) OR die(mysql_error());

      if (isset($_COOKIE["newP"])) {
      
           $new_newP = explode(",", $_COOKIE["newP"]);           
           if (!in_array($t, $new_newP)) $new_newP[] = $t;      
           $new_newP = array_unique($new_newP);            
           $new_newP = implode(",", $new_newP); 
           
      } else { $new_newP = $t.','; }
              
      setcookie("newP", $new_newP, time()+60*60*24*3);  
      setcookie("newP-time", $timestamp, time()+60*60*24*3);  

      // Refresh Data

      if ($_POST[title] == "")  { 

          $text01 = "Eintrag ";

      } 

      else  {

         $text01 = "Thema "; 

      }

          $text02 = "erstellt!"; 


      if ($_POST[title] != "")  { 
    
          $link = "index.php?t=$newest_t";

      }


      if ($_POST[title] == "" or $do == "edit")  {

          if ($output == "1")  { 

              $link = "index.php?t=$t#$newest_id"; 

          }

          else  {

              $link = "index.php?t=$t&page=$output#$newest_id";
 
          }

       }

    }

  if ($doublepost != "0" && $doublepost != "")  {


      if ($newthreadno == "1")  { $link = "index.php?f=$f"; }

     $refresh_time = "2"; $text01 = "Du schreibst zu schnell!"; $text02 = "";

  }

  if ($_POST[poll] != "1")  {

      include("templates/refresh.php");

  }
  
  if ($var_fuckyou == 1)  {
  
           if (isset($_COOKIE["newP"])) {
                
                       $new_newP = explode(",", $_COOKIE["newP"]);           
                       if (!in_array($newest_t, $new_newP)) { $new_newP[] = $newest_t; }     
                       $new_newP = array_unique($new_newP);            
                       $new_newP = implode(",", $new_newP); 
                    
                  } else { $new_newP = $newest_t.','; }
                   
                  setcookie("newP", $new_newP, time()+60*60*24*3);     
                  setcookie("newP-time", $timestamp, time()+60*60*24*3);  
    
          }


} // end of upload_access


else  {

      $refresh_time = "3";

      $link = "javascript:history.back()";

      include("templates/refresh.php");

}


  }

  }

