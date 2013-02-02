<?php 

  $query_double_vote = mysql_query("SELECT * from $votes_tblname WHERE user_id = '$userdata_id' && poll_id = '$poll_id'");
	
  $check_double_vote = mysql_num_rows($query_double_vote); 

  if ($p_pollaccess == "0")  {

      $text01       = "Du darfst nicht an der Umfrage teilnehmen!";

  }

  else  {

      if ($check_double_vote != "1")  {

          if ($answer_number != "")  {

              $query_votes  = "INSERT into $votes_tblname (user_id, poll_id, answer_number) ";
 
              $query_votes .= "VALUES ('$userdata_id', '$poll_id','$answer_number')";
    
              $result_votes = @mysql_query($query_votes) OR die(mysql_error());

              $text01       = "Deine Stimme wurde gez&auml;hlt!";

          }

          else  {

              $text01       = "Du hast keine Antwort ausgew&auml;hlt!";

          }


      }

      else  {

          $text01       = "Du hast bereits f&uuml;r diese Umfrage abgestimmt!";

      }

  }

  $link = "index.php?t=$t";

  include("./templates/refresh.php");