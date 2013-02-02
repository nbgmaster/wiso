<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<title>Das wiwistud Bonuspunkteprogramm</title>

<?php 

//include("dbCon.php");
include("config.php");


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

         if ($template == "darkstyle")  {

             $tmp_1 = $cell_bg02; $tmp_2 = $cell_bg01;  $tmp_3 = "fff";

            } else { $tmp_1 = $cell_bg01; $tmp_2 = $cell_bg02; $tmp_3 = "000";    }

?>

<style type="text/css">

body {
background-color:#<?php  echo"$tmp_1"; ?>;
}
td {

color:#<?php  echo"$tmp_3"; ?>;
font-size:12px;

}
</style>

</head>

<body>

<center>
<br>
<table width="95%" cellpadding="5" cellspacing="1" class="tableinborder" style="line-height:20px">
  <tr>
    <td style="background-color:#<?php  echo"$tmp_2"; ?>"><p><span><b>Liebe Mitglieder von wiwistud.de</b></span>,</p>

      <p>wir haben uns zusammen mit unseren Partnern etwas  neues f&uuml;r euch ausgedacht und pr&auml;sentieren das wiwistud.de <strong>Bonuspunktesystem!</strong></p>
      <p align="center"><b>Wie l&auml;uft das ab? Was ist das &uuml;berhaupt?</b></p>
      <p>Wir, die Administratoren werden eure Beitr&auml;ge bewerten und den Mitgliedern, die informative Beitr&auml;ge oder hilfreiche Unterlagen verfassen, Bonuspunkte zuschreiben.<br />
      Informative Beitr&auml;ge k&ouml;nnen sein: Pr&uuml;fungstermine, Klausurergebnisse, Klausurtermine...<br> eben Informationen, die der &quot;Masse&quot; dienen!</p>
      <p align="center"><u>Die gesammelten Punkte kann man dann gegen tolle Pr&auml;mien einl&ouml;sen!</u></p>

      <p><strong>Ab 10 Punkten:</strong><br />
<?php 

$qy_loc = mysql_query("SELECT * from $gutscheine_tblname ORDER by id");
  
  while ($rw_loc  =  mysql_fetch_assoc($qy_loc))  { 

         echo"- $rw_loc[title]";
if ($rw_loc[id] == 3)  { echo" (nur Samstags einl&ouml;sbar)"; }
         echo"<br>";

  }

?> 
<br>
      <p align="center">
        <img src="images/credits/ads.gif" width="577" height="147" /><br />
        <br />
    </p></td>
  </tr>
</table>

</center>

</body>
</html>
