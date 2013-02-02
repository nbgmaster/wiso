  <tr>

    <td class="tablea">  
    <b><?php  echo"".$row_groups["groupname"].""; ?></b>        
    </td>

    <td class="tableb" align="center">
    <a href="index.php?do=admin&sec=groups&module=edit&g_id=<?php  echo"".$row_groups["id"].""; ?>"><b>bearbeiten</b></a>
    </td>

    <td class="tablea" align="center">  

    <?php  if ($row_groups[id] != "1" && $row_groups[id] != "2" && $row_groups[id] != "3" && $row_groups[id] != "4")  { ?>

    <a href="index.php?do=admin&sec=groups&module=delete&g_id=<?php  echo"".$row_groups["id"].""; ?>">

    <?php  } ?>

    <b>l&ouml;schen</b>

    <?php  if ($row_groups[id] != "1" && $row_groups[id] != "2" && $row_groups[id] != "3" && $row_groups[id] != "4")  { ?> 
    
    </a>

    <?php  } ?>

    </td>

  </tr>
