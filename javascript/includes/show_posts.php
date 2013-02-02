<?php 

  $query_threads_permissions = mysql_query("SELECT * from $threads_tblname WHERE id = '$t'");  
  
  while  ($row_threads_permissions  =  mysql_fetch_assoc($query_threads_permissions))  { 

          $f_status = $row_threads_permissions["status"];

  }   

if ($do != inbox && $do != "outbox")  {


    if ($do != "search")  {

        $query_sides = mysql_query("SELECT * from $posts_tblname WHERE t = '$t' ORDER by id");
	
        $check_rows = mysql_num_rows($query_sides); 


        if ($do != "reply" && $do != "post") {

            // Load:: Navigation Top

            include("navi_top.php");

        }

        // Start:: Thread read-out


        if ($do == "reply" or $do == "post")  {

        $query_posts = mysql_query("SELECT * from $posts_tblname WHERE t = '$t' ORDER by id DESC limit 5");
 
        }

        else  {

        $query_posts = mysql_query("SELECT * from $posts_tblname WHERE t = '$t' ORDER by id limit ".(($page-1)*$break).",$break");
 
        }

    }


  }

  else  {

      $query_posts = mysql_query("SELECT * from $pmbox3 WHERE id = '$_GET[m_id]'");

  }


  $query_polls = mysql_query("SELECT * from $polls_tblname WHERE t = '$t'");
  $check_poll_exist = mysql_num_rows($query_polls);

  if ($check_poll_exist == "1")  {

      while ($row_polls = mysql_fetch_assoc($query_polls))  { 

             $query_votes_all  = mysql_query("SELECT * from $votes_tblname WHERE poll_id = '$row_polls[id]'");
             $all_votes = mysql_num_rows($query_votes_all);

             $query_votes1  = mysql_query("SELECT * from $votes_tblname WHERE poll_id = '$row_polls[id]' && answer_number = '1'");
             $answer1_votes = mysql_num_rows($query_votes1);

             $query_votes2  = mysql_query("SELECT * from $votes_tblname WHERE poll_id = '$row_polls[id]' && answer_number = '2'");
             $answer2_votes = mysql_num_rows($query_votes2);

             $query_votes3  = mysql_query("SELECT * from $votes_tblname WHERE poll_id = '$row_polls[id]' && answer_number = '3'");
             $answer3_votes = mysql_num_rows($query_votes3);

             $query_votes4  = mysql_query("SELECT * from $votes_tblname WHERE poll_id = '$row_polls[id]' && answer_number = '4'");
             $answer4_votes = mysql_num_rows($query_votes4);

             $query_votes5  = mysql_query("SELECT * from $votes_tblname WHERE poll_id = '$row_polls[id]' && answer_number = '5'");
             $answer5_votes = mysql_num_rows($query_votes5);

             $query_votes6  = mysql_query("SELECT * from $votes_tblname WHERE poll_id = '$row_polls[id]' && answer_number = '6'");
             $answer6_votes = mysql_num_rows($query_votes6);


             if ($all_votes == "0")  { $all_votes = "1"; }

             $percent1 = $answer1_votes / $all_votes * 100; $percent1 = round($percent1,2); $widthp1 = $percent1 * 250 / 100; $widthp1 = round($widthp1,0);
             $percent2 = $answer2_votes / $all_votes * 100; $percent2 = round($percent2,2); $widthp2 = $percent2 * 250 / 100; $widthp2 = round($widthp2,0);
             $percent3 = $answer3_votes / $all_votes * 100; $percent3 = round($percent3,2); $widthp3 = $percent3 * 250 / 100; $widthp3 = round($widthp3,0);
             $percent4 = $answer4_votes / $all_votes * 100; $percent4 = round($percent4,2); $widthp4 = $percent4 * 250 / 100; $widthp4 = round($widthp4,0);
             $percent5 = $answer5_votes / $all_votes * 100; $percent5 = round($percent5,2); $widthp5 = $percent5 * 250 / 100; $widthp5 = round($widthp5,0);
             $percent6 = $answer6_votes / $all_votes * 100; $percent6 = round($percent6,2); $widthp6 = $percent6 * 250 / 100; $widthp6 = round($widthp6,0);

             $all_votes = mysql_num_rows($query_votes_all);
             
             // Vote access

             $query_double_vote = mysql_query("SELECT * from $votes_tblname WHERE user_id = '$userdata_id' && poll_id = '$row_polls[id]'");
	
             $check_double_vote = mysql_num_rows($query_double_vote); 

             if ($p_pollaccess == "0")  {

                 $poll_button       = "";

             }

             else  {

                 if ($check_double_vote != "1")  {

                     $poll_button = "<br><input type=\"submit\" value=\"Stimme abgeben\">"; 

                 }

                 else  {

                     $poll_button       = "";

                 }

             }

         if ($do == "reply") { echo"<br>"; }
 
         include("./templates/show_poll.php");

         if ($do != "reply")  {

             include("./templates/navi_sides.php");

         }

      }

  }


  $postnumbers = mysql_num_rows($query_posts);

  while ($row_posts = mysql_fetch_assoc($query_posts))  {

         if ($userdata_id == $row_posts["user_id"] or $userdata_admin == "1" or $mod_user_status == "1")  { 

	     $edit_post  = "<a href=index.php?do=edit&p_id=".$row_posts["id"].">";
             $edit_post2 = "</a>";

         }

         if ($userdata_admin == "1" or $mod_user_status == "1")  { 

	     $del_post  = "<a href=index.php?do=delete&p_id=".$row_posts["id"].">";
             $del_post2 = "<img src=\"images/templates/$template/icon_delete.gif\" title=\"Beitrag l&ouml;schen\" border=\"0\">";
             $del_post3 = "</a>";

         }

         $str = $row_posts[message];

         include("./replace/show_posts.php");

         include("./replace/smilies.php");


         $avatar = "";

         if ($do != "inbox" && $do != "outbox")  {

             $main_message  = $str;

             if ($row_posts[user_id] != "0")  {  

                 $post_username = mysql_query("SELECT * from $user_tblname WHERE UserID = '$row_posts[user_id]'");

             }
	
         }

         else  {

             $main_message  = $str;

             $post_username = mysql_query("SELECT * from $user_tblname WHERE UserID = '$sender_id'");

         } 

         $topictitle = $row_posts["title"];

         if ($row_posts[user_id] != "0")  { 
	
             while ($r_name = mysql_fetch_assoc($post_username))  {  

                    $str = trim($r_name["signature"]);

                    include("./replace/show_posts.php");  
                    include("./replace/smilies.php");

		    $user_signature  = $str;

                    $post_user_id    = $r_name["UserID"]; 
		    $post_user_name  = $r_name["UserName"]; 
		    $post_user_admin = $r_name["admin"]; 
		    $user_regdate    = $r_name["UserRegdate"]; 
		    $user_gender     = $r_name["gender"];
		    $user_hp         = $r_name["homepage"];
		    $user_studyt     = $r_name["study"];
		    $user_avatar2    = $r_name["avatar"];
                    $post_user_firstname  = $r_name["firstname"];
                    $post_user_lastname   = $r_name["lastname"];

             }

         }

         if ($user_hp != "")  {

             if (substr($user_hp, 0, 7) == "http://")  {
   
                 $user_hp = "<a href=\"".$user_hp."\" target=\"_blank\">";
  
             }

             else  {  

                 $user_hp = "<a href=\"http://".$user_hp."\"  target=\"_blank\">";

             }

             $user_hp2 ="</a>";

         }

         else  {

             $user_hp = ""; $user_hp2 = "";

         }

         $query_online_status = mysql_query("SELECT * from $user_tblname WHERE UserID = '$post_user_id'");

         while ($row_online_status = mysql_fetch_assoc($query_online_status))  {

                $check_online_status = $timestamp - $row_online_status["last_online_time"]; 

                if ($check_online_status < $online_time && $row_online_status[hide_user] != "1" or $check_online_status < $online_time && $row_online_status[hide_user] == "1" && $userdata_admin == "1")  { 

                    $user_status = "user_online.gif";

                }

                else  { 

                    $user_status = "user_offline.gif";

                }

         }

         if ($user_gender == "m")  { 

             $gender_img="male.gif"; 

         } 

         else  { 

             $gender_img="female.gif"; 
  
         }


         if ($newposts != "0" or $newpostsid != "")  {

             if ($newpostsid == "")  {    $newpostsid[] = ""; }

             $picon_img = "posticon.gif"; 

             foreach ($newpostsid as $selectpid)  { 

                      if ($row_posts[id] == $selectpid)  { 

                          $picon_img = "posticonnew.gif";

                      }

              }

         }
 
         else  {  $picon_img = "posticon.gif";  }
 

         if ($do != "inbox" && $do != "outbox")  {

             $post_time = date("H:i",$row_posts["time"]);

	     $post_date = date("d.m.Y",$row_posts["time"]);

             $query_postnumbers_user = mysql_query("SELECT * from $posts_tblname WHERE user_id = '$row_posts[user_id]'");
         
         }

         else  {

             $post_time = date("H:i",$row_message["time"]);

	     $post_date = date("d.m.Y",$row_message["time"]);

             $query_postnumbers_user = mysql_query("SELECT * from $posts_tblname WHERE user_id = '$sender_id'");

         }
         
         $postnumbers_user = mysql_num_rows($query_postnumbers_user);


         if ($user_avatar2 == "")  { 

             $avatar = "";

	 }

         else  { 

             $avatar = "<img src=\"avatars/$user_avatar2\">"; 

         }

         $day_date4 = $timestamp - 84600;
	 $day_date5 = date("d.m.Y",$day_date4); 

         if ($post_date == $c_date)  { 

             $post_date = "<b>Heute</b>";

         }

         if ($post_date == $day_date5)  { 

             $post_date = "<i>Gestern</i>";

         } 

         include("./templates/user_rank.php");

         $datum_reg = date("d.m.Y",$user_regdate);

         if ($row_posts[attachment] != "")  {

             $dataend    = strtolower( substr( strrchr( $row_posts[attachment] , "." ), 1 ) ); 
 
             $filetype = "image/$dataend";

             if ($filetype != "image/jpeg" && $filetype != "image/jpg" && $filetype != "image/pjpeg" && $filetype != "image/gif" && $filetype != "image/bmp" && $filetype != "image/png" && $filetype != "")  {

                 $attachment = "<br><br><a href=\"attachments/$row_posts[attachment]\"><b><u>Dateianhang ansehen/speichern</u></b></a>";

             }

             else  { 

                 $imgvar = "attachments/$row_posts[attachment]";

                 $ImgExists = @fopen ($imgvar, "r");

                 if ($ImgExists)  { 

                     $imgsize = getimagesize($imgvar);
                     $max_w    = $width - 220;

                     if ($imgsize[0] > $max_w)  {

                         $attachment = "<br><br><b>Angeh&auml;ngtes Bild:</b> <br><br> <img src=\"attachments/$row_posts[attachment]\" width=\"$max_w\"> <a href=\"attachments/$row_posts[attachment]\" target=\"_blank\"> <img src=\"images/templates/$template/zoom.gif\" title=\"Volle Bildgr&ouml;&szlig;e anzeigen\" border=\"0\"> </a><br>";

                     }

                     else  {

                         $attachment = "<br><br><b>Angeh&auml;ngtes Bild:</b> <br><br><img src=\"attachments/$row_posts[attachment]\">";
  
                     }

                 }

                 else  { 

                         $attachment = "<i>Angeh&auml;ngtes Bild konnte nicht gefunden werden</i>";
  
                 }

             }

         }  

         else  {

             $attachment = ""; 

         }

         if ($row_posts[user_id] == "0")  {  

             $post_user_name = "Gast"; 
             $datum_reg = "";
             $postnumbers_user = "";
             $user_place = "";

         }


         if ($row_posts["edittime"] != "" && $row_posts["edittime"] != "0")  {

	     $edit_post_time = date("H:i",$row_posts["edittime"]);
	     $edit_post_date = date("d.m.Y",$row_posts["edittime"]);
             $edit_post_user = mysql_query("SELECT * from $user_tblname WHERE UserID = '$row_posts[edit_user]'");

             while ($row_edit_user = mysql_fetch_assoc($edit_post_user))  {  

                    $edit_user = $row_edit_user["UserName"];

             }

         }  

         if ($highlight != "")  {

             $post_msg = preg_split("/[\s,]+/", "$highlight");

             foreach ($post_msg as $bold_msg)  {  

                      $topictitle   = eregi_replace("$bold_msg","<b><font class=\"title\">$bold_msg</font></b>",$topictitle);

                      $main_message = eregi_replace("$bold_msg","<b><font class=\"title\">$bold_msg</font></b>",$main_message);

             }

         }


         if ($highlightuser != "" && $highlightuser == $post_user_id)  {
 
             $post_user_name = "<b><font class=\"title\">$post_user_name</font></b>";

         }

         $post_user_name2 = $post_user_name; 

         if ($do == "search")  {

             $query_this_topic = mysql_query("SELECT * FROM $posts_tblname WHERE id = '$row_posts[id]'");

             while ($row_this_topic = mysql_fetch_assoc($query_this_topic))  {  

                    $topic_id = $row_this_topic["t"]; $number13 = $row_this_topic[f];

             } 

             $query_topic_name = mysql_query("SELECT * FROM $threads_tblname WHERE id = '$topic_id'");

             while ($row_topic_name = mysql_fetch_assoc($query_topic_name))  {

                    $topicid   = $row_topic_name["id"];  
                    $topicname = $row_topic_name["threadname"];  
                    $fnameid   = $row_topic_name["f"];  

             } 

             $query_f_name = mysql_query("SELECT * FROM $f_tblname WHERE id = '$fnameid'");

             while ($row_f_name = mysql_fetch_assoc($query_f_name))  {

                    $sfid  = $row_f_name["id"];  
                    $fname = $row_f_name["forum"];  

             } 

             if ($searchword != "")  {

                 $post_msg = preg_split("/[\s,]+/", "$searchword");

                 foreach ($post_msg as $bold_msg)  {  

                          $topictitle   = eregi_replace("$bold_msg","<b><font class=\"title\">$bold_msg</font></b>",$topictitle);

                          $main_message = eregi_replace("$bold_msg","<b><font class=\"title\">$bold_msg</font></b>",$main_message);

                 }

             }

             if ($searchmember != "" && $searchmember == $post_user_name)  {

                 $post_user_name = "<b><font class=\"title\">$post_user_name</font></b>";

             }

         } 

         include("./templates/show_posts.php");


  }       
