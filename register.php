<?php 

  if ($auto_logon == "" && $userdata_id == "" && $_POST[Aprinciples] != "")  {

      if ($reg_disable == "1")  {

      $text01 = "Die Registrierung ist zur Zeit leider nicht möglich!";
      $link   = "javascript:history.back();";
      include('templates/refresh.php');

      }

      else  {

          if ($sec == "create_member")  { 

              include("includes/create_member.php");
 
          }

          else  {

              include("templates/register_top.php");

          }   // End of sec == ""

      }


  }   // End of Cookie Check
