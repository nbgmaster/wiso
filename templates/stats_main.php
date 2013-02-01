     <tr>

<?php  

if ($count_hover == "1" or $count_hover == "3" or $count_hover == "5") { ?>


<td style="height:24px" class="tableb" onclick="location.href='<?php  echo"$show_link2"; ?>';" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

<?php  } else  { ?>

<td style="height:24px" class="tablea" onclick="location.href='<?php  echo"$show_link2"; ?>';" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout2';">

<?php  }

$count_hover++;

 ?>

<table cellspacing="0" cellpadding="3" width="100%" onmouseover="this.className='mov';" onmouseout="this.className='mot';">
<tr>

         <td align="left" width="210">

         <table cellspacing="0" cellpadding="0"><tr><td style="padding:0 3px 0 0;">
         <img src="images/templates/<?php  echo"$template"; ?>/newpost.png">
         </td><td>
         <?php  echo"$fst_board"; ?>
         </tr></table>

         </td>


         <td align="left">

         <table cellspacing="0" cellpadding="0"><tr><td style="padding:0 3px 0 0;font-size:10px">
         <a href="<?php  echo"$show_link2"; ?>">
         <img src="images/templates/<?php  echo"$template"; ?>/lastpost.png" border="0">
         </a>
         </td><td><b>
         <?php  echo"$last_thread"; ?></b>
         </tr></table>

         </td>

         <td align="left" width="120">

         <table cellspacing="0" cellpadding="0"><tr><td style="padding:0 3px 0 0;">
         <img src="images/templates/<?php  echo"$template"; ?>/user_member.gif">
         </td><td>
         <?php  if ($st_userl != "") echo"$st_userl"; else echo"User gelöscht";  ?>
         </tr></table>

         </td>
         <td align="left" width="80">

<?php  
          if ($minutes == "0" && $hours == "0")  {

              echo"$secondes"; echo" Sekunden";

              } 

         else  {

             if ($hours == "0")  {

                 echo"$minutes";

                 if ($minutes == "1")  {

                        echo" Minute";

                 }  else  {

                        echo" Minuten";

                 }
     
             } else  {

             echo"$hours"; echo"h "; echo"$minutes";  echo"min"; 

             }

         } ?>

         </td>

         <td width="50" align="right"><?php  echo"$row_newest_posts[hits]"; ?></td>

</tr>
</table>

      </tr>
