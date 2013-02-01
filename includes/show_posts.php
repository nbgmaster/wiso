<?php 

$img_name = "hoverimg3";
$img_name_answer = "hoverimg8";


if ($do != inbox && $do != "outbox")  {


    if ($do != "search")  {

        $qysres = mysql_query("SELECT COUNT( f ) AS check_rows from $posts_tblname WHERE t = '$t' LIMIT 1");
 
        $qysrow = mysql_fetch_row( $qysres );

        $check_rows = $qysrow[ 0 ];

        $poexres = mysql_query("SELECT COUNT( id ) AS check_poll_exist from $polls_tblname WHERE t = '$t' LIMIT 1");

        $poexrow = mysql_fetch_row( $poexres );

        $check_poll_exist = $poexrow[ 0 ];


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

  if ($do != inbox && $do != "outbox")  {

  if ($check_poll_exist > 0)  {

      $query_polls = mysql_query("SELECT * from $polls_tblname WHERE t = '$t'");

      while ($row_polls = mysql_fetch_assoc($query_polls))  {

             $votallres = mysql_query("SELECT COUNT( id ) AS all_votes from $votes_tblname WHERE poll_id = '$row_polls[id]' LIMIT 1");
 
             $votallrow = mysql_fetch_row( $votallres );

             $all_votes = $votallrow[ 0 ];

             $vot1res = mysql_query("SELECT COUNT( id ) AS answer1_votes from $votes_tblname WHERE poll_id = '$row_polls[id]' && answer_number = '1' LIMIT 1");
 
             $vot1row = mysql_fetch_row( $vot1res );

             $answer1_votes = $vot1row[ 0 ];

             $vot2res = mysql_query("SELECT COUNT( id ) AS answer2_votes from $votes_tblname WHERE poll_id = '$row_polls[id]' && answer_number = '2' LIMIT 1");
 
             $vot2row = mysql_fetch_row( $vot2res );

             $answer2_votes = $vot2row[ 0 ];

             $vot3res = mysql_query("SELECT COUNT( id ) AS answer3_votes from $votes_tblname WHERE poll_id = '$row_polls[id]' && answer_number = '3' LIMIT 1");
 
             $vot3row = mysql_fetch_row( $vot3res );

             $answer3_votes = $vot3row[ 0 ];

             $vot4res = mysql_query("SELECT COUNT( id ) AS answer4_votes from $votes_tblname WHERE poll_id = '$row_polls[id]' && answer_number = '4' LIMIT 1");
 
             $vot4row = mysql_fetch_row( $vot4res );

             $answer4_votes = $vot4row[ 0 ];

             $vot5res = mysql_query("SELECT COUNT( id ) AS answer5_votes from $votes_tblname WHERE poll_id = '$row_polls[id]' && answer_number = '5' LIMIT 1");
 
             $vot5row = mysql_fetch_row( $vot5res );

             $answer5_votes = $vot5row[ 0 ];

             $vot6res = mysql_query("SELECT COUNT( id ) AS answer6_votes from $votes_tblname WHERE poll_id = '$row_polls[id]' && answer_number = '6' LIMIT 1");
 
             $vot6row = mysql_fetch_row( $vot6res );

             $answer6_votes = $vot6row[ 0 ];


             if ($all_votes == "0")  { $all_votes = "1"; }

             $percent1 = $answer1_votes / $all_votes * 100; $percent1 = round($percent1,2); $widthp1 = $percent1 * 250 / 100; $widthp1 = round($widthp1,0);
             $percent2 = $answer2_votes / $all_votes * 100; $percent2 = round($percent2,2); $widthp2 = $percent2 * 250 / 100; $widthp2 = round($widthp2,0);
             $percent3 = $answer3_votes / $all_votes * 100; $percent3 = round($percent3,2); $widthp3 = $percent3 * 250 / 100; $widthp3 = round($widthp3,0);
             $percent4 = $answer4_votes / $all_votes * 100; $percent4 = round($percent4,2); $widthp4 = $percent4 * 250 / 100; $widthp4 = round($widthp4,0);
             $percent5 = $answer5_votes / $all_votes * 100; $percent5 = round($percent5,2); $widthp5 = $percent5 * 250 / 100; $widthp5 = round($widthp5,0);
             $percent6 = $answer6_votes / $all_votes * 100; $percent6 = round($percent6,2); $widthp6 = $percent6 * 250 / 100; $widthp6 = round($widthp6,0);

             $all_votes = $votallrow[ 0 ];
             
             // Vote access

             $doubvres = mysql_query("SELECT COUNT( id ) AS check_double_vote from $votes_tblname WHERE user_id = '$userdata_id' && poll_id = '$row_polls[id]' LIMIT 1");
 
             $doubvrow = mysql_fetch_row( $doubvres );

             $check_double_vote = $doubvrow[ 0 ];


             if ($p_pollaccess == "0")  {

                 $poll_button = "";

             }

             else  {

                 if ($check_double_vote != "1")  {

                     $poll_button = "<br><input type=\"submit\" class=\"buttons\" value=\"Stimme abgeben\" onmouseover=\"this.className='mouseoverInput';\" onmouseout=\"this.className='mouseoutInput';\">";

                 }

                 else  {

                     $poll_button       = "";

                 }

             }

         if ($do == "reply") { echo"<br>"; }
 
         include("./templates/show_poll.php");

      }

      if ($do != "reply")  {

          include("./templates/navi_sides.php");

      }

  }

  }


  $postnumbers = mysql_num_rows($query_posts);

  $countNoZ = "1";

  while ($row_posts = mysql_fetch_assoc($query_posts))  {

         $post_user_name = "";

         $img_name_quote   = "hoverimg5_$row_posts[id]";
         $img_name_edit    = "hoverimg6_$row_posts[id]";
         $img_name_delete  = "hoverimg7_$row_posts[id]";
         $img_name_studivz = "hoverimg10_$row_posts[id]";
         $img_name_search  = "hoverimg11_$row_posts[id]";
         $img_name_email   = "hoverimg12_$row_posts[id]";
         $img_name_pn      = "hoverimg13_$row_posts[id]";
         $img_name_thanks  = "hoverimg14_$row_posts[id]";

         if ($userdata_id == $row_posts["user_id"] or $userdata_admin == "1" or $mod_user_status == "1")  {

             $edit_post  = "<a href=\"index.php?do=edit&p_id=$row_posts[id]\" onmouseover=\"$img_name_edit.src='images/templates/$template/edit_small_hover.gif';\" onmouseout=\"$img_name_edit.src='images/templates/$template/edit_small.gif';\">";
             $edit_post2 = "</a>";

         } else  { $edit_post = ""; $edit_post2 = ""; }

         if ($userdata_admin == "1" && $do != "inbox" && $do != "outbox" or $mod_user_status == "1" && $do != "inbox" && $do != "outbox")  {

             $del_post  = "<a href=index.php?do=delete&p_id=".$row_posts["id"]." onmouseover=\"$img_name_delete.src='images/templates/$template/delete_small_hover.gif';\" onmouseout=\"$img_name_delete.src='images/templates/$template/delete_small.gif';\">";
             $del_post2 = "<img src=\"images/templates/$template/delete_small.gif\" title=\"Beitrag löschen\" border=\"0\" width=\"86\" height=\"21\" name=\"$img_name_delete\">";
             $del_post3 = "</a>";

         } else if ($do == "inbox" or $do == "outbox")  { 

           $del_post  = "<a href=index.php?do=$do&sec=delete&d_id=$m_id onmouseover=\"$img_name_delete.src='images/templates/$template/delete_big_hover.gif';\" onmouseout=\"$img_name_delete.src='images/templates/$template/delete_big.gif';\">";
           $del_post2 = "<img src=\"images/templates/$template/delete_big.gif\" title=\"PM löschen\" border=\"0\" width=\"115\" height=\"26\" name=\"$img_name_delete\">";
           $del_post3 = "</a>";

         } else  {  $del_post = ""; $del_post2 = ""; $del_post3 = ""; }

         $str = $row_posts[message];

         include("./replace/show_posts.php");

         include("./replace/smilies.php");


         $avatar = "";

         if ($do != "inbox" && $do != "outbox")  {

             $main_message  = $str;

             if ($row_posts[user_id] != "0")  {

                 $post_username = mysql_query("SELECT UserID, UserName, UserRegdate, admin, postnumbers, last_online_time, hide_user, wisostudent, semester, studivz, gender, homepage, hide_user, study, avatar, firstname, lastname, signature, specialrank  from $user_tblname WHERE UserID = '$row_posts[user_id]'");

             }
        
         }

         else  { 

             $main_message  = $str;

             $post_username = mysql_query("SELECT UserID, UserName, UserRegdate, admin, last_online_time, hide_user, wisostudent, semester, studivz, postnumbers, gender, homepage, hide_user, study, avatar, firstname, lastname, signature, specialrank from $user_tblname WHERE UserID = '$sender_id'");

         }


         $topictitle = $row_posts["title"];

         if ($row_posts[user_id] != "0")  {
        
             while ($r_name = mysql_fetch_assoc($post_username))  {

                    $str = trim($r_name["signature"]);

                    include("./replace/show_posts.php");
                    include("./replace/smilies.php");

                    $user_signature  = $str;

                    $post_user_id     = $r_name["UserID"];
                    $post_user_name   = $r_name["UserName"];
                    $post_user_admin  = $r_name["admin"];
                    $postnumbers_user = $r_name["postnumbers"];
                    $user_regdate     = $r_name["UserRegdate"];
                    $user_gender      = $r_name["gender"];
                    $user_studivz     = $r_name["studivz"];
                    $user_hp          = $r_name["homepage"];
                    $user_wisostudent = $r_name["wisostudent"];
                    $user_studyt      = $r_name["study"];
                    $user_semester    = $r_name["semester"];
                    $user_avatar2     = $r_name["avatar"];
                    $post_user_firstname  = $r_name["firstname"];
                    $post_user_lastname   = $r_name["lastname"];
                    $user_hide        = $r_name["hide_user"];
                    $user_lot         = $r_name["last_online_time"];
                    $specialrank      = $r_name["specialrank"];

             }

             $thares = mysql_query("SELECT COUNT( id ) AS tha_numb from $thanks_tblname WHERE poster_uid = '$post_user_id' LIMIT 1");

             $tharow = mysql_fetch_row( $thares );

             $tha_numb = $tharow[ 0 ];


             $post_thanks = mysql_query("SELECT pid from $thanks_tblname WHERE uid = '$userdata_id'");

             $thanksS = 0;

             while ($r_thanks = mysql_fetch_assoc($post_thanks))  {

                    if ($r_thanks[pid] == $row_posts[id])  {

                        $thanksS = 1; break;

                    }

             }

         }

         $uid_thanks = mysql_query("SELECT uid from $thanks_tblname WHERE pid = '$row_posts[id]'");

         unset($Ay_names);

          while ($r_uid = mysql_fetch_assoc($uid_thanks))  {

                  $name_thanks = mysql_query("SELECT UserID, UserName from $user_tblname WHERE UserID = '$r_uid[uid]'");

                  while ($r_nam = mysql_fetch_assoc($name_thanks))  {

                         $prof_link  = "<a name=\"$r_nam[UserName]\" href=\"index.php?do=profile&user_id=$r_nam[UserID]\"><u>";
                         $prof_link2 = "</u></a>";

                         $Ay_names[] = $prof_link.$r_nam[UserName].$prof_link2;

                  }

         }

         if (count($Ay_names) > 0) asort($Ay_names);


         $same_user = mysql_query("SELECT user_id from $posts_tblname WHERE id = '$row_posts[id]'");

          while ($r_same = mysql_fetch_assoc($same_user))  {

                 $same_uid = $r_same[user_id];

         }

         if ($same_uid == $userdata_id)  {

             $thanksS = 1;

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


         if ($user_studivz != "")  {

             if (substr($user_studivz, 0, 7) == "http://")  {
   
                 $user_studi = "<a href=\"$user_studivz\" target=\"_blank\" onmouseover=\"$img_name_studivz.src='images/templates/$template/studivz_hover.gif';\" onmouseout=\"$img_name_studivz.src='images/templates/$template/studivz.gif';\">";
 
             }

             else  {  

                  $user_studi = "<a href=\"http://$user_studivz\" target=\"_blank\" onmouseover=\"$img_name_studivz.src='images/templates/$template/studivz_hover.gif';\" onmouseout=\"$img_name_studivz.src='images/templates/$template/studivz.gif';\">";

             }

             $user_studi2 ="</a>";

         }

         else  {

             $user_studi = ""; $user_studi2 = "";

         }




         $check_online_status = $timestamp - $user_lot; 

         if ($check_online_status < $online_time && $user_hide != "1" or $check_online_status < $online_time && $user_hide == "1" && $userdata_admin == "1")  { 

             $user_status = "user_online.gif";

         }

         else  { 

              $user_status = "user_offline.gif";

         }


         if ($user_gender == "m")  { 

             $gender_img="male.gif"; 

         } 

         else  { 

             $gender_img="female.gif"; 
  
         }


         $ok1="";   
         $ok2="";
                
         if ($row_posts["time"] > $lastOnlineTime) $ok1 = 1; 
                                         
         if (isset($_COOKIE["newP"]) != "") $new_newP2 = explode(",", $_COOKIE["newP"]);
         else $new_newP2[] = ""; 
              
         if(!in_array($row_posts["t"],$new_newP2))$ok2 = 1;
        
         if ($ok1 == 1 && $ok2 == 1) $newposts = 1; else $newposts = 0;
         unset($new_newP2);
            

         if ($newposts == "0")  $picon_img = "posticon.gif"; 
         else $picon_img = "posticonnew.gif";
 
      
         if ($do != "inbox" && $do != "outbox")  {

             $post_time = date("H:i",$row_posts["time"]);

             $post_date = date("d.m.Y",$row_posts["time"]);

         }

         else  {

             $post_time = date("H:i",$row_message["time"]);

             $post_date = date("d.m.Y",$row_message["time"]);

         }


         if ($user_avatar2 == "")  { 

             $avatar = "<span style=\"font-size:9px\"><br></span>";

         }

         else  { 

             $avatar = "<img src=\"avatars/$user_avatar2\">"; 

         }

         $day_date4 = $timestamp - 86400;
         $day_date5 = date("d.m.Y",$day_date4); 

         if ($post_date == $c_date)  { 

             $post_date = "<b>Heute</b>";

         }

         if ($post_date == $day_date5)  { 

             $post_date = "<i>Gestern</i>";

         } 


         /* Credits */

         $pointstot = 0;

         $qy_tot = mysql_query("SELECT points from $credits_tblname WHERE user = '$post_user_id'");

         while ($rw_tot = mysql_fetch_assoc($qy_tot))  {

                $pointstot = $pointstot + $rw_tot[points];

         }

         $credres = mysql_query("SELECT COUNT( id ) AS check_cred from $credits_tblname WHERE post = '$row_posts[id]' LIMIT 1");
 
         $credrow = mysql_fetch_row( $credres );

         $check_cred = $credrow[ 0 ]; 


         $qy_cred = mysql_query("SELECT credits from $user_tblname WHERE UserID = '$post_user_id'");

         while ($rw_cred = mysql_fetch_assoc($qy_cred))  {

                $creditnumber = $rw_cred[credits];

         }


         $crenres = mysql_query("SELECT COUNT( id ) AS resultcreD from $credits_tblname WHERE user = '$post_user_id' && post = '0' LIMIT 1");

         $crenrow = mysql_fetch_row( $crenres );

         $resultcreD = $crenrow[ 0 ];

         $crenres2 = mysql_query("SELECT COUNT( id ) AS resultcreP from $credits_tblname WHERE user = '$post_user_id' && datei = '0' LIMIT 1");

         $crenrow2 = mysql_fetch_row( $crenres2 );

         $resultcreP = $crenrow2[ 0 ];


         $curs = $resultcreD + $resultcreP;


         include("./templates/user_rank.php");

         $datum_reg = date("d.m.Y",$user_regdate);

         if ($row_posts[attachment] != "")  {

             $dataend    = strtolower( substr( strrchr( $row_posts[attachment] , "." ), 1 ) ); 
 
             $filetype = "image/$dataend";

             if ($filetype != "image/jpeg" && $filetype != "image/jpg" && $filetype != "image/pjpeg" && $filetype != "image/gif" && $filetype != "image/bmp" && $filetype != "image/png" && $filetype != "")  {

                 $fileicon = $row_posts[attachment];
                 $fileicon = substr($fileicon, strlen($fileicon)-3);
 
                 $attachment = "<br><br><table><tr><td><img src=\"images/database/$fileicon.gif\"></td><td valign=\"bottom\" style=\"padding-bottom:2px\"><a href=\"index.php?fileID=$row_posts[attachment]\"><b><u>";

                 if ($row_posts[dateiname] == "")  { $attachment .= "Dateianhang herunterladen"; } else  { $attachment .= "$row_posts[dateiname]"; } 

                 $attachment .= "</u></b></a></td></tr></table>";


             }

             else  { 

                 $imgvar = "attachments/$row_posts[attachment]";

                 $ImgExists = "1";

                 if ($ImgExists == "1")  { 

                     $max_w    = $width - 220;

                     if ($browser == "Opera")  {

                        $attachment = "<br><br> <img style=\"width:50px\" src=\"attachments/$row_posts[attachment]\" alt=\"[Bild nicht mehr vorhanden]\" title=\"\"> <a href=\"attachments/$row_posts[attachment]\" target=\"_blank\"> <img src=\"images/templates/$template/zoom.gif\" title=\"Volle Bildgröße anzeigen\" border=\"0\"> </a>";

                     }  else  {

                        $attachment = "<br><br> <img style=\"max-width: $max_w;width: expression(this.width > 560 ? 560: true);\" src=\"attachments/$row_posts[attachment]\" alt=\"[Bild nicht mehr vorhanden]\" title=\"\"> <a href=\"attachments/$row_posts[attachment]\" target=\"_blank\"> <img src=\"images/templates/$template/zoom.gif\" title=\"Volle Bildgröße anzeigen\" border=\"0\"> </a>";

                     }
    
                 }

                 else  { 

                         $attachment = "<i>Angehängtes Bild konnte nicht gefunden werden</i>";
  
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
             $edit_post_user = mysql_query("SELECT UserName from $user_tblname WHERE UserID = '$row_posts[edit_user]'");

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

             $query_this_topic = mysql_query("SELECT t, f FROM $posts_tblname WHERE id = '$row_posts[id]'");

             while ($row_this_topic = mysql_fetch_assoc($query_this_topic))  {  

                    $topic_id = $row_this_topic["t"]; $number13 = $row_this_topic[f];

             } 

             $query_topic_name = mysql_query("SELECT id, threadname, f FROM $threads_tblname WHERE id = '$topic_id'");

             while ($row_topic_name = mysql_fetch_assoc($query_topic_name))  {

                    $topicid   = $row_topic_name["id"];  
                    $topicname = $row_topic_name["threadname"];  
                    $fnameid   = $row_topic_name["f"];  

             } 

             $query_f_name = mysql_query("SELECT id, forum FROM $f_tblname WHERE id = '$fnameid'");

             while ($row_f_name = mysql_fetch_assoc($query_f_name))  {

                    $sfid  = $row_f_name["id"];  
                    $fname = $row_f_name["forum"];  

             } 

             if ($searchword != "")  {

                 $post_msg = preg_split("/[\s,]+/", "$searchword");

                 foreach ($post_msg as $bold_msg)  {  

                          $topictitle   = eregi_replace("$bold_msg","<b><font class=\"title\">$bold_msg</font></b>",$topictitle);

                        //  $main_message = eregi_replace("$bold_msg","<b><font class=\"title\">$bold_msg</font></b>",$main_message);

                        $main_message = preg_replace("/((<[^>]*)|$bold_msg)/ie", '"\2"=="\1"? "\1":"<font color=\"#BE7400\"><b>\1</b></font>"', $main_message);

                 }

             }

             if ($searchmember != "" && $searchmember == $post_user_name)  {

                 $post_user_nameX = "$post_user_name";
                 $post_user_name = "<b><font class=\"title\">$post_user_name</font></b>";

             }

         } 

         include("./templates/show_posts.php");

         $countNoZ++;

  }       
