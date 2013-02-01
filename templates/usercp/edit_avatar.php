<table width="<?php  echo"$width"; ?>" cellpadding="2" cellspacing="1" class="tableinborder">
 
<form name="usercp_form" action="index.php?do=usercp&sec=edit_avatar&module=change" method="post" enctype="multipart/form-data">
              
  <tr>

    <td class="tableb" width="30%" align="center">

    <?php  if($userdata_avatar != "")  {  ?> 

    <img src="avatars/<?php  echo"$userdata_avatar"; ?>" style="border:<?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>;">

    <?php  } else { ?>

     <span style="line-height:36px;font-size:13px"><b>Kein Userbild / Avatar hochgeladen</b></span>

    <?php  } ?>

    </td>

    <td class="tablea" width="70%" align="left">

    <table>

      <tr>

        <td width="20%">&nbsp;</td>

        <td>

        <br>
 
        <?php  if($userdata_avatar != "") { ?>

        <b>Bild löschen:</b> <input type="checkbox" value="1" name="del_avatar">

        <br><br>

        <?php  } ?>
  
        <b>Neues Bild hochladen:</b>

        <br><br>

        <input name="file" type="file" size="60">

        <br><br>

        <b>Bild von einer URL laden:</b> 

        <br><br>

        <input name="url_file" type="text" size="60">

        <br><br>

        (max. <?php  echo"$avatar_max_width x $avatar_max_height Pixel, $avatar_max_size2 KB"; ?> | jpg, gif, bmp, png)

        <br><br>

        <input type="submit" name="send_data" class="buttons" value="Avatareinstellungen ändern" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

        <br><br>

        </td>

        <td width="20%">&nbsp;</td>

      </tr>

    </table>

    </td>

  </tr>

</form>

</table>