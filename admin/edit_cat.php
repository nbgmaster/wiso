<?php 

if ($module == "edit")  {

    if ($c != "")  {

        $query_category = mysql_query("SELECT * from $c_tblname WHERE id = '$c'");

        while ($row_category = mysql_fetch_assoc($query_category))  { 
    
               include('./templates/admin/edit_category.php');

        }

    }

    if ($f != "")  {

        $query_forum = mysql_query("SELECT * from $f_tblname WHERE id = '$f'");

        while ($row_forum = mysql_fetch_assoc($query_forum))  { 
    
               include('./templates/admin/edit_forum.php');

        }

    }

}


if ($module == "delete")  {

    if ($c != "")  {

        $query_category = mysql_query("SELECT * from $c_tblname WHERE id = '$c'");

        while ($row_category = mysql_fetch_assoc($query_category))  { 

               include('./templates/admin/delete_cat.php');

        }

     }

    if ($f != "")  {

        $query_forum = mysql_query("SELECT * from $f_tblname WHERE id = '$f'");

        while ($row_forum = mysql_fetch_assoc($query_forum))  { 

               include('./templates/admin/delete_forum.php');

        }

     }

}

if ($module == "del_c")  {

    if ($_POST[c] != "")  {

        $query_c          = mysql_query("SELECT * from $c_tblname WHERE id = '$c'");

        while ($row_c     = mysql_fetch_assoc($query_c))  { 

               $position  = $row_c["position"];

        }

        $query_del_f      = mysql_query("SELECT * from $f_tblname WHERE cat = '$c'");

        $del_f_numbers = mysql_num_rows($query_del_f);

        if ($del_f_numbers == "0")  {

            $delete_cat = "DELETE FROM $c_tblname WHERE id = '$c'";     

            mysql_query($delete_cat) OR die(mysql_error());  

            $query_c_update   = mysql_query("SELECT * from $c_tblname WHERE position > '$position' ORDER by position");

            while ($row_c_update = mysql_fetch_assoc($query_c_update))  { 

                   $new_position = $row_c_update["position"] - 1;

                   $update_position = "UPDATE $c_tblname SET position = '$new_position' WHERE id = '$row_c_update[id]'";     
                   mysql_query($update_position);

            }

        }

    
        include('./templates/admin/del_c.php');

    }

}


if ($module == "del_f")  {

    if ($_POST[f] != "")  {

        $query_f          = mysql_query("SELECT * from $f_tblname WHERE id = '$f'");

        while ($row_f     = mysql_fetch_assoc($query_f))  { 

               $position  = $row_f["position"];
               $cat       = $row_f["cat"];

        }

        $delete_forum = "DELETE FROM $f_tblname WHERE id = '$f'";     

        mysql_query($delete_forum) OR die(mysql_error());  

        $query_f_update   = mysql_query("SELECT * from $f_tblname WHERE position > '$position' && cat = '$cat' ORDER by position");

        while ($row_f_update = mysql_fetch_assoc($query_f_update))  { 

               $new_position = $row_f_update["position"] - 1;

               $update_position = "UPDATE $f_tblname SET position = '$new_position' WHERE id = '$row_f_update[id]'";     
               mysql_query($update_position);
     
        }

        include('./templates/admin/del_f.php');

    }

}


if ($module == "change")  {

    if ($c != "")  {

        $update_category = "UPDATE $c_tblname SET title = '$_POST[category]' WHERE id = '$c'";     
        mysql_query($update_category);

        $text01 = "Kategorie geändert!";
        $link   = "index.php?do=admin&sec=edit_cat";

        include("./templates/refresh.php");

    }

    if ($f != "")  {

        if ($_POST[actual_cat] != $_POST[f_cat])  {

            $query_put = mysql_query("SELECT * from $f_tblname WHERE cat = '$_POST[f_cat]' ORDER by position");

            while ($row_put = mysql_fetch_assoc($query_put))  {

                   $put_id  = $row_put["position"];

            }

            $new_position = $put_id + 1;

            $query_put2 = mysql_query("SELECT * from $f_tblname WHERE position > '$_POST[actual_position]' && cat = '$_POST[actual_cat]' ORDER by position");

            while ($row_put2 = mysql_fetch_assoc($query_put2))  { 

                   $put_id2 = $row_put2["position"] - 1;

                   $update_position2 = "UPDATE $f_tblname SET position = '$put_id2' WHERE id = '$row_put2[id]'";     
                   mysql_query($update_position2);

            }

            $update_position = "UPDATE $f_tblname SET position = '$new_position', cat = '$_POST[f_cat]' WHERE id = '$f'";     
            mysql_query($update_position);

        }

         $update_forum = "UPDATE $f_tblname SET forum = '$_POST[forum]', description = '$_POST[description]', status = '$_POST[f_status]', f_read = '$_POST[f_read]', f_write = '$_POST[f_write]'  WHERE id = '$f'";     
         mysql_query($update_forum) OR die(mysql_error());

         $update_forum2 = "UPDATE $threads_tblname SET c = '$_POST[f_cat]' WHERE f = '$f'";     
         mysql_query($update_forum2) OR die(mysql_error());


         $delete_mods = "DELETE FROM $moderator_tblname WHERE f_id = '$f'";

         mysql_query($delete_mods) OR die(mysql_error());

         if ($modids != "")  {

         foreach ($modids as $fnumber)  {

                  $query_mods  = "INSERT into $moderator_tblname (user_id, f_id)";
                  $query_mods .= "VALUES ('$fnumber', '$f')";

                  $result_mods = @mysql_query($query_mods);

         }

         }


         $text01 = "Forum geändert!";
         $link   = "index.php?do=admin&sec=edit_cat";

         include("./templates/refresh.php");

    }

}


