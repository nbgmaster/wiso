<?php  

  if ($user_id != "")  {

      $query_this_user = mysql_query("SELECT * from $user_tblname WHERE UserID = '$user_id'");
	
      $check_this_user = mysql_num_rows($query_this_user);

      $buddyfunction   = "friend";

  }

  else  {

      $query_this_user = mysql_query("SELECT * from $user_tblname WHERE UserName = '$_POST[buddyname]'");
	
      $check_this_user = mysql_num_rows($query_this_user);

      while ($row_this_user  =  mysql_fetch_assoc($query_this_user))  { 

             $user_id = "$row_this_user[UserID]";
   
      }

  }

  if ($check_this_user == "0")  {

      $text01 = "Benutzer existiert nicht! Bitte wiederhole deine Eingabe.";

      $link   = "javascript:history.back();";   

  }

  else  {   

      $query_selected_buddy = mysql_query("SELECT * from $buddylist_tblname WHERE userid = '$userdata_id' && friendid = '$user_id' && function = '$buddyfunction'");
	
      $check_selected_buddy = mysql_num_rows($query_selected_buddy); 

      if ($check_selected_buddy == "1")  {

          if ($buddyfunction == "friend")  {
 
          $text01 = "Der User befindet sich bereits in deiner Freundesliste!";

          }

          if ($buddyfunction == "ignore")  {
 
          $text01 = "Der User befindet sich bereits in deiner Ignorierliste!";

          }

          $link   = "javascript:history.back();"; 

      }

      if ($userdata_id == $user_id)  {

          if ($buddyfunction == "friend")  {
 
          $text01 = "Du kannst dich nicht in deine eigene Freundesliste eintragen!";

   }

          if ($buddyfunction == "ignore")  {
 
          $text01 = "Du kannst dich nicht in deine eigene Ignorierliste eintragen!";

          }

          $link   = "javascript:history.back();"; 

      }  

      if ($check_selected_buddy != "1" && $userdata_id != $user_id)  {

          $query_buddy  = "INSERT into $buddylist_tblname (userid, friendid, function)";
          $query_buddy .= "VALUES ('$userdata_id', '$user_id', '$buddyfunction')";

          $result_buddy = @mysql_query($query_buddy);

          if ($buddyfunction == "friend")  {
 
          $text01 = "Der User wurde zu deiner Freundesliste hinzugefügt!";
          $link  = "index.php?do=usercp&sec=buddylist";

          }

          if ($buddyfunction == "ignore")  {
 
          $text01 = "Der User wurde zu deiner Ignorierliste hinzugefügt!";
          $link  = "index.php?do=usercp&sec=ignorelist";

          }

      }

  }

  include("templates/refresh.php");
