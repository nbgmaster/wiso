<?php 

  if ($auto_logon_id == "" or $userdata_id == "")  { 

      $userdata_id = $userdata_ip;

  }

  if ($hidecat != "")  {

      $query_hidecat2  = mysql_query("SELECT * from $hidecat_tblname WHERE catid = '$hidecat' && user = '$userdata_id'");    

      $hidecat_var2    = mysql_num_rows($query_hidecat2);
 
      if ($hidecat_var2 != "1")  {

          $str_hidecat     = "INSERT into $hidecat_tblname (catid,user)";
          $str_hidecat    .= "VALUES ('$hidecat','$userdata_id')";
          $result_hidecat  = @mysql_query($str_hidecat);

      }

  }

  if ($showcat != "")  {
 
      $delete_hidecat = "DELETE FROM $hidecat_tblname WHERE catid = '$showcat' && user = '$userdata_id'";     

      mysql_query($delete_hidecat); 

  }

