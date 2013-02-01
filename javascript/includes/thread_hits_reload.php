<?php 

  $reload_access = ""; 
  $reload_time   = explode( " ", microtime());
  $reload_now    = (double)$reload_time[0] + (double)$reload_time[1];
  $reload_alt    = $reload_now - $reload_length;


  mysql_query( "DELETE FROM $reload_tblname WHERE time < $reload_alt" ) OR DIE(" ");


  $query_reload = mysql_query("SELECT * FROM $reload_tblname WHERE ip = '$userdata_ip' && t = '$t'");
  $check_ipdata = mysql_num_rows($query_reload);

  if ($check_ipdata == "false")  { 

      mysql_query("INSERT INTO $reload_tblname (id,ip,time,t) VALUES('', '$userdata_ip', '$reload_now', '$t')") OR DIE(" ");

      $reload_access = "yes";
           
  }

  else  {

      $reload_access = "no";

  }