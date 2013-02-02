<?php 

  $query_act_code = mysql_query("SELECT * from $user_tblname WHERE activation_code = '$activation_code'");
  $blubbX = mysql_num_rows($query_act_code);

  while ($row_act_code = mysql_fetch_assoc($query_act_code))  {

         $sql_act_code = "UPDATE $user_tblname SET activation_code = '', UserActive = '1' WHERE UserID = '$row_act_code[UserID]'";     
   
         mysql_query($sql_act_code) OR die(mysql_error());

  }

  if ($blubbX == 1)  {

          $refresh_time = 3;

          $text01 = "Du wurdest freigeschalten und kannst dich jetzt einloggen!";

          $link   = "index.php";

          include("templates/refresh.php");

  }

  else  {

      echo"Ung&uuml;ltiger Seitenaufruf.";

  }
