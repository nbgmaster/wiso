<table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableinborder">
   
  <tr>

    <form action="index.php?action=login" method="post">

    <td class="cellbg" align="left" style="height:20px;">

    &nbsp;<b>Anmeldung</b>

    </td>

 </tr>
   
  <tr>
   
  <td class="tableb" align="center">

   <table cellspacing="0" cellpadding="3" width="100%" border="0">

      <tr>
      
        <td width="165">

        <b>Nickname:</b>&nbsp;

        <input type="text" name="login_username" class="input" size="12">

        </td>

        <td width="165">
 
        <b>Passwort:</b>&nbsp;

        <input type="password" name="login_userpw" class="input" size="12">

        </td> 

        <td width="72">

        <table cellspacing="0" cellpadding="0"><tr><td>
        <b>Autologin:</b>

        </td><td>
 
        <input type="checkbox" name="auto_login" value="1" width="30" style="border:0px; background-color : #<?php  echo"$cell_bg02"; ?>;"> 
        </td></tr></table>

        </td>

        <td width="90" align="left" style="border-right:<?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>">

        <input type="submit" class="input" value="Anmelden" name="submit_login_data" style="width:90px;" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

        </td>

        <td width="115" align="center" style="border-right:<?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>" onclick="location.href='index.php?do=faq'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">Passwort vergessen?</td>

        <td width="80" align="center" class="tableb"">
      
  <input type="button" class="input" onclick="location.href='index.php?do=register&step=1'" value="Registrieren" name="submit_login_data" style="width:90px;" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

       </td>

       </tr>

      </table>

      </td>

    </tr>

  </form>

</table>

