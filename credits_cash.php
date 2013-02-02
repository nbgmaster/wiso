<?php 

  session_start();
  ob_start();

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


?>

<html>

<head>

<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">

<title>Bonuspunkte einl&ouml;sen</title>

<style type="text/css">


body {
background-color:#BABABA;
}

body,td {

color:#fff;

}

</style>

<script type="text/javascript" src="javascript/location.js" language="JavaScript1.2"></script>

<script>

function loading()  {

document.getElementById("test").innerHTML = "<table style=\"background-color:#000000;border:1px solid #000000\" cellpadding=\"5\"><tr><td align=\"center\"><span style=\"color:red;font-size:20px\"><b>Bitte warten!!</b><br>Gutschein wird erstellt!</span></td></tr></table>";

}

</script>

</head>

<body>

<div id="test" style="z-index:10;position:absolute;top:280px;left:130px;"></div>

<center>
<br>
<table width="95%" cellpadding="5" cellspacing="1" class="tableinborder" style="line-height:20px">
  <tr>
<td style="background-color:#4A4A4A" align="center">
<br>
<span style="font-size:18px"><b>Das wiwistud.de Bonuspunkteprogramm</b></span>

<br><br>

<?php 


if ($action == "done")  {

echo"<br><span style=\"font-size:12px\"><b>Der Gutschein wurde an deine Emailadresse versendet!</b></span>";
echo"<br><br><br>";

echo"<input type=\"button\" onclick=\"self.close()\" class=\"buttons\" value=\"Fenster schliessen\" style=\"width:120px;\" onmouseover=\"this.className='mouseoverInput';\" onmouseout=\"this.className='mouseoutInput';\">";

}


 if ($_POST[gutschein] == "" && $action != "done" && $userdata_credits == "10")  { ?>

<b><span style="font-size:12px">W&auml;hle hier einen der folgenden Gutscheine aus:</span></b>

<br><br>

<form method="post">

         <select name="gutschein" onChange="change_description(this.options[this.selectedIndex].value)" style="font-size:13px">

<?php 

$qy_loc = mysql_query("SELECT * from $gutscheine_tblname ORDER by id");
  
  while ($rw_loc  =  mysql_fetch_assoc($qy_loc))  { 

         echo"<option value=\"$rw_loc[id]\">$rw_loc[title]</option>";

  }

?> 

         </select>

<br><br>

<table width="430" style="line-height:22px"><tr><td>

<div id="description" style="font-size:12px">

<?php 

$qy_loc2 = mysql_query("SELECT * from $gutscheine_tblname ORDER by id LIMIT 1");
  
  while ($rw_loc2  =  mysql_fetch_assoc($qy_loc2))  { 

   //      echo"<img src=images/credits/$rw_loc2[picture]>$rw_loc2[description]";

           echo"$rw_loc2[description]";

  }

?> 

</div>

</td></tr></table>

<br>

<input type="submit" value="Punkte einl&ouml;sen" onclick="loading()" class="buttons" name="submit_data" style="width:150px;" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

</form>

</td>
  </tr>
</table>
<br>

<?php  }  else if ($action != "done" && $userdata_credits == "10")  {


$qy_loc = mysql_query("SELECT * from $gutscheine_tblname WHERE id = '$_POST[gutschein]'");
  
  while ($rw_loc  =  mysql_fetch_assoc($qy_loc))  { 

    $yourChoose = "$rw_loc[id]";
    $yourChoose2 = "$rw_loc[title]";
    $code_img = "$rw_loc[couponimg]";

  }



   $qy_uniq = mysql_query("SELECT * from $codes_tblname WHERE eingeloest = '0' ORDER BY RAND() DESC LIMIT 1");
  
   while ($rw_uniq  =  mysql_fetch_assoc($qy_uniq))  { 

          $update_co  = "UPDATE $codes_tblname Set user = '$userdata_id', gutschein = '$yourChoose', eingeloest = '1' WHERE code = '$rw_uniq[code]'";  
          $sql_co     = mysql_query($update_co);

          $uniqueID = $rw_uniq[code];
          $letters  = $rw_uniq[letters];
   }

header('Content-Type: image/jpeg');



$Code_original = "images/credits/$code_img";



/* Was passiert wenn zwei gleichzeitig generieren!? Vl Dateinamen mit UserID eindeutig belegen */

$Code_personal = "images/credits/Gutschein_$userdata_id.jpg";



// $uniqueID = uniqid(time());



// $uniqueID = substr($uniqueID, 0, 15);

// $uniqueID = mysql_insert_id();

/*

$alphabet = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

$count_ntIDs = count($alphabet);

$rand_var = array_rand ( $alphabet,$count_ntIDs );
$rand_var = $alphabet[$rand_var[0]];
$rand_var2 = array_rand ( $alphabet,$count_ntIDs );
$rand_var2 = $alphabet[$rand_var2[0]];

$letters = "$rand_var$rand_var2";

$update_l  = "UPDATE $codes_tblname Set letters = '$letters' WHERE code = '$uniqueID'";  
$sql_l     = mysql_query($update_l);

*/

$uniqueID1 = substr($uniqueID, 0, 4);
$uniqueID2 = substr($uniqueID, 4, 4);
$uniqueID3 = substr($uniqueID, 8, 4);

$uniqueID = $uniqueID1.' - '.$uniqueID2.' - '.$uniqueID3.' - '.$letters;



$im = imagecreatefromjpeg ($Code_original); 

$ho=imagesy($im);



$col=imagecolorallocate($im,0,0,0);



imagettftext ($im, 16, 0, 38, $ho-14, 0, 'arial.ttf', $uniqueID);

/* (Dateiname, Schriftgr&ouml;&szlig;e, Abstand TOP-H&ouml;he, Text, Farbe) */



//imagestring($im,5,20,$ho-18,$uniqueID,$col);





/* Parameter 3 -> Quality */

imagejpeg($im, $Code_personal, 100);







define('FPDF_FONTPATH','pdflib/font/');

include("pdflib/fpdf.php");



define('FPDF_INSTALLDIR', 'pdflib');



if(!defined('FPDF_FONTPATH')) define('FPDF_FONTPATH', FPDF_INSTALLDIR.'/font/');

include(FPDF_INSTALLDIR.'/fpdf.php');



// Pr&uuml;fen ob die Klasse existiert

if(class_exists('FPDF')) {



require('pdflib/fpdf.php');



class PDF extends FPDF

{

//Page header

function Header()

{



global $Code_personal;

global $userdata_name;
global $yourChoose;

$usern = "Hallo $userdata_name!";


    //Logo
   if ($yourChoose == 3)  {
    $this->Image($Code_personal,60,95,100);
    } else {

    $this->Image($Code_personal,60,85,100);
    }
    if ($yourChoose != "3")  { $this->Image('images/credits/map.jpg',10,190,190); }

    $this->SetFont('Arial','B',14);
    $this->Cell(190,20,$usern,1,0,'C');
    //Zeilenumbruch
    $this->Ln(20);
    $this->SetFont('Arial','B',12);

    $this->Cell(190,24,'Dein Gutschein von wiwistud.de',0,1);
    $this->Ln(20);
    $this->SetFont('Arial','B',10);

   if ($yourChoose == 1)  {

    $this->Cell(190,-19,'Drucke den Gutschein aus und l&ouml;se ihn in der Prinzenbar ein!',0,10);

   }


   if ($yourChoose == 2)  {

    $this->Cell(190,-19,'Drucke den Gutschein aus und l&ouml;se ihn im Café Zauberberg ein!',0,10);

   }


   if ($yourChoose == 3)  {

    $this->Cell(190,-30,'Drucke den Gutschein aus und l&ouml;se ihn im Stars & Stairs ein!',0,10);
    $this->Ln(20);
    $this->Cell(190,-1,'Der Gutschein kann nur an einem SAMSTAG eingel&ouml;st werden!',0,10);
    $this->Ln(20);
    $this->Cell(190,-18,'Nicht g&uuml;ltig bei Fremdveranstaltungen!',0,10);
    $this->Ln(20);

    }


}



}



//Instanciation of inherited class

$pdf=new PDF();

$pdf->AliasNbPages();

$pdf->AddPage();

$pdf->SetFont('Times','',12);



//$pdf->Output();



$receiver = $userdata_email;

$subject  = "Dein Gutschein von wiwistud.de";



$DateinameMail = "Gutschein.pdf";

$Dateiname = $pdf -> Output('','S');


$Header = "From: admin@wiwistud.de";



$Trenner = md5(uniqid(time()));

$Header .= "\n";

$Header .= "MIME-Version: 1.0";

$Header .= "\n";

$Header .= "Content-Type: multipart/mixed; boundary=$Trenner";

$Header .= "\n\n";

$Header .= "This is a multi-part message in MIME format";

$Header .= "\n";

$Header .= "--$Trenner";

$Header .= "\n";

$Header .= "Content-Type: text/plain";

$Header .= "\n";

$Header .= "Content-Transfer-Encoding: 8bit";

$Header .= "\n\n";
$Header .= "Hallo $userdata_name!";
$Header .= "\n\n";

$Header .= "Im Anhang an diese Email erh&auml;lst du deinen Gutschein von wiwistud.de!";
$Header .= "\n\n";
$Header .= "Du hast dich f&uuml;r folgenden Gutschein entschieden:";
$Header .= "\n";
$Header .= "$yourChoose2";
$Header .= "\n\n";

if ($yourChoose == 1)  {

$Header .= "Drucke den Gutschein aus und l&ouml;se ihn in der Prinzenbar ein!";

}

if ($yourChoose == 2)  {

$Header .= "Drucke den Gutschein aus und l&ouml;se ihn im Café Zauberberg ein!";

}

if ($yourChoose == 3)  {

$Header .= "Drucke den Gutschein aus und l&ouml;se ihn im Stars & Stairs ein!";
$Header .= "\n\n";
$Header .= "Der Gutschein kann nur an einem SAMSTAG eingel&ouml;st werden und gilt nicht bei Fremdveranstaltungen!";

}

$Header .= "\n\n";
$Header .= "Dein wiwistud.de Team";
$Header .= "\n";
$Header .= "\n";

$Header .= "--$Trenner";

$Header .= "\n";

$Header .= "Content-Type: application/pdf; name=$DateinameMail";

$Header .= "\n";

$Header .= "Content-Transfer-Encoding: base64";

$Header .= "\n";

$Header .= "Content-Disposition: attachment; filename=$DateinameMail";

$Header .= "\n\n";

//$Dateiinhalt = fread(fopen($Dateiname, "r"), filesize($Dateiname));

$Header .= chunk_split(base64_encode($Dateiname));

$Header .= "\n";

$Header .= "--$Trenner--";





mail($receiver, $subject, "", $Header); 





imagedestroy($im); 



//unlink($Code_personal); 




header('Content-Type: text/html');

$userdata_credits_org = $userdata_credits_org - 10;

//   if ($userdata_credits11 > 0)  {

   //    $upd_gut = "UPDATE $user_tblname SET credits = '$userdata_credits11', credits11 = '0' WHERE UserID = '$userdata_id'";

    //   mysql_query($upd_gut) OR die(mysql_error());

 //  }

 //  else  {

       $upd_gut = "UPDATE $user_tblname SET credits = '$userdata_credits_org' WHERE UserID = '$userdata_id'";
 
       mysql_query($upd_gut) OR die(mysql_error());

 //  }




} 


header ("Location:credits_cash.php?action=done");



 }


?>

</center>

</body>
</html>

