<script>

function selectCB(idCB)  { 

CB = "checkbox_" + idCB;
CB2 = document.getElementById(CB);

 if (CB2.checked)  { CB2.checked = false; }
 else  { CB2.checked = true; }

}

</script>

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="tableinborder">

    <form name="reg_form" action="index.php?do=update" method="post">

  <tr>

    

        <td class="catbg" align="left">



        <span class="big">

        <b>Forenupdate :: Individualisiere die Startseite des Forums</b>

        </span>



        </td>



  </tr>



</table>

<?php 

  $v_countC = "0";

  $Ay_fid[6] = "58";

  $qyCats = mysql_query("SELECT id, title from $c_tblname ORDER by position");

  include("usercp/edit_view_top.php");

  while ($rwCats = mysql_fetch_assoc($qyCats))  {   


         include("templates/usercp/view_categorys.php");


         $qyF = mysql_query("SELECT id, forum, status, description from $f_tblname WHERE cat = '$rwCats[id]' ORDER by position");

         echo"<table width=\"380\" cellpadding=\"3\" cellspacing=\"1\" border=\"0\" class=\"tableinborder\">";

         while ($rwF = mysql_fetch_assoc($qyF))  {

                $qy_vUex   = mysql_query("SELECT c, f from $view_tblname WHERE user = '$userdata_id'");

                while ($rw_vUex = mysql_fetch_assoc($qy_vUex))  {

                       $v_fid = $rw_vUex[f];
                       $v_cid = $rw_vUex[c];

                }

                $v_fid = explode(",", $v_fid);

                $v_cid = explode(",", $v_cid);

                if ( in_array($rwF[id], $Ay_fid) || in_array($rwF[id], $v_fid) ) {

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

         if ($v_CountC > 4)  {  echo"<br>";  } 

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

    <td class="tableb" align="center">

    <b><span style="font-size:13px"><span style="color:red">Hinweis:</span> Die Foreneinstellungen können jederzeit im Profil geändert werden.</span></b>

    </td>
 
  </tr>

</table>

<br>

<table width="<?php  echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">

  <tr>

    <td class="tablea" align="center">

    <input type="hidden" name="Aprinciples" value="accept">

    <input type="submit" class="buttons" name="upd_send_dataB" value="Daten speichern und fortfahren" onmouseover="this.className='mouseoverInput';" onmouseout="this.className='mouseoutInput';">

    </td>

  </tr>

</form>

</table>
