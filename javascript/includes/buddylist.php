<?php 

  if ($del_id != "")  { 

      if ($sec == "buddylist")   {

          $this_function = "friend"; 
          $text01 = "Der Benutzer wurde aus deiner Freundesliste gelöscht!";
          $link   = "index.php?do=usercp&sec=buddylist";

      }

      if ($sec == "ignorelist")  {

          $this_function = "ignore";
          $text01 = "Der Benutzer wurde aus deiner Ignorierliste gelöscht!";
          $link   = "index.php?do=usercp&sec=ignorelist";

      }

      $delete_friend = "DELETE FROM $buddylist_tblname WHERE userid = '$userdata_id' && friendid = '$del_id' && function = '$this_function'";     

      mysql_query($delete_friend); 

      include("./templates/refresh.php");

  }

  else  { 

      include("./templates/usercp/buddylist_top.php");

      if ($sec == "buddylist")   { 

          $this_function = "friend"; 

      }

      if ($sec == "ignorelist")  { 

          $this_function = "ignore";

      }

      $query_friends = mysql_query("SELECT * from $buddylist_tblname WHERE userid = '$userdata_id' && function = '$this_function'");

      $friendnumbers = mysql_num_rows($query_friends);

      if ($friendnumbers > 0)  {
 
          $f_counter = "0";
 
          while ($row_friends = mysql_fetch_assoc($query_friends))  {

                 $query_friend = mysql_query("SELECT * from $user_tblname WHERE UserID = '$row_friends[friendid]'");

                 while ($row_friend = mysql_fetch_assoc($query_friend))  {

                 $f_array[$f_counter] = "$row_friend[UserName]";     

                 $f_counter = $f_counter + 1;
 
                 }

          }

          asort($f_array);

          foreach ($f_array as $f_sorted) {  

                   $query_f_user = mysql_query("SELECT * from $user_tblname WHERE UserName = '$f_sorted'");

                   while ($row_f_user = mysql_fetch_assoc($query_f_user))  {

                          $f_userid = "$row_f_user[UserID]";

                          $check_online_status = $timestamp - $row_f_user["last_online_time"]; 

                          if ($check_online_status < $online_time)  { 

                              $user_status = "user_online.gif";

                          }

                          else  { 

                              $user_status = "user_offline.gif";

                          }

                   } 

                   include("./templates/usercp/buddylist.php");

          }
   
          include("./templates/close_table.php");

      }

      include("./templates/usercp/buddylist_bottom.php");

  }

 