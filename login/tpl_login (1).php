
   <table cellspacing="0" cellpadding="3" width="100%" border="0">
  <form action="index.php?action=login" method="post">

      <tr>
        <td align="center">
        <table cellspacing="5" cellpadding="0"><tr>

       <td align="left">
        <img src="images/templates/<?php echo"$template";?>/login_nickname.png"></td><td>

        <input type="text" name="login_username" value="" class="input" style="width:130px;">
        </td></tr><tr>
      
        <td align="center">
         
        <img src="images/templates/<?php echo"$template";?>/login_password.gif"></td><td>

        <input type="password" name="login_userpw" value="" class="input" style="width:130px">
        </td></tr></table>
        </td> 
</tr><tr>
        <td align="center" style="height:32px">

        <table cellspacing="0" cellpadding="0"><tr><td>
        <b>Autologin:</b>

        </td><td>
 
        <input type="checkbox" name="auto_login" value="1" width="30" id="checkbox" style="background-color : #<?php echo"$cell_bg02"; ?>;"> 
        </td></tr></table>

          </td></tr>  </table>


        <input type="submit" class="buttons" value="Anmelden" name="submit_login_data" style="width:90px;" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">
<br><br>


  <table cellspacing="0" cellpadding="0" width="100%"><tr>
        <td align="center" class="tablea" onclick="location.href='index.php?do=faq'" style="height:28px;border-bottom:1px solid #000000;border-top:1px solid #000000;" onmouseover="this.className='mouseout';" onmouseout="this.className='mouseout2';">
   <b> Login funktioniert nicht?</b>
</td></tr></table>

      <br>
  <input type="button" class="buttons" onclick="location.href='index.php?do=principles'" value=" Neu registrieren" name="submit_login_data" style="width:120px;" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

<br><br>
