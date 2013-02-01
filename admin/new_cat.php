<?php 

  if ($module == "")  {

      include('./templates/admin/new_cat.php');

  }


  else  {

      if (isset($send_admin_data))  {

          $query_cats = mysql_query("SELECT * from $c_tblname ORDER by position");

          while ($row_cats = mysql_fetch_assoc($query_cats))  { 

                 $position = $row_cats["position"];

          }
 
          $new_position = $position + 1;

          $query_new_cat   = "INSERT into $c_tblname (title, position) ";
          $query_new_cat  .= "VALUES ('$category', '$new_position')";

          $result_new_cat  = @mysql_query($query_new_cat) OR die(mysql_error());

          $text01 = "Kategorie erstellt!";
          $link   = "index.php?do=admin&sec=edit_cat";

          include('./templates/refresh.php');

      }

  }