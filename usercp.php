<?php  

  if ($sec == "edit_nickname")  { 

      $usercp_navi = ":: Nickname &auml;ndern";
  
      include("templates/usercp/usercp_top.php");

      if ($change_nick_disable == "0")  {

          include("includes/usercp/edit_nickname.php"); 

          if ($module == "")  {

              include("templates/usercp/edit_form_end.php");

          }

      }

      else  {

           $text01 = "Diese Funktion wurde vom Admin deaktiviert!";
           $link   = "javascript:history.back();";

           $refresh_time = "2";

           include("templates/refresh.php");    

      }

  }

  if ($sec == "edit_pw")  { 

      $usercp_navi = ":: Passwort &auml;ndern";
  
      include("templates/usercp/usercp_top.php");
      include("includes/usercp/edit_pw.php"); 

      if ($module == "")  {

          include("templates/usercp/edit_form_end.php");

      }

  }

  if ($sec == "edit_email")  {
 
      $usercp_navi = ":: Emailadresse &auml;ndern";
     
      include("templates/usercp/usercp_top.php");

/*

      include("includes/usercp/edit_email.php");

      if ($module == "")  {

          include("templates/usercp/edit_form_end.php");

      }

*/


           $text01 = "Diese Funktion wurde vom Admin deaktiviert!";
           $link   = "javascript:history.back();";

           $refresh_time = "2";

           include("templates/refresh.php");    


  }

  if ($sec == "edit_settings")  { 

      $usercp_navi = ":: Einstellungen &auml;ndern";
   
      include("templates/usercp/usercp_top.php");

      if ($module == "")  {

          include("includes/usercp/edit_settings.php");

          include("templates/usercp/edit_form_end.php");

      }

      else  {

          include("includes/usercp/edit_settings.php");

      }

  }

  if ($sec == "edit_view")  { 

      $usercp_navi = ":: Forendarstellung &auml;ndern";
  
      include("templates/usercp/usercp_top.php");
      include("includes/usercp/edit_view.php"); 

      if ($module == "")  {

          include("templates/usercp/edit_form_end.php");

      }

  }


  if ($sec == "edit_profile")  { 

      $usercp_navi = ":: Profildaten &auml;ndern";
 
      include("templates/usercp/usercp_top.php");
      include("includes/usercp/edit_profile.php");

      if ($module == "")  {

          include("templates/usercp/edit_form_end.php");

      }

  }

  if ($sec == "edit_signature")  { 

      if ($module == "")  { 

          $usercp_navi = ":: Signatur &auml;ndern";
 
          include("templates/usercp/usercp_top.php");
          include("includes/usercp/edit_signature.php");

      }

      else  {

          include("includes/usercp/edit_signature.php"); 

      }

  }

  if ($sec == "edit_avatar")  {

      $usercp_navi = ":: Avatar &auml;ndern"; 
  
      include("templates/usercp/usercp_top.php");
      include("includes/usercp/edit_avatar.php");

  }

  if ($sec == "buddylist")  { 

      $usercp_navi = ":: Freundesliste"; 
 
      include("templates/usercp/usercp_top.php");
      include("includes/buddylist.php");

  }

  if ($sec == "ignorelist")  { 

      $usercp_navi = ":: Ignorierliste"; 
 
      include("templates/usercp/usercp_top.php");
      include("includes/buddylist.php");

  }

  if ($sec == "")  {

      $usercp_navi = "";
 
      include("templates/usercp/usercp_top.php");

  }

  if ($sec == "")  {

      include("templates/usercp/usercp.php");

  }