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
              $userdata_study              =  $row_userdata["study"];              //  Data:: Profile
              $userdata_place              =  $row_userdata["place"];              //  Data:: Profile
              $userdata_street             =  $row_userdata["street"];             //  Data:: Profile
              $userdata_hometown           =  $row_userdata["hometown"];           //  Data:: Profile
              $userdata_homepage           =  $row_userdata["homepage"];           //  Data:: Profile
              $userdata_telefon            =  $row_userdata["telefon"];            //  Data:: Profile
              $userdata_handy              =  $row_userdata["handy"];              //  Data:: Profile
              $userdata_icq                =  $row_userdata["icq"];                //  Data:: Profile
              $userdata_aim                =  $row_userdata["aim"];                //  Data:: Profile
              $userdata_yim                =  $row_userdata["yim"];                //  Data:: Profile       
              $userdata_msn                =  $row_userdata["msn"];                //  Data:: Profile
              $userdata_job                =  $row_userdata["job"];                //  Data:: Profile
              $userdata_hobbys             =  $row_userdata["hobbys"];             //  Data:: Profile
              $userdata_misc               =  $row_userdata["misc"];               //  Data:: Profile
              $userdata_favorite_food      =  $row_userdata["favorite_food"];      //  Data:: Profile
              $userdata_favorite_drink     =  $row_userdata["favorite_drink"];     //  Data:: Profile       
              $userdata_favorite_music     =  $row_userdata["favorite_music"];     //  Data:: Profile
              $userdata_favorite_movie     =  $row_userdata["favorite_movie"];     //  Data:: Profile       
              $userdata_favorite_location  =  $row_userdata["favorite_location"];  //  Data:: Profile
 
              $userdata_signature          =  $row_userdata["signature"];          //  Data:: Signature
              $userdata_avatar             =  $row_userdata["avatar"];             //  Data:: Avatar

              $userdata_status             =  $row_userdata["UserActive"];         //  Data:: User Status

      }

      include("./templates/usercp/edit_profile.php");

  }

  else  {

  $update_profile1 = "UPDATE $user_tblname SET gender = '$_POST[gender]', firstname = '$_POST[firstname]', lastname = '$_POST[lastname]' WHERE UserID = ".$userdata_id."";     

  $update_profile2 = "UPDATE $user_tblname SET hometown = '$_POST[hometown]', study = '$_POST[study]', birthday = '$_POST[birthday]', birthmonth = '$_POST[birthmonth]', birthyear = '$_POST[birthyear]' WHERE UserID = ".$userdata_id."";     

  $update_profile3 = "UPDATE $user_tblname SET telefon = '$_POST[telefon]', handy = '$_POST[handy]', place = '$_POST[place]', street = '$_POST[street]', homepage = '$_POST[homepage]', icq = '$_POST[icq]', aim = '$_POST[aim]', yim = '$_POST[yim]', msn = '$_POST[msn]' WHERE UserID = ".$userdata_id."";     

  $update_profile4 = "UPDATE $user_tblname SET job = '$_POST[job]', hobbys = '$_POST[hobbys]', misc = '$_POST[misc]' WHERE UserID = ".$userdata_id."";     

  $update_profile5 = "UPDATE $user_tblname SET favorite_food = '$_POST[favorite_food]', favorite_drink = '$_POST[favorite_drink]', favorite_music = '$_POST[favorite_music]', favorite_movie = '$_POST[favorite_movie]', favorite_location = '$_POST[favorite_location]' WHERE UserID = ".$userdata_id."";     


  mysql_query($update_profile1) OR die(mysql_error());
  mysql_query($update_profile2) OR die(mysql_error());
  mysql_query($update_profile3) OR die(mysql_error());
  mysql_query($update_profile4) OR die(mysql_error());
  mysql_query($update_profile5) OR die(mysql_error());


  $text01   = "Profildaten wurden ge&auml;ndert!";         
  $link     = "index.php?do=usercp&sec=edit_profile";

     
  include("templates/refresh.php");


  }