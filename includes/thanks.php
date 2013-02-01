<?php 

  include('../config.php');

  // Retrieve data from Query String

  $pid = $_GET['pid'];

  $pid = mysql_real_escape_string($pid);

  //build query

      $uid_poster = mysql_query("SELECT user_id from posts WHERE id = '$pid'");

             while ($r_poster = mysql_fetch_assoc($uid_poster))  {

                    $poster_uid = $r_poster[user_id];

             }

      $qy_thanks   = "INSERT into thanks (pid, uid, poster_uid) ";
      $qy_thanks  .= "VALUES ('$pid', '$userdata_id', '$poster_uid')";

      $res_thanks  = @mysql_query($qy_thanks) OR die(mysql_error());

      $uid_thanks = mysql_query("SELECT uid from thanks WHERE pid = '$pid'");

      $cou_all = mysql_num_rows($uid_thanks);

      $cou_t = 0;

       while ($r_uid = mysql_fetch_assoc($uid_thanks))  {

              $name_thanks = mysql_query("SELECT UserID, UserName from users WHERE UserID = '$r_uid[uid]'");

               while ($r_nam = mysql_fetch_assoc($name_thanks))  {

                      $prof_link  = "<a name=\"$r_nam[UserName]\" href=\"index.php?do=profile&user_id=$r_nam[UserID]\"><u>";
                      $prof_link2 = "</u></a>";

                      $queryString[] = $prof_link.$r_nam[UserName].$prof_link2;

               }

      }

      natcasesort($queryString);

      foreach ($queryString as $lookup)  {

               $cou_t++;

               $qS .= $lookup;

               if ($cou_all != $cou_t) { $qS .= ", "; }

      }

      echo $qS;

