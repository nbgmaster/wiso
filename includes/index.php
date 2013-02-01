<?php 

 if (isset($_GET['fileID']))  {

$fileheader = substr($_GET['fileID'], strlen($_GET['fileID'])-3);


if ($fileheader == "gif")  {

header("Content-Type: image/gif");

}

if ($fileheader == "bmp")  {

header("Content-Type: image/bmp");

}

if ($fileheader == "jpg")  {
header("Content-Type: image/jpeg");

}


if ($fileheader == "doc")  {
header("Content-Type: application/msword");

}

if ($fileheader == "ocx")  {
header("Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");

}

if ($fileheader == "lsx")  {
header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");

}

if ($fileheader == "ptx")  {
header("Content-Type: application/vnd.openxmlformats-officedocument.presentationml.presentation");

}

if ($fileheader == "pdf")  {

header("Content-Type: application/octetstream");

}


if ($fileheader == "xls")  {
header("Content-Type: application/vnd.ms-excel");

}

if ($fileheader == "zip")  {
header("Content-Type: application/x-compressed");

}


if ($fileheader == "rar")  {
header("Content-Type: application/octet-stream");

}

if ($fileheader == "txt")  {
header("Content-Type: text/plain");

}


if ($fileheader == "ppt")  {
header("Content-Type: application/vnd.ms-powerpoint");

}


include("config.php");

$nameX = "";

if ($_GET['do'] == "db")  {

    $query_database = mysql_query("SELECT dateiname from $database_tblname WHERE attachment = '$fileID'");

    while ($row_database  = mysql_fetch_assoc($query_database))  { 

           $nameX = $row_database[dateiname];

    }

}

else  {


    $query_po = mysql_query("SELECT dateiname from $posts_tblname WHERE attachment = '$fileID'");

    while ($row_po  = mysql_fetch_assoc($query_po))  { 

           $nameX = $row_po[dateiname];

    }

}


if ($nameX == "")  {

header("Content-Disposition: attachment; filename=\"$_GET[fileID]\"");

}

else  {

header("Content-Disposition: attachment; filename=\"$nameX\"");

}

if ($_GET['do'] == "db")  {
$filename = "database/$_GET[fileID]";
}
else  {
$filename = "attachments/$_GET[fileID]";
}

$fp = fopen($filename, "rbhjh");
if ($fp)
{
$buffer = fread ($fp, filesize ($filename));
echo $buffer;

if ($_GET['do'] == "db")  {

          $query_database = mysql_query("SELECT * from $database_tblname WHERE attachment = '$fileID'");

          while ($row_database  = mysql_fetch_assoc($query_database))  { 

                 $IDFile   = "$row_database[id]";
                 $NameFile = "$row_database[description]";

                 $downloadsNow = $row_database[downloads];
                 $downloadsNow++; 

 
          }

          $query_reload = mysql_query("SELECT * FROM $reload2_tblname WHERE user_id = '$user_id' && db_id = '$IDFile'");
          $check_Exdata = mysql_num_rows($query_reload);

          if ($check_Exdata != "1")  {

          $query_newdlcount = "UPDATE $database_tblname SET downloads = '$downloadsNow' WHERE attachment = '$fileID'";     

          mysql_query($query_newdlcount) OR die(mysql_error());
 
          $query_Ndata  = "INSERT into $reload2_tblname (user_id, db_id)";
          $query_Ndata .= "VALUES ('$user_id', '$IDFile')";

          $result_Ndata = @mysql_query($query_Ndata);

          }

}

fclose($fp);
}
exit();
}


  // Start Session
/*
  session_cache_limiter('none');

  ini_set('session.gc_maxlifetime',300);
*/
  session_start();
  ob_start();


