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

       <title>Bachelorstudiengang Wirtschaftswissenschaften an der Universit�t Erlangen - N&uuml;rnberg</title>

        <META NAME="Title" CONTENT="Bachelor WiSo N&uuml;rnberg">
        <META NAME="Author" CONTENT="Stefan Richter">
        <META NAME="Publisher" CONTENT="Stefan Richter">
        <META NAME="Copyright" CONTENT="www.nbg-master.de (Stefan Richter)">
        <META NAME="Keywords" CONTENT="Studentenportal,kostenlos,Bachelor,International,WiSo,RW,ReWi,Studenten,Student,Studium,BWL,VWL,Uni,Hochschule,Unterlagen,Forum,Betriebswirtschaft,Hausarbeiten,Klausur,Mitschriften,N&uuml;rnberg,Erlangen,Bildung,Management,Controlling,Marketing,Statistik,Mathematik,Recht,Privatrecht,Makro,Mikro,�konomik,Wirtschaftswissenschaften,Wirtschaftsp�dagogik,Skript,Zusammenfassungen">
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

<?php } if ($userdata_id != "") { ?>

</td></tr><tr><td valign="top" style="padding: 5px 0px 0px 0px;" align="center">



<table cellpadding="3" cellspacing="1" class="tableinborder" width="180">

    <tr>

     <td class="catbg" align="left">

     &nbsp;<b>wiwistud.de Rangliste</b>&nbsp;

     </td>

    </tr>

    <tr>


   <td valign="top" style="padding: 5px 7px 7px 7px;" align="left" class="tableb">

          <table cellpadding="6" cellspacing="0" width="100%" style="border:1px solid #000">

<tr>

<td class="tablec" align="center" style="font-size:13px;" onmouseover="this.className='mouseover2';" onmouseout="this.className='mouseout3';" onclick="location.href='?do=ranking'">
<b>Wintersemester 2007/2008</b>

</td></tr></table>

   </td>

</tr>

</table>

<br>

<table cellpadding="3" cellspacing="1" class="tableinborder" width="180">

    <tr>

     <td class="catbg" align="left">

     &nbsp;<b>Werbung</b>&nbsp;

     </td>

    </tr>

    <tr>

   <td valign="top" style="padding: 5px 7px 7px 7px;" align="center" class="tableb">


          <table cellpadding="0" cellspacing="0" width="100%" style="border:1px solid #000;cursor:pointer" onclick="window.open('http://www.rcds-nuernberg.de/index.php?page=election')">
      <tr><td style="border-bottom:1px solid #000">
<img src="images/flyer/rcds.jpg">
</td></tr>
<tr>

<td align="center" style="border-bottom:1px solid #000;font-size:16px;color:#0062A9;background-color:#e5e5e5;padding:4px;line-height:24px">
<b>Hochschulwahlen 2008</b>

</td></tr>
  <tr>

<td align="center" style="font-size:11px;color:#fff;background-color:#4A494A;padding:4px;">
<b>Jetzt informieren...
<br>...am 24.6. w�hlen!!</b>

</td></tr>
</table>

<br>

<script type="text/javascript" src="javascript/lightbox.js" language="JavaScript1.2"></script>

<link href="stylesheets/lightbox.css" rel="stylesheet" type="text/css" media="all">

<a href="images/flyer/08-06-20.jpg" rel="lightbox"><img src="images/flyer/08-06-20-small.jpg" border="1"></a>

<br><br>

<a href="images/flyer/bachelorstammtisch.jpg" rel="lightbox"><img src="images/flyer/bachelorstammtisch_small.jpg" border="1"></a>

<br><br>



   <a href="mailto:werbung@wiwistud.de" class="small"><span class="small"><u>Werbung schalten?</u></span></a>

   </td>

</tr>

</table>


<?php } ?>

      <br>
</td></tr><tr><td>


<br>

</td></tr></table></td><td valign="top" style="padding: 6px 2px 5px 2px;">



 <table cellpadding="1" cellspacing="1" class="tableinborder" width="180">

    <tr>

     <td align="left" class="catbg">

     <table cellspacing="0" cellpadding="0" style="height:17px"><tr><td class="catbg">

     <a href="index.php?hidecounter=<?php echo"$countK";?>">

     <img src="images/templates/<?php echo"$template"; ?>/<?php echo"$imgK"; ?>.gif" border="0"></a>

     </td><td class="catbg">

     <b>Klausurcounter: noch...</b>

     </td></tr></table>

     </td>

    </tr>

<?php if ( $my_count == 1 || !$my_count )  { ?>

    <tr>

   <td valign="top" style="padding: 3px 4px 4px 4px;" align="left" class="tableb">

<b><u>Assessmentphase</u></b>

<br>

<table cellspacing="0" cellpadding="0" style="line-height:18px">

<?php  klausurCounter("28.07.2008","SozialforschungI"); ?>
<?php  klausurCounter("30.07.2008","Mikro"); ?>
<?php  klausurCounter("04.08.2008","Absatz"); ?>
<?php  klausurCounter("06.08.2008","P-Recht I"); ?>
<?php  klausurCounter("07.08.2008","UMV I"); ?>
<?php  klausurCounter("11.08.2008","Jahresabschluss"); ?>
<?php  klausurCounter("12.08.2008","Buchf&uuml;hrung"); ?>

</table>

<br>

<b><u>1. Semester</u></b>

<br>

<table cellspacing="0" cellpadding="0" style="line-height:18px">

<?php  klausurCounter("11.02.2008","U&U"); ?>
<?php  klausurCounter("15.02.2008","UMV II"); ?>
<?php  klausurCounter("20.02.2008","Buchf&uuml;hrung"); ?>
<?php  klausurCounter("29.02.2008","UMV I"); ?>
<?php  klausurCounter("08.03.2008","IT-& E-Business"); ?>

</table>

   </td>

</tr>

<?php } ?>


</table>


</td></tr>

<tr>

<td align="left">

<br>

  </td>

</tr>

</table>


</td>

  <?php /* if ($update_profile == "1" && $update_award == "1" && $userdata_id != "" or $userdata_admin == "1" && $userdata_id != "" && $template == "orangestyle")  { ?>

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
//-->
</script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>


</td>

<?php }  */

} ?>

</tr>
</table>

</center>


</body>
</html>
