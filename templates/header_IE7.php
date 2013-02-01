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


<table cellspacing="0" cellpadding="0" style="width:798px;height:28px;  background  : #fff url(./images/templates/<?php  echo"$template"; ?>/hoverbg.gif) repeat;"><tr><td>
    <ul id="navi">

<?php  if ($do == "usercp")  { $li1 = "no"; ?>

<li onclick="location.href='index.php';"><a class="headie" href="index.php"><img src="./images/templates/<?php  echo"$template"; ?>/h_home.png" border="0" style="vertical-align:middle"> Forum</a></li>
<li class="active" onclick="location.href='index.php?do=usercp';"><a class="headie" href="index.php?do=usercp"><img src="./images/templates/<?php  echo"$template"; ?>/h_usercp.png" border="0" style="vertical-align:middle"> Profil</a></li>
<li onclick="location.href='index.php?do=members';"><a class="headie" href="index.php?do=members"><img src="./images/templates/<?php  echo"$template"; ?>/h_members.gif" border="0" style="vertical-align:middle"> Mitglieder</a></li>
<li onclick="location.href='index.php?do=inbox';"><a class="headie" href="index.php?do=inbox"><img src="./images/templates/<?php  echo"$template"; ?>/h_pm.png" border="0" style="vertical-align:middle"> Nachrichten</a></li>
<li onclick="location.href='index.php?do=market';"><a class="headie" href="index.php?do=market"><img src="./images/templates/<?php  echo"$template"; ?>/h_boerse.png" border="0" style="vertical-align:middle"> Börse</a></li>
<li onclick="location.href='index.php?do=database';"><a class="headie" href="index.php?do=database"><img src="./images/templates/<?php  echo"$template"; ?>/h_data.png" border="0" style="vertical-align:middle"> Unterlagen</a></li>
<li onclick="location.href='index.php?do=links';"><a class="headie" href="index.php?do=links"><img src="./images/templates/<?php  echo"$template"; ?>/h_forum.png" border="0" style="vertical-align:middle"> Links</a></li>
<li onclick="location.href='index.php?do=search';"><a class="headie" href="index.php?do=search"><img src="./images/templates/<?php  echo"$template"; ?>/h_search.png" border="0" style="vertical-align:middle"> Suche</a></li>
<li style="border:0px" onclick="location.href='index.php?do=team';"><a class="headie" href="index.php?do=team"><img src="./images/templates/<?php  echo"$template"; ?>/h_faq.png" border="0" style="vertical-align:middle"> Team</a></li>

<?php  } if ($do == "members" or $do == "profile")  { $li1 = "no"; ?>

<li onclick="location.href='index.php';"><a class="headie" href="index.php"><img src="./images/templates/<?php  echo"$template"; ?>/h_home.png" border="0" style="vertical-align:middle"> Forum</a></li>
<li onclick="location.href='index.php?do=usercp';"><a class="headie" href="index.php?do=usercp"><img src="./images/templates/<?php  echo"$template"; ?>/h_usercp.png" border="0" style="vertical-align:middle"> Profil</a></li>
<li class="active" onclick="location.href='index.php?do=members';"><a class="headie" href="index.php?do=members"><img src="./images/templates/<?php  echo"$template"; ?>/h_members.gif" border="0" style="vertical-align:middle"> Mitglieder</a></li>
<li onclick="location.href='index.php?do=inbox';"><a class="headie" href="index.php?do=inbox"><img src="./images/templates/<?php  echo"$template"; ?>/h_pm.png" border="0" style="vertical-align:middle"> Nachrichten</a></li>
<li onclick="location.href='index.php?do=market';"><a class="headie" href="index.php?do=market"><img src="./images/templates/<?php  echo"$template"; ?>/h_boerse.png" border="0" style="vertical-align:middle"> Börse</a></li>
<li onclick="location.href='index.php?do=database';"><a class="headie" href="index.php?do=database"><img src="./images/templates/<?php  echo"$template"; ?>/h_data.png" border="0" style="vertical-align:middle"> Unterlagen</a></li>
<li onclick="location.href='index.php?do=links';"><a class="headie" href="index.php?do=links"><img src="./images/templates/<?php  echo"$template"; ?>/h_forum.png" border="0" style="vertical-align:middle"> Links</a></li>
<li onclick="location.href='index.php?do=search';"><a class="headie" href="index.php?do=search"><img src="./images/templates/<?php  echo"$template"; ?>/h_search.png" border="0" style="vertical-align:middle"> Suche</a></li>
<li style="border:0px" onclick="location.href='index.php?do=team';"><a class="headie" href="index.php?do=team"><img src="./images/templates/<?php  echo"$template"; ?>/h_faq.png" border="0" style="vertical-align:middle"> Team</a></li>

<?php  } if ($do == "inbox" or $do == "outbox" or $do == "newpm") { $li1 = "no"; ?>

<li onclick="location.href='index.php';"><a class="headie" href="index.php"><img src="./images/templates/<?php  echo"$template"; ?>/h_home.png" border="0" style="vertical-align:middle"> Forum</a></li>
<li onclick="location.href='index.php?do=usercp';"><a class="headie" href="index.php?do=usercp"><img src="./images/templates/<?php  echo"$template"; ?>/h_usercp.png" border="0" style="vertical-align:middle"> Profil</a></li>
<li onclick="location.href='index.php?do=members';"><a class="headie" href="index.php?do=members"><img src="./images/templates/<?php  echo"$template"; ?>/h_members.gif" border="0" style="vertical-align:middle"> Mitglieder</a></li>
<li class="active" onclick="location.href='index.php?do=inbox';"><a class="headie" href="index.php?do=inbox"><img src="./images/templates/<?php  echo"$template"; ?>/h_pm.png" border="0" style="vertical-align:middle"> Nachrichten</a></li>
<li onclick="location.href='index.php?do=market';"><a class="headie" href="index.php?do=market"><img src="./images/templates/<?php  echo"$template"; ?>/h_boerse.png" border="0" style="vertical-align:middle"> Börse</a></li>
<li onclick="location.href='index.php?do=database';"><a class="headie" href="index.php?do=database"><img src="./images/templates/<?php  echo"$template"; ?>/h_data.png" border="0" style="vertical-align:middle"> Unterlagen</a></li>
<li onclick="location.href='index.php?do=links';"><a class="headie" href="index.php?do=links"><img src="./images/templates/<?php  echo"$template"; ?>/h_forum.png" border="0" style="vertical-align:middle"> Links</a></li>
<li onclick="location.href='index.php?do=search';"><a class="headie" href="index.php?do=search"><img src="./images/templates/<?php  echo"$template"; ?>/h_search.png" border="0" style="vertical-align:middle"> Suche</a></li>
<li style="border:0px" onclick="location.href='index.php?do=team';"><a class="headie" href="index.php?do=team"><img src="./images/templates/<?php  echo"$template"; ?>/h_faq.png" border="0" style="vertical-align:middle"> Team</a></li>

<?php  } if ($do == "market")  { $li1 = "no"; ?>

<li onclick="location.href='index.php';"><a class="headie" href="index.php"><img src="./images/templates/<?php  echo"$template"; ?>/h_home.png" border="0" style="vertical-align:middle"> Forum</a></li>
<li onclick="location.href='index.php?do=usercp';"><a class="headie" href="index.php?do=usercp"><img src="./images/templates/<?php  echo"$template"; ?>/h_usercp.png" border="0" style="vertical-align:middle"> Profil</a></li>
<li onclick="location.href='index.php?do=members';"><a class="headie" href="index.php?do=members"><img src="./images/templates/<?php  echo"$template"; ?>/h_members.gif" border="0" style="vertical-align:middle"> Mitglieder</a></li>
<li onclick="location.href='index.php?do=inbox';"><a class="headie" href="index.php?do=inbox"><img src="./images/templates/<?php  echo"$template"; ?>/h_pm.png" border="0" style="vertical-align:middle"> Nachrichten</a></li>
<li class="active" onclick="location.href='index.php?do=market';"><a class="headie" href="index.php?do=market"><img src="./images/templates/<?php  echo"$template"; ?>/h_boerse.png" border="0" style="vertical-align:middle"> Börse</a></li>
<li onclick="location.href='index.php?do=database';"><a class="headie" href="index.php?do=database"><img src="./images/templates/<?php  echo"$template"; ?>/h_data.png" border="0" style="vertical-align:middle"> Unterlagen</a></li>
<li onclick="location.href='index.php?do=links';"><a class="headie" href="index.php?do=links"><img src="./images/templates/<?php  echo"$template"; ?>/h_forum.png" border="0" style="vertical-align:middle"> Links</a></li>
<li onclick="location.href='index.php?do=search';"><a class="headie" href="index.php?do=search"><img src="./images/templates/<?php  echo"$template"; ?>/h_search.png" border="0" style="vertical-align:middle"> Suche</a></li>
<li style="border:0px" onclick="location.href='index.php?do=team';"><a class="headie" href="index.php?do=team"><img src="./images/templates/<?php  echo"$template"; ?>/h_faq.png" border="0" style="vertical-align:middle"> Team</a></li>

<?php  } if ($do == "search")  { $li1 = "no"; ?>

<li onclick="location.href='index.php';"><a class="headie" href="index.php"><img src="./images/templates/<?php  echo"$template"; ?>/h_home.png" border="0" style="vertical-align:middle"> Forum</a></li>
<li onclick="location.href='index.php?do=usercp';"><a class="headie" href="index.php?do=usercp"><img src="./images/templates/<?php  echo"$template"; ?>/h_usercp.png" border="0" style="vertical-align:middle"> Profil</a></li>
<li onclick="location.href='index.php?do=members';"><a class="headie" href="index.php?do=members"><img src="./images/templates/<?php  echo"$template"; ?>/h_members.gif" border="0" style="vertical-align:middle"> Mitglieder</a></li>
<li onclick="location.href='index.php?do=inbox';"><a class="headie" href="index.php?do=inbox"><img src="./images/templates/<?php  echo"$template"; ?>/h_pm.png" border="0" style="vertical-align:middle"> Nachrichten</a></li>
<li onclick="location.href='index.php?do=market';"><a class="headie" href="index.php?do=market"><img src="./images/templates/<?php  echo"$template"; ?>/h_boerse.png" border="0" style="vertical-align:middle"> Börse</a></li>
<li onclick="location.href='index.php?do=database';"><a class="headie" href="index.php?do=database"><img src="./images/templates/<?php  echo"$template"; ?>/h_data.png" border="0" style="vertical-align:middle"> Unterlagen</a></li>
<li onclick="location.href='index.php?do=links';"><a class="headie" href="index.php?do=links"><img src="./images/templates/<?php  echo"$template"; ?>/h_forum.png" border="0" style="vertical-align:middle"> Links</a></li>
<li class="active" onclick="location.href='index.php?do=search';"><a class="headie" href="index.php?do=search"><img src="./images/templates/<?php  echo"$template"; ?>/h_search.png" border="0" style="vertical-align:middle"> Suche</a></li>
<li style="border:0px" onclick="location.href='index.php?do=team';"><a class="headie" href="index.php?do=team"><img src="./images/templates/<?php  echo"$template"; ?>/h_faq.png" border="0" style="vertical-align:middle"> Team</a></li>

<?php  } if ($do == "database")  { $li1 = "no"; ?>

<li onclick="location.href='index.php';"><a class="headie" href="index.php"><img src="./images/templates/<?php  echo"$template"; ?>/h_home.png" border="0" style="vertical-align:middle"> Forum</a></li>
<li onclick="location.href='index.php?do=usercp';"><a class="headie" href="index.php?do=usercp"><img src="./images/templates/<?php  echo"$template"; ?>/h_usercp.png" border="0" style="vertical-align:middle"> Profil</a></li>
<li onclick="location.href='index.php?do=members';"><a class="headie" href="index.php?do=members"><img src="./images/templates/<?php  echo"$template"; ?>/h_members.gif" border="0" style="vertical-align:middle"> Mitglieder</a></li>
<li onclick="location.href='index.php?do=inbox';"><a class="headie" href="index.php?do=inbox"><img src="./images/templates/<?php  echo"$template"; ?>/h_pm.png" border="0" style="vertical-align:middle"> Nachrichten</a></li>
<li onclick="location.href='index.php?do=market';"><a class="headie" href="index.php?do=market"><img src="./images/templates/<?php  echo"$template"; ?>/h_boerse.png" border="0" style="vertical-align:middle"> Börse</a></li>
<li class="active" onclick="location.href='index.php?do=database';"><a class="headie" href="index.php?do=database"><img src="./images/templates/<?php  echo"$template"; ?>/h_data.png" border="0" style="vertical-align:middle"> Unterlagen</a></li>
<li onclick="location.href='index.php?do=links';"><a class="headie" href="index.php?do=links"><img src="./images/templates/<?php  echo"$template"; ?>/h_forum.png" border="0" style="vertical-align:middle"> Links</a></li>
<li onclick="location.href='index.php?do=search';"><a class="headie" href="index.php?do=search"><img src="./images/templates/<?php  echo"$template"; ?>/h_search.png" border="0" style="vertical-align:middle"> Suche</a></li>
<li style="border:0px" onclick="location.href='index.php?do=team';"><a class="headie" href="index.php?do=team"><img src="./images/templates/<?php  echo"$template"; ?>/h_faq.png" border="0" style="vertical-align:middle"> Team</a></li>

<?php  } if ($do == "links")  { $li1 = "no"; ?>

<li onclick="location.href='index.php';"><a class="headie" href="index.php"><img src="./images/templates/<?php  echo"$template"; ?>/h_home.png" border="0" style="vertical-align:middle"> Forum</a></li>
<li onclick="location.href='index.php?do=usercp';"><a class="headie" href="index.php?do=usercp"><img src="./images/templates/<?php  echo"$template"; ?>/h_usercp.png" border="0" style="vertical-align:middle"> Profil</a></li>
<li onclick="location.href='index.php?do=members';"><a class="headie" href="index.php?do=members"><img src="./images/templates/<?php  echo"$template"; ?>/h_members.gif" border="0" style="vertical-align:middle"> Mitglieder</a></li>
<li onclick="location.href='index.php?do=inbox';"><a class="headie" href="index.php?do=inbox"><img src="./images/templates/<?php  echo"$template"; ?>/h_pm.png" border="0" style="vertical-align:middle"> Nachrichten</a></li>
<li onclick="location.href='index.php?do=market';"><a class="headie" href="index.php?do=market"><img src="./images/templates/<?php  echo"$template"; ?>/h_boerse.png" border="0" style="vertical-align:middle"> Börse</a></li>
<li onclick="location.href='index.php?do=database';"><a class="headie" href="index.php?do=database"><img src="./images/templates/<?php  echo"$template"; ?>/h_data.png" border="0" style="vertical-align:middle"> Unterlagen</a></li>
<li class="active" onclick="location.href='index.php?do=links';"><a class="headie" href="index.php?do=links"><img src="./images/templates/<?php  echo"$template"; ?>/h_forum.png" border="0" style="vertical-align:middle"> Links</a></li>
<li onclick="location.href='index.php?do=search';"><a class="headie" href="index.php?do=search"><img src="./images/templates/<?php  echo"$template"; ?>/h_search.png" border="0" style="vertical-align:middle"> Suche</a></li>
<li style="border:0px" onclick="location.href='index.php?do=team';"><a class="headie" href="index.php?do=team"><img src="./images/templates/<?php  echo"$template"; ?>/h_faq.png" border="0" style="vertical-align:middle"> Team</a></li>

<?php  } if ($do == "faq")  { $li1 = "no"; ?>

<li onclick="location.href='index.php';"><a class="headie" href="index.php"><img src="./images/templates/<?php  echo"$template"; ?>/h_home.png" border="0" style="vertical-align:middle"> Forum</a></li>
<li onclick="location.href='index.php?do=usercp';"><a class="headie" href="index.php?do=usercp"><img src="./images/templates/<?php  echo"$template"; ?>/h_usercp.png" border="0" style="vertical-align:middle"> Profil</a></li>
<li onclick="location.href='index.php?do=members';"><a class="headie" href="index.php?do=members"><img src="./images/templates/<?php  echo"$template"; ?>/h_members.gif" border="0" style="vertical-align:middle"> Mitglieder</a></li>
<li onclick="location.href='index.php?do=inbox';"><a class="headie" href="index.php?do=inbox"><img src="./images/templates/<?php  echo"$template"; ?>/h_pm.png" border="0" style="vertical-align:middle"> Nachrichten</a></li>
<li onclick="location.href='index.php?do=market';"><a class="headie" href="index.php?do=market"><img src="./images/templates/<?php  echo"$template"; ?>/h_boerse.png" border="0" style="vertical-align:middle"> Börse</a></li>
<li onclick="location.href='index.php?do=database';"><a class="headie" href="index.php?do=database"><img src="./images/templates/<?php  echo"$template"; ?>/h_data.png" border="0" style="vertical-align:middle"> Unterlagen</a></li>
<li onclick="location.href='index.php?do=links';"><a class="headie" href="index.php?do=links"><img src="./images/templates/<?php  echo"$template"; ?>/h_forum.png" border="0" style="vertical-align:middle"> Links</a></li>
<li onclick="location.href='index.php?do=search';"><a class="headie" href="index.php?do=search"><img src="./images/templates/<?php  echo"$template"; ?>/h_search.png" border="0" style="vertical-align:middle"> Suche</a></li>
<li class="active" style="border:0px" onclick="location.href='index.php?do=team';"><a class="headie" href="index.php?do=team"><img src="./images/templates/<?php  echo"$template"; ?>/h_faq.png" border="0" style="vertical-align:middle"> Team</a></li>

<?php  } if (!$li1)  { ?>

<li class="active" onclick="location.href='index.php';"><a class="headie" href="index.php"><img src="./images/templates/<?php  echo"$template"; ?>/h_home.png" border="0" style="vertical-align:middle"> Forum</a></li>
<li onclick="location.href='index.php?do=usercp';"><a class="headie" href="index.php?do=usercp"><img src="./images/templates/<?php  echo"$template"; ?>/h_usercp.png" border="0" style="vertical-align:middle"> Profil</a></li>
<li onclick="location.href='index.php?do=members';"><a class="headie" href="index.php?do=members"><img src="./images/templates/<?php  echo"$template"; ?>/h_members.gif" border="0" style="vertical-align:middle"> Mitglieder</a></li>
<li onclick="location.href='index.php?do=inbox';"><a class="headie" href="index.php?do=inbox"><img src="./images/templates/<?php  echo"$template"; ?>/h_pm.png" border="0" style="vertical-align:middle"> Nachrichten</a></li>
<li onclick="location.href='index.php?do=market';"><a class="headie" href="index.php?do=market"><img src="./images/templates/<?php  echo"$template"; ?>/h_boerse.png" border="0" style="vertical-align:middle"> Börse</a></li>
<li onclick="location.href='index.php?do=database';"><a class="headie" href="index.php?do=database"><img src="./images/templates/<?php  echo"$template"; ?>/h_data.png" border="0" style="vertical-align:middle"> Unterlagen</a></li>
<li onclick="location.href='index.php?do=links';"><a class="headie" href="index.php?do=links"><img src="./images/templates/<?php  echo"$template"; ?>/h_forum.png" border="0" style="vertical-align:middle"> Links</a></li>
<li onclick="location.href='index.php?do=search';"><a class="headie" href="index.php?do=search"><img src="./images/templates/<?php  echo"$template"; ?>/h_search.png" border="0" style="vertical-align:middle"> Suche</a></li>
<li style="border:0px" onclick="location.href='index.php?do=team';"><a class="headie" href="index.php?do=team"><img src="./images/templates/<?php  echo"$template"; ?>/h_faq.png" border="0" style="vertical-align:middle"> Team</a></li>

<?php  } ?>

</ul>
</td></tr></table>
<br>

  <table width="<?php  echo"$width"; ?>" cellspacing="0" cellpadding="0">

    <tr>

      <td valign="top" align="center">
