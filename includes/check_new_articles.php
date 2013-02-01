<?php  

  //$add_tooold = $timestamp - 864000;     10 Tage - old
  $add_tooold = $timestamp - 172800;      // 2 Tage - new
    

  /* 10 Tage, wenn jemand einen Monat nicht online war, werden nur die neuen Posts der letzten 10 Tage eingetragen

  zudem werden Beiträge in der newposts nach 10 Tagen gelöscht */
    /*
  $tores = mysql_query("SELECT COUNT( id ) AS toold_numbers from $newposts_tblname WHERE posttime < $add_tooold LIMIT 1");

  $torow = mysql_fetch_row( $tores );

  $toold_numbers = $torow[ 0 ];
                                        */

  if ($userdata_lastonline < $add_tooold)  {

      $addnto = $add_tooold;

  }

  else  {

      $addnto = $userdata_lastonline;

  }

    /*
  if ($toold_numbers > 0)  {

      $delete_toold = "DELETE FROM $newposts_tblname WHERE posttime < '$add_tooold'";     
  
      mysql_query($delete_toold); 

  }   */
  
  if ($userdata_id != "" && $userdata_lastonline != "0")  { 
  /*
      $query_newpostszu = mysql_query("SELECT * from $posts_tblname WHERE time > '$addnto' && user_id != '$userdata_id'");

      while ($row_newposts = mysql_fetch_assoc($query_newpostszu))  {

             if ($userdata_id != $row_newposts["user_id"])  { 

                // $query_newposts  = "INSERT into $newposts_tblname (f, t, p, user_id, posttime)";
                // $query_newposts .= "VALUES ('$row_newposts[f]', '$row_newposts[t]', '$row_newposts[id]','$userdata_id', '$row_newposts[time]')";

                // $result_newposts = @mysql_query($query_newposts) OR die(mysql_error());
          
             }

      }
  */
  }

