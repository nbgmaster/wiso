<?php  

  if (isset($members_data)) {  header ("Location:index.php?do=members&sec=searchresults"); }

  if ($sec != "searchresults")  {

  // Load:: Variables Data

  if ($sortby == "")  { 

      $sortby = "postnumbers"; 
      $order  = "down";
      $letter = "all";

  }

  if ($sortby == "username")  { 

      $sortby2 = "UserName";

  }

  if ($sortby == "userdate")  { 

      $sortby2 = "UserRegdate";

  }

  if ($sortby == "online")  { 

      $sortby2 = "UserName";

  }

  if ($order == "up")  { 

      $order2 = "ASC";

  }

  if ($order == "down")  { 

      $order2 = "DESC";

  }


  // Include:: Header

  $query_newest_user = mysql_query("SELECT UserID, UserName, UserRegdate from $user_tblname ORDER by UserRegdate DESC LIMIT 1");

  while ($row_newest_user = mysql_fetch_assoc($query_newest_user))  { 

         $newest_user_name    = $row_newest_user["UserName"];
         $newest_user_regdate = $row_newest_user["UserRegdate"];
         $newest_user_id      = $row_newest_user["UserID"]; 

  }

  $newest_user_regdate    =  date("d.m.Y",$newest_user_regdate);

  include("templates/order_members.php");

  }


  if ($sec == "searchresults")  {

      if ($_POST[uname] != "")  { $searchoptions .= " && UserName = '$_POST[uname]'";  }
      if ($_POST[firstname] != "")  { $searchoptions .= " && firstname = '$_POST[firstname]'";  }
      if ($_POST[lastname] != "")  { $searchoptions .= " && lastname = '$_POST[lastname]'";  }
      if ($_POST[gender] != "")  { $searchoptions .= " && gender = '$_POST[gender]'";  }
      if ($_POST[birthyear] != "")  { $searchoptions .= " && birthyear = '$_POST[birthyear]'";  }

      if ($_POST[semester] != "")  { $searchoptions .= " && semester = '$_POST[semester]' && wisostudent = '1'";  }
      if ($_POST[study] != "")  { $searchoptions .= " && study = '$_POST[study]' && wisostudent = '1'";  }

      if ($_POST[studivz] == "1")  { $searchoptions .= " && studivz != ''";  }
      
      $searchoptions .= " && UserActive = '1'";

      if (substr($searchoptions, 0, 3) == " &&")  { 

          $searchoptions = substr($searchoptions, 4 , strlen($searchoptions)-2); 

      }

      if ($searchoptions == "")  {

          $query_members2 = mysql_query("SELECT * from $user_tblname WHERE UserActive = '1'");

      }

      else  {

          $query_members2 = mysql_query("SELECT * from $user_tblname WHERE $searchoptions ORDER by UserName");

      }

      $_SESSION["searchoptions"] = $searchoptions;

      $check_rows = mysql_num_rows($query_members2); 

      include("templates/membersearch_navi.php");

  }


  // Check Entrys per side

  if ($letter == "all")  {   

      $query_members2 = mysql_query("SELECT * from $user_tblname WHERE UserActive = '1'");

  }

  else  {

      if ($letter == "#")  {

          $query_members2 = mysql_query("SELECT last_online_time, hide_user, UserID from $user_tblname WHERE UserName REGEXP '^[*:.~1234567890_-]' && UserActive = '1'");

      }

      else  {

          $query_members2 = mysql_query("SELECT last_online_time, hide_user, UserID from $user_tblname WHERE UserName LIKE '$letter%' && UserActive = '1'");

      }

  }

  
  if ($sortby != "online" && $sec != "searchresults")  { 

      $check_rows = mysql_num_rows($query_members2);

  }

  if ($sortby == "online")  {

      $check_rows = "0";
 
      while ($row_members2 = mysql_fetch_assoc($query_members2))  {
 
             $check_online_time = $timestamp - $row_members2["last_online_time"]; 

             if ($check_online_time < $online_time && $row_members2[hide_user] == "0")  {  

                 $update_online = "UPDATE $user_tblname SET online = '1' WHERE UserID = '$row_members2[UserID]'";     
                 mysql_query($update_online);

                 $check_rows = $check_rows + 1; 

             } 

             else  {

             $update_online = "UPDATE $user_tblname SET online = '0' WHERE UserID = '$row_members2[UserID]'";     
             mysql_query($update_online);

             }

      }

  }

  // Include:: Navigation Sides

  include("includes/navi_sides.php");


  if ($sortby == "username" or $sortby == "userdate")  {

      if ($letter == "all")  { 

          $query_members = mysql_query("SELECT UserID, UserName, UserMail, studivz, UserRegdate, postnumbers, formmailer from $user_tblname WHERE UserActive = '1' ORDER by $sortby2 $order2 LIMIT ".(($page-1)*$break).",$break");

      }

      else  {

          if ($letter == "#")  {

              $query_members = mysql_query("SELECT UserID, UserName, UserMail, studivz, UserRegdate, postnumbers, formmailer from $user_tblname WHERE UserName REGEXP '^[*:.~1234567890_-]' && UserActive = '1' ORDER by $sortby2 $order2 LIMIT ".(($page-1)*$break).",$break");

          }
  
          else  {

             $query_members = mysql_query("SELECT * from $user_tblname WHERE UserName LIKE '$letter%' && UserActive = '1' ORDER by $sortby2 $order2 LIMIT ".(($page-1)*$break).",$break");
 
          }

      }
 
  }


  if ($sortby == "postnumbers")  {
    
      if ($letter == "all")  {

          $query_members = mysql_query("SELECT UserID, UserName, UserMail, studivz, UserRegdate, postnumbers, formmailer from $user_tblname WHERE UserActive = '1' ORDER by postnumbers $order2 LIMIT ".(($page-1)*$break).",$break");

      }
 
      else  {

          if ($letter == "#")  {

              $query_members = mysql_query("SELECT UserID, UserName, UserMail, studivz, UserRegdate, postnumbers, formmailer from $user_tblname WHERE UserName REGEXP '^[*:.~1234567890_-]' && UserActive = '1' ORDER by postnumbers $order2 LIMIT ".(($page-1)*$break).",$break");

          }

          else  {

              $query_members = mysql_query("SELECT UserID, UserName, UserMail, studivz, UserRegdate, postnumbers, formmailer from $user_tblname WHERE UserName LIKE '$letter%' && UserActive = '1' ORDER by postnumbers $order2 LIMIT ".(($page-1)*$break).",$break");

          }

      }

  }


  if ($sortby == "online")  {

      if ($check_rows != "0")  {

          if ($letter == "all")  {

              $query_members = mysql_query("SELECT UserID, UserName, UserMail, studivz, UserRegdate, postnumbers, formmailer from $user_tblname WHERE online = '1' && UserActive = '1' ORDER by $sortby2 $order2 LIMIT ".(($page-1)*$break).",$break");

          }

          else  {

              if ($letter == "#")  {

                  $query_members = mysql_query("SELECT UserID, UserName, UserMail, studivz, UserRegdate, postnumbers, formmailer from $user_tblname WHERE online = '1' && UserActive = '1' && UserName REGEXP '^[*:.~1234567890_-]' ORDER by $sortby2 $order2 LIMIT ".(($page-1)*$break).",$break");

              }

              else  {

                  $query_members = mysql_query("SELECT UserID, UserName, UserMail, studivz, UserRegdate, postnumbers, formmailer from $user_tblname WHERE online = '1' && UserActive = '1' && UserName LIKE '$letter%' ORDER by $sortby2 $order2 LIMIT ".(($page-1)*$break).",$break");
 
              }

          }

      }

  }


  if ($sec == "searchresults")  {  

      if ($searchoptions == "")  {

          $query_members = mysql_query("SELECT * from $user_tblname WHERE UserActive = '1' ORDER by UserName LIMIT ".(($page-1)*$break).",$break");

      }

      else  {

          $query_members = mysql_query("SELECT * from $user_tblname WHERE $searchoptions ORDER by UserName LIMIT ".(($page-1)*$break).",$break");

      }

  }

  // Start:: Content


  if ($check_rows != "0")  { 

     include("templates/members_top.php");

     while ($row_members = mysql_fetch_assoc($query_members))  { 


            $imgemail  = "img1_$row_members[UserID]";
            $imgpn     = "img2_$row_members[UserID]";
            $imgsearch = "img3_$row_members[UserID]";
            $imgstudi  = "img4_$row_members[UserID]";
            $imghomie  = "img5_$row_members[UserID]";


            if ($row_members["formmailer"] == "1")  { 

                $formmailer  = "<a href=\"index.php?do=email&user_id=".$row_members["UserID"]."\" onmouseover=\"$imgemail.src='images/templates/$template/email_hover.gif';\" onmouseout=\"$imgemail.src='images/templates/$template/email.gif';\">";
                $formmailer2 = "</a>";
        
            }

            else  {

                $formmailer = ""; $formmailer2 = "";

            }

            if ($row_members["UserID"] != $userdata_id)  { 

                $addbuddylink   = "<a href=\"index.php?do=addbuddy&user_id=".$row_members["UserID"]."\" onmouseover=\"$imghomie.src='images/templates/$template/buddy_hover.gif';\" onmouseout=\"$imghomie.src='images/templates/$template/buddy.gif';\">";
                $addbuddylink22 = "</a>";
        
            }

            else  {

                $addbuddylink   = "";
                $addbuddylink22 = "";

            }

            $member_regdate = date("d.m.Y",$row_members["UserRegdate"]);

            include("templates/members.php");      

     }
 
  }

  // No Entrys

  else  { 

      include("templates/members_none.php");
 
  }

  
  if ($check_rows != "0")  { 

      include("templates/close_table.php");

  }