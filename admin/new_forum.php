<?php 

  if ($module == "")  {

      include('./templates/admin/new_forum.php');

  }


  else  {

      if (isset($send_admin_data))  {

          $query_forums = mysql_query("SELECT * from $f_tblname WHERE cat = '$f_cat' ORDER by position");

          while ($row_forums = mysql_fetch_assoc($query_forums))  { 

                 $position = $row_forums["position"] + 1;

          }

          $query_new_f   = "INSERT into $f_tblname (cat, forum, description, position, status, f_read, f_write) ";
          $query_new_f  .= "VALUES ('$f_cat', '$forum', '$description','$position', '$f_status', '$f_read', '$f_write')";

          $result_new_f  = @mysql_query($query_new_f) OR die(mysql_error());

          $text01 = "Forum erstellt!";
          $link   = "index.php?do=admin&sec=edit_cat";

          include('./templates/refresh.php');

      }

  }