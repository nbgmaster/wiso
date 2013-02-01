<?php 

  // Update Anzeigen outsourced

  include('includes/regulary_updates.php');

  $team_group = "Administratoren";

  include('templates/team_top.php');

  $check_theadmins   = mysql_query("SELECT UserID, UserMail, UserName from $user_tblname WHERE admin = '1' ORDER by UserName");

  while ($row_theadmins = mysql_fetch_assoc($check_theadmins))  { 
 
         $imgemail = "img1_$row_theadmins[UserID]";
         $imgpn    = "img2_$row_theadmins[UserID]";

         $team_mail     = $row_theadmins["UserMail"];
         $team_username = $row_theadmins["UserName"];
         $team_userid   = $row_theadmins["UserID"];


         $team_mail2    = "<a href=\"mailto:$team_mail\" onmouseover=\"$imgemail.src='images/templates/$template/email_hover.gif';\" onmouseout=\"$imgemail.src='images/templates/$template/email.gif';\">";
         $team_mail3    = "</a>";

         if ($userdata_id != "")  { 


         $team_pm    = "<a href=\"index.php?do=newpm&user_id=$team_userid\" onmouseover=\"$imgpn.src='images/templates/$template/pn_hover.gif';\" onmouseout=\"$imgpn.src='images/templates/$template/pn.gif';\">";
         $team_pm2    = "</a>";

         }  else  {

         $team_pm = ""; $team_pm2 = ""; 

         }

         include('templates/team.php');

  }

  include('templates/close_table.php');
