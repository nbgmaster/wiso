<?php 

  include('../dbCon.php');

  $timestamp = time();

  // Retrieve data from Query String

  $mail = $_GET['mail'];

  // Escape User Input to help prevent SQL Injection

  $mail = mysql_real_escape_string($mail);
 
  //build query

  $rowA = 0;

  if ($mail != "")  {

          $qu2res = mysql_query("SELECT UserName, activation_code, actnew from users WHERE UserMail = '$mail'");

          $rowA = mysql_num_rows($qu2res);

          while ($rw_cx = mysql_fetch_assoc($qu2res))  {

                 $retreive_user = $rw_cx[UserName];
                 $active_x = $rw_cx[activation_code];
                 $actnew = $rw_cx[actnew];

          }

          $actdistance = $timestamp - $actnew;

          $actok = 0;

          if ($actdistance > 43200 || $actnew == 0) $actok = 1;

          if ($rowA == 1 && $active_x != "" && $actok == 1)  {

              $upd_cx = "UPDATE users SET actnew = '$timestamp' WHERE UserMail = '$mail' LIMIT 1";

              mysql_query($upd_cx) OR die(mysql_error());


              $query_admin_config = mysql_query("SELECT * from admin_config");

              while  ($row_admin_config  =  mysql_fetch_assoc($query_admin_config))  {

                      $board_domain          =  $row_admin_config["board_domain"];      // Board Domain

                      $board_direction       =  $row_admin_config["board_direction"];   // Board Direction

              }


              $act_link = "index.php?do=activate_user&activation_code=";


                $Header = "MIME-Version: 1.0\n";

                $Header .= "Content-type: text/plain; charset=iso-8859-1\n";

                $Header .= "From: admin@wiwistud.de";

                $from    = "From: admin@wiwistud.de";

                $to = $mail;   

                $subject = "Dein Aktivierungslink auf wiwistud.de";

                $message = "Hallo $retreive_user

Du hast einen Aktivierungslink auf www.wiwistud.de angefordert!

Dein Aktivierungslink: http://$board_domain$board_direction$act_link$active_x


Dein wiwistud.de Team


- Achtung: Keine Antwort an diese Emailadresse möglich!";

                mail($to, $subject, $message, $Header);

          }

  }

  if ($rowA == 1 && $active_x != "" && $actok == 1)  {

      $queryString = "MailCorrect";

  }

  else if ($rowA == 1 && $active_x != "" && $actok == 0)  {

      $queryString = "Locked";

  }

  else if ($rowA == 1 && $active_x == "")  {

      $queryString = "AlreadyOpen";

  }

  else if ($rowA == 0)  {

      $queryString = "MailWrong";

  }

  echo $queryString;

