<?php 

  if ($module == "")  {

      include("./templates/admin/massemail.php");

  }

  else  {

      $Header = "MIME-Version: 1.0\n";
 
      $Header .= "Content-type: text/html; charset=iso-8859-1\n";

      $Header .= "From: $admin_email\n"; 
 
      $query_massemail = mysql_query("SELECT * from $user_tblname");
  
      while ($row_massemail  =  mysql_fetch_assoc($query_massemail))  { 

             $to = "$row_massemail[UserMail]"; 

             mail($to, $subject, $message, $Header);

      }

  $text01 = "Emails wurden verschickt!";
  $link   = "index.php?do=admin&sec=massemail";

  include("./templates/refresh.php");

  }