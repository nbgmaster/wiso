<?php  

  if ($module == "")  {

      include("./templates/usercp/edit_settings.php");

  }

  else  {

      if ($_POST[hide_email] != "")  {

          $update_settings = "UPDATE $user_tblname SET hide_email = '$hide_email', formmailer = '$formmailer', hide_user = '$hide_user', email_pm = '$email_pm', template = '$board_style', language = '$language'  WHERE UserID = ".$userdata_id."";     

          mysql_query($update_settings) OR die(mysql_error());

          $text01   = "Einstellungen wurden geändert!";         
          $link     = "index.php?do=usercp";

          include("templates/refresh.php");

     }

  }