<?php  

  if ($module == "delete")  {

      $delete_rank = "DELETE FROM $ranks_tblname WHERE id = '$r_id'";     

      mysql_query($delete_rank) OR die(mysql_error());  
   

      $text01 = "Benutzerrang gelöscht!";

      $link = "index.php?do=admin&sec=ranks";

      include("./templates/refresh.php");

  }

  if ($module == "modify")  { 

     if (isset($send_rank_data))  {

         $query_name_data = mysql_query("SELECT * from $ranks_tblname WHERE r_rankname = '$rankname'");
         $check_this_name = mysql_num_rows($query_name_data); 

         if ($check_this_name == "1" && $actual_rankname != $rankname)  { 

             $text01   = "Der Rangname ist bereits vergeben!";

             $link     = "javascript:history.back();";
  
         } 

         else  {

             $sql_rank = "UPDATE $ranks_tblname SET r_rankname = '$rankname', r_group = '$group', r_minposts = '$minposts', r_stars = '$stars' WHERE id = '$r_id'";     

             mysql_query($sql_rank) OR die(mysql_error());
 
             $text01 = "Gruppe geändert!";

             $link   = "index.php?do=admin&sec=ranks";

         }

         include("./templates/refresh.php");

      }

  }

  if ($module == "edit")  {


      $query_rank_data = mysql_query("SELECT * from $ranks_tblname WHERE id = '$r_id'");

      while ($row_rank_data = mysql_fetch_assoc($query_rank_data))  { 

             include("./templates/admin/edit_rank.php"); 

      }

  }