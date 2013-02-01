<?php 

  $thares = mysql_query("SELECT COUNT( id ) AS tha_numb from $thanks_tblname WHERE poster_uid = '$user_id' LIMIT 1");

  $tharow = mysql_fetch_row( $thares );

  $tha_numb = $tharow[ 0 ];

  $query_user = mysql_query("SELECT * from $user_tblname WHERE UserID = '$user_id'");

  while ($row_user = mysql_fetch_assoc($query_user))  {

         $pointstot = 0;

         $qy_tot = mysql_query("SELECT points from $credits_tblname WHERE user = '$user_id'");

         while ($rw_tot = mysql_fetch_assoc($qy_tot))  {

                $pointstot = $pointstot + $rw_tot[points];

         }

         $specialrank = $row_user[specialrank];

         if ($row_user["gender"] == "m")  {

             $gender_img="male.gif";

         }

         else  {

             $gender_img="female.gif"; 

         }


         if ($row_user["avatar"] == "")  { 

             $avatar = "<br><br>";

         }

         else  { 

             $avatar = "<img src=\"avatars/$row_user[avatar]\">"; 

         }


         if ($row_user[homepage] != "")  {

             if (substr($row_user[homepage], 0, 7) == "http://")  {

                 $user_hp = "<a href=\"".$row_user[homepage]."\" target=\"_blank\" onmouseover=\"imgwww.src='images/templates/$template/www_hover.gif';\" onmouseout=\"imgwww.src='images/templates/$template/www.gif';\">";
  
             }

             else  {  

                 $user_hp = "<a href=\"http://".$row_user[homepage]."\"  target=\"_blank\" onmouseover=\"imgwww.src='images/templates/$template/www_hover.gif';\" onmouseout=\"imgwww.src='images/templates/$template/www.gif';\">";

             }

             $user_hp2 ="</a>";

         }

         else  {

             $user_hp = ""; $user_hp2 = "";

         }


         if ($row_user[studivz] != "")  {

             if (substr($row_user[studivz], 0, 7) == "http://")  {
   
                 $user_studi = "<a href=\"".$row_user[studivz]."\" target=\"_blank\">";
  
             }

             else  {  

                 $user_studi = "<a href=\"http://".$row_user[studivz]."\"  target=\"_blank\">";

             }

             $user_studi2 ="</a>";

         }

         else  {

             $user_studi = ""; $user_studi2 = "";

         }

         $query_online_status = mysql_query("SELECT * from $user_tblname WHERE UserID = '$row_user[UserID]'");

         while ($row_online_status = mysql_fetch_assoc($query_online_status))  {

                $check_online_status = $timestamp - $row_online_status["last_online_time"]; 

                if ($check_online_status < $online_time && $row_online_status[hide_user] != "1" or $check_online_status < $online_time && $row_online_status[hide_user] == "1" && $userdata_admin == "1")  { 

                    $user_status = "user_online.gif";

                }

                else  { 

                    $user_status = "user_offline.gif";

                }

         }

         $user_regdate    =  date("d.m.Y",$row_user["UserRegdate"]);

         $row_user["last_online_time"]    =  date("d.m.Y H:i",$row_user["last_online_time"]);

         $user_timedurance = $timestamp - $row_user["UserRegdate"];

         $user_daydurance  = 24 * 60 * 60;
 
         $user_onlinedurance = $user_timedurance / $user_daydurance;

         if ($user_timedurance < "86401")  {  $user_postsperday = $row_user["postnumbers"]; }

         else  { $user_onlinedurance = round($user_onlinedurance,0); $user_postsperday   = $row_user["postnumbers"] / $user_onlinedurance; }

         $user_postsperday = round($user_postsperday,2);

         $query_postnumbers_user = mysql_query("SELECT * from $posts_tblname WHERE user_id = '$user_id'");
               
         $postnumbers_user       = mysql_num_rows($query_postnumbers_user);
 
         include("templates/user_rank.php");

         include("templates/profile.php"); 

  }
