<form action="index.php?do=admin&sec=massemail&module=send" method="post">

<table cellpadding="4" cellspacing="1" class="tableinborder" width="<?php  echo"$width"; ?>">

  <tr>

    <td class="tablea">

    Betreff:

    </td>

    <td class="tableb">

    <input type="text" name="subject" size="60">

    </td>

  </tr>

  <tr>

    <td class="tableb">

    Nachricht:

    </td>

    <td class="tablea">

    <textarea style="width:100%;height:100px;" name="message"></textarea>

    </td>

  </tr>

  <tr>

    <td class="tablea">

    Email verschicken als:

    </td>

    <td class="tableb">

    <input type="radio" name="sendmethod" value="text" checked>Text
    &nbsp;
    <input type="radio" name="sendmethod" value="html">HTML

    </td>

  </tr>

</table>

<table cellpadding="4" cellspacing="1" class="tableinborder" width="<?php  echo"$width"; ?>">

  <tr>

    <td class="tablea" align="center">

    <input type="submit" name="send_massemail" value="Abschicken">

    </td>

  </tr>

</table> 

</form>

    