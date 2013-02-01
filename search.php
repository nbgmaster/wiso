<?php 

  if ($_POST[searchword] != "" or $_POST[searchmember] != "" or $search_id != "" or $user_id != "")  {

      if ($search_id != "")  {

          $query_this_search  = mysql_query("SELECT * FROM $search_tblname WHERE id = '$search_id'");

          while ($row_this_search = mysql_fetch_assoc($query_this_search))  {  

          $searchword   = $row_this_search["searchword"];
          $searchmember = $row_this_search["searchmember"];
          $boardids     = $row_this_search["boardids"];
          $sortby       = $row_this_search["sortby"];
          $sortorder    = $row_this_search["sortorder"];
          $fullpost     = $row_this_search["fullpost"];
          $showposts    = $row_this_search["showposts"];

          }

      $boardids = explode(",", $boardids);

      } 
   
      $counter = "0";

      if ($searchmember != "")  {

          $query_this_member = mysql_query("SELECT * from $user_tblname WHERE UserName = '$searchmember'");
 
          while ($row_this_member = mysql_fetch_assoc($query_this_member))  {  

                 $memberid = $row_this_member["UserID"];

          }

      }

      if ($search_thread != "")  {

          $boardids[0]  = "$search_thread";
          $sortby       = "lastpost";
          $sortorder    = "down";
          $fullpost     = "1";
          $showposts    = "1";

      }

      if ($user_id != "")  { 

          $memberid = $user_id; 

          $query_this_member = mysql_query("SELECT * from $user_tblname WHERE UserID = '$memberid'");
 
          while ($row_this_member = mysql_fetch_assoc($query_this_member))  {  

                 $searchmember = $row_this_member["UserName"];

          }

          $boardids[0]  = "*";
          $sortby       = "lastpost";
          $sortorder    = "down";
          $fullpost     = "1";
          $showposts    = "1";

      } 

      if ($fullpost == "1")  { $matching = "(message,title)"; }
      if ($fullpost == "0")  { $matching = "(title)"; }

      foreach ($boardids as $fnumber)  {

               if ($fnumber == "*")  {

                   $selection = "all";

               } 

               if (preg_match("/c/i", "$fnumber"))  {

                   $fnumber = str_replace("c", "", $fnumber);

                   $query_new_numbers = mysql_query("SELECT * FROM $f_tblname WHERE cat = '$fnumber'");

                   while ($row_new_numbers = mysql_fetch_assoc($query_new_numbers))  {
                
                   if ($counter == "0")  { 

                       $searchfolder[$counter] = " && f = '$row_new_numbers[id]'"; 

                   }

                   else  {

                        if ($searchmember == "")  {

                            $searchfolder[$counter] = " or MATCH $matching AGAINST ('$searchword' IN BOOLEAN MODE) && f = '$row_new_numbers[id]'"; 
   
                        }

                        if ($searchmember != "" && $searchword == "")  {

                            $searchfolder[$counter] = " or user_id = '$memberid' && f = '$row_new_numbers[id]'"; 
   
                        }

                        if ($searchmember != "" && $searchword != "")  { 

                            $searchfolder[$counter] = " or MATCH $matching AGAINST ('$searchword' IN BOOLEAN MODE) && user_id = '$memberid' && f = '$row_new_numbers[id]'"; 
   
                        }

                   }

                   $counter = $counter + 1;

                   }

               }

               else  {

                   if ($counter == "0")  {

                       $searchfolder[$counter] = " && f = '$fnumber'"; 

                   }

                   else  {

                       if ($fullpost == "1")  {

                           $searchfolder[$counter] = " or MATCH $matching AGAINST ('$searchword' IN BOOLEAN MODE) && f = '$fnumber'";

                       }

                       else  {

                           $searchfolder[$counter] = " or MATCH $matching AGAINST ('$searchword' IN BOOLEAN MODE) && f = '$fnumber'";

                       } 

                   }

               $counter = $counter + 1;

               }

      } 


      $break = "$postsperpage";

      if ($sortby == "lastpost")  { 

          $sortby2 = "time"; 

      }

      if ($sortby == "answers")  { 

          $sortby2 = "time"; 

      }

      if ($sortorder == "up")     { $order = "ASC"; }

      if ($sortorder == "down")   { $order = "DESC"; }


      if ($selection == "all")  {

          if ($searchmember == "")  {

              $query_posts2 = mysql_query("SELECT * FROM $posts_tblname WHERE MATCH $matching AGAINST ('$searchword' IN BOOLEAN MODE) && f != '13' ORDER by $sortby2 $order");

              $query_posts  = mysql_query("SELECT * FROM $posts_tblname WHERE MATCH $matching AGAINST ('$searchword' IN BOOLEAN MODE) && f != '13' ORDER by $sortby2 $order LIMIT ".(($page-1)*$break).",$break");

          }

          if ($searchmember != "" && $searchword == "")  {

              $query_posts2 = mysql_query("SELECT * FROM $posts_tblname WHERE user_id = '$memberid' && f != '13' ORDER by $sortby2 $order");

              $query_posts  = mysql_query("SELECT * FROM $posts_tblname WHERE user_id = '$memberid' && f != '13' ORDER by $sortby2 $order LIMIT ".(($page-1)*$break).",$break");
  
          }

          if ($searchmember != "" && $searchword != "")  { 

              $query_posts2 = mysql_query("SELECT * FROM $posts_tblname WHERE MATCH $matching AGAINST ('$searchword' IN BOOLEAN MODE) && user_id = '$memberid' && f != '13' ORDER by $sortby2 $order");

              $query_posts  = mysql_query("SELECT * FROM $posts_tblname WHERE MATCH $matching AGAINST ('$searchword' IN BOOLEAN MODE) && user_id = '$memberid' && f != '13' ORDER by $sortby2 $order LIMIT ".(($page-1)*$break).",$break");

           }
      
      }

      else  {

          $searchfolders = implode("\n", $searchfolder);

          if ($searchmember == "")  {

              $query_posts2 = mysql_query("SELECT * FROM $posts_tblname WHERE MATCH $matching AGAINST ('$searchword' IN BOOLEAN MODE) $searchfolders ORDER by $sortby2 $order");

              $query_posts  = mysql_query("SELECT * FROM $posts_tblname WHERE MATCH $matching AGAINST ('$searchword' IN BOOLEAN MODE) $searchfolders ORDER by $sortby2 $order LIMIT ".(($page-1)*$break).",$break");

          }

          if ($searchmember != "" && $searchword == "")  { 

              $query_posts2 = mysql_query("SELECT * FROM $posts_tblname WHERE user_id = '$memberid' $searchfolders ORDER by $sortby2 $order");

              $query_posts  = mysql_query("SELECT * FROM $posts_tblname WHERE user_id = '$memberid' $searchfolders ORDER by $sortby2 $order LIMIT ".(($page-1)*$break).",$break");

          }

          if ($searchmember != "" && $searchword != "")  { 

              $query_posts2 = mysql_query("SELECT * FROM $posts_tblname WHERE MATCH $matching AGAINST ('$searchword' IN BOOLEAN MODE) && user_id = '$memberid' $searchfolders ORDER by $sortby2 $order");

              $query_posts  = mysql_query("SELECT * FROM $posts_tblname WHERE MATCH $matching AGAINST ('$searchword' IN BOOLEAN MODE) && user_id = '$memberid' $searchfolders ORDER by $sortby2 $order LIMIT ".(($page-1)*$break).",$break");

           }

      }

      $searchnumbers = mysql_num_rows($query_posts);

      if ($searchnumbers == "0")  { 

          $text01 = "Ihre Auswahl enthält keine Treffer.";

          $refresh_time = "2";

          $link   = "index.php?do=search";

          include("templates/refresh.php");
 
      }

      else  {

          $boardidnumbers = count($boardids);

          $countthis = "1";

          foreach ($boardids as $boardids2)  { 

                   if ($countthis == "1")  {

                       $boardids3 = "$boardids2";

                   }

                   else  {

                       $boardids3 = "$boardids3,$boardids2"; 

                   }
 
          $countthis = $countthis + 1;

          }
  

          if ($search_id == "")  {

              $query_search  = "INSERT into $search_tblname (searchword, searchmember, boardids, sortby, sortorder, fullpost, showposts)";
              $query_search .= "VALUES ('$searchword', '$searchmember', '$boardids3', '$sortby','$sortorder', '$fullpost', '$showposts')";

              $result_search = @mysql_query($query_search);

              $query_searchid  = mysql_query("SELECT * FROM $search_tblname ORDER by id");

              while ($row_searchid = mysql_fetch_assoc($query_searchid))  {  

                     $search_id = $row_searchid["id"];

              }

          }

          $check_rows = mysql_num_rows($query_posts2);

          include("templates/search_top.php");

          if ($showposts == "1")  {

              include("includes/navi_sides.php");

              include("includes/show_posts.php");

          }

          if ($showposts == "0")  {

              $searchword     = str_replace(" ", "+", $searchword);
              $highlight      = "$searchword";

              $highlightuser  = $memberid;

              include("show_threads.php"); 

          }

      } 

  }

  else  {

      include("templates/search.php");

  }