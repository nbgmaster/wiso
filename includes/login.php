<?php 

  if (isset($submit_login_data))  {

      $check_logindata = "";

      $user_crypt_pw = MD5($_POST[login_userpw]);

      $query_members = mysql_query("SELECT UserID, UserName, UserPass, UserActive, admin from $user_tblname");

      while ($row_members = mysql_fetch_assoc($query_members))  {

             if ($row_members["UserName"] == $_POST[login_username] && $row_members["UserPass"] == $user_crypt_pw && $row_members["UserActive"] == "1")  { 

                 $session = session_id();

                 $more    = md5 (uniqid (rand()));

                 $cookie_var = "$user_crypt_pw|$row_members[UserID]|$more";

                 $query_session = "UPDATE $user_tblname SET UserSession = '$session' WHERE UserID = '$row_members[UserID]'";     

                 mysql_query($query_session) OR die(mysql_error()); 

                 if ($board_disable == "1")  { 

                     if ($row_members[admin] == "1")  {
 
                         $check_logindata = "ok";

                     }

                 }

                 if ($board_disable == "0")  {

                     $check_logindata = "ok";

                 }

                
                 if ($check_logindata == "ok")  {

                     $board_domain = "$_SERVER[SERVER_NAME]";
                     $board_direction = "$_SERVER[HTTP_REFERER]";

                     $board_direction = str_replace("http://$board_domain", "", $board_direction);
                     $board_direction = str_replace("/html/forum/", "", $board_direction);

                     //  $text01 = "<br><b>Login erfolgreich!</b><br><br>";

                     $text01 = "<br><img src=\"images/templates/$template/login_true.gif\"><br><br>";

                     $link   = "$board_direction";

                     echo"$text01";

                     if ($auto_login == "1")  {  

                         setcookie(cookie_wiwistud,$cookie_var,time()+365*24*3600);

                     }

                     else  {
 
                         setcookie(cookie_wiwistud,$cookie_var);
  
                     }

                 }

             } 

      }

      if ($check_logindata != "ok")  {  

          $refresh_time = 3;

          // $text01 = "<br><b>Login fehlgeschlagen!</b><br><br>";

          $text01 = "<br><img src=\"images/templates/$template/login_false.gif\"><br><br>";

          $link   = "index.php";

          echo"$text01";

     }

  
  }