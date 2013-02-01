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

      include("dbCon.php"); 

      $queryUser = mysql_query("SELECT * from users WHERE UserID = '$userID'");
  
      while ($rowUser = mysql_fetch_assoc($queryUser))  {  

             echo"$rowUser[UserName]";

      }  

  }


  include("includes/newsticker.php"); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

       <title>Bachelorstudiengang Wirtschaftswissenschaften an der Universität Erlangen - N&uuml;rnberg</title>

	<META NAME="Title" CONTENT="Bachelor WiSo N&uuml;rnberg">
	<META NAME="Author" CONTENT="Stefan Richter">
	<META NAME="Publisher" CONTENT="Stefan Richter">
	<META NAME="Copyright" CONTENT="www.nbg-master.de (Stefan Richter)">
	<META NAME="Keywords" CONTENT="Studentenportal,kostenlos,Bachelor,International,WiSo,RW,ReWi,Studenten,Student,Studium,BWL,VWL,Uni,Hochschule,Unterlagen,Forum,Betriebswirtschaft,Hausarbeiten,Klausur,Mitschriften,N&uuml;rnberg,Erlangen,Bildung,Management,Controlling,Marketing,Statistik,Mathematik,Recht,Privatrecht,Makro,Mikro,Ökonomik,Wirtschaftswissenschaften,Wirtschaftspädagogik,Skript,Zusammenfassungen">
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

       ?>

       <meta http-equiv="imagetoolbar" content="no">


       <script type="text/javascript" src="overlib/overlib.js"></script>

       <script type="text/javascript" src="javascript/popup.js" language="JavaScript1.2"></script>
       <script type="text/javascript" src="javascript/bbcode.js" language="JavaScript1.2"></script>



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


  <table cellspacing="0" cellpadding="0"><tr><td align="right">

   <?php if ($update_profile == "1" or $userdata_id == "")  { include("login/login.php"); ?>

<br>

<?php } if ($action == "")  { ?>

<?php if ($update_profile == "1" && $userdata_id != "" && $auto_logon_id != "" && $auto_logon_session != "" && $do == "" && $f == "" && $c == "" && $t == "")  {


?>

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

<?php } ?>


   <table cellpadding="3" cellspacing="1" class="tableinborder" width="180">

    <tr>

     <td class="catbg" align="left">

     &nbsp;<b>Werbung</b>&nbsp;

     </td>
    
    </tr>

    <tr>

   <td valign="top" style="padding: 3px 4px 4px 4px;" align="center" class="tableb">

<script type="text/javascript" src="javascript/lightbox.js" language="JavaScript1.2"></script>

<link href="stylesheets/lightbox.css" rel="stylesheet" type="text/css" media="all">


<a href="images/flyer/bachelorstammtisch.jpg" rel="lightbox"><img src="images/flyer/bachelorstammtisch_small.jpg" border="1"></a>            


<br><br>

   <a href="mailto:webmaster@wiwistud.de" class="small"><span class="small"><u>Werbung schalten?</u></span></a>

   </td>

</tr>

</table>

</td></tr>

<tr>

<td align="left">

<br>

<?php } ?>

  </td>

</tr>

</table>


</td><td valign="top" style="padding: 8px 0px 0px 0px;">

<script type="text/javascript"><!--
google_ad_client = "pub-5349254049838364";
google_ad_width = 160;
google_ad_height = 592;
google_ad_format = "160x600_as";
google_ad_type = "text";
//2007-05-29: http://nbg-master.de/wiso
google_ad_channel = "9612657853";
google_color_border = "4A4A4A";
google_color_bg = "4A4A4A";
google_color_link = "B4681A";
google_color_text = "<?php echo"$fontcolor"; ?>";
google_color_url = "EF902F";
//-->
</script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>


</td></tr>
</table>

 
</body>
</html>

