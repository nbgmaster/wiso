<script type="text/javascript" src="javascript/usercp/edit_nickname.js" language="JavaScript1.2"></script>


<form name="usercp_form" action="index.php?do=usercp&sec=edit_nickname&module=change" method="post" onsubmit="return check_usercp()">


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

         <td class="tablea" width="50%">
 
         <b>Ihr aktuelles Passwort</b>

         </td>

         <td  class="tablea" width="50%">

         <input type="password" name="password" maxlength="20" size="40">

         </td>

    </tr>

     <tr>

         <td class="tablea" width="50%">
 
         <b>Neuer Nickname</b>

         </td>

         <td  class="tablea" width="50%">

         <input type="text" class="input" name="nickname" maxlength="20" size="40" value="<?php  echo"$userdata_name"; ?>">

         </td>

    </tr>

     <tr>

         <td class="tablea" width="50%">
 
         <b>Neuen Nickname wiederholen</b>

         </td>

         <td  class="tablea" width="50%">

         <input type="text" class="input" name="nickname2" maxlength="20" size="40" value="<?php  echo"$userdata_name"; ?>">

         </td>

    </tr>

</table>