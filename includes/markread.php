<?php 

  $query_markread = "DELETE FROM $newposts_tblname WHERE user_id = '$userdata_id'"; 

  mysql_query($query_markread) OR die(mysql_error()); 

  $text01 = "Alle Beiträge als gelesen markiert!";

  $link = "index.php";

  include("./templates/refresh.php");