<?php  

  if ($module == "delete")  {

      if ($g_id == "1" or $g_id == "2" or $g_id == "3" or $g_id == "4")  {

          $text01 = "Diese Standardgruppe kann nicht gel&ouml;scht werden!";

      }

      else  {

      $delete_group = "DELETE FROM $groups_tblname WHERE id = '$g_id'";     

         mysql_query($delete_group) OR die(mysql_error());  
   
                  $text01 = "Gruppe gel&ouml;scht!";

      }

      $link = "index.php?do=admin&sec=groups";

      include("./templates/refresh.php");

  }

  if ($module == "modify")  { 

     if (isset($send_group_data))  {

         $query_name_data = mysql_query("SELECT * from $groups_tblname WHERE groupname = '$groupname'");
         $check_this_name = mysql_num_rows($query_name_data); 

         if ($check_this_name == "1" && $actual_groupname != $groupname)  { 

             $text01   = "Der Gruppenname ist bereits vergeben!";

             $link     = "javascript:history.back();";
  
         } 

         else  {

             $sql_group = "UPDATE $groups_tblname SET groupname = '$groupname', boardaccess = '$boardaccess', searchaccess = '$searchaccess', pmaccess = '$pmaccess', memberaccess = '$memberaccess', profileaccess = '$profileaccess', readaccess = '$readaccess', postaccess = '$postaccess', pollaccess = '$pollaccess' WHERE id = '$g_id'";     

             mysql_query($sql_group) OR die(mysql_error());
 
             $text01 = "Gruppe ge&auml;ndert!";

             $link   = "index.php?do=admin&sec=groups";

         }

         include("./templates/refresh.php");

      }

  }

  if ($module == "edit")  {


      $query_group_data = mysql_query("SELECT * from $groups_tblname WHERE id = '$g_id'");

      while ($row_group_data = mysql_fetch_assoc($query_group_data))  { 

             include("./templates/admin/edit_group.php"); 

      }

  }