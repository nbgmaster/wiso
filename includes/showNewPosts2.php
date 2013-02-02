<?php 

     $_cSave = 0;
     $_fSave = 0;

     $no_entrys_view = 0;

     if ($act_view2 == "1")  {

         $qy_vUex   = mysql_query("SELECT c, f from $view_tblname WHERE user = '$userdata_id'");

         while ($rw_vUex = mysql_fetch_assoc($qy_vUex))  {

                $v_fid = $rw_vUex[f];
                $v_cid = $rw_vUex[c]; 

         }

         $v_fid = explode(",", $v_fid);

     }


     $Ay_noself = array();

     $qy_p_self = mysql_query("SELECT t from $posts_tblname WHERE time >= '$addnto' && user_id != '$userdata_id'");
	
     while ($rw_p_self = mysql_fetch_assoc($qy_p_self))  { 

            if ( !in_array($rw_p_self[t], $Ay_noself) )  {

                 array_push($Ay_noself, $rw_p_self[t]);

            }

     }

     natsort($Ay_noself);


     while ($row_threads = mysql_fetch_assoc($query_threads))  { 


        if ( in_array($row_threads[id], $Ay_noself) )  {


            if ($act_view2 == "0" or $act_view2 == "1" && in_array($row_threads[f], $v_fid))  {

                 $no_entrys_view = 1;

                 if ($row_threads[c] != $_cSave or $row_threads[f] != $_fSave)  {

                     $qySa_Cat    = mysql_query("SELECT title from $c_tblname WHERE id = '$row_threads[c]'");

                     while ($rwSa_Cat = mysql_fetch_assoc($qySa_Cat))  {  

                            $cat_NeO = $rwSa_Cat["title"];  $cat_Ne = $rwSa_Cat["id"]; echo"$cat_Ne";

	             }

                     $qySa_For    = mysql_query("SELECT forum from $f_tblname WHERE id = '$row_threads[f]'");

                     while ($rwSa_For = mysql_fetch_assoc($qySa_For))  {  

                            $For_NeO = $rwSa_For["forum"]; 

	             }

                     if ($_cSave != "0")  {

                         include("templates/close_table.php");

                     }

                     include("templates/category.php");

                     include("./templates/threads_top.php");

                 }

             }


             if ($act_view2 == "0" or $act_view2 == "1" &&  in_array($row_threads[f], $v_fid))  {

           /*
             $nepres = mysql_query("SELECT COUNT( id ) AS new_posts from $newposts_tblname WHERE t = '$row_threads[id]' && user_id = '$userdata_id' LIMIT 1");

             $neprow = mysql_fetch_row( $nepres );

             $new_posts = $neprow[ 0 ];
  
           */
           
              $ok1="";
              $ok2="";
                            
              if ($row_threads["rankingtime"] > $lastOnlineTime) $ok1 = 1; 
                                             
              if (isset($_COOKIE["newP"]) != "") $new_newP2 = explode(",", $_COOKIE["newP"]);
              else $new_newP2[] = ""; 

              if(!in_array($row_threads["id"],$new_newP2))$ok2 = 1;
              
              if (isset($postcheckn)) { if ($postcheckn == $row_threads["id"]) $ok2 = 0;  }

              if ($ok1 == 1 && $ok2 == 1) $new_posts = 1; else $new_posts = 0;
              unset($new_newP2);
           
             $f = $row_threads[f];


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


             $qnores = mysql_query("SELECT COUNT( id ) AS newOnesN from $posts_tblname WHERE t = '$row_threads[id]' && time >= '$lastOnlineTime' && user_id != '$userdata_id' LIMIT 1");

             $qnorow = mysql_fetch_row( $qnores );

             $newOnesN = $qnorow[ 0 ];


             $pollres = mysql_query("SELECT COUNT( id ) AS poll_available from $polls_tblname WHERE t = '$row_threads[id]' LIMIT 1");

             $pollrow = mysql_fetch_row( $pollres );

             $poll_available = $pollrow[ 0 ];


             if ($poll_available > 0)  {

                 $poll_img = "<img src=\"images/templates/$template/poll.gif\">";

             }    

             else  {

                 $poll_img = ""; 

             } 


             $thread_author_id   = $row_threads[author_id];


             $qyTauthor     = mysql_query("SELECT UserName from $user_tblname WHERE UserID = '$thread_author_id'");

             while ($rwTauthor = mysql_fetch_assoc($qyTauthor))  {  

                    $thread_author_name = $rwTauthor["UserName"];

             } 

             $last_post_username = "";

             $query_last_post = mysql_query("SELECT id, user_id, time from $posts_tblname WHERE t = '$row_threads[id]' ORDER by id DESC LIMIT 1");

             while ($row_last_post = mysql_fetch_assoc($query_last_post))  {  

                    $last_post_id       = $row_last_post["id"];
		                $last_post_user_id  = $row_last_post["user_id"]; 
                    $last_post_time     = $row_last_post["time"];

                    $query_last_post_username = mysql_query("SELECT UserID, UserName from $user_tblname WHERE UserID = '$last_post_user_id'");

                    while ($row_last_post_username = mysql_fetch_assoc($query_last_post_username))  {  

		           $last_post_user_id    = $row_last_post_username["UserID"];                                                      
		           $last_post_username   = $row_last_post_username["UserName"];
 						    
                    } 
             }

             if ($last_post_username == "")  $last_post_username = "User gel&ouml;scht";

             if ($last_post_user_id == "0")  {

	         $last_post_username   = "Gast";

             }


             $last_post_time2 = date("H:i",$last_post_time);
             $last_post_date  = date("d.m.Y",$last_post_time);

             $day_date4 = $timestamp - 84600;
	     $day_date5 = date("d.m.Y",$day_date4);

             if ($last_post_date == $c_date)  { 

                 $last_post_date = "<b>Heute</b>";

             }

             if ($last_post_date == $day_date5)  { 

                 $last_post_date = "<i>Gestern</i>";

             } 


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
   

                 include("templates/showNewPosts.php"); 


       /* Variablen c und f saven */

       $_cSave = $row_threads[c];
       $_fSave = $row_threads[f];

       }

     }
             
  } // end of while

  if ($no_entrys_view == "1")  {

      include("templates/close_table.php");

  }


