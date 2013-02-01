<?php 

  include("templates/admin/ranks_top.php");

  $query_ranks = mysql_query("SELECT * from $ranks_tblname ORDER by r_minposts");

  while ($row_ranks = mysql_fetch_assoc($query_ranks))  { 

         include("templates/admin/ranks.php");

  }

  include("templates/close_table.php");