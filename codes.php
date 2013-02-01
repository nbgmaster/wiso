<?php 

include("dbCon.php");

include("config.php");

?>
<table cellpadding="4"><tr><td align="left">

<span style="font-size:14px"><b>wiwistud.de Gutscheincodes</b>
- Prinzenbar - Zauberberg - Stars and Stairs</span>

</td></tr></table>

<table cellpadding="4" style="line-height:28px"><tr><td align="left" style="border:1px solid #000"><?php 

$cou = 1;

  $query_user = mysql_query("SELECT * from $codes_tblname ORDER by code");

  while ($row_user = mysql_fetch_assoc($query_user))  {

$uniqueID1 = substr($row_user[code], 0, 4);
$uniqueID2 = substr($row_user[code], 4, 4);
$uniqueID3 = substr($row_user[code], 8, 4);

$uniqueID = $uniqueID1.' - '.$uniqueID2.' - '.$uniqueID3.' - '.$row_user[letters];

   echo"$uniqueID<br>";

   for ($i=1; $i<=3; $i++)
   {    

    $x = 35 * $i;  

    if($cou==$x) { echo"</td><td width=5></td><td valign=top align=left style=\"border:1px solid #000\">"; } 

   }

    $cou++;

}

?></td></tr></table>
     