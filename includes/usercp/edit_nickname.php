<?php  

  if ($module == "")  { 

      include("./templates/usercp/edit_nickname.php");

  }

  else  {

      $usercp_data = "ok";

      $query_user_pw = mysql_query("SELECT * from $user_tblname WHERE UserID = '$userdata_id'");
   
      while ($row_user_pw = mysql_fetch_assoc($query_user_pw))  { 

             $crypted_password = MD5($_POST[password]); 

             if ($row_user_pw["UserPass"] != $crypted_password)  {

                 $text01   = "Das Passwort stimmt nicht!";
                 $link     = "index.php?do=usercp&sec=edit_nickname";

                 $usercp_data = "wrong";

             }

      }


      if ($usercp_data == "ok")  {

          $query_members_free_data = mysql_query("SELECT * from $user_tblname");
   
          while($row_members_free_data = mysql_fetch_assoc($query_members_free_data))  {

                $nickname_members =  $row_members_free_data["UserName"];

                if ($_POST[nickname] == "$nickname_members" && $userdata_id != $row_members_free_data["UserID"])  { 

                    $text01   = "Der gewählte Nickname ist bereits registriert!";
                    $link     = "index.php?do=usercp&sec=edit_nickname";

                    $usercp_data = "wrong";

                } 

          }

      }


      $allowed_chars = '[^a-z0-9|*_\-\:\~\.\ ]';    
 
      if ( eregi($allowed_chars, $_POST[nickname]) )  {

          $text01   = "Der Nickname darf keine Sonderzeichen enthalten!";         
          $link     = "index.php?do=usercp&sec=edit_nickname";
      
          $usercp_data = "wrong"; 

      }


      if ($usercp_data == "ok")  {

          $update_nickname = "UPDATE $user_tblname SET UserName = '$_POST[nickname]' WHERE UserID = '$userdata_id'";     
 
          mysql_query($update_nickname) OR die(mysql_error());

          $text01   = "Nickname wurde geändert!";         
          $link     = "index.php?do=usercp";

      }

      include("templates/refresh.php");
  }