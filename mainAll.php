<?php 
 
  include("templates/categorys.php");


  if ($hidecat_var != "1")  { 


  include('templates/main_top.php'); 

  /* Array bilden, um zu wissen, in welchen Foren der User neue Beiträge hat */

  $Ay_NwP[] = "";

  $CT_NwP   = "0";

/*  $qy_NwP   = mysql_query("SELECT id, f from $newposts_tblname WHERE user_id = '$userdata_id'");

  while ($rw_NwP = mysql_fetch_assoc($qy_NwP))  {

         if (!in_array($rw_NwP[f], $Ay_NwP)) {
 
             $Ay_NwP[$CT_NwP] = "$rw_NwP[f]";

             $CT_NwP = $CT_NwP + 1;

         }
  }
     */

   $tp_F = "";

   $qyF = mysql_query("SELECT id, forum, status, description from $f_tblname WHERE cat = '$rwCats[id]' ORDER by position");



   while ($rwF = mysql_fetch_assoc($qyF))  { 


          if ($userdata_id == "")  {

              $img_newposts = "f_main.gif";

          }

          else  {

              $f_status = $rwF["status"]; 

              if ($f_status == "0")  {
 
              $img_newposts = "f_closed.gif";  

              }

              $Ay_newP[] = "";
         
              $get_new_entries = mysql_query("SELECT id from $threads_tblname WHERE f = '$rwF[id]' AND rankingtime > $lastOnlineTime ORDER by id");
              while ($new_ent = mysql_fetch_assoc($get_new_entries))  {
             
                     $Ay_newP[] = $new_ent['id']; 
                        
              }
          
              if (isset($postcheckn)) {
      
                  if ($rwF["id"] == $postcheck_f)  {  
                      $pos=array_search($postcheckn,$Ay_newP);
                      unset($Ay_newP[$pos]);
                  }
                  
              }
              
              $cook_ay = explode(",", $_COOKIE["newP"]);
                      
              $rest = array_diff($Ay_newP, $cook_ay); 
              
                             
              /*print_r($Ay_newP);   
              print_r($cook_ay); 
                echo"<br>";    */   
                
              unset($Ay_newP);   

                  //if (in_array($rwF[id], $Ay_NwP)) {
                  if (count($rest) > 0) {

                      $img_newposts = "f_new.gif";

                  }
 
                  else  {

                  $img_newposts = "f_main.gif";

                  }

          }


          $topres = mysql_query("SELECT COUNT( f ) AS topic from $threads_tblname WHERE f = '$rwF[id]' LIMIT 1");
 
          $toprow = mysql_fetch_row( $topres );

          $topic = $toprow[ 0 ];

          $artres = mysql_query("SELECT COUNT( f ) AS article from $posts_tblname WHERE f = '$rwF[id]' LIMIT 1");

          $artrow = mysql_fetch_row( $artres );

          $article = $artrow[ 0 ];

/*


          $mdavres = mysql_query("SELECT COUNT( id ) AS mods_available from $moderator_tblname WHERE f_id = '$rwF[id]' LIMIT 1");
 
          $mdavrow = mysql_fetch_row( $mdavres );

          $mods_available = $mdavrow[ 0 ];


         $query_mods      = mysql_query("SELECT user_id from $moderator_tblname WHERE f_id = '$rwF[id]' ORDER by user_id DESC");   


         $mod_id = "0"; $mods = "";

         if ($mods_available != "0")  { 

             while ($row_mods = mysql_fetch_assoc($query_mods))  { 

                    $query_mods_name       = mysql_query("SELECT UserID, UserName from $user_tblname WHERE UserID = '$row_mods[user_id]'");     

                    while ($row_mods_name  = mysql_fetch_assoc($query_mods_name))  { 


                           $mods[$mod_id][id]     = $row_mods_name[UserID];
                           $mods[$mod_id][name]   = $row_mods_name[UserName];


                    }

                    $mod_id = $mod_id + 1;

             }

         natsort($mods);

         $modnumbers = count($mods); 

         }

         else  {

             $mods = "";

         }

*/


         $show_last_article  = "";
         $show_last_username = ""; 
         $show_link          = "";


         $last_article   = mysql_query("SELECT * from $posts_tblname WHERE f = '$rwF[id]' ORDER by id DESC LIMIT 1");
         $last_article2  = mysql_num_rows($last_article);

         $last_user_name = "";

         if ($last_article2 > 0)  { 
 
             while ($row_article = mysql_fetch_assoc($last_article))  {  

                    $article_id      =  $row_article["id"]; 
                    $article_thread  =  $row_article["t"]; 
                    $lastuser_id     =  $row_article["user_id"]; 
                    $unixtime        =  $row_article["time"];

                    $query_lastuser = mysql_query("SELECT UserID, UserName from $user_tblname WHERE UserID = '$lastuser_id'");

                    while ($row_lastuser = mysql_fetch_assoc($query_lastuser))  {  

                           $last_user_name = $row_lastuser["UserName"]; 
                           $last_user_id   = $row_lastuser["UserID"];

                    } 

             }

             if ($last_user_name == "")  $last_user_name = "User gelöscht";

             $current_time    = date("H:i",$unixtime);
             $current_dateX   = date("d.m.Y",$unixtime);
             $current_date    = date("d.m.y",$unixtime);

         } 


         $day_date4 = $timestamp - 86400;
	 $day_date5 = date("d.m.Y",$day_date4);

         if ($current_dateX == $c_date)  { 

             $current_date = "<b>Heute</b>";

         }

         if ($current_dateX == $day_date5)  { 

             $current_date = "<i>Gestern</i>";

         } 


         $qylastth = mysql_query("SELECT threadname from $threads_tblname WHERE id = '$article_thread'");

         while ($rwlastth = mysql_fetch_assoc($qylastth))  {  

                $lastth = "$rwlastth[threadname]";

         }



          $ponures = mysql_query("SELECT COUNT( id ) AS post_numbers2 from $posts_tblname WHERE time < '$unixtime' && t = '$article_thread' LIMIT 1");
 
          $ponurow = mysql_fetch_row( $ponures );

          $post_numbers2 = $ponurow[ 0 ];

        
         $output = $post_numbers2 / $postsperpage;

         $output = floor($output); 

         $output++; 

         if ($last_article2 > 0)  { 

             if ($output == "1")  { 

                 $show_link = "index.php?t=$article_thread#$article_id"; 

             }

             else  {

                 $show_link = "index.php?t=$article_thread&page=$output#$article_id";

             }
   
         } 

         include("templates/main.php");


  } // end of while


  echo"$tp_F";


  include('templates/close_table.php');


  }  // hidecat

