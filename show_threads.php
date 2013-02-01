<?php 

      $chdatares = mysql_query("SELECT COUNT( id ) AS check_rows from $threads_tblname WHERE f = '$f' LIMIT 1");
 
      $chdatarow = mysql_fetch_row( $chdatares );

      $check_rows = $chdatarow[ 0 ];


  $granted_access = "0";

  $granted_write = "0";


  $snt = "0";
 /*
      $check_new_threads = mysql_query("SELECT t from $newposts_tblname WHERE user_id = '$userdata_id' && f = '$f'");

      while ($row_new_threads = mysql_fetch_assoc($check_new_threads))  {

             $save_new_threads[$snt] = "$row_new_threads[t]";

             $snt = $snt + 1;

      }
  */

      $check_rights   = mysql_query("SELECT f_write, f_read from $f_tblname WHERE id = '$f'");

      while ($row_rights = mysql_fetch_assoc($check_rights))  { 


// Darf User Topic lesen?


             if ($row_rights[f_read] == "all")  {

                 $granted_access = "1"; 

             }

             if ($row_rights[f_read] == "reg")  {
 
                 if ($userdata_id != "")  { 

                     $granted_access = "1";

                 }  

             }

             if ($row_rights[f_read] == "mod")  {

                 $chmo2res = mysql_query("SELECT COUNT( id ) AS mod_status2 from $moderator_tblname WHERE user_id = '$userdata_id' && f_id = '$f' LIMIT 1");
 
                 $chmo2row = mysql_fetch_row( $chmo2res );
  
                 $mod_status2 = $chmo2row[ 0 ];


                 if ($mod_status2 > 0)  {

                     $granted_access = "1";

                 }  

             }
 
             if ($row_rights[f_read] == "admin")  {

                 if ($userdata_admin == "1")  {

                     $granted_access = "1";
  
                 } 

            }     

// Darf User neues Topic eröffnen?


              if ($row_rights[f_write] == "all")  {

                  $granted_write = "1"; 
 
              }


              if ($row_rights[f_write] == "reg")  {
  
                  if ($userdata_id != "")  { 

                      $granted_write = "1";

                  }  

              }

              if ($row_rights[f_write] == "mod")  {

                  $chmores = mysql_query("SELECT COUNT( id ) AS mod_status from $moderator_tblname WHERE user_id = '$userdata_id' && f_id = '$f' LIMIT 1");
 
                  $chmorow = mysql_fetch_row( $chmores );

                  $mod_status = $chmorow[ 0 ];
 
                  if ($mod_status > 0)  {

                      $granted_write = "1";

                  }  

              }

              if ($row_rights[f_write] == "admin")  {

                  if ($userdata_admin == "1")  {

                      $granted_write = "1";

                  } 

             }        
      
       }




  if ($granted_access == "1")  {


  if ($do != "search")  {


          $img_name = "hoverimg";

          include("includes/navi_links.php"); 

          echo"<br>";

          include("includes/navi_sides.php"); 


      $query_threads = mysql_query("SELECT * from $threads_tblname WHERE f = '$f'");


  }

  else  {


      $counter_t = "0";
      $nodoubles = "0";
      $topicids[] = "";

      while ($row_posts = mysql_fetch_assoc($query_posts2))  {  

             foreach ($topicids as $topicids2)  {

                      if ($row_posts[t] == $topicids2)  { 

                          $nodoubles = "1"; 

                      }

             }
             
             if ($nodoubles == "0")  {

                 if ($counter_t == "0")  {

                     $topicids[$counter_t] = "id = '$row_posts[t]'";

                 }

                 else  {

                     $topicids[$counter_t] = " or id = '$row_posts[t]'";

                 }

             $counter_t = $counter_t + 1; 

             }

      } 

      $tfolders = implode("\n", $topicids);


      $chrores = mysql_query("SELECT COUNT( id ) AS check_rows from $threads_tblname WHERE $tfolders LIMIT 1");
 
      $chrorow = mysql_fetch_row( $chrores );

      $check_rows = $chrorow[ 0 ];


      $break = "$show_threads";

      include("includes/navi_sides.php");

  }


  $topicnumbers  = mysql_num_rows($query_threads);


  if ($topicnumbers == "0")  {  

      include("templates/threads_none.php");

  }

  else  { 


      if ($do != "search")  {


              $query_threads = mysql_query("SELECT * from $threads_tblname WHERE f = '$f' order by announce DESC, rankingtime DESC LIMIT ".(($page-1)*$break).",$break");


      }

      else  {

          if ($sortby == "lastpost")  { 

              $sortby = "rankingtime"; 

          }

          $query_threads = mysql_query("SELECT * from $threads_tblname WHERE $tfolders ORDER by $sortby $order LIMIT ".(($page-1)*$break).",$break");

      }

      

          include("templates/threads_top.php");


      $countNoZ = "0";

      while ($row_threads = mysql_fetch_assoc($query_threads))  {   


             if ($do != "search")  {

                 $query_post_id     = mysql_query("SELECT id from $posts_tblname WHERE f = '$f' && t = '$row_threads[id]'");

                 $qypires = mysql_query("SELECT COUNT( id ) AS thread_answers from $posts_tblname WHERE f = '$f' && t = '$row_threads[id]' LIMIT 1");

             }

             else  {

                 $query_post_id     = mysql_query("SELECT id from $posts_tblname WHERE t = '$row_threads[id]'");

                 $qypires = mysql_query("SELECT COUNT( id ) AS thread_answers from $posts_tblname WHERE t = '$row_threads[id]' LIMIT 1");

             }

             $qypirow = mysql_fetch_row( $qypires );

             $thread_answers = $qypirow[ 0 ];


             $thread_answers2   = $thread_answers - 1;


             while ($row_post_id = mysql_fetch_assoc($query_post_id))  {  

                    $newest_post_id = $row_post_id["id"]; 

	     }




             $pollres = mysql_query("SELECT COUNT( id ) AS poll_available from $polls_tblname WHERE t = '$row_threads[id]' LIMIT 1");

             $pollrow = mysql_fetch_row( $pollres );

             $poll_available = $pollrow[ 0 ];


             if ($poll_available > 0)  {

                 $poll_img = "<img src=\"images/templates/$template/poll.gif\">";

             }    

             else  {

                 $poll_img = ""; 

             } 



             $thread_author_name = "";

             $last_post_user_id = "";

             $thread_author_id   = $row_threads[author_id];


             $qyTauthor     = mysql_query("SELECT UserName from $user_tblname WHERE UserID = '$thread_author_id'");

             while ($rwTauthor = mysql_fetch_assoc($qyTauthor))  {  

                    $thread_author_name = $rwTauthor["UserName"];

             } 

             if ($thread_author_name == "")  $thread_author_name = "User gelöscht";


             $query_last_post = mysql_query("SELECT id, user_id, time from $posts_tblname WHERE t = '$row_threads[id]' ORDER by id DESC LIMIT 1");

             while ($row_last_post = mysql_fetch_assoc($query_last_post))  {  

                    $last_post_id       = $row_last_post["id"];
		    $last_post_user_id  = $row_last_post["user_id"]; 
                    $last_post_time     = $row_last_post["time"];

             }
 
             $lp_user_id = "";

             $query_last_post_username = mysql_query("SELECT UserID, UserName from $user_tblname WHERE UserID = '$last_post_user_id'");

             while ($row_last_post_username = mysql_fetch_assoc($query_last_post_username))  {  

		    $lp_user_id          = $row_last_post_username["UserID"];                                                 
		    $last_post_username  = $row_last_post_username["UserName"];
 					    
             } 


             if ($lp_user_id == "")  {

	         $last_post_username   = "User gelöscht";

             }


             $last_post_time2 = date("H:i",$last_post_time);
             $last_post_date  = date("d.m.Y",$last_post_time);

             $day_date4 = $timestamp - 86400;
	     $day_date5 = date("d.m.Y",$day_date4);

             if ($last_post_date == $c_date)  { 

                 $last_post_date = "<b>Heute</b>";

             }

             if ($last_post_date == $day_date5)  { 

                 $last_post_date = "<i>Gestern</i>";

             } 



                 $check_double = "false";
                /*
                 if ($save_new_threads == "" or $save_new_threads == "0")  {

                     $new_posts = "0";

                 }

                 else  {

                     foreach ($save_new_threads as $new_posts2)  {

                              if ($new_posts2 == $row_threads[id]) {

                                  $new_posts = "1"; 

                                  $check_double = "true";

                              }

                              else if ($check_double != "true")  {

                                  $new_posts = "0";

                              }
       
                     }

                 }  */
                 

              $ok1="";
              $ok2="";
              $new_posts = 0;
                            
              if ($row_threads["rankingtime"] > $lastOnlineTime) $ok1 = 1; 
                                             
              if (isset($_COOKIE["newP"]) != "") $new_newP2 = explode(",", $_COOKIE["newP"]);
              else $new_newP2[] = ""; 

              if(!in_array($row_threads["id"],$new_newP2))$ok2 = 1;
              
              if (isset($postcheckn)) { if ($postcheckn == $row_threads["id"]) $ok2 = 0;  }

              if ($ok1 == 1 && $ok2 == 1) $new_posts = 1; else $new_posts = 0;
              unset($new_newP2);

         $f_status = $row_threads["status"];

         if ($f_status == "0")  {

             if ($thread_answers2 > 50 or $row_threads["hits"] > 150)  {

                 if ($new_posts == "0")  { 

                     $img_newposts = "hotlockfolder.gif";  

                 }

                 else  {

                     $img_newposts = "hotlockfolderbutnew.gif";  

                 }

             }

             else  {

                 if ($new_posts == "0")  { 

                     $img_newposts = "closed.gif";  

                 }

                 else  {

                     $img_newposts = "closedbutnew.gif";  

                 }

             }

         }

         else  {


             if ($new_posts == "0")  { 

                 if ($thread_answers2 > 50 or $row_threads["hits"] > 150)  {

                     $img_newposts = "hotfolder.gif";  

                 }

                 else  {

                     $img_newposts = "folder.gif";  

                 }

             } 

             else  {


                 if ($thread_answers2 > 50 or $row_threads["hits"] > 150)  {

                     $img_newposts = "newhotfolder.gif";  

                 }

                 else  {

                     $img_newposts = "newfolder.gif";  

                 }

             }

         }


          $ponures = mysql_query("SELECT COUNT( id ) AS post_numbers2 from $posts_tblname WHERE time < '$last_post_time' && t = '$row_threads[id]' LIMIT 1");
 
          $ponurow = mysql_fetch_row( $ponures );

          $post_numbers2 = $ponurow[ 0 ];



       
         $output = $post_numbers2 / $postsperpage;

         $output = floor($output); 

         $output++; 


             if ($output == "1")  { 

                 $show_link = "#$last_post_id"; 

             }

             else  {

                 $show_link = "&page=$output#$last_post_id";

             }
   

             include("templates/threads.php"); 

             $countNoZ++;
             
       }
 

       include("templates/close_table.php");


  }


  if ($countNoZ > $navi_bottom_begin)  { 

      $img_name = "hoverimg2";

      include("templates/navi_sides.php");echo"<br>";
      include("includes/navi_links.php");

  }

  if ($browser != "IE")  { echo"<br>"; }

      include("templates/thread_search.php");

      include("templates/footer_goto.php"); echo"<br>";

      include("templates/footer_folders_threads.php");

  }



  else  {

      include("templates/no_permission.php");

  }
