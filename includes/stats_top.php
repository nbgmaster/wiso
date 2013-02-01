<?php 

  include("./templates/stats_top.php");

  $count_hover = "1";

  $query_newest_posts = mysql_query("SELECT id, hits, threadname from $threads_tblname WHERE f != '10' ORDER by rankingtime DESC LIMIT 5");

  while ($row_newest_posts = mysql_fetch_assoc($query_newest_posts))  {

         $query_n_threads = mysql_query("SELECT id, f, title, message, user_id, time from $posts_tblname WHERE t = '$row_newest_posts[id]' ORDER by time DESC LIMIT 1");

         while ($row_n_threads = mysql_fetch_assoc($query_n_threads))  { 

                $last_thread = $row_newest_posts[threadname];

                if(strlen($last_thread) > 40) { 

                   $last_thread = substr($row_newest_posts[threadname], 0, 37).'...';

                } 


                $ponu2res = mysql_query("SELECT COUNT( id ) AS post_numbers3 from $posts_tblname WHERE t = '$row_newest_posts[id]' LIMIT 1");
 
                $ponu2row = mysql_fetch_row( $ponu2res );

                $post_numbers3 = $ponu2row[ 0 ];


                $thread_answers2   = $post_numbers3 - 1;

    
                $output2 = $post_numbers3 / $postsperpage;

                $output2 = floor($output2); 

                $output2++; 


                $qy_fst = mysql_query("SELECT forum from $f_tblname WHERE id = '$row_n_threads[f]'");

                while ($rw_fst = mysql_fetch_assoc($qy_fst))  {  

                       $fst_board = $rw_fst[forum];
                       
                }

                if(strlen($fst_board) > 28) { 

                   $fst_board = substr($fst_board, 0, 25).'...';

                } 

                $st_userl = "";
 
                $query_n_user = mysql_query("SELECT UserID, UserName from $user_tblname WHERE UserID = '$row_n_threads[user_id]'");

                while ($row_n_user = mysql_fetch_assoc($query_n_user))  {  

                       $st_userl = "$row_n_user[UserName]";

                }

                       $row_n_threads[message] = preg_replace('=\[(.*)\](.*)\[/(.*)\]=Uis','$2',$row_n_threads[message]);

                       $last_post = substr($row_n_threads[message], 0, 50);


                       if ($post_numbers3 > 0)  { 

                           if ($output2 == "1")  { 

                               $show_link2 = "index.php?t=$row_newest_posts[id]#$row_n_threads[id]"; 

                           }

                           else  {
 
                               $show_link2 = "index.php?t=$row_newest_posts[id]&page=$output2#$row_n_threads[id]";

                           }
   
                       } 


                       $timeago = $timestamp - $row_n_threads[time];

	               $timeago2 = $timeago / 60 / 60; 

		       $hours    = floor($timeago2);

		       $left     = $hours * 60 * 60;

		       $left2    = $timeago - $left;

		       $minutes  = $left2 / 60;

		       $minutes  = floor($minutes);

                       $secondes = $timeago;  

                       include("./templates/stats_main.php");


          }

  }

  include("./templates/stats_bottom.php");

