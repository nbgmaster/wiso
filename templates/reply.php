
<?php 

if ($sec != "edit_signature")  echo"<br>";


  if (isset($preview))  {

  include("preview.php");
  
  } 


  $file_max_size2 = byte_umrechner($file_max_size);


  if ($title_required == "1")  { ?>

      <script language="JavaScript" type="text/javascript" src="./javascript/form_title2.js"></script>

  <?php  } else {

      if ($do == "newpm" or $do == "newtopic")  { ?>

          <script language="JavaScript" type="text/javascript" src="./javascript/form_title.js"></script>
 
          <?php   }  else {  if ($sec != "edit_signature")  { ?>

          <script language="JavaScript" type="text/javascript" src="./javascript/form_reply.js"></script>

       <?php  } }

  }
     
?>
<form action="<?php  echo"$form_link"; ?>" method="post" name="bbform" onsubmit="return checkForm(this)" style="display:inline;" enctype="multipart/form-data">

      
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="tableb" valign="top" width="175" align="center">

    <br>

    <table cellpadding="6">

      <tr>

      <?php  include("./includes/smilies.php"); ?>

      </tr>

    </table>

        <br>

        <script language="JavaScript" type="text/javascript" src="./javascript/window_position.js"></script>

        <a href="javascript:window_position(<?php  echo"$width_smilies_window,$height_smilies_window"; ?>,'includes/allsmilies.php','Smilies')"><b><u>Weitere Smilies ansehen</u></b></a>


<?php  

if ($do == "newtopic")  {

  $query_mod = mysql_query("SELECT * from $moderator_tblname WHERE user_id = '$userdata_id' && f_id = '$f'");  
  $mod_user_status = mysql_num_rows($query_mod);     

if ($userdata_admin == "1" or $mod_user_status == "1")  { ?>

<br><br><br><hr size="1" color="#000000"><br>
<br>
<span style="line-height:22px">

Thema als <b>"Wichtig"</b> einstufen?
<br><br>
    <select name="announce">

        <option value="1">Ja</option>
        <option value="0" selected>Nein</option>
 
    </select>

<?php  } else { $announce = "0"; } 

}

?>

    </td>
      
    <td class="main" bgcolor="<?php  echo"#$cell_bg01"; ?>" align="center">

    <?php  if ($sec != "edit_signature")  { ?>

    <br>

    <b><span style="font-size : <?php  echo"$fontsize_header"; ?>px;">Titel:</span></b>

    <?php  if ($do == "newtopic" or $do == "newpm" or $do == "post" && $_POST[title] != "")  { ?>

    <input type="text" maxlength="40" value="<?php  echo"$title"; ?>" name="title" style="width:420px;">

    <?php  }  else  { ?>

    <input type="text" maxlength="40" value="<?php  echo"$newtitle"; ?>" name="newtitle" style="width:420px;">

    <?php  } ?>

    <br><br>

    <?php  } ?>
              
    <table style="width:100%;">

      <tr>

        <td align="center" style="width:100%;">

        <table cellspacing="0" cellpadding="0">
 
          <tr>


            <td>
     
            &nbsp;
            <img src="images/templates/<?php  echo"$template"; ?>/bbcode_bold.gif" style="cursor:pointer;" title="fettgedruckter Text" border="0" onClick="insert('[B]', '[/B]', '', '', '')" class="clsCursor">
            &nbsp;
            <img src="images/templates/<?php  echo"$template"; ?>/bbcode_italic.gif" style="cursor:pointer;" title="kursiver Text" border="0" onClick="insert('[I]', '[/I]', '', '', '')" class="clsCursor">
            &nbsp;
            <img src="images/templates/<?php  echo"$template"; ?>/bbcode_underline.gif" style="cursor:pointer;" title="unterstrichener Text" border="0" onClick="insert('[U]', '[/U]', '', '', '')" class="clsCursor">
            &nbsp;
            <img src="images/templates/<?php  echo"$template"; ?>/bbcode_center.gif" style="cursor:pointer;" title="zentrierter Text" border="0" onClick="insert('[CENTER]', '[/CENTER]', '', '', '')" class="clsCursor">
            &nbsp;
            <img src="images/templates/<?php  echo"$template"; ?>/bbcode_url.gif" style="cursor:pointer;" title="Hyperlink einf&uuml;gen" border="0" onclick="namedlink(document.bbform,'URL')" class="clsCursor">
            &nbsp;
            <img src="images/templates/<?php  echo"$template"; ?>/bbcode_image.gif" style="cursor:pointer;" title="Bild einf&uuml;gen" border="0" onclick="bbcode(document.bbform,'IMG','http://')" class="clsCursor">
            &nbsp;
             <img src="images/templates/<?php  echo"$template"; ?>/bbcode_quote.gif" style="cursor:pointer;" title="Zitat" border="0" onClick="quotethis(document.bbform,'QUOTE')" class="clsCursor">

            </td>

            <td>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <select id="sizeselect"  style="width:100px;" onchange="insert('[SIZE', '[/SIZE]', this.options[this.selectedIndex].value, '', '')">

            <option value="0">Textgr&ouml;&szlig;e</option>

            <option value="1">klein</option>
            <option value="2">mittel</option>
            <option value="3">gro&szlig;</option>
            <option value="4">riesig</option>

            </select>
 
            &nbsp;&nbsp;&nbsp;

            <select id="colorselect" style="width:110px;" onchange="insert('[COLOR', '[/COLOR]', this.options[this.selectedIndex].value, '', '')">

            <option value="0">Textfarbe</option>

            <option value="skyblue" style="color:skyblue">sky blue</option>
            <option value="royalblue" style="color:royalblue">royal blue</option>
            <option value="blue" style="color:blue">blue</option>
            <option value="darkblue" style="color:darkblue">dark-blue</option>
            <option value="orange" style="color:orange">orange</option>
            <option value="orangered" style="color:orangered">orange-red</option>
            <option value="crimson" style="color:crimson">crimson</option>
            <option value="red" style="color:red">red</option>
            <option value="firebrick" style="color:firebrick">firebrick</option>
            <option value="darkred" style="color:darkred">dark red</option>
            <option value="green" style="color:green">green</option>
            <option value="limegreen" style="color:limegreen">limegreen</option>
            <option value="seagreen" style="color:seagreen">sea-green</option>
            <option value="deeppink" style="color:deeppink">deeppink</option>
            <option value="tomato" style="color:tomato">tomato</option>
            <option value="coral" style="color:coral">coral</option>
            <option value="purple" style="color:purple">purple</option>
            <option value="indigo" style="color:indigo">indigo</option>
            <option value="burlywood" style="color:burlywood">burlywood</option>
            <option value="sandybrown" style="color:sandybrown">sandy brown</option>
            <option value="sienna" style="color:sienna">sienna</option>
            <option value="chocolate" style="color:chocolate">chocolate</option>
            <option value="teal" style="color:teal">teal</option>
            <option value="silver" style="color:silver">silver</option></select>

            </select>
            &nbsp;
            </td>

         </tr>

       </table>

