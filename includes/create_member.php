<?php

  if (isset($send_reg_data) && $_Sre_nickname != "")  {

      $wrong_par = 0;


      $query_members_free_data = mysql_query("SELECT UserName, UserMail from $user_tblname");
   
      while ($row_members_free_data = mysql_fetch_assoc($query_members_free_data))  {

             $nickname_members =  $row_members_free_data["UserName"];

             $email_members    =  $row_members_free_data["UserMail"];

             //   $id123 =           $row_members_free_data["UserID"];
                           
             if ($_Sre_nickname == "$nickname_members" or $_Sre__Sre_email == "$email_members")  { 
            // echo "$_Sre_nickname == $nickname_members or $_Sre__Sre_email == $email_members | id: $id123";
                 $text01   = "Der gew�hlte Nickname oder die gew�hlte Emailadresse ist bereits registriert!";

                 $wrong_par = 1;
         
             } 


      } 


      $str_nickname = str_replace(" ", "", $_Sre_nickname);

      $len_nickname = strlen($str_nickname);

      $str_firstname = str_replace(" ", "", $_Sre_firstname);

      $len_firstname = strlen($str_firstname);

      $str_lastname = str_replace(" ", "", $_Sre_lastname);

      $len_lastname = strlen($str_lastname);



      if ($len_nickname < 3)   {  $wrong_par = 1;  $text01 = "Nickname ung�ltig!"; }
      if ($len_firstname < 3)  {  $wrong_par = 1;  $text01 = "Vorname ung�ltig!";  }
      if ($len_lastname < 3)   {  $wrong_par = 1;  $text01 = "Nachname ung�ltig!"; }


      if ($wrong_par == 0)  {
      	
		  $_Sre_nickname = trim($_Sre_nickname); 
		  $_Sre_email = trim($_Sre_email); 

          $_Sre_nickname = str_replace("<", "&lt;", $_Sre_nickname);
          $_Sre_nickname = str_replace(">", "&gt;", $_Sre_nickname);
          $_Sre_email = str_replace("<", "&lt;", $_Sre_email);
          $_Sre_email = str_replace(">", "&gt;", $_Sre_email);
          $_Sre_firstname = str_replace("<", "&lt;", $_Sre_firstname);
          $_Sre_firstname = str_replace(">", "&gt;", $_Sre_firstname);
          $_Sre_lastname = str_replace("<", "&lt;", $_Sre_lastname);
          $_Sre_lastname = str_replace(">", "&gt;", $_Sre_lastname);

          $_Sre_studivz = str_replace("<", "&lt;", $_Sre_studivz);
          $_Sre_studivz = str_replace(">", "&gt;", $_Sre_studivz);
          $_Sre_hometown = str_replace("<", "&lt;", $_Sre_hometown);
          $_Sre_hometown = str_replace(">", "&gt;", $_Sre_hometown);
          $_Sre_place = str_replace("<", "&lt;", $_Sre_place);
          $_Sre_place = str_replace(">", "&gt;", $_Sre_place);
          $_Sre_street = str_replace("<", "&lt;", $_Sre_street);
          $_Sre_street = str_replace(">", "&gt;", $_Sre_street);
          $_Sre_telefon = str_replace("<", "&lt;", $_Sre_telefon);
          $_Sre_telefon = str_replace(">", "&gt;", $_Sre_telefon);
          $_Sre_handy = str_replace("<", "&lt;", $_Sre_handy);
          $_Sre_handy = str_replace(">", "&gt;", $_Sre_handy);
          $_Sre_homepage = str_replace("<", "&lt;", $_Sre_homepage);
          $_Sre_homepage = str_replace(">", "&gt;", $_Sre_homepage);
          $_Sre_icq = str_replace("<", "&lt;", $_Sre_icq);
          $_Sre_icq = str_replace(">", "&gt;", $_Sre_icq);
       
          $_Sre_job = str_replace("<", "&lt;", $_Sre_job);
          $_Sre_job = str_replace(">", "&gt;", $_Sre_job);
          $_Sre_hobbys = str_replace("<", "&lt;", $_Sre_hobbys);
          $_Sre_hobbys = str_replace(">", "&gt;", $_Sre_hobbys);

          if ($_Sre_wisostudent == 1) $study = $_Sre_study;
          if ($_Sre_wisostudent == 2) $study = $_Sre_mstudy;

          $crypt_password  = MD5($_Sre_password); 

          $query_register  = "INSERT INTO $user_tblname (UserName, UserPass, UserMail, UserRegdate, UserIP, last_online_time, postnumbers, gender, firstname, lastname, birthday, birthmonth, birthyear, place, homepage, studivz, icq, job, hobbys, formmailer, hide_user, email_pm, template, language, wisostudent, study, semester, hometown, street, telefon, handy, updateProfile, award, view_shownewposts, sem1_alert)";

          $query_register .= "VALUES ('$_Sre_nickname', '$crypt_password', '$_Sre_email', '$timestamp', '$userdata_ip', '', '0', '$_Sre_gender', '$_Sre_firstname', '$_Sre_lastname', '$_Sre_birthday', '$_Sre_birthmonth', '$_Sre_birthyear', '$_Sre_place', '$_Sre_homepage', '$_Sre_studivz', '$_Sre_icq', '$_Sre_job', '$_Sre_hobbys', '$_Sre_formmailer', '$_Sre_hide_user', '$_Sre_email_pm', '$_Sre_board_style', 'german', '$_Sre_wisostudent', '$study', '$_Sre_semester', '$_Sre_hometown', '$_Sre_street', '$_Sre_telefon', '$_Sre_handy', '1', '1', '1', '500')";

          $result          = @mysql_query($query_register) OR die(mysql_error());


          $query_newest_reg_id      = mysql_query("SELECT UserID from $user_tblname ORDER by UserID DESC LIMIT 1");
   
          while ($row_newest_reg_id = mysql_fetch_assoc($query_newest_reg_id))  {

          $newest_reg_id    =  $row_newest_reg_id["UserID"];       

          }
 

          if ($m_account_activation == "no")  {

              $update_register  = "UPDATE $user_tblname SET UserActive = '1', activation_code = '' WHERE UserID = '$newest_reg_id'"; 


          }

          else  {

              $act_code = md5 (uniqid (rand()));

              $update_register  = "UPDATE $user_tblname SET UserActive = '0', activation_code = '$act_code' WHERE UserID = '$newest_reg_id'"; 


          }

          mysql_query($update_register) OR die(mysql_error());


          $qy_Nview   = "INSERT into $view_tblname (c, f, user) ";
          $qy_Nview  .= "VALUES ('$_Sre_cDB', '$_Sre_fDB', '$newest_reg_id')";

          $result_Nview  = @mysql_query($qy_Nview) OR die(mysql_error());

          include("templates/create_member_true.php");

          session_unset();

          header ("Location:index.php?do=reg_success");

      }

      else  {

          $refresh_time = "3";

          $link = "index.php?do=register";

          include("templates/refresh.php");
        
      }

  }

  else  {

       echo"<b>CHEATER!!</b>";

  }

