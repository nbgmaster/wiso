<?php

  $query_template = mysql_query("SELECT * from $admin_config_tblname");

  while ($row_template = mysql_fetch_assoc($query_template))  {

         $overwrite_user_tpl = "$row_template[overwrite_user_tpl]";
         $template_id        = "$row_template[tpl_active]";

  }

  if ($overwrite_user_tpl == "0")  {

      $template_id = "$userdata_tpl";

  }

  $query_template_data = mysql_query("SELECT * from $templates_tblname WHERE id = '$template_id'");

  $check_query         = mysql_num_rows($query_template_data);

  if ($check_query == "false")  {

      $query_template_data = mysql_query("SELECT * from $templates_tblname WHERE id = '$default_style'");

  }

  while($row_template_data = mysql_fetch_assoc($query_template_data))  {

        $template                 = $row_template_data["tpl_name"];

        $width3                   = $row_template_data["width"];

        $check_chars = '%';

        if ( eregi($check_chars, $width3) )  {

            $percent_width = "1";

            $width3   = str_replace("%", "", $width3);

            $width    = "99";

            $percent  = "%";

            $js_width = $width3;

            $width    = "$width$percent";

            $width3   = "$width3$percent";

            ?>

            <script type="text/javascript">

            <!--

            banner_width = <?php echo"$js_width"; ?> * screen.width / 100;

            banner_width = Math.round(banner_width);

            banner_width = banner_width - 2;

            //-->

            </script>

            <?php

        }

        else  {

            $percent_width        = "0";

            $width                = $width3 - 20;

        }

        $width2                   = $width / 2;

        $fontsize_small           = $row_template_data["fontsize_small"];
        $fontsize                 = $row_template_data["fontsize"];
        $fontsize_big             = $row_template_data["fontsize_big"];
        $fontsize_title           = $row_template_data["fontsize_title"];
        $fontsize_header          = $row_template_data["fontsize_header"];
        $fontsize_cat             = $row_template_data["fontsize_cat"];

        $fontcolor_title_hover    = $row_template_data["title_hovercolor"];

        $fontcolor                = $row_template_data["fontcolor"];
        $fontfamily               = $row_template_data["fontfamily"];

        $bgcolor                  = $row_template_data["bgcolor"];
        $bordercolor              = $row_template_data["bordercolor"];
        $bordergage               = 1;

        $bg_tablein               = $row_template_data["bg_tablein"];

        $fontcolor_header         = $row_template_data["fontcolor_header"];
        $fontcolor_header_hover   = $row_template_data["fontcolor_header_hover"];
        $fontcolor_cat            = $row_template_data["fontcolor_cat"];
        $fontcolor_cat_hover      = $row_template_data["fontcolor_cat_hover"];

        $cellbg_fontcolor         = $row_template_data["cellbg_fontcolor"];

        $cell_bg01                = $row_template_data["cell_bg01"];
        $cell_bg02                = $row_template_data["cell_bg02"];

        $link_color               = $row_template_data["link_color"];
        $link_hover_color         = $row_template_data["link_hovercolor"];

        $bgcolor_mouseover        = $row_template_data["bgcolor_mouseover"];

        $fontsize_buttons         = $row_template_data["fontsize_buttons"];
        $fontcolor_buttons        = $row_template_data["fontcolor_buttons"];
        $bgcolor_buttons          = $row_template_data["bgcolor_buttons"];

        $fontsize_textarea        = $row_template_data["fontsize_textarea"];
        $fontcolor_textarea       = $row_template_data["fontcolor_textarea"];
        $bgcolor_textarea         = $row_template_data["bgcolor_textarea"];

        $rows_textarea            = $row_template_data["rows_textarea"];
        $cols_textarea            = $row_template_data["cols_textarea"];

        $fontcolor_title          = $row_template_data[fontcolor_title];

        $link_decoration          = $row_template_data[link_decoration];
        $hover_decoration         = $row_template_data[hover_decoration];

        $img_catbg                = $row_template_data["img_catbg"];
        $img_cellbg               = $row_template_data["img_cellbg"];
        $img_headerbg             = $row_template_data["img_headerbg"];

  }

  $width_smilies_window  = "375";
  $height_smilies_window = "350";


  $cellspacing = "1";

?>

<style type="text/css">

body {
 margin            : 0px 0px 0px 0px;
 background-color  : #<?php echo"$bgcolor";    ?>;

 color             : #<?php echo"$fontcolor";  ?>;
 font-family       : <?php echo"$fontfamily";  ?>;
 font-size         : <?php echo"$fontsize";    ?>px;
}

