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

       <title>Bachelorstudiengang Wirtschaftswissenschaften an der Universit&auml;t Erlangen - N&uuml;rnberg</title>

        <META NAME="Title" CONTENT="Bachelor WiSo N&uuml;rnberg">
        <META NAME="Author" CONTENT="Stefan Richter">
        <META NAME="Publisher" CONTENT="Stefan Richter">
        <META NAME="Copyright" CONTENT="www.nbg-master.de (Stefan Richter)">
        <META NAME="Keywords" CONTENT="Studentenportal,kostenlos,Bachelor,International,WiSo,RW,ReWi,Studenten,Student,Studium,BWL,VWL,Uni,Hochschule,Unterlagen,Forum,Betriebswirtschaft,Hausarbeiten,Klausur,Mitschriften,N&uuml;rnberg,Erlangen,Bildung,Management,Controlling,Marketing,Statistik,Mathematik,Recht,Privatrecht,Makro,Mikro,Ökonomik,Wirtschaftswissenschaften,Wirtschaftsp&auml;dagogik,Skript,Zusammenfassungen">
        <META NAME="Description" CONTENT="Forum f&uuml;r die Bachelor Studenten im Fach Wirtschaftswissenschaften an der WiSo N&uuml;rnberg">
        <META NAME="Abstract" CONTENT="Forum f&uuml;r die Bachelor Studenten im Fach Wirtschaftswissenschaften an der WiSo N&uuml;rnberg">
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

  <div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>

  <table cellspacing="0" cellpadding="0">

  <tr>

  <td valign="top">

  <a name="top"></a>

  <?php include("index2.php"); ?>

   </td>

   <td valign="top" style="padding: 5px 7px 7px 7px;" align="left" width="180">


  <table cellspacing="0" cellpadding="0"><tr><td align="right" valign="top">

   <?php if ($update_profile == "1" && $update_award == "1" or $userdata_id == "")  { include("login/login.php"); ?>

<br>

<?php } if ($action == "")  { ?>

<?php if ($update_profile == "1"  && $update_award == "1" && $userdata_id != "" && $auto_logon_id != "" && $auto_logon_session != "" && $do == "" && $f == "" && $c == "" && $t == "")  { ?>

<table cellspacing="0" cellpadding="0"><form action="index.php" method="post"><tr><td>
  <select onChange="this.form.submit();" name="changeviewM" style="width:180px;font-size:13px">

  <option value="1"
  <?php if ($act_view == 1)  { echo" selected"; } ?>
  >nur meine Foren anzeigen</option>

  <option value="0"
  <?php if ($act_view == 0)  { echo" selected"; } ?>
  >alle Foren anzeigen</option>

  </select>
</td></tr>
</form>
</table>

<br>

<?php } if ($userdata_id != "" && $update_profile == 1 && $update_award == 1) { ?>


   <table cellpadding="3" cellspacing="1" class="tableinborder" width="180">

    <tr>

     <td class="catbg" align="left">

     <b>F&uuml;r unsere Erstsemestler</b>

     </td>

    </tr>

    <tr>


   <td valign="top" align="left" class="tableb">
   <?php if ($browser == "IE" || $browser == "IE7") $fuck_you = "margin-left:20px;";
   else $fuck_you = "padding-left:16px;"; ?>
   <ul type="square" style="<?php echo"$fuck_you";?>margin-bottom:2px;font-size:12px;line-height:18px">
   <li><a href="?t=1030"><b>Wichtige Informationen zum Planspiel</b></a></li>
   <br>
   <li><a href="?f=30"><b>Stelle deine Fragen im "Planspiel"-Forum</b></a></li>
   </ul>

   </td>
</tr></table>

     <br>

<?php } if ($userdata_id != "" && $update_profile == 1 && $update_award == 1) { ?>

</td></tr><tr><td valign="top" align="center">



<table cellpadding="3" cellspacing="1" class="tableinborder" width="180">

    <tr>

     <td class="catbg" align="left">

     &nbsp;<b>wiwistud.de Rangliste</b>&nbsp;

     </td>

    </tr>

    <tr>


   <td valign="top" style="padding: 7px 7px 7px 7px;" align="left" class="tableb">

             <table cellpadding="6" cellspacing="0" width="100%" style="border:1px solid #000">

<tr>

<td class="tablec" align="center" style="font-size:13px;" onmouseover="this.className='mouseover2';" onmouseout="this.className='mouseout3';" onclick="location.href='?do=ranking&term=ss08'">
<b>Sommersemester 2008</b>

</td></tr></table>

<br>
          <table cellpadding="6" cellspacing="0" width="100%" style="border:1px solid #000">

<tr>

<td class="tablec" align="center" style="font-size:13px;" onmouseover="this.className='mouseover2';" onmouseout="this.className='mouseout3';" onclick="location.href='?do=ranking&term=ws0708'">
<b>Wintersemester 2007/2008</b>

</td></tr></table>


<?php /* if ($temp_awa == 0 && $update_wiso == 1)  { ?>
<br>

          <table cellpadding="6" cellspacing="0" width="100%" style="border:1px solid #000">
<form name="formXX" method="post">
<tr>

<td class="tablec" align="center" style="font-size:13px;" onmouseover="this.className='mouseover2';" onmouseout="this.className='mouseout3';" onclick="document.formXX.submit()">
<b>Die Umfrage f&uuml;r das Sommersemester 2008 l&auml;uft! <br><br><span style="color:red">Bewerte jetzt deine Lehrveranstaltungen!</span></b>

</td></tr><input type="hidden" name="woohoo"><input type="hidden" name="userXX" value="<?php echo"$userdata_id";?>"></form></table>

<?php }  */ ?>

   </td>

</tr>

</table>

<br>

<?php } ?>  

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

<a href="http://www.start-nuernberg.de/?p=79" target="_blank"><img src="images/flyer/08-10-27-small.jpg" border="1"></a>

<br><br>


    <a href="mailto:werbung@wiwistud.de" class="small"><span class="small"><u>Werbung schalten?</u></span></a>

   </td>

</tr>

</table>

</td></tr></table></td>


<!--td style="padding: 5px 0px 7px 1px;" valign="top">

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

<a href="http://www.reading-performance.com" target="_blank"><img src="images/flyer/rieder-small.jpg" border="1" onclick="hits('1')"></a>

<br><br>

<a href="images/flyer/08-10-20.jpg" rel="lightbox"><img src="images/flyer/08-10-20-small.jpg" border="1"></a>

<br><br>

<a href="images/flyer/08-10-22-B.jpg" rel="lightbox"><img src="images/flyer/08-10-22-smallB.jpg" border="1" onclick="hits('2')"></a>

<br><br>

   <a href="mailto:werbung@wiwistud.de" class="small"><span class="small"><u>Werbung schalten?</u></span></a>

   </td>

</tr>

</table>

<?php  if ($userdata_id != "") { ?>


      <br>
</td></tr><tr><td>


<br>

</td></tr></table></td>

  <?php } /* if ($update_profile == "1" && $update_award == "1" && $userdata_id != "" or $userdata_admin == "1" && $userdata_id != "" && $template == "orangestyle")  { ?>

<td valign="top" style="padding: 5px 0px 0px 0px;" align="center">


<script type="text/javascript"><!--
google_ad_client = "pub-5349254049838364";
google_ad_width = 160;
google_ad_height = 592;
google_ad_format = "160x600_as";
google_ad_type = "text";
//2007-05-29: http://nbg-master.de/wiso
google_ad_channel = "9612657853";
google_color_border = "<?php echo"$bgcolor";    ?>";
google_color_bg = "<?php echo"$bgcolor";    ?>";
google_color_link = "B4681A";
google_color_text = "<?php echo"$fontcolor"; ?>";
google_color_url = "EF902F";

</script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>


</td-->

<?php }  */

} ?>

</tr>
</table>

</center>


</body>
</html>
