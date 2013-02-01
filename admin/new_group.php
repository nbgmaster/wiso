<?php      

  if (isset($send_group_data))  { 

      $query_name_data = mysql_query("SELECT * from $groups_tblname WHERE groupname = '$groupname'");
      $check_this_name = mysql_num_rows($query_name_data);

      if ($check_this_name == "1")  { 

          $text01   = "Der Gruppenname ist bereits vergeben!";

          $link     = "index.php?do=admin&sec=groups&module=new"; 
 
      } 

      else  {

          $query_group  = "INSERT into $groups_tblname (groupname, boardaccess, searchaccess, pmaccess, memberaccess, profileaccess, readaccess, postaccess)";

          $query_group .= "VALUES ('$groupname', '$boardaccess', '$searchaccess','$pmaccess', '$memberaccess', '$profileaccess', '$readaccess', '$postaccess')";
  
          $result_group = @mysql_query($query_group) OR die(mysql_error());
  
          $text01 = "Gruppe erstellt!";

          $link   = "index.php?do=admin&sec=groups";  

      }  

      include("./templates/refresh.php");

  }

  else  {

       include("./templates/admin/new_group.php");

  }