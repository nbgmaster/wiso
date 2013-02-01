  <tr>

    <td class="tableb">
    <?php  echo"".$row_forums["forum"].""; ?>
    </td>

    <td class="tablea" align="center">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> 
    <a href="index.php?do=admin&sec=edit_cat&module=move_up&f=<?php  echo"".$row_forums["id"].""; ?>">

    Nach oben

    </a>

    |
 
    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> 
    
    <a href="index.php?do=admin&sec=edit_cat&module=move_down&f=<?php  echo"".$row_forums["id"].""; ?>">

    Nach unten

    </a>

    </td>

    <td class="tableb" align="center">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> 
    <a href="index.php?do=admin&sec=edit_cat&module=edit&f=<?php  echo"".$row_forums["id"].""; ?>">bearbeiten</a>
   
    </td>

    <td class="tablea" align="center">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">
    <a href="index.php?do=admin&sec=edit_cat&module=delete&f=<?php  echo"".$row_forums["id"].""; ?>">löschen</a>

    </td>

  </tr>