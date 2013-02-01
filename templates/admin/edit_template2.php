<form method="post">

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="center" class="tableb">

    <select class="input" name="template_name">
  
    <?php  

      while ($row_template = mysql_fetch_assoc($query_template))  {  

      echo"<option value=\"$row_template[tpl_name]\"";
  
      if ($row_template[tpl_name] == $template_name)  { 

          echo"selected";

          $tpl_id = $row_template["id"];

      }

      echo">".$row_template["tpl_name"]."</option>"; } 

    ?>

    </select>

    &nbsp;&nbsp;&nbsp;<input type="submit" class="input" value="Template Auswählen">

    </td>

  </tr>

</form>

</table>

<br>