    <td align="center" class="tablea">

    <?php  echo"$row_smilies[code]"; ?>

    </td>  

    <td align="center" class="tableb">

    <img src="<?php  echo"$smilies_direction$row_smilies[smile_url]"; ?>" border="0"></a>

    </td>

    <td class="tablea" align="center">

    bearbeiten

    </td>

    <td class="tableb" align="center">

    <input type="checkbox">

    </td>

    <?php 

      $cols = "2"; 

      $countsm = $smilienumbers / $cols;
            
      for ($i = 1; $i <= $countsm; $i++)  {    

           $x = $cols * $i;

           if ($countrows == $x)  {

               echo"</tr><tr>";

           } 

      }

      ?>
