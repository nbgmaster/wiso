<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="catbg" width="50%" align="left">

    <a class="catbg" href="index.php?do=members"><b>Mitglieder</b></a>
 
    &nbsp;<b>:: Profil von <?php  echo"".$row_user["UserName"].""; ?></b>

    </td>

  </tr>

</table>  

<br> 

<!-- Main Frame -->

       <table cellpadding="0" cellspacing="1" width="<?php  echo"$width"; ?>">
   
         <tr>          

<td align="center">

       <table cellpadding="0" cellspacing="1" width="100%">
   
         <tr>          

      <!-- Cell 1:: User --> 


      <td width="225" valign="top" align="center" style="height:100%;">


       <table cellpadding="4" cellspacing="1" class="tableinborder" width="200">
   
         <tr>
    
           <td class="cellbg" align="center">


<b>Userfoto / Stats</b>

               </td></tr><tr>

           <td class="tableb" style="height:100%;" align="center">

<table><tr>

<td align="left">

           <font class="mini"><br></font>

           <a href="index.php?do=profile&user_id=<?php  echo"".$row_user["UserID"].""; ?>"><font class="big"><b><?php  echo"".$row_user["UserName"].""; ?></b></font></a>

           <img src="images/templates/<?php  echo"$template/$gender_img"; ?>">

           <br>

        <?php   if($row_user[admin] == "1")  { $post_user_admin = "1"; } else { $post_user_admin = "0"; } 

        if ($row_user[firstname] != "")  { echo"($row_user[firstname]"; }
        if ($row_user[lastname] != "")   { echo" $row_user[lastname]"; }
        if ($row_user[firstname] != "")  { echo")<br>"; }

        ?>

<br>

           <?php  include("user_rank.php"); echo"$current_stars<br>$current_rank<br>"; 





         $qy_cred = mysql_query("SELECT credits from $user_tblname WHERE UserID = '$row_user[UserID]'");

         while ($rw_cred = mysql_fetch_assoc($qy_cred))  {

                $creditnumber = $rw_cred[credits];

         }

        if ($creditnumber > 10) $creditnumber = 10;

        $percent_cred = $creditnumber * 10;

        if ($percent_cred == "0")  { $percent_cred = 2; }



  $crenres = mysql_query("SELECT COUNT( id ) AS resultcreD from $credits_tblname WHERE user = '$row_user[UserID]' && post = '0' LIMIT 1");

  $crenrow = mysql_fetch_row( $crenres );

  $resultcreD = $crenrow[ 0 ];

  $crenres2 = mysql_query("SELECT COUNT( id ) AS resultcreP from $credits_tblname WHERE user = '$row_user[UserID]' && datei = '0' LIMIT 1");

  $crenrow2 = mysql_fetch_row( $crenres2 );

  $resultcreP = $crenrow2[ 0 ];

  $curs = $resultcreD + $resultcreP;

