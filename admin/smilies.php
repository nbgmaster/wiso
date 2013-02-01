<?php  

  include("./templates/admin/smilies_top.php"); 

  $countrows="1";

  $query_smilies = mysql_query("SELECT * from $smilies_tblname Order by id");
  $smilienumbers = mysql_num_rows($query_smilies);

  while ($row_smilies = mysql_fetch_assoc($query_smilies))  {  

         include("./templates/admin/smilies.php"); 

         $countrows=$countrows + 1;
       
  }

  $allcols = $smilienumbers * 4;


  for ($colcount = 1; $colcount <= 1000; $colcount++)  { 

  $divisor = 8 * $colcount;

  if ($divisor <= $allcols) { $divisor2 = $divisor; }

  }

  $rest = $allcols - $divisor2; 
 
  for ($i = 1; $i <= $rest; $i++)  { 

       if ($i == "1" or $i == "3" or $i == "5" or $i == "7" or $i == "9" or $i == "11")  { 

           echo"<td class=\"tablea\">&nbsp;</td>";

       }

       else  {

           echo"<td class=\"tableb\">&nbsp;</td>";

       }

  } 

?>

  </tr>

</table>