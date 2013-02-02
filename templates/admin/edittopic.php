<form action="index.php?do=edittopic" method="post">

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

       <td align="center" class="cellbg">

       Thema bearbeiten

       </td>

     </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="tablea" width="50%">
    
    <b>

    Thema:

    </b>

    </td>

    <td class="tableb" width="50%">

       <input type="text" name="topicname" value="<?php  echo"$topicname"; ?>" style="width:300px;" maxlength="40">

        </td>

  </tr>

  <tr>

    <td class="tablea" width="50%">
    
    <b>

    Thema als "Wichtig" einstufen?

    </b>

    </td>

    <td class="tableb" width="50%">

    <select name="announce">

    <?php  if ($topicannounce == "1")  { ?>

        <option value="1" selected>Ja</option>
        <option value="0">Nein</option>
 
    <?php  } else  { ?>

        <option value="1">Ja</option>
        <option value="0" selected>Nein</option>

        <?php  } ?>

        </select>

        </td>

  </tr>
    
</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

       <td align="center" class="tableb">

       <input type="hidden" name="adminoptions" value="edittopic">

       <input type="hidden" name="t" value="<?php  echo"$t"; ?>">

       <input type="submit" class="buttons" name="send_edit_data" value="Thema &auml;ndern" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

       </td>

     </tr>

  </form>

</table>