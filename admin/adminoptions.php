<?php 

  if ($_POST[adminoptions] == "movetopic")  { 

      if (isset($send_moveto_data) && $_POST[move_to] != "")  { 

          $query_catC   = mysql_query("SELECT * from $f_tblname WHERE id = '$move_to'");

          while ($row_catC = mysql_fetch_assoc($query_catC))  {  

                 $moveC = $row_catC[cat];

          }

          $query_moveto = "UPDATE $threads_tblname SET f = '$move_to' WHERE id = '$t'";     

          mysql_query($query_moveto) OR die(mysql_error());

          $query_moveto2 = "UPDATE $posts_tblname SET f = '$move_to' WHERE t = '$t'";     

          mysql_query($query_moveto2) OR die(mysql_error());

          $query_moveto3 = "UPDATE $newposts_tblname SET f = '$move_to' WHERE t = '$t'";     

          mysql_query($query_moveto3) OR die(mysql_error());

          $query_moveto4 = "UPDATE $threads_tblname SET c = '$moveC' WHERE id = '$t'";     

          mysql_query($query_moveto4) OR die(mysql_error());

          $text01 = "Thema wurde verschoben.";

          $link   = "index.php?t=$t";

          include("./templates/refresh.php");

      }

      else  {

          include("./templates/admin/movetopic.php");  

      }
 
  }

  if ($_POST[adminoptions] == "edittopic")  {

      if (isset($send_edit_data))  {

          $query_edit = "UPDATE $threads_tblname SET threadname = '$topicname', announce = '$announce' WHERE id = '$t'";     

          mysql_query($query_edit) OR die(mysql_error());

          $text01 = "Thema wurde bearbeitet.";

          $link   = "index.php?t=$t";

          include("./templates/refresh.php");

      }

      else  {

          $query_topicname = mysql_query("SELECT * from $threads_tblname WHERE id = '$t'");

          while ($row_topicname = mysql_fetch_assoc($query_topicname))  {

                 $topicname = "$row_topicname[threadname]";
                 $topicannounce  = "$row_topicname[announce]";

          }

          include("./templates/admin/edittopic.php");

      }  

  } 

  if ($_POST[adminoptions] == "deletetopic")  {


          if ($send_del_data == "Ja")  {

              include("./includes/delete.php");

              $link = "index.php?f=$f_tzut";

          }

          else  { 
  
              $text01 = "Dieses Thema wirklich löschen?";
   
              $link = "javascript:history.back();";
 
              include("templates/delete.php");

          }

      

  }
