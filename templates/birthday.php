<br>

 
    <table cellpadding="4" cellspacing="1" border="0" class="tableinborder" width="<?php  echo"$width"; ?>">
   
      <tr>
    
       <td class="cellbg" align="left"><b>Geburtstagsticker</b></td> 
   
     </tr>
   
     <tr>
   
       <td class="tableb" align="left">

       <table width="100%">

         <tr>

           <td width="40" style="vertical-align:bottom">

           &nbsp;<img src="images/templates/<?php  echo"$template"; ?>/kalender.gif">
   
           </td>

           <td valign="top">

<table width="100%" cellspacing="3"><tr><td>

       <?php  

       if ($no_birthdays == "1")  {

           echo"Es hat heute kein Mitglied aus unserer Community Geburtstag.";

       }

       else  {

           $count_again  = "0"; 
           $count_finish = "1";

           $childnumbers = count($child);

           echo"<b>Wir gratulieren</b> ";

           foreach ($child as $sortout) {

                  echo"<a href=\"index.php?do=profile&user_id=$childid[$count_again]\"><b>$child[$count_again]</b></a>($childage[$count_again])";

                  $childnumbers2 = $childnumbers - 1;

if ($childnumbers > 1)  {

                  if ($childnumbers == "2" or $childnumbers > 2 && $childnumbers2 == $count_finish)  { echo" und "; }
                  else if ($childnumbers != $count_finish)  { echo", "; }

}

                  $count_again  = $count_again + 1;
                  $count_finish = $count_finish + 1;

           } 

           echo" <b>zum Geburtstag!</b>";

       } 

       ?>
</td></tr><tr><td>

       Das nächste Geburtstagkind:

       <?php   $countbirths = "1";
  
       while  ($row_nbirthchild  =  mysql_fetch_assoc($query_nbirthchild)) {

               $nextbirthchild   = "$row_nbirthchild[UserName]";

               $ageb             = $time_y - $row_nbirthchild[birthyear];

               echo"<a href=\"index.php?do=profile&user_id=$row_nbirthchild[UserID]\"><b>$nextbirthchild</b></a>($ageb)";

               if ($numberofbirths > 1 && $countbirths != $numberofbirths)  { echo", "; }

               $countbirths = $countbirths + 1;
       
       }

       echo" am <b>$nextbdday.$nextbdmonth.</b>"; ?>

       </td>

     </tr>
  
  </table>

  </td>

 </tr>
  
</table>
  </td>

 </tr>
  
</table>