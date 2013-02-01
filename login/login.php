
   <table cellpadding="0" cellspacing="1" class="tableinborder" width="180">

    <tr>

     <td class="catbg" align="left" style="height:19px">

     &nbsp;<b>

     <?php  if ($auto_logon_id == "" or $userdata_id == "" or $auto_logon_session == "" or $board_disable == "1" && $userdata_admin != "1")  {


     echo"Anmeldung"; 

     } else {

     if ($userdata_admin == "1")  {

         echo"<a href=\"index.php?do=admin\" class=\"catbg\">";

     }

     echo"Hallo $userdata_name"; 

     if ($userdata_admin == "1")  {

         echo"</a>";

     }

     } ?>

     </b>&nbsp;

     </td>
    
    </tr>

    <tr>

   <td valign="top" align="center" class="tableb">

<?php 

  if ($action == "logout")  {

      include("includes/logout.php");

  }

  if ($action == "login")  {

      include("includes/login.php");
   
  }

  if ($action == "")  {

      if ($auto_logon_id == "" or $userdata_id == "" or $auto_logon_session == "" or $board_disable == "1" && $userdata_admin != "1")  {

          include("tpl_login.php");

      }

      else  {

          include("tpl_logout.php");

      }

  }

?>

</td>

   </tr>
</form>
   </table>