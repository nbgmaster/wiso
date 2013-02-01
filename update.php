<?php

include("config.php");

  /*
$qyB = mysql_query("SELECT UserID from $user_tblname");

while ($rwB  =  mysql_fetch_assoc($qyB))  {


  $qy = mysql_query("SELECT f from $posts_tblname WHERE user_id = '$rwB[UserID]' ");


  $count = 0;

  while ($rw  =  mysql_fetch_assoc($qy))  {

      $f = $rw[f]; 

    if ($f != 10)  $count++;

  }



  $update_at  = "UPDATE $user_tblname Set postnumbers = '$count' WHERE UserID = '$rwB[UserID]'";
  $sql_at     = mysql_query($update_at);


}   */


/* MODERATOREN RECHTE VERGEBEN */

  $qy = mysql_query("SELECT id from forums");


  while ($rw  =  mysql_fetch_assoc($qy))  {


      $query_out_box   = "INSERT into moderators (user_id, f_id) ";
      $query_out_box  .= "VALUES ('5347', '$rw[id]')";

      $result_out_box  = @mysql_query($query_out_box) OR die(mysql_error());


  }

  /***********************************/

  /* Erh&ouml;hung der Semesterzahl

     $qy = mysql_query("SELECT UserID, semester from users");


  while ($rw  =  mysql_fetch_assoc($qy))  {

  $sem = $rw[semester];
 $sem++;

 if ($sem > 4) $sem = 4;

    $update_at  = "UPDATE users Set semester = '$sem' WHERE UserID = '$rw[UserID]'";
  $sql_at     = mysql_query($update_at);


  }

  *************************************/


  /* Recht II Ergebnisse 

  $qy = mysql_query("SELECT note from note");

  $note = 0;
  $count = 0;

  while ($rw  =  mysql_fetch_assoc($qy))  {

        $note = $note + $rw[note];
        $count++;

  }

  $schnitt = $note / $count;
  $schnitt = round($schnitt,2);

  $qy2 = mysql_query("SELECT note from note WHERE note = '4,3' or note = '4,7' or note = '5,0'");
  $nb = mysql_num_rows($qy2);

  $nb = $nb / $count;
  $nb = round($nb,2) * 100;

  echo"Schnitt: $schnitt";
  echo"<br>";
  echo"Durchfallquote: $nb %";
  
  */
