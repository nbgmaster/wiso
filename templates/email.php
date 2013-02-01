<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="catbg" width="50%" align="left">

    :: <b>Email an <?php  echo"$receiver"; ?> schreiben</b>

    </td>

  </tr>

</table>   

<br>

    <script language="JavaScript" type="text/javascript" src="./javascript/form_email.js"></script>

    <form action="index.php?do=email&sec=send&user_id=<?php  echo"$user_id"; ?>" name="f_email" method="post" onsubmit="return check_email()">

    <table cellspacing="1" cellpadding="5" class="tableinborder" width="<?php  echo"$width"; ?>">

      <tr>

        <td class="tablea">

        <b>Betreff:</b>

        </td>

        <td class="tableb" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';"> 

        <input type="text" size="50" name="subject" value="<?php  echo"$subject";?>">

        </td>

      </tr>

      <tr>

        <td class="tablea" valign="top">

        <b>Deine Mitteilung:</b>

        </td>

        <td class="tableb" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

        <textarea cols="75" rows="12" name="message"></textarea>

        </td>

      </tr>

    </table>

<table width="<?php  echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tablea" align="center">

    <input type="hidden" name="receiver_email" value="<?php  echo"$receiver_email"; ?>">
    <input type="hidden" name="receiver" value="<?php  echo"$receiver"; ?>">

    <input type="submit" value="Email abschicken" class="buttons" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

    </td>
 
  </tr>

</form>

</table>

<br>