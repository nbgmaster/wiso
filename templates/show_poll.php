<form method="post" action="index.php?do=vote">



<table width="<?php  echo"$width"; ?>" cellpadding="5" cellspacing="1" class="tableinborder">
       
       <tr>

         <td class="cellbg">   

           <table cellspacing="0" cellpadding="0" width="100%">

             <tr>

               <td> 

               <b><font color="<?php  echo"#000000"; ?>">Umfrage:</b>

               <?php  echo"$row_polls[question]"; ?> 

               </td>

               <td align=right>

               <?php  echo"<font color=\"#000000\">"; ?><b><?php  echo"$all_votes"; ?></b> Stimme(n) gesamt</font>

               </td>

             </tr>

           </table>

         </td>

       </tr>

     </table>

     <table cellspacing="1" cellpadding="4" class="tableinborder" width="100%">

       <tr>

         <?php  if ($check_double_vote != "1")  { ?>

         <td class="tableb" width="24"><input id="checkbox" type="radio" value="1" name="answer_number"></td>

         <?php  } ?>

         <td class="tablea"><b><?php  echo"$row_polls[answer1]"; ?></b></td>

         <td class="tableb" width="330">

         <table><tr>
   
         <td class="tbodygfx">

         <div class="gfxBar">

         <div style="width: <?php  echo"$percent1%"; ?>"></div>
						
         </div>
                   
         </td></tr>

         </table>

         </td>

         <td class="tablea" width="30"><?php  echo"$answer1_votes"; ?></td>

         <td class="tableb" width="45"><?php  echo"$percent1%"; ?></td>

 
         </td>

         </tr>

         <?php  if ($row_polls[answer2] != "")  { ?> 

         <tr>

         <?php  if ($check_double_vote != "1")  { ?>

         <td class="tableb"><input id="checkbox" type="radio" value="2" name="answer_number"></td>

         <?php  } ?>

         <td class="tablea"><b><?php  echo"$row_polls[answer2]"; ?></b></td>

         <td class="tableb">  

         <table><tr>
   
         <td class="tbodygfx">

         <div class="gfxBar">

         <div style="width: <?php  echo"$percent2%"; ?>"></div>
						
         </div>
                   
         </td></tr>

         </table>

         </td>

         <td class="tablea"><?php  echo"$answer2_votes"; ?></td>

         <td class="tableb"><?php  echo"$percent2%"; ?></td>

         </tr>

         <?php  }  if ($row_polls[answer3] != "")  { ?> 

         <tr>

         <?php  if ($check_double_vote != "1")  { ?>

         <td class="tableb"><input id="checkbox" type="radio" value="3" name="answer_number"></td>

         <?php  } ?>

         <td class="tablea"><b><?php  echo"$row_polls[answer3]"; ?></b></td>

         <td class="tableb">

         <table><tr>
   
         <td class="tbodygfx">

         <div class="gfxBar">

         <div style="width: <?php  echo"$percent3%"; ?>"></div>
						
         </div>
                   
         </td></tr>

         </table>

         </td>

         <td class="tablea"><?php  echo"$answer3_votes"; ?></td>

         <td class="tableb"><?php  echo"$percent3%"; ?></td>


         </td>

         </tr>

         <?php  }  if ($row_polls[answer4] != "")  { ?> 

         <tr>

         <?php  if ($check_double_vote != "1")  { ?>

         <td class="tableb"><input id="checkbox" type="radio" value="4" name="answer_number"></td>

         <?php  } ?>

         <td class="tablea"><b><?php  echo"$row_polls[answer4]"; ?></b></td>

         <td class="tableb">

         <table><tr>
   
         <td class="tbodygfx">

         <div class="gfxBar">

         <div style="width: <?php  echo"$percent4%"; ?>"></div>
						
         </div>
                   
         </td></tr>

         </table>

         </td>

         <td class="tablea"><?php  echo"$answer4_votes"; ?></td>

         <td class="tableb"><?php  echo"$percent4%"; ?></td>


         </td>

         </tr>

         <?php  }  if ($row_polls[answer5] != "")  { ?> 

         <tr>

         <?php  if ($check_double_vote != "1")  { ?>

         <td class="tableb"><input id="checkbox" type="radio" value="5" name="answer_number"></td>

         <?php  } ?>

         <td class="tablea"><b><?php  echo"$row_polls[answer5]"; ?></b></td>

         <td class="tableb">
         <table><tr>
   
         <td class="tbodygfx">

         <div class="gfxBar">

         <div style="width: <?php  echo"$percent5%"; ?>"></div>
						
         </div>
                   
         </td></tr>

         </table>
         </td>

         <td class="tablea"><?php  echo"$answer5_votes"; ?></td>

         <td class="tableb"><?php  echo"$percent5%"; ?></td>


         </td>

         </tr>

         <?php  }  if ($row_polls[answer6] != "")  { ?> 

         <tr>

         <?php  if ($check_double_vote != "1")  { ?>

         <td class="tableb"><input id="checkbox" type="radio" value="6" name="answer_number"></td>

         <?php  } ?>

         <td class="tablea"><b><?php  echo"$row_polls[answer6]"; ?></b></td>

         <td class="tableb">

         <table><tr>
   
         <td class="tbodygfx">

         <div class="gfxBar">

         <div style="width: <?php  echo"$percent6%"; ?>"></div>
						
         </div>
                   
         </td></tr>

         </table>

         </td>

         <td class="tablea"><?php  echo"$answer6_votes"; ?></td>

         <td class="tableb"><?php  echo"$percent6%"; ?></td>


         </td>

       </tr>

       <?php  } ?>

     </table>


     <input type="hidden" name="t" value="<?php  echo"$t"; ?>">

     <input type="hidden" name="poll_id" value="<?php  echo"$row_polls[id]"; ?>">

     <?php  echo"$poll_button"; ?>

     <br>

 

</form>


