<?php 

if ($show == "p")  {

$Ay_credP[] = "";

  $count_credP = 0;

  $qy_credP   = mysql_query("SELECT post from $credits_tblname WHERE user = '$user_id' && post != '0'");

  $howmuch = mysql_num_rows($qy_credP);

  while ($rw_credP = mysql_fetch_assoc($qy_credP))  {

         $Ay_credP[$count_credP] = $rw_credP[post];

         $count_credP++;

  }

  $qy_credP2   = mysql_query("SELECT pid from $thanks_tblname WHERE poster_uid = '$user_id'");

  $howmuch2 = mysql_num_rows($qy_credP2);

  while ($rw_credP2 = mysql_fetch_assoc($qy_credP2))  {

          if ( !in_array($rw_credP2[pid], $Ay_credP) )  {

                 $Ay_credP[$count_credP] = $rw_credP2[pid];

                 $count_credP++;

         }

  }

  $howmuch = $howmuch + $howmuch2;

?>

       <table cellpadding="4" cellspacing="1" class="tableinborder" width="<?php echo"$width";?>">
   
         <tr>
    
           <td class="catbg" align="left">


<b>Bonuspunktesystem :: Alle positiv bewerteten Beiträge und Unterlagen von <?php  GetUser($user_id); ?> im Überblick</b>

               </td></tr></table>

<br>
  <table cellspacing="0" cellpadding="3" width="<?php  echo"$width"; ?>" style="border:1px solid #000000;height:20px">
  <form action="index.php?do=showCredits" method="get"><tr>
  <td class="tableb" style="border-right:0;">
  Wähle hier aus, ob du die Beiträge oder Unterlagen sehen willst:
  </td><td class="tableb" align="right">

  <input name="do" value="showCredits" type="hidden">
  <input name="user_id" value="<?php  echo"$user_id"; ?>" type="hidden">

  <select onChange="this.form.submit();" name="show" style="width:150px">

  <option value="p"
  <?php  if ($show == p)  { echo" selected"; } ?>
  >Beiträge anzeigen</option>

  <option value="d"
  <?php  if ($show == d)  { echo" selected"; } ?>
  >Unterlagen anzeigen</option>

  </select>

  </td></tr>  </form></table>

<?php 

if ($howmuch > 0)  {

  $array_values = implode ("','", $Ay_credP);

  $qysres = mysql_query("SELECT COUNT( id ) AS check_rows from $posts_tblname WHERE id IN ('$array_values') LIMIT 1");

  $qysrow = mysql_fetch_row( $qysres );

  $check_rows = $qysrow[ 0 ];

  include("navi_sides.php");

  if ($check_rows <= $break)  echo"<br>";

  $qy_myP = mysql_query("SELECT id, f, t, message, time, attachment from $posts_tblname WHERE id IN ('$array_values') ORDER by time DESC limit ".(($page-1)*$break).",$break");

  $countMYP = "1";

  while ($rw_myP = mysql_fetch_assoc($qy_myP))  {

         $uid_thanks = mysql_query("SELECT uid from $thanks_tblname WHERE pid = '$rw_myP[id]'");

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


         $str = $rw_myP[message];

         include("./replace/show_posts.php");

         include("./replace/smilies.php");

             $post_time = date("H:i",$rw_myP["time"]);

             $post_date = date("d.m.Y",$rw_myP["time"]);


         $day_date4 = $timestamp - 86400;
         $day_date5 = date("d.m.Y",$day_date4); 

         if ($post_date == $c_date)  { 

             $post_date = "<b>Heute</b>";

         }

         if ($post_date == $day_date5)  { 

             $post_date = "<i>Gestern</i>";

         }



         if ($rw_myP[attachment] != "")  {

             $dataend    = strtolower( substr( strrchr( $rw_myP[attachment] , "." ), 1 ) );

             $filetype = "image/$dataend";

             if ($filetype != "image/jpeg" && $filetype != "image/jpg" && $filetype != "image/pjpeg" && $filetype != "image/gif" && $filetype != "image/bmp" && $filetype != "image/png" && $filetype != "")  {

                 $fileicon = $rw_myP[attachment];
                 $fileicon = substr($fileicon, strlen($fileicon)-3);

                 $attachment = "<br><br><table><tr><td><img src=\"images/database/$fileicon.gif\"></td><td valign=\"bottom\" style=\"padding-bottom:2px\"><a href=\"index.php?fileID=$rw_myP[attachment]\"><b><u>";

                 if ($rw_myP[dateiname] == "")  { $attachment .= "Dateianhang herunterladen"; } else  { $attachment .= "$rw_myP[dateiname]"; }

                 $attachment .= "</u></b></a></td></tr></table>";


             }

             else  {

                 $imgvar = "attachments/$rw_myP[attachment]";

                 $ImgExists = "1";

                 if ($ImgExists == "1")  {

                     $max_w    = $width - 220;

                     if ($browser == "Opera")  {

                        $attachment = "<br><br> <img style=\"width:50px\" src=\"attachments/$rw_myP[attachment]\" alt=\"[Bild nicht mehr vorhanden]\" title=\"\"> <a href=\"attachments/$rw_myP[attachment]\" target=\"_blank\"> <img src=\"images/templates/$template/zoom.gif\" title=\"Volle Bildgröße anzeigen\" border=\"0\"> </a>";

                     }  else  {

                        $attachment = "<br><br> <img style=\"max-width: $max_w;width: expression(this.width > 560 ? 560: true);\" src=\"attachments/$rw_myP[attachment]\" alt=\"[Bild nicht mehr vorhanden]\" title=\"\"> <a href=\"attachments/$rw_myP[attachment]\" target=\"_blank\"> <img src=\"images/templates/$template/zoom.gif\" title=\"Volle Bildgröße anzeigen\" border=\"0\"> </a>";

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


    $query_topic_name = mysql_query("SELECT id, threadname, f FROM $threads_tblname WHERE id = '$rw_myP[t]'");

             while ($row_topic_name = mysql_fetch_assoc($query_topic_name))  {

                    $topicid   = $row_topic_name["id"];  
                    $topicname = $row_topic_name["threadname"];  
                    $fnameid   = $row_topic_name["f"];  

             } 


 $qy_gotoP = mysql_query("SELECT id from $posts_tblname WHERE t = '$rw_myP[t]' ORDER by time");

 $countGT = "0";
    
         while ($rw_gotoP = mysql_fetch_assoc($qy_gotoP))  { 

                if ($rw_gotoP[id] == $rw_myP[id])  {

                    $GTnumbers = $countGT;

                }

                $countGT++;

         }


 $output = $GTnumbers / $postsperpage; 
       
  $output = floor($output); 

  $output++;

             $query_f_name = mysql_query("SELECT id, forum FROM $f_tblname WHERE id = '$rw_myP[f]'");

             while ($row_f_name = mysql_fetch_assoc($query_f_name))  {

                    $sfid  = $row_f_name["id"];  
                    $fname = $row_f_name["forum"];  

             } 

?>


<table cellpadding="4" cellspacing="1" class="tableinborder" width="<?php echo"$width";?>">

  <tr>

    <td class="cellbg" width="50%" align="left">

        <?php         if(strlen($fname) > 45) { 

                   $fname = substr($fname, 0, 42).'...';  }   ?>

<a href="index.php?f=<?php  echo"$sfid"; ?>">
    <font class="big"><b>Forum:</b> <?php  echo"$fname"; ?></font>
</a>
    </td>

    <td class="cellbg" align="right">


        <?php         if(strlen($topicname) > 45) { 

                   $topicname = substr($topicname, 0, 42).'...';  }   ?>


<a href="index.php?t=<?php  echo"$topicid"; ?>">
    <font class="big"><b>Thema:</b> <?php  echo"$topicname"; ?></font>
</a>
    </td>

  </tr>

</table>

<table class="tableinborder" cellspacing="0" cellpadding="0" width="<?php echo"$width";?>">
<?php 

echo"<tr>";


  echo"<td class=\"tableb\" style=\"padding:7px;border-left:1px solid #000000;border-right:1px solid #000000\">";

echo"<span class=\"big\" style=\"line-height:20px\">$str</span>$attachment</td></tr>";

?>

    <tr>

  <td class="tableb" style="border:1px solid #000;border-bottom:0px solid #000;padding:4px;">

<?php     $Ay_end = count($Ay_names);

  if ($Ay_end > 0)  { ?>

        <b>Folgende User fanden diesen Beitrag hilfreich:</b>

       <?php 

                   $Ay_cou = 0;

                   foreach ($Ay_names as $lookup)  {

                   $Ay_cou++;

                   echo"$lookup";

                   if($Ay_cou != $Ay_end)  { echo", "; }

                   }

  } else  { echo"Dieser Beitrag wurde von den Administratoren positiv bewertet."; }

?>  </td></tr> <?php  

echo"<tr><td class=\"tablea\">";

?><table cellspacing="1" cellpadding="3" width="100%" class="tableinborder"><tr>

<?php  if ($output == "1")  { ?>

<td width="50%" class="tablea" onclick="location.href='index.php?t=<?php  echo"$topicid#$rw_myP[id]"; ?>';" onmouseover="this.className='mouseout';" onmouseout="this.className='mouseout2';">

<?php  } else { ?>

<td width="50%" class="tablea" onclick="location.href='index.php?t=<?php  echo"$topicid&page=$output#$rw_myP[id]"; ?>';" onmouseover="this.className='mouseout';" onmouseout="this.className='mouseout2';">

<?php  } ?>

<img src="images/templates/<?php echo"$template";?>/arrow_r.gif"> Zu diesem Beitrag navigieren

</td><td width="50%" align="right" class="tablea">verfasst am: <?php  echo"$post_date, $post_time"; ?> Uhr</td></tr></table><?php 

echo"</td></tr>";

echo"</table>";

echo"<br>";

$countMYP++;


} // end:: while

} // end:: howmuch


   else {

?>
<br>
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="tablea" align="center">

    <br>

    <font class="big"><b> <?php  GetUser($user_id); ?> hat noch keine Punkte auf Beiträge erhalten.</b></font>

    <br><br>
  
    </td>

  </tr>

</table>

<?php  }

} // end:: show posts

if ($show == "d")  {

?>


       <table cellpadding="4" cellspacing="1" class="tableinborder" width="<?php echo"$width";?>">
   
         <tr>
    
           <td class="catbg" align="left">


<b>Bonuspunktesystem :: Alle positiv bewerteten Beiträge und Unterlagen von <?php  GetUser($user_id); ?> im Überblick</b>

               </td></tr></table>

<br>
  <table cellspacing="0" cellpadding="3" width="<?php  echo"$width"; ?>" style="border:1px solid #000000;height:20px">
  <form action="index.php?do=showCredits" method="get"><tr>
  <td class="tableb" style="border-right:0;">
  Wähle hier aus, ob du die Beiträge oder Unterlagen sehen willst:
  </td><td class="tableb" align="right">

  <input name="do" value="showCredits" type="hidden">
  <input name="user_id" value="<?php  echo"$user_id"; ?>" type="hidden">

  <select onChange="this.form.submit();" name="show" style="width:150px">

  <option value="p"
  <?php  if ($show == p)  { echo" selected"; } ?>
  >Beiträge anzeigen</option>

  <option value="d"
  <?php  if ($show == d)  { echo" selected"; } ?>
  >Unterlagen anzeigen</option>

  </select>

  </td></tr>  </form></table>

<?php 


  $count_credP = 0;

  $qy_credP   = mysql_query("SELECT datei from $credits_tblname WHERE user = '$user_id' && datei != '0'");

  $howmuch = mysql_num_rows($qy_credP);

  while ($rw_credP = mysql_fetch_assoc($qy_credP))  {

         $Ay_credP[$count_credP] = $rw_credP[datei];

         $count_credP++;

  }


if ($count_credP > 0)  {


  $array_values = implode ("','", $Ay_credP);

  $qysres = mysql_query("SELECT COUNT( id ) AS check_rows from $database_tblname WHERE id IN ('$array_values') LIMIT 1");
 
  $qysrow = mysql_fetch_row( $qysres );

  $check_rows = $qysrow[ 0 ]; 

  include("navi_sides.php");

  if ($check_rows <= $break)  echo"<br>";

  $countMYP = "1";

      $query_database = mysql_query("SELECT * from $database_tblname WHERE id IN ('$array_values') ORDER by date DESC LIMIT ".(($page-1)*$break).",$break");

      include("./templates/database_top2.php");

          while ($row_database  = mysql_fetch_assoc($query_database))  { 


                 $credres = mysql_query("SELECT COUNT( id ) AS check_cred from $credits_tblname WHERE datei = '$row_database[id]' LIMIT 1");
 
                 $credrow = mysql_fetch_row( $credres );

                 $check_cred = $credrow[ 0 ]; 


                 $qy_cred = mysql_query("SELECT credits from $user_tblname WHERE UserID = '$row_database[user_id]'");

                 while ($rw_cred = mysql_fetch_assoc($qy_cred))  {

                        $creditnumber = $rw_cred[credits];

                 }

                 $this_date    =  date("d.m.Y",$row_database[date]); 

                 $query_thisuser      = mysql_query("SELECT UserName from $user_tblname WHERE UserID = '$row_database[user_id]'");
         
                 while ($row_thisuser  = mysql_fetch_assoc($query_thisuser))  {  

                        $thisUser = $row_thisuser[UserName];

                 }

          
                 $row_database[description] = str_replace("<br />", "", $row_database[description]);
                 $row_database[description] = str_replace("<", "&lt;", $row_database[description]);
                 $row_database[description] = str_replace(">", "&gt;", $row_database[description]);

                 $row_database[description] = nl2br($row_database[description]);

                 include("./templates/database.php");

          }

          include("./templates/close_table.php");

   }

   else {

?>
<br>
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="tablea" align="center">

    <br>

    <font class="big"><b><?php  GetUser($user_id); ?> hat noch keine Punkte auf Unterlagen erhalten.</b></font>

    <br><br>
  
    </td>

  </tr>

</table>

<?php  }

}

?>
