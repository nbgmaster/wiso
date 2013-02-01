  <tr>
 
    <?php  if($do == "members") { ?>

    <td class="tableb" align="left" onclick="location.href='index.php?do=profile&user_id=<?php  echo"".$row_members["UserID"].""; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <?php   } else { ?>

    <td class="tableb" align="left" onclick="location.href='index.php?do=admin&sec=edit_user&user_id=<?php  echo"".$row_members["UserID"].""; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <?php   } ?>

    <b> <?php  echo"".$row_members["UserName"].""; ?> </b>

    </td>

    <?php  if ($do != "admin")  { ?>

    <td class="tablea" align="center">

    <?php  echo"$formmailer"; ?>

    <?php  if ($formmailer != "")  { ?>
  
    <img src="images/templates/<?php  echo"$template"; ?>/email.gif" name="<?php  echo"$imgemail"; ?>" title="Email schreiben" border="0">

    <?php  } else { echo"&nbsp"; } 

     echo"$formmailer2"; ?>

    </td>

    <td class="tableb" align="center">

     <?php   

       if ($row_members[studivz] != "")  {

             if (substr($row_members[studivz], 0, 7) == "http://")  {
   
                 $user_studi = "<a href=\"$row_members[studivz]\" target=\"_blank\" onmouseover=\"$imgstudi.src='images/templates/$template/studivz_hover.gif';\" onmouseout=\"$imgstudi.src='images/templates/$template/studivz.gif';\">";
 
             }

             else  {  

                  $user_studi = "<a href=\"http://$row_members[studivz]\" target=\"_blank\" onmouseover=\"$imgstudi.src='images/templates/$template/studivz_hover.gif';\" onmouseout=\"$imgstudi.src='images/templates/$template/studivz.gif';\">";

             }

             $user_studi2 ="</a>";

         }

         else  {

             $user_studi = ""; $user_studi2 = "";

         } 

    echo"$user_studi";

    if ($user_studi != "")  { ?>

    <img src="images/templates/<?php  echo"$template"; ?>/studivz.gif" name="<?php  echo"$imgstudi"; ?>" border="0"></a>

    <?php  echo"$user_studi2"; } ?>
    
    </td>

    <td class="tablea" align="center">

    <a href="index.php?do=search&user_id=<?php  echo"".$row_members["UserID"].""; ?>" onmouseover="<?php  echo"$imgsearch"; ?>.src='images/templates/<?php  echo"$template"; ?>/search_hover.gif';" onmouseout="<?php  echo"$imgsearch"; ?>.src='images/templates/<?php  echo"$template"; ?>/search.gif';">
      
    <img src="images/templates/<?php  echo"$template"; ?>/search.gif" name="<?php  echo"$imgsearch"; ?>" title="Beiträge suchen" border="0"></a>
    
    </td>

    <td class="tableb" align="center">

    <a href="index.php?do=newpm&user_id=<?php  echo"".$row_members["UserID"].""; ?>" onmouseover="<?php  echo"$imgpn"; ?>.src='images/templates/<?php  echo"$template"; ?>/pn_hover.gif';" onmouseout="<?php  echo"$imgpn"; ?>.src='images/templates/<?php  echo"$template"; ?>/pn.gif';">
      
    <img src="images/templates/<?php  echo"$template"; ?>/pn.gif" name="<?php  echo"$imgpn"; ?>" title="PN schreiben" border="0"></a>
           
    </td>

    <td class="tablea" align="center">

    <?php  echo"$addbuddylink"; ?>

    <img src="images/templates/<?php  echo"$template"; ?>/buddy.gif" name="<?php  echo"$imghomie"; ?>" title="Zur Freundesliste hinzufügen" border="0"> 

    <?php  echo"$addbuddylink2"; ?>
 
    </td>

    <td class="tableb" align="center">

    <?php  } else { ?>

    <td class="tablea" align="center">

    <?php  } ?>

    <?php  echo"$member_regdate"; ?>

    </td>

    <?php  if ($do != "admin")  { ?>

    <td class="tablea" align="center">

    <?php  } else { ?>

    <td class="tableb" align="center">

    <?php  } ?>

    <?php  echo"".$row_members["postnumbers"].""; ?>

    </td>

  </tr>