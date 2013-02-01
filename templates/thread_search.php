<form action="index.php?do=search" method="post">


<table width="<?php  echo"$width"; ?>" cellpadding="0" cellspacing="1">

  <tr>

    <td>

    <table>

      <tr>

        <td align="right">

        <b>Forum durchsuchen:</b> <input type="text" size="20" name="searchword"> 

        <input type="hidden" name="search_thread" value="<?php  echo"$f"; ?>">

        </td>

        <td align="left">

        <input type="submit" name="send_data" value="Go" class="buttons" style="height:18px;font-size:10px" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

        </td>

      </tr>

      </form>

    </table>

    </td>

    <td align="right">