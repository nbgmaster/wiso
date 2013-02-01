<?php 

  include("./templates/stats_top.php");


  $query_newest_posts = mysql_query("SELECT * from $posts_tblname ORDER by time DESC LIMIT 3");

  while ($row_newest_posts = mysql_fetch_assoc($query_newest_posts))  {  

         $query_n_threads = mysql_query("SELECT * from $threads_tblname WHERE id = '$row_newest_posts[t]'");

         while ($row_n_threads = mysql_fetch_assoc($query_n_threads))  {

                $last_thread = substr($row_n_threads[threadname], 0, 50);

                $post_numbers     = mysql_query("SELECT * from $posts_tblname WHERE t = '$row_n_threads[id]'");
                $post_numbers2    = mysql_num_rows($post_numbers);

                $output = $post_numbers2 / $postsperpage;

                $query_n_user = mysql_query("SELECT * from $user_tblname WHERE UserID = '$row_newest_posts[user_id]'");

                while ($row_n_user = mysql_fetch_assoc($query_n_user))  {  

                       $row_newest_posts[message]= preg_replace('=\[(.*)\](.*)\[/(.*)\]=Uis','$2',$row_newest_posts[message]);

                       $last_post = substr($row_newest_posts[message], 0, 50);


                       if ($output < 1)  { 

                           $show_link = "index.php?t=$row_n_threads[id]#$row_newest_posts[id]"; 

                       }

                       else  {
 
                           for ($count = 1;$count <= 10000;$count++)  {    

                                if ($output > $count)  {

                                    $page = $count + 1; 

                                }

	                   }

                           $show_link = "index.php?t=$row_n_threads[id]&page=$page#$row_newest_posts[id]";

                       }

                       $timeago = $timestamp - $row_newest_posts[time];

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

  }

  include("./templates/stats_bottom.php");

