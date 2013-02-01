

<table width="<?php  echo"$width"; ?>" cellpadding="0" cellspacing="1">
               
  <tr>

   <td width="62%" align="left">

  <?php   if ($check_rows > $break)  {   ?>



    <table cellspacing="0" cellpadding="0" style="height:30px">
               
      <tr>

        <td>

        <b>Seite</b> 

                 <select class="select" style="width:40px;" ONCHANGE="location = this.options[this.selectedIndex].value;">

                 <?php  

                   for ($count = 1;$count <= $maxpages; $count++)  {

                        echo"<option value='$side_link&page=$count' ";

                        if ($count == $page)  { 

                            echo"selected";
 
                        }

                        echo">$count</option>";

                   }

                   echo"</select>";
    
                   echo" von $maxpages"; 

                   echo"</td><td width=\"10\">&nbsp;</td><td><table cellspacing=\"1\" class=\"tableinborder\"><tr>";

                   echo" $navi_first $navi_left4 $navi_left3 $navi_left2 $navi_left $navi_actual $navi_right $navi_right2 $navi_right3 $navi_right4 $navi_last";

                   echo"</tr></table>";

                   ?>            

             </td>

           </tr>

         </table>
 
       <?php  

       } 

?>       </td>
<?php 
 
       if ($f != "" && $t == "")  {   ?>

       <td align="right" width="38%">

       <?php   if ($f_status_permission == "1" && $granted_write == "1")  {  ?>

       <a href="index.php?f=<?php  echo"$f"; ?>&do=newtopic" onmouseover="<?php  echo"$img_name"; ?>.src='images/templates/<?php  echo"$template"; ?>/newpost_hover.gif';" onmouseout="<?php  echo"$img_name"; ?>.src='images/templates/<?php  echo"$template"; ?>/newpost.gif';">
 
       <img src="images/templates/<?php  echo"$template"; ?>/newpost.gif" border="0" width="115" height="26" name="<?php  echo"$img_name"; ?>"></a> 

       <?php  }  else  {  ?>

       <img src="images/templates/<?php  echo"$template"; ?>/icon_closed.gif" border="0">

       <?php  } ?>

       </td>

       <?php  } if ($t != "" && $granted_write == "1") { ?>

       <td align="right" width="38%">

       <?php  if ($f_status == "1")  { ?>

       <a href="index.php?f=<?php  echo"$f"; ?>&do=newtopic" onmouseover="<?php  echo"$img_name"; ?>.src='images/templates/<?php  echo"$template"; ?>/newpost_hover.gif';" onmouseout="<?php  echo"$img_name"; ?>.src='images/templates/<?php  echo"$template"; ?>/newpost.gif';">
 
       <img src="images/templates/<?php  echo"$template"; ?>/newpost.gif" border="0" width="115" height="26" name="<?php  echo"$img_name"; ?>"></a> 

       &nbsp;

       <a href="index.php?t=<?php  echo"$t"; ?>&do=reply" onmouseover="<?php  echo"$img_name_answer"; ?>.src='images/templates/<?php  echo"$template"; ?>/answer_hover.gif';" onmouseout="<?php  echo"$img_name_answer"; ?>.src='images/templates/<?php  echo"$template"; ?>/answer.gif';">
 
       <img src="images/templates/<?php  echo"$template"; ?>/answer.gif" border="0" width="115" height="26" name="<?php  echo"$img_name_answer"; ?>"></a> 


       <?php  } else { ?>

       <img src="images/templates/<?php  echo"$template"; ?>/icon_closed.gif" border="0">

       <?php  } } ?>

       </td>

    </tr>

</table>