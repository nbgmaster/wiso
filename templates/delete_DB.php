<form method="post">

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

     <td class="tableb" align="center">

     <input type="hidden" name="linkData" value="<?php  echo"$link"; ?>">

      <b>Diesen Eintrag wirklich l&ouml;schen?</b> <input type="hidden" name="dataID" value="<?php  echo"$u_id"; ?>"><input type="submit" name="send_del_data" value="Ja" class="buttons"  onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';"> <input type="button" class="buttons"  onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';" name="send_del_data" value="Nein" onclick="location.href='<?php  echo"$link"; ?>'">

      </td>

   </tr>

</form>

</table>
