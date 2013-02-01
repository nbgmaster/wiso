<?php  

  if ($module == "modify")  {

      if (!isset($send_del_data) && $_POST[del_tpl] != "")  {

          $text01 ="Dieses Template wirklich löschen?";
          $link   = "index.php?do=admin&sec=templates&module=edit"; 

         include("templates/delete.php");

      }

      else  {

          if ($send_del_data == "Ja")  { 

              $query_template_data = mysql_query("SELECT * from $templates_tblname");

              $check_query         = mysql_num_rows($query_template_data);

              if ($check_query != "1")  { 

                  $delete_template = "DELETE FROM $templates_tblname WHERE id = '$tpl'";     

                  mysql_query($delete_template) OR die(mysql_error());  
   
                  $text01 = "Template gelöscht!";
 
              }

              else  {

                  $text01 = "Es ist nur noch ein Template vorhanden! Dieses kann nicht gelöscht werden!";

              }

              $link = "index.php?do=admin&sec=templates&module=edit";

              include("./templates/refresh.php");

          } 

     }

     if ($_POST[del_tpl] == "" && $send_del_data == "")  {

         if ($edit_tpl_name != $current_tpl_name)  {

             $query_tpl_data = mysql_query("SELECT * from $templates_tblname WHERE tpl_name ='$edit_tpl_name'");

             $check_tpl_data = mysql_num_rows($query_tpl_data); 

             if ($check_tpl_data == "1")  {

             $text02 = "<br><br>Templatename nicht geändert! (bereits vorhanden)";

             }

             else  { 

                 $sql_template0 = "UPDATE $templates_tblname SET tpl_name = '$edit_tpl_name' WHERE tpl_name = '$template_name'";     
                 mysql_query($sql_template0) OR die(mysql_error());
             }

         }

         $sql_template1 = "UPDATE $templates_tblname SET width = '$edit_width', fontsize_small = '$edit_fontsize_small', fontsize = '$edit_fontsize', fontsize_big = '$edit_fontsize_big', fontsize_title = '$edit_fontsize_title', fontsize_header = '$edit_fontsize_header', fontsize_cat = '$edit_fontsize_cat', fontcolor = '$edit_fontcolor' WHERE tpl_name = '$template_name'";     
   
         $sql_template2 = "UPDATE $templates_tblname SET fontfamily = '$edit_fontfamily', bgcolor = '$edit_bgcolor', bg_tablein = '$edit_bg_tablein', bordercolor = '$edit_bordercolor' WHERE tpl_name = '$template_name'";    

         $sql_template3 = "UPDATE $templates_tblname SET fontcolor_header = '$edit_fontcolor_header', fontcolor_header_hover = '$edit_fontcolor_header_hover', fontcolor_cat = '$edit_fontcolor_cat', fontcolor_cat_hover = '$edit_fontcolor_cat_hover', cellbg_fontcolor = '$edit_cellbg_fontcolor', cell_bg01 = '$edit_cell_bg01', cell_bg02 = '$edit_cell_bg02' WHERE tpl_name = '$template_name'";     
 
         $sql_template4 = "UPDATE $templates_tblname SET link_color = '$edit_link_color', title_hovercolor = '$edit_title_hovercolor', link_hovercolor = '$edit_link_hovercolor', bgcolor_mouseover = '$edit_bgcolor_mouseover' WHERE tpl_name = '$template_name'";     

         $sql_template5 = "UPDATE $templates_tblname SET fontsize_buttons = '$edit_fontsize_buttons', fontcolor_buttons = '$edit_fontcolor_buttons', bgcolor_buttons = '$edit_bgcolor_buttons' WHERE tpl_name = '$template_name'";     

         $sql_template6 = "UPDATE $templates_tblname SET fontcolor_textarea = '$edit_fontcolor_textarea', bgcolor_textarea = '$edit_bgcolor_textarea', link_decoration = '$edit_link_decoration', hover_decoration = '$edit_hover_decoration' WHERE tpl_name = '$template_name'";     

         $sql_template7 = "UPDATE $templates_tblname SET fontcolor_title = '$edit_fontcolor_title' WHERE tpl_name = '$template_name'";     

         $sql_template8 = "UPDATE $templates_tblname SET img_catbg = '$edit_img_catbg', img_cellbg = '$edit_img_cellbg', img_headerbg = '$edit_img_headerbg' WHERE tpl_name = '$template_name'";     

         mysql_query($sql_template1) OR die(mysql_error());
         mysql_query($sql_template2) OR die(mysql_error());
         mysql_query($sql_template3) OR die(mysql_error());
         mysql_query($sql_template4) OR die(mysql_error());
         mysql_query($sql_template5) OR die(mysql_error());
         mysql_query($sql_template6) OR die(mysql_error());
         mysql_query($sql_template7) OR die(mysql_error());
         mysql_query($sql_template8) OR die(mysql_error());

         $text01 = "Template geändert!";

         $link = "index.php?do=admin&sec=templates&module=edit";

         include("./templates/refresh.php");

      }

  }

  if ($module == "edit")  {

      $query_template = mysql_query("SELECT * from $templates_tblname");

      if ($template_name == "")  {

          $template_name = "$template";

      }

      include("./templates/admin/edit_template2.php");

      $query_templatenumbers = mysql_query("SELECT * from $templates_tblname");
       
      $templatenumbers       = mysql_num_rows($query_templatenumbers);

      if ($templatenumbers == "1")  { 

          $delete_tpl = "false";

      }

      else  {

          $delete_tpl = "true"; 

      }

      $query_template_data = mysql_query("SELECT * from $templates_tblname WHERE tpl_name = '$template_name'");

      while ($row_template_data = mysql_fetch_assoc($query_template_data))  { 

             if ($percent_width == "1")  {

$width4 = "<script type=\"text/javascript\">
     
          document.write (''+banner_width+'');

          </script>";

             }

             else  {

             $width4 = $row_template_data["width"] - 2;

             }

             include("./templates/admin/edit_template.php"); 

      }

  }