<script>

function selectCB(idCB)  { 

CB = "checkbox_" + idCB;
CB2 = document.getElementById(CB);

 if (CB2.checked)  { CB2.checked = false; }
 else  { CB2.checked = true; }

}

</script>

<?php  

  if ($module == "")  {

  $v_countC = "0"; 

  $v_Cf = "0";

  $qyCats = mysql_query("SELECT id, title from $c_tblname ORDER by position");

  include("./templates/usercp/edit_view_top.php");

  while ($rwCats = mysql_fetch_assoc($qyCats))  {   


         include("templates/usercp/view_categorys.php");


         $qyF = mysql_query("SELECT id, forum, status, description from $f_tblname WHERE cat = '$rwCats[id]' ORDER by position");

         echo"<table width=\"380\" cellpadding=\"4\" cellspacing=\"1\" border=\"0\" class=\"tableinborder\">";

         while ($rwF = mysql_fetch_assoc($qyF))  {

                $qy_vUex   = mysql_query("SELECT c, f from $view_tblname WHERE user = '$userdata_id'");

                while ($rw_vUex = mysql_fetch_assoc($qy_vUex))  {

                       $v_fid = $rw_vUex[f];
                       $v_cid = $rw_vUex[c];

                }

                $v_fid = explode(",", $v_fid);

                $v_cid = explode(",", $v_cid);

                if ( in_array($rwF[id], $v_fid) )  {

                     $proChT = "checked";

                }

                else  {

                     $proChT = "";
 
                }

                echo"<tr><td class=\"tablea\" style=\"width:30px\" align=\"center\">";

                echo"<input type=\"checkbox\" id=\"checkbox_$rwF[id]\" class=\"checkbox\" value=\"$rwF[id]\" $proChT name=\"v_fid[$v_Cf]\"></td>";

                echo"<td class=\"tableb\" onclick=\"selectCB($rwF[id])\" onmouseover=\"this.className='mouseover';\" onmouseout=\"this.className='mouseout';\">$rwF[forum]</td></tr>";

                echo"<input type=\"hidden\" value=\"$rwCats[id]\" name=\"v_cid[]\">";

                $v_Cf++;

         }


         echo"</table><br>";

      //   if ($v_CountC > 4)  {  echo"<br>";  }

         $v_CountC++;


         if ($v_CountC == "5")  {

             echo"</td><td valign=\"top\" align=\"center\">";

         }

  }

  echo"</td></tr>";

  echo"</table>";


  }


  if ($module == "change")  {

  if ($v_fid != "")  {

      $v_cou  = 0;    
      $v_cou2 = 0;
      $v_cid2[] = "";
      $v_cid4[] = "";

      foreach ($v_fid as $v_key => $v_fid2)  {

               $v_cid2[$v_cou] = $v_cid[$v_key];      
               $v_cou++;

      }


      foreach ($v_cid2 as $v_cid3)  {

               if (!in_array($v_cid3, $v_cid4) )  {

                   $v_cid4[$v_cou2] = $v_cid3;  
                   $v_cou2++;

               }

      }

      natsort($v_fid);
      natsort($v_cid4);

      $v_Cou1 = count($v_fid);
      $v_Cou2 = count($v_cid4);

      $v_Cou1x = "1";
      $v_Cou2x = "1";

      foreach ($v_fid as $v_fidDB)  {

               $v_fDB .= $v_fidDB;

               if ($v_Cou1 != $v_Cou1x)  {
       
                   $v_fDB .= ",";

               }

               $v_Cou1x++;

      }

      foreach ($v_cid4 as $v_cidDB)  {

               $v_cDB .= $v_cidDB;
     
               if ($v_Cou2 != $v_Cou2x)  {
        
                   $v_cDB .= ",";

               }

               $v_Cou2x++;

      }


      }

      else  {

          $v_cDB = ""; $v_fDB = "";

      }

      $qy_vUex = mysql_query("SELECT COUNT( id ) AS vUex from $view_tblname WHERE user = '$userdata_id' LIMIT 1");
 
      $vUexrow = mysql_fetch_row( $qy_vUex );

      $vUex = $vUexrow[ 0 ];

      if ($vUex > 0)  {

          $qy_Nview = "UPDATE $view_tblname SET c = '$v_cDB', f = '$v_fDB' WHERE user = '$userdata_id'";     

          mysql_query($qy_Nview) OR die(mysql_error());

      }

      else  {      

          $qy_Nview   = "INSERT into $view_tblname (c, f, user) ";
          $qy_Nview  .= "VALUES ('$v_cDB', '$v_fDB', '$userdata_id')";

          $result_Nview  = @mysql_query($qy_Nview) OR die(mysql_error());

      }

      $text01 = "&Auml;nderungen wurden gespeichert!";
      $link = "index.php?do=usercp&sec=edit_view";

      include("./templates/refresh.php");

  }
