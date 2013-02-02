<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(all);
  // Security:: Set register globals off

  if (@ini_get('register_globals'))
  
      foreach ($_REQUEST as $key => $value)
     
               unset($GLOBALS[$key]);

  if (!empty($_GET))     extract($_GET);
  if (!empty($_POST))    extract($_POST);
  if (!empty($_COOKIE))  extract($_COOKIE);
  if (!empty($_SESSION)) extract($_SESSION);
  
  
  /* Load :: Smarty */
  require_once("smarty/Smarty.class.php");
  $tpl = new Smarty;

  require_once("dbCon.php");

  // Load:: Time

  $timestamp = time();

  $c_time    =  date("H:i",$timestamp);
  $c_date    =  date("d.m.Y",$timestamp);

  $c_year    =  date("Y",$timestamp);    

  // Initialize Pages

  if ($page == "")  {

      $page = (int) $page;

      if ($page <= 0) $page = 1;

  }


  if(!isset($_SESSION['IP'])) {

            $_SESSION['IP'] = $_SERVER['REMOTE_ADDR'];

  }


  // Check Session or Cookie set


  if ($_COOKIE["cookie_wiwistud"] != "")  {

      $str_session = explode("|", $_COOKIE["cookie_wiwistud"]);

      $auto_logon_session = $str_session[0];
      $auto_logon_id      = $str_session[1];
      
  } 

  else  {

      $auto_logon_session = "";
      $auto_logon_id      = "";

  }

  if (isset($woohoo)) {

     $upd_aw  = "UPDATE users SET award = '0' WHERE UserID = '$_POST[userXX]'";

     mysql_query($upd_aw) OR die(mysql_error());

     header ('Location: index.php');

  }

  // Load:: Database tables
 
  $user_tblname            = "users";             // Data:: Members 
   
  $c_tblname               = "categorys";         // Data:: Categorys

  $f_tblname               = "forums";            // Data:: Forums

  $threads_tblname         = "threads";           // Data:: Threads
 
  $posts_tblname           = "posts";             // Data:: Posts
 
  $view_tblname            = "view";              // Data:: View

  $reload_tblname          = "reload_hits";       // Data:: Hits Reload Ban

  $reload2_tblname         = "reload_db";         // Data:: DB Reload Ban
 
  $newposts_tblname        = "newposts";          // Data:: Check new posts

  $pm_in_tblname           = "pm_in_box";         // Data:: In-Box

  $pm_out_tblname          = "pm_out_box";        // Data:: Out-Box

  $templates_tblname       = "templates";         // Data:: Templates

  $admin_config_tblname    = "admin_config";      // Data:: Admin Config

  $visiter_tblname         = "visiter";           // Data:: Visiters

  $visiter_online_tblname  = "visiter_online";    // Data:: Visiters Online

  $moderator_tblname       = "moderators";        // Data:: Moderators

  $hidecat_tblname         = "hidecat";           // Data:: Hide or Show Cat

  $smilies_tblname         = "smilies";           // Data:: Smilies

  $buddylist_tblname       = "buddylist";         // Data:: Friends

  $search_tblname          = "search";            // Data:: Search Data

  $groups_tblname          = "groups";            // Data:: User Groups

  $ranks_tblname           = "ranks";             // Data:: User Ranks

  $polls_tblname           = "polls";             // Data:: Polls

  $votes_tblname           = "poll_votes";        // Data:: Poll Votes

  $database_tblname        = "unterlagen";        // Data:: Database

  $boerse_tblname          = "boerse";            // Data:: B&ouml;rse
 
  $newsticker_tblname      = "newsticker";        // Data:: Newsticker

  $credits_tblname         = "credits";           // Data:: Creditpoints

  $codes_tblname           = "codes";             // Data:: Gutscheincodes

  $gutscheine_tblname      = "gutscheine";        // Data:: Gutscheine

  $thanks_tblname          = "thanks";            // Data:: Thank - Button

  $award_tblname           = "awardws0809";       // Data:: wiwistud.Award

  // Load:: Admin Config

  $query_admin_config = mysql_query("SELECT * from $admin_config_tblname LIMIT 1");    

  while  ($row_admin_config  =  mysql_fetch_assoc($query_admin_config))  {

          $show_threads          =  $row_admin_config["show_threads"];        // Row:: Threads

          $postsperpage          =  $row_admin_config["postsperpage"];        // Row:: Posts

          $show_user_pm          =  $row_admin_config["show_user_pm"];        // Row:: Private Messages

          $show_members          =  $row_admin_config["show_members"];        // Row:: Members

          $reload_length         =  $row_admin_config["reload_length"];       // Thread-Hits Ban Time

          $reload_post           =  $row_admin_config["reload_post"];         // Post Reply Ban Time

          $refresh_time          =  $row_admin_config["refresh_time"];        // Time duration Meta Refresh
  
          $online_time           =  $row_admin_config["online_time"];         // Time duration User online

          $max_pm_inbox          =  $row_admin_config["max_pm_inbox"];        // Maximum PMs Inbox

          $max_pm_outbox         =  $row_admin_config["max_pm_outbox"];       // Maximum PMs Outbox

          $board_domain          =  $row_admin_config["board_domain"];        // Board Domain

          $board_direction       =  $row_admin_config["board_direction"];     // Board Direction
 
          $board_title           =  $row_admin_config["board_title"];         // Board Title

          $board_description     =  $row_admin_config["board_description"];   // Board Description

          $default_style         =  $row_admin_config["tpl_active"];          // Default Template
  
          $banner                =  $row_admin_config["banner"];              // Banner on/off
 
          $header_titles         =  $row_admin_config["header_titles"];       // Header titles on/off

          $navi_bottom_begin     =  $row_admin_config["navi_bottom_begin"];   // Navi Bottom Begin Threads

          $navi_bottom_begin_p   =  $row_admin_config["navi_bottom_begin_p"]; // Navi Bottom Begin Posts

          $board_disable         =  $row_admin_config["board_disable"];       // Board disable

          $reg_disable           =  $row_admin_config["reg_disable"];         // Registration disable

          $m_account_activation  =  $row_admin_config["account_activation"];  // Account Activation Method

          $admin_email           =  $row_admin_config["admin_email"];         // Admin Email

          $stats_enable          =  $row_admin_config["stats_enable"];        // Show Stats

          $birthday_enable       =  $row_admin_config["birthday_enable"];     // Show Birthdays

          $pm_disable            =  $row_admin_config["pm_disable"];          // Allow PM

          $email_disable         =  $row_admin_config["email_disable"];       // Allow Email

          $change_nick_disable   =  $row_admin_config["change_nick_disable"]; // Allow Change Nickname
 
          $sig_disable           =  $row_admin_config["sig_disable"];         // Allow Signature

          $html_disable          =  $row_admin_config["html_disable"];        // Allow HTML

          $smilies_disable       =  $row_admin_config["smilies_disable"];     // Allow Smilies

          $bbcode_disable        =  $row_admin_config["bbcode_disable"];      // Allow BBCode

          $avatar_disable        =  $row_admin_config["avatar_disable"];      // Allow Avatar

          $avatar_from_url       =  $row_admin_config["avatar_from_url"];     // Avatar:: Load from URL Access

          $avatar_max_size       =  $row_admin_config["avatar_max_size"];     // Avatar:: Size

          $avatar_max_height     =  $row_admin_config["avatar_max_height"];   // Avatar:: Height

          $avatar_max_width      =  $row_admin_config["avatar_max_width"];    // Avatar:: Width

          $smilies_showstart     =  $row_admin_config["smilies_showstart"];   // Smilies Row Numbers

          $smilies_direction     =  $row_admin_config["smilies_direction"];   // Smilies URL Path
   
          $file_max_size         =  $row_admin_config["file_max_size"];       // File Upload:: Size

          $file_upload           =  $row_admin_config["file_upload"];         // File Upload:: On / Off @ posting

          $visTOT                =  $row_admin_config["visiterTOTAL"];        // visiter total

  }
  


  // Load:: User Data

  $userdata_ip = $_SERVER["REMOTE_ADDR"];    // Data:: User IP

  if ($auto_logon_id != "" && $auto_logon_session != "")  {

      $query_userdata = mysql_query("SELECT UserID, UserName, UserMail, UserActive, gender, study, semester, wisostudent, credits, credits11, last_online_time, admin, template, updateProfile, award, view_shownewposts, view2, sem1_alert from $user_tblname WHERE UserID = '$auto_logon_id' && UserPass = '$auto_logon_session'");
  
      while  ($row_userdata  =  mysql_fetch_assoc($query_userdata))  {

              if ($row_userdata["UserActive"] == "1")  {

                  $userdata_id                 =  $row_userdata["UserID"];             //  Data:: User ID
                  $userdata_name               =  $row_userdata["UserName"];           //  Data:: User Name
                  $userdata_email              =  $row_userdata["UserMail"];           //  Data:: User Email
                  $userdata_regdate            =  $row_userdata["UserRegdate"];        //  Data:: Registration Date
                  $userdata_lastonline         =  $row_userdata["last_online_time"];   //  Data:: Last online time
                  $userdata_gender             =  $row_userdata["gender"];             //  Data:: Gender
                  $userdata_tpl                =  $row_userdata["template"];           //  Data:: User Template
                  $userdata_semester           =  $row_userdata["semester"];           //  Semester
                  $userdata_credits            =  $row_userdata["credits"];            //  Data:: Creditpoints
                  $userdata_credits11          =  $row_userdata["credits11"];          //  Data:: Creditpoints if == 11

                  $userdata_admin              =  $row_userdata["admin"];              //  Data:: User Admin

                  $userdata_status             =  $row_userdata["UserActive"];         //  Data:: User Status

                  $update_profile              =  $row_userdata["updateProfile"];      //  Update Profile on Start?

                  $update_wiso                 =  $row_userdata["wisostudent"];        //  Bachelor Wiso Student?

                  $update_award                =  $row_userdata["award"];              //  Award polling
                  $userdata_study              =  $row_userdata["study"];              //  Main study focus

                  $act_view                    =  $row_userdata["view_shownewposts"];
                  $act_view2                   =  $row_userdata["view2"];

                  $temp_awa                    =  $row_userdata["sem1_alert"];

              }

              else  {

                  setcookie(cookie_wiwistud,"");

              }

      }
 
  }


  // Session nach 30 Minuten Inaktivit&auml;t l&ouml;schen

  $ch_ina = $timestamp - 1800;

  if ($userdata_lastonline < $ch_ina && $userdata_lastonline != "0")  {

      unset($lastOnlineTime);

      $lastOnlineTime = $userdata_lastonline;

      $_SESSION["lastOnlineTime"] = $userdata_lastonline;
      
      setcookie("newP","", time()-3600*24*3);
      setcookie("newP-time","", time()-3600*24*3);
      
  } 

  if (!isset($_GET['t']) && isset($_SESSION["t-read-id"]) != '') {

      if (isset($_COOKIE["newP"])) {
      
          $new_newP = explode(",", $_COOKIE["newP"]); 
               
          if (!in_array($_SESSION["t-read-id"], $new_newP)) $new_newP[] = $_SESSION["t-read-id"];
          
          if(in_array('',$new_newP)){
              $pos=array_search('',$new_newP);
              unset($new_newP[$pos]);          
          }
                  
          $new_newP = array_unique($new_newP);   
                
          $new_newP = implode(",", $new_newP); 
          
      } else  { $new_newP = $_SESSION["t-read-id"]; }
      
      $new_newP .= ',';
        
      setcookie("newP", $new_newP, time()+60*60*24*3);

      $postcheckn = $_SESSION["t-read-id"];
  
      unset($_SESSION["t-read-id"]);
      
      $query_forf = mysql_query("SELECT f from $threads_tblname WHERE id = '$postcheckn'"); 
      while  ($row_forf  =  mysql_fetch_assoc($query_forf))  { 
              $postcheck_f = $row_forf["f"];
      }  
       
  }

  
  if (isset($_COOKIE["newP-time"])) {
      
      $cook_new = $_COOKIE['newP-time'];
  
      $query_last_t = mysql_query("SELECT COUNT(id) from $threads_tblname WHERE rankingtime > '$cook_new'"); 
      $query_last_t2 = mysql_query("SELECT id from $threads_tblname WHERE rankingtime > '$cook_new'"); 
      $tot_last_t = mysql_fetch_row( $query_last_t );

      if ($tot_last_t[ 0 ] > 0)  {
      
          $Ay_newP_t[] = "";
      
          while  ($row_last_t  =  mysql_fetch_assoc($query_last_t2))  { 

                  $Ay_newP_t[] = $row_last_t['id']; 
                      
          }
          
          $cook_ay = explode(",", $_COOKIE["newP"]); 
          $int_t = array_intersect($Ay_newP_t, $cook_ay);

          if (count($int_t) > 0) {
          
              foreach($int_t as $check){           
              $pos=array_search($check,$cook_ay);
              unset($cook_ay[$pos]);
              }
                  
          }

          if(in_array('',$cook_ay)){
              $pos=array_search('',$cook_ay);
              unset($cook_ay[$pos]);          
          }
           /*
          foreach($Ay_newP_t as $check){ 
                  unset(array_search($check, $cook_ay)); 
          } */

          $cook_ay = array_unique($cook_ay);          
          $new_newP = implode(",", $cook_ay); 
          
          $new_newP .= ',';
          
          setcookie("newP", $new_newP, time()+60*60*24*3);
          //setcookie("newP-time", $timestamp, time()+60*60); 
          
          $check_newer = 1; 
          
      }
      
  }
  
  // Check Forum Permissions

  $query_post_permissions = mysql_query("SELECT f, user_id from $posts_tblname WHERE id = '$p_id'");  
  
  while  ($row_post_permissions  =  mysql_fetch_assoc($query_post_permissions))  { 

          $f        = $row_post_permissions["f"];
          $p_userid = $row_post_permissions["user_id"];

  }   

  $query_threads_permissions = mysql_query("SELECT f, status from $threads_tblname WHERE id = '$t'");  
  
  while  ($row_threads_permissions  =  mysql_fetch_assoc($query_threads_permissions))  { 

          $f_tzut   = $row_threads_permissions["f"];
          $f_status = $row_threads_permissions["status"];

  }   

  $query_pf = mysql_query("SELECT f from $posts_tblname WHERE id = '$p_id'");  
  
  while  ($row_pf  =  mysql_fetch_assoc($query_pf))  { 

          $f_tzut   = $row_pf["f"];

  }   

  $query_forum_permissions = mysql_query("SELECT status from $f_tblname WHERE id = '$f'");  
  
  while  ($row_forum_permissions  =  mysql_fetch_assoc($query_forum_permissions))  { 

          $f_status_permission = $row_forum_permissions["status"];

  }  


  $modres = mysql_query("SELECT COUNT( id ) AS mod_user_status from $moderator_tblname WHERE user_id = '$userdata_id' && f_id = '$f_tzut' LIMIT 1");

  $modrow = mysql_fetch_row( $modres );

  $mod_user_status = $modrow[ 0 ];
  

  if ($userdata_id == "")  {

  $query_permissions = mysql_query("SELECT * from $groups_tblname WHERE id = '4'");  
  
  }

  else  {

      if ($userdata_admin == "1")  { 

          $query_permissions = mysql_query("SELECT * from $groups_tblname WHERE id = '1'"); 

      }

      if ($mod_user_status != "" && $userdata_admin != "1")  { 

          $query_permissions = mysql_query("SELECT * from $groups_tblname WHERE id = '2'"); 

      }

      if ($mod_user_status == "" && $userdata_admin != "1")  {

          $query_permissions = mysql_query("SELECT * from $groups_tblname WHERE id = '3'"); 

      }

  }

  while  ($row_permissions  =  mysql_fetch_assoc($query_permissions))  { 

          $p_boardaccess      = $row_permissions["boardaccess"];
          $p_searchaccess     = $row_permissions["searchaccess"];
          $p_pmaccess         = $row_permissions["pmaccess"];
          $p_memberaccess     = $row_permissions["memberaccess"];
          $p_profileaccess    = $row_permissions["profileaccess"];
          $p_readaccess       = $row_permissions["readaccess"];
          $p_postaccess       = $row_permissions["postaccess"];
          $p_pollaccess       = $row_permissions["pollaccess"];

  }   


 if ($_POST[changeviewM] != "")  { 

     $qy_updateVW = "UPDATE $user_tblname SET view_shownewposts = '$_POST[changeviewM]' WHERE UserID = '$userdata_id'";     
 
     mysql_query($qy_updateVW) OR die(mysql_error());

     header ("Location:index.php");

  }
      
  
  // Check Visiter Numbers

  $visiterRefresh = $timestamp - 600;  // Besucher alle 10 Minuten als neuen B. z&auml;hlen

  $cvires = mysql_query("SELECT COUNT( id ) AS check_visiter from $visiter_tblname WHERE IP = '$userdata_ip' && time >= '$visiterRefresh' LIMIT 1");

  $cvirow = mysql_fetch_row( $cvires );

  $check_visiter = $cvirow[ 0 ];
  
  
  $time_del = $timestamp - (60*60*24*14);

  $query_del_visiters = "DELETE FROM $visiter_tblname WHERE time < '$time_del'";     

  mysql_query($query_del_visiters) OR die(mysql_error());  

  if($check_visiter == "0")  {

     $sql_visiter     = "INSERT into $visiter_tblname (IP, day, time, browser) ";
     $sql_visiter    .= "VALUES ('$userdata_ip', '$c_date', '$timestamp', '$_SERVER[HTTP_USER_AGENT]')";
     $result_visiter  = @mysql_query($sql_visiter) OR die(mysql_error());

/* visiterTOTAL im AdminConfigTable hochschrauben */

$visTOTnew = $visTOT + 1;

     $qy_updatevisT = "UPDATE $admin_config_tblname SET visiterTOTAL = '$visTOTnew'";     
 
     mysql_query($qy_updatevisT) OR die(mysql_error());

  }


  $check_online_durance = $timestamp - $online_time; 

  $videlres = mysql_query("SELECT COUNT( id ) AS videl from $visiter_online_tblname WHERE date < '$check_online_durance' LIMIT 1");

  $videlrow = mysql_fetch_row( $videlres );

  $videl    = $videlrow[ 0 ];


  if ($videl > 0)  {

      $query_del_visiter = "DELETE FROM $visiter_online_tblname WHERE date < '$check_online_durance'";     
  
      mysql_query($query_del_visiter) OR die(mysql_error());  

  }



  $OnVisres = mysql_query("SELECT COUNT( id ) AS OnVis from $visiter_online_tblname WHERE IP = '$userdata_ip' LIMIT 1");

  $OnVisrow = mysql_fetch_row( $OnVisres );

  $OnVis    = $OnVisrow[ 0 ];



  if ($OnVis == "0")  {

      $query_new_visiter = "INSERT INTO $visiter_online_tblname (IP, date) VALUES ('$userdata_ip', '$timestamp')"; 
       
      mysql_query($query_new_visiter) OR die(mysql_error());    

  }

  // Check ID forum

  $query_f = mysql_query("SELECT f from $threads_tblname WHERE id = '$t'"); 

  while ($row_f = mysql_fetch_assoc($query_f))  {
                      
         $forum_id = $row_f["f"];

  }
  

  // Style:: Choose Images

  if($f == "")  { 

     $img_f_main    = "f_main.gif"; 
     $img_f_new     = "f_new.gif"; 
     $img_f_closed  = "f_closed.gif"; 

  }

  else  {

    $img_f_main    = "folder.gif"; 
    $img_f_new     = "newfolder.gif";
    $img_f_closed  = "closed.gif"; 

  }


  // Delete PM Sessions

  if($do != "newpm")  { 
 
     if (isset($_SESSION["message"])) session_unregister(message);
     if (isset($_SESSION["title"])) session_unregister(title);

  }


  // Update:: User online time

  // Old time of last visit


  if ($_SESSION["lastOnlineTime"] == "")  { 

if ($userdata_lastonline == "0")  {

      $lastOnlineTime = $timestamp;

      $_SESSION["lastOnlineTime"] = $timestamp;

}

else {

      $lastOnlineTime = $userdata_lastonline;

      $_SESSION["lastOnlineTime"] = $userdata_lastonline;

}

  } 

  $DATEp    =  date("d.m.Y",$lastOnlineTime);   
  $DATEp2   =  date("H:i",$lastOnlineTime);


  $DBnres = mysql_query("SELECT COUNT( id ) AS resultDBnewOne from $database_tblname WHERE date > '$lastOnlineTime' && user_id != '$userdata_id' LIMIT 1");

  $DBnrow = mysql_fetch_row( $DBnres );

  $resultDBnewOne = $DBnrow[ 0 ];


  $NPres = mysql_query("SELECT COUNT( f ) AS newPostsResult from $posts_tblname WHERE time >= '$lastOnlineTime' && user_id != '$userdata_id' LIMIT 1");

  $NProw = mysql_fetch_row( $NPres );

  $newPostsResult = $NProw[ 0 ];


  $NAres = mysql_query("SELECT COUNT( id ) AS newAdsResult from $boerse_tblname WHERE date > '$lastOnlineTime' && user_id != '$userdata_id' && durance > '$timestamp' LIMIT 1");

  $NArow = mysql_fetch_row( $NAres );

  $newAdsResult = $NArow[ 0 ]; 


  if ($auto_logon_id != "" && $userdata_id != "" && $update_profile == "1" && $update_award == "1")  {

      $query_onlinetime = "UPDATE $user_tblname SET last_online_time = '$timestamp' WHERE UserID = '$userdata_id'";

      mysql_query($query_onlinetime) OR die(mysql_error()); 

  }


  /*if ($t == "")  {

      session_unregister(t-read-id);

  }  */
  
