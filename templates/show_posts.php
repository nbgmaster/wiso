<?php  if ($countNoZ > 1)  {
        echo"<br>";
   }

   if ($do == "inbox" or $do == "outbox")  echo"<br>";

   if ($do == "search")  { ?>

<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

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

<?php  } ?>

<table width="<?php  echo"$width"; ?>" cellpadding="0" cellspacing="1" class="tableinborder">
               
  <tr>
  
    <td width="180" valign="top" class="tablea">

    <table cellpadding="8" cellspacing="0">

      <tr>

        <td class="tablea" align="left">

        <?php  if ($post_user_name != "Gast" && $post_user_name != "")  { ?>

        <a href="index.php?do=profile&user_id=<?php  echo"$post_user_id"; ?>">

        <?php  } if($post_user_name == "")  { ?>

        <font class="big"><b>User gelöscht</b></font>

        <?php  } else { ?>

        <font class="big"><b><?php  echo"$post_user_name"; ?></b></font>

        <?php  } 


if($post_user_name != "")  {  ?>


        <?php  if ($post_user_name != "Gast" && $post_user_name != "")  { ?> </a> <?php  } ?>

        <?php  if($post_user_name != "" && $post_user_name != "Gast")  { ?>

        <img src="images/templates/<?php  echo"$template/$gender_img"; ?>">

        <?php  } ?>

        <br>

        <?php  

        if ($post_user_firstname != "")  { echo"($post_user_firstname"; }
        if ($post_user_lastname != "")   { echo" $post_user_lastname"; }
        if ($post_user_firstname != "")  { echo")<br>"; }

        ?>

        <br>

        <?php  

        echo"$current_stars<br>$current_rank<br>";

        if ($post_user_id != "")  {

        if ($creditnumber > 10) $creditnumber = 10;      

        $percent_cred = $creditnumber * 10;

        if ($percent_cred == "0")  { $percent_cred = 2; } 

       if ($do == "search")  { $us_name = "$post_user_nameX"; } else  { $us_name = "$post_user_name"; }

if ($post_user_admin == 0)  {



echo"<br>";

        ?> <table cellspacing="0" cellpadding="0"><tr><td>

<?php  if ($curs == 0 && $tha_numb == 0)  { ?>

         <table width="80" cellspacing="0" cellpadding="0" onmouseover="return overlib('Der aktuelle Punktestand von <b><?php  echo"$us_name"; ?></b> beträgt: <b><?php  echo"$creditnumber"; ?></b> von 10 Punkten!</b><br><br>Gesamtpunktzahl: <b><?php echo"$pointstot";?></b><br><br>Anzahl positiver Bewertungen gesamt:<br>Beiträge: <b><?php  echo"$resultcreP"; ?></b>&nbsp;&nbsp;Unterlagen: <b><?php  echo"$resultcreD"; ?></b><br><br>Bedankungen erhalten: <b><?php echo"$tha_numb";?></b>');" onmouseout="return nd();">

<?php  } else { ?>

         <table width="80" cellspacing="0" cellpadding="0" style="cursor:pointer" onclick="location.href='index.php?do=showCredits&user_id=<?php echo"$post_user_id";?>&show=p';" onmouseover="return overlib('Der aktuelle Punktestand von <b><?php  echo"$us_name"; ?></b> beträgt: <b><?php  echo"$creditnumber"; ?></b> von 10 Punkten!</b><br><br>Gesamtpunktzahl: <b><?php echo"$pointstot";?></b><br><br>Anzahl positiver Bewertungen gesamt:<br>Beiträge: <b><?php  echo"$resultcreP"; ?></b>&nbsp;&nbsp;Unterlagen: <b><?php  echo"$resultcreD"; ?></b><br><br>Bedankungen erhalten: <b><?php echo"$tha_numb";?></b><br><br><i>(Mausklick auf Balken zur Detailansicht)</i>');" onmouseout="return nd();">
   
<?php  }  ?>


<tr>

         <td class="tbodygfxCredits">

         <?php  if ($percent_cred != "100")  { ?>

         <div class="gfxBar">

         <?php  } else { ?>

         <div class="gfxBarCredits">

         <?php  } ?>

         <div style="width: <?php  echo"$percent_cred%"; ?>"></div>
                                                
         </div>
                   
         </td></tr></table></td><td width="12"></td><td valign="top">

         <?php   if ($check_cred > 0)  { ?>

         <img src="images/templates/<?php  echo"$template"; ?>/hand_up.gif">

         <?php  } ?>

         </td></tr>

         </table>

         <?php   }  }   

         if ($user_wisostudent == 1)  { ?>

         <br>
        
            <u>Bachelorstudent:</u><br>
            <b>
            <?php  if ($user_studyt == "bwl")  { echo"Schwerpunkt BWL"; } ?> 
            <?php  if ($user_studyt == "vwl")  { echo"Schwerpunkt VWL"; } ?> 
            <?php  if ($user_studyt == "info")  { echo"Wirtschaftsinformatik"; } ?> 
            <?php  if ($user_studyt == "paed")  { echo"Schwerpunkt Pädagogik"; } ?> 
            <?php  if ($user_studyt == "int")  { echo"International Business"; } ?> 
            <?php  if ($user_studyt == "sozi")  { echo"Sozialökonomik"; } ?> 
            <?php  if ($user_studyt == "ing")  { echo"Wirtschaftsingenieurwesen"; } ?> 

            </b>


<?php  }     if ($user_wisostudent == 2)  { ?>

         <br>

            <u>Masterstudent:</u><br>
             <b>           
            <?php  if ($user_studyt == "m_ap")  { echo"Arbeitsmarkt u. Personal"; } ?> 
            <?php  if ($user_studyt == "m_eco")  { echo"MSc Economics"; } ?> 
            <?php  if ($user_studyt == "m_fact")  { echo"FACT"; } ?> 
            <?php  if ($user_studyt == "m_ibs")  { echo"MIBS"; } ?> 
            <?php  if ($user_studyt == "m_iis")  { echo"IIS"; } ?> 
            <?php  if ($user_studyt == "m_mgm")  { echo"Management"; } ?> 
            <?php  if ($user_studyt == "m_marketing")  { echo"Marketing"; } ?> 
            <?php  if ($user_studyt == "m_sozu")  { echo"Sozialökonomik"; } ?> 
            <?php  if ($user_studyt == "m_paed")  { echo"Wirtschaftspädagogik"; } ?> 
         
            </b>
            
            <?php  }

if ($user_wisostudent == 1 && $user_semester > 0 || $user_wisostudent == 2 && $user_semester > 0)  { ?> <span style="font-size:1px"><br></span> <?php  echo"<b>$user_semester. Semester</b><br>"; } 

         if ($user_wisostudent == 3)  echo"<br><b>WiSo Alumni</b><br>";




         if ($avatar != "")  { 

        echo"<br>$avatar<br>"; 

        } ?>

        <br>

        <table cellpadding="0" cellspacing="0">

          <tr>

            <td align="left">

            <b>Dabei seit:</b>

            <?php  if($post_user_name != "" && $post_user_name != "Gast")  { echo"$datum_reg"; } ?>

            </td>

          </tr>

          <tr>

            <td align="left">

            <b>Beiträge:</b> <?php  echo"$postnumbers_user"; ?>

            </td>

          </tr>

<!--tr>

<td align="left"><br><br><b>Bedankungen:</b> <div id="thanks_numbers_<?php echo"$row_posts[id]";?>" style="display:inline"><?php  echo"$tha_numb"; ?></div> </td>

</tr-->

        </table>

<?php  } ?>

        </td>

      </tr>

    </table>

    </td>

    <td class="tablea" valign="top">


    <a name="<?php  echo"".$row_posts["id"].""; ?>"></a>

    <table cellpadding="0" style="width:100%;border-bottom:1px solid <?php  echo"#$bordercolor"; ?>;" class="tableb">

      <tr>

        <td>

        <?php 

        if ($do == "search")  { if(strlen($topictitle) > 43) { $topictitle = substr($topictitle,0,40).'...'; } }

        else  { if(strlen($topictitle) > 43) {   $topictitle = substr($topictitle,0,40).'...'; } }

        echo"<b>$topictitle</b>"; ?>

        </td>

        <td align="right" valign="bottom" height="24">
         
        <?php 

        if ($do != "inbox" && $do != "outbox") {


        if ($granted_write == "1" && $f_status == "1" && $post_user_name != "")  {  ?>


        <a href="index.php?t=<?php  echo"$t&do=reply&q_id=".$row_posts["id"].""; ?>" onmouseover="<?php  echo"$img_name_quote"; ?>.src='images/templates/<?php  echo"$template"; ?>/quote_small_hover.gif';" onmouseout="<?php  echo"$img_name_quote"; ?>.src='images/templates/<?php  echo"$template"; ?>/quote_small.gif';">
 
        <img src="images/templates/<?php  echo"$template"; ?>/quote_small.gif" title="Beitrag zitieren" border="0" width="86" height="21" name="<?php  echo"$img_name_quote"; ?>"></a>

        </a>

        &nbsp;


        <?php  } ?>

        <?php  echo"$edit_post"; if ($edit_post != "")  { ?>

        <img src="images/templates/<?php  echo"$template"; ?>/edit_small.gif" title="Beitrag editieren" border="0" width="86" height="21" name="<?php  echo"$img_name_edit"; ?>">

        <?php  } echo"$edit_post2"; ?>

        &nbsp;

        <?php  echo"$del_post $del_post2 $del_post3 &nbsp;"; ?>

        <a href="#top"><img src="images/templates/<?php  echo"$template"; ?>/up2.gif" title="Nach oben" border="0"></a>

        &nbsp;

        <?php  } else {

        echo"$del_post $del_post2 $del_post3 &nbsp;";

        if ($do != "outbox")  { ?>

        <a href="index.php?do=newpm&user_id=<?php  echo"$post_user_id"; ?>&a_id=<?php  echo"$m_id"; ?>" onmouseover="imganswer.src='images/templates/<?php  echo"$template"; ?>/answer_hover.gif';" onmouseout="imganswer.src='images/templates/<?php  echo"$template"; ?>/answer.gif';">

        <img src="images/templates/<?php  echo"$template"; ?>/answer.gif" name="imganswer" title="Antworten" border="0"></a>


        <?php  }} ?>

        </td>

      </tr>

    </table>

    <table cellpadding="2" style="width:100%;">

      <tr>

        <td align="left"><font class="big">

        <?php 

        echo"<span style=\"line-height:20px;\">$main_message</span>";

        echo"$attachment";

        ?>

        </font>

        </td>

      </tr>

      <tr>

        <td valign="bottom" align="left">

        <br>

        <?php   if ($user_signature != "" && $sig_disable == "0")  {  ?>

        <table cellspacing="0" cellpadding="0" style="width:100%;">

          <tr>
                                 
            <td style="line-height:15px;">_______________________<br>

            <?php  echo"$user_signature"; ?>

            </td>

          </tr>

        </table>

        <?php  }  if($row_posts["edittime"] != "" && $row_posts["edittime"] != "0") { ?>

        <br><br><i><font class="small">zuletzt editiert von <?php  echo"$edit_user"; ?> am <?php  echo"$edit_post_date, $edit_post_time"; ?> Uhr</font></i>

        <?php  }

        if ($user_signature != "" && $sig_disable == "0")  {

        echo"<br><br>"; }

        ?>

        </td>

       </tr>

       <tr>

       <td>

       <center>

       <table cellpadding="4" width="100%">

       <tr><td>


        </td>

        </tr>

        </table>

       </center>

       </div>

       </td>

      </tr>

    </table>

    </td>

  </tr>

  <tr>

    <td class="tableb" align="left" style="height:25px;">
   <table cellspacing="0" cellpadding="0"><tr><td width="3"></td><td width="20" align="center">