</td></tr><tr><td align="center">



    Markiere den gew&uuml;nschten Text und w&auml;hle anschlie&szlig;end die gew&uuml;nschte Formatierung aus.


       </td>

     </tr>
 
     <tr>
           
       <td align="center">

       <textarea nowrap name="message" rows="<?php  echo"$rows_textarea"; ?>" style="width:95%;height:240px;"><?php  if (isset($preview)) {  
$_POST["message"] = trim($_POST["message"]);
$preview_message = stripslashes($_POST["message"]);

echo"$preview_message";
}
else  {

           if ($q_id != "")     { 

               $quote_msg = str_replace("[PHP]<?php ", "[PHP]", $quote_msg);
               $quote_msg = str_replace("?>[/PHP]", "[/PHP]", $quote_msg);

               echo"$quote1$quote_msg$quote2";

           } 
    
           if ($do == "edit")   {

               $edit_message = str_replace("[PHP]<?php ", "[PHP]", $edit_message);
               $edit_message = str_replace("?>[/PHP]", "[/PHP]", $edit_message);

               echo"$edit_message"; 

           } 

           if ($do == "usercp") { 

               $userdata_signature = str_replace("[PHP]<?php ", "[PHP]", $message);
               $userdata_signature = str_replace("?>[/PHP]", "[/PHP]", $message);

               echo"$message"; 

           } 

           if ($do == "newpm")  { 

               echo"$message";

           } 

       }

       ?></textarea>
 
       </td>

     </tr>

     <?php  if ($do == "newtopic" or $do == "reply" or $do == "post" or $do == "edit")  { 

     if ($file_upload == "1")  { ?>

     <tr>

        <td align="center">

<?php  

if ($do == "edit" && $attach != "")  { 

echo"<br><table cellspacing=\"0\" cellpadding=\"0\"><tr><td>Du hast bereits eine Datei angeh&auml;ngt.</td><td width=\"10\"></td><td>";
echo"<table cellspacing=\"0\" cellpadding=\"0\"><tr><td>";
echo"<b>Datei l&ouml;schen:</b></td><td><input type=\"checkbox\" id=\"checkbox\" value=\"1\" name=\"del_attach\">";
echo"</td></tr></table></td></tr></table>";

echo"<br>Solltest du eine neue Datei ausw&auml;hlen wird die alte automatisch &uuml;berschrieben!<br>";


}

?>

        <br>
        <b>Datei anh&auml;ngen:</b>     <input name="file" type="file" size="36">
        <br><br>


<table cellspacing="0" cellpadding="0"><tr><td>
        <img src="images/database/jpg.gif" title="JPG-Bild">&nbsp;<img src="images/database/gif.gif" title="GIF & PNG - Bild">
        <img src="images/database/doc.gif" title="Word-Datei">&nbsp;<img src="images/database/xls.gif" title="Excel-Datei">&nbsp;<img src="images/database/ppt.gif" title="Powerpoint-Datei">
        &nbsp;<img src="images/database/zip.gif" title="Zip-Archiv">&nbsp;<img src="images/database/rar.gif" title="RAR-Archiv">
&nbsp;<img src="images/database/pdf.gif" title="PDF-Datei">
&nbsp;<img src="images/database/txt.gif" title="Textdatei">
        </td><td>&nbsp; max. Dateigr&ouml;&szlig;e: <b><?php  echo"$file_max_size2"; ?></b>
</td></tr></table>
<br>
        </td>

      </tr>

      <?php  } } ?>

     <?php  if ($do == "newtopic")  { ?>

     <tr>

        <td align="center">

        Umfrage starten:     <input type="radio" value="1" name="poll" class="checkbox"> Ja <input type="radio" value="0" name="poll" checked class="checkbox"> Nein
        <br>
        <font class="small">
        (Umfrageerstellung erfolgt im n&auml;chsten Fenster nach dem Klick auf "Beitrag absenden")
        </small>

        </td>

      </tr>

      <?php   } ?>

   </table> 

   <br>

   <center>

   <?php  if ($do == "post")  { ?>


   <input class="input" type="hidden" value="<?php  echo"$_POST[forum_id]"; ?>" name="forum_id">
   <input class="input" type="hidden" value="<?php  echo"$_POST[t]"; ?>" name="t">   
   <input class="input" type="hidden" value="<?php  echo"$_POST[f]"; ?>" name="f">
   <input class="input" type="hidden" value="<?php  echo"$_POST[p_id]"; ?>" name="p_id">
   <input class="input" type="hidden" value="<?php  echo"$_POST[p_userid]"; ?>" name="p_userid">

   <?php  }  if ($do == "reply")  { ?>

   <input class="input" type="hidden" value="<?php  echo"$forum_id"; ?>" name="forum_id">
   <input class="input" type="hidden" value="<?php  echo"$t"; ?>" name="t">

   <?php  }  if ($do == "newtopic")  {  $nolastrow = "1"; ?>

   <input class="input" type="hidden" value="<?php  echo"$nolastrow"; ?>" name="nolastrow">
   <input class="input" type="hidden" value="<?php  echo"$f"; ?>" name="f">
  
   <?php  }  if ($do == "edit")  { ?>

   <input class="input" type="hidden" value="<?php  echo"$p_userid"; ?>" name="p_userid">
   <input class="input" type="hidden" value="<?php  echo"$p_id"; ?>" name="p_id">
 
   <?php  }  if ($do == "newpm")  { ?>

   <input class="input" type="hidden" value="<?php  echo"$user_id"; ?>" name="user_id">


   <?php  }  if ($do == "newpm")  { ?>

   <input class="buttons" type="submit" name="send_postdata" accesskey="S" onclick="closeall(this.form)" value="Nachricht abschicken" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">
   
   <?php  }  if ($do == "edit")  { ?>

     <input class="buttons" type="submit" name="preview" accesskey="S" onclick="closeall(this.form)" value="Vorschau" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

   <input class="buttons" type="submit" name="send_postdata" accesskey="S" onclick="closeall(this.form)" value="Beitrag &auml;ndern" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">
   
   <?php  }  if ($do == "usercp")  { ?>

   <input class="buttons" type="submit" name="send_postdata" accesskey="S" onclick="closeall(this.form)" value="Signatur &auml;ndern" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">
   
   <?php  }  if ($do != "usercp" && $do != "edit" && $do != "newpm")  { ?>

    <input class="buttons" type="submit" name="preview" accesskey="S" onclick="closeall(this.form)" value="Vorschau" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

   <input class="buttons" type="submit" name="send_postdata" accesskey="S" onclick="closeall(this.form)" value="Beitrag absenden" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

   <?php  } ?>

   </center>

   <br>

   </td>

  </tr>

</form>

</table>

<?php  if ($do == "newpm" && $a_id != "")  { ?>

<script>

  var input = document.forms['bbform'].elements['message'];
  input.focus();

  pos = 0;

  input.selectionStart = pos;
  input.selectionEnd = pos;

</script>

<?php  } else  {  ?>

<script>


  var input = document.forms['bbform'].elements['message'];
  input.focus();

</script>


<?php   } 



