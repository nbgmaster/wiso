<?php 

  $member_check = "1"; 

  if ($post_user_admin == "1")  { 

      $member_check = "0";

      $query_ranks = mysql_query("SELECT * from $ranks_tblname WHERE r_group = '1' ORDER by r_minposts");

      while ($row_ranks = mysql_fetch_assoc($query_ranks))  {

              if ($specialrank != "")  {

                  $current_rank  = $specialrank;
                  $current_stars = 6;

              }

              else  {

                      if ($row_ranks[r_minposts] > $postnumbers_user)  { echo""; }

                      else {

                          $current_rank  = $row_ranks[r_rankname];
                          $current_stars = 7;

                      }

              }

       }

  }

  if ($post_user_admin != "1")  { 

      $query_ranks = mysql_query("SELECT * from $ranks_tblname WHERE r_group = '3' ORDER by r_minposts");

      while ($row_ranks = mysql_fetch_assoc($query_ranks))  {

             if ($specialrank != "")  {

                 $current_rank  = $specialrank;
                 $current_stars = 6;

              }

              else  {

                      if ($row_ranks[r_minposts] > $postnumbers_user)  { echo""; }

                      else {

                          $current_rank  = $row_ranks[r_rankname];
                          $current_stars = $row_ranks[r_stars];

                      }

              }

       }

  }


  if ($specialrank == "Moderator")  {

      $current_stars = 6;

  }

  if ($user_id == "1" or $post_user_id == "1")  {

      $current_rank  = "Webmaster & Admin";
      $current_stars = 7;

  }

  if ($current_stars == "1")  { $current_stars = "<img src=\"images/templates/$template/star.gif\">"; }
  if ($current_stars == "2")  { $current_stars = "<img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\">"; }
  if ($current_stars == "3")  { $current_stars = "<img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\">"; }
  if ($current_stars == "4")  { $current_stars = "<img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\">"; }
  if ($current_stars == "5")  { $current_stars = "<img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\">"; }
  if ($current_stars == "6")  { $current_stars = "<img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\">"; }
  if ($current_stars == "7")  { $current_stars = "<img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\">"; }



