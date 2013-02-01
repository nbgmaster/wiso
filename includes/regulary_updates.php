<?php 

  $chupan = mysql_query("SELECT COUNT( id ) AS check_coan from $boerse_tblname WHERE durance < '$timestamp' LIMIT 1");
  
  $chupanrow = mysql_fetch_row( $chupan );

  $check_coan = $chupanrow[ 0 ];


  if ($check_coan > 0)  {


      $query_at = mysql_query("SELECT attachment from $boerse_tblname WHERE durance < '$timestamp'");

      while ($row_at = mysql_fetch_assoc($query_at))  { 

             if ($row_at[attachment] != "") unlink("boerse/$row_at[attachment]");
 
      }


      $delete_ads = "DELETE FROM $boerse_tblname WHERE durance < '$timestamp'";     

      mysql_query($delete_ads) OR die(mysql_error());  


  }
