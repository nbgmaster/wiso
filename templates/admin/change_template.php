<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="center">

    <form action="index.php?do=admin&sec=templates&module=change" method="post">

    Template: <select name="tpl_name">

    <?php 

      $query_template = mysql_query("SELECT * from $templates_tblname");

      while ($row_template = mysql_fetch_assoc($query_template))  {  

             echo"<option value=\"$row_template[tpl_name]\"";

             if ($row_template["tpl_name"] == $template)  { 

             echo"selected";

             }

             echo">".$row_template["tpl_name"]."</option>";

      }

    ?>

    </select>

    </td>

    <td align="center">

    <input type="submit" class="input" value="Template auswählen" name="change_tpl">

    </td>

  </tr>

</form>

</table>