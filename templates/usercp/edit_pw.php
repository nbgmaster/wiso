<script type="text/javascript" src="javascript/usercp/edit_pw.js" language="JavaScript1.2"></script>
<script type="text/javascript" src="javascript/usercp/edit_pw2.js" language="JavaScript1.2"></script>


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

<form name="usercp_form" action="index.php?do=usercp&sec=edit_pw&module=change" method="post" onsubmit="check_usercp2();return false">
               
  <tr>

         <td class="tableb" width="50%" align="left">
 
         <b>Dein altes Passwort</b>

         </td>

         <td  class="tableb" width="50%" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="password" onBlur="check_usercp()" id="password" name="password" maxlength="20" size="40">
         <div id='ajaxDiv'></div>
         </td>

    </tr>

     <tr>

         <td class="tableb" width="50%" align="left">
 
         <b>Neues Passwort</b>

         </td>

         <td  class="tableb" width="50%" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="password" name="password2" maxlength="20" size="40">

         </td>

    </tr>

     <tr>

         <td class="tableb" width="50%" align="left">
 
         <b>Neues Passwort wiederholen</b>

         </td>

         <td  class="tableb" width="50%" align="left" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

         <input type="password" name="password3" maxlength="20" size="40">

         </td>

    </tr>

     <tr>

         <td class="tableb" align="left" colspan="2">

         <table cellspacing="0" cellpadding="0"><tr><td>

         &nbsp;<img src="images/templates/<?php echo"$template";?>/important.gif"> 

         </td><td>

         &nbsp;<b>Nach der Änderung wirst du automatisch ausgeloggt! Du kannst dich sofort danach mit deinem neuen Passwort einloggen!</b>

         </td></tr></table>


         </td>

    </tr>

</table>