if (ereg("Opera",$_SERVER[HTTP_USER_AGENT])) $browser = 'Opera'; 

if (ereg("MSIE",$_SERVER[HTTP_USER_AGENT])) $browser = 'IE'; 

if (ereg("Netscape",$_SERVER[HTTP_USER_AGENT])) $browser = 'Netscape'; 

if(strstr($_SERVER[HTTP_USER_AGENT], "U") and strstr($_SERVER[HTTP_USER_AGENT], "Safari")) $browser = "Safari";

if (ereg("Firefox/3",$_SERVER[HTTP_USER_AGENT])) $browser = 'Firefox3'; 

if(strstr($_SERVER[HTTP_USER_AGENT], "Mac") and strstr($_SERVER[HTTP_USER_AGENT], "Firefox")) $browser = "FirefoxMac"; 

if ($browser == "")  $browser = 'other'; 

if(strstr($_SERVER[HTTP_USER_AGENT], "MSIE 7.0")) $browser = 'IE7';



      // Check:: New articles

     if ($update_profile == "1" && $update_award == "1")  {

         include("includes/check_new_articles.php");

     }

  $userdata_credits_org = $userdata_credits;

  if ($userdata_credits > 10) $userdata_credits = 10;

  $percent_mycred = $userdata_credits * 10;

  if ($percent_mycred == "0")  { $percent_mycred = 2; }


  $mycrenres = mysql_query("SELECT COUNT( id ) AS resultmycreD from $credits_tblname WHERE user = '$userdata_id' && post = '0' LIMIT 1");

  $mycrenrow = mysql_fetch_row( $mycrenres );

  $resultmycreD = $mycrenrow[ 0 ];

  $mycrenres2 = mysql_query("SELECT COUNT( id ) AS resultmycreP from $credits_tblname WHERE user = '$userdata_id' && datei = '0' LIMIT 1");

  $mycrenrow2 = mysql_fetch_row( $mycrenres2 );

  $resultmycreP = $mycrenrow2[ 0 ];

  $myCurs = $resultmycreD + $resultmycreP;

