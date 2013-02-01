<?php 

  // Check:: New PM

  if ($userdata_id != "")  {

      $NPm1res = mysql_query("SELECT COUNT( out_id ) AS newpms from $pm_in_tblname WHERE receiver_id = '$userdata_id' && status = '0' LIMIT 1");

      $NPm1row = mysql_fetch_row( $NPm1res );

      $newpms  = $NPm1row[ 0 ];

  }

  $NPmres = mysql_query("SELECT COUNT( out_id ) AS newpms2 from $pm_in_tblname WHERE receiver_id = '$userdata_id' && time > '$lastOnlineTime' LIMIT 1");

  $NPmrow = mysql_fetch_row( $NPmres );

  $newpms2 = $NPmrow[ 0 ];

?>

<form action="index.php?action=logout" method="post">


<table cellpadding="0" cellspacing="1" border="0" width="<?php  echo"$width"; ?>" class="tableinborder">
   
 
<tr>

   <td align="left">
 
    <table cellspacing="0" cellpadding="4" width="100%">

      <tr>

        <td class="cellbg">

        <b>Hallo <?php  echo"$userdata_name"; ?></b>

        <?php  if ($userdata_admin == "1") { ?>
     
        [<a href="index.php?do=admin">Admin</a>]

        <?php  } ?>

        </td>

        <td align="right" class="cellbg">

        <b>Dein letzter Besuch war am: <?php  echo"$DATEp, $DATEp2"; ?> |

        aktuelles Datum: <?php  echo"$c_date, $c_time"; ?>

        </td>

      </tr>

    </table>

    </td>
   
 </tr>
   
  <tr>
   
  <td class="tableb">

    <table cellspacing="0" cellpadding="3" width="100%">

      <tr>

         <td align="left" class="tablea" style="width:150px;border-right:<?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>">

         <b>Neu seit letztem Besuch:</b></td>

         <?php  if ($newPostsResult > 0)  { ?>

         <td align="center" onclick="location.href='index.php?do=showNewPosts'" style="border-right:<?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <?php  } else { ?>

         <td align="center" style="border-right:<?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>">

         <?php  } ?>

              <table cellspacing="0" cellpadding="0"><tr><td>

              <img src="images/templates/<?php  echo"$template"; ?>/newpost.png">

              </td><td>

              <b><span style="font-size : <?php  echo"$fontsize_header"; ?>px;">&nbsp;<?php  echo"$newPostsResult"; ?></span></b>

              </td></tr></table>

         </td>

         <?php  if ($resultDBnewOne > 0)  {  ?>

         <td align="center" onclick="location.href='index.php?do=database&sec=new'" style="border-right:<?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <?php  } else { ?>

         <td align="center" style="border-right:<?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>">
         
         <?php  } ?>

              <table cellspacing="0" cellpadding="0"><tr><td>

              <img src="images/templates/<?php  echo"$template"; ?>/h_data2.gif" height="16">

              </td><td>

              <b>

              <?php  

              if ($resultDBnewOne > $dbNewNumbers)  {  
 
                  echo"<span style=\"color:red;\">";

              }

              ?><b><span style="font-size : <?php  echo"$fontsize_header"; ?>px;"><?php 
              echo"$resultDBnewOne"; 
              ?></span></b><?php 

              if ($resultDBnewOne > $dbNewNumbers)  {  
 
                  echo"</span>";

              }

              ?>

              </b>

              </td></tr></table>

              </td>

              <?php  if ($newpms2 > 0)  { ?>

              <td align="center" onclick="location.href='index.php?do=inbox'" style="border-right:<?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';"> 
              
              <?php  } else { ?>

              <td align="center" style="border-right:<?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>"> 
              
              <?php  } ?>

              <table cellspacing="0" cellpadding="0"><tr><td>

              <?php  if ($newpms > 0)  { ?>

              <img src="images/templates/<?php echo"$template";?>/newpm.gif"> 

              <?php  } else { ?>
              
              <img src="images/templates/<?php  echo"$template"; ?>/newpm3.gif">

              <?php  } ?>

              </td><td>

              <b><span style="font-size : <?php  echo"$fontsize_header"; ?>px;"><?php  echo"$newpms2"; ?></span></b>

              </td></tr></table>

              </td>    

        <td align="center" onclick="location.href='index.php?do=markread'" style="border-right:<?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">
        <b>Alle ungelesenen Beiträge als gelesen markieren</b>
        </td>

        <td align="center" width="95">

         <input type="submit" class="input" value="Abmelden" name="submit_login_data" style="width:90px;" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

        <?php  echo"$table_end"; ?> 

      </td>

    </tr>

  </form>

  </table>

  </td>

 </tr>

</table>


