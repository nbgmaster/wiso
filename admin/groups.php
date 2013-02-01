<?php 

  include("templates/admin/groups_top.php");

  $query_groups = mysql_query("SELECT * from $groups_tblname ORDER by groupname");

  while ($row_groups = mysql_fetch_assoc($query_groups))  { 

         include("templates/admin/groups.php");

  }

  include("templates/close_table.php");