td {
 color       :  #<?php echo"$fontcolor";  ?>;
 font-family :  <?php echo"$fontfamily";  ?>;
 font-size   :  <?php echo"$fontsize";    ?>px;
}


input {
 border            : <?php echo"$bordergage"; ?>px solid #<?php echo"$bordercolor"; ?>;
 background-color  : #<?php echo"$bgcolor_buttons";   ?>;
 color             : #<?php echo"$fontcolor_buttons"; ?>;
 font-size         : <?php echo"$fontsize_buttons";   ?>px;
}


<?php if ($browser == "Safari" && $do == "newpm" && $user_id == "") { ?>

.mouseover {

 background-color : #BE7400;
 cursor           : pointer;
}

<?php } else { ?>

.mouseover {

 background-color : #<?php echo"$bgcolor_mouseover"; ?>;
 cursor           : pointer;
}
<?php } ?>

.mouseover2 {

 background-color : #<?php echo"$cell_bg02"; ?>;
 cursor           : pointer;
}

.mouseout {
 background-color : #<?php echo"$cell_bg02"; ?>;
 cursor           : pointer;
}

.mouseout2 {
 background-color : #<?php echo"$cell_bg01"; ?>;
 cursor           : pointer;
}

.mouseout3 {
 background-color : #CACACA;
 cursor           : pointer;
}

.mouseoverInput {
  background  : url(./images/templates/<?php echo"$template"; ?>/hoverbgB.gif);
  cursor      : pointer;
  font-weight : bold;
  height      : 20px;
 font-size        : 12px;
}

.mouseoutInput {
  background  : url(./images/templates/<?php echo"$template"; ?>/catpic.gif);
  cursor      : pointer;
  font-weight : bold;
  height      : 20px;
 color        : #<?php echo"$fontcolor_cat"; ?>;
 font-size        : 12px;
}


.mouseoverInput2 {
  background  : url(./images/templates/<?php echo"$template"; ?>/hoverbgB.gif);
  cursor      : pointer;
  font-weight : bold;

 font-size        : <?php echo"$fontsize_cat";  ?>px;
}

.mouseoutInput2 {
  background  : url(./images/templates/<?php echo"$template"; ?>/catpic.gif);
  cursor      : pointer;
  font-weight : bold;

 color        : #<?php echo"$fontcolor_cat"; ?>;
 font-size        : <?php echo"$fontsize_cat";  ?>px;
}


.mouseoverSides {
  background  : url(./images/templates/<?php echo"$template"; ?>/hoverbgB.gif);
  cursor      : pointer;
  font-weight : bold;
  height      : 16px;
 color        : #<?php echo"$fontcolor_cat"; ?>;
 font-size        : <?php echo"$fontsize_cat"; ?>px;

}

.mouseoutSides {
  background  : url(./images/templates/<?php echo"$template"; ?>/catpic.gif);
  cursor      : pointer;
  font-weight : bold;
  height      : 16px;
 color        : #<?php echo"$fontcolor_cat"; ?>;
 font-size        : <?php echo"$fontsize_cat"; ?>px;
}

.Sidesactive {
  background  : url(./images/templates/<?php echo"$template"; ?>/hoverbgB.gif);
  cursor      : pointer;
  font-weight : bold;
  height      : 16px;
  color        : #000;
  font-size        : <?php echo"$fontsize_cat"; ?>px;
}


textarea {
 background-color : #<?php echo"$bgcolor_buttons";   ?>;
 color            : #<?php echo"$fontcolor_buttons"; ?>;
 font-size        : <?php echo"$fontsize_buttons";   ?>px;
 border           : <?php echo"$bordergage"; ?>px solid #<?php echo"$bordercolor"; ?>;
}


select {
 background-color : #<?php echo"$bgcolor_buttons";  ?>;
 font-size        : <?php echo"$fontsize_buttons";  ?>px;
 border           : <?php echo"$bordergage"; ?>px solid #<?php echo"$bordercolor"; ?>;
 color            : #<?php echo"$fontcolor_buttons"; ?>;
}

.footer {
 font-size : 9px;
}


.small {
 font-size : <?php echo"$fontsize_small"; ?>px;
}


.main {
 font-size : <?php echo"$fontsize"; ?>px;
}


