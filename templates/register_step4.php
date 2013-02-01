<script>

function selectCB(idCB)  { 

CB = "checkbox_" + idCB;
CB2 = document.getElementById(CB);

 if (CB2.checked)  { CB2.checked = false; }
 else  { CB2.checked = true; }

}

</script>

<?php 

  $v_countC = "0";

  if ($_Sre_fDB == "")  {

      $Ay_fid[0] = "1"; $Ay_fid[1] = "12"; $Ay_fid[2] = "9"; $Ay_fid[3] = "10"; $Ay_fid[4] = "11"; $Ay_fid[5] = "31";

      $Ay_fid[6] = "58";

      if ($_Sre_semester == "1" && $_Sre_wisostudent == "1")  {
 
          $Ay_fid[7] = "30"; $Ay_fid[8] = "4"; $Ay_fid[9] = "3"; $Ay_fid[10] = "5"; $Ay_fid[11] = "6"; $Ay_fid[12] = "7"; $Ay_fid[13] = "8";

      }

  }

  else  {

      $Ay_fid = explode(",", $_Sre_fDB);

  }

  $qyCats = mysql_query("SELECT id, title from $c_tblname ORDER by position");

  include("usercp/edit_view_top.php");

  while ($rwCats = mysql_fetch_assoc($qyCats))  {   


         include("templates/usercp/view_categorys.php");


         $qyF = mysql_query("SELECT id, forum, status, description from $f_tblname WHERE cat = '$rwCats[id]' ORDER by position");

         echo"<table width=\"380\" cellpadding=\"3\" cellspacing=\"1\" border=\"0\" class=\"tableinborder\">";

         while ($rwF = mysql_fetch_assoc($qyF))  {

                if (in_array($rwF[id], $Ay_fid)) {  

                    $che_view = "checked";

                }

                else  {

                    $che_view = "";

                }

                echo"<tr><td class=\"tablea\" style=\"width:30px\" align=\"center\">";

                echo"<input type=\"checkbox\" id=\"checkbox_$rwF[id]\" class=\"checkbox\" value=\"$rwF[id]\" $che_view name=\"v_fid[$v_Cf]\"></td>";

                echo"<td class=\"tableb\" onclick=\"selectCB($rwF[id])\" onmouseover=\"this.className='mouseover';\" onmouseout=\"this.className='mouseout';\">$rwF[forum]</td></tr>";

                echo"<input type=\"hidden\" value=\"$rwCats[id]\" name=\"v_cid[]\">";

                $v_Cf++;

         }


         echo"</table><br>";

       //  if ($v_CountC > 4)  {  echo"<br>";  }

         $v_CountC++;


         if ($v_CountC == "5")  {

             echo"</td><td valign=\"top\" align=\"center\">";

         }

  }

  echo"</td></tr>";

  echo"</table>";

?>

<table width="<?php  echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tablea" align="center">

    <input type="hidden" name="Aprinciples" value="accept"> 

    <input type="submit" class="buttons" name="reg_TOstep5" value="Weiter zu Schritt 5" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

    </td>
 
  </tr>

</form>

</table>
