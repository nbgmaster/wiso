<?php 

  include('../dbCon.php');

  // Retrieve data from Query String

  $mail = $_GET['mail'];

  // Escape User Input to help prevent SQL Injection

  $mail = mysql_real_escape_string($mail);
 
  //build query

  $rowA = 0;

  if ($mail != "")  {

          $qu2res = mysql_query("SELECT UserName, activation_code, pwnew from users WHERE UserMail = '$mail'");

          $rowA = mysql_num_rows($qu2res);

          while ($rw_cx = mysql_fetch_assoc($qu2res))  {

                 $retreive_user = $rw_cx[UserName];
                 $active_x = $rw_cx[activation_code];
                 $pwnew = $rw_cx[pwnew];

          }

          $query_admin_config = mysql_query("SELECT board_domain, board_direction from admin_config");

          while  ($row_admin_config  =  mysql_fetch_assoc($query_admin_config))  {

          $board_domain          =  $row_admin_config["board_domain"];      // Board Domain

          $board_direction       =  $row_admin_config["board_direction"];   // Board Direction

          }

          if ($rowA == 1 && $active_x == "" && $pwnew == "")  {

             // $new_pw = md5(rand());

            //  $new_pw = substr($new_pw, 7, 8);

             // $crypt_password = MD5($new_pw);

            //  $upd_cx = "UPDATE users SET UserPass = '$crypt_password', pwnew = '1' WHERE UserMail = '$mail' LIMIT 1";

            //  mysql_query($upd_cx) OR die(mysql_error());

                $act_code = md5 (uniqid (rand()));

                $act_link = "index.php?do=activate_newpw&activation_code=";

                $upd_cx = "UPDATE users SET pwnew = '$act_code' WHERE UserMail = '$mail' LIMIT 1";

                mysql_query($upd_cx) OR die(mysql_error());

                $Header = "MIME-Version: 1.0\n";

                $Header .= "Content-type: text/plain; charset=iso-8859-1\n";

                $Header .= "From: admin@wiwistud.de";

                $from    = "From: admin@wiwistud.de";

                $to = $mail;

                $subject = "Deine Logindaten auf wiwistud.de";

                $message = "Hallo $retreive_user

Jemand (wahrscheinlich Du) hat ein neues Kennwort f&uuml;r Deinen Zugang auf wiwistud.de angefordert.

Um dies zu best&auml;tigen und ein neues Kennwort per E-Mail zu erhalten, musst du folgenden Link aufrufen:

http://$board_domain$board_direction$act_link$act_code

Hinweis: In den meisten E-Mail-Programmen erscheint die Adresse als blauer
Link, auf den Du einfach klicken kannst. Falls dies nicht funktioniert,
kopiere die komplette Adresse in die obere Zeile des Browserfensters.

Bei Problemen wenden Dich bitte an die Administratoren der Website.

Dein wiwistud.de Team


- Achtung: Keine Antwort an diese Emailadresse m&ouml;glich!";

 mail($to, $subject, $message, $Header);

          }

  }

  if ($rowA == 1 && $active_x == "" && $pwnew == "")  {

      $queryString = "MailCorrect";

  }

  else if ($rowA == 1 && $active_x != "" && $pwnew == "")  {

      $queryString = "NotActive";

  }

  else if ($rowA == 1 && $active_x == "" && $pwnew != "")  {

      $queryString = "Locked";

  }

  else if ($rowA == 0)  {

      $queryString = "MailWrong";

  }

  echo $queryString;

