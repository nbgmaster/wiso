<?php 

  $new_pw = md5(rand());

  $new_pw = substr($new_pw, 7, 8);

  $crypt_password = MD5($new_pw);

  $qu2res = mysql_query("SELECT UserName, UserMail from users WHERE pwnew = '$activation_code'");
  $blubbX = mysql_num_rows($qu2res);

   while ($rw_cx = mysql_fetch_assoc($qu2res))  {

          $retreive_user = $rw_cx[UserName];
          $retreive_mail = $rw_cx[UserMail];

  }

  $sql_act_code = "UPDATE $user_tblname SET pwnew = '', UserPass = '$crypt_password' WHERE pwnew = '$activation_code'";

  mysql_query($sql_act_code) OR die(mysql_error());


  if ($blubbX == 1)  {

          $Header = "MIME-Version: 1.0\n";

          $Header .= "Content-type: text/plain; charset=iso-8859-1\n";

          $Header .= "From: admin@wiwistud.de";

          $from    = "From: admin@wiwistud.de";

          $to = $retreive_mail;

          $subject = "Deine Logindaten auf wiwistud.de";

          $message = "Hallo $retreive_user

Dein Kennwort auf wiwistud.de wurde ge&auml;ndert.

Deine Zugangsdaten lauten jetzt:

  Anmeldename: $retreive_user
  Kennwort: $new_pw

&Auml;ndere dein neues Passwort unbedingt gleich nach dem ersten Login.


Hinweis: In den meisten E-Mail-Programmen erscheint die Adresse als blauer
Link, auf den Du einfach klicken kannst. Falls dies nicht funktioniert,
kopiere die komplette Adresse in die obere Zeile des Browserfensters.

Bei Problemen wenden Dich bitte an die Administratoren der Website.

Dein wiwistud.de Team


- Achtung: Keine Antwort an diese Emailadresse m&ouml;glich!";

         mail($to, $subject, $message, $Header);


          $refresh_time = 10;

          $text01 = "Hiermit hast Du deine Kennwort&auml;nderung best&auml;tigt. <br>Deine neuen Logindaten wurden an deine Emailadresse <u>".$retreive_mail. "</u> verschickt!";

          $link   = "index.php";

          include("templates/refresh.php");

   }

   else  {

       echo"Ung&uuml;ltiger Seitenaufruf.";

   }