if ($row_user[admin] == 0)  {

echo"<br>";

if ($curs == 0)  { ?>

         <table width="80" cellspacing="0" cellpadding="0" onmouseover="return overlib('Der aktuelle Punktestand von <b><?php  echo"".$row_user["UserName"].""; ?></b> betr‰gt:<br> <?php  echo"$creditnumber"; ?> von 10 Punkten!</b><br><br>Gesamtpunktzahl: <b><?php echo"$pointstot";?></b><br><br>Anzahl positiver Bewertungen gesamt:<br>Beitr‰ge: <b><?php  echo"$resultcreP"; ?></b>&nbsp;&nbsp;Unterlagen: <b><?php  echo"$resultcreD"; ?></b><br><br>Bedankungen erhalten: <b><?php echo"$tha_numb";?></b>');" onmouseout="return nd();"><tr>
     
<?php  } else { ?>

         <table width="80" cellspacing="0" cellpadding="0" style="cursor:pointer" onclick="location.href='index.php?do=showCredits&user_id=<?php echo"$row_user[UserID]";?>&show=p';" onmouseover="return overlib('Der aktuelle Punktestand von <b><?php  echo"".$row_user["UserName"].""; ?></b> betr‰gt:<br> <?php  echo"$creditnumber"; ?> von 10 Punkten!</b><br><br>Gesamtpunktzahl: <b><?php echo"$pointstot";?></b><br><br>Anzahl positiver Bewertungen gesamt:<br>Beitr‰ge: <b><?php  echo"$resultcreP"; ?></b>&nbsp;&nbsp;Unterlagen: <b><?php  echo"$resultcreD"; ?></b><br><br>Bedankungen erhalten: <b><?php echo"$tha_numb";?></b><br><br><i>(Mausklick auf Balken zur Detailansicht)</i>');" onmouseout="return nd();"><tr>
   
<?php  } ?>

         <td class="tbodygfxCredits2">

         <?php  if ($percent_cred != "100")  { ?>

         <div class="gfxBar">

         <?php  } else { ?>

         <div class="gfxBarCredits">

         <?php  } ?>

         <div style="width: <?php  echo"$percent_cred%"; ?>"></div>
                                                
         </div>
                   
         </td></tr>

         </table>



<?php   }    if ($row_user[wisostudent] == 1)  {?>

         <br>
        
            <u>Bachelorstudent:</u><br>
            <b>
            <?php  if ($row_user[study] == "bwl")  { echo"Schwerpunkt BWL"; } ?> 
            <?php  if ($row_user[study] == "vwl")  { echo"Schwerpunkt VWL"; } ?> 
            <?php  if ($row_user[study] == "info")  { echo"Wirtschaftsinformatik"; } ?> 
            <?php  if ($row_user[study] == "paed")  { echo"Schwerpunkt P‰dagogik"; } ?> 
            <?php  if ($row_user[study] == "int")  { echo"International Business"; } ?> 
            <?php  if ($row_user[study] == "sozi")  { echo"Sozialˆkonomik"; } ?> 
            <?php  if ($row_user[study] == "ing")  { echo"Wirtschaftsingenieurwesen"; } ?> 

            </b>
<br>

<?php  }     if ($row_user[wisostudent] == 2)  { ?>

         <br>

            <u>Masterstudent:</u><br>
             <b>           
            <?php  if ($row_user[study] == "m_ap")  { echo"Arbeitsmarkt u. Personal"; } ?> 
            <?php  if ($row_user[study] == "m_eco")  { echo"MSc Economics"; } ?> 
            <?php  if ($row_user[study] == "m_fact")  { echo"FACT"; } ?> 
            <?php  if ($row_user[study] == "m_ibs")  { echo"MIBS"; } ?> 
            <?php  if ($row_user[study] == "m_iis")  { echo"IIS"; } ?> 
            <?php  if ($row_user[study] == "m_mgm")  { echo"Management"; } ?> 
            <?php  if ($row_user[study] == "m_marketing")  { echo"Marketing"; } ?> 
            <?php  if ($row_user[study] == "m_sozu")  { echo"Sozialˆkonomik"; } ?> 
            <?php  if ($row_user[study] == "m_paed")  { echo"Wirtschaftsp‰dagogik"; } ?> 
         
            </b>
            
            <?php  }

if ($row_user[wisostudent] == 1 && $row_user[semester] > 0 || $row_user[wisostudent] == 2 && $row_user[semester] > 0)  { echo"<b>$row_user[semester]. Semester</b><br>"; }

         if ($row_user[wisostudent] == 3)  echo"<br><b>WiSo Alumni</b><br>";




            if ($avatar != "")  { 

           echo"<br>$avatar<br>"; 

           } ?>

           <br>

           <table>

             <tr>

               <td align="left">

               <b>Dabei seit:</b> <?php  echo"$user_regdate"; ?>

               </td>
 
             </tr>

             <tr>

               <td align="left">

               <b>Wohnort:</b>&nbsp;&nbsp; 

               <?php   if($row_user["place"] == "") { echo"keine Angabe"; } else { echo"".$row_user["place"].""; } ?>

               </td>

             </tr>

             <tr>

               <td align="left">

               <b>Beitr‰ge:</b>&nbsp;&nbsp; <?php  echo"".$row_user["postnumbers"]."<br><br><center> ($user_postsperday"; ?> Beitr‰ge pro Tag)</center>

               </td>

             </tr>

             <tr>

               <td align="center">

<br>
               <img src="images/templates/<?php  echo"$template/$user_status"; ?>">


               </td>

             </tr>

           </table> </td></tr></table>

       
           </td>

         </tr></table>

