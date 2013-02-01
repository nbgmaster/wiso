<?php

  if ( isset($_GET["do"]) == "submit" && isset($_POST['email']) != "" )  {

       include("weltzeituhr/dbCon.php");

       $password = MD5($_POST["password"]);

       $sel = mysql_query("SELECT id, email from mdl_user WHERE username = '$_POST[username]' && password = '$password' && email = '$_POST[email]' ");
       $sel_res = mysql_num_rows($sel);

       if ($sel_res > 0) {

               while ( $rwSel = mysql_fetch_assoc($sel) )  {

                       $user_id_old = $rwSel["id"];

               }

       }

       if ( $sel_res == 0 )  {

            $timestamp = time();

            $lang1 = "DE";
            $lang2 = "de_utf8";

            if (substr($_POST["lvnr"], 0, 10) == "LV_20_220_" && $_POST[uni] != "Uni Erlangen-N&uuml;rnberg (FAU)")  {

                       $lang2 = "en_utf8";
            }

            $query   = "INSERT into mdl_user (auth, confirmed, mnethostid, username, password, firstname, lastname, email, city, country, lang, firstaccess, lastip, vhb, uni) ";
            $query  .= "VALUES ('manual', '1', '1','$_POST[username]', '$password', '$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[city]', '$lang1', '$lang2', '$timestamp', '$_SERVER[REMOTE_ADDR]', '1', '$_POST[uni]')";

            $result  = @mysql_query($query) OR die(mysql_error());

            $user_id_new = mysql_insert_id();

            // Send email containing important data like password and username

            $Header = "MIME-Version: 1.0\n";

            $Header .= "Content-type: text/plain; charset=iso-8859-1\n";

            $Header .= "From: VHB - Moodle Plattform Uni Erlangen-N&uuml;rnberg <admin@wi2.uni-erlangen.de>";

            $from    = "From: VHB - Moodle Plattform Uni Erlangen-N&uuml;rnberg <admin@wi2.uni-erlangen.de>";
           
            $subject = "Deine Zugangsdaten f&uuml;r Moodle";

$message = "Hallo $_POST[firstname] $_POST[lastname]!

Deine Registrierung auf der Moodle Plattform der Universit&auml;t Erlangen-N&uuml;rnberg war erfolgreich!

Du kannst dich in Zukunft mit deinem Username und deinem Passwort einloggen und hast
damit Zugriff auf alle Kursunterlagen deines VHB-Kurses!

Deine Logindaten lauten:

Benutzername: $_POST[username]
Passwort: $_POST[password]

Du erreichst die Moodle-Plattform unter http://www.wi2.uni-erlangen.de/vhbm/


Dein Moodle Team";

            if ( substr($_POST["lvnr"], 0, 10) == "LV_20_220_" && $_POST[uni] != "Uni Erlangen-N&uuml;rnberg (FAU)" or substr($_POST["lvnr"], 0, 10) == "LV_20_475_" )  {

            $subject = "Your Login Data for Moodle";

$message = "Hello $_POST[firstname] $_POST[lastname]!

Your registration on the moodle platform of the Erlangen-Nuremberg university was successful!

From now on, you can login with your username and your password and therewith you have
access to all course documents of your VHB course!

Your login data is as follows:

username: $_POST[username]
password: $_POST[password]

You can access the moodle platform under http://www.wi2.uni-erlangen.de/vhbm/


Your Moodle Team";

            }

            mail($_POST['email'], $subject, $message, $Header);


            $user_id = $user_id_new;

       }

        /* Courses

        BIAR: LV_20_475_1
        EBM:  LV_20_19_3
        EBEC: LV_20_220_1
        EBD:  LV_20_91_2
        MGP:  LV_20_257_1
        PCP:  LV_20_415_1

        */

             if (substr($_POST["lvnr"], 0, 10) == "LV_20_19_3")  { $course_id = 2; }
        else if (substr($_POST["lvnr"], 0, 10) == "LV_20_475_")  { $course_id = 11; }
        else if (substr($_POST["lvnr"], 0, 10) == "LV_20_220_" && $_POST[uni] != "Uni Erlangen-N&uuml;rnberg (FAU)")  { $course_id = 9; }
        else if (substr($_POST["lvnr"], 0, 10) == "LV_20_220_" && $_POST[uni] == "Uni Erlangen-N&uuml;rnberg (FAU)")  { $course_id = 2; }
        else if (substr($_POST["lvnr"], 0, 10) == "LV_20_91_2")  { $course_id = 10; }
        else if (substr($_POST["lvnr"], 0, 10) == "LV_20_257_")  { $course_id = 7; }
        else if (substr($_POST["lvnr"], 0, 10) == "LV_20_415_")  { $course_id = 4; }
        else $course_id = 0;

      /*  if ( $sel_res > 0 )  {

                $user_id = $user_id_old;

                $sel2 = mysql_query("SELECT course from vhb_users WHERE course = '$course_id' && user = '$user_id_old'");
                $sel2_res = mysql_num_rows($sel2);

        } */

        if ( $sel_res == 0 )  {

             $query2   = "INSERT into vhb_users (course, user, role, benutzer, password) ";
             $query2  .= "VALUES ('$course_id', '$user_id', '5','$_POST[username]', '$password')";

             $result2  = @mysql_query($query2) OR die(mysql_error());

        } 

?>

<center><b>Sie werden automatisch weitergeleitet...</b></center>

<form class="loginform" name="login" id="login" method="post" action="http://www.lms.wi2.uni-erlangen.de/login/index.php">
<input style="visibility:hidden" type="text" name="username" id="login_username" value="<?php echo $_POST["username"]; ?>" />
<input style="visibility:hidden" type="password" name="password" id="login_password" value="<?php echo $_POST["password"]; ?>" />
</form>

<SCRIPT LANGUAGE = "JAVASCRIPT">document.login.submit();</SCRIPT>


<?php

}

