  <tr>

    <td align="center" class="tablea">

    <img src="images/templates/<?php  echo"$template/$img_newposts"; ?>">

    </td>

    <?php  if ($highlight != "" && $highlightuser == "")  { ?>

    <td align="left" class="tableb" onclick="location.href='index.php?t=<?php  echo"".$row_threads["id"]."&highlight=$highlight"; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <?php  } if ($highlight == "" && $highlightuser != "")  { ?>

    <td align="left" class="tableb" onclick="location.href='index.php?t=<?php  echo"".$row_threads["id"]."&highlightuser=$highlightuser"; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <?php  } if ($highlight != "" && $highlightuser != "")  { ?>

    <td align="left" class="tableb" onclick="location.href='index.php?t=<?php  echo"".$row_threads["id"]."&highlight=$highlight&highlightuser=$highlightuser"; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <?php  } if ($highlight == "" && $highlightuser == "")  { ?>

    <td align="left" class="tableb" onclick="location.href='index.php?t=<?php  echo"".$row_threads["id"].""; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <?php  } if ($poll_img != "")  { 

    echo"$poll_img"; }  ?>
    
    <b><?php  echo"".$row_threads["threadname"].""; ?></b>
 
    </td>
 
    <td class="tablea" align="center" onclick="location.href='index.php?do=profile&user_id=<?php  echo"$thread_author_id"; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout2';">

    <?php  echo"$thread_author_name"; ?>

    </td>

    <td class="tableb" align="center">

    <?php  echo"$thread_answers2"; ?>

    </td>

    <td class="tablea" align="center">

    <?php  echo"".$row_threads["hits"].""; ?>

    </td>

    <td align="left" class="tableb">&nbsp;von 

    <?php  if ($last_post_user_id != "0")  { ?>

    <a href="index.php?do=profile&user_id=<?php  echo"$last_post_user_id"; ?>">

    <?php  } ?>

    <b><?php  echo"$last_post_username"; ?></b><br>

    <?php  if ($last_post_user_id != "0")  { ?> </a> <?php  } ?>

    &nbsp;<?php  if ($last_post_date != "<b>Heute</b>" && $last_post_date != "<i>Gestern</i>")  { echo"am "; } ?><?php  echo"$last_post_date"; ?>, <?php  echo"$last_post_time2"; ?>

    <a href="index.php?t=<?php  echo"".$row_threads["id"]."$show_link"; ?>"><img src="images/templates/<?php  echo"$template"; ?>/last_reply.gif" border="0"></a>

    </td>

  </tr>