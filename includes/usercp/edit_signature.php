<?php 


  function byte_umrechner($bytes) {
 
      $size  = number_format(($bytes / pow(2,20)), 2);
      $size .= " MB";
      return $size;

  }

  if ($module == "")  { 

      $form_link = "index.php?do=usercp&sec=edit_signature&module=change";

      $query_signature = mysql_query("SELECT signature from $user_tblname WHERE UserID = '$userdata_id'");

      while($row_signature = mysql_fetch_assoc($query_signature))  {  

      $message = $row_signature["signature"];

      }

      if($html_disable == "0")     { $html_mode    = "An"; } else { $html_mode    = "Aus"; }
      if($smilies_disable == "0")  { $smilies_mode = "An"; } else { $smilies_mode = "Aus"; }
      if($bbcode_disable == "0")   { $bbcode_mode  = "An"; } else { $bbcode_mode  = "Aus"; }

      include("./templates/reply.php"); 

      }


  if ($module == "change")  { 

      $message = str_replace("[PHP]", "[PHP]<?php ", $message);
      $message = str_replace("[/PHP]", "?>[/PHP]", $message);

      $message = str_replace("<", "&lt;", $message);
      $message = str_replace(">", "&gt;", $message);

      $update_signature = "UPDATE $user_tblname SET signature = '$message' WHERE UserID = '$userdata_id'";     

      mysql_query($update_signature) OR die(mysql_error());

      $text01 = "Signatur wurde geändert!";
      $link   = "index.php?do=usercp";

      include("./templates/refresh.php");

  }
