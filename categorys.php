<?php  


  if ($c != "")  { 

      $qyCats = mysql_query("SELECT id, title from $c_tblname WHERE id = '$c'");

  }

  else  {

      $qyCats = mysql_query("SELECT id, title from $c_tblname ORDER by position");

  }

  while ($rwCats = mysql_fetch_assoc($qyCats))  {  

         if ($c == "")  {

           if ($act_view == 1)  {

             if ($userdata_id == "")  {

                 $v_fid[0] = "1"; $v_fid[1] = "12"; $v_fid[2] = "9"; $v_fid[3] = "10"; $v_fid[4] = "11"; $v_fid[5] = "31";
                 $v_cid[0] = "1"; $v_cid[1] = "3";

             }

             else  {

                 $qy_vUex   = mysql_query("SELECT c, f from $view_tblname WHERE user = '$userdata_id'");

                 while ($rw_vUex = mysql_fetch_assoc($qy_vUex))  {

                        $v_fid = $rw_vUex[f];
                        $v_cid = $rw_vUex[c];

                 }

                 $v_fid = explode(",", $v_fid);

                 $v_cid = explode(",", $v_cid);

                 $hideres = mysql_query("SELECT COUNT( id ) AS hidecat_var from $hidecat_tblname WHERE catid = '$rwCats[id]' && user = '$userdata_id' LIMIT 1");
 
                 $hiderow = mysql_fetch_row( $hideres );

                 $hidecat_var = $hiderow[ 0 ];

             }


             if ( in_array($rwCats[id], $v_cid) )  {
 
                 include("main.php"); 

             }

           }

           else  {

               include("mainAll.php"); 

           }

         }

         else  {

                 include("mainC.php"); 

         }

  }

if ($userdata_id != "" && $c == "")  {

echo"<table cellspacing=\"0\" cellpadding=\"2\" width=\"100%\"><tr><td align=\"right\">";
echo"<a href=\"index.php?do=markread\"><u>alle ungelesenen Beitr&auml;ge als gelesen markieren</u></a></td></tr></table>";

}


  if ($c == "")  {

      if ($birthday_enable == "1")  {

          include("includes/birthday.php");

      }

      include("templates/footer_main.php");

      include("templates/footer_folders_main.php");

  }