?><noscript><meta http-equiv="refresh" content="0;URL=noscript.htm"></noscript><?php 


  // Load:: Config Data

  include("config.php");


  function GetUser($userID)  { 

   //   include("dbCon.php"); 

      $queryUser = mysql_query("SELECT * from users WHERE UserID = '$userID'");
  
      while ($rowUser = mysql_fetch_assoc($queryUser))  {  

             echo"$rowUser[UserName]";

      }  

  }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

       <title>Bachelorstudiengang Wirtschaftswissenschaften an der Universität Erlangen - Nürnberg</title>

        <META NAME="Title" CONTENT="Bachelor WiSo Nürnberg">
        <META NAME="Author" CONTENT="Stefan Richter">
        <META NAME="Publisher" CONTENT="Stefan Richter">
        <META NAME="Copyright" CONTENT="www.nbg-master.de (Stefan Richter)">
        <META NAME="Keywords" CONTENT="Studentenportal,kostenlos,Bachelor,International,WiSo,RW,ReWi,Studenten,Student,Studium,BWL,VWL,Uni,Hochschule,Unterlagen,Forum,Betriebswirtschaft,Hausarbeiten,Klausur,Mitschriften,Nürnberg,Erlangen,Bildung,Management,Controlling,Marketing,Statistik,Mathematik,Recht,Privatrecht,Makro,Mikro,Ökonomik,Wirtschaftswissenschaften,Wirtschaftspädagogik,Skript,Zusammenfassungen">
        <META NAME="Description" CONTENT="Forum für die Bachelor Studenten im Fach Wirtschaftswissenschaften an der WiSo Nürnberg">
        <META NAME="Abstract" CONTENT="Forum für die Bachelor Studenten im Fach Wirtschaftswissenschaften an der WiSo Nürnberg">
        <META NAME="Robots" CONTENT="INDEX,FOLLOW">

       <?php 

         // Load:: Style Data

         if ($browser == "IE")  {

             include("stylesheets/style_IE.php");

         }

         else if ($browser == "IE7")  {

             include("stylesheets/style_IE7.php");

         }

         else  {

             include("stylesheets/style_gecko.php");

         }


         // Load :: Newsticker

         include("includes/newsticker.php");

       ?>

       <meta http-equiv="imagetoolbar" content="no">

       <script>

       var overlib_bg = "#" + '<?php echo $cell_bg02; ?>';

       var overlib_color = "#" + '<?php echo $ol_c; ?>';

       </script>

       <script type="text/javascript" src="overlib/overlib.js"></script>

       <script type="text/javascript" src="javascript/popup.js" language="JavaScript1.2"></script>
       <script type="text/javascript" src="javascript/bbcode.js" language="JavaScript1.2"></script>

       <link rel="alternate" type="application/rss+xml" title="Die letzten aktiven Themen auf wiwistud.de" href="rss.php"/>
       <link rel="alternate" type="application/rss+xml" title="Der Newsticker auf wiwistud.de" href="rss_newsticker.php"/>

<script language="javascript">
        /*
var actualdate = new Date();
var todate = new Date(2008,08,14,14,00,00);

var weektext = " Wochen, ";
var daytext = " Tage";
var hourtext = " Stunden";
var minutetext = " Minuten";
var secondtext = " Sekunden";

var seconds, minutes, hours, days, weeks;
var sh_seconds, sh_minutes, sh_hours, sh_days, sh_weeks;
var remain;

function Countdown() {

 actualdate = new Date();
 difference = todate - actualdate;
 seconds = difference / 1000;

 sh_weeks = Math.floor(seconds / 60 / 60 / 24 / 7);
 remain = seconds - (sh_weeks * 7 * 24 * 60 * 60);
 sh_days = Math.floor(remain / 60 / 60 / 24);
 remain = remain - (sh_days * 24 * 60 * 60);
 sh_hours = Math.floor(remain / 60 / 60);
 remain = remain - (sh_hours * 60 * 60);
 sh_minutes = Math.floor(remain / 60);
 remain = remain - (sh_minutes * 60);
 sh_seconds = Math.floor(remain);

 if (document.getElementById('weeks')) { document.getElementById('weeks').innerHTML = sh_weeks + weektext; }
 if (document.getElementById('days')) { document.getElementById('days').innerHTML = sh_days + daytext; }
 if (document.getElementById('hours')) { document.getElementById('hours').innerHTML = sh_hours + hourtext; }
 if (document.getElementById('minutes')) { document.getElementById('minutes').innerHTML = sh_minutes + minutetext; }
 if (document.getElementById('seconds')) { document.getElementById('seconds').innerHTML = sh_seconds + secondtext; }
}

function init() {

 setInterval("Countdown()",1000);
 Countdown();
}

init();
          */
</script>


  </head>

  <body>

