<form name="admin_form" action="index.php?do=admin&sec=edit_cat&module=del_f" method="post">

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
     <tr>

         <td class="tablea" width="50%">
 
         <b>Forum</b>

         </td>

         <td  class="tablea" width="50%">

         <select name="f" class="input">
         <option value="<?php  echo"".$row_forum["id"].""; ?>"><?php  echo"".$row_forum["forum"].""; ?></option>
         </select>

         </td>

      </tr>

   </table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
    <tr>

       <td align="center" class="tableb">

       <input type="submit" class="input" name="send_admin_data" value="Forum l&ouml;schen">

       </td>

     </tr>

  </form>

</table>