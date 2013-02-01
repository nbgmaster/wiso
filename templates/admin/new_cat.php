<script type="text/javascript" src="javascript/admin/edit_category.js" language="JavaScript1.2"></script>

<form name="admin_form" action="index.php?do=admin&sec=new_cat&module=create" method="post" onsubmit="return check_admin()">

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="tablea" width="50%">
    
    <b>

    <a href="index.php?do=admin&sec=new_cat">Kategoriename</a>

    </b>

    </td>

    <td class="tableb" width="50%">
   
    <input type="text" name="category" maxlength="80" size="40">

    </td>

  </tr>
    
</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

       <td align="center" class="tableb">

       <input type="submit" class="input" name="send_admin_data" value="Kategorie erstellen">

       </td>

     </tr>

  </form>

</table>