<center>

  <div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>

  <table cellspacing="0" cellpadding="0">

  <tr>

  <td valign="top">

  <a name="top"></a>

  <?php  include("index2.php"); ?>

   </td>

   <td valign="top" style="padding: 5px 7px 7px 7px;" align="left" width="180">


  <table cellspacing="0" cellpadding="0"><tr><td align="left" valign="top">

   <?php  if ($update_profile == "1" && $update_award == "1" or $userdata_id == "")  { include("login/login.php"); ?>

<br>

<?php  } if ($action == "")  { ?>

<?php  if ($update_profile == "1"  && $update_award == "1" && $userdata_id != "" && $auto_logon_id != "" && $auto_logon_session != "" && $do == "" && $f == "" && $c == "" && $t == "")  { ?>

<!--table cellspacing="0" cellpadding="0"><form action="index.php" method="post"><tr><td>
  <select onChange="this.form.submit();" name="changeviewM" style="width:180px;font-size:13px">

  <option value="1"
  <?php  if ($act_view == 1)  { echo" selected"; } ?>
  >nur meine Foren anzeigen</option>

  <option value="0"
  <?php  if ($act_view == 0)  { echo" selected"; } ?>
  >alle Foren anzeigen</option>

  </select>
</td></tr>
</form>
</table>

<br-->

<?php  } /* if ($userdata_id != "" && $update_profile == 1 && $update_award == 1) { ?>


   <table cellpadding="3" cellspacing="1" class="tableinborder" width="180">

    <tr>

     <td class="catbg" align="left">

     <b>Für unsere Erstsemestler</b>

     </td>

    </tr>

    <tr>


   <td valign="top" align="left" class="tableb">
   <?php  if ($browser == "IE" || $browser == "IE7") $fuck_you = "margin-left:20px;";
   else $fuck_you = "padding-left:16px;"; ?>
   <ul type="square" style="<?php echo"$fuck_you";?>margin-bottom:2px;font-size:12px;line-height:18px">
   <li><a href="?t=1030"><b>Wichtige Informationen zum Planspiel</b></a></li>
   <br>
   <li><a href="?f=30"><b>Stelle deine Fragen im "Planspiel"-Forum</b></a></li>
   </ul>

   </td>
</tr></table>

     <br>

<?php  } */ if ($userdata_id != "" && $update_profile == 1 && $update_award == 1) { ?>

</td></tr><tr><td valign="top" align="left">



<table cellpadding="3" cellspacing="1" class="tableinborder" width="180">

    <tr>

     <td class="catbg" align="left">

     &nbsp;<b>wiwistud.de Rangliste</b>&nbsp;

     </td>

    </tr>

    <tr>


   <td valign="top" style="padding: 7px 7px 7px 7px;" align="left" class="tableb">


<table cellpadding="2" cellspacing="0" width="100%" style="border:1px solid #000;">

<tr>

<td class="tablec" align="left" style="font-size:10px;" onMouseOver="this.className='mouseover2';" onMouseOut="this.className='mouseout3';" onClick="location.href='?do=ranking&term=ws0809'">
&nbsp;<b>&raquo;</b> <u>Wintersemester 08/09</u>

</td></tr></table>

<br>

<table cellpadding="2" cellspacing="0" width="100%" style="border:1px solid #000;">

<tr>

<td class="tablec" align="left" style="font-size:10px;" onMouseOver="this.className='mouseover2';" onMouseOut="this.className='mouseout3';" onClick="location.href='?do=ranking&term=ss08'">
&nbsp;<b>&raquo;</b> <u>Sommersemester 2008</u>

</td></tr></table>

<br>
          <table cellpadding="2" cellspacing="0" width="100%" style="border:1px solid #000">

<tr>

<td class="tablec" align="left" style="font-size:10px;" onMouseOver="this.className='mouseover2';" onMouseOut="this.className='mouseout3';" onClick="location.href='?do=ranking&term=ws0708'">
&nbsp;<b>&raquo;</b> <u>Wintersemester 07/08</u>

</td></tr></table>


<?php  if ($temp_awa == 0 && $update_wiso == 1)  { ?>
<br>

          <table cellpadding="0" cellspacing="0" width="100%" style="border:1px solid #000;">
<form name="formXX" method="post">
<tr>

<td class="tablec" align="center" style="font-size:11px;padding-top:5px;padding-bottom:5px;" onMouseOver="this.className='mouseover2';" onMouseOut="this.className='mouseout3';" onClick="document.formXX.submit()">
<b>Die Umfrage für das Wintersemester 2008/2009 läuft! <br><br><span style="color:red">Bewerte jetzt deine Lehrveranstaltungen!</span></b>

</td></tr><input type="hidden" name="woohoo"><input type="hidden" name="userXX" value="<?php echo"$userdata_id";?>"></form></table>

<?php  }  ?>

   </td>

</tr>

</table>

<br>

<?php  } ?>

<table cellpadding="3" cellspacing="1" class="tableinborder" width="180">

    <tr>

     <td class="catbg" align="left">

     &nbsp;<b>Werbung</b>&nbsp;

     </td>

    </tr>

    <tr>

   <td valign="top" style="padding: 5px 7px 7px 7px;" align="center" class="tableb">

<script type="text/javascript" src="javascript/lightbox.js" language="JavaScript1.2"></script>
<script type="text/javascript" src="javascript/hits.js" language="JavaScript1.2"></script>

<link href="stylesheets/lightbox.css" rel="stylesheet" type="text/css" media="all">

<!--<a href="http://www.jobathlon.de" target="_blank"><img src="images/flyer/09-11-16-small.jpg" border="1" width="160"></a>
<br><br>-->

<!--<a href="images/flyer/09-11-19.jpg" rel="lightbox"><img src="images/flyer/09-11-19-small.jpg" border="1" width="160"></a>
<br><br>-->

<!--
VORLAGEN

NR #1: Vorschaubild, Link auf Webseite
a href="http://www.stylectric.com" target="_blank"><img src="images/flyer/09-04-30-small.jpg" border="1"></a>
<br><br>

NR #2: Vorschaubild, Link auf Flyer
<!--<a href="images/flyer/09-11-05.jpg" rel="lightbox"><img src="images/flyer/09-11-05-small.jpg" border="1"></a>-->
<!--table><tr><td align="left">
<span style="font-size:12px;">
<b>Das wiwistud.de Team wünscht allen Mitgliedern viel Erfolg bei den anstehenden Prüfungen!</b>
<br><br>
Neue Prüfungsergebnisse erfahrt ihr <a href="https://www.campus.uni-erlangen.de/feed/rss.xml" target="_blank"><b><u>hier</u></b></a>.
    </span>
</td></tr></table>
<br-->

    <a href="mailto:werbung@wiwistud.de" class="small"><span class="small"><u>Werbung schalten?</u></span></a>

   </td>

</tr>

</table>

</td></tr></table>

</td>

<td valign="top" style="padding: 5px 7px 7px 0px;">

<script type="text/javascript"><!--
google_ad_client = "pub-5349254049838364";
/* 120x600, Erstellt 11.10.09 */
google_ad_slot = "1824627364";
google_ad_width = 120;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>


 <!--table cellpadding="1" cellspacing="1" class="tableinborder" width="240">

    <tr>

     <td align="left" class="catbg">

     <table cellspacing="0" cellpadding="0" style="height:17px"><tr><td class="catbg">

     <a href="index.php?hidecounter=<?php echo"$countK";?>">

     <img src="images/templates/<?php  echo"$template"; ?>/<?php  echo"$imgK"; ?>.gif" border="0"></a>

     </td><td class="catbg">

     <b>Klausurcounter: noch...</b>

     </td></tr></table>

     </td>

    </tr>

<?php  if ( $my_count == 1 || !$my_count )  { ?>

    <tr>

   <td valign="top" style="padding: 3px 4px 4px 4px;" align="left" class="tableb">

<b><u>Assessmentphase</u></b>

<br>

<table cellspacing="0" cellpadding="0" style="line-height:18px">

<?php   klausurCounter("09.02.2009","Buchführung"); ?>
<?php   klausurCounter("13.02.2009","E-Business"); ?>
<?php   klausurCounter("17.02.2009","UMV II"); ?>
<?php   klausurCounter("19.02.2009","Mikro"); ?>
<?php   klausurCounter("20.02.2009","U&U"); ?>
<?php   klausurCounter("23.02.2009","Absatz"); ?>
<?php   klausurCounter("27.02.2009","Makro"); ?>
<?php   klausurCounter("02.03.2009","UMV I"); ?>
<?php   klausurCounter("04.03.2009","P-Recht I"); ?>

</table>

<br>

<b><u>Bachelorphase</u></b>

<br>

<table cellspacing="0" cellpadding="0" style="line-height:18px">

<?php   klausurCounter("09.02.2009","Wirt.-völkerrecht"); ?>
<?php   klausurCounter("09.02.2009","Datenanalyse"); ?>
<?php   klausurCounter("10.02.2009","PEWI II"); ?>
<?php   klausurCounter("10.02.2009","Statistik"); ?>
<?php   klausurCounter("11.02.2009","Welthandelsrecht"); ?>

<?php   klausurCounter("11.02.2009","I&F"); ?>
<?php   klausurCounter("12.02.2009","Cooperative Studies"); ?>
<?php   klausurCounter("12.02.2009","Marketing Mngm. II"); ?>
<?php   klausurCounter("12.02.2009","U.-Besteuerung I"); ?>
<?php   klausurCounter("12.02.2009","Entrepreneurship"); ?>

<?php   klausurCounter("13.02.2009","Topics in Micro."); ?>
<?php   klausurCounter("13.02.2009","Mon. Außenwirt.-theorie"); ?>
<?php   klausurCounter("13.02.2009","Arbeitsrecht I"); ?>
<?php   klausurCounter("16.02.2009","Europarecht II"); ?>
<?php   klausurCounter("16.02.2009","Controlling (Bus. Develop.)"); ?>

<?php   klausurCounter("16.02.2009","U.-& Gesellschaftsrecht I"); ?>
<?php   klausurCounter("16.02.2009","Ö-Recht I"); ?>
<?php   klausurCounter("17.02.2009","Arbeitsmarktökonomik"); ?>
<?php   klausurCounter("18.02.2009","Personalökonomik"); ?>
<?php   klausurCounter("18.02.2009","Konsumentenverhalten"); ?>

<?php   klausurCounter("18.02.2009","Präs. & Mod.-techniken I"); ?>
<?php   klausurCounter("18.02.2009","Präsentationsfähigkeiten"); ?>
<?php   klausurCounter("19.02.2009","Bilanzpolitik und -analyse"); ?>
<?php   klausurCounter("20.02.2009","Spieltheorie"); ?>
<?php   klausurCounter("20.02.2009","Marketing Mngm. I"); ?>

<?php   klausurCounter("20.02.2009","Dienstleistungsmarketing"); ?>
<?php   klausurCounter("23.02.2009","U.-beratung"); ?>
<?php   klausurCounter("23.02.2009","Regionalpolitik"); ?>
<?php   klausurCounter("24.02.2009","BWL Logistik"); ?>
<?php   klausurCounter("24.02.2009","Public Management"); ?>

<?php   klausurCounter("24.02.2009","Reale Außenwirt.-theorie"); ?>
<?php   klausurCounter("25.02.2009","PIM"); ?>
<?php   klausurCounter("25.02.2009","Int. UF"); ?>
<?php   klausurCounter("26.02.2009","Arbeitsmarktpolitik"); ?>
<?php   klausurCounter("26.02.2009","P-Recht II"); ?>

<?php   klausurCounter("27.02.2009","Industrielle Logistik"); ?>
<?php   klausurCounter("03.03.2009","KoRe"); ?>
<?php   klausurCounter("04.03.2009","Strategic Management"); ?>
<?php   klausurCounter("04.03.2009","Emp. Sozialforschung II"); ?>
<?php   klausurCounter("05.03.2009","PLB"); ?>

<?php   klausurCounter("06.03.2009","Unternehmensbewertung"); ?>
<?php   klausurCounter("06.03.2009","Ö-Recht II"); ?>
<?php   klausurCounter("09.03.2009","Volkswirtschaftspolitik"); ?>
<?php   klausurCounter("10.03.2009","PEWI"); ?>
<?php   klausurCounter("11.03.2009","Intercultural Competence"); ?>

</table>

   </td>

</tr>

<?php  } ?>

</table>

<table cellpadding="3" cellspacing="1" class="tableinborder" width="180">

    <tr>

     <td class="catbg" align="left">

     &nbsp;<b>Werbung</b>&nbsp;

     </td>

    </tr>

    <tr>

   <td valign="top" align="center" class="tableb" style="padding: 5px 7px 7px 7px;">

<a href="images/flyer/09-06-18.jpg" rel="lightbox"><img src="images/flyer/09-06-18-small.jpg" border="1"></a>

<br><br>


    <a href="mailto:werbung@wiwistud.de" class="small"><span class="small"><u>Werbung schalten?</u></span></a>

   </td>

</tr>

</table-->

</td>

<?php 
} ?>


</tr>
</table>

</center>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-10230188-2");
pageTracker._trackPageview();
} catch(err) {}</script>


</body>
</html>