/*

  $myunreadP = mysql_query("SELECT COUNT( id ) AS myunreadedP from $newposts_tblname WHERE user_id = '$userdata_id' LIMIT 1");

  $myunreadProw = mysql_fetch_row( $myunreadP );

  $myunreadedP = $myunreadProw[ 0 ];

*/


  function klausurCounter($ThisDate, $Thisname)  {

    $d=explode(".",$ThisDate);
    $zukunft=mktime(0,0,0,$d[1],$d[0],$d[2]);
    $jetzt=time();
    $unterschied=$zukunft-$jetzt;
    $tage=$unterschied/86400; 
    $tage=ceil($tage); 

    if ($tage > 0)  { echo '<tr><td>'; }
    if ($tage < 10 && $tage > 0)  { echo '<b>0</b>'; }
    if ($tage > 1)  {
    echo '<b>'.$tage.' </b>Tage bis <b>';
    //if ($tage < 5)  {  echo '<font color=yellow>'; } else { echo '<font color=green>'; }
    echo $Thisname;
    //echo '</font>';
    }
    if ($tage == "1")  {
    echo '<b>'.$tage.' </b>Tag bis <b>'.$Thisname;
    //echo '</font>';
    }
    if ($tage < 1)  {
    echo '';
    }
    if ($tage > 0)  { echo '</b></td></tr>'; }

  }

if ( $hidecounter == 1 || $hidecounter == 2 )  { 

 setcookie("wiwistud_counter",$hidecounter);

}

 if ( $hidecounter )  $my_count = $hidecounter; else  $my_count = $_COOKIE["wiwistud_counter"];


 if ($my_count == 1 || !$my_count) { $imgK = "collapse"; $countK = 2; } 

else  { $imgK = "expand"; $countK = 1; }


         if ($userdata_tpl == "1")  {

             $ol_c = "#000";

         }

         else  {

             $ol_c = "#fff";

         }

