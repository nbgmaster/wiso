<?php 

  $query_post_permissions = mysql_query("SELECT * from $posts_tblname WHERE id = '$p_id'");  
  
  while  ($row_post_permissions  =  mysql_fetch_assoc($query_post_permissions))  { 

          $f_tzut        = $row_post_permissions["f"];

  }   

  $query_threads_permissions = mysql_query("SELECT * from $threads_tblname WHERE id = '$t'");  
  
  while  ($row_threads_permissions  =  mysql_fetch_assoc($query_threads_permissions))  { 

          $f_tzut   = $row_threads_permissions["f"];

  }   

  $query_mod = mysql_query("SELECT * from $moderator_tblname WHERE user_id = '$userdata_id' && f_id = '$f_tzut'");  
  $mod_user_status = mysql_num_rows($query_mod);     


  if ($userdata_admin == "1" or $mod_user_status == "1")  {


      $query_topic = mysql_query("SELECT * from $posts_tblname WHERE id = '$p_id' ORDER by id");

      while ($row_topic = mysql_fetch_assoc($query_topic))  { 

             $t = $row_topic["t"];

      }
   
      $query_thread = mysql_query("SELECT * from $posts_tblname WHERE t = '$t' ORDER by id");

      while ($row_thread = mysql_fetch_assoc($query_thread))  { 

             $f = $row_thread["f"];

      } 


      if (!isset($send_del_data))  {

      $query_check_id = mysql_query("SELECT * from $posts_tblname WHERE t = '$t' && id < '$p_id' ORDER by id");

      $postnumbers    = mysql_num_rows($query_check_id);

      $sidenumbers    = $postnumbers / $postsperpage;

      if ($sidenumbers < 1)  { 

          $link = "index.php?t=$t";
 
      }

      else  {

          for ($count = 1;$count <= 10000;$count++)  {

               if ($sidenumbers > $count)  { 

                   $page = $count + 1;

               }

          }

          $link   = "index.php?t=$t&page=$page#$p_id";

      }

      $text01 ="Diesen Beitrag wirklich l&ouml;schen?";
 
      include("templates/delete.php");

      }

      if (isset($send_del_data))  { 
      
          $check_thread = mysql_num_rows($query_thread);

          if ($send_del_data == "Ja")  { 

              if ($p_id == "" or $check_thread == "1")  { 

                  $delete_thread = "DELETE FROM $threads_tblname WHERE id = '$t'";     

                  mysql_query($delete_thread); 

                  $del_thread = "1";

                  $query_whichUser = mysql_query("SELECT * from $posts_tblname WHERE t = '$t'");
 
                  while ($row_whichUser = mysql_fetch_assoc($query_whichUser))  {


                         $delete_newpost = "DELETE FROM $newposts_tblname WHERE p = '$row_whichUser[id]'";     

                         mysql_query($delete_newpost); 


                         $whichUser = $row_whichUser[user_id];

                         $query_GetThisUser = mysql_query("SELECT * from $user_tblname WHERE UserID = '$whichUser'");
 
                         while ($row_ThisUser = mysql_fetch_assoc($query_GetThisUser))  {

                                $actual_postnumbers = $row_ThisUser[postnumbers];

                         }

                         $new_postnumbers = $actual_postnumbers - 1;

                         $update_whichUser = "UPDATE $user_tblname SET postnumbers = '$new_postnumbers' WHERE UserID = '$whichUser'";     
 
                         mysql_query($update_whichUser) OR die(mysql_error());


                         $delete_post = "DELETE FROM $posts_tblname WHERE id = '$row_whichUser[id]'";     
  
                         mysql_query($delete_post);


                  }

              } 

              else  { 

                  $delete_newpost = "DELETE FROM $newposts_tblname WHERE p = '$p_id'";     

                  mysql_query($delete_newpost); 


                  $delete_post = "DELETE FROM $posts_tblname WHERE id = '$p_id'";     
  
                  mysql_query($delete_post);  


                  $query_whichUser = mysql_query("SELECT * from $posts_tblname WHERE id = '$p_id'");
 
                  while ($row_whichUser = mysql_fetch_assoc($query_whichUser))  {

                         $whichUser = $row_whichUser[user_id];

                  }
  

                  $query_GetThisUser = mysql_query("SELECT * from $user_tblname WHERE UserID = '$whichUser'");
 
                  while ($row_ThisUser = mysql_fetch_assoc($query_GetThisUser))  {

                         $actual_postnumbers = $row_ThisUser[postnumbers];

                  }

                  $new_postnumbers = $actual_postnumbers - 1;

                  $update_whichUser = "UPDATE $user_tblname SET postnumbers = '$new_postnumbers' WHERE UserID = '$whichUser'";     

                  mysql_query($update_whichUser) OR die(mysql_error()); 

              }

              $query_check_id = mysql_query("SELECT * from $posts_tblname WHERE t = '$t' && id < '$p_id' ORDER by id");

          }

 
          $postnumbers    = mysql_num_rows($query_check_id);

          $sidenumbers    = $postnumbers / $postsperpage;

          if ($del_thread == "1")  {

              $link   = "index.php?f=$f";

          }

          else  {

              if ($sidenumbers < 1)  { 

                  $link = "index.php?t=$t";
 
              }

              else  {

                  for ($count = 1;$count <= 10000;$count++)  {

                       if ($sidenumbers > $count)  { 

                           $page = $count + 1;

                       }

                  }

                  $n_id = $p_id - 1;

                  $link   = "index.php?t=$t&page=$page#$n_id";

              }

          }

          if ($del_thread == "1")  {

          $text01 = "Thema wurde gel&ouml;scht!";

          }

          else  {

          $text01 = "Beitrag wurde gel&ouml;scht!";

          }

          include("templates/refresh.php");

      }

  }

  else  { 

      include("templates/no_permission.php");

  }