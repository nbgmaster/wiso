<?php 

  $text01 = "Logout erfolgreich!";
  $link   = "index.php";

  include("./templates/refresh.php");

  setcookie("cookie_wiwistud","", time()-3600);      
  
  setcookie("newP","", time()-3600*24*3);
  setcookie("newP-time","", time()-3600*24*3);

  session_unset(lastOnlineTime);
