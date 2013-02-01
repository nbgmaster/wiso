<?php 

  $query_admin_config = mysql_query("SELECT * from $admin_config_tblname");    

  while  ($row_admin_config  =  mysql_fetch_assoc($query_admin_config))  {

          $admin_email           =  $row_admin_config["admin_email"];       // Admin Email

          $board_domain          =  $row_admin_config["board_domain"];      // Board Domain

          $board_direction       =  $row_admin_config["board_direction"];   // Board Direction

  }

  $Header = "MIME-Version: 1.0\n";

  $Header .= "Content-type: text/plain; charset=iso-8859-1\n";

  $Header .= "From: admin@wiwistud.de";

  $from    = "From: admin@wiwistud.de"; 

  $to = $_Sre_email; 

  $act_link = "index.php?do=activate_user&activation_code=";

  $subject = "Erfolgreiche Registrierung auf www.wiwistud.de"; 

  if ($m_account_activation == "no")  {

  $message = "Hallo $_Sre_nickname<br><br>

              Deine Registrierung auf $board_domain war erfolgreich!<br><br>

              Du kannst dich in Zukunft mit deinem Nickname und deinem Passwort einloggen und hast 
                    
              damit Zugriff auf die komplette Website!<br><br>

              Solltest du einmal dein Passwort vergessen, dann schreib einfach eine Email an 

              admin@wiwistud.de!



              Wir wünschen Dir viel Spaß auf der Homepage!


              Dein 
              wiwistud.de Team";

  }
  
  if ($m_account_activation == "email")  {


  $text02 = "<br><b>Überprüfe deine Emails um deinen Account freizuschalten!</b>";

  $message = 

"Hallo $_Sre_nickname

Deine Registrierung auf http://www.wiwistud.de war erfolgreich!

Du musst deine Registrierung noch mit folgendem Link bestätigen:

http://$board_domain$board_direction$act_link$act_code


Deine Logindaten lauten:

Nickname: $_Sre_nickname
Passwort: $_Sre_password

Du solltest diese Email speichern, damit Du deine Logindaten nachschauen kannst falls Du sie einmal vergisst.


Bei Aktivierungs- oder Loginproblemen gibt es folgende Lösungen:

1. Wenn du den Internet Explorer verwenden solltest, musst du den Datenschutz Regler
in den Browser Einstellungen nach unten setzen!

2. Solltest Du dich immer noch nicht einloggen können, dann schreib einfach eine kurze Mail an EINEN Administrator.
Wie du einen Admin kontaktieren kannst erfährst du in den FAQ: http://www.wiwistud.de/index.php?do=faq
 

Dein 
wiwistud.de Team


- Achtung: Keine Antwort an diese Emailadresse möglich!";

  }

  if ($m_account_activation == "admin")  {

  $message = "Hallo $_Sre_nickname<br><br>

              Deine Registrierung auf $board_domain war erfolgreich!<br><br>

              In den nächsten Stunden werden deine Daten überprüft und dann ggf. vom Admin freigeschalten.

              ";

  }

  mail($to, $subject, $message, $Header);
