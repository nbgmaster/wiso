<script type="text/javascript" src="javascript/admin/edit_forum.js" language="JavaScript1.2"></script>

<form name="admin_form" action="index.php?do=admin&sec=new_forum&module=create" method="post" onsubmit="return check_admin()">

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

         <td class="tablea" width="50%">
 
         <b>Forumtitel</b>

         </td>

         <td class="tablea" width="50%">

         <input type="text" class="input" name="forum" maxlength="40" size="40">

         </td>

      </tr>

      <tr>

         <td class="tablea" width="50%">
 
         <b>Beschreibung</b>

         </td>

         <td class="tablea" width="50%">

         <textarea style="width:100%; height:100px;" name="description"></textarea>

         </td>

      </tr>

      <tr>

         <td class="tablea" width="50%">
 
         <b>Kategorie</b>

         </td>

         <td class="tablea" width="50%">

         <select name="f_cat" style="width:120px;" class="input">

         <?php 

           $query_c = mysql_query("SELECT * from $c_tblname ORDER by id");

           while ($row_c = mysql_fetch_assoc($query_c))  { ?>

                  <option value="<?php  echo"".$row_c[id].""; ?>">

                  <?php  echo"".$row_c["title"].""; ?>

                  </option>
 
           <?php  } 

         ?>

         </select>
    
         </td>

      </tr>

      <tr>

         <td class="tablea" width="50%">
 
         <b>Forum Status</b>

         </td>

         <td class="tablea" width="50%">

         <select name="f_status" style="width:120px;" class="input">

         <option value="1" selected>offen</option>
         <option value="0">geschlossen</option>

         </select>

         </td>

      </tr>

     <tr>

         <td class="tablea" width="50%">
 
         <b>User Rechte:: Lesen</b>

         </td>

         <td class="tablea" width="50%">

         <select name="f_read" style="width:120px;" class="input">

	 <option value="all" selected>Alle</option>
	 <option value="reg">nur registrierte User</option>
	 <option value="mod">nur Moderatoren</option>
	 <option value="admin">nur Admins</option>

         </select>

         </td>

      </tr>

     <tr>

         <td class="tablea" width="50%">
 
         <b>User Rechte:: Schreiben</b>

         </td>

         <td class="tablea" width="50%">

         <select name="f_write" style="width:120px;" class="input">

	 <option value="all">Alle</option>
	 <option value="reg" selected>nur registrierte User</option>
	 <option value="mod">nur Moderatoren</option>
	 <option value="admin">nur Admins</option>

         </select>

         </td>

      </tr>

   </table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

       <td class="main" align="center" bgcolor="<?php  echo"#$cell_bg02"; ?>">

       <input type="hidden" value="<?php  echo"".$row_forum["cat"].""; ?>" name="actual_cat">
       <input type="hidden" value="<?php  echo"".$row_forum["position"].""; ?>" name="actual_position">
       <input type="hidden" value="<?php  echo"$f"; ?>" name="f">

       <input type="submit" class="input" name="send_admin_data" value="Forum erstellen">

       </td>

     </tr>

  </form>

</table>

