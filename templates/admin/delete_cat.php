<form name="admin_form" action="index.php?do=admin&sec=edit_cat&module=del_c" method="post">

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
    <tr>

         <td class="tablea" width="50%">
 
         <b>Kategorie</b>

         </td>

         <td  class="tablea" width="50%">

         <select name="c" class="input">
         <option value="<?php  echo"".$row_category["id"].""; ?>"><?php  echo"".$row_category["title"].""; ?></option>
         </select>

         </td>

      </tr>

   </table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
    <tr>

       <td align="center" class="tableb">

       <input type="submit" class="input" name="send_admin_data" value="Kategorie löschen">

       </td>

     </tr>

  </form>

</table>