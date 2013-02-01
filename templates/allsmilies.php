    <td align="center" class="tablec">

    <?php   $smilies_direction="images/templates/$template/smiles/"; ?>

    <img style="cursor:pointer;" src="<?php  echo"../$smilies_direction$row_smilies[smile_url]"; ?>" border="0" onClick="emotion(' <?php  echo"$row_smilies[code]"; ?> ', '')">

    </td>

    <?php 

      $cols = "4";
            
      for ($i = 1; $i <= $smilies_showstart; $i++)  {    

           $x = $cols * $i;

           if ($countrows == $x)  {

               echo"</tr><tr>";

           } 

      }