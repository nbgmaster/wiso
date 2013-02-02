<script language="JavaScript" type="text/javascript" src="./javascript/form_tpl2.js"></script>

<form name="tplform" action="index.php?do=admin&sec=templates&module=new" method="post" onsubmit="return checkForm(this)">

<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="cellbg" align="center">

    Allgemein 

    </td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tableb" width="50%">Template Name</td>

    <td class="tablea" width="50%"><input class="input" type="text" name="new_name" maxlength="20"></td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tableb" width="50%">Verzeichnis, in dem alle Template Bilder liegen m&uuml;ssen</td>

    <td class="tablea" width="50%"><?php  echo"http://$board_domain$board_direction"; ?>images/templates/"Template Name"</td>

  </tr>

  <tr>

    <td class="tableb">Banner URL</td>

    <td class="tablea"><?php  echo"http://$board_domain$board_direction"; ?>images/templates/"Template Name"/banner.jpg</td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tableb" width="50%">Forum Breite (Wert sollte ungef&auml;hr zwischen 800 und 1000 liegen!)</td>

    <td class="tablea" width="50%"><input class="input" type="text" name="new_width" maxlength="4"> px</td>

  </tr>
               
</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="tablea" align="center">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> 

    F&uuml;r eine optimale Forumsansicht mit Banner sollte der Banner genau <b>"Forum Breite - 2 Pixel" Pixel breit</b> sein!

    </td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="tableb" width="50%">Schriftart</td>

    <td class="tablea" width="50%"><input class="input" type="text" name="new_fontfamily" maxlength="20"></td>

  </tr>

  <tr>

    <td class="tableb" width="50%">Randfarbe</td>

    <td class="tablea" width="50%"><input class="input" type="text" name="new_bordercolor" maxlength="6"></td>

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

    <td class="tablea" width="50%"><input class="input" type="text" name="new_img_catbg" maxlength="50"></td>

  </tr>

  <tr>

    <td class="tableb">Hintergrundbild Hauptzellen</td>

    <td class="tablea"><input class="input" type="text" name="new_img_cellbg" maxlength="50"></td>

  </tr>

  <tr>

    <td class="tableb">Hintergrundbild Header Navigation</td>

    <td class="tablea"><input class="input" type="text" name="new_img_headerbg" maxlength="50"></td>

  </tr>

  <tr>

    <td class="tableb">Hintergrundfarbe au&szlig;en</td>

    <td class="tablea"><input class="input" type="text" name="new_bgcolor" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Hintergrundfarbe innen</td>

    <td class="tablea"><input class="input" type="text" name="new_bg_tablein" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Hintergrundfarbe Zelle 1</td>

    <td class="tablea"><input class="input" type="text" name="new_cell_bg01" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Hintergrundfarbe Zelle 2</td>

    <td class="tablea"><input class="input" type="text" name="new_cell_bg02" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Hintergrundfarbe Zellen Mouseover</td>

    <td class="tablea"><input class="input" type="text" name="new_bgcolor_mouseover" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Hintergrundfarbe Buttons, Textarea, Select & Inputfelder</td>

    <td class="tablea"><input class="input" type="text" name="new_bgcolor_buttons" maxlength="6"></td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="cellbg" align="center">

    Schriftgr&ouml;&szlig;e

    </td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tableb" width="50%">Schriftgr&ouml;&szlig;e klein</td>

    <td class="tablea" width="50%"><input class="input" type="text" name="new_fontsize_small" maxlength="2"> px</td>

  </tr>

  <tr>

    <td class="tableb">Schriftgr&ouml;&szlig;e normal</td>

    <td class="tablea"><input class="input" type="text" name="new_fontsize" maxlength="2"> px</td>

  </tr>

  <tr>

    <td class="tableb">Schriftgr&ouml;&szlig;e gro&szlig;</td>

    <td class="tablea"><input class="input" type="text" name="new_fontsize_big" maxlength="2"> px</td>

  </tr>

  <tr>

    <td class="tableb">Schriftgr&ouml;&szlig;e Header Links</td>

    <td class="tablea"><input class="input" type="text" name="new_fontsize_header" maxlength="2"> px</td>

  </tr>

  <tr>

    <td class="tableb">Schriftgr&ouml;&szlig;e &Uuml;berschriften, Titel</td>

    <td class="tablea"><input class="input" type="text" name="new_fontsize_title" maxlength="2"> px</td>

  </tr>

  <tr>

    <td class="tableb">Schriftgr&ouml;&szlig;e Kategorien</td>

    <td class="tablea"><input class="input" type="text" name="new_fontsize_cat" maxlength="2"> px</td>

  </tr>

  <tr>

    <td class="tableb">Schriftgr&ouml;&szlig;e Buttons, Textarea, Select & Inputfelder</td>

    <td class="tablea"><input class="input" type="text" name="new_fontsize_buttons" maxlength="2"> px</td>

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

    <td class="tablea" width="50%"><input class="input" type="text" name="new_fontcolor" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Schriftfarbe Hauptzellen</td>

    <td class="tablea"><input class="input" type="text" name="new_cellbg_fontcolor" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Schriftfarbe Buttons, Textarea, Select & Inputfelder</td>

    <td class="tablea"><input class="input" type="text" name="new_fontcolor_buttons" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb" width="50%">Schriftfarbe Header Links</td>

    <td class="tablea" width="50%"><input class="input" type="text" name="new_fontcolor_header" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Schriftfarbe Header Links Hover</td>

    <td class="tablea"><input class="input" type="text" name="new_fontcolor_header_hover" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Schriftfarbe Kategorie Link</td>

    <td class="tablea"><input class="input" type="text" name="new_fontcolor_cat" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Schriftfarbe Kategorie Link Hover</td>

    <td class="tablea"><input class="input" type="text" name="new_fontcolor_cat_hover" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Farbe Links</td>

    <td class="tablea"><input class="input" type="text" name="new_link_color" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Farbe Links Hover</td>

    <td class="tablea"><input class="input" type="text" name="new_link_hovercolor" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Schriftfarbe &Uuml;berschriften Links</td>

    <td class="tablea"><input class="input" type="text" name="new_fontcolor_title" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Schriftfarbe &Uuml;berschriften Hover</td>

    <td class="tablea"><input class="input" type="text" name="new_title_hovercolor" maxlength="6"></td>

  </tr>

  <tr>

    <td class="tableb">Links Markierung</td>

    <td class="tablea">

    <select class="input" name="new_link_decoration" style="width:200px;">

    <option value="overline">oben unterstrichen</option>

    <option value="underline">unten unterstrichen</option>
  
    <option value="underline overline">oben und unten unterstrichen</option>

    <option value="none">keine</option>

    </select>

</td>

  </tr>

  <tr>

    <td class="tableb">Links Hover Markierung</td>

    <td class="tablea">

    <select class="input" name="new_hover_decoration" style="width:200px;">

    <option value="overline">oben unterstrichen</option>

    <option value="underline">unten unterstrichen</option>
  
    <option value="underline overline">oben und unten unterstrichen</option>

    <option value="none">keine</option>

    </select>

</td>

  </tr>

</table>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td align="center" class="tableb">

    <input class="input" type="submit" value="Template erstellen" name="new_tpl">

    </td> 

  </tr>

</form>

</table>