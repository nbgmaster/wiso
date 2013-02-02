<?php 

  if ($module == "")  {

      $query_config = mysql_query("SELECT * from $admin_config_tblname");

      while ($row_config = mysql_fetch_assoc($query_config))  { 

             include("./templates/admin/config.php");

      }

  }

  else  { 

      if (isset($send_admin_data))  {

         if ($_POST[show_threads] == "0")   { $_POST[show_threads] = "1"; }
         if ($_POST[postsperpage] == "0")   { $_POST[postsperpage] = "1"; }
         if ($_POST[show_members] == "0")   { $_POST[show_members] = "1"; }
         if ($_POST[show_user_pm] == "0")   { $_POST[show_user_pm] = "1"; }
         if ($_POST[max_pm_inbox] == "0")   { $_POST[max_pm_inbox] = "1"; }
         if ($_POST[max_pm_outbox] == "0")  { $_POST[max_pm_outbox] = "1"; } 
      
         $update_config1 = "UPDATE $admin_config_tblname SET header_titles = '$_POST[header_titles]', board_title        = '$_POST[board_title]',        board_description = '$_POST[board_description]', board_domain = '$_POST[board_domainf]', board_direction = '$_POST[board_directionf]',     banner = '$_POST[banner]' WHERE id = '1'";     
         $update_config2 = "UPDATE $admin_config_tblname SET board_disable = '$_POST[board_disable]', reg_disable        = '$_POST[reg_disable]',        account_activation = '$_POST[account_activation]', tpl_active = '$_POST[tpl_active]',                   overwrite_user_tpl = '$_POST[overwrite_user_tpl]', admin_email = '$_POST[admin_email]' WHERE id = '1'";     
         $update_config3 = "UPDATE $admin_config_tblname SET show_threads  = '$_POST[show_threads]',  postsperpage       = '$_POST[postsperpage]',       show_members = '$_POST[show_members]',               show_user_pm = '$_POST[show_user_pm]' WHERE id = '1'";     
         $update_config4 = "UPDATE $admin_config_tblname SET max_pm_inbox  = '$_POST[max_pm_inbox]',  max_pm_outbox      = '$_POST[max_pm_outbox]',      refresh_time = '$_POST[refresh_time]',               reload_post = '$_POST[reload_post]' WHERE id = '1'";     
         $update_config5 = "UPDATE $admin_config_tblname SET pm_disable    = '$_POST[pm_disable]',    stats_enable = '$_POST[stats_enable]',             birthday_enable = '$_POST[birthday_enable]',      email_disable      = '$_POST[email_disable]',      change_nick_disable = '$_POST[change_nick_disable]', sig_disable = '$_POST[sig_disable]', html_disable = '$_POST[html_disable]', smilies_disable = '$_POST[smilies_disable]', bbcode_disable = '$_POST[bbcode_disable]' WHERE id = '1'";     
         $update_config6 = "UPDATE $admin_config_tblname SET file_upload = '$_POST[file_upload]', file_max_size = '$_POST[file_max_size]', avatar_disable = '$_POST[avatar_disable]', avatar_from_url  = '$_POST[avatar_from_url]',    avatar_max_size = '$_POST[avatar_max_size]',     avatar_max_height = '$_POST[avatar_max_height]', avatar_max_width = '$_POST[avatar_max_width]', smilies_direction = '$_POST[smilies_direction]', smilies_showstart = '$_POST[smilies_showstart]' WHERE id = '1'";  

         mysql_query($update_config1) OR die(mysql_error());
         mysql_query($update_config2) OR die(mysql_error());
         mysql_query($update_config3) OR die(mysql_error());
         mysql_query($update_config4) OR die(mysql_error());
         mysql_query($update_config5) OR die(mysql_error());
         mysql_query($update_config6) OR die(mysql_error());

         $text01   = "Einstellungen wurden ge&auml;ndert!";         
         $link     = "index.php?do=admin&sec=config";

     
         include("templates/refresh.php");

    }

  }