<?php  if ($userdata_admin == "1" && $post_user_admin == "0" && $check_cred == 0 && $row_posts[user_id] != "0") {  ?>

<a href="javascript:popthis2(300,200,'includes/rate.php?p_id=<?php echo"$row_posts[id]&user_id=$post_user_id&t=$t&page=$page";?>','window');" title="Diesen Beitrag als positiv bewerten"> 

<?php  } ?>

<img src="images/templates/<?php  echo"$template"; ?>/<?php  echo"$picon_img"; ?>" border="0">

<?php  if ($userdata_admin == "1" && $check_cred == 0 && $row_posts[user_id] != "0" && $creditnumber != "10") { ?></a>
<?php  } ?>
</td><td> <?php  echo"$post_date, $post_time"; ?> Uhr
</td></tr></table>
    </td>

    <td class="tablea" align="left">

<?php  if($post_user_name != "")  { ?>


   <table cellspacing="0" cellpadding="0" style="width:100%"><tr><td>

    &nbsp; <?php  if ($user_studi != "" && $userdata_id != "")  { ?>

    <?php  echo"$user_studi"; ?><img src="images/templates/<?php  echo"$template/"; ?>/studivz.gif" name="<?php  echo"$img_name_studivz"; ?>" border="0"><?php  echo"$user_studi2"; ?>

    &nbsp;  <?php  }  if ($userdata_id != "")  { ?>

    <a href="index.php?do=newpm&user_id=<?php  echo"$post_user_id"; ?>" onmouseover="<?php  echo"$img_name_pn"; ?>.src='images/templates/<?php  echo"$template"; ?>/pn_hover.gif';" onmouseout="<?php  echo"$img_name_pn"; ?>.src='images/templates/<?php  echo"$template"; ?>/pn.gif';">
      
    <?php  } ?><img title="PN an <?php  echo"$post_user_name2"; ?> schreiben" src="images/templates/<?php  echo"$template"; ?>/pn.gif" name="<?php  echo"$img_name_pn"; ?>" border="0"><?php  if ($userdata_id != "")  { ?></a><?php  } ?>
          
    &nbsp; <?php  if ($userdata_id != "")  { ?>
            
    <a href="index.php?do=search&user_id=<?php  echo"$post_user_id"; ?>" onmouseover="<?php  echo"$img_name_search"; ?>.src='images/templates/<?php  echo"$template"; ?>/search_hover.gif';" onmouseout="<?php  echo"$img_name_search"; ?>.src='images/templates/<?php  echo"$template"; ?>/search.gif';">

    <?php  } ?><img src="images/templates/<?php  echo"$template"; ?>/search.gif" name="<?php  echo"$img_name_search"; ?>" title="Beiträge von <?php  echo"$post_user_name2"; ?> suchen" border="0"><?php  if ($userdata_id != "")  { ?></a><?php  } ?>

    &nbsp;

    <?php   if ($thanksS == 0 && $do != "inbox" && $do != "outbox" && $userdata_id != "" && $userdata_id != "68")  { ?>

    <a href="javascript:thanks(<?php echo"$row_posts[id]";?>)" onmouseover="<?php  echo"$img_name_thanks"; ?>.src='images/templates/<?php  echo"$template"; ?>/thanks_hover.gif';" onmouseout="<?php  echo"$img_name_thanks"; ?>.src='images/templates/<?php  echo"$template"; ?>/thanks.gif';">

    <img src="images/templates/<?php  echo"$template"; ?>/thanks.gif" id="thanks_<?php echo"$row_posts[id]";?>" name="<?php  echo"$img_name_thanks"; ?>" title="Du fandest diesen Beitrag hilfreich? Dann bedanke dich!" border="0"></a>


<!--input type="button" id="thanks_<?php echo"$row_posts[id]";?>" onclick="javascript:thanks(<?php echo"$row_posts[id]";?>)" value="Danke"-->

    <?php  } ?>

    </td>

    <td align="right" class="tablea">

    <img src="images/templates/<?php  echo"$template/$user_status"; ?>">&nbsp;

    </td></tr></table>

<?php  }    $Ay_end = count($Ay_names);   ?>

    </td>

  </tr>

  <tr>

  <td colspan="2" class="tableb">

  <?php  if ($Ay_end > 0)  { ?>

  <div id="thanks_users_<?php echo"$row_posts[id]";?>" style="padding:7px;text-align:left;">

  <?php  } else { ?>

   <div id="thanks_users_<?php echo"$row_posts[id]";?>">

    <?php  }

     if ($Ay_end > 0)  {  ?>

        <b>Folgende User fanden diesen Beitrag hilfreich:</b>

       <?php 

                   $Ay_cou = 0;

                   foreach ($Ay_names as $lookup)  {

                   $Ay_cou++;

                   echo"$lookup";

                   if($Ay_cou != $Ay_end)  { echo", "; }

                   }

     } ?>

  </div>

  </td></tr>

</table>

