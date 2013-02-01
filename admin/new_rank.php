<?php      

  if (isset($send_rank_data))  {

      $query_name_data = mysql_query("SELECT * from $ranks_tblname WHERE r_rankname = '$rankname'");
      $check_this_name = mysql_num_rows($query_name_data);

      if ($check_this_name == "1")  { 

          $text01   = "Der Rangname ist bereits vergeben!";

          $link     = "index.php?do=admin&sec=ranks&module=new"; 
 
      } 

      else  {

      $query_out_box   = "INSERT into $ranks_tblname (r_rankname, r_group, r_minposts, r_stars)";
      $query_out_box  .= "VALUES ('$rankname', '$group', '$minposts','$stars')";

      $result_out_box  = @mysql_query($query_out_box) OR die(mysql_error());
  
          $text01 = "Benutzerrang erstellt!";

          $link   = "index.php?do=admin&sec=ranks";  

      }  

      include("./templates/refresh.php");

  }

  else  {

       include("./templates/admin/new_rank.php");

  }