<br>

<table width="<?php  echo"$width"; ?>" cellpadding="0" cellspacing="1">

<form method="post">

  <tr>

    <td align="center">

    <table style="width:100%;">

      <tr>

        <td align="right">

        <select name="adminoptions">

        <option value=""><b>Administrative Optionen:</b></option>
        <option value="closetopic"><b>Thema &ouml;ffnen / schliessen</b></option>
        <option value="movetopic"><b>Verschieben</b></option>
        <option value="edittopic"><b>bearbeiten</b></option>
        <option value="tickertopic"><b>Newsticker <?php  echo"$newstStr"; ?></b></option>
        <option value="deletetopic"><b>Thema l&ouml;schen</b></option>
         
        </select>

        </td>

        <td align="center" width="40">

        <input type="submit" name="send_options" value="Go" class="buttons" style="height:18px;font-size:10px" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

        </td>

       </tr>

    </table>

    </td>

  </tr>

</form>

</table>
