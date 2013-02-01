<?php 

  $online_members = "0";
  $ghost_members  = "0";
  $s              = "0";

  $timecounter = $timestamp - $online_time;

  $query_online_members = mysql_query("SELECT * from $user_tblname WHERE last_online_time > '$timecounter' ORDER by UserName");

  while ($row_online_members = mysql_fetch_assoc($query_online_members))  {

         $profile_link  = "<a href=\"index.php?do=profile&user_id=$row_online_members[UserID]\">"; 
         $profile_link2 = "</a>"; 

         $check_online_time2 = $timestamp - $row_online_members["last_online_time"]; 

         if ($row_online_members["admin"] == "1")  {

             $admin_hilight  = "<b>"; 
             $admin_hilight2 = "</b>"; 

         }

         else  {

             $admin_hilight  = ""; 
             $admin_hilight2 = ""; 

         }

         if ($check_online_time2 < $online_time)  {  

             if ($row_online_members["hide_user"] == "1")  {

                 $ghost_members  = $ghost_members + 1;

                 $online_members = $online_members + 1; 

                 if ($userdata_admin == "1")  { $markg = "<i>"; $markg2 = "</i>"; 

                     $members_online_names[$s] = "$profile_link$admin_hilight$markg".$row_online_members["UserName"]."$markg2$admin_hilight2$profile_link2";

                     $s = $s + 1;

                 }	

             }
 
             else  {

                 $online_members = $online_members + 1; 

                 $members_online_names[$s] = "$profile_link$admin_hilight".$row_online_members["UserName"]."$admin_hilight2$profile_link2";

                 $s = $s + 1;	

             }

         } 

  }

  $query_online_visiters = mysql_query("SELECT * from $visiter_online_tblname");

  $visiter_numbers = mysql_num_rows($query_online_visiters);


  $no_members = $visiter_numbers - $online_members;


  $query_visiter_record = mysql_query("SELECT * from $admin_config_tblname");

  while ($row_visiter_record = mysql_fetch_assoc($query_visiter_record))  {

         if ($online_members >= $row_visiter_record[visiter_record_numbers])  {

             $sql_update_record = "UPDATE $admin_config_tblname SET visiter_record_numbers = '$online_members', visiter_record_time = '$timestamp'";     

             mysql_query($sql_update_record) OR die(mysql_error());  

        }
 
  }

  $query_membernumbers = mysql_query("SELECT * from $user_tblname");
  $membernumbers       = mysql_num_rows($query_membernumbers);
 
  $query_threadnumbers = mysql_query("SELECT * from $threads_tblname");
  $threadnumbers       = mysql_num_rows($query_threadnumbers);

  $query_postnumbers   = mysql_query("SELECT * from $posts_tblname");
  $postnumbers         = mysql_num_rows($query_postnumbers);


  $query_config = mysql_query("SELECT * from $admin_config_tblname");

  while ($row_config = mysql_fetch_assoc($query_config))  { 

         $startdate              = $row_config["start_date"];
         $visiter_record_numbers = $row_config["visiter_record_numbers"];
         $visiter_record_time    = $row_config["visiter_record_time"];

  }


  $visiter_record_time    = date("d.m.Y H:i",$visiter_record_time);


  $timedurance = $timestamp - $startdate;

  $daydurance = 24 * 60 * 60;

  $board_onlinedurance = $timedurance / $daydurance;

  $postsperday = $postnumbers / $board_onlinedurance;
  $postsperday = round($postsperday,2);



  // Speed Problem I

  $query_newest_user = mysql_query("SELECT * from $user_tblname ORDER by UserRegdate DESC LIMIT 1");

  while ($row_newest_user = mysql_fetch_assoc($query_newest_user))  { 

         $newest_user_name    = $row_newest_user["UserName"];
         $newest_user_regdate = $row_newest_user["UserRegdate"];
         $newest_user_id      = $row_newest_user["UserID"]; 

  }

  $newest_user_regdate    =  date("d.m.Y",$newest_user_regdate);

  function countfiles($path)  {

    $handle    = opendir($path);
    $filecount = 0;
    while ($res  = readdir($handle))  {

           if (is_dir($res))  {

           } 

           else  {
    
               $filecount++;
     
           }

    }

    return $filecount;

  } 

  $smilesdir = "images/templates/$template/smiles"; 

  $smilienumbers = countfiles($smilesdir);
  $smilienumbers = $smilienumbers - 1;


              $visiter_show = mysql_query("select * from $visiter_tblname");
              $visiterall   = mysql_num_rows($visiter_show);

              $visiter_show2 = mysql_query("select * from $visiter_tblname WHERE day = '$c_date'");
              $visitertoday  = mysql_num_rows($visiter_show2);


$hours    = date("H",$timestamp);
$minutes  = date("i",$timestamp);


$secondes  = ($hours*60*60) + ($minutes*60) + 86400;

$secondes2 = ($hours*60*60) + ($minutes*60);


$timelimitdown = $timestamp-$secondes;

$timelimitup   = $timestamp-$secondes2;

$visiter_show3 = mysql_query("select * from $visiter_tblname WHERE day != '$c_date' && time > '$timelimitdown' && time < '$timelimitup'");

$visiteryesterday = mysql_num_rows($visiter_show3);
