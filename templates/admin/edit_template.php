<script language="JavaScript" type="text/javascript" src="./javascript/form_tpl.js"></script>


<form action="index.php?do=admin&sec=templates&module=modify&tpl=<?php  echo"$tpl_id"; ?>" name="tplform" onsubmit="return checkForm(this)"  method="post">


<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="cellbg" align="center">

    Allgemein 

    </td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="tableb" width="50%">Verzeichnis, in dem alle Template Bilder liegen müssen</td>

    <td class="tablea" width="50%"><?php  echo"http://$board_domain$board_direction"; ?>images/templates/<?php  echo"$template_name"; ?></td>

  </tr>

  <tr>

    <td class="tableb">Banner URL</td>

    <td class="tablea"><?php  echo"http://$board_domain$board_direction"; ?>images/templates/<?php  echo"$template_name"; ?>/banner.jpg</td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="tablea" align="center">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> 

    Für eine optimale Forumsansicht mit Banner sollte der Banner genau <b><?php  echo"$width4"; ?> Pixel breit</b> sein!

    </td>

  </tr>

</table>



<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

  <?php  if($delete_tpl == "true") { ?>

    <tr>

    <td class="tableb"><b>Template löschen</b></td>

    <td class="tablea"><input class="input" type="checkbox" name="del_tpl" value="<?php  echo"$template_name"; ?>"></td>

  </tr>

  <?php  } ?>
               
  <tr>

    <td class="tableb" width="50%">Template Name</td>

    <td class="tablea" width="50%"><input class="input" type="text" name="edit_tpl_name" value="<?php  echo"$row_template_data[tpl_name]"; ?>" maxlength="50"></td>
                       <input type="hidden" name="current_tpl_name" value="<?php  echo"$row_template_data[tpl_name]"; ?>"> 
  </tr>

  <tr>

    <td class="tableb">Forum Breite (Wert sollte ungefähr zwischen 800 und 1000 liegen!)</td>

    <td class="tablea"><input class="input" type="text" name="edit_width" value="<?php  echo"$row_template_data[width]"; ?>" maxlength="4"> px</td>

  </tr>

  <tr>

    <td class="tableb">Schriftart</td>

    <td class="tablea"><input class="input" type="text" name="edit_fontfamily" value="<?php  echo"$row_template_data[fontfamily]"; ?>" maxlength="20"></td>

  </tr>

  <tr>

    <td class="tableb">Randfarbe</td>

    <td class="tablea"><input class="input" type="text" name="edit_bordercolor" value="<?php  echo"$row_template_data[bordercolor]"; ?>" maxlength="6"></td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="cellbg" align="center">

    Hintergrund

    </td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tableb" width="50%">Hintergrundbild Kategorie</td>

    <td class="tablea" width="50%"><input class="input" type="text" name="edit_img_catbg" value="<?php  echo"$row_template_data[img_catbg]"; ?>" maxlength="50"></td>

  </tr>

  <tr>

    <td class="tableb">Hintergrundbild Hauptzellen</td>

    <td class="tablea"><input class="input" type="text" name="edit_img_cellbg" value="<?php  echo"$row_template_data[img_cellbg]"; ?>" maxlength="50"></td>

  </tr>

  <tr>

    <td class="tableb">Hintergrundbild Header Navigation</td>

    <td class="tablea"><input class="input" type="text" name="edit_img_headerbg" value="<?php  echo"$row_template_data[img_headerbg]"; ?>" maxlength="50"></td>

  </tr>

  <tr>

    <td class="tableb">Hintergrundfarbe außen</td>

    <td class="tablea"><input class="input" type="text" name="edit_bgcolor" value="<?php  echo"$row_template_data[bgcolor]"; ?>" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Hintergrundfarbe innen</td>

    <td class="tablea"><input class="input" type="text" name="edit_bg_tablein" value="<?php  echo"$row_template_data[bg_tablein]"; ?>" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Hintergrundfarbe Zelle 1</td>

    <td class="tablea"><input class="input" type="text" name="edit_cell_bg01" value="<?php  echo"$row_template_data[cell_bg01]"; ?>" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Hintergrundfarbe Zelle 2</td>

    <td class="tablea"><input class="input" type="text" name="edit_cell_bg02" value="<?php  echo"$row_template_data[cell_bg02]"; ?>" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Hintergrundfarbe Zellen Mouseover</td>

    <td class="tablea"><input class="input" type="text" name="edit_bgcolor_mouseover" value="<?php  echo"$row_template_data[bgcolor_mouseover]"; ?>" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Hintergrundfarbe Buttons, Textarea, Select & Inputfelder</td>

    <td class="tablea"><input class="input" type="text" name="edit_bgcolor_buttons" value="<?php  echo"$row_template_data[bgcolor_buttons]"; ?>" maxlength="6"></td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="cellbg" align="center">

    Schriftgröße

    </td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tableb" width="50%">Schriftgröße klein</td>

    <td class="tablea" width="50%"><input class="input" type="text" name="edit_fontsize_small" value="<?php  echo"$row_template_data[fontsize_small]"; ?>" maxlength="2"> px</td>

  </tr>

  <tr>

    <td class="tableb">Schriftgröße normal</td>

    <td class="tablea"><input class="input" type="text" name="edit_fontsize" value="<?php  echo"$row_template_data[fontsize]"; ?>" maxlength="2"> px</td>

  </tr>

  <tr>

    <td class="tableb">Schriftgröße groß</td>

    <td class="tablea"><input class="input" type="text" name="edit_fontsize_big" value="<?php  echo"$row_template_data[fontsize_big]"; ?>" maxlength="2"> px</td>

  </tr>

  <tr>

    <td class="tableb">Schriftgröße Header Links</td>

    <td class="tablea"><input class="input" type="text" name="edit_fontsize_header" value="<?php  echo"$row_template_data[fontsize_header]"; ?>" maxlength="2"> px</td>

  </tr>

  <tr>

    <td class="tableb">Schriftgröße Überschriften, Titel</td>

    <td class="tablea"><input class="input" type="text" name="edit_fontsize_title" value="<?php  echo"$row_template_data[fontsize_title]"; ?>" maxlength="2"> px</td>

  </tr>

  <tr>

    <td class="tableb">Schriftgröße Kategorien</td>

    <td class="tablea"><input class="input" type="text" name="edit_fontsize_cat" value="<?php  echo"$row_template_data[fontsize_cat]"; ?>" maxlength="2"> px</td>

  </tr>

  <tr>

    <td class="tableb">Schriftgröße Buttons, Textarea, Select & Inputfelder</td>

    <td class="tablea"><input class="input" type="text" name="edit_fontsize_buttons" value="<?php  echo"$row_template_data[fontsize_buttons]"; ?>" maxlength="2"> px</td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="cellbg" align="center">

    Schriftfarbe

    </td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tableb" width="50%">Schriftfarbe</td>

    <td class="tablea" width="50%"><input class="input" type="text" name="edit_fontcolor" value="<?php  echo"$row_template_data[fontcolor]"; ?>" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Schriftfarbe Hauptzellen</td>

    <td class="tablea"><input class="input" type="text" name="edit_cellbg_fontcolor" value="<?php  echo"$row_template_data[cellbg_fontcolor]"; ?>" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Schriftfarbe Buttons, Textarea, Select & Inputfelder</td>

    <td class="tablea"><input class="input" type="text" name="edit_fontcolor_buttons" value="<?php  echo"$row_template_data[fontcolor_buttons]"; ?>" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb" width="50%">Schriftfarbe Header Links</td>

    <td class="tablea" width="50%"><input class="input" type="text" name="edit_fontcolor_header" value="<?php  echo"$row_template_data[fontcolor_header]"; ?>" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Schriftfarbe Header Links Hover</td>

    <td class="tablea"><input class="input" type="text" name="edit_fontcolor_header_hover" value="<?php  echo"$row_template_data[fontcolor_header_hover]"; ?>" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Schriftfarbe Kategorie Link</td>

    <td class="tablea"><input class="input" type="text" name="edit_fontcolor_cat" value="<?php  echo"$row_template_data[fontcolor_cat]"; ?>" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Schriftfarbe Kategorie Link Hover</td>

    <td class="tablea"><input class="input" type="text" name="edit_fontcolor_cat_hover" value="<?php  echo"$row_template_data[fontcolor_cat_hover]"; ?>" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Farbe Links</td>

    <td class="tablea"><input class="input" type="text" name="edit_link_color" value="<?php  echo"$row_template_data[link_color]"; ?>" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Farbe Links Hover</td>

    <td class="tablea"><input class="input" type="text" name="edit_link_hovercolor" value="<?php  echo"$row_template_data[link_hovercolor]"; ?>" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Schriftfarbe Überschriften Links</td>

    <td class="tablea"><input class="input" type="text" name="edit_fontcolor_title" value="<?php  echo"$row_template_data[fontcolor_title]"; ?>" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Schriftfarbe Überschriften Hover</td>

    <td class="tablea"><input class="input" type="text" name="edit_title_hovercolor" value="<?php  echo"$row_template_data[title_hovercolor]"; ?>" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Links Markierung</td>

    <td class="tablea">

    <select class="input" name="edit_link_decoration" style="width:200px;">

    <option value="overline" 

    <?php  if ($row_template_data[link_decoration] == "overline")  { echo"selected"; } ?> 

    >oben unterstrichen</option>

    <option value="underline"

    <?php  if ($row_template_data[link_decoration] == "underline")  { echo"selected"; } ?> 

    >unten unterstrichen</option>
  
    <option value="underline overline"

    <?php  if ($row_template_data[link_decoration] == "underline overline")  { echo"selected"; } ?> 

    >oben und unten unterstrichen</option>

    <option value="none"

    <?php  if ($row_template_data[link_decoration] == "none")  { echo"selected"; } ?> 

    >keine</option>

    </select>

</td>

  </tr>

  <tr>

    <td class="tableb">Links Hover Markierung</td>

    <td class="tablea">

    <select class="input" name="edit_hover_decoration" style="width:200px;">

    <option value="overline" 

    <?php  if ($row_template_data[hover_decoration] == "overline")  { echo"selected"; } ?> 

    >oben unterstrichen</option>

    <option value="underline"

    <?php  if ($row_template_data[hover_decoration] == "underline")  { echo"selected"; } ?> 

    >unten unterstrichen</option>
  
    <option value="underline overline"

    <?php  if ($row_template_data[hover_decoration] == "underline overline")  { echo"selected"; } ?> 

    >oben und unten unterstrichen</option>

    <option value="none"

    <?php  if ($row_template_data[hover_decoration] == "none")  { echo"selected"; } ?> 

    >keine</option>

    </select>

</td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="center" class="tableb">

    <input class="input" type="hidden" value="<?php  echo"$template_name"; ?>" name="template_name">

    <input class="input" type="submit" value="Template ändern" name="edit_tpl">

    </td> 

  </tr>

</form>

</table>