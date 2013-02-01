<?php 

  $query_act_code = mysql_query("SELECT * from $user_tblname WHERE activation_code = '$activation_code'");

  while ($row_act_code = mysql_fetch_assoc($query_act_code))  {

         $sql_act_code = "UPDATE $user_tblname SET activation_code = '', UserActive = '1' WHERE UserID = '$row_act_code[UserID]'";     
   
         mysql_query($sql_act_code) OR die(mysql_error());

  }

  $text01 = "Sie wurden freigeschaltet!";
 
  $link   = "index.php";

  include("templates/refresh.php");
