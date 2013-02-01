<?php 

  $query_smilies = mysql_query("SELECT * from $smilies_tblname");

  while ($row_smilies = mysql_fetch_assoc($query_smilies))  {  

         $str = str_replace("$row_smilies[code]", "<img src=\"$smilies_direction$row_smilies[smile_url]\" border=\"0\">", $str);

  }
























