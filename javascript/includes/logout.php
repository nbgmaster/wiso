<?php 
    
  $text01 = "Logout erfolgreich!";
  $link   = "index.php";

  include("./templates/refresh.php");

  setcookie(cookie_nbg_master_de_id,time()-365*24*3600);

  session_unset(cookie_nbg_master_de_id);