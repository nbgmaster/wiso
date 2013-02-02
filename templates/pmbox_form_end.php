<br>

<table width="<?php  echo"$width"; ?>" cellpadding="0" cellspacing="1">

  <tr>

    <td align="center">

    <table style="width:100%;">

      <tr>

        <td align="right">

        <select name="deloption">

        <option value="del_pm">Markierte Nachrichten l&ouml;schen</option>
        <option value="del_all_pm">Alle Nachrichten l&ouml;schen</option>

        </select>

        </td>

        <td align="center" width="40">

        <input type="submit" name="send_deldata" value="Go" class="buttons" style="height:18px;font-size:10px" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

        <input type="hidden" name="user_id" value="<?php  echo"$user_id"; ?>">

        </td>

       </tr>

    </table>

    </td>

  </tr>

</form>

</table>

<br>

<table>

  <tr>

    <td>
<table cellspacing="0" cellpadding="0"><tr><td>
    <img src="images/templates/<?php  echo"$template"; ?>/newfolder.gif">

    </td>

    <td>
&nbsp;
    <?php  if ($do == "outbox")  { echo"vom Empf&auml;nger"; } else { echo"Nachricht"; } ?> ungelesen
</td></tr></table>

    </td>

    <td width="20">&nbsp;</td>

    <td>
<table cellspacing="0" cellpadding="0"><tr><td>
    <img src="images/templates/<?php  echo"$template"; ?>/folder.gif">

    </td>

    <td>&nbsp;

    <?php  if ($do == "outbox")  { echo"vom Empf&auml;nger"; } else { echo"Nachricht"; } ?> gelesen
</td></tr></table>
    </td>

 </tr>

</table>