if ($module != "edit" && $module != "change" && $module != "delete" && $module != "del_c" && $module != "del_f")  {


  if ($module != "")  {

      // Sort Forums Variables

      if ($c == "")  {

          $query_p_forum = mysql_query("SELECT * from $f_tblname WHERE id = '$f'");

          while ($row_p_forum = mysql_fetch_assoc($query_p_forum))  {  

                 $position  = $row_p_forum["position"]; 
                 $cat_id    = $row_p_forum["cat"]; 
          }
  
          $position2 = $position - 1;
          $position3 = $position + 1;


          $query_p_forum2 = mysql_query("SELECT * from $f_tblname WHERE position = '$position2' && cat = '$cat_id'");

          while ($row_p_forum2 = mysql_fetch_assoc($query_p_forum2))  { 

                 $p_forum_id   = $row_p_forum2["id"];

          }

          $query_p_forum3 = mysql_query("SELECT * from $f_tblname WHERE cat = '$cat_id' ORDER by position");

          while ($row_p_forum3  = mysql_fetch_assoc($query_p_forum3))  { 

                 $p_forum_id2   = $row_p_forum3["position"];  

          }

          $query_p_forum4 = mysql_query("SELECT * from $f_tblname WHERE position = '$position3' && cat = '$cat_id'");

          while ($row_p_forum4 = mysql_fetch_assoc($query_p_forum4))  { 

                 $p_forum_id4  = $row_p_forum4["id"];   

          }

      }

      // Sort Categorys Variables

      if ($c != "")  {

          $query_p_cat = mysql_query("SELECT * from $c_tblname WHERE id = '$c'");

          while ($row_p_cat = mysql_fetch_assoc($query_p_cat))  {  

                 $position  = $row_p_cat["position"]; 
          }
  
          $position2 = $position - 1;
          $position3 = $position + 1; 

          $query_p_cat2 = mysql_query("SELECT * from $c_tblname WHERE position = '$position2'");

          while ($row_p_cat2 = mysql_fetch_assoc($query_p_cat2))  { 

                 $p_cat_id   = $row_p_cat2["id"];

          }

          $query_p_cat3 = mysql_query("SELECT * from $c_tblname ORDER by position");

          while ($row_p_cat3  = mysql_fetch_assoc($query_p_cat3))  { 

                 $p_cat_id2   = $row_p_cat3["position"];  

          }

          $query_p_cat4 = mysql_query("SELECT * from $c_tblname WHERE position = '$position3'");

          while ($row_p_cat4 = mysql_fetch_assoc($query_p_cat4))  { 

                 $p_cat_id4  = $row_p_cat4["id"];   

          }

      }

  }


  if ($module == "move_up")  {

      // Sort Forums Up

      if ($c == "")  {

          if ($position != "1")  {
 
              $query_move_up = "UPDATE $f_tblname SET position = '$position2' WHERE id = '$f'";     

              mysql_query($query_move_up) OR die(mysql_error());


              $query_move_up2 = "UPDATE $f_tblname SET position = '$position' WHERE id = '$p_forum_id'";     

              mysql_query($query_move_up2) OR die(mysql_error());

          }

      }

      // Sort Categorys Up

      if ($c != "")  {

          if ($position != "1")  {
 
              $query_move_up = "UPDATE $c_tblname SET position = '$position2' WHERE id = '$c'";     

              mysql_query($query_move_up) OR die(mysql_error());


              $query_move_up2 = "UPDATE $c_tblname SET position = '$position' WHERE id = '$p_cat_id'";     

              mysql_query($query_move_up2) OR die(mysql_error());

          }

      }

  }

  // Start:: Sort

  if ($module == "move_down")  {

      // Sort Forums Down

      if ($c == "")  {

          if ($position != $p_forum_id2)  {

              $query_move_down = "UPDATE $f_tblname SET position = '$position3' WHERE id = '$f'";     

              mysql_query($query_move_down) OR die(mysql_error());


              $query_move_down2 = "UPDATE $f_tblname SET position = '$position' WHERE id = '$p_forum_id4'";     

              mysql_query($query_move_down2) OR die(mysql_error());

          }

      }

      // Sort Categorys Down

      if ($c != "")  {

          if ($position != $p_cat_id2)  {

              $query_move_down = "UPDATE $c_tblname SET position = '$position3' WHERE id = '$c'";     

              mysql_query($query_move_down) OR die(mysql_error());


              $query_move_down2 = "UPDATE $c_tblname SET position = '$position' WHERE id = '$p_cat_id4'";     

              mysql_query($query_move_down2) OR die(mysql_error());

          }

      }

  }


  // Main Frame 

  include("./templates/admin/edit_cat_new.php");

  include("./templates/admin/edit_cat_top.php");

  $query_cats = mysql_query("SELECT * from $c_tblname ORDER by position");

  while ($row_cats = mysql_fetch_assoc($query_cats))  {  

         include("./templates/admin/edit_cat.php");         

         $query_forums = mysql_query("SELECT * from $f_tblname WHERE cat = '$row_cats[id]' ORDER by position");

         while ($row_forums = mysql_fetch_assoc($query_forums))  {  

                include("./templates/admin/edit_forums.php");

         }

  }

  include("./templates/close_table.php");

}
