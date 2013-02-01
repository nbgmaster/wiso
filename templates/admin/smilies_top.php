<script language="javascript" type="text/javascript">
<!--
function update_smiley(newimage)
{
	document.smiley_image.src = "./images/smiles/" + newimage;
}
//-->
</script>

<table cellpadding="4" cellspacing="1" border="0" width="<?php  echo"$width"; ?>" class="tableinborder">
   
<tr><td class="tablea">

<select name="smile_url" onchange="update_smiley(this.options[selectedIndex].value);">

<?php 

  $verz=opendir ('./images/smiles/');

  $countall = "0";

  while ($file = readdir ($verz)) { 

         $alreadythere = "0"; 

         if ($file == "Thumbs.db")  {

             $alreadythere = "1";
     
         } 

         if ($file != "." && $file != ".." && $alreadythere == "0")  {

             $countall = $countall + 1;
        
             echo '<option value="'.$file.'">'.$file.'</option>';

         }

  } 

  closedir($verz);

  if ($countall == "0")  {

      echo '<option value="none">keine neuen Smilies vorhanden</option>';

  }       

?>

</select>

&nbsp; <img name="smiley_image" src="./images/smiles/" border="0" alt="" />

</td>


    <td class="tableb">

    Alle Smilies müssen im Verzeichnis images/smiles liegen!

    </td>

  </tr>

</table>

<br>

<table cellpadding="4" cellspacing="1" border="0" width="<?php  echo"$width"; ?>" class="tableinborder">
   
  <tr>
