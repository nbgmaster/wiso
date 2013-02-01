<?php 

  if ($module == "")  { 

      $query_userdata = mysql_query("SELECT * from $user_tblname WHERE UserID = '$userdata_id'");  
  
      while  ($row_userdata  =  mysql_fetch_assoc($query_userdata))  {

              $userdata_id                 =  $row_userdata["UserID"];             //  Data:: User ID
              $userdata_name               =  $row_userdata["UserName"];           //  Data:: User Name
              $userdata_email              =  $row_userdata["UserMail"];           //  Data:: User Email
              $userdata_session            =  $row_userdata["UserSession"];        //  Data:: User Session
              $userdata_lastonline         =  $row_userdata["last_online_time"];   //  Data:: Last online time

              $userdata_admin              =  $row_userdata["admin"];              //  Data:: User Admin

              $userdata_hide_email         =  $row_userdata["hide_email"];         //  Data:: Settings
              $userdata_formmailer         =  $row_userdata["formmailer"];         //  Data:: Settings
              $userdata_hide_user          =  $row_userdata["hide_user"];          //  Data:: Settings
              $userdata_email_pm           =  $row_userdata["email_pm"];           //  Data:: Settings
              $userdata_tpl                =  $row_userdata["template"];           //  Data:: Settings       
              $userdata_language           =  $row_userdata["language"];           //  Data:: Settings

              $userdata_gender             =  $row_userdata["gender"];             //  Data:: Profile
              $userdata_firstname          =  $row_userdata["firstname"];          //  Data:: Profile
              $userdata_lastname           =  $row_userdata["lastname"];           //  Data:: Profile
              $userdata_birthday           =  $row_userdata["birthday"];           //  Data:: Profile
              $userdata_birthmonth         =  $row_userdata["birthmonth"];         //  Data:: Profile       
              $userdata_birthyear          =  $row_userdata["birthyear"];          //  Data:: Profile

              $userdata_wisostudent        =  $row_userdata["wisostudent"];        //  Data:: Profile
              $userdata_study              =  $row_userdata["study"];              //  Data:: Profile
              $userdata_semester           =  $row_userdata["semester"];           //  Data:: Profile

              $userdata_place              =  $row_userdata["place"];              //  Data:: Profile
              $userdata_street             =  $row_userdata["street"];             //  Data:: Profile
              $userdata_hometown           =  $row_userdata["hometown"];           //  Data:: Profile
              $userdata_studivz            =  $row_userdata["studivz"];            //  Data:: Profile
              $userdata_homepage           =  $row_userdata["homepage"];           //  Data:: Profile
              $userdata_telefon            =  $row_userdata["telefon"];            //  Data:: Profile
              $userdata_handy              =  $row_userdata["handy"];              //  Data:: Profile
              $userdata_icq                =  $row_userdata["icq"];                //  Data:: Profile
              $userdata_job                =  $row_userdata["job"];                //  Data:: Profile
              $userdata_hobbys             =  $row_userdata["hobbys"];             //  Data:: Profile
              $userdata_misc               =  $row_userdata["misc"];               //  Data:: Profile

 
              $userdata_signature          =  $row_userdata["signature"];          //  Data:: Signature
              $userdata_avatar             =  $row_userdata["avatar"];             //  Data:: Avatar

              $userdata_status             =  $row_userdata["UserActive"];         //  Data:: User Status

            //  $userdata_telefon =  htmlspecialchars($userdata_telefon);

      }

      include("./templates/usercp/edit_profile.php");

  }

  else  {

  $wrong_par = 0;

  $str_firstname = str_replace(" ", "", $_POST[firstname]);

  $len_firstname = strlen($str_firstname);

  $str_lastname = str_replace(" ", "", $_POST[lastname]);

  $len_lastname = strlen($str_lastname);

  if ($len_firstname < 3)  {  $wrong_par = 1; $text01 = "Vorname ungültig!"; }
  if ($len_lastname < 3)  {  $wrong_par = 1; $text01 = "Nachname ungültig!"; }

  if ($wrong_par == 0)  { 

      $_POST[firstname] = str_replace("<", "&lt;", $_POST[firstname]);
      $_POST[firstname] = str_replace(">", "&gt;", $_POST[firstname]);
      $_POST[lastname] = str_replace("<", "&lt;", $_POST[lastname]);
      $_POST[lastname] = str_replace(">", "&gt;", $_POST[lastname]);
      $_POST[studivz] = str_replace("<", "&lt;", $_POST[studivz]);
      $_POST[studivz] = str_replace(">", "&gt;", $_POST[studivz]); 

      $_POST[studivz] = str_replace("'", "&acute;",$_POST[studivz]);
      $_POST[studivz] = str_replace("(", "&#40;", $_POST[studivz]);

      $_POST[hometown] = str_replace("<", "&lt;", $_POST[hometown]);
      $_POST[hometown] = str_replace(">", "&gt;", $_POST[hometown]);
      $_POST[place] = str_replace("<", "&lt;", $_POST[place]);
      $_POST[place] = str_replace(">", "&gt;", $_POST[place]);
      $_POST[street] = str_replace("<", "&lt;", $_POST[street]);
      $_POST[street] = str_replace(">", "&gt;", $_POST[street]);
      $_POST[telefon] = str_replace("<", "&lt;", $_POST[telefon]);
      $_POST[telefon] = str_replace(">", "&gt;", $_POST[telefon]);
      $_POST[handy] = str_replace("<", "&lt;", $_POST[handy]);
      $_POST[handy] = str_replace(">", "&gt;", $_POST[handy]);
      $_POST[homepage] = str_replace("<", "&lt;", $_POST[homepage]);
      $_POST[homepage] = str_replace(">", "&gt;", $_POST[homepage]);

      $_POST[homepage] = str_replace("'", "&acute;",$_POST[homepage]);
      $_POST[homepage] = str_replace("(", "&#40;", $_POST[homepage]);

      $_POST[icq] = str_replace("<", "&lt;", $_POST[icq]);
      $_POST[icq] = str_replace(">", "&gt;", $_POST[icq]);
      $_POST[job] = str_replace("<", "&lt;", $_POST[job]);
      $_POST[job] = str_replace(">", "&gt;", $_POST[job]);
      $_POST[hobbys] = str_replace("<", "&lt;", $_POST[hobbys]);
      $_POST[hobbys] = str_replace(">", "&gt;", $_POST[hobbys]);

      if ($_POST[wisostudent] == 1) $study = $_POST[study];
      if ($_POST[wisostudent] == 2) $study = $_POST[mstudy];

      $update_profile1 = "UPDATE $user_tblname SET gender = '$_POST[gender]', firstname = '$_POST[firstname]', lastname = '$_POST[lastname]' WHERE UserID = ".$userdata_id."";     

      $update_profile2 = "UPDATE $user_tblname SET hometown = '$_POST[hometown]', birthday = '$_POST[birthday]', birthmonth = '$_POST[birthmonth]', birthyear = '$_POST[birthyear]' WHERE UserID = ".$userdata_id."";

      $update_profile3 = "UPDATE $user_tblname SET telefon = '$_POST[telefon]', handy = '$_POST[handy]', place = '$_POST[place]', street = '$_POST[street]', studivz = '$_POST[studivz]', homepage = '$_POST[homepage]', icq = '$_POST[icq]' WHERE UserID = ".$userdata_id."";     

      $update_profile4 = "UPDATE $user_tblname SET job = '$_POST[job]', hobbys = '$_POST[hobbys]', misc = '$_POST[misc]' WHERE UserID = ".$userdata_id."";     
  
      $update_profile5 = "UPDATE $user_tblname SET wisostudent = '$_POST[wisostudent]', study = '$study', semester = '$_POST[semester]' WHERE UserID = ".$userdata_id."";     
  

      mysql_query($update_profile1) OR die(mysql_error());
      mysql_query($update_profile2) OR die(mysql_error());
      mysql_query($update_profile3) OR die(mysql_error());
      mysql_query($update_profile4) OR die(mysql_error());
      mysql_query($update_profile5) OR die(mysql_error());


      $text01   = "Profildaten wurden geändert!";  

  }
    
  $link = "index.php?do=usercp&sec=edit_profile";

     
  include("templates/refresh.php");


  }
