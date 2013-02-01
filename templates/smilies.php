    <td align="center">

    <a href="javascript:insert(' <?php  echo"$row_smilies[code]"; ?> ','','','','')">

    <img src="<?php  echo"$smilies_direction$row_smilies[smile_url]"; ?>" border="0"></a>

    </td>
    <?php 

      $cols = "4"; 
            
      for ($i = 1; $i <= $smilies_showstart; $i++)  {    

           $x = $cols * $i;

           if ($countrows == $x)  {

               echo"</tr><tr>";

           } 

      }
