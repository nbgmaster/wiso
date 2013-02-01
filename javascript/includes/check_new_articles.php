<?php  

  $toold = $timestamp - 432000; // 5 Tage

  $query_newpoststoold = mysql_query("SELECT * from $newposts_tblname WHERE posttime < $toold");
  $toold_numbers = mysql_num_rows($query_newpoststoold);

  if ($toold_numbers > 0)  {

      $delete_toold = "DELETE FROM $newposts_tblname WHERE posttime < '$toold'";     
  
      mysql_query($delete_toold); 

  }

  if ($userdata_id != "" && $userdata_lastonline != "0")  { 

      $query_user_articles = mysql_query("SELECT * from $user_tblname WHERE UserID = '$userdata_id'");

      while ($row_user_articles = mysql_fetch_assoc($query_user_articles))  { 

             $last_online_time = $row_user_articles["last_online_time"];

      }

      $query_newpostszu = mysql_query("SELECT * from $posts_tblname WHERE time > $userdata_lastonline");

      while ($row_newposts = mysql_fetch_assoc($query_newpostszu))  {

             if ($userdata_id != $row_newposts["user_id"])  { 

                 $query_newposts  = "INSERT into $newposts_tblname (f, t, p, user_id, posttime)";
                 $query_newposts .= "VALUES ('$row_newposts[f]', '$row_newposts[t]', '$row_newposts[id]','$userdata_id', '$row_newposts[time]')";

                 $result_newposts = @mysql_query($query_newposts) OR die(mysql_error());
          
             }

      }

  }