<?php 


  $online_members = "0";
  $ghost_members  = "0";
  $s              = "0"; 


  $timecounter = $timestamp - $online_time;

  $qyOnM = mysql_query("SELECT UserID, UserName, admin, hide_user from $user_tblname FORCE INDEX(last_online_time) WHERE last_online_time > '$timecounter' ORDER by UserName");

  while ($rwOnM = mysql_fetch_assoc($qyOnM))  {

         $profile_link  = "<a href=\"index.php?do=profile&user_id=$rwOnM[UserID]\">"; 
         $profile_link2 = "</a>"; 

  //       $checktime2 = $timestamp - $rwOnM["last_online_time"]; 

         if ($rwOnM["admin"] == "1")  {

             $admin_hilight  = "<b>"; 
             $admin_hilight2 = "</b>"; 

         }

         else  {

             $admin_hilight  = ""; 
             $admin_hilight2 = ""; 

         }

   //      if ($checktime2 < $online_time)  {  

             if ($rwOnM["hide_user"] == "1")  {

                 $ghost_members  = $ghost_members + 1;

                 $online_members = $online_members + 1; 

                 if ($userdata_admin == "1")  { $markg = "<i>"; $markg2 = "</i>"; 

                     $members_online_names[$s] = "$profile_link$admin_hilight$markg".$rwOnM["UserName"]."$markg2$admin_hilight2$profile_link2";

                     $s = $s + 1;

                 }	

             }
 
             else  {

                 $online_members = $online_members + 1; 

                 $members_online_names[$s] = "$profile_link$admin_hilight".$rwOnM["UserName"]."$admin_hilight2$profile_link2";

                 $s = $s + 1;	

             }

      //   } 

  }




  $visres = mysql_query("SELECT COUNT( id ) AS visTot from $visiter_online_tblname LIMIT 1");

  $visrow = mysql_fetch_row( $visres );

  $visTot = $visrow[ 0 ];


  $no_members = $visTot - $online_members;


  $qyvisRec = mysql_query("SELECT start_date, visiter_record_numbers, visiter_record_time from $admin_config_tblname LIMIT 1");

  while ($rwvisRec = mysql_fetch_assoc($qyvisRec))  {

         if ($online_members >= $rwvisRec[visiter_record_numbers])  {

             $sqlupdRec = "UPDATE $admin_config_tblname SET visiter_record_numbers = '$online_members', visiter_record_time = '$timestamp'";     

             mysql_query($sqlupdRec) OR die(mysql_error());  

        }

         $startdate   = $rwvisRec["start_date"];
         $visRecNum   = $rwvisRec["visiter_record_numbers"];
         $visRecTI    = $rwvisRec["visiter_record_time"];

  }

  $memres = mysql_query("SELECT COUNT( UserID ) AS memTot from $user_tblname LIMIT 1");

  $memrow = mysql_fetch_row( $memres );

  $memTot = $memrow[ 0 ];


  $Thdres = mysql_query("SELECT COUNT( f ) AS ThdTot from $threads_tblname LIMIT 1");

  $Thdrow = mysql_fetch_row( $Thdres );

  $ThdTot = $Thdrow[ 0 ];


  $posres = mysql_query("SELECT COUNT( f ) AS posTot from $posts_tblname LIMIT 1");

  $posrow = mysql_fetch_row( $posres );

  $posTot = $posrow[ 0 ];


  $visRecTI  = date("d.m.Y H:i",$visRecTI);


  $timedurance = $timestamp - $startdate;

  $daydurance = 24 * 60 * 60;

  $board_onlinedurance = $timedurance / $daydurance;

  $postsperday = $posTot / $board_onlinedurance;
  $postsperday = round($postsperday,2);



  // Speed Problem I


  $visresAll = mysql_query("SELECT COUNT( id ) AS visiterall from $visiter_tblname LIMIT 1");

  $visrowAll = mysql_fetch_row( $visresAll );

  $visiterall = $visrowAll[ 0 ];



  $visresTod = mysql_query("SELECT COUNT( day ) AS visitertoday from $visiter_tblname WHERE day = '$c_date' LIMIT 1");

  $visrowTod = mysql_fetch_row( $visresTod );

  $visitertoday = $visrowTod[ 0 ];



  $hours    = date("H",$timestamp);
  $minutes  = date("i",$timestamp);


  $secondes  = ($hours*60*60) + ($minutes*60) + 86400;

  $secondes2 = ($hours*60*60) + ($minutes*60);


  $timelimitdown = $timestamp-$secondes;

  $timelimitup   = $timestamp-$secondes2;


  $visresYes = mysql_query("SELECT COUNT( id ) AS visiteryesterday from $visiter_tblname WHERE day != '$c_date' && time > '$timelimitdown' && time < '$timelimitup' LIMIT 1");

  $visrowYes = mysql_fetch_row( $visresYes );

  $visiteryesterday = $visrowYes[ 0 ];

