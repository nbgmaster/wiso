<?php  

  if ($module == "")  {

      include("./templates/usercp/edit_email.php"); 

  }

  else  {

      $usercp_data = "ok";

      $query_user_pw = mysql_query("SELECT * from $user_tblname WHERE UserID = '$userdata_id'");
   
      while ($row_user_pw = mysql_fetch_assoc($query_user_pw))  { 

             $crypted_password = MD5($_POST[password]); 
 
             if ($row_user_pw["UserPass"] != $crypted_password)  {

                 $text01   = "Das Passwort stimmt nicht!";
                 $link    = "index.php?do=usercp&sec=edit_nickname";

                 $usercp_data = "wrong";

             }
 
       }

      if ($usercp_data == "ok")  {


          $query_members_free_data = mysql_query("SELECT * from $user_tblname");
   
          while ($row_members_free_data = mysql_fetch_assoc($query_members_free_data))  {

                 $email_members =  $row_members_free_data["UserMail"];

                 if ($_POST[email] == "$email_members" && $userdata_id != $row_members_free_data["UserID"])  { 

                     $text01   = "Die gewählte Emailadresse ist bereits registriert!";
                     $link     = "index.php?do=usercp&sec=edit_email";

                     $usercp_data = "wrong";

                 } 

          }

      }


      if ($usercp_data == "ok")  {

          $update_email = "UPDATE $user_tblname SET UserMail = '$_POST[email]' WHERE UserID = '$userdata_id'";     

          mysql_query($update_email) OR die(mysql_error());

          $text01   = "Email wurde geändert!";         
          $link     = "index.php?do=usercp";

      }

      include("templates/refresh.php");

  }