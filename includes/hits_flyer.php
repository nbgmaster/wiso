<?php 

  include('../dbCon.php');

  if ($_GET["id"] == 1)  {

  $upd_hits = "UPDATE admin_config SET hitsFlyer1 = hitsFlyer1+1 WHERE id = '1'";

  }

  if ($_GET["id"] == '2')  {

  $upd_hits = "UPDATE admin_config SET hitsFlyer2 = hitsFlyer2+1 WHERE id = '1'";

  }

  if ($_GET["id"] == '3')  {

  $upd_hits = "UPDATE admin_config SET hitsFlyer3 = hitsFlyer3+1 WHERE id = '1'";

  }
  
  if ($_GET["id"] == '4')  {

  $upd_hits = "UPDATE admin_config SET hitsFlyer4 = hitsFlyer4+1 WHERE id = '1'";

  }
  
  mysql_query($upd_hits) OR die(mysql_error());
