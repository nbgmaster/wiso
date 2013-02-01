<?php  

  if ($t != "" or $do == "edit")  {

      if ($do == "edit")  {

          $query_navi2 = mysql_query("SELECT * from $posts_tblname WHERE id = '$p_id'");
 
          while ($row_navi2 = mysql_fetch_assoc($query_navi2))  {
                      
                 $f = $row_navi2["f"];
                 $t = $row_navi2["t"];
                     
          }

      }

      $query_navi = mysql_query("SELECT * from $threads_tblname WHERE id = '$t'");
 
      while ($row_navi = mysql_fetch_assoc($query_navi))  {
                      
             $f           = $row_navi["f"];
             $threadname  = $row_navi["threadname"];
                    
      }

  }

  $query_navi3 = mysql_query("SELECT * from $f_tblname WHERE id = '$f'");

  while ($row_navi3 = mysql_fetch_assoc($query_navi3))  {
                     
         $forum = $row_navi3["forum"];
                     
  }

  if ($f != "" && $t == "")  {

      if ($do == "")  {

          $query_topicnumbers = mysql_query("SELECT * from $threads_tblname WHERE f = '$f'");

          $topicnumbers = mysql_num_rows($query_topicnumbers);

          $text01 = "$topicnumbers ";

          if ($topicnumbers == "1")  { 

              $text02 = "Thema"; 

          } 

          else  {

              $text02 = "Themen";

          }

          $text03 = " vorhanden";
 
      }

      if ($do == "newtopic" or $do == "post" && $preview != "")  { 
 
          $text01 = "Neues Thema erstellen";
     
      }

  }

  if ($t != "" or $do == "edit")  {
       
      $text01 = "Thema: <a class=\"catbg\" href=\"index.php?t=$t\"><b>$threadname</b></a>";

  }

  if ($do != "showNewPosts")  {

      include("./templates/navi_links.php");

  }

  else  {

      include("./templates/navi_links2.php");

  }
