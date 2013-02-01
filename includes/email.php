<?php 

  if ($sec == "send")  {

      $efalse = "0";
 
      $Header = "MIME-Version: 1.0\n"; 
      $Header .= "Content-type: text/plain; charset=iso-8859-1\n";
      $Header .= "From: admin@wiwistud.de\n"; 

      $from  = "From: admin@wiwiszud.de"; 

      $to      = $receiver_email; 

      $an_link = "index.php?do=email&user_id=";

      $message = "Hallo $receiver!

 
$userdata_name hat dir auf http://www.wiwistud.de eine Email geschickt:

_______________________________________________________________________________
$message
_______________________________________________________________________________

Auf http://$board_domain$board_direction$an_link$userdata_id kannst du $userdata_name antworten!


Dein 
wiwistud.de Team


- Achtung: Keine Antwort an diese Emailadresse möglich!";

      mail($to, $subject, $message, $Header) 
      or $efalse = "1"; 

      $link   = "index.php?do=members";

      if ($efalse == "1")  {

          $text01 = "Email wurde nicht versendet!";

      }

      else  {

          $text01 = "Email wurde versendet!";

      }

      $refresh_time = "2";

      include("./templates/refresh.php");

  }

  if ($sec == "")  {

      if ($userdata_id != "")  {

          $proof_limit = "true";

          $query_ignorer  = mysql_query("SELECT * from $buddylist_tblname WHERE friendid = '$userdata_id' && userid = '$user_id' && function = 'ignore'");  
 
          $check_ignorer = mysql_num_rows($query_ignorer);

          if ($check_ignorer > 0)  { 

              $text01 = "Der User hat dich auf seiner Ignorierliste! Versendung nicht möglich!";

              $link   = "javascript:history.back();";

              $refresh_time = "2";

              include("templates/refresh.php");

              $proof_limit = "false";
  
          }

          $query_email = mysql_query("SELECT UserName, UserMail, formmailer from $user_tblname WHERE UserID = '$user_id'");
     
          while  ($row_email  =  mysql_fetch_assoc($query_email))  {
 
                  $receiver         = "$row_email[UserName]";
                  $receiver_email   = "$row_email[UserMail]";
                  $formm            = "$row_email[formmailer]";
   
          }

          if ($formm == "0" )  { 

              $text01 = "Der User möchte keine Emails per Formmailer erhalten! Versendung nicht möglich!";

              $link   = "javascript:history.back();";

              $refresh_time = "2";

              include("templates/refresh.php");

              $proof_limit = "false";
  
          }

          if ($proof_limit == "true")  {
   
              include("./templates/email.php");
 
          }

      }

      else  {

          include("templates/no_permission.php");

      }

  }