else if ( isset($_GET["do"]) == "submit" ) 
{ 
	echo ""; 
} 
else if ( isset($_POST["LOGIN"]) ) 
{ ?>

<html>
<head>
</head>
<body>

<!--

[LOGIN] => 123456X15
[PASSWORT] => 73385738
[DATAVERSION] => 2.0
[LVNR] => LV_159_379_1_48_1
[BEZEICHNUNG] => Testveranstaltung
[VORNAME] => Technik-Teststudent Ingo
[NACHNAME] => Teststudent M&uuml;ller
[STRASSE] => Feldkirchenstra&szlig;e 21
[PLZ] => 96049
[ORT] => Bamberg
[EMAIL] => ingo.mueller@uni-bamberg.de
[HOCHSCHULE] => FH Amberg-Weiden
[SEX] => weiblich
[GEBDAT] => 15.10.1976
[STATUS] => ok
[ANMELDUNG] => 17.09.2008 14:45:56.000
[STUDIENFACH] => Betriebswirtschaftslehre
[ABSCHLUSS] => Diplom (FH)

Bei Fragen an technik@vhb.org wenden
-->


<FORM NAME = "DATA" ACTION = "registration.php?do=submit" METHOD = "POST">

<INPUT TYPE = "HIDDEN" NAME = "username" VALUE = "<?php echo $_POST["LOGIN"];?>">
<INPUT TYPE = "HIDDEN" NAME = "password" VALUE = "<?php echo $_POST["PASSWORT"];?>">
<INPUT TYPE = "HIDDEN" NAME = "dataversion" VALUE = "<?php echo $_POST["DATAVERSION"];?>">
<INPUT TYPE = "HIDDEN" NAME = "lvnr" VALUE = "<?php echo $_POST["LVNR"];?>">
<INPUT TYPE = "HIDDEN" NAME = "bezeichnung" VALUE = "<?php echo $_POST["BEZEICHNUNG"];?>">
<INPUT TYPE = "HIDDEN" NAME = "firstname" VALUE = "<?php echo $_POST["VORNAME"];?>">
<INPUT TYPE = "HIDDEN" NAME = "lastname" VALUE = "<?php echo $_POST["NACHNAME"];?>">
<INPUT TYPE = "HIDDEN" NAME = "city" VALUE = "<?php echo $_POST["ORT"];?>">
<INPUT TYPE = "HIDDEN" NAME = "email" VALUE = "<?php echo $_POST["EMAIL"];?>">
<INPUT TYPE = "HIDDEN" NAME = "uni" VALUE = "<?php echo $_POST["HOCHSCHULE"];?>">

</FORM>

<SCRIPT LANGUAGE = "JAVASCRIPT">document.DATA.submit();</SCRIPT>

</body>
</html>

<?php }
