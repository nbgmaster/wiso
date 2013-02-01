  <tr>

    <td align="center" class="tablea">

    <img src="images/templates/<?php  echo"$template/$img_newposts"; ?>">

    </td>

    <?php  if ($do == "showNewPosts")  { ?>

    <td align="center" class="tablea" width="24" >
    <?php  echo"$newOnesN"; ?>
    </td>
       
    <?php  }


    if ($highlight != "" && $highlightuser == "")  { 

    // old link: index.php?t=<?php  echo"".$row_threads["id"].""; 

    ?>

    <td align="left" class="tableb" onclick="location.href='index.php?t=<?php  echo"".$row_threads["id"].""; ?>&highlight=$highlight"; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <?php  } if ($highlight == "" && $highlightuser != "")  { ?>

    <td align="left" class="tableb" onclick="location.href='index.php?t=<?php  echo"".$row_threads["id"].""; ?>&highlightuser=$highlightuser"; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <?php  } if ($highlight != "" && $highlightuser != "")  { ?>

    <td align="left" class="tableb" onclick="location.href='index.php?t=<?php  echo"".$row_threads["id"].""; ?>&highlight=$highlight&highlightuser=$highlightuser"; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <?php  } if ($highlight == "" && $highlightuser == "")  { ?>

    <td align="left" class="tableb" onclick="location.href='index.php?t=<?php  echo"".$row_threads["id"].""; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <?php  } if ($poll_img != "")  { 

    echo"$poll_img"; }  ?>


    <?php  if ($row_threads[announce] == "1")  { 

       echo"<table cellspacing=\"0\" cellpadding=\"0\"><tr><td>";
       echo"&nbsp;<img src=\"images/templates/$template/important.gif\">&nbsp;"; 

       echo"<td>";

   } 
    ?><b><span style="font-size : <?php  echo"$fontsize_header"; ?>px;"><?php 
    echo"".$row_threads["threadname"]."</span></b>";

    if ($row_threads[announce] == "1")  { echo"</td></tr></table>"; }

    ?>
 
    </td>


    <td class="tablea" align="center">

    <?php  echo"$thread_answers2"; ?>

    </td>

    <?php  if ($thread_author_name == "User gelöscht")  { ?>

    <td class="tableb" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <?php  } else { ?>

    <td class="tableb" align="left" onclick="location.href='index.php?do=profile&user_id=<?php  echo"$thread_author_id"; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <?php  } ?>

    &nbsp;<?php  echo"$thread_author_name"; ?>

    </td>

    <td class="tablea" align="center">

    <?php  echo"".$row_threads["hits"].""; ?>

    </td>

    <td align="left" class="tableb" onclick="location.href='index.php?t=<?php  echo"".$row_threads["id"]."$show_link"; ?>';" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <a href="index.php?t=<?php  echo"".$row_threads["id"]."$show_link"; ?>">

    <div class="divIcon"><img src="images/templates/<?php  echo"$template"; ?>/lastpost.png" border="0"></div>

    </a>

    &nbsp;von <b><?php  echo"$last_post_username"; ?></b>

    <br>

    &nbsp;<?php  if ($last_post_date != "<b>Heute</b>" && $last_post_date != "<i>Gestern</i>")  { echo"am "; } ?><?php  echo"$last_post_date"; ?>, <?php  echo"$last_post_time2"; ?>

    </td>

  </tr>