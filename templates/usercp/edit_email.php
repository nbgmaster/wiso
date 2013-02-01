<script type="text/javascript" src="javascript/usercp/edit_email.js" language="JavaScript1.2"></script>
<script type="text/javascript" src="javascript/usercp/edit_email2.js" language="JavaScript1.2"></script>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
 
<form name="usercp_form" action="index.php?do=usercp&sec=edit_email&module=change" method="post" onsubmit="check_usercp2();return false">
              
  <tr>

         <td class="tableb" width="50%" align="left">
 
         <b>Dein aktuelles Passwort</b>

         </td>

         <td  class="tableb" width="50%" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="password" onBlur="check_usercp()" id="password" name="password" maxlength="20" size="40">
         <div id='ajaxDiv2'></div>
         </td>

    </tr>

     <tr>

         <td class="tableb" width="50%" align="left">
 
         <b>Neue Emailadresse</b>

         </td>

         <td  class="tableb" width="50%" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" onBlur="check_usercp()" id="email" name="email" maxlength="50" size="40" value="<?php  echo"$userdata_email"; ?>">
         <div id='ajaxDiv'></div>
         </td>

    </tr>

     <tr>

         <td class="tableb" width="50%" align="left">
 
         <b>Neue Emailadresse wiederholen</b>

         </td>

         <td  class="tableb" width="50%" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="text" name="email2" maxlength="50" size="40" value="<?php  echo"$userdata_email"; ?>">

         </td>

    </tr>

</table>