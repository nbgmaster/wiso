<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="catbg" width="50%" align="left">

    <a class="catbg" href="index.php">Forum Übersicht</a>&nbsp;
 
    <a class="catbg" href="index.php?f=<?php  echo"$f"; ?>">:: <?php  

    if(strlen($forum) > 33) {                    $forum = substr($forum, 0, 30).'...'; }
    
    echo"$forum"; ?></a>

    </td>

    <td class="catbg" align="right" width="50%">

    <?php  echo"$text01 $text02 $text03"; ?>

    </td>

  </tr>

</table>   