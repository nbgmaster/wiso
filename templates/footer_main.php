<?php  
                // Load:: Stats

                include("includes/stats.php");

?>

   <br>

    <table cellpadding="4" cellspacing="1" border="0" class="tableinborder" width="<?php  echo"$width"; ?>">
   
      <tr>
    
       <td class="cellbg" align="left"><b>Mitglieder in den letzten 5 Minuten online</b></td> 
   
     </tr>
   
     <tr>
   
       <td class="tableb" align="left">

       <table>

         <tr>

           <td width="40">

           &nbsp;<img src="images/templates/<?php  echo"$template"; ?>/footer_members.gif">
   
           </td>

           <td valign="top">
               
          <table>

            <tr>

               <td>

               Zur Zeit sind <b><?php  echo"$online_members"; ?></b>

               <?php  if($online_members == "1") { echo" Mitglied"; } else { echo" Mitglieder"; } ?>

               <?php  echo"(<b>$ghost_members</b>"; if($ghost_members == "1") { echo" Geist)"; } else { echo" Geister)"; } ?>

               <?php  if ($no_members < 0)  {  $no_members = "0"; } echo"und <b>$no_members</b>"; if($no_members == "1") { echo" Gast"; } else { echo" Gäste"; } ?>

               im Forum unterwegs. 

               </td>

             </tr>

             <?php   

             $t = "0";

             if ($s != "0")  {

             ?>
                  
             <tr>
 
               <td>

               Mitglieder: 

               <?php 

               foreach ($members_online_names as $read_out)  {

                        $t = $t + 1;
  
                        echo"$read_out";

                        if($t != $s)  { echo", "; }

                }

                ?>          

                </td>

             </tr>

             <?php   }   ?>
  
           </table>
         
           </td>

         </tr>
  
        </table>

        </td>

      </tr>

    </table>

    <br>

    <table cellpadding="4" cellspacing="1" border="0" class="tableinborder" width="<?php  echo"$width"; ?>">
   
      <tr>
    
        <td align="left" class="cellbg"> 

        <table cellspacing="0" cellpadding="0">

        <tr><td width="560"><font color="#<?php  echo"$cellbg_fontcolor"; ?>"><b>Statistik</b></font></td><td><font color="#<?php  echo"$cellbg_fontcolor"; ?>"><b>Besucher</b></font></td></tr></table>

        </td>
   
     </tr>
      
     <tr>
   
       <td class="tableb" align="left">

       <?php 

       $query_newest_users = mysql_query("SELECT UserID, UserName, UserRegdate from $user_tblname ORDER by UserRegdate DESC LIMIT 1");

       while ($row_newest_users = mysql_fetch_assoc($query_newest_users))  {

            $newest_user_name    = $row_newest_users["UserName"];
            $newest_user_id      = $row_newest_users["UserID"];

       }

       ?>

       <table width="100%">

         <tr>

           <td width="40">

           &nbsp;<img src="images/templates/<?php  echo"$template"; ?>/footer_stats.gif">
   
           </td>

           <td valign="top" width="506">

           Besucher-Rekord: <?php  echo"$visRecNum"; ?> Besucher am <?php  echo"$visRecTI"; ?> Uhr.

           <br>
         
           Mitglieder: <b><?php  echo"$memTot"; ?></b> |

           Themen: <b><?php  echo"$ThdTot"; ?></b> | 
   
           Beiträge: <b><?php  echo"$posTot"; ?></b> (Durchschnitt <?php  echo"$postsperday"; ?> Beiträge/Tag)

           <br>

           Unser neuestes Mitglied heißt: <a href="index.php?do=profile&user_id=<?php  echo"$newest_user_id"; ?>"><b><?php  echo"$newest_user_name"; ?></b></a>.

           </td>           <td width="40" align="left">

           &nbsp;<img src="images/templates/<?php  echo"$template"; ?>/footer_visiter.gif">
   
           </td><td width="5">&nbsp;</td>

           <td align="left"><table cellspacing="0" cellpadding="0"><tr><td align="left">
           Besucher heute:</td><td align="left">&nbsp;<b><?php  echo"$visitertoday"; ?></b>
           </td></tr><tr><td align="left">
           Besucher gestern: </td><td align="left">&nbsp;<b><?php  echo"$visiteryesterday"; ?></b>
           </td></tr><tr><td align="left">
           Besucher gesamt: </td><td align="left">&nbsp;<b><?php  echo"$visTOT"; ?></b>
           </td></tr></table>
           </td>

         </tr>
  
       </table>   

       </td>

     </tr>
  
    </table>