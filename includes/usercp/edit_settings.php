<?php  

  if ($module == "")  {

      $query_userdata2 = mysql_query("SELECT formmailer, hide_user, email_pm, template, language from $user_tblname WHERE UserID = '$auto_logon_id' && UserPass = '$auto_logon_session'");  
  
      while  ($row_userdata2  =  mysql_fetch_assoc($query_userdata2))  {

              $userdata_formmailer         =  $row_userdata2["formmailer"];         //  Data:: Settings
              $userdata_hide_user          =  $row_userdata2["hide_user"];          //  Data:: Settings
              $userdata_email_pm           =  $row_userdata2["email_pm"];           //  Data:: Settings
              $userdata_tpl                =  $row_userdata2["template"];           //  Data:: Settings       
              $userdata_language           =  $row_userdata2["language"];           //  Data:: Settings

      }

      include("./templates/usercp/edit_settings.php");

  }

  else  {

      if ($_POST[hide_user] != "")  {

          $update_settings = "UPDATE $user_tblname SET formmailer = '$formmailer', hide_user = '$hide_user', email_pm = '$email_pm', template = '$board_style', language = '$language'  WHERE UserID = ".$userdata_id."";     

          mysql_query($update_settings) OR die(mysql_error());

          $text01   = "Einstellungen wurden geändert!";         
          $link     = "index.php?do=usercp";

          include("templates/refresh.php");

     }

  }