.big {
 font-size : <?php echo"$fontsize_big"; ?>px;
}


.title {
 font-size   : <?php echo"$fontsize_title";   ?>px;
 color       : #<?php echo"$fontcolor_title"; ?>;
 font-weight : bold;
}


.tableinborder_top {
 border           : <?php echo"$bordergage"; ?>px solid #<?php echo"$bordercolor"; ?>;
 background-color : #<?php echo"$bg_tablein"; ?>;
}


.tableinborder {
 background-color : #<?php echo"$bordercolor"; ?>;
}


.input {
 border            : <?php echo"$bordergage"; ?>px solid #<?php echo"$bordercolor"; ?>;
 background-color  : #<?php echo"$bgcolor_buttons";   ?>;
 color             : #<?php echo"$fontcolor_cat"; ?>;
 font-size         : 11px;
 border            : <?php echo"$bordergage"; ?>px solid #<?php echo"$bordercolor"; ?>;
 background-image  : url(images/templates/<?php echo"$template/$img_catbg"; ?>);
 font-weight       : bold;
 height            : 17px;

}

.buttons {
 border            : <?php echo"$bordergage"; ?>px solid #<?php echo"$bordercolor"; ?>;
 background-color  : #<?php echo"$bgcolor_buttons";   ?>;
 color             : #<?php echo"$fontcolor_cat"; ?>;
 font-size         : 12px;
 border            : <?php echo"$bordergage"; ?>px solid #<?php echo"$bordercolor"; ?>;
 background-image  : url(images/templates/<?php echo"$template/$img_catbg"; ?>);
 font-weight       : bold;
 height            : 20px;

}


.radio {

 border            : 0px solid #000000;
 background-color  : transparent;
}

.tablea {
 background-color : #<?php echo"$cell_bg01"; ?>;
}


.tableb {
 background-color : #<?php echo"$cell_bg02"; ?>;
}

<?php if ($template == "orangestyle")  { ?>
.tablec {
 background-color : #CACACA;
}
<?php } else { ?>
.tablec {
 background-color : #383838;
 border:1px solid #5C5B5B;

}
.mfont {
color:#fff;
}
.mouseover2 {

 background-color : #000;
 cursor           : pointer;
   border:1px solid #5C5B5B;

}
.mouseout3 {
 background-color : #383838;
 cursor           : pointer;
  border:1px solid #5C5B5B;
}

<?php } ?>

.cellbg {
 background-image:  url(images/templates/<?php echo"$template/$img_cellbg"; ?>);
 color            : #<?php echo"$cellbg_fontcolor"; ?>;
}


.catbg {
 background-image : url(images/templates/<?php echo"$template/$img_catbg"; ?>);
 color            : #<?php echo"$fontcolor_cat"; ?>;
 font-weight      : bold;
 font-size        : <?php echo"$fontsize_cat"; ?>px;

  height      : 16px;
}

.hoverbg {
 background-image : url(./images/templates/<?php echo"$template"; ?>/hoverbg.gif);
 color            : #<?php echo"$fontcolor"; ?>;
 font-weight      : bold;
 font-size        : <?php echo"$fontsize_cat"; ?>px;
}


.catFont {
 color            : #<?php echo"$fontcolor_cat"; ?>;
 font-weight      : bold;
 font-size        : <?php echo"$fontsize_cat"; ?>px;
}


.impressum {
 color            : #<?php echo"$fontcolor_cat"; ?>;
 font-weight      : bold;
 font-size        : <?php echo"$fontsize_cat"; ?>px;
}


.banner {
 border-bottom : <?php echo"$bordergage"; ?>px solid #<?php echo"$bordercolor"; ?>;
 border-top    : <?php echo"$bordergage"; ?>px solid #<?php echo"$bordercolor"; ?>;
}


.borderbottom {
 border-bottom : <?php echo"$bordergage"; ?>px solid #<?php echo"$bordercolor"; ?>;
}


.bgheader {
 background-image : url(images/templates/<?php echo"$template/$img_headerbg"; ?>);
 font-size        : <?php echo"$fontsize_header"; ?>px;
 font-weight      : bold;
}


A.catbg:link {
 color           : #<?php echo"$fontcolor_cat";   ?>;
 text-decoration : <?php echo"$link_decoration";  ?>;
}


A.catbg:visited {
 color           : #<?php echo"$fontcolor_cat";   ?>;
 text-decoration : <?php echo"$link_decoration";  ?>;
        }


