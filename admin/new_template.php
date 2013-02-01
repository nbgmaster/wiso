<?php      

  if (isset($new_tpl))  {

      $query_template  = "INSERT into $templates_tblname (tpl_name, width, fontfamily, bordercolor, img_catbg, img_cellbg, img_headerbg, bgcolor, bg_tablein, cell_bg01, cell_bg02, bgcolor_mouseover, bgcolor_buttons, fontsize_small, fontsize, fontsize_big, fontsize_header, fontsize_title, fontsize_cat, fontsize_buttons, fontcolor, cellbg_fontcolor, fontcolor_buttons, fontcolor_header, fontcolor_header_hover, fontcolor_cat, fontcolor_cat_hover, link_color, link_hovercolor, fontcolor_title, title_hovercolor, link_decoration, hover_decoration)";

      $query_template .= "VALUES ('$new_name', '$new_width', '$new_fontfamily', '$new_bordercolor', '$new_img_catbg', '$new_img_cellbg', '$new_img_headerbg', '$new_bgcolor', '$new_bg_tablein', '$new_cell_bg01', '$new_cell_bg02', '$new_bgcolor_mouseover', '$new_bgcolor_buttons', '$new_fontsize_small', '$new_fontsize', '$new_fontsize_big', '$new_fontsize_header', '$new_fontsize_title', '$new_fontsize_cat', '$new_fontsize_buttons', '$new_fontcolor', '$new_cellbg_fontcolor', '$new_fontcolor_buttons', '$new_fontcolor_header', '$new_fontcolor_header_hover', '$new_fontcolor_cat', '$new_fontcolor_cat_hover', '$new_link_color', '$new_link_hovercolor', '$new_fontcolor_title', '$new_title_hovercolor', '$new_link_decoration', '$new_hover_decoration')";

      $result_template = @mysql_query($query_template) OR die(mysql_error());


      $text01 = "Template erstellt!";
      $link   = "index.php?do=admin&sec=templates";  

      include("./templates/refresh.php");

  }

  else  {

       include("./templates/admin/new_template.php");

  }