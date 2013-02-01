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

          <img src="images/templates/<?php  echo"$template"; ?>/banner.jpg"><br />

          </td>

        </tr>

      </table>

  <?php   } ?>

  <table cellspacing="0" cellpadding="0" style="border-top:0px solid #000;border-bottom:2px solid #A8AAAA;">

  <tr>

<?php  if ($do == "usercp")  { $li1 = "no"; ?>

<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php" onmouseover="Himg_forum.src='images/navi/forumA.jpg';" onmouseout="Himg_forum.src='images/navi/forum.jpg';">
<img src="images/navi/forum.jpg" name="Himg_forum" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=usercp" onmouseover="Himg_profile.src='images/navi/profileA.jpg';" onmouseout="Himg_profile.src='images/navi/profileA.jpg';">
<img src="images/navi/profileA.jpg" name="Himg_profile" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=members" onmouseover="Himg_members.src='images/navi/membersA.jpg';" onmouseout="Himg_members.src='images/navi/members.jpg';">
<img src="images/navi/members.jpg" name="Himg_members" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=inbox" onmouseover="Himg_pm.src='images/navi/pmA.jpg';" onmouseout="Himg_pm.src='images/navi/pm.jpg';">
<img src="images/navi/pm.jpg" name="Himg_pm" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=market" onmouseover="Himg_boerse.src='images/navi/boerseA.jpg';" onmouseout="Himg_boerse.src='images/navi/boerse.jpg';">
<img src="images/navi/boerse.jpg" name="Himg_boerse" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=database" onmouseover="Himg_database.src='images/navi/databaseA.jpg';" onmouseout="Himg_database.src='images/navi/database.jpg';">
<img src="images/navi/database.jpg" name="Himg_database" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=links" onmouseover="Himg_links.src='images/navi/linksA.jpg';" onmouseout="Himg_links.src='images/navi/links.jpg';">
<img src="images/navi/links.jpg" name="Himg_links" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=search" onmouseover="Himg_search.src='images/navi/searchA.jpg';" onmouseout="Himg_search.src='images/navi/search.jpg';">
<img src="images/navi/search.jpg" name="Himg_search" border="0"><br /></a>
</td>
<td>
<a style="cursor:pointer" href="index.php?do=faq" onmouseover="Himg_team.src='images/navi/teamA.jpg';" onmouseout="Himg_team.src='images/navi/team.jpg';">
<img src="images/navi/team.jpg" name="Himg_team" border="0"><br /></a>
</td>

<?php  } if ($do == "members" or $do == "profile")  { $li1 = "no"; ?>

<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php" onmouseover="Himg_forum.src='images/navi/forumA.jpg';" onmouseout="Himg_forum.src='images/navi/forum.jpg';">
<img src="images/navi/forum.jpg" name="Himg_forum" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=usercp" onmouseover="Himg_profile.src='images/navi/profileA.jpg';" onmouseout="Himg_profile.src='images/navi/profile.jpg';">
<img src="images/navi/profile.jpg" name="Himg_profile" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=members" onmouseover="Himg_members.src='images/navi/membersA.jpg';" onmouseout="Himg_members.src='images/navi/membersA.jpg';">
<img src="images/navi/membersA.jpg" name="Himg_members" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=inbox" onmouseover="Himg_pm.src='images/navi/pmA.jpg';" onmouseout="Himg_pm.src='images/navi/pm.jpg';">
<img src="images/navi/pm.jpg" name="Himg_pm" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=market" onmouseover="Himg_boerse.src='images/navi/boerseA.jpg';" onmouseout="Himg_boerse.src='images/navi/boerse.jpg';">
<img src="images/navi/boerse.jpg" name="Himg_boerse" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=database" onmouseover="Himg_database.src='images/navi/databaseA.jpg';" onmouseout="Himg_database.src='images/navi/database.jpg';">
<img src="images/navi/database.jpg" name="Himg_database" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=links" onmouseover="Himg_links.src='images/navi/linksA.jpg';" onmouseout="Himg_links.src='images/navi/links.jpg';">
<img src="images/navi/links.jpg" name="Himg_links" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=search" onmouseover="Himg_search.src='images/navi/searchA.jpg';" onmouseout="Himg_search.src='images/navi/search.jpg';">
<img src="images/navi/search.jpg" name="Himg_search" border="0"><br /></a>
</td>
<td>
<a style="cursor:pointer" href="index.php?do=faq" onmouseover="Himg_team.src='images/navi/teamA.jpg';" onmouseout="Himg_team.src='images/navi/team.jpg';">
<img src="images/navi/team.jpg" name="Himg_team" border="0"><br /></a>
</td>

<?php  } if ($do == "inbox" or $do == "outbox" or $do == "newpm") { $li1 = "no"; ?>

<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php" onmouseover="Himg_forum.src='images/navi/forumA.jpg';" onmouseout="Himg_forum.src='images/navi/forum.jpg';">
<img src="images/navi/forum.jpg" name="Himg_forum" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=usercp" onmouseover="Himg_profile.src='images/navi/profileA.jpg';" onmouseout="Himg_profile.src='images/navi/profile.jpg';">
<img src="images/navi/profile.jpg" name="Himg_profile" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=members" onmouseover="Himg_members.src='images/navi/membersA.jpg';" onmouseout="Himg_members.src='images/navi/members.jpg';">
<img src="images/navi/members.jpg" name="Himg_members" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=inbox" onmouseover="Himg_pm.src='images/navi/pmA.jpg';" onmouseout="Himg_pm.src='images/navi/pmA.jpg';">
<img src="images/navi/pmA.jpg" name="Himg_pm" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=market" onmouseover="Himg_boerse.src='images/navi/boerseA.jpg';" onmouseout="Himg_boerse.src='images/navi/boerse.jpg';">
<img src="images/navi/boerse.jpg" name="Himg_boerse" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=database" onmouseover="Himg_database.src='images/navi/databaseA.jpg';" onmouseout="Himg_database.src='images/navi/database.jpg';">
<img src="images/navi/database.jpg" name="Himg_database" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=links" onmouseover="Himg_links.src='images/navi/linksA.jpg';" onmouseout="Himg_links.src='images/navi/links.jpg';">
<img src="images/navi/links.jpg" name="Himg_links" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=search" onmouseover="Himg_search.src='images/navi/searchA.jpg';" onmouseout="Himg_search.src='images/navi/search.jpg';">
<img src="images/navi/search.jpg" name="Himg_search" border="0"><br /></a>
</td>
<td>
<a style="cursor:pointer" href="index.php?do=faq" onmouseover="Himg_team.src='images/navi/teamA.jpg';" onmouseout="Himg_team.src='images/navi/team.jpg';">
<img src="images/navi/team.jpg" name="Himg_team" border="0"><br /></a>
</td>

<?php  } if ($do == "search")  { $li1 = "no"; ?>

<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php" onmouseover="Himg_forum.src='images/navi/forumA.jpg';" onmouseout="Himg_forum.src='images/navi/forum.jpg';">
<img src="images/navi/forum.jpg" name="Himg_forum" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=usercp" onmouseover="Himg_profile.src='images/navi/profileA.jpg';" onmouseout="Himg_profile.src='images/navi/profile.jpg';">
<img src="images/navi/profile.jpg" name="Himg_profile" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=members" onmouseover="Himg_members.src='images/navi/membersA.jpg';" onmouseout="Himg_members.src='images/navi/members.jpg';">
<img src="images/navi/members.jpg" name="Himg_members" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=inbox" onmouseover="Himg_pm.src='images/navi/pmA.jpg';" onmouseout="Himg_pm.src='images/navi/pm.jpg';">
<img src="images/navi/pm.jpg" name="Himg_pm" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=market" onmouseover="Himg_boerse.src='images/navi/boerseA.jpg';" onmouseout="Himg_boerse.src='images/navi/boerse.jpg';">
<img src="images/navi/boerse.jpg" name="Himg_boerse" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=database" onmouseover="Himg_database.src='images/navi/databaseA.jpg';" onmouseout="Himg_database.src='images/navi/database.jpg';">
<img src="images/navi/database.jpg" name="Himg_database" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=links" onmouseover="Himg_links.src='images/navi/linksA.jpg';" onmouseout="Himg_links.src='images/navi/links.jpg';">
<img src="images/navi/links.jpg" name="Himg_links" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=search" onmouseover="Himg_search.src='images/navi/searchA.jpg';" onmouseout="Himg_search.src='images/navi/searchA.jpg';">
<img src="images/navi/searchA.jpg" name="Himg_search" border="0"><br /></a>
</td>
<td>
<a style="cursor:pointer" href="index.php?do=faq" onmouseover="Himg_team.src='images/navi/teamA.jpg';" onmouseout="Himg_team.src='images/navi/team.jpg';">
<img src="images/navi/team.jpg" name="Himg_team" border="0"><br /></a>
</td>

<?php  } if ($do == "market")  { $li1 = "no"; ?>

<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php" onmouseover="Himg_forum.src='images/navi/forumA.jpg';" onmouseout="Himg_forum.src='images/navi/forum.jpg';">
<img src="images/navi/forum.jpg" name="Himg_forum" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=usercp" onmouseover="Himg_profile.src='images/navi/profileA.jpg';" onmouseout="Himg_profile.src='images/navi/profile.jpg';">
<img src="images/navi/profile.jpg" name="Himg_profile" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=members" onmouseover="Himg_members.src='images/navi/membersA.jpg';" onmouseout="Himg_members.src='images/navi/members.jpg';">
<img src="images/navi/members.jpg" name="Himg_members" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=inbox" onmouseover="Himg_pm.src='images/navi/pmA.jpg';" onmouseout="Himg_pm.src='images/navi/pm.jpg';">
<img src="images/navi/pm.jpg" name="Himg_pm" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=market" onmouseover="Himg_boerse.src='images/navi/boerseA.jpg';" onmouseout="Himg_boerse.src='images/navi/boerseA.jpg';">
<img src="images/navi/boerseA.jpg" name="Himg_boerse" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=database" onmouseover="Himg_database.src='images/navi/databaseA.jpg';" onmouseout="Himg_database.src='images/navi/database.jpg';">
<img src="images/navi/database.jpg" name="Himg_database" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=links" onmouseover="Himg_links.src='images/navi/linksA.jpg';" onmouseout="Himg_links.src='images/navi/links.jpg';">
<img src="images/navi/links.jpg" name="Himg_links" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=search" onmouseover="Himg_search.src='images/navi/searchA.jpg';" onmouseout="Himg_search.src='images/navi/search.jpg';">
<img src="images/navi/search.jpg" name="Himg_search" border="0"><br /></a>
</td>
<td>
<a style="cursor:pointer" href="index.php?do=faq" onmouseover="Himg_team.src='images/navi/teamA.jpg';" onmouseout="Himg_team.src='images/navi/team.jpg';">
<img src="images/navi/team.jpg" name="Himg_team" border="0"><br /></a>
</td>

<?php  } if ($do == "database")  { $li1 = "no"; ?>

<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php" onmouseover="Himg_forum.src='images/navi/forumA.jpg';" onmouseout="Himg_forum.src='images/navi/forum.jpg';">
<img src="images/navi/forum.jpg" name="Himg_forum" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=usercp" onmouseover="Himg_profile.src='images/navi/profileA.jpg';" onmouseout="Himg_profile.src='images/navi/profile.jpg';">
<img src="images/navi/profile.jpg" name="Himg_profile" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=members" onmouseover="Himg_members.src='images/navi/membersA.jpg';" onmouseout="Himg_members.src='images/navi/members.jpg';">
<img src="images/navi/members.jpg" name="Himg_members" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=inbox" onmouseover="Himg_pm.src='images/navi/pmA.jpg';" onmouseout="Himg_pm.src='images/navi/pm.jpg';">
<img src="images/navi/pm.jpg" name="Himg_pm" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=market" onmouseover="Himg_boerse.src='images/navi/boerseA.jpg';" onmouseout="Himg_boerse.src='images/navi/boerse.jpg';">
<img src="images/navi/boerse.jpg" name="Himg_boerse" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=database" onmouseover="Himg_database.src='images/navi/databaseA.jpg';" onmouseout="Himg_database.src='images/navi/databaseA.jpg';">
<img src="images/navi/databaseA.jpg" name="Himg_database" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=links" onmouseover="Himg_links.src='images/navi/linksA.jpg';" onmouseout="Himg_links.src='images/navi/links.jpg';">
<img src="images/navi/links.jpg" name="Himg_links" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=search" onmouseover="Himg_search.src='images/navi/searchA.jpg';" onmouseout="Himg_search.src='images/navi/search.jpg';">
<img src="images/navi/search.jpg" name="Himg_search" border="0"><br /></a>
</td>
<td>
<a style="cursor:pointer" href="index.php?do=faq" onmouseover="Himg_team.src='images/navi/teamA.jpg';" onmouseout="Himg_team.src='images/navi/team.jpg';">
<img src="images/navi/team.jpg" name="Himg_team" border="0"><br /></a>
</td>

<?php  } if ($do == "links")  { $li1 = "no"; ?>

<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php" onmouseover="Himg_forum.src='images/navi/forumA.jpg';" onmouseout="Himg_forum.src='images/navi/forum.jpg';">
<img src="images/navi/forum.jpg" name="Himg_forum" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=usercp" onmouseover="Himg_profile.src='images/navi/profileA.jpg';" onmouseout="Himg_profile.src='images/navi/profile.jpg';">
<img src="images/navi/profile.jpg" name="Himg_profile" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=members" onmouseover="Himg_members.src='images/navi/membersA.jpg';" onmouseout="Himg_members.src='images/navi/members.jpg';">
<img src="images/navi/members.jpg" name="Himg_members" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=inbox" onmouseover="Himg_pm.src='images/navi/pmA.jpg';" onmouseout="Himg_pm.src='images/navi/pm.jpg';">
<img src="images/navi/pm.jpg" name="Himg_pm" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=market" onmouseover="Himg_boerse.src='images/navi/boerseA.jpg';" onmouseout="Himg_boerse.src='images/navi/boerse.jpg';">
<img src="images/navi/boerse.jpg" name="Himg_boerse" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=database" onmouseover="Himg_database.src='images/navi/databaseA.jpg';" onmouseout="Himg_database.src='images/navi/database.jpg';">
<img src="images/navi/database.jpg" name="Himg_database" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=links" onmouseover="Himg_links.src='images/navi/linksA.jpg';" onmouseout="Himg_links.src='images/navi/linksA.jpg';">
<img src="images/navi/linksA.jpg" name="Himg_links" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=search" onmouseover="Himg_search.src='images/navi/searchA.jpg';" onmouseout="Himg_search.src='images/navi/search.jpg';">
<img src="images/navi/search.jpg" name="Himg_search" border="0"><br /></a>
</td>
<td>
<a style="cursor:pointer" href="index.php?do=faq" onmouseover="Himg_team.src='images/navi/teamA.jpg';" onmouseout="Himg_team.src='images/navi/team.jpg';">
<img src="images/navi/team.jpg" name="Himg_team" border="0"><br /></a>
</td>

<?php  } if ($do == "faq")  { $li1 = "no"; ?>

<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php" onmouseover="Himg_forum.src='images/navi/forumA.jpg';" onmouseout="Himg_forum.src='images/navi/forum.jpg';">
<img src="images/navi/forum.jpg" name="Himg_forum" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=usercp" onmouseover="Himg_profile.src='images/navi/profileA.jpg';" onmouseout="Himg_profile.src='images/navi/profile.jpg';">
<img src="images/navi/profile.jpg" name="Himg_profile" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=members" onmouseover="Himg_members.src='images/navi/membersA.jpg';" onmouseout="Himg_members.src='images/navi/members.jpg';">
<img src="images/navi/members.jpg" name="Himg_members" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=inbox" onmouseover="Himg_pm.src='images/navi/pmA.jpg';" onmouseout="Himg_pm.src='images/navi/pm.jpg';">
<img src="images/navi/pm.jpg" name="Himg_pm" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=market" onmouseover="Himg_boerse.src='images/navi/boerseA.jpg';" onmouseout="Himg_boerse.src='images/navi/boerse.jpg';">
<img src="images/navi/boerse.jpg" name="Himg_boerse" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=database" onmouseover="Himg_database.src='images/navi/databaseA.jpg';" onmouseout="Himg_database.src='images/navi/database.jpg';">
<img src="images/navi/database.jpg" name="Himg_database" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=links" onmouseover="Himg_links.src='images/navi/linksA.jpg';" onmouseout="Himg_links.src='images/navi/links.jpg';">
<img src="images/navi/links.jpg" name="Himg_links" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=search" onmouseover="Himg_search.src='images/navi/searchA.jpg';" onmouseout="Himg_search.src='images/navi/search.jpg';">
<img src="images/navi/search.jpg" name="Himg_search" border="0"><br /></a>
</td>
<td>
<a style="cursor:pointer" href="index.php?do=faq" onmouseover="Himg_team.src='images/navi/teamA.jpg';" onmouseout="Himg_team.src='images/navi/teamA.jpg';">
<img src="images/navi/teamA.jpg" name="Himg_team" border="0"><br /></a>
</td>

<?php  } if (!$li1)  { ?>

<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php" onmouseover="Himg_forum.src='images/navi/forumA.jpg';" onmouseout="Himg_forum.src='images/navi/forumA.jpg';">
<img src="images/navi/forumA.jpg" name="Himg_forum" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=usercp" onmouseover="Himg_profile.src='images/navi/profileA.jpg';" onmouseout="Himg_profile.src='images/navi/profile.jpg';">
<img src="images/navi/profile.jpg" name="Himg_profile" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=members" onmouseover="Himg_members.src='images/navi/membersA.jpg';" onmouseout="Himg_members.src='images/navi/members.jpg';">
<img src="images/navi/members.jpg" name="Himg_members" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=inbox" onmouseover="Himg_pm.src='images/navi/pmA.jpg';" onmouseout="Himg_pm.src='images/navi/pm.jpg';">
<img src="images/navi/pm.jpg" name="Himg_pm" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=market" onmouseover="Himg_boerse.src='images/navi/boerseA.jpg';" onmouseout="Himg_boerse.src='images/navi/boerse.jpg';">
<img src="images/navi/boerse.jpg" name="Himg_boerse" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=database" onmouseover="Himg_database.src='images/navi/databaseA.jpg';" onmouseout="Himg_database.src='images/navi/database.jpg';">
<img src="images/navi/database.jpg" name="Himg_database" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=links" onmouseover="Himg_links.src='images/navi/linksA.jpg';" onmouseout="Himg_links.src='images/navi/links.jpg';">
<img src="images/navi/links.jpg" name="Himg_links" border="0"><br /></a>
</td>
<td style="border-right:1px solid #000">
<a style="cursor:pointer" href="index.php?do=search" onmouseover="Himg_search.src='images/navi/searchA.jpg';" onmouseout="Himg_search.src='images/navi/search.jpg';">
<img src="images/navi/search.jpg" name="Himg_search" border="0"><br /></a>
</td>
<td>
<a style="cursor:pointer" href="index.php?do=faq" onmouseover="Himg_team.src='images/navi/teamA.jpg';" onmouseout="Himg_team.src='images/navi/team.jpg';">
<img src="images/navi/team.jpg" name="Himg_team" border="0"><br /></a>
</td>

<?php  } ?>

</tr>
</table>

<br>

  <table width="<?php  echo"$width"; ?>" cellspacing="0" cellpadding="0">

    <tr>

      <td valign="top" align="center">