A.catbg:active {
 color           : #<?php echo"$fontcolor_cat";   ?>;
 text-decoration : <?php echo"$link_decoration";  ?>;
}


A.catbg:hover {
 color           : #<?php echo"$fontcolor_cat_hover"; ?>;
 text-decoration : <?php echo"$link_decoration";      ?>;
}

A.catFont:link {
 color           : #<?php echo"$fontcolor_cat";   ?>;
 text-decoration : <?php echo"$link_decoration";  ?>;
}


A.catFont:visited {
 color           : #<?php echo"$fontcolor_cat";   ?>;
 text-decoration : <?php echo"$link_decoration";  ?>;
        }


A.catFont:active {
 color           : #<?php echo"$fontcolor_cat";   ?>;
 text-decoration : <?php echo"$link_decoration";  ?>;
}


A.catFont:hover {
 color           : #<?php echo"$fontcolor_cat_hover"; ?>;
 text-decoration : <?php echo"$link_decoration";      ?>;
}


A.impressum:link {
 color           : #<?php echo"$fontcolor_cat";   ?>;
 text-decoration : underline;
}


A.impressum:visited {
 color           : #<?php echo"$fontcolor_cat";   ?>;
 text-decoration : underline;
        }


A.impressum:active {
 color           : #<?php echo"$fontcolor_cat";   ?>;
 text-decoration : none;
}


A.impressum:hover {
 color           : #<?php echo"$fontcolor_cat";   ?>;
 text-decoration : none;
}


A.header:link {
 color           : #<?php echo"$fontcolor_header"; ?>;
 text-decoration : <?php echo"$link_decoration";   ?>;
}


A.header:visited {
 color           : #<?php echo"$fontcolor_header"; ?>;
 text-decoration : <?php echo"$link_decoration";   ?>;
}


A.header:active {
 color           : #<?php echo"$fontcolor_header"; ?>;
 text-decoration : <?php echo"$link_decoration";   ?>;
}


A.header:hover {
 color           : #<?php echo"$fontcolor_header"; ?>;
 text-decoration : <?php echo"$hover_decoration";        ?>;
}


A.title:link {
 color           : #<?php echo"$fontcolor_title";  ?>;
 text-decoration :  <?php echo"$link_decoration";  ?>;
}


A.title:visited {
 color           : #<?php echo"$fontcolor_title";  ?>;
 text-decoration : <?php echo"$link_decoration";   ?>;
}


A.title:active {
 color           : #<?php echo"$fontcolor_title";  ?>;
 text-decoration : <?php echo"$link_decoration";   ?>;
}


A.title:hover {
 color           : #<?php echo"$fontcolor_title_hover"; ?>;
 text-decoration : <?php echo"$hover_decoration";       ?>;
}


A:link {
 color           : #<?php echo"$link_color";     ?>;
 text-decoration : <?php echo"$link_decoration"; ?>;
}


A:visited {
 color           : #<?php echo"$link_color";     ?>;
 text-decoration : <?php echo"$link_decoration"; ?>;
}


A:active {
 color           : #<?php echo"$link_color";     ?>;
 text-decoration : <?php echo"$link_decoration"; ?>;
}


A:hover {
 color           : #<?php echo"$link_hover_color"; ?>;
 text-decoration : <?php echo"$hover_decoration";  ?>;
}

A.small:link {
 color           : #<?php echo"$font_color"; ?>;
 text-decoration : <?php echo"$link_decoration"; ?>;
}

A.small:visited {
 color           : #FFFFFF;
 text-decoration : <?php echo"$link_decoration"; ?>;
}


A.small:active {
 color           : #FFFFFF;
 text-decoration : <?php echo"$link_decoration"; ?>;
}


A.small:hover {
 color           : #<?php echo"$link_hover_color"; ?>;
 text-decoration : <?php echo"$hover_decoration";  ?>;
}

.userlink { cursor:pointer; }

A.userlink:link {
 color           : #<?php echo"$link_color";     ?>;
 text-decoration : underline;
}

A.userlink:visited {
 color           : #<?php echo"$link_color";     ?>;
 text-decoration : underline;
}


A.userlink:active {
 color           : #<?php echo"$link_color";     ?>;
 text-decoration : underline;
}


A.userlink:hover {
 color           : #<?php echo"$link_hover_color"; ?>;
 text-decoration : underline;
}


A.mouseo:hover {
 color           : #<?php echo"$link_color";     ?>;
 text-decoration : underline;
}