<br>



       </td>

       <!-- Cell 2:: First Details -->

       <td valign="top" style="height:100%;" align="center">


       <table cellpadding="0" cellspacing="0" class="tableinborder" width="520">
   
         <tr>
    
           <td>
 
           <table cellspacing="1" cellpadding="2" style="width:100%;" class="tableinborder">

             <tr>

               <td class="cellbg" height="20" align="left">

               &nbsp; <b>Allgemeines</b>

               </td>

             </tr>

             <tr>

               <td class="tablea">

               <table cellpadding="6" cellspacing="1" class="tableinborder" width="100%">

                 <tr>

                   <td class="tableb" width="150" align="left">

                   
                   <b>zuletzt online</b>

                   </td>
        
                   <td class="tablea" align="left">

                   <?php    if($row_user["hide_user"] == "1" && $userdata_admin != "1") { echo"nicht sichtbar"; } else { 

                   if ($row_user["last_online_time"] != "01.01.1970 01:00")  {  

                       echo"am ".$row_user["last_online_time"]." Uhr"; 

                   }

                   else  {  echo"noch keine Onlinezeit vorhanden"; }

                   } ?>

                   </td>

                 </tr>

                 <tr>

                   <td class="tablea" align="left">

                   
                   <b>Vorname</b>

                   </td>

                   <td class="tableb" align="left">

                   <?php  if($row_user["firstname"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["firstname"]."";  }  ?>

                   </td>

                 </tr>

                 <tr>

                   <td class="tableb" align="left">

                   
                   <b>Nachname</b>

                   </td>

                   <td class="tablea" align="left">

                   <?php  if($row_user["lastname"] == "")  { echo"keine Angabe"; } else { echo"".$row_user[lastname].""; }  ?>

                   </td>

                 </tr>

                 <tr>
 
                   <td class="tablea" align="left">

                   
                   <b>Geburtstag</b>

                   </td>
           
                   <td class="tableb" align="left">

                    <?php  

                    if ($row_user["birthday"] == "" or $row_user["birthmonth"] == "" or $row_user["birthyear"] == "" or $row_user["birthday"] == "0" or $row_user["birthmonth"] == "0" or $row_user["birthyear"] == "0")  { 

                        echo"keine Angabe";

                    } 

                    else  {  

                        echo"".$row_user["birthday"].""; ?>.<?php  echo"".$row_user["birthmonth"].""; ?>.<?php  echo"".$row_user["birthyear"].""; }

                   ?>

                   </td>

                </tr>

                 <tr>

                   <td class="tableb" align="left">

                   
                   <b>Herkunft</b>

                   </td>

                   <td class="tablea" align="left">

                   <?php  if($row_user["hometown"] == "")  { echo"keine Angabe"; } else { echo"".$row_user[hometown].""; }  ?>

                   </td>

                 </tr>

     <tr>

                   <td class="tablea" width="150" align="left">

            
            <b>Nebenjob</b>

            </td>
 
            <td class="tableb" align="left">

            <?php  if($row_user["job"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["job"].""; } ?>

            </td>

          </tr>


         <tr>
 
                   <td class="tableb" width="150" align="left">

           
           <b>Hobbys & Interessen</b>

           </td>

            <td class="tablea" align="left">

            <?php  if($row_user["hobbys"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["hobbys"].""; } ?>

            </td>


         </tr>


             </table>

             </td>

         </tr>

      </table>

      </td>

    </tr>

  </table>
  
<br>

       <table cellpadding="0" cellspacing="0" class="tableinborder" width="520">
   
         <tr>
    
           <td>
 
           <table cellspacing="1" cellpadding="2" style="width:100%;" class="tableinborder">

             <tr>

               <td class="cellbg" height="20" align="left">

               &nbsp; <b>Kontakt</b>

               </td>

             </tr>

             <tr>

               <td class="tablea" align="left">

               <table cellpadding="6" cellspacing="1" class="tableinborder" width="100%">


          <tr>

                   <td class="tableb" width="150" align="left">


        <table cellspacing="0" cellpadding="0"><tr><td>

         <img src="images/templates/<?php echo"$template";?>/studivz2.gif">&nbsp;

         </td><td>

         <span style="font-size : <?php  echo"$fontsize_header"; ?>px;"><b>Mein StudiVZ</b></span>

         </td></tr></table>

            </td>
 
            <td class="tablea" align="left">

            <?php  if($row_user["studivz"] == "")  { echo"keine Angabe"; } else { echo"$user_studi<u>$row_user[studivz]</u></a>"; } ?>

            </td>

          </tr>


          <tr>

            <td class="tablea" align="left">

            
            <b>Homepage</b>

            </td>

            <td class="tableb" align="left">

            <?php  if($row_user["homepage"] == "")  { echo"keine Angabe"; } else { 

            if (substr($row_user["homepage"], 0, 7) == "http://")  {
   
                echo"<a href=\"".$row_user["homepage"]."\" target=\"_blank\">";
  
            }

            else  {  

                echo"<a href=\"http://".$row_user["homepage"]."\"  target=\"_blank\">";

            }  echo"<u>".$row_user["homepage"]."</u></a>"; }  ?>

            </td>

          </tr>

          <tr>

            <td class="tableb" align="left">

            
            <b>ICQ</b>

            </td>

            <td class="tablea" align="left">

            <?php  if($row_user["icq"] == "" or $row_user["icq"] == "0")  { echo"keine Angabe"; } else { echo"".$row_user["icq"].""; } ?>

            </td>

          </tr>


                 <tr>

                   <td class="tablea" align="left">

                   
                   <b>Straﬂe</b>

                   </td>

                   <td class="tableb" align="left">

                   <?php  if($row_user["street"] == "")  { echo"keine Angabe"; } else { echo"".$row_user[street].""; }  ?>

                   </td>

                 </tr>

                 <tr>

                   <td class="tableb" align="left">

                   
                   <b>Telefon</b>

                   </td>

                   <td class="tablea" align="left">

                   <?php  if($row_user["telefon"] == "")  { echo"keine Angabe"; } else { echo"".$row_user[telefon].""; }  ?>

                   </td>

                 </tr>

                 <tr>

                   <td class="tablea" align="left">

                   
                   <b>Handy</b>

                   </td>

                   <td class="tableb" align="left">

                   <?php  if($row_user["handy"] == "")  { echo"keine Angabe"; } else { echo"".$row_user[handy].""; }  ?>

                   </td>

                 </tr>

             </table>

             </td>

         </tr>

      </table>

      </td>

    </tr>

  </table>

<br>

<table cellpadding="3" cellspacing="1" class="tableinborder" width="520">
               
  <tr>

    <td class="tableb" align="center">

    <?php  if ($row_user[formmailer] == "1") { ?>

    <a href="index.php?do=email&user_id=<?php  echo"$row_user[UserID]"; ?>" onmouseover="imgemail.src='images/templates/<?php  echo"$template"; ?>/email_hover.gif';" onmouseout="imgemail.src='images/templates/<?php  echo"$template"; ?>/email.gif';">
      
    <img src="images/templates/<?php  echo"$template"; ?>/email.gif" name="imgemail" title="Email schreiben" border="0"></a>

    &nbsp; 

    <?php  } ?>

    <a href="index.php?do=newpm&user_id=<?php  echo"$row_user[UserID]"; ?>" onmouseover="imgpn.src='images/templates/<?php  echo"$template"; ?>/pn_hover.gif';" onmouseout="imgpn.src='images/templates/<?php  echo"$template"; ?>/pn.gif';">
      
    <img src="images/templates/<?php  echo"$template"; ?>/pn.gif" name="imgpn" title="PN schreiben" border="0"></a>
     
    <?php  if ($user_hp != "")  { ?>
      
    &nbsp;
       
    <?php  echo"$user_hp"; ?><img src="images/templates/<?php  echo"$template"; ?>/www.gif" name="imgwww" title="Homepage von <?php  echo"$row_user[UserName]"; ?> besuchen" border="0"><?php  echo"$user_hp2"; ?>
    
    <?php  } ?>
    
    &nbsp;     
           
    <a href="index.php?do=search&user_id=<?php  echo"$row_user[UserID]"; ?>" onmouseover="imgsearch.src='images/templates/<?php  echo"$template"; ?>/search_hover.gif';" onmouseout="imgsearch.src='images/templates/<?php  echo"$template"; ?>/search.gif';">
      
    <img src="images/templates/<?php  echo"$template"; ?>/search.gif" name="imgsearch" title="Beitr‰ge suchen" border="0"></a>
         
    &nbsp;           
         
    <a href="index.php?do=addbuddy&user_id=<?php  echo"$row_user[UserID]"; ?>" onmouseover="imghomie.src='images/templates/<?php  echo"$template"; ?>/buddy_hover.gif';" onmouseout="imghomie.src='images/templates/<?php  echo"$template"; ?>/buddy.gif';">

    <img src="images/templates/<?php  echo"$template"; ?>/buddy.gif" name="imghomie" title="Zur Freundesliste hinzuf¸gen" border="0"></a>

    </td>

  </tr>

</table>


 

        </td>

      </tr>

    </table>        </td>

      </tr>

    </table>

<?php 

  $qy_myP = mysql_query("SELECT id, f, t, message, attachment, dateiname, time from $posts_tblname WHERE user_id = '$user_id' ORDER by time DESC LIMIT 5");
$howmuch = mysql_num_rows($qy_myP);


if ($howmuch > 0)  { 

?>

<br>

       <table cellpadding="4" cellspacing="1" class="tableinborder" width="748">
   
         <tr>
    
           <td class="catbg" align="left">


<b>Die letzten 5 Beitr‰ge von <?php  echo"".$row_user["UserName"].""; ?></b>

               </td></tr></table>

<br>

<?php 

$countMYP = "1";
        
  while ($rw_myP = mysql_fetch_assoc($qy_myP))  {

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

                        $attachment = "<br><br> <img style=\"width:50px\" src=\"attachments/$rw_myP[attachment]\" alt=\"[Bild nicht mehr vorhanden]\" title=\"\"> <a href=\"attachments/$rw_myP[attachment]\" target=\"_blank\"> <img src=\"images/templates/$template/zoom.gif\" title=\"Volle Bildgrˆﬂe anzeigen\" border=\"0\"> </a>";

                     }  else  {

                        $attachment = "<br><br> <img style=\"max-width: $max_w;width: expression(this.width > 560 ? 560: true);\" src=\"attachments/$rw_myP[attachment]\" alt=\"[Bild nicht mehr vorhanden]\" title=\"\"> <a href=\"attachments/$rw_myP[attachment]\" target=\"_blank\"> <img src=\"images/templates/$template/zoom.gif\" title=\"Volle Bildgrˆﬂe anzeigen\" border=\"0\"> </a>";

                     }

                 }

                 else  {

                         $attachment = "<i>Angeh‰ngtes Bild konnte nicht gefunden werden</i>";

                 }

             }

         }

         else  {

             $attachment = "";

         }

?>


<table cellpadding="4" cellspacing="1" class="tableinborder" width="748">

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

<table class="tableinborder" cellspacing="0" cellpadding="0" width="748">
<?php  

echo"<tr>";


  echo"<td class=\"tableb\" style=\"padding:7px;border-left:1px solid #000000;border-right:1px solid #000000\">"; 

echo"<span class=\"big\" style=\"line-height:20px\">$str</span>$attachment</td></tr><tr><td class=\"tablea\">";

?><table cellspacing="1" cellpadding="3" width="100%" class="tableinborder"><tr>

<?php  if ($output == "1")  { ?>

<td width="50%" class="tablea" onclick="location.href='index.php?t=<?php  echo"$topicid#$rw_myP[id]"; ?>';" onmouseover="this.className='mouseout';" onmouseout="this.className='mouseout2';">

<?php  } else { ?>

<td width="50%" class="tablea" onclick="location.href='index.php?t=<?php  echo"$topicid&page=$output#$rw_myP[id]"; ?>';" onmouseover="this.className='mouseout';" onmouseout="this.className='mouseout2';">

<?php  } ?>

<img src="images/templates/<?php echo"$template";?>/arrow_r.gif"> Zu diesem Beitrag navigieren

</td><td width="50%" align="right" class="tablea">verfasst am: <?php  echo"$post_date, $post_time"; ?> Uhr</td></tr></table><?php 

echo"</td></tr></table>";

echo"<br>";

$countMYP++;

 } 


} // end:: howmuch

?>
