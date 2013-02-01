<?php 

  if ($sec == "send")  {

      $efalse = "0";
 
      $Header = "MIME-Version: 1.0\n"; 
      $Header .= "Content-type: text/html; charset=iso-8859-1\n";
      $Header .= "From: admin@bachelorpioniere.de\n"; 

      $from  = "From: admin@bachelorpioniere.de"; 

      $to      = $receiver_email; 

      $an_link = "index.php?do=email&user_id=";

      $message = 

"Hallo $receiver!

 
$userdata_name hat dir auf http://www.bachelorpioniere.de eine Email geschickt:

_______________________________________________________________________________
$message
_______________________________________________________________________________

Auf http://$board_domain$board_direction$an_link$userdata_id kannst du $userdata_name antworten!


Mit freundlichen Grüßen, der Webmaster


- Achtung: Keine Antwort an diese Emailadresse möglich!";

      mail($to, $subject, $message, $from) 
      or $efalse = "1"; 

      $link   = "index.php?do=members";

      if ($efalse == "1")  {

          $text01 = "Email wurde nicht versendet!";

      }

      else  {

          $text01 = "Email wurde versendet!";

      }

      include("./templates/refresh.php");

  }

  if ($sec == "")  {

      $proof_limit = "true";

      $query_ignorer  = mysql_query("SELECT * from $buddylist_tblname WHERE friendid = '$userdata_id' && userid = '$user_id' && function = 'ignore'");  
 
      $check_ignorer = mysql_num_rows($query_ignorer);

      if ($check_ignorer != "0" or $check_ignorer != "")  { 

          $text01 = "Der User hat dich auf seiner Ignorierliste!<br> Versendnung nicht möglich!";

          $link   = "javascript:history.back();";

          include("templates/refresh.php");

          $proof_limit = "false";
  
      }

      if ($proof_limit == "true")  {

          $query_email = mysql_query("SELECT * from $user_tblname WHERE UserID = '$user_id'");
     
          while  ($row_email  =  mysql_fetch_assoc($query_email))  {
 
                  $receiver         = "$row_email[UserName]";
                  $receiver_email   = "$row_email[UserMail]";
 
          }

     include("./templates/email.php");

     }

  }

