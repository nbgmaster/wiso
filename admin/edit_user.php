<?php 

  if ($user_id == "" && $_POST[username] == "")  {

      include("./members.php");

  }

  else  {

      if ($_POST[username] != "")  {

          $query_admin_userdata = mysql_query("SELECT * from $user_tblname WHERE UserName = '$username'");    
          $check_existing = mysql_num_rows($query_admin_userdata);

          if ($check_existing != "1")  {

              $text01 = "Der eingegebene Username existiert nicht!";
              $link   = "javascript:history.back()";

              include("./templates/refresh.php");

          }

          else  {

              while  ($row_admin_userdata  =  mysql_fetch_assoc($query_admin_userdata))  {

                      $user_id = $row_admin_userdata[UserID];

                      include("./templates/admin/edit_user.php"); 

              }

          }

      }

      if ($module == "" && $_POST[username] == "")  { 

          $query_admin_userdata = mysql_query("SELECT * from $user_tblname WHERE UserID = '$user_id'");    

          while  ($row_admin_userdata  =  mysql_fetch_assoc($query_admin_userdata))  {

                  include("./templates/admin/edit_user.php"); 

          }

      }

      if ($module != "")  {

          $admin_data = "ok";

          $query_members_free_data = mysql_query("SELECT * from $user_tblname");
   

          while ($row_members_free_data = mysql_fetch_assoc($query_members_free_data))  {

                 $nickname_members =  $row_members_free_data["UserName"];

                 if ($_POST[nickname] == "$nickname_members" && $user_id != $row_members_free_data["UserID"])  { 

                     $text01     = "Der gewählte Nickname ist bereits registriert!";
                     $link       = "index.php?do=admin&sec=edit_user&user_id=$user_id";

                     $admin_data = "wrong";

                 } 

                 $email_members =  $row_members_free_data["UserMail"];


                 if ($_POST[email] == "$email_members" && $user_id != $row_members_free_data["UserID"])  { 

                     $text01     = "Die gewählte Emailadresse ist bereits registriert!";
                     $link       = "index.php?do=admin&sec=edit_user&user_id=$user_id";

                     $admin_data = "wrong";

                 } 

          }

 
          $allowed_chars = '[^a-z0-9|*_\-\:\~\.\ \-]';    
 
          if ( eregi($allowed_chars, $_POST[nickname]) )  {

               $text01     = "Der Nickname darf keine Sonderzeichen enthalten!";         
               $link       = "index.php?do=admin&sec=edit_user&user_id=$user_id";
      
               $admin_data = "wrong"; 

          }


          if ($admin_data == "ok")  {


              if ($password != "**********")  { 

                  $password = MD5($_POST[password]);

                  $update_profile0 = "UPDATE $user_tblname SET UserPass = '$password' WHERE UserID = '$user_id'";     

                  mysql_query($update_profile0) OR die(mysql_error());
 
              }

              if ($_POST[nickname] != "")  {

                  $update_profile1 = "UPDATE $user_tblname SET UserName = '$nickname', admin = '$admin', gender = '$gender', UserMail = '$email', UserActive ='$useractive', firstname = '$firstname', lastname = '$lastname' WHERE UserID = '$user_id'";     
 
                  $update_profile2 = "UPDATE $user_tblname SET birthday = '$birthday', birthmonth = '$birthmonth', birthyear = '$birthyear' WHERE UserID = '$user_id'";     

                  $update_profile3 = "UPDATE $user_tblname SET study = '$study', hometown = '$hometown', street = '$street', telefon = '$telefon', handy = '$handy', place = '$place', homepage = '$homepage', icq = '$icq' WHERE UserID = '$user_id'";

                  $update_profile4 = "UPDATE $user_tblname SET job = '$job', hobbys = '$hobbys', misc = '$misc' WHERE UserID = '$user_id'";

                  $update_settings = "UPDATE $user_tblname SET hide_email = '$hide_email', formmailer = '$formmailer', hide_user = '$hide_user', email_pm = '$email_pm', template = '$board_style', language = '$language'  WHERE UserID = '$user_id'";

                  mysql_query($update_profile1) OR die(mysql_error());
                  mysql_query($update_profile2) OR die(mysql_error());
                  mysql_query($update_profile3) OR die(mysql_error());
                  mysql_query($update_profile4) OR die(mysql_error());
                  mysql_query($update_settings) OR die(mysql_error());

                  $text01   = "Profildaten wurden geändert!";         
                  $link     = "index.php?do=admin&sec=edit_user&user_id=$user_id";

             }

        }

        include("templates/refresh.php");

     }

  }
