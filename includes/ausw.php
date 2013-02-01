<html>

<head>

  <title>Auswertung wiwistud.de Umfrage</title>

</head>

<body bgcolor="#e4e4e7">

<b>Auswertung wiwistud.de Umfrage</b>

 <br><br>

 <table width="800" cellspacing="0" cellpadding="4">

 <tr><td><b>Veranstaltung</b> </td><td align="center"><b>Gesamtnote</b> </td><td align="center"><b>Anzahl Stimmen</b> </td></tr>

<?php

include("../config.php");

  $qy_NwP   = mysql_query("SELECT * from $award_tblname");

  while ($rw_NwP = mysql_fetch_assoc($qy_NwP))  {

  $mark = ($rw_NwP[note1] * 1) + ($rw_NwP[note2] * 2) + ($rw_NwP[note3] * 3) + ($rw_NwP[note4] * 4) + ($rw_NwP[note5] * 5) + ($rw_NwP[note6] * 6);

  $total = $rw_NwP[note1] + $rw_NwP[note2] + $rw_NwP[note3] + $rw_NwP[note4] + $rw_NwP[note5] + $rw_NwP[note6];

  $mark = $mark / $total;

  $mark = round($mark,2);

echo "<tr><td style=\"border:1px solid #000\"><b>$rw_NwP[veranstaltung]</b> </td><td style=\"border:1px solid #000;text-align:center\">$mark</td><td style=\"border:1px solid #000;text-align:center\">$total</td></tr>";

}

?>

</table>

</body>

</html>
