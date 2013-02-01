<script type="text/javascript" src="javascript/thanks.js"></script>

<?php 

  $newpostsid[] = "";

  $granted_write = "0";

  $granted_access = "0";

  // Hits Reload Access

  include("includes/thread_hits_reload.php");


  $query_this_f = mysql_query("SELECT id, f, hits, status from $threads_tblname WHERE id = '$t' LIMIT 1");
        
  while ($row_this_f = mysql_fetch_assoc($query_this_f))  { 

         if ($reload_access == "yes")  { 

             $thread_hits     = $row_this_f["hits"]; 

             $new_thread_hits = $thread_hits + 1;

             $sql_thread_hits = "UPDATE $threads_tblname SET hits = '$new_thread_hits' WHERE id = '$t'";     

             mysql_query($sql_thread_hits) OR die(mysql_error());  

         }

         $f = "$row_this_f[f]";
         
         $t = "$row_this_f[id]";

         $current_status = $row_this_f["status"];

  }

  $chgrres = mysql_query("SELECT COUNT( id ) AS check_rowsgr from $threads_tblname WHERE id = '$t' LIMIT 1");

  $chgrrow = mysql_fetch_row( $chgrres );

  $check_rowsgr = $chgrrow[ 0 ];


  $check_write   = mysql_query("SELECT f_write, f_read from $f_tblname WHERE id = '$f'");

  while ($row_write = mysql_fetch_assoc($check_write))  { 

// Darf User Beiträge lesen??


       if ($row_write[f_read] == "all")  {

             $granted_access = "1"; 

         }

         if ($row_write[f_read] == "reg")  {

             if ($userdata_id != "")  { 

                 $granted_access = "1";

             }  

         }

         if ($row_write[f_read] == "mod")  {

             $chmo2res = mysql_query("SELECT COUNT( id ) AS mod_status2 from $moderator_tblname WHERE user_id = '$userdata_id' && f_id = '$f' LIMIT 1");
 
             $chmo2row = mysql_fetch_row( $chmo2res );

             $mod_status2 = $chmo2row[ 0 ];


             if ($mod_status2 > 0)  {

                 $granted_access = "1";

             }  

         }

         if ($row_write[f_read] == "admin")  {

              if ($userdata_admin == "1")  {

                 $granted_access = "1";

             } 

        }       



// Darf User Beiträge schreiben??


         if ($row_write[f_write] == "all")  {

             $granted_write = "1"; 

         }


         if ($row_write[f_write] == "reg")  {

             if ($userdata_id != "")  { 

                 $granted_write = "1";

             }  

         }

         if ($row_write[f_write] == "mod")  {

             $chmores = mysql_query("SELECT COUNT( id ) AS mod_status from $moderator_tblname WHERE user_id = '$userdata_id' && f_id = '$f' LIMIT 1");
 
             $chmorow = mysql_fetch_row( $chmores );

             $mod_status = $chmorow[ 0 ];

             if ($mod_status > 0)  {

                 $granted_write = "1";

             }  

         }

         if ($row_write[f_write] == "admin")  {

              if ($userdata_admin == "1")  {

                 $granted_write = "1";

             } 

        }      
      
  } 


  if ($_POST[adminoptions] == "closetopic")  {

      if ($current_status == "1")  { $new_status = "0";$f_status = "0"; }
      if ($current_status == "0")  { $new_status = "1";$f_status = "1"; }


      $update_t_option = "UPDATE $threads_tblname SET status = '$new_status' WHERE id = '$t'";     

      mysql_query($update_t_option) OR die(mysql_error());  

  }


  if ($_POST[adminoptions] == "tickertopic")  { 

      $nptick = mysql_query("SELECT COUNT( id ) AS ticker from $newsticker_tblname WHERE t = '$t' LIMIT 1");
 
      $tickrow = mysql_fetch_row( $nptick );

      $ticker = $tickrow[ 0 ]; 

      if ($ticker > 0)  { 

          $del_ntick = "DELETE FROM $newsticker_tblname WHERE t = '$t'";     

          mysql_query($del_ntick); 

      }

      else  {

          $check_net = mysql_query("SELECT cat, position from $f_tblname WHERE id = '$f'");

          while ($row_net = mysql_fetch_assoc($check_net))  {

                 $c_net      = $row_net[cat];
                 $c_position = $row_net[position];

          } 

          $qy_ntick   = "INSERT into $newsticker_tblname (t, f, c, position) ";
          $qy_ntick  .= "VALUES ('$t', '$f', '$c_net', '$c_position')";

          $res_ntick  = @mysql_query($qy_ntick) OR die(mysql_error());

      }

  }




  if ($granted_access == "1")  {


  if ($t != "")  {

  // Check New Posts

  /*
  $npres = mysql_query("SELECT COUNT( id ) AS newposts from $newposts_tblname WHERE t = '$t' && user_id = '$userdata_id' LIMIT 1");
 
  $nprow = mysql_fetch_row( $npres );

  
  $newposts = $nprow[ 0 ];


  $check_newposts = mysql_query("SELECT p from $newposts_tblname WHERE t = '$t' && user_id = '$userdata_id'");


  if ($newposts != "0" )  { 

      $countnp = "0";

      while ($row_newposts = mysql_fetch_assoc($check_newposts))  { 

             $newpostsid[$countnp] = $row_newposts[p];

             $countnp = $countnp + 1;

      } 

      natsort ($newpostsid);

      $sql_newposts = "DELETE FROM $newposts_tblname WHERE t = '$t' && user_id = '$userdata_id'"; 
 
      mysql_query($sql_newposts) OR die(mysql_error());

      $_SESSION["newpostsid"] = $newpostsid;

  }
  
  */

  }

  $_SESSION["t-read-id"] = $t;
  setcookie("newP-time", $timestamp, time()+60*60*24*3);  
          
  // Load:: Main Data 

  include("includes/show_posts.php");

  if ($do != "post" && $do != "reply")  {

  // Load:: Navigation Bottom 


  if ($do != "search" && $do != "reply" && $do != "inbox" && $do != "outbox" && $postnumbers > 1)  {

    $img_name = "hoverimg4";
    $img_name_answer = "hoverimg9";

    echo"<span style=\"font-size:2px\">&nbsp;</span>";  include("includes/navi_bottom.php");

  }

  if ($t != "")  {  

      if ($userdata_admin == "1" or $mod_user_status == "1")  {


          $chnewst = mysql_query("SELECT COUNT( id ) AS newst from $newsticker_tblname WHERE t = '$t' LIMIT 1");

          $rwnewst = mysql_fetch_row( $chnewst );

          $newst = $rwnewst[ 0 ];

          if ($newst > 0)  $newstStr = "AUS";
          else  $newstStr = "AN";    

          include("templates/footer_options.php");

      }

echo"<br>";

      include("templates/footer_goto.php");

echo"<br>";

  }


}



  }


  else  {

      include("templates/no_permission.php");

  }
