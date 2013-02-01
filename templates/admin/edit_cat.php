  <tr>

    <td class="tablea">

    <b><font class="title"><?php  echo"".$row_cats["title"].""; ?></font></b> 

    </td>

    <td class="main" bgcolor="<?php  echo"#$cell_bg02"; ?>" align="center">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> 
    <a href="index.php?do=admin&sec=edit_cat&module=move_up&c=<?php  echo"".$row_cats["id"].""; ?>">Nach oben</a> |
 
    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> 
    <a href="index.php?do=admin&sec=edit_cat&module=move_down&c=<?php  echo"".$row_cats["id"].""; ?>">Nach unten</a>

    </td>

    <td class="main" bgcolor="<?php  echo"#$cell_bg01"; ?>" align="center">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> 
    <a href="index.php?do=admin&sec=edit_cat&module=edit&c=<?php  echo"".$row_cats["id"].""; ?>">bearbeiten</a>
   
    </td>

    <td class="main" bgcolor="<?php  echo"#$cell_bg02"; ?>" align="center">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">
    <a href="index.php?do=admin&sec=edit_cat&module=delete&c=<?php  echo"".$row_cats["id"].""; ?>">löschen</a>

    </td>

  </tr>