</style>


<style type="text/css">
<!--
<?php if ($template == "darkstyle")  { ?>

.flyer {

border: 1px solid #FFFFFF;

}
<?php }  else  { ?>

.flyer {

border: 1px solid #000000;

}

<?php } ?>


#navi { cursor:pointer;         float:left;top: 0px;left:0px; right: 0px;  margin      : 0;
  padding     : 0;  width       : 798px;   font-size   : 12px;  height:28px;    }


#navi li { cursor:pointer; padding: 4px 0 1px 0; border-right : 1px solid #000; float: left; height: 26px;font-weight: bold;background: url(./images/templates/<?php echo"$template"; ?>/hoverbg.gif) 0 0 repeat;}


#navi li a {cursor:pointer;padding: 4px 0.55em 2px 0.54em;  }


#navi li a:focus,#navi li a:hover,

#navi li a:active,

#navi li.active a {cursor:pointer; color: #fff; text-decoration: none; background: url(./images/templates/<?php echo"$template"; ?>/catpic_head.gif) repeat;}


.divIcon {text-align: center;text-valign: middle; float: left;width: 16px; height:13px;padding:5px 0 0 3px; }
.divIcon2 {text-align: center;text-valign: middle; float: left;width: 20px; height:8px;padding:15px 0 5 0px; }





.tbodygfxCredits {
        width: 120px;
        text-align: center;
        background-color:#BABABA;
}

.tbodygfxCredits2 {
        width: 120px;
        text-align: center;
        background-color:#CACACA;
}

.gfxBarCredits {
        text-align: left;
        border-width: 1px;
        padding: 1px;
        border-color: #858585;
        border-style: solid;
}

.gfxBarCredits div {
        background-color: #0c0;
        border-bottom: 6px solid #0a0;
        height: 3px;
        font-size: 3px; /* needed for correct usage-bar display in IE-browsers */
}

.tbodygfxPN {
        width: 240px;
        text-align: center;
}

.tbodygfx {
        width: 320px;
        text-align: center;
}



.gfxBar {
        text-align: left;
        border-width: 1px;
        padding: 1px;
        border-color: #858585;
        border-style: solid;
}

<?php if ($template == "orangestyle")  { ?>

.gfxBar div {
        background-color: #F18C1E;
        border-bottom: 6px solid #D87502;
        height: 4px;
        font-size: 3px; /* needed for correct usage-bar display in IE-browsers */
}
<?php } else { ?>

.gfxBar div {
        background-color: #BE5955;
        border-bottom: 6px solid #FF3500;
        height: 4px;
        font-size: 3px; /* needed for correct usage-bar display in IE-browsers */
}
<?php } ?>




.gfxBar2 {
        text-align: left;
        border-width: 1px;
        padding: 1px;
        border-color: #858585;
        border-style: solid;
}

.gfxBar2 div {
        background-color: #0c0;
        border-bottom: 6px solid #0a0;
        height: 4px;
        font-size: 3px; /* needed for correct usage-bar display in IE-browsers */
}


.gfxBar3 {
        text-align: left;
        border-width: 1px;
        padding: 1px;
        border-color: #858585;
        border-style: solid;
}

.gfxBar3 div {
        background-color: #EB0404;
        border-bottom: 6px solid #BB0000;
        height: 4px;
        font-size: 3px; /* needed for correct usage-bar display in IE-browsers */
}



.gfxBar4 {
        text-align: left;
        border-width: 1px;
        padding: 1px;
        border-color: #525252;
        border-style: solid;
}

.gfxBar4 div {
        background-color: #878787;
        border-bottom: 6px solid #666666;
        height: 4px;
        font-size: 3px; /* needed for correct usage-bar display in IE-browsers */
}

.gfxBar5 {
        text-align: left;
        border-width: 1px;
        padding: 1px;
        border-color: #858585;
        border-style: solid;
}

.gfxBar5 div {
        background-color: #F18C1E;
        border-bottom: 6px solid #D87502;
        height: 4px;
        font-size: 3px; /* needed for correct usage-bar display in IE-browsers */
}

.field01 {

        padding:5px;
        text-align:left;
        border:1px solid #000;

}

.pagestyle4 {
  border-left: solid 1px #000;
  border-right: solid 1px #000;
  border-bottom: solid 1px #000;
 background-color : #<?php echo"$cell_bg02"; ?>;  
  background-repeat: repeat-y;
}

-->
</style>
