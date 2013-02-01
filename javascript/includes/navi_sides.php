<?php  

  if ($f != "")                               { $break = "$show_threads"; }

  if ($t != "")                               { $break = "$postsperpage"; }

  if ($do == "members" or $do == "admin")     { $break = "$show_members"; }

  if ($do == "inbox" or $do == "outbox")      { $break = "$show_user_pm"; }


  if ($f != "")                               { $side_link = "?f=$f"; }
 
  if ($do == "members")                       { $side_link = "?do=members&sortby=$sortby&order=$order&letter=$letter"; }

  if ($do == "admin")                         { $side_link = "?do=admin&sec=edit_user&sortby=$sortby&order=$order&letter=$letter"; }

  if ($do == "inbox" or $do == "outbox")      { $side_link = "?do=$do"; }


  if ($highlight == "")  {

      if ($do == "search")                    { $side_link = "?do=search&search_id=$search_id"; }

      if ($t != "")                           { $side_link = "?t=$t"; }

  }

  if ($highlight != "" && $highlightuser == "")  {
 
      if ($t != "")                           { $side_link = "?t=$t&highlight=$highlight"; }
    
  }

  if ($highlight == "" && $highlightuser != "")  {
 
      if ($t != "")                           { $side_link = "?t=$t&highlightuser=$highlightuser"; }
    
  }

  if ($highlight != "" && $highlightuser != "")  {
 
      if ($t != "")                           { $side_link = "?t=$t&highlight=$highlight&highlightuser=$highlightuser"; }
    
  }


  $maxpages_int   = (int) ($check_rows / $break);
 
  $maxpages_float = $check_rows / $break;	

  if ( $maxpages_float > $maxpages_int )  {
		
      $maxpages = (int)(($check_rows / $break)+1);

  }

  else  {	

      $maxpages = (int)(($check_rows / $break));		

  } 


  if ($page > $maxpages) $page = $maxpages;

  $maxpages2 = $maxpages - 1;
  $maxpages3 = $maxpages - 2;


  if ($check_rows > $break)  { 


      $back_page  = $page - 1;
      $back_page2 = $page - 2;
      $back_page3 = $page - 3;
      $back_page4 = $page - 4;

      $next_page  = $page + 1;
      $next_page2 = $page + 2;
      $next_page3 = $page + 3;
      $next_page4 = $page + 4;

      $navi_img = "<img src=\"images/templates/$template/arrow_r.gif\">";


  if ($maxpages == "2")  {

      if ($page == "1")  {     

          $navi_right = "$navi_img <a href=\"$side_link&page=$next_page\">[$next_page]</a>";
        
      }    

      if ($page == "2")  {

          $navi_left = "$navi_img <a href=\"$side_link&page=$back_page\">[$back_page]</a>";
               
      }
  

  }    


  if ($maxpages == "3")  {

     if ($page == "1")  { 

         $navi_right2 = "$navi_img <a href=\"$side_link&page=$next_page2\">[$next_page2]</a>";

     }

     if ($page != "1")  {

         $navi_left = "$navi_img <a href=\"$side_link&page=$back_page\">[$back_page]</a>";
  
     } 

     if ($page == "3")  {

         $navi_left2 = "$navi_img <a href=\"$side_link&page=$back_page2\">[$back_page2]</a>";

         $navi_left  = "$navi_img <a href=\"$side_link&page=$back_page\">[$back_page]</a>";
  
     }

     if ($page != "3")  {

         $navi_right = "$navi_img <a href=\"$side_link&page=$next_page\">[$next_page]</a>";

     }


  }


  if ($maxpages == "4")  {

     if ($page == "1")  {

         $navi_right3 = "$navi_img <a href=\"$side_link&page=$next_page3\">[$next_page3]</a>";
 
     }

     if ($page != "1")  {

         $navi_left = "$navi_img <a href=\"$side_link&page=$back_page\">[$back_page]</a>";
  
     } 

     if ($page < 3)  { 

         $navi_right2 = "$navi_img <a href=\"$side_link&page=$next_page2\">[$next_page2]</a>";

     }

     if ($page == "3")  {

         $navi_left2 = "$navi_img <a href=\"$side_link&page=$back_page2\">[$back_page2]</a>";
  
     }

     if ($page == "4")  {

         $navi_left3 = "$navi_img <a href=\"$side_link&page=$back_page3\">[$back_page3]</a>";

         $navi_left2 = "$navi_img <a href=\"$side_link&page=$back_page2\">[$back_page2]</a>";
  
     }

     if ($page != "4")  {

         $navi_right = "$navi_img <a href=\"$side_link&page=$next_page\">[$next_page]</a>";

     }

  }


  if ($maxpages >= "5")  {  


      $pagey = $page - 2;
  
      if ($page > "5" or $pagey != "1" && $page > 3)  {  

         if ($maxpages > 5)  {

            $navi_first = "$navi_img <a href=\"$side_link&page=1\"><b> erste Seite</b></a>";

         }

      }
          
      if ($page > 1)  { 

          $navi_left = "$navi_img <a href=\"$side_link&page=$back_page\">[$back_page]</a>";
               
          if ($page != "2")  {  
        
             $navi_left2 = "$navi_img <a href=\"$side_link&page=$back_page2\">[$back_page2]</a>";
                    
          }     

          if ($page >= $maxpages2)  {   
             
              $navi_left3 = "$navi_img <a href=\"$side_link&page=$back_page3\">[$back_page3]</a>";
                    
          } 

          if ($page == $maxpages)  {

              $navi_left4 = "$navi_img <a href=\"$side_link&page=$back_page4\">[$back_page4]</a>";

          }

          $navi_actual = "$navi_img $page";

      }

      if ($page < $maxpages)  { 

          $navi_right = "$navi_img <a href=\"$side_link&page=$next_page\">[$next_page]</a>";
                      
          if ($page != "$maxpages2")  {

	      $navi_right2 = "$navi_img <a href=\"$side_link&page=$next_page2\">[$next_page2]</a>";
                           
          }

          if ($page < 3)  {
			  
          $navi_right3 = "$navi_img <a href=\"$side_link&page=$next_page3\">[$next_page3]</a>";
                          
          }

          if($page < 2)  {
			  
             $navi_right4 = "$navi_img <a href=\"$side_link&page=$next_page4\">[$next_page4]</a>";
                          
          }
                         
      }


      if ($page < $maxpages)  { 			  

          if ($page != "$maxpages2" && $page != "$maxpages3")  {

              $pagem = $maxpages - $page;

              $pagex = $page + 2;

              if ($pagem >= 5 or $pagex != $maxpages)  {

                  if ($maxpages > 5)  {

                      $navi_last = "$navi_img <a href=\"$side_link&page=$maxpages\"><b>letzte Seite</b></a>";

                  }

              }

          }
			
      }

    }

  }

  $navi_actual = "$navi_img <b>[$page]</b>";


  $granted_write = "0";

  $check_write   = mysql_query("SELECT * from $f_tblname WHERE id = '$f'");

  while ($row_write = mysql_fetch_assoc($check_write))  { 

         if ($row_write[f_write] == "all")  {

             $granted_write = "1"; 

         }


         if ($row_write[f_write] == "reg")  {

             if ($userdata_id != "")  { 

                 $granted_write = "1";

             }  

         }

         if ($row_write[f_write] == "mod")  {

             $check_mod   = mysql_query("SELECT * from $moderator_tblname WHERE user_id = '$userdata_id' && f_id = '$f'");

             $mod_status  = mysql_num_rows($check_mod);

             if ($mod_status != "" && $mod_status != "0")  {

                 $granted_write = "1";

             }  

         }

         if ($row_write[f_write] == "admin")  {

              if ($userdata_admin == "1")  {

                 $granted_write = "1";

             } 

        }       
      
  }

  $query_polls = mysql_query("SELECT * from $polls_tblname WHERE t = '$t'");
  $check_poll_exist = mysql_num_rows($query_polls);

  if ($check_poll_exist != "1")  {

      include("./templates/navi_sides.php");

  }