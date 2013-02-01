<?php  

if ($browser == "Firefox3")  { $style3 = "style=padding-bottom:2px;"; }

  if ($f != "" or $do == "showNewPosts")      { 
  
       if ($do == "showNewPosts")  { 
       
        //   $break = "200";
           
       }
      
       else  { 
      
           $break = "$show_threads";
           
      }
       
  }

  if ($t != "")                               { $break = "$postsperpage"; }

  if ($do == "members" or $do == "admin")     { $break = "$show_members"; }


  if ($do == "database" or $do == "market")   { $break = "10"; }

  if ($do == "showCredits")      { $break = "10"; }


  if ($do == "inbox" or $do == "outbox")      { $break = "$show_user_pm"; }



  if ($do == "showNewPosts")                  { $side_link = "?do=showNewPosts"; }

  if ($do == "showCredits")      { $side_link = "?do=showCredits&user_id=$user_id&show=$show"; }

  if ($f != "")                               { $side_link = "?f=$f"; }

  if ($do == "database")                      { 

      if ($sec == "new")  {

          $side_link = "?do=database&sec=new"; 

      }

      else  {

          $side_link = "?do=database&category=$category&lecture=$lecture"; 

      }

  }


 if ($do == "market")                      { 

      if ($sec == "new")  {

          $side_link = "?do=market&sec=new"; 

      }

      else  {

          $side_link = "?do=market&category=$category&lecture=$lecture"; 

      }

  }


 
  if ($do == "members")                       { 

      if ($sec != "searchresults")  $side_link = "?do=members&sortby=$sortby&order=$order&letter=$letter";
      else     $side_link = "?do=members&sec=searchresults";
  }

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



  if ($check_rows <= $break && $do == "members" && $sec == "searchresults")  { echo"<br>"; }



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


  if ($maxpages == "2")  {

      if ($page == "1")  {    

          

          $navi_img = "<td class=\"catbg\" $style3 width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$next_page'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";
 
          $navi_right = "$navi_img $next_page</td>";
        
      }    

      if ($page == "2")  {

          if ($page == $back_page)  {  $hoverT = "Sidesactive"; } else  {  $hoverT = "catbg"; }

          $navi_img = "<td class=\"catbg\"  $style3 width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$back_page'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";
 
          $navi_left = "$navi_img $back_page</td>";
               
      }
  

  }    


  if ($maxpages == "3")  {

     if ($page == "1")  { 

         if ($page == $next_page2)  {  $hoverT = "Sidesactive"; } else  {  $hoverT = "catbg"; }

         $navi_img = "<td class=\"catbg\" $style3  width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$next_page2'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";
 
         $navi_right2 = "$navi_img $next_page2</td>";

     }

     if ($page != "1")  {

         if ($page == $back_page)  {  $hoverT = "Sidesactive"; } else  {  $hoverT = "catbg"; }

         $navi_img = "<td class=\"catbg\" $style3 width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$back_page'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";
 
         $navi_left = "$navi_img $back_page</td>";
  
     } 

     if ($page == "3")  {

         if ($page == $back_page2)  {  $hoverT = "Sidesactive"; } else  {  $hoverT = "catbg"; }

         $navi_img = "<td class=\"catbg\" $style3  width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$back_page2'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";
 
         $navi_left2 = "$navi_img $back_page2</td>";


         if ($page == $back_page)  {  $hoverT = "Sidesactive"; } else  {  $hoverT = "catbg"; }

         $navi_img = "<td class=\"catbg\" $style3  width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$back_page'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";
 
         $navi_left  = "$navi_img $back_page</td>";
  
     }

     if ($page != "3")  {

         

         $navi_img = "<td class=\"catbg\"  $style3 width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$next_page'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";
 
         $navi_right = "$navi_img $next_page</td>";

     }


  }


  if ($maxpages == "4")  {

     if ($page == "1")  {

         $navi_img = "<td class=\"catbg\" $style3  width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$next_page3'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";
 
         $navi_right3 = "$navi_img $next_page3</td>";
 
     }

     if ($page != "1")  {

         $navi_img = "<td class=\"catbg\"  $style3 width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$back_page'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";
 
         $navi_left = "$navi_img $back_page</td>";
  
     } 

     if ($page < 3)  { 

         $navi_img = "<td class=\"catbg\"  $style3 width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$next_page2'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";
 
         $navi_right2 = "$navi_img $next_page2</td>";

     }

     if ($page == "3")  {

         $navi_img = "<td class=\"catbg\"  $style3 width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$back_page2'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";
 
         $navi_left2 = "$navi_img $back_page2</td>";
  
     }

     if ($page == "4")  {

         $navi_img = "<td class=\"catbg\"  $style3 width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$back_page3'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";
 
         $navi_left3 = "$navi_img $back_page3</td>";


         $navi_img = "<td class=\"catbg\"  $style3 width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$back_page2'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";
 
         $navi_left2 = "$navi_img $back_page2</td>";
  
     }

     if ($page != "4")  {

         

         $navi_img = "<td class=\"catbg\"  $style3 width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$next_page'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";
 
         $navi_right = "$navi_img $next_page</td>";

     }

  }


  if ($maxpages >= "5")  {  


      $pagey = $page - 2;
  
      if ($page > "5" or $pagey != "1" && $page > 3)  {  

         if ($maxpages > 5)  {    

             $navi_img = "<td class=\"catbg\"  $style3 width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=1'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";
 
             $navi_first = "$navi_img <b>&laquo;</b></td>";

         }

      }
          
      if ($page > 1)  {   

          $navi_img = "<td class=\"catbg\"  $style3 width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$back_page'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";
 
          $navi_left = "$navi_img $back_page</td>";
               
          if ($page != "2")  {    

              $navi_img = "<td class=\"catbg\"  $style3 width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$back_page2'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";
         
              $navi_left2 = "$navi_img $back_page2</td>";
                    
          }     

          if ($page >= $maxpages2)  {      

              $navi_img = "<td class=\"catbg\"  $style3 width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$back_page3'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";
              
              $navi_left3 = "$navi_img $back_page3</td>";
                    
          } 

          if ($page == $maxpages)  {    

              $navi_img = "<td class=\"catbg\" $style3  width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$back_page4'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";
  
              $navi_left4 = "$navi_img $back_page4</td>";

          }

          $navi_img = "<td class=\"Sidesactive\"  $style3 width=\"24\" align=\"center\" onclick=\"location.href='#'\">";

          $navi_actual = "$navi_img $page</td>";

      }

      if ($page < $maxpages)  { 

          

          $navi_img = "<td class=\"catbg\"  $style3 width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$next_page'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";

          $navi_right = "$navi_img $next_page</td>";
                      
          if ($page != "$maxpages2")  {

              $navi_img = "<td class=\"catbg\"  $style3 width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$next_page2'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";

	      $navi_right2 = "$navi_img $next_page2</td>";
                           
          }

          if ($page < 3)  {

          $navi_img = "<td class=\"catbg\"  $style3 width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$next_page3'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";
			  
          $navi_right3 = "$navi_img $next_page3</td>";
                          
          }

          if($page < 2)  {

             $navi_img = "<td class=\"catbg\"  $style3 width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$next_page4'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";
			  
             $navi_right4 = "$navi_img $next_page4</td>";
                          
          }
                         
      }


      if ($page < $maxpages)  { 			  

          if ($page != "$maxpages2" && $page != "$maxpages3")  {

              $pagem = $maxpages - $page;

              $pagex = $page + 2;

              if ($pagem >= 5 or $pagex != $maxpages)  {

                  if ($maxpages > 5)  {

                      $navi_img = "<td class=\"catbg\"  $style3 width=\"24\" align=\"center\" onclick=\"location.href='$side_link&page=$maxpages'\" onmouseover=\"this.className='mouseoverSides';\" onmouseout=\"this.className='mouseoutSides';\">";

                      $navi_last = "$navi_img <b>&raquo;</b></td>";

                  }

              }

          }
			
      }

    }

  }

  $navi_img = "<td class=\"Sidesactive\"  $style3 width=\"24\" align=\"center\" onclick=\"location.href='#'\">";

  $navi_actual = "$navi_img <b>$page</b></td>"; 


  if ($check_poll_exist != "1")  {
  
      include("./templates/navi_sides.php");
      
  }

   if ($check_rows <= $break && $do == "database")  { echo"<br>"; }
   if ($check_rows <= $break && $do == "market")  { echo"<br>"; }
   if ($check_rows <= $break && $do == "members" && $sec != "searchresults")  { echo"<br>"; }
