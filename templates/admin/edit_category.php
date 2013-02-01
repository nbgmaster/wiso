<script type="text/javascript" src="javascript/admin/edit_category.js" language="JavaScript1.2"></script>


<form name="admin_form" action="index.php?do=admin&sec=edit_cat&module=change" method="post" onsubmit="return check_admin()">


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
     <tr>

         <td class="tablea" width="50%">
 
         <b>Kategorietitel</b>

         </td>

         <td class="tablea" width="50%">

         <input type="text" class="input" name="category" value="<?php  echo"".$row_category["title"].""; ?>" maxlength="80" size="40">

         </td>

      </tr>

   </table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
    <tr>

       <td class="tableb" align="center">

       <input type="hidden" value="<?php  echo"$c"; ?>" name="c">

       <input type="submit" class="input" name="send_admin_data" value="Kategorie ändern">

       </td>

     </tr>

  </form>

</table>

