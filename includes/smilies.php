<?php 

  $countrows    = "1";

  $query_smilies = mysql_query("SELECT * from $smilies_tblname Order by id");

  while ($row_smilies = mysql_fetch_assoc($query_smilies))  {  

         $query_smilies2 = mysql_query("SELECT * from $smilies_tblname WHERE smile_url = '$row_smilies[smile_url]' && id < '$row_smilies[id]'");
         $check_smile    = mysql_num_rows($query_smilies2);

         if ($check_smile == "0" && $countrows <= $smilies_showstart)  {

             include("./templates/smilies.php");
       
             $countrows = $countrows + 1;

         }

  }