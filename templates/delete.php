<form method="post">

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

     <td class="tableb" align="center">

      <b><?php  echo"$text01"; ?></b> <input type="hidden" name="adminoptions" value="deletetopic"><input class="buttons" type="submit" name="send_del_data" value="Ja" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';"> <input type="button" class="buttons" name="send_del_data" value="Nein" onclick="location.href='<?php  echo"$link"; ?>'" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

      </td>

   </tr>

</form>

</table>
