<?php  

  if ($module == "")  {

       include("./templates/usercp/edit_pw.php");

  }

  else  {

      $usercp_data = "ok";

      $query_user_pw = mysql_query("SELECT * from $user_tblname WHERE UserID = '$userdata_id'");
   
      while ($row_user_pw = mysql_fetch_assoc($query_user_pw))  { 

             $crypted_password = MD5($_POST[password]); 

             if ($row_user_pw["UserPass"] != $crypted_password)  {

                 $text01   = "Das alte Passwort stimmt nicht!";
                 $link     = "index.php?do=usercp&sec=edit_pw";

                 $usercp_data = "wrong";

             }

      }


      if ($usercp_data == "ok")  {

          $crypted_password2 = MD5($_POST[password2]);

          $update_pw = "UPDATE $user_tblname SET UserPass = '$crypted_password2' WHERE UserID = '$userdata_id'";     

          mysql_query($update_pw) OR die(mysql_error());

          $text01   = "Passwort wurde geändert!";         
          $link     = "index.php?do=usercp";

      }

      include("templates/refresh.php");

  }