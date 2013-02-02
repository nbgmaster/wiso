<table class="tableinborder_top" cellspacing="0" cellpadding="0" width="<?php  echo"$width2"; ?>">

 <tr>

  <td align="center" valign="top">

 <?php  

  if ($header_titles == "1")  {  ?>

  <table cellpadding="5" cellspacing="1" border="0" class="tableinborder" width="100%">
   
    <tr>
    
      <td class="catbg" align="center">

      <b><font class="big"><?php  echo"$board_title"; ?></font></b>

      </td>

      <td class="catbg" align="center">

      <b><font class="big"><?php  echo"$board_description"; ?></font></b>

      </td>

   </tr>
  
  </table>

  <?php  } 

  if ($banner == "1") { ?>

  <table cellpadding="0" cellspacing="0" border="0" width="100%">
   
    <tr>

          <td valign="top" align="center" class="banner">

          <img src="images/templates/<?php  echo"$template"; ?>/banner.jpg">

          </td>

        </tr>

      </table>

  <?php   } ?>

<table cellspacing="0" cellpadding="0" style="width:798px;height:28px;  background  : #fff url(./images/templates/<?php  echo"$template"; ?>/hoverbg.gif) repeat;"><tr><td valign="top">
<ul id="head">


<?php  if ($do == "usercp")  { $li1 = "no"; ?>

<li class="li" onclick="location.href='index.php';"><img src="./images/templates/<?php  echo"$template"; ?>/h_home.png" border="0" style="vertical-align:middle"> Forum</li>
<li class="active" onclick="location.href='index.php?do=usercp';"><img src="./images/templates/<?php  echo"$template"; ?>/h_usercp.png" border="0" style="vertical-align:middle"> Profil</li>
<li class="li" onclick="location.href='index.php?do=members';"><img src="./images/templates/<?php  echo"$template"; ?>/h_members.png" border="0" style="vertical-align:middle"> Mitglieder</li>
<li class="li" onclick="location.href='index.php?do=inbox';"><img src="./images/templates/<?php  echo"$template"; ?>/h_pm.png" border="0" style="vertical-align:middle"> Nachrichten</li>
<li class="li" onclick="location.href='index.php?do=market';"><img src="./images/templates/<?php  echo"$template"; ?>/h_boerse.png" border="0" style="vertical-align:middle"> B&ouml;rse</li>
<li class="li" onclick="location.href='index.php?do=database';"><img src="./images/templates/<?php  echo"$template"; ?>/h_data.png" border="0" style="vertical-align:middle"> Unterlagen</li>
<li class="li" onclick="location.href='index.php?do=links';"><img src="./images/templates/<?php  echo"$template"; ?>/h_forum.png" border="0" style="vertical-align:middle"> Links</li>
<li class="li" onclick="location.href='index.php?do=search';"><img src="./images/templates/<?php  echo"$template"; ?>/h_search.png" border="0" style="vertical-align:middle"> Suche</li>
<li class="li2" onclick="location.href='index.php?do=team';">



<?php  if ($browser == "Safari")  { ?>&nbsp;<?php }?><img src="./images/templates/<?php  echo"$template"; ?>/h_faq.png" border="0" style="vertical-align:middle"> Team

<?php  if ($browser == "Safari")  { ?><div style="width:74px;">&nbsp;</div><?php }?>


</li>
<?php  } if ($do == "members" or $do == "profile")  { $li1 = "no"; ?>

<li class="li" onclick="location.href='index.php';"><img src="./images/templates/<?php  echo"$template"; ?>/h_home.png" border="0" style="vertical-align:middle"> Forum</li>
<li class="li" onclick="location.href='index.php?do=usercp';"><img src="./images/templates/<?php  echo"$template"; ?>/h_usercp.png" border="0" style="vertical-align:middle"> Profil</li>
<li class="active" onclick="location.href='index.php?do=members';"><img src="./images/templates/<?php  echo"$template"; ?>/h_members.png" border="0" style="vertical-align:middle"> Mitglieder</li>
<li class="li" onclick="location.href='index.php?do=inbox';"><img src="./images/templates/<?php  echo"$template"; ?>/h_pm.png" border="0" style="vertical-align:middle"> Nachrichten</li>
<li class="li" onclick="location.href='index.php?do=market';"><img src="./images/templates/<?php  echo"$template"; ?>/h_boerse.png" border="0" style="vertical-align:middle"> B&ouml;rse</li>
<li class="li" onclick="location.href='index.php?do=database';"><img src="./images/templates/<?php  echo"$template"; ?>/h_data.png" border="0" style="vertical-align:middle"> Unterlagen</li>
<li class="li" onclick="location.href='index.php?do=links';"><img src="./images/templates/<?php  echo"$template"; ?>/h_forum.png" border="0" style="vertical-align:middle"> Links</li>
<li class="li" onclick="location.href='index.php?do=search';"><img src="./images/templates/<?php  echo"$template"; ?>/h_search.png" border="0" style="vertical-align:middle"> Suche</li>
<li class="li2" onclick="location.href='index.php?do=team';">



<?php  if ($browser == "Safari")  { ?>&nbsp;<?php }?><img src="./images/templates/<?php  echo"$template"; ?>/h_faq.png" border="0" style="vertical-align:middle"> Team

<?php  if ($browser == "Safari")  { ?><div style="width:74px;">&nbsp;</div><?php }?>


</li>
<?php  } if ($do == "inbox" or $do == "outbox" or $do == "newpm") { $li1 = "no"; ?>

<li class="li" onclick="location.href='index.php';"><img src="./images/templates/<?php  echo"$template"; ?>/h_home.png" border="0" style="vertical-align:middle"> Forum</li>
<li class="li" onclick="location.href='index.php?do=usercp';"><img src="./images/templates/<?php  echo"$template"; ?>/h_usercp.png" border="0" style="vertical-align:middle"> Profil</li>
<li class="li" onclick="location.href='index.php?do=members';"><img src="./images/templates/<?php  echo"$template"; ?>/h_members.png" border="0" style="vertical-align:middle"> Mitglieder</li>
<li class="active" onclick="location.href='index.php?do=inbox';"><img src="./images/templates/<?php  echo"$template"; ?>/h_pm.png" border="0" style="vertical-align:middle"> Nachrichten</li>
<li class="li" onclick="location.href='index.php?do=market';"><img src="./images/templates/<?php  echo"$template"; ?>/h_boerse.png" border="0" style="vertical-align:middle"> B&ouml;rse</li>
<li class="li" onclick="location.href='index.php?do=database';"><img src="./images/templates/<?php  echo"$template"; ?>/h_data.png" border="0" style="vertical-align:middle"> Unterlagen</li>
<li class="li" onclick="location.href='index.php?do=links';"><img src="./images/templates/<?php  echo"$template"; ?>/h_forum.png" border="0" style="vertical-align:middle"> Links</li>
<li class="li" onclick="location.href='index.php?do=search';"><img src="./images/templates/<?php  echo"$template"; ?>/h_search.png" border="0" style="vertical-align:middle"> Suche</li>
<li class="li2" onclick="location.href='index.php?do=team';">



<?php  if ($browser == "Safari")  { ?>&nbsp;<?php }?><img src="./images/templates/<?php  echo"$template"; ?>/h_faq.png" border="0" style="vertical-align:middle"> Team

<?php  if ($browser == "Safari")  { ?><div style="width:74px;">&nbsp;</div><?php }?>


</li>

<?php  } if ($do == "search")  { $li1 = "no"; ?>

<li class="li" onclick="location.href='index.php';"><img src="./images/templates/<?php  echo"$template"; ?>/h_home.png" border="0" style="vertical-align:middle"> Forum</li>
<li class="li" onclick="location.href='index.php?do=usercp';"><img src="./images/templates/<?php  echo"$template"; ?>/h_usercp.png" border="0" style="vertical-align:middle"> Profil</li>
<li class="li" onclick="location.href='index.php?do=members';"><img src="./images/templates/<?php  echo"$template"; ?>/h_members.png" border="0" style="vertical-align:middle"> Mitglieder</li>
<li class="li" onclick="location.href='index.php?do=inbox';"><img src="./images/templates/<?php  echo"$template"; ?>/h_pm.png" border="0" style="vertical-align:middle"> Nachrichten</li>
<li class="li" onclick="location.href='index.php?do=market';"><img src="./images/templates/<?php  echo"$template"; ?>/h_boerse.png" border="0" style="vertical-align:middle"> B&ouml;rse</li>
<li class="li" onclick="location.href='index.php?do=database';"><img src="./images/templates/<?php  echo"$template"; ?>/h_data.png" border="0" style="vertical-align:middle"> Unterlagen</li>
<li class="li" onclick="location.href='index.php?do=links';"><img src="./images/templates/<?php  echo"$template"; ?>/h_forum.png" border="0" style="vertical-align:middle"> Links</li>
<li class="active" onclick="location.href='index.php?do=search';"><img src="./images/templates/<?php  echo"$template"; ?>/h_search.png" border="0" style="vertical-align:middle"> Suche</li>
<li class="li2" onclick="location.href='index.php?do=team';">



<?php  if ($browser == "Safari")  { ?>&nbsp;<?php }?><img src="./images/templates/<?php  echo"$template"; ?>/h_faq.png" border="0" style="vertical-align:middle"> Team

<?php  if ($browser == "Safari")  { ?><div style="width:74px;">&nbsp;</div><?php }?>


</li>

<?php  } if ($do == "market")  { $li1 = "no"; ?>

<li class="li" onclick="location.href='index.php';"><img src="./images/templates/<?php  echo"$template"; ?>/h_home.png" border="0" style="vertical-align:middle"> Forum</li>
<li class="li" onclick="location.href='index.php?do=usercp';"><img src="./images/templates/<?php  echo"$template"; ?>/h_usercp.png" border="0" style="vertical-align:middle"> Profil</li>
<li class="li" onclick="location.href='index.php?do=members';"><img src="./images/templates/<?php  echo"$template"; ?>/h_members.png" border="0" style="vertical-align:middle"> Mitglieder</li>
<li class="li" onclick="location.href='index.php?do=inbox';"><img src="./images/templates/<?php  echo"$template"; ?>/h_pm.png" border="0" style="vertical-align:middle"> Nachrichten</li>
<li class="active" onclick="location.href='index.php?do=market';"><img src="./images/templates/<?php  echo"$template"; ?>/h_boerse.png" border="0" style="vertical-align:middle"> B&ouml;rse</li>
<li class="li" onclick="location.href='index.php?do=database';"><img src="./images/templates/<?php  echo"$template"; ?>/h_data.png" border="0" style="vertical-align:middle"> Unterlagen</li>
<li class="li" onclick="location.href='index.php?do=links';"><img src="./images/templates/<?php  echo"$template"; ?>/h_forum.png" border="0" style="vertical-align:middle"> Links</li>
<li class="li" onclick="location.href='index.php?do=search';"><img src="./images/templates/<?php  echo"$template"; ?>/h_search.png" border="0" style="vertical-align:middle"> Suche</li>
<li class="li2" onclick="location.href='index.php?do=team';">



<?php  if ($browser == "Safari")  { ?>&nbsp;<?php }?><img src="./images/templates/<?php  echo"$template"; ?>/h_faq.png" border="0" style="vertical-align:middle"> Team

<?php  if ($browser == "Safari")  { ?><div style="width:74px;">&nbsp;</div><?php }?>


</li>
<?php  }  if ($do == "database")  { $li1 = "no"; ?>

<li class="li" onclick="location.href='index.php';"><img src="./images/templates/<?php  echo"$template"; ?>/h_home.png" border="0" style="vertical-align:middle"> Forum</li>
<li class="li" onclick="location.href='index.php?do=usercp';"><img src="./images/templates/<?php  echo"$template"; ?>/h_usercp.png" border="0" style="vertical-align:middle"> Profil</li>
<li class="li" onclick="location.href='index.php?do=members';"><img src="./images/templates/<?php  echo"$template"; ?>/h_members.png" border="0" style="vertical-align:middle"> Mitglieder</li>
<li class="li" onclick="location.href='index.php?do=inbox';"><img src="./images/templates/<?php  echo"$template"; ?>/h_pm.png" border="0" style="vertical-align:middle"> Nachrichten</li>
<li class="li" onclick="location.href='index.php?do=market';"><img src="./images/templates/<?php  echo"$template"; ?>/h_boerse.png" border="0" style="vertical-align:middle"> B&ouml;rse</li>
<li class="active" onclick="location.href='index.php?do=database';"><img src="./images/templates/<?php  echo"$template"; ?>/h_data.png" border="0" style="vertical-align:middle"> Unterlagen</li>
<li class="li" onclick="location.href='index.php?do=links';"><img src="./images/templates/<?php  echo"$template"; ?>/h_forum.png" border="0" style="vertical-align:middle"> Links</li>
<li class="li" onclick="location.href='index.php?do=search';"><img src="./images/templates/<?php  echo"$template"; ?>/h_search.png" border="0" style="vertical-align:middle"> Suche</li>
<li class="li2" onclick="location.href='index.php?do=team';">



<?php  if ($browser == "Safari")  { ?>&nbsp;<?php }?><img src="./images/templates/<?php  echo"$template"; ?>/h_faq.png" border="0" style="vertical-align:middle"> Team

<?php  if ($browser == "Safari")  { ?><div style="width:74px;">&nbsp;</div><?php }?>


</li>
<?php  } if ($do == "links")  { $li1 = "no"; ?>

<li class="li" onclick="location.href='index.php';"><img src="./images/templates/<?php  echo"$template"; ?>/h_home.png" border="0" style="vertical-align:middle"> Forum</li>
<li class="li" onclick="location.href='index.php?do=usercp';"><img src="./images/templates/<?php  echo"$template"; ?>/h_usercp.png" border="0" style="vertical-align:middle"> Profil</li>
<li class="li" onclick="location.href='index.php?do=members';"><img src="./images/templates/<?php  echo"$template"; ?>/h_members.png" border="0" style="vertical-align:middle"> Mitglieder</li>
<li class="li" onclick="location.href='index.php?do=inbox';"><img src="./images/templates/<?php  echo"$template"; ?>/h_pm.png" border="0" style="vertical-align:middle"> Nachrichten</li>
<li class="li" onclick="location.href='index.php?do=market';"><img src="./images/templates/<?php  echo"$template"; ?>/h_boerse.png" border="0" style="vertical-align:middle"> B&ouml;rse</li>
<li class="li" onclick="location.href='index.php?do=database';"><img src="./images/templates/<?php  echo"$template"; ?>/h_data.png" border="0" style="vertical-align:middle"> Unterlagen</li>
<li class="active" onclick="location.href='index.php?do=links';"><img src="./images/templates/<?php  echo"$template"; ?>/h_forum.png" border="0" style="vertical-align:middle"> Links</li>
<li class="li" onclick="location.href='index.php?do=search';"><img src="./images/templates/<?php  echo"$template"; ?>/h_search.png" border="0" style="vertical-align:middle"> Suche</li>
<li class="li2" onclick="location.href='index.php?do=team';">



<?php  if ($browser == "Safari")  { ?>&nbsp;<?php }?><img src="./images/templates/<?php  echo"$template"; ?>/h_faq.png" border="0" style="vertical-align:middle"> Team

<?php  if ($browser == "Safari")  { ?><div style="width:74px;">&nbsp;</div><?php }?>



</li>
<?php  } if ($do == "team")  { $li1 = "no"; ?>

<li class="li" onclick="location.href='index.php';"><img src="./images/templates/<?php  echo"$template"; ?>/h_home.png" border="0" style="vertical-align:middle"> Forum</li>
<li class="li" onclick="location.href='index.php?do=usercp';"><img src="./images/templates/<?php  echo"$template"; ?>/h_usercp.png" border="0" style="vertical-align:middle"> Profil</li>
<li class="li" onclick="location.href='index.php?do=members';"><img src="./images/templates/<?php  echo"$template"; ?>/h_members.png" border="0" style="vertical-align:middle"> Mitglieder</li>
<li class="li" onclick="location.href='index.php?do=inbox';"><img src="./images/templates/<?php  echo"$template"; ?>/h_pm.png" border="0" style="vertical-align:middle"> Nachrichten</li>
<li class="li" onclick="location.href='index.php?do=market';"><img src="./images/templates/<?php  echo"$template"; ?>/h_boerse.png" border="0" style="vertical-align:middle"> B&ouml;rse</li>
<li class="li" onclick="location.href='index.php?do=database';"><img src="./images/templates/<?php  echo"$template"; ?>/h_data.png" border="0" style="vertical-align:middle"> Unterlagen</li>
<li class="li" onclick="location.href='index.php?do=links';"><img src="./images/templates/<?php  echo"$template"; ?>/h_forum.png" border="0" style="vertical-align:middle"> Links</li>
<li class="li" onclick="location.href='index.php?do=search';"><img src="./images/templates/<?php  echo"$template"; ?>/h_search.png" border="0" style="vertical-align:middle"> Suche</li>
<li class="active2" onclick="location.href='index.php?do=team';">



<?php  if ($browser == "Safari")  { ?>&nbsp;<?php }?><img src="./images/templates/<?php  echo"$template"; ?>/h_faq.png" border="0" style="vertical-align:middle"> Team

<?php  if ($browser == "Safari")  { ?><div style="width:74px;">&nbsp;</div><?php }?>



</li>

<?php  } if (!$li1)  { ?>

<li class="active" onclick="location.href='index.php';"><img src="./images/templates/<?php  echo"$template"; ?>/h_home.png" border="0" style="vertical-align:middle"> Forum</li>
<li class="li" onclick="location.href='index.php?do=usercp';"><img src="./images/templates/<?php  echo"$template"; ?>/h_usercp.png" border="0" style="vertical-align:middle"> Profil</li>
<li class="li" onclick="location.href='index.php?do=members';"><img src="./images/templates/<?php  echo"$template"; ?>/h_members.png" border="0" style="vertical-align:middle"> Mitglieder</li>
<li class="li" onclick="location.href='index.php?do=inbox';"><img src="./images/templates/<?php  echo"$template"; ?>/h_pm.png" border="0" style="vertical-align:middle"> Nachrichten</li>
<li class="li" onclick="location.href='index.php?do=market';"><img src="./images/templates/<?php  echo"$template"; ?>/h_boerse.png" border="0" style="vertical-align:middle"> B&ouml;rse</li>
<li class="li" onclick="location.href='index.php?do=database';"><img src="./images/templates/<?php  echo"$template"; ?>/h_data.png" border="0" style="vertical-align:middle"> Unterlagen</li>
<li class="li" onclick="location.href='index.php?do=links';"><img src="./images/templates/<?php  echo"$template"; ?>/h_forum.png" border="0" style="vertical-align:middle"> Links</li>
<li class="li" onclick="location.href='index.php?do=search';"><img src="./images/templates/<?php  echo"$template"; ?>/h_search.png" border="0" style="vertical-align:middle"> Suche</li>
<li class="li2" onclick="location.href='index.php?do=team';">

<?php  if ($browser == "Safari")  { ?>&nbsp;<?php }?><img src="./images/templates/<?php  echo"$template"; ?>/h_faq.png" border="0" style="vertical-align:middle"> Team

<?php  if ($browser == "Safari")  { ?><div style="width:74px;">&nbsp;</div><?php }?>

</li>

<?php  } ?>

</ul>
</td></tr></table>


<br>

  <table width="<?php  echo"$width"; ?>" cellspacing="0" cellpadding="0">

    <tr>

      <td valign="top" align="center">
