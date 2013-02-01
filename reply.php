<?php 

  function byte_umrechner($bytes) {
 
      $size  = number_format(($bytes / pow(2,20)), 2);
      $size .= " MB";
      return $size;

  }

  if($html_disable == "0")     { $html_mode    = "An"; } else { $html_mode    = "Aus"; }
  if($smilies_disable == "0")  { $smilies_mode = "An"; } else { $smilies_mode = "Aus"; }
  if($bbcode_disable == "0")   { $bbcode_mode  = "An"; } else { $bbcode_mode  = "Aus"; }

  $form_link = "index.php?do=post";
       
  if ($do == "edit" && isset($send_postdata) == "")  {

      $form_link = "index.php?do=edit&p_id=$p_id";

      if ($userdata_id == $p_userid or $userdata_admin == "1" or $mod_user_status == "1")  { 

          $query_edit_post = mysql_query("SELECT * from $posts_tblname WHERE id = '$p_id'");

          while ($row_edit_post = mysql_fetch_assoc($query_edit_post))  { 

                 $query_first_post = mysql_query("SELECT * from $posts_tblname WHERE t = '$row_edit_post[t]' ORDER by id DESC");

                 while ($row_first_post = mysql_fetch_assoc($query_first_post))  { 

                        $first_post = $row_first_post["id"];

                 } 

                 if ($first_post == $p_id)  {

                     $title_required = "1";

                 }

                 $newtitle      = $row_edit_post["title"];
                 $edit_message  = $row_edit_post["message"];
                 $p_userid      = $row_edit_post["user_id"];
                 $attach        = $row_edit_post["attachment"];

          }


  //$edit_message = html_entity_decode($edit_message);
 // $newtitle     = html_entity_decode($newtitle);

              include("includes/navi_links.php"); 
              include("templates/reply.php");

      }
     
      else  { 

          include("templates/no_permission.php"); 

      }

  }

  if ($do == "edit" && isset($send_postdata) != "")  {

      include("post.php");  

  }  

  $granted_write = "0"; 


  $query_this_f = mysql_query("SELECT * from $threads_tblname WHERE id = '$t' ORDER by id");
        
  while ($row_this_f = mysql_fetch_assoc($query_this_f))  { 

         $f = "$row_this_f[f]";

  }


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

  if ($do == "reply" && $granted_write == "1" or $do == "newpm")  {

      if ($do != "newpm")  {

          include('includes/navi_links.php'); 

      }

      if ($q_id != "")  {

        $query_quote = mysql_query("SELECT * from $posts_tblname WHERE id = '$q_id'");

        while ($row_quote = mysql_fetch_assoc($query_quote))  {

               $quote_msg = $row_quote["message"];

$str = $quote_msg;

$str      = html_entity_decode($str);

$quote_msg = $str;
         
               $query_quote_user = mysql_query("SELECT * from $user_tblname WHERE UserID = '$row_quote[user_id]'");

               while ($row_quote_user = mysql_fetch_assoc($query_quote_user))  {

                      $quote_username = $row_quote_user["UserName"];

               }

 
               $quote1 = "[QUOTE=$quote_username]"; 
  
               $quote2 = "[/QUOTE]"; 

        }

     }

     if ($do == "newpm" && $user_id == "")  {

         include("templates/reply_pm.php"); 

     }

     if ($do == "reply" && $granted_write == "1" or $do == "newpm" && $user_id != "")  {

         include("templates/reply.php"); 

     }


  }

  if ($do == "newtopic" && $granted_write == "1")  {

     include('includes/navi_links.php'); 

     include("templates/reply.php");

  }

  if ($do == "reply" && $granted_write == "1")  {

     include("includes/row_last_posts